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
    echo "Password dan Ulangi Password harus sama";
    echo "<br/>";
    $Register = false;
  }


  if ($Register) {
      $seleksi = mysqli_query($koneksi, "SELECT id_member FROM member where username = '$username'");
      $isExist = mysqli_num_rows($seleksi);
      if(!$isExist) {
        $isi =  mysqli_query($koneksi, "INSERT INTO member (nama_lengkap, email, gender, alamat, username, password, password2)
        VALUES ('$nama_lengkap', '$email', '$gender', '$alamat', '$username', '$password', '$password2')");
        echo "Pendaftaran Anda Berhasil <br>";
        echo "Selamat Datang <b>$username</b> <br>";
        echo "Silahkan Login :) ";
      } else {
        echo "<p>Anda Sudah Terdaftar sebagai <b>$username</b>, <br> Silakan Login :)</p>";
      }
  }


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
