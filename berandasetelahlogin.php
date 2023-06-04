<?php 
  require 'functions.php';
  $result = mysqli_query($conn, "SELECT * FROM info_login WHERE id = 1");
  if(mysqli_num_rows($result) == 1){
    $row = mysqli_fetch_assoc($result);

  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./Assets/css/berandasetelahlogin.css">
    <style>
        @media only screen and (max-width: 1000px) {
  /* Tempatkan gaya CSS untuk tampilan mobile di sini */

  /* Contoh penggunaan */
  footer {
    margin-top: 300px;
  }

  /* Tambahkan gaya CSS lainnya sesuai kebutuhan */
}

    </style>
    <title>Beranda</title>
</head>

<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary navigasi">
        <div class="container-fluid">
            <a class="navbar-brand logo" href="#"><img src=".//Assets/image/logo.png" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav m-auto menu">
                    <li class="nav-item ps-5 pe-5 ">
                        <a class="nav-link active color-kuning" style="font-weight: bold;" aria-current="page" href="#Beranda">Beranda</a>
                    </li>
                    <li class="nav-item ps-5 pe-5">
                        <a class="nav-link" style="font-weight: bold;" href="./tentangUkm.php">Tentang UKM</a>
                    </li>
                    <li class="nav-item ps-5 pe-5">
                        <a class="nav-link" style="font-weight: bold;" href="./Pengumuman.php">Pengumuman</a>
                    </li>
                    <li class="nav-item ps-5">
                        <a class="nav-link" style="font-weight: bold;" href="./profile.php">Hi, <?php echo $row['nama']?></a>
                    </li>
                    <li class="nav-item">
                    <?php 
                        if( $row['nama'] == "Noe"){
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

    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-7 mb-5">
                <h1>Mari Bergabung Bersama Kami</h1>
                <p style="font-size: 20px; font-weight: 400; line-height: 30px; margin-top: 50px;">Team Portal UKM memperkenalkan Mahasiswa untuk bergabung <br> bersama UKM yang ada di Universitas Jambi dengan lebih cepat dan <br> efektif. Mari bersama mengembangkan pengetahuan, kreatifitas, <br> kekuatan, dan kecerdasanmu untuk menuju proses yang lebih besar!</p>
            </div>
            <div class="col-1">
            </div>
            <div class="col-4">
                <img style="width: 353px; height: 276px;" src="./Assets/image/hadeuh.png" alt="">
            </div>
        </div>
    </div>

    <div style="margin-top: 100px; height: 500px;" class="d-flex justify-content-center">
        <div class="containers">
            <h1 class="mt-5 mb-5" style="color:black; text-align:center;">Status UKM Universitas Jambi</h1>
            <div class="row">
                <div class="col-md-4 mb-5">
                    <div class="d-flex justify-content-center">
                        <img src="./Assets/image/icon _bookmark book_.png" alt="">
                    </div>
                    <h1 class="text-center">26 UKM Terdaftar</h1>
                </div>
                <div class="col-md-4 mb-5">
                    <div class="d-flex justify-content-center">
                        <img src="./Assets/image/icon _userss.png" alt="">
                    </div>
                    <h1 class="text-center">1 Ribu Mahasiswa Terdaftar</h1>
                </div>
                <div class="col-md-4 mb-5">
                    <div class="d-flex justify-content-center">
                        <img src="./Assets/image/icon _stats report_.png" alt="">
                    </div>
                    <h1 class="text-center">+100 Prestasi tercatat</h1>
                </div>
                
            </div>
        </div>
    </div>

    <!-- <div class="container">
        <div style="margin-top: -430px;" class="row">
            <div class="col d-flex justify-content-center">
                <h1>Status UKM Universitas Jambi</h1>
            </div>
        </div>
    </div>
    <div style="margin-top: 80px;" class="row">
        <div class="col d-flex justify-content-center">
            <img src="./Assets/image/icon _bookmark book_.png" alt="">
        </div>
        <div class="col d-flex justify-content-center">
            <img src="./Assets/image/icon _userss.png" alt="">
        </div>
        <div class="col d-flex justify-content-center">
            <img src="./Assets/image/icon _stats report_.png" alt="">
        </div>
    </div>
    <div style="margin-top: 0px;" class="row">
        <div class="col text-center">
            <h1 style="font-size: 32px; font-weight: 500;">26 UKM Terdaftar</h1>
        </div>
        <div class="col text-center">
            <h1 style="font-size: 32px; font-weight: 500;">1 Ribu Mahasiswa Terdaftar</h1>
            <h2 style="font-size: 20px; font-weight: 400; margin-top: 30px;">Sumber Data</h2>
        </div>
        <div class="col text-center">
            <h1 style="font-size: 32px; font-weight: 500;">+100 Prestasi tercatat</h1>
        </div>
    </div> -->

           
    <footer>
        <p style="padding-top: 12px; padding-right: 50px;" class="footer"><em>Terintegrasi </em>- Universitas Jambi</p>
    </footer>

</body>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"
    integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS"
    crossorigin="anonymous"></script>

</html>