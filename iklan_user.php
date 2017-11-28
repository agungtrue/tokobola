<?php
  session_start();
  include_once 'php/database.php';




?>

<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" type="text/css" href="css/penjual.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nike EPL 1</title>
  </head>

    <body>
      <div id="container">
        <div id="header">
          <div class="logo">
          <a href="home.php" id="logo"> <img src="image/logotokbol.png"/></a>
        </div>
          <div class="test">

          </div>
          <div class="pencarian">
            <div class="padding">
            <b>Pencarian</b>
            <input type="text" name="pencarian" value=""/>
            <input type="submit" name="pencarian" value="Cari"/>
          </div>
          </div>
        </div>

        <div class="logout-user">
          <div class="user">
            <h4>  </h4>
          </div>
          <form action="proses_logout.php">
            <button type="submit" class="btn btn-danger" onclick="alert('Apa Anda yakin keluar?')">LOG OUT</button>
          </form>
        </div><br>
        <hr>

        <div id="content">
          <div class="penjual">
            <p>Anda bisa menjual berbagai macam kebutuhan Sepak Bola ke semua orang! Toko Bola memudahkan penjual dan pembeli. Isi form data penjual dengan baik dan benar.</p>
          </div>

          <div class="form-penjual">
          <form class="penjual" action="iklan_submit.php" method="post">
            <center>
              <table>
                <!--<tr>
                  <td>Nama Penjual</td>
                  <td>: &emsp;</td>
                  <td> <input type="text" name="nama_lengkap" value="" placeholder="Nama Lengkap" required>  </td>
                </tr>-->
                <tr>
                  <td>Nama Produk</td>
                  <td>:</td>
                  <td> <input type="text" name="nama_produk" value="" placeholder="Nama Produk" required> </td>
                </tr>
                <tr>
                  <td>Harga Produk</td>
                  <td>:</td>
                  <td> <input type="text" name="harga_produk" value="" placeholder="Harga Produk" required> </td>
                </tr>
                <tr>
                  <td>Foto Produk</td>
                  <td>:</td>
                  <td> <input type="file" name="images" value="" placeholder="Upload Foto Produk" required>  </td>
                </tr>
                <tr>
                  <td>Alamat</td>
                  <td>:</td>
                  <td> <input type="text" name="alamat" value="" placeholder="Alamat" required> </td>
                </tr>
                <tr>
                  <td>No HP</td>
                  <td>:</td>
                  <td> <input type="text" name="no_hp" value="" placeholder="No HP" required> </td>
                </tr>
                <tr>
                  <td>E-Mail</td>
                  <td>:</td>
                  <td> <input type="text" name="email" value="" placeholder="E-mail" required> </td>
                </tr>
                <tr>
                  <td>Spesifikasi</td>
                  <td>:</td>
                  <td> <textarea name="spesifikasi_produk" rows="8" cols="50" placeholder="Spesifikasi atau Keterangan..." required></textarea> </td>
                </tr>
              </table>
              <br>
              <input class="submit-iklan" type="submit" name="submit" value="Submit" style="background-color:orange;">
            </center>
          </form>
        </div>
        </div>



        <div id="menu">
          <br>
            <h5 class="tokbol"> Toko Bola </h5>
            <hr>

            <ul><br>
              <li><a href="bola.php"><img src="image/bola.png">Bola</a></li><br>
              <li><a href="deker.php"><img src="image/deker.png">Deker</a></li><br>
              <li><a href="jersey.php"><img src="image/jersey.png">Jersey</a></li><br>
              <li><a href="sepatu.php"><img src="image/sepatu.png">Sepatu</a></li><br>
              <li><a href="kaoskaki.php"><img src="image/kaoskaki.png">Kaos Kaki</a></li><br>
              <li><a href="sarungtangan.php"><img src="image/sarungtangan.png">Sarung Tangan</a></li><br>

            </ul>





        </div>

        <div id="footer">
          <hr>
          <h5 class="h5">Follow Us</h5>
            <ul id="icons">
              <li><a href="index.html" target="_blank" class="normaltip" title="facebook"><img src="image/fb.png" style="height:31px; width:31px;" alt=""> </a></li>
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
