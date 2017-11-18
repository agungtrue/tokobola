<?php
  session_start();
  include_once 'php/database.php';




?>

<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" type="text/css" href="css/style1.css">
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
          <h5><b>Nike EPL 1 </b></h5>
          <h6></h6>
          <hr>

          <div class="item">
            <img src="image/ball1.png"><br><br>
            <p class="price"> Harga Rp.149.999 </p>


          </div>

          <div class="info">
            <p style="text-align:center;">Spesifikasi</p>
          </div>

          <div class="info">
            <p></p>
          </div>

          <div class="info">
            <table>
              <tr>
                <td>Nama Penjual</td>
                <td>:</td>
              </tr>
              <tr>
                <td>Alamat </td>
                <td>:</td>

              </tr>
              <tr>
                <td>No HP </td>
                <td>:</td>
              </tr>
              <tr>
                <td>E-Mail</td>
                <td>:</td>
              </tr>
            </table>
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
