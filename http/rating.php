<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Enzo admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Enzo admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="../assets/images/favicon/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="../assets/images/favicon/favicon.png" type="image/x-icon">
    <title>Feedback - Division IT</title>
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/font-awesome.css">
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="../assets/css/responsive.css">
    <style type="text/css">
        body {
            text-align: center;
            font-family: work-Sans, sans-serif;
            background-color: #f6f7fb;
            display: block;
            width: 650px;
            padding: 0 12px;
        }
        ul {
            margin: 0;
            padding: 0;
        }
        li {
            display: inline-block;
            text-decoration: unset;
        }
        a {
            text-decoration: none;
        }
        p {
            margin: 15px 0;
        }
        h5 {
            color: #444;
            text-align: left;
            font-weight: 400;
        }
        .text-center {
            text-align: center
        }
        .title {
            color: #444444;
            font-size: 22px;
            font-weight: bold;
            margin-top: 10px;
            margin-bottom: 10px;
            padding-bottom: 0;
            text-transform: uppercase;
            display: inline-block;
            line-height: 1;
        }
        table {
            margin-top: 30px
        }
        table.top-0 {
            margin-top: 0;
        }
        table.order-template {
            border: 1px solid #eeeeee;
            border-collapse: collapse;
        }
        table.order-template tr:nth-child(even) {
            border-top: 1px solid #eeeeee;
            border-bottom: 1px solid #eeeeee;
        }
        table.order-template tr:nth-child(odd) {
            border-bottom: 1px solid #eeeeee;
        }
        .pad-left-right-space {
            border: unset !important;
        }
        .pad-left-right-space td {
            padding: 5px 15px;
        }
        .pad-left-right-space td p {
            margin: 0;
        }
        .pad-left-right-space td b {
            font-size: 15px;
            font-family: work-Sans, sans-serif;
        }
        .order-template th {
            font-size: 16px;
            padding: 15px;
            text-align: left;
            background: #fafafa;
        }
        .footer-social-icon tr td img {
            margin-left: 5px;
            margin-right: 5px;
        }
        .temp-social td {
            display: inline-block;
        }
        .temp-social td i {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #3e5fce;
            border: 1px solid #3e5fce;
            transition: all 0.5s ease;
        }
        .temp-social td i:hover {
            background-color: #3e5fce;
            color: #ffffff;
        }
        .temp-social td:nth-child(n+2) {
            margin-left: 15px;
        }
        .main-bg-light {
            background-color: rgba(62, 95, 206, 0.03);
            border-radius: 15px;
        }
        @media only screen and (max-width: 767px) {
            body {
                width: 90%;
            }
            .temp-social td i {
                width: 32px !important;
                height: 32px !important;
            }
            .temp-social td:nth-child(n+2) {
                margin-left: 6px !important;
            }
        }
        @media only screen and (max-width: 575px) {
            body {
                width: 90%;
            }
            .order-template tbody tr:nth-child(n+2) td img {
                width: 40px;
            }
            .order-template tbody tr td:nth-child(3),
            .order-template tbody tr th:nth-child(3) {
                display: none;
            }
            .order-template tbody tr td,
            .order-template tbody tr th {
                width: 50px;
            }
            .content-detail tbody tr {
                display: flex;
                flex-wrap: wrap;
                justify-content: center;
            }
            .content-detail tbody tr td:nth-child(2) {
                display: none;
            }
            table tbody td > table:first-child {
                text-align: center !important;
            }
        }
        @media only screen and (max-width: 480px) {
            body {
                width: 92%;
            }
            .order-template th,
            .order-template td h5 {
                font-size: 13px !important;
            }
            table.main-section {
                padding: 0 12px 22px !important;
                width: 80% !important;
            }
        }
        @media only screen and (max-width: 360px) {
            .order-template th,
            .order-template td h5 {
                font-size: 12px !important;
            }
            .order-template tbody tr td {
                padding-left: 0 !important;
            }
            .order-template tbody tr:nth-child(n+2) td img {
                width: 34px;
            }
            .order-template tr th:nth-child(n+2) {
                padding-left: 0 !important;
            }
        }
        .star {
            font-size: 30px;
            cursor: pointer;
            color: gray;
        }
        .star.checked {
            color: gold;
        }
        #star-rating {
            display: flex; /* Menggunakan Flexbox */
            justify-content: flex-start; /* Mengatur bintang agar berada di sebelah kiri */
        }
        #star-rating .star {
            margin-right: 10px; /* Atur jarak antar bintang di sini */
            font-size: 36px; /* Ukuran bintang, bisa disesuaikan */
            color: #ccc; /* Warna bintang default */
            cursor: pointer; /* Menunjukkan bahwa bintang dapat diklik */
        }
        #star-rating .star:hover,
        #star-rating .star:hover ~ .star {
            color: gold; /* Warna bintang saat hover */
        }
        #star-rating .star.selected,
        #star-rating .star.selected ~ .star {
            color: gold; /* Warna bintang saat dipilih */
        }
    </style>
