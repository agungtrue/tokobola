<?php
  session_start();
  include_once 'php/database.php';

  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = strip_tags($_POST['username']);
    $password = strip_tags($_POST['password']);

    $username = mysqli_real_escape_string($koneksi, $username);
    $password = mysqli_real_escape_string($koneksi, $password);

    $password = md5($password);

    $sql = "SELECT * FROM member WHERE username='$username' LIMIT 1";
    $query = mysqli_query($koneksi, $sql);
    $row = mysqli_fetch_array($query);
    if (count($row) > 0) {
      if ($password == $row['password']) {
        $_SESSION['user'] = $row;
        header("Location: home.php");
      } else {
        $password_error_message = "Password anda salah!";
      }
    } else {
      $username_error_message = "Username anda salah!";
    }

  }



?>



<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="css/style2.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> Website </title>
</head>
<body>

  <div id="container">
    <div id="header">
      <a href="index.html" id="logo"> <img src="image/logotokbol.png"/></a>
      <div class="selamat">
        <h4> Selamat Datang di Toko Bola </h4>
      </div>

    </div>

      <div id="content">
        <marquee scrollamount="12"><h4 style="color: orange;"> Temukan Kebutuhan Anda! Ingat bola? Ingat TOKBOL!!! </h4></marquee>
        <hr> <br>

        <video width="100%" height="50%" style="border:5px solid;" controls autoplay>
            <source src="video/video1.mp4" type="video/mp4">
            <source src="video/video1.ogg" type="video/ogg">
        </video>

      </div>

        <div id="main">
          <div class="login">
          <center>
          <h4> LOG IN </h4>
            <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
              Username <p style="color:white;  width:50%; background-color:red; text-align:center;"><?=isset($username_error_message) ? $username_error_message : ''?></p>
              <input type="text" name="username" placeholder="Username" value="" required/> <br><br>
              Password <p style="color:white; width:50%; background-color:red; text-align:center;"><?=isset($password_error_message) ? $password_error_message : ''?></p>
              <input type="password" name="password" placeholder="Password" value="" required/><br><br>
              <input class="masuk" type="submit" name="masuk" value="LOG IN" style="background-color:orange; color:white;"/>
            </form>
          </center>
          <br><br><hr>
          </div>

            <div class="daftar">
              <center><h4> REGISTER </h4></center>
                <form action="proses_daftar.php" method="post">
                  <div class="alert alert-error"> <?php  ?> </div>
                <table>
                  <tr>
                    <td>Nama Lengkap &emsp;</td>
                    <td><input type="text" name="nama_lengkap" placeholder="Nama Lengkap" value="" required/></td>
                  </tr>
                  <tr>
                    <td>E-mail</td>
                    <td><input type="text" name="email" placeholder="E-Mail" value="" required/></td>
                  </tr>
                  <tr>
                    <td>Jenis Kelamin</td>
                    <td>
                      <select class="gender" name="gender">
                        <option value="">--- Pilih Jenis Kelamin ---</option>
                        <option value="L">Laki-laki</option>
                        <option value="P">Perempuan</option>
                      </select>
                    </td>

                  </tr>
                  <tr>
                    <td>Alamat</td>
                    <td>
                      <textarea cols="20" rows="4" class="alamat" name="alamat" placeholder="Alamat Lengkap" required cols="30" rows="5"></textarea>
                    </td>
                  </tr>
                  <tr>
                    <td>Username</td>
                    <td><input type="text" name="username" placeholder="Username" value="" required/></td>
                  </tr>
                  <tr>
                    <td>Password</td>
                    <td><input type="password" name="password" placeholder="Password" value="" required/></td>
                  </tr>
                  <tr>
                    <td>Konfirmasi Password</td>
                    <td><input type="password" name="password2" placeholder="Konfirmasi Password" value="" required/></td>
                  </tr>
                  <tr>
                    <td colspan="2"> <br><br>
                    <input class="floatdaftar" type="submit" name="submit" value="REGISTER" style="background-color:orange; color:white;" /><br>
                    </td>
                  </tr>
                </table>
              </form>
            </div>
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
            Copyright &copy: 2017 Team Uler
            </div>

          </div>

  </div>


</body>
</html>
