<?php

function inserData($data){
    $host = "localhost";
    $user = "root";
    $pw = "";
    $dbname = "admin_develop";

    // Membuat koneksi PDO
    try {
        $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $pw);
        // Set mode error handling ke exception
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Persiapkan query insert
        $query = "INSERT INTO ratings (service_quality, staff_friendliness, service_expectation, service_speed, efficiency, overall_satisfaction, feedback) VALUES (:sq, :sf, :se, :ss, :e, :os, :f)";
        
        // Persiapkan statement
        $stmt = $pdo->prepare($query);

        // Bind parameter ke statement
        $stmt->bindParam(':sq', $data['sq']);
        $stmt->bindParam(':sf', $data['sf']);
        $stmt->bindParam(':se', $data['se']);
        $stmt->bindParam(':ss', $data['ss']);
        $stmt->bindParam(':e', $data['e']);
        $stmt->bindParam(':os', $data['os']);
        $stmt->bindParam(':f', $data['f']);

        // Eksekusi query
        $stmt->execute();

        echo '
        <script>
        alert("Terimakasih Atas Ratingnya :)");
        window.location.href = "rating.php";
        </script>
        ';
    } catch (PDOException $e) {
        echo "Koneksi gagal: " . $e->getMessage();
    }
}


if(isset($_POST['submit'])){
    $data = [
        'sq' => $_POST['service_quality'],
        'sf' => $_POST['staff_friendliness'],
        'se' => $_POST['service_expectation'],
        'ss' => $_POST['service_speed'],
        'e' => $_POST['efficiency'],
        'os' => $_POST['overall_satisfaction'],
        'f' => $_POST['feedback']
    ];
    inserData($data);
}else{
    echo "Gagal Memberi Rating";
}

?>