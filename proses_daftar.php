<?php
  include_once 'php/database.php';

  $nama_lengkap = $_POST['nama_lengkap'];
  $email = $_POST['email'];
  $gender = $_POST['gender'];
  $alamat = $_POST['alamat'];
  $username = $_POST['username'];
  $password = $_POST['password'] !== '' ? md5($_POST['password']) : '';
  $password2 =  $_POST['password2'] !== '' ? md5($_POST['password2']) : '';

  // Required | harus di isi
  // Optional | bisa di isi atau tidak


  // if ($nama_lengkap == '') {
  //   echo "Silahkan di isi nama lengkap";
  // } elseif ($email == '') {
  //   echo "Silahkan di isi email";
  // } elseif ($gender == '') {
  //   echo "Silahkan di isi gender";
  // } elseif ($alamat == '') {
  //   echo "Silahkan di isi alamat";
  // } elseif ($username == '') {
  //   echo "Silahkan di isi username";
  // } elseif ($password == '') {
  //   echo "Silahkan di isi password";
  // } elseif ($password2 == '') {
  //   echo "Silahkan di isi password2";
  // } elseif ($password !== $password2) {
  //   echo "Password dan Ulangi Password harus sama";
  // } else {
  //   $seleksi = mysqli_query($koneksi, "SELECT id_member FROM member where username = '$username'");
  //   $isExist = mysqli_num_rows($seleksi);
  //   if(!$isExist) {
  //     $isi =  mysqli_query($koneksi, "INSERT INTO member (nama_lengkap, email, gender, alamat, username, password, password2)
  //     VALUES ('$nama_lengkap', '$email', '$gender', '$alamat', '$username', '$password', '$password2')");
  //     echo "Pendaftaran Anda Berhasil <br>";
  //     echo "Selamat Datang <b>$username</b> <br>";
  //     echo "Silahkan Login :) ";
  //   } else {
  //     echo "<p>Anda Sudah Terdaftar sebagai <b>$username</b>, <br> Silakan Login :)</p>";
  //   }
  // }





?>

<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> Website </title>
</head>
<body>

  <div id="container">
    <div id="header">
      <a href="index.php" id="logo"> <img src="image/logotokbol.png"/></a>
      <div class="selamat">
      </div>

    </div>

      <div id="content">
        <?php

        $Register = true;

        if ($nama_lengkap == '') {
          echo "Silahkan di isi nama lengkap";
          echo "<br/>";
          $Register = false;
        }
        if ($email == '') {
          echo "Silahkan di isi email";
          echo "<br/>";
          $Register = false;
        }
        if ($gender == '') {
          echo "Silahkan di isi gender";
          echo "<br/>";
          $Register = false;
        }
        if ($alamat == '') {
          echo "Silahkan di isi alamat";
          echo "<br/>";
          $Register = false;
        }
        if ($username == '') {
          echo "Silahkan di isi username";
          echo "<br/>";
          $Register = false;
        }
        if ($password == '') {
          echo "Silahkan di isi password";
          echo "<br/>";
          $Register = false;
        }
        if ($password2 == '') {
          echo "Silahkan di isi ulangi passwordnya";
          echo "<br/>";
          $Register = false;
        }
        if ($password !== $password2) {
          echo "<center><h1>Ulangi Password harus sama -_-<h1></center>";
          echo "<br/>";
          $Register = false;
        }


        if ($Register) {
            $seleksi = mysqli_query($koneksi, "SELECT id_member FROM member where username = '$username'");
            $isExist = mysqli_num_rows($seleksi);
            if(!$isExist) {
              $isi =  mysqli_query($koneksi, "INSERT INTO member (nama_lengkap, email, gender, alamat, username, password, password2)
              VALUES ('$nama_lengkap', '$email', '$gender', '$alamat', '$username', '$password', '$password2')");
              echo "<center><h1>Pendaftaran Anda Berhasil</h1></center>";
              echo "<center><h2>Selamat Datang <b><u>$username</u></b></h2></center>";
              echo "<center><h2>Silahkan Login :)</h2> </center>";
              echo '<img src="image/happy.png" style="width:80%; height:300px;"/>';
            } else {
              echo "<center><h2>Anda Sudah Terdaftar sebagai <q><u>$username</u></q> <br> Silakan Login :)</h2><center>";
              echo '<img src="image/yaoming.jpg" title="Udah daftar ngapain daftar lagi Coeg" style="width:70%; height:300px;"/>';

            }
        }

         ?>

      </div>





          <div id="footer">
            <hr>
      						<h5 class="h5">Follow Us </h5>
      						<ul id="icons">
                    <li><a href="#" target="_blank" class="normaltip" title="facebook"><img src="image/fb.png" style="height:31px; width:31px;" alt=""> </a></li>
                    <li><a href="#" target="_blank" class="normaltip" title="Instagram"><img src="image/ig.png" style="height:31px; width:31px;" alt=""> </a></li>
                    <li><a href="#" target="_blank" class="normaltip" title="Twitter"><img src="image/tw.png" style="height:31px; width:31px;" alt=""> </a></li>

      						</ul>
            <div class="copyright">
            Copyright &copy; 2017 Team Uler
            </div>

          </div>

  </div>


</body>
</html>
