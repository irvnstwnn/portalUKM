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
    <link rel="stylesheet" href="Assets/css/tentangUKM.css">
    <title>PortalUKM</title>
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

    <div class="d-flex justify-content-center">
        <h2 style="font-size: 40px; font-weight: 500;">UKM Mapala Universitas Jambi</h2>
    </div><br>

    <div class="d-flex justify-content-center">
        <div  class="containers" style="width: 37%;">
        </div>
    </div><br>

    <div class="d-flex justify-content-center">
        <div style="width: 80%;">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae quae beatae labore sint rem qui sed incidunt voluptatibus similique illum quisquam nesciunt sit magni esse nisi libero, quas autem quasi! Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci ratione soluta voluptatibus porro veniam illum rerum quae dolorum nobis, culpa odio quasi deleniti ipsum facere, voluptas iure modi obcaecati et? Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum, et. Laborum, ratione mollitia odio a blanditiis adipisci sit velit distinctio placeat nesciunt harum voluptate ab esse temporibus reiciendis explicabo error!
            Velit aut numquam illo, quas maiores labore sapiente, quam praesentium ipsa molestiae nesciunt quia iure doloremque ratione est qui rem! Dolorum assumenda corrupti exercitationem consequatur. Neque repellat quaerat suscipit voluptatem.
            Beatae repellat sint suscipit quibusdam distinctio, eius modi accusamus, perspiciatis totam explicabo, aliquam harum nemo provident nulla quasi ullam libero similique rerum ea illo. Magni ut rem doloremque error delectus!
        </div>
    </div>

    <div class="d-flex justify-content-center">
        <h1 style="font-size: 32px; font-weight: 500;">PENGURUS INTI</h1>
    </div>

    <div style="margin-left: 400px;" class="col">
        <div class="row">
            <h1 style="font-size: 32px; font-weight: 500;">Ketua </h1>
            <h1 style="font-size: 24px; font-weight: 400;">Arslan Pratama</h1>
        </div><br>
        <div class="row">
            <h1 style="font-size: 32px; font-weight: 500;">Wakil Ketua </h1>
            <h1 style="font-size: 24px; font-weight: 400;">Lucky Ai</h1>
        </div><br>
        <div class="row">
            <h1 style="font-size: 32px; font-weight: 500;">Devisi Media dan Teknologi </h1>
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