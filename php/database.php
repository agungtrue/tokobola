<?php
  $DB_SERVER = 'localhost';
  $DB_USERNAME = 'root';
  $DB_PASSWORD = '';
  $DB_DATABASE = 'tokobola';

  $koneksi = mysqli_connect($DB_SERVER, $DB_USERNAME, $DB_PASSWORD);
  $database = mysqli_select_db($koneksi, $DB_DATABASE);

  /*if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    if ($_POST['password'] == $_POST['password2']) {

      $username = $mysqli->real_escape_string($_POST['username']);
      $email = $mysqli->real_escape_string($_POST['email']);
      $gender = $mysqli->real_escape_string($_POST['gender']);
      $alamat = $mysqli->real_escape_string($_POST['alamat']);
      $password = $mysqli->real_escape_string($_POST['password']);
      $gender = $mysqli->real_escape_string($_POST['gender']);


    }
  }*/

?>
