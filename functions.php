<?php 
  $conn = mysqli_connect("localhost", "root", "","portal_ukm");

  function registrasi($data){
    global $conn;
    $nim = $data["nim"];
    $nama = $data["nama"];
    $program_studi = $data["program_studi"];
    $fakultas = $data["fakultas"];
    $password = $data["password"];

    mysqli_query($conn, "INSERT INTO user VALUES('','$nim','$nama','$program_studi','$fakultas','$password')");

    return mysqli_affected_rows($conn);

  }

  
?>