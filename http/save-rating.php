<?php

$servername = "localhost"; // Ganti dengan nama server Anda

$username = "admin_develop"; // Ganti dengan username database Anda

$password = "J$y4g91x0"; // Ganti dengan password database Anda

$dbname = "admin_develop"; // Ganti dengan nama database Anda


// Membuat koneksi

$conn = new mysqli($servername, $username, $password, $dbname);


// Memeriksa koneksi

if ($conn->connect_error) {

    die("Connection failed: " . $conn->connect_error);

}


// Mengambil data dari form

$service_quality = $_POST['service_quality'];

$staff_friendliness = $_POST['staff_friendliness'];

$service_expectation = $_POST['service_expectation'];

$service_speed = $_POST['service_speed'];

$efficiency = $_POST['efficiency'];

$overall_satisfaction = $_POST['overall_satisfaction'];

$feedback = $_POST['feedback'];


// Menyimpan data ke dalam database

$sql = "INSERT INTO ratings (service_quality, staff_friendliness, service_expectation, service_speed, efficiency, overall_satisfaction, feedback) VALUES (?, ?, ?, ?, ?, ?, ?)";

$stmt = $conn->prepare($sql);

$stmt->bind_param("iiiiiss", $service_quality, $staff_friendliness, $service_expectation, $service_speed, $efficiency, $overall_satisfaction, $feedback);


if ($stmt->execute()) {

    echo "Rating submitted successfully!";

} else {

    echo "Error: " . $stmt->error;

}


$stmt->close();

$conn->close();

?>