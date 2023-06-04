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
    <link rel="stylesheet" href="Assets/css/Pengumuman.css">
    <title>Pengumuman</title>
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
                        <a class="nav-link active color-kuning" style="font-weight: bold;" href="./Pengumuman.html">Pengumuman</a>
                    </li>
                    <li class="nav-item ps-5">
                        <a class="nav-link " style="font-weight: bold;" href="./profile.php">Hi, <?php echo $row['nama']?></a>
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

    <div class="col mt-5">
        <div style="margin-left: 100px;" class="row">
            <h1 style="font-size: 32px; font-weight: 500;">Pengumuman Penerimaan UKM Tahun 2023 </h1>
            <h1 style="font-size: 24px; font-weight: 400; padding-top: 20px; margin-left: 10px;">Akan diadakan penerimaan anggota baru UKM di..</h1>
            <a style="text-decoration: none;" href="./selengkapnya.php"><h1 class="nav-link active color-kuning" style="font-size: 24px; font-weight: 400; margin-left: 22px;"> Selengkapnya >></h1></a> 
        </div><br>
        <div style="margin-left: 100px;" class="row">
            <h1 style="font-size: 32px; font-weight: 500;">Pengumuman Penerimaan UKM Tahun 2023 </h1>
            <h1 style="font-size: 24px; font-weight: 400; padding-top: 20px; margin-left: 10px;">Akan diadakan penerimaan anggota baru UKM di..</h1>
            <a style="text-decoration: none;" href="./selengkapnya.php"><h1 class="nav-link active color-kuning" style="font-size: 24px; font-weight: 400; margin-left: 22px;"> Selengkapnya >></h1></a> 
        </div><br>
        <div style="margin-left: 100px;" class="row">
            <h1 style="font-size: 32px; font-weight: 500;">Pengumuman Penerimaan UKM Tahun 2023 </h1>
            <h1 style="font-size: 24px; font-weight: 400; padding-top: 20px; margin-left: 10px;">Akan diadakan penerimaan anggota baru UKM di..</h1>
            <a style="text-decoration: none;" href="./selengkapnya.php"><h1 class="nav-link active color-kuning" style="font-size: 24px; font-weight: 400; margin-left: 22px;"> Selengkapnya >></h1></a> 
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