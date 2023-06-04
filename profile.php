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
    <link rel="stylesheet" href="assets/css/home.css">
    <link rel="stylesheet" href="/Assets/js/daftarlogin.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        .password-container {
            position: relative;
          }
          
          #toggle-password {
            position: absolute;
            top: 50%;
            right: 10px;
            transform: translateY(-50%);
            cursor: pointer;
          }
            @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap');
          body{
            font-family: 'Poppins';
          }
        @media only screen and (max-width: 1000px) {
  /* Tempatkan gaya CSS untuk tampilan mobile di sini */

  /* Contoh penggunaan */
  .jrk{
    margin-left: 150px;
  }

  /* Tambahkan gaya CSS lainnya sesuai kebutuhan */
}

    </style>
    <title>Profile</title>
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
                    <li class="nav-item ps-5 pe-5">
                        <a class="nav-link" style="font-weight: bold;" aria-current="page" href="./berandasetelahlogin.php">Beranda</a>
                    </li>
                    <li class="nav-item ps-5 pe-5">
                        <a class="nav-link" style="font-weight: bold;" href="./tentangUkm.php">Tentang UKM</a>
                    </li>
                    <li class="nav-item ps-5 pe-5">
                        <a class="nav-link" style="font-weight: bold;" href="./Pengumuman.php">Pengumuman</a>
                    </li>
                    <li class="nav-item ps-5">
                        <a class="nav-link active color-kuning" style="font-weight: bold;" href="#Masuk">Hi, <?php echo $row['nama']?></a>
                    </li>
                    <li class="nav-item">
                    <?php 
                        if( $row['nama'] == "Noe"){
                            echo '<img height="40px" src="./Assets/image/fotoNoe.png" alt="">';
                        } else {
                            echo '<img height="40px" src="./Assets/image/foto-user.png" alt="">';
                        }
                    ?>
                    

                    </li>

                </ul>
            </div>
        </div>
    </nav>
    
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4 ">
                <div class="d-flex justify-content-center">
                    <?php 
                        if( $row['nama'] == "Noe"){
                            echo '<img src="./Assets/image/fotoNoe.png" alt="">';
                        } else {
                            echo '<img src="./Assets/image/foto-user.png" alt="">';
                        }
                    ?>
                </div>
                <h4 class="text-center"><b><?php echo $row['nama']?></b> </h4>
                <div class="row">
                    <div class="col-3">
                        <img style="margin-left: 60px;" src="./Assets/image/icon_user.png" alt="">
                    </div>
                    <div class="col">
                        <h5 class="mt-3 color-kuning">Akun Profile</h5>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-3">
                        <img style="margin-left: 60px;" src="./Assets/image/icon_bell_notification.png" alt="">
                    </div>
                    <div class="col">
                        <h5 style="color: rgba(30, 30, 30, 0.49);" class="mt-3">Notifikasi</h5>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-3">
                        <img style="margin-left: 60px;" src="./Assets/image/icon_settings.png" alt="">
                    </div>
                    <div class="col">
                        <h5 style="color: rgba(30, 30, 30, 0.49);" class="mt-3">Pengaturan</h5>
                    </div>
                </div>
                <div class="row mt-5">
                    <a href="./index.html" class="col-3">
                        <img style="margin-left: 60px;" src="./Assets/image/icon_logout.png" alt="">
                    </a>
                    <a href="./index.html" class="col" style="text-decoration: none;">
                        <h5 style="color: rgba(30, 30, 30, 0.49);" class="mt-3">Keluar</h5>
                    </a>
                    
                </div>
                
            </div>
            <div class="col">
                <div class="mt-5 d-flex justify-content-center">
                <?php 
                        if( $row['nama'] == "Noe"){
                            echo '<img src="./Assets/image/fotoNoe.png" alt="">';
                        } else {
                            echo '<img src="./Assets/image/foto-user.png" alt="">';
                        }
                ?>
                </div>
                <h4 class="text-center"><b><?php echo $row['nama']?></b> </h4>
                <div class="row mt-5">
                    <div class="col-md-5">
                        <h5 class="mt-3" style="margin-left: 150px;">NIM</h5>
                    </div>
                    <div class="col">
                        <h5 class="mt-3 jrk">: <?php echo $row['nim']?></h5>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-5">
                        <h5 class="mt-3" style="margin-left: 150px;">Nama</h5>
                    </div>
                    <div class="col">
                        <h5 class="mt-3 jrk">: <?php echo $row['nama']?></h5>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-5">
                        <h5 class="mt-3" style="margin-left: 150px;">Program Studi</h5>
                    </div>
                    <div class="col">
                        <h5 class="mt-3 jrk">: <?php echo $row['program_studi']?></h5>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-5">
                        <h5 class="mt-3" style="margin-left: 150px;">Fakultas</h5>
                    </div>
                    <div class="col">
                        <h5 class="mt-3 jrk">: <?php echo $row['fakultas']?></h5>
                    </div>
                </div>
                <div class="d-flex justify-content-end mt-5" style="width:700px;">
                    <button class="btn me-3" style="background-color:aqua; color:white;">Edit</button>
                    <button class="btn btn-warning">Simpan</button>
                </div>
            </div>
        </div>
    </div>


    <footer class="mt-5">
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