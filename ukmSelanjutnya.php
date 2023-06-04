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
    <link rel="stylesheet" href="./Assets/css/home.css">
    <link rel="stylesheet" href="/Assets/js/daftarlogin.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    
    <title>Tentang UKM</title>
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
                        <a class="nav-link" aria-current="page" href="./berandasetelahlogin.php">Beranda</a>
                    </li>
                    <li class="nav-item ps-5 pe-5">
                        <a class="nav-link active color-kuning" href="#TentangUKM">Tentang UKM</a>
                    </li>
                    <li class="nav-item ps-5 pe-5">
                        <a class="nav-link" href="./Pengumuman.php">Pengumuman</a>
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

    <div class="container mb-5">
        <section class="form-daftar m-auto mt-5">
            <div>
                <h3 style="text-align: center;"><b>Daftar UKM</b></h3>
            </div>
            <form method="POST" class="mt-5 d-flex justify-content-center">
                <div style="width:450px;">

                <!-- Nim input -->
                <div class="mb-3">
                    <label for="formFile" class="form-label">Portofolio</label>
                    <input style="border: 1px solid #000000;" class="form-control" type="file" id="formFile">
                </div>

                <!-- nama input -->
                <div class="mb-3">
                    <label for="formFile" class="form-label">Syarat Ketentuan Lainnya</label>
                    <input style="border: 1px solid #000000;" class="form-control" type="file" id="formFile">
                </div>

                <div class="d-flex justify-content-end">
                    <a class="btn-kirim btn btn-warning" style="font-size: 20px;" href="./ukmSelanjutnya.php">Kirim</a>
                </div>  
                
            </form>
        </section>
    </div>


    


    <footer class="mt-5">
        <p style="padding-top: 12px; padding-right: 50px;" class="footer"><em>Terintegrasi </em>- Universitas Jambi</p>
    </footer>
</body>

<script>
    const btnKirim = document.querySelector('.btn-kirim')
    btnKirim.addEventListener('click', function(){
        alert('Terima kasih telah mendaftar. Pendaftaran anda akan segera di proses')
    })
</script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"
    integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS"
    crossorigin="anonymous"></script>

</html>