</head>
<body style="margin: 20px auto;">
    <table class="main-section" align="center" border="0" cellpadding="0" cellspacing="0" style="padding: 0 30px;background-color: #fff; -webkit-box-shadow: 0px 0px 14px -4px rgba(0, 0, 0, 0.2705882353);box-shadow: 0px 0px 14px -4px rgba(0, 0, 0, 0.2705882353);width: 100%; border-radius:10px; padding-bottom:30px;">
        <tbody>
            <tr>
                <td>
                    <table align="left" border="0" cellpadding="0" cellspacing="0" style="text-align: left;" width="100%">
                        <tbody>
                            <tr>
                                <td style="text-align: center;"><img src="../assets/images/email-template/delivery-2.png" alt="" style=";margin-bottom: 30px;border-radius:10px;"></td>
                            </tr>
                            <tr>
                                <td>
                                    <p style=" font-size: 14px; color:#717171;">
                                        <h4>Hi Sahabat Gacoan,</h4>
                                    </p>
                                    <p style=" font-size: 14px; color:#717171;">Kami dari Divisi IT ingin terus berinovasi dan memberikan pelayanan terbaik untuk kalian semua. Untuk itu, kami butuh bantuan dan masukan dari kalian! Mohon luangkan sedikit waktu untuk mengisi kuisioner berikut:,</p>
                                    <p style=" font-size: 14px; color:#717171;">Masukan dari kalian sangat berarti untuk kemajuan Divisi IT agar lebih baik lagi ke depannya. Terima kasih banyak atas partisipasinya! </p>
                                    <p style=" font-size: 14px; color:#717171;"><b><i>#ITLebihBaik #GacoanBersamaIT</i></b></p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <form method="POST" action="save-rating.php">
                        <table class="order-template" border="0" cellpadding="0" cellspacing="0" align="left" style="width: 100%; margin-bottom: 50px;">
                            <tbody>
                                <tr align="left">
                                    <th style="padding-left: 15px;">Pertanyaan</th>
                                    <th></th>
                                    <th>Rating </th>
                                </tr>
                                <tr>
                                    <td valign="top" style="padding-left: 15px;">
                                        <h5 style="margin-top: 15px;">Bagaimana penilaian Anda terhadap kualitas layanan yang diberikan?</h5>
                                    </td>
                                    <td valign="top" style="padding-left: 15px;"></td>
                                    <td valign="top" style="padding-left: 15px;">
                                        <div id="star-rating">
                                            <span class="star" data-value="1">&#9733;</span>
                                            <span class="star" data-value="2">&#9733;</span>
                                            <span class="star" data-value="3">&#9733;</span>
                                            <span class="star" data-value="4">&#9733;</span>
                                            <span class="star" data-value="5">&#9733;</span>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top" style="padding-left: 15px;">
                                        <h5 style="margin-top: 15px;">Sejauh mana staf kami membantu Anda dengan ramah dan profesional?</h5>
                                    </td>
                                    <td valign="top" style="padding-left: 15px;"></td>
                                    <td valign="top" style="padding-left: 15px;">
                                        <div id="star-rating">
                                            <span class="star" data-value="1">&#9733;</span>
                                            <span class="star" data-value="2">&#9733;</span>
                                            <span class="star" data-value="3">&#9733;</span>
                                            <span class="star" data-value="4">&#9733;</span>
                                            <span class="star" data-value="5">&#9733;</span>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top" style="padding-left: 15px;">
                                        <h5 style="margin-top: 15px;">Apakah layanan yang diberikan sesuai dengan harapan Anda?</h5>
                                    </td>
                                    <td valign="top" style="padding-left: 15px;"></td>
                                    <td valign="top" style="padding-left: 15px;">
                                        <div id="star-rating">
                                            <span class="star" data-value="1">&#9733;</span>
                                            <span class="star" data-value="2">&#9733;</span>
                                            <span class="star" data-value="3">&#9733;</span>
                                            <span class="star" data-value="4">&#9733;</span>
                                            <span class="star" data-value="5">&#9733;</span>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top" style="padding-left: 15px;">
                                        <h5 style="margin-top: 15px;">Seberapa cepat proses pelayanan yang Anda terima?</h5>
                                    </td>
                                    <td valign="top" style="padding-left: 15px;"></td>
                                    <td valign="top" style="padding-left: 15px;">
                                        <div id="star-rating">
                                            <span class="star" data-value="1">&#9733;</span>
                                            <span class="star" data-value="2">&#9733;</span>
                                            <span class="star" data-value="3">&#9733;</span>
                                            <span class="star" data-value="4">&#9733;</span>
                                            <span class="star" data-value="5">&#9733;</span>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top" style="padding-left: 15px;">
                                        <h5 style="margin-top: 15px;">Apakah prosesnya efisien dan tidak membuang waktu Anda?</h5>
                                    </td>
									<td valign="top" style="padding-left: 15px;"></td>
                                    <td valign="top" style="padding-left: 15px;">
                                        <div id="star-rating">
                                            <span class="star" data-value="1">&#9733;</span>
                                            <span class="star" data-value="2">&#9733;</span>
                                            <span class="star" data-value="3">&#9733;</span>
                                            <span class="star" data-value="4">&#9733;</span>
                                            <span class="star" data-value="5">&#9733;</span>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top" style="padding-left: 15px;">
                                        <h5 style="margin-top: 15px;">Secara keseluruhan, seberapa puas Anda dengan pengalaman Anda?</h5>
                                    </td>
									<td valign="top" style="padding-left: 15px;"></td>
                                    <td valign="top" style="padding-left: 15px;">
                                        <div id="star-rating">
                                            <span class="star" data-value="1">&#9733;</span>
                                            <span class="star" data-value="2">&#9733;</span>
                                            <span class="star" data-value="3">&#9733;</span>
                                            <span class="star" data-value="4">&#9733;</span>
                                            <span class="star" data-value="5">&#9733;</span>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top" style="padding-left: 15px;">
                                        <h5 style="margin-top: 15px;">Berikan masukan anda untuk membangun kami agar lebih baik di kemudian hari</h5>
                                        <textarea rows="4" cols="50" placeholder="" style="margin-top: 0px; width: 100%; padding: 10px; border: 1px solid #ccc; resize: vertical; margin-bottom: 15px;"></textarea><br>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="btn-showcase">
                         <button class="btn btn-square btn-primary" type="button">Kirim Feedback</button>
                        </div>
                    </form>
                    <table class="temp-social main-bg-light text-center" align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="margin-top:30px;">
                        <tbody>
                            <tr>
                                <td style="padding: 30px;">
                                    <div style="border-top: 1px solid #eeeeee; margin: 20px auto 0;"></div>
                                    <table border="0" cellpadding="0" cellspacing="0" width="100%" style="margin: 20px auto 0;">
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <p style="font-size:14px; margin:8px 0; color:#717171;">2025 Copy Right by MieGacoan</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><a href="javascript:void(0)" style="color: #3e5fce;font-size: 14px;text-transform: capitalize;font-weight:600; margin:0;"> by PT Pesta Pora Abadi</a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
        </tbody>
    </table>
    <script>
        // Mendapatkan semua elemen bintang
        const stars = document.querySelectorAll('.star');

        // Menambahkan event listener untuk setiap bintang
        stars.forEach(star => {
            star.addEventListener('click', setRating);
        });

        function setRating(e) {
            // Mengambil nilai dari bintang yang diklik
            const selectedRating = e.currentTarget.getAttribute('data-value');

            // Menghapus kelas 'checked' dari semua bintang
            stars.forEach(star => {
                star.classList.remove('checked');
            });

            // Menambahkan kelas 'checked' pada bintang yang dipilih dan sebelumnya
            stars.forEach(star => {
                if (star.getAttribute('data-value') <= selectedRating) {
                    star.classList.add('checked');
                }
            });
        }
    </script>
</body>
</html>