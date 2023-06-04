<?php 
  require 'functions.php';
  if(isset($_POST["register"])){
    if(registrasi($_POST) > 0){
      echo "<script>
        alert('user baru berhasil di tambahkan!');
      </script>";
    } 
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
          
    </style>
    <title>Daftar Akun</title>
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
                        <a class="nav-link" href="./index.html">Beranda</a>
                    </li>
                    <li class="nav-item ps-5 pe-5">
                        <a class="nav-link" href="#TentangUKM">Tentang UKM</a>
                    </li>
                    <li class="nav-item ps-5 pe-5">
                        <a class="nav-link" href="#Pengumuman">Pengumuman</a>
                    </li>
                    <li class="nav-item ps-5 pe-5">
                        <a class="nav-link active color-kuning" aria-current="page" href="#">Daftar</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
    <div class="container mb-5">
        <section class="form-daftar m-auto mt-5">
            <div>
                <h3 style="text-align: center;"><b>Selamat Datang di Portal UKM se-UNJA Raya!</b></h3>
            </div>
            <form method="POST" class="mt-5 d-flex justify-content-center">
                <div style="width:450px;">
                    <h4 style="text-align:center">Daftar Akun</h4>

                <!-- Nim input -->
                <div class="form-outline mb-4">
                    <label class="form-label" for="form2Example1">NIM</label>
                    <input style="border: 1px solid #000000;" type="Text" name="nim" id="form2Example1" class="form-control" />
                </div>

                <!-- nama input -->
                <div class="form-outline mb-4">
                    <label class="form-label" for="form2Example2">Nama</label>
                    <input style="border: 1px solid #000000;" name="nama" type="Text" id="form2Example2" class="form-control" />
                </div>

                <!-- Program studi input -->
                <div class="form-outline mb-4">
                    <label class="form-label" for="form2Example1">Program Studi</label>
                    <input style="border: 1px solid #000000;" name="program_studi" type="Text" id="form2Example3" class="form-control" />
                </div>
                <!--  Fakultas input -->
                <div class="form-outline mb-4">
                    <label class="form-label" for="form2Example1">Fakultas</label>
                    <input style="border: 1px solid #000000;" name="fakultas" type="Text" id="form2Example4" class="form-control" />
                </div>
                <!-- password input -->
                <label class="form-label" for="password-input">Password</label>
                <div class="form-outline password-container">
                    <input style="border: 1px solid #000000;" name="password" class="form-control" type="password" id="password-input">
                    <i style="color:black" id="toggle-password" class="fa fa-eye-slash"></i>
                </div>

                    <!-- Submit button -->
                    <button type="submit" name="register" class="tombol-daftar  btn-block m-auto d-block mt-5 ">Daftar</button>

                    <div class="text-center">
                        <p>Sudah Punya Akun? <a href="./login.php" style="text-decoration: none;"><b>Masuk!</b></a></p>
                    </div>
                
            </form>
        </section>
    </div>


        <footer style="height:50px;" class="d-flex align-items-center justify-content-end">
            <h4>Universitas Jambi</h4>
        </footer>
</body>
<script>
    const passwordInput = document.getElementById('password-input');
const togglePassword = document.getElementById('toggle-password');

togglePassword.addEventListener('click', function() {
  if (passwordInput.type === 'password') {
    passwordInput.type = 'text';
    togglePassword.classList.remove('fa-eye-slash');
    togglePassword.classList.add('fa-eye');
  } else {
    passwordInput.type = 'password';
    togglePassword.classList.remove('fa-eye');
    togglePassword.classList.add('fa-eye-slash');
  }
});

</script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"
    integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS"
    crossorigin="anonymous"></script>

</html>