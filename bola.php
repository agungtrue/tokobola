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
    <title>Bola</title>
  </head>

    <body>
      <div id="container">
        <div id="header">
          <div class="logo">
          <a href="home.php" id="logo"> <img src="image/logotokbol.png"/></a>
        </div>
          <div class="test">
            <b>Toko Bola Termurah dan Terpercaya!</b><br>
            <b>Ingat Bola? ingat TOKBOL</b>
          </div>
          <div class="pencarian">
            <div class="padding">
            <b>Pencarian</b>
            <input type="text" name="pencarian" value=""/>
            <input type="submit" class="" name="pencarian" value="Cari"/>
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
          <div class="title">
          <h5><b>Toko Kami menyediakan berbagai macam Bola dengan berbagai merek dan harga yang terjangkau :)</b></h5>
          <h6>Temukan Bola yang anda inginkan</h6>
        </div>
          <hr>

          <!-- main content bootstrap -->
          <div class="col-md-12">
            <div class="row">
              <div class="col-md-3">
                  <h4>Nike Epl</h4>
                  <img src="image/bola/bola11.jpg" alt="Nike EPL" style="width:180px; height:150px;">
                  <p class="price"> Harga : Rp.149.999 </p>
                  <button type="button" class="btn btn-sm btn-success" data toggle="modal" data-target="#"> <a class="link" href="nike-epl-1.php"> Selengkapnya</a> </button>
              </div>

              <div class="col-md-3">
                  <h4>Nike Epl</h4>
                  <img src="image/bola/bola.jpg" alt="Nike EPL" style="width:180px; height:150px;">
                  <p class="price"> Harga : Rp.149.999 </p>
                  <button type="button" class="btn btn-sm btn-success" data toggle="modal" data-target="#"> <a class="link" href="nike-epl-1.php"> Selengkapnya</a> </button>
              </div>

              <div class="col-md-3">
                  <h4>Nike Epl</h4>
                  <img src="image/bola/bola12.jpg" alt="Nike EPL" style="width:180px; height:150px;">
                  <p class="price"> Harga : Rp.149.999 </p>
                  <button type="button" class="btn btn-sm btn-success" data toggle="modal" data-target="#"> <a class="link" href="nike-epl-1.php"> Selengkapnya</a> </button>
              </div>

              <div class="col-md-3">
                  <h4>Nike Epl</h4>
                  <img src="image/bola/bola6.jpg" alt="Nike EPL"  style="width:180px; height:150px;">
                  <p class="price"> Harga : Rp.149.999 </p>
                  <button type="button" class="btn btn-sm btn-success" data toggle="modal" data-target="#"> <a class="link" href="nike-epl-1.php"> Selengkapnya</a> </button>
                  <br><br>
              </div>


              <div class="col-md-3">
                  <h4>Nike Epl</h4>
                  <img src="image/bola/bola7.jpg" alt="Nike EPL"  style="width:180px; height:170px;">
                  <p class="price"> Harga : Rp.149.999 </p>
                  <button type="button" class="btn btn-sm btn-success" data toggle="modal" data-target="#"> <a class="link" href="nike-epl-1.php"> Selengkapnya</a> </button>
              </div>

              <div class="col-md-3">
                  <h4>Nike Epl</h4>
                  <img src="image/bola/bola8.jpg" alt="Nike EPL"  style="width:180px; height:170px;">
                  <p class="price"> Harga : Rp.149.999 </p>
                  <button type="button" class="btn btn-sm btn-success" data toggle="modal" data-target="#"> <a class="link" href="nike-epl-1.php"> Selengkapnya</a> </button>
              </div>

              <div class="col-md-3">
                  <h4>Nike Epl</h4>
                  <img src="image/bola/bola9.jpg" alt="Nike EPL" style="width:180px; height:170px;">
                  <p class="price"> Harga : Rp.149.999 </p>
                  <button type="button" class="btn btn-sm btn-success" data toggle="modal" data-target="#"> <a class="link" href="nike-epl-1.php"> Selengkapnya</a> </button>
              </div>

              <div class="col-md-3">
                  <h4>Nike Epl</h4>
                  <img src="image/bola/bola13.jpg" alt="Nike EPL" style="width:180px; height:170px;">
                  <p class="price"> Harga : Rp.149.999 </p>
                  <button type="button" class="btn btn-sm btn-success" data toggle="modal" data-target="#"> <a class="link" href="nike-epl-1.php"> Selengkapnya</a> </button>
                  <br><br>
              </div>

            </div>
          </div>

          <!-- /main content bootstrap -->


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
          <div class="sosmed">
            <h5 class="h5">Follow Us</h5>
              <ul id="icons">
                <li><a href="#" target="_blank" class="normaltip" title="facebook"><img src="image/fb.png" style="height:31px; width:31px;" alt=""> </a></li>
                <li><a href="#" target="_blank" class="normaltip" title="Instagram"><img src="image/ig.png" style="height:31px; width:31px;" alt=""> </a></li>
                <li><a href="#" target="_blank" class="normaltip" title="Twitter"><img src="image/tw.png" style="height:31px; width:31px;" alt=""> </a></li>
              </ul>
          </div>

        <div class="alamat">
          <p><b>Head Office</b></p>
          <p>Jalan Sawo Kembar deket Masjid Al-Isslah , Kontrakan Jaka </p>
          <p>Click Here...  <a href="https://www.youtube.com/kontrakanproduction" target="_blank"> Kontrakan Production </a></p>
        </div>

      <div class="copyright">

    Copyright &copy: 2017 Team Uler
    </div>

        </div>




      </div>





    </body>

</html>
