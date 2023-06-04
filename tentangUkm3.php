<?php
require 'functions.php';
$result = mysqli_query($conn, "SELECT * FROM info_login WHERE id = 1");
if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_assoc($result);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./Assets/css/home.css">
    <link rel="stylesheet" href="/Assets/js/daftarlogin.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        @media only screen and (max-width: 800px) {
            /* Tempatkan gaya CSS untuk tampilan mobile di sini */

            /* Contoh penggunaan */

            input {
                max-width: 400px;
            }

            /* Tambahkan gaya CSS lainnya sesuai kebutuhan */
        }

    </style>

    <title>Tentang UKM</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary navigasi">
        <div class="container-fluid">
            <a class="navbar-brand logo" href="#"><img src=".//Assets/image/logo.png" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav m-auto menu">
                    <li class="nav-item ps-5 pe-5">
                        <a class="nav-link" aria-current="page" href="./berandasetelahlogin.php">Beranda</a>
                    </li>
                    <li class="nav-item ps-5 pe-5">
                        <a class="nav-link active color-kuning" href="#TentangUKM">Tentang UKM</a>
                    </li>
                    <li class="nav-item ps-5 pe-5">
                        <a class="nav-link" href="./Pengumuman.php">Pengumuman</a>
                    </li>
                    <li class="nav-item ps-5">
                        <a class="nav-link " style="font-weight: bold;" href="./profile.php">Hi, <?php echo $row['nama'] ?></a>
                    </li>
                    <li class="nav-item">
                        <?php
                        if ($row['nama'] == "Noe") {
                            echo '<img height="60px" src="./Assets/image/fotoNoe.png" alt="">';
                        } else {
                            echo '<img height="40px" src="./Assets/image/foto-user.png" alt="">';
                        }
                        ?>


                    </li>

                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row g-2">
            <div class="col-md-6 d-flex justify-content-start">
                <div>
                    <h3 style="font-family: 'Poppins';">UKM Terdaftar di Universitas Jambi</h3>
                </div>
            </div>
            <div class="col-md-6 d-flex justify-content-end">
                <div>
                    <form action="/search" method="GET">
                        <input style=" padding-left: 20px; width: 490px; height: 54px; border-radius: 18px;" type="search" name="query" placeholder="          Cari Berita UKM...">
                    </form>
                </div>
            </div>
        </div>
        <div class="container p-5">
            <div class="row">
                <div class="col">
                    <img src="./Assets/image/ukm1.png" alt="">
                </div>
                <div class="col-10">
                    <a style="text-decoration: none;" href="./mapala.php">
                        <h1>Mapala Universitas Jambi</h1>
                    </a>
                    <p>Mapala Unja adalah sebuah ukm yang berfokus pada kegiatan arung jeram dan pendakian gunung</p>
                    <a class="btn btn-warning" style="color: rgba(30, 30, 30, 0.73); font-size:20px;" href="./daftarUkm.php">Daftar Sekarang</a>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col">
                    <img src="./Assets/image/ukm2.png" alt="">
                </div>
                <div class="col-10">
                    <h1> UKM Cinema Universitas jambi</h1>
                    <p>UKM cinema Universitas Jambi adalah Unit kegiatan Mahasiswa untuk pembuatan film...</p>
                    <a class="btn btn-warning" style="color: rgba(30, 30, 30, 0.73); font-size:20px;" href="./daftarUkm.php">Daftar Sekarang</a>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col">
                    <img src="./Assets/image/ukm3.png" alt="">
                </div>
                <div class="col-10">
                    <h1>UKM Seni Budaya Melayu Universitas Jambi</h1>
                    <p>UKM seni budaya melayu Universitas jambi merupakan UKM yang berfokus pada kegiatan...</p>
                    <a class="btn btn-warning" style="color: rgba(30, 30, 30, 0.73); font-size:20px;" href="./daftarUkm.php">Daftar Sekarang</a>
                </div>
            </div>
        </div>
        <div style="padding-right:300px;" class="container d-flex justify-content-end">
            <div>
                <a href="./tentangUkm2.php" class="btn-prev"><button style="width: 80px; height: 50px; font-size:20px; background-color:orange; border-top-left-radius: 10px; border-bottom-left-radius: 10px;"> prev </button></a>
                
            </div>
        </div>
    </div>
    


    <footer style="margin-top: 20px;">
        <p style=" padding-top: 12px; padding-right: 50px;" class="footer"><em>Terintegrasi </em>- Universitas Jambi</p>
    </footer>
</body>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>

</html>