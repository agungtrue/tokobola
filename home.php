<?php
  session_start();
  include_once 'php/database.php';

  if(!isset($_SESSION['user'])) {
    header("Location: index.php");
  }

?>

<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" type="text/css" href="css/style1.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>


    <title>Home</title>
  </head>

    <body>
      <div id="container">
        <div id="header">
          <div class="logo">
          <a href="proses_login.php" id="logo"> <img src="image/logotokbol.png"/></a>
        </div>
          <div class="test">
            <b>Toko Bola Termurah dan Terpercaya!</b><br>
            <b>Ingat Bola? ingat TOKBOL</b>
          </div>
          <div class="pencarian">
            <div class="padding">
            <b>Pencarian</b>
            <input type="text" name="pencarian" value="" placeholder="Cari..."/>
            <input type="submit" class="" name="pencarian" value="Cari"/>
          </div>
          </div>
        </div>

        <div class="logout-user">
          <div class="user">
            <h4> Selamat Datang <span style="color:orange;"> <?=$_SESSION['user']['username']?></span> | <span style="color:orange;"> <?=$_SESSION['user']['email']?> </span></h4>
          </div>
          <form action="proses_logout.php">
            <button type="submit" class="btn btn-danger">LOG OUT</button>
          </form>
        </div><br>
        <hr>

      <div id="main">
        <div id="content">
          <div class="title">
          <h5><b>Toko Kami menyediakan berbagai macam kebutuhan peralatan sepak bola anda dengan berbagai merek dan harga yang terjangkau :)</b></h5>
          <h6>Temukan Kebutuhan anda di toko kami <span style="color: orange;"><?=$_SESSION['user']['username']?></span></h6>
        </div>
          <hr>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="image/ronaldo1.jpg" alt="...">
    </div>

    <div class="carousel-item">
      <img class="d-block w-100" src="image/hazard.jpg" alt="...">
    </div>

    <div class="carousel-item">
      <img class="d-block w-100" src="image/messi.jpg" alt="...">
    </div>

    <div class="carousel-item">
      <img class="d-block w-100" src="image/bola1.jpg" alt="...">
    </div>

    <div class="carousel-item">
      <img class="d-block w-100" src="image/neuer.jpg" alt="...">
    </div>
  </div>

    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>


  </div>



        <div id="menu">
          <br>
            <h5 class="tokbol"> Toko Bola </h5>
            <hr>
            <div class="list">
            <ul><br>
              <li><a href="product.php?kategori_id=1"><img src="image/bola.png">Bola</a></li><br>
              <li><a href="product.php?kategori_id=2"><img src="image/deker.png">Deker</a></li><br>
              <li><a href="product.php?kategori_id=3"><img src="image/jersey.png">Jersey</a></li><br>
              <li><a href="product.php?kategori_id=4"><img src="image/sepatu.png">Sepatu</a></li><br>
              <li><a href="product.php?kategori_id=5"><img src="image/kaoskaki.png">Kaos Kaki</a></li><br>
              <li><a href="product.php?kategori_id=6"><img src="image/sarungtangan.png">Sarung Tangan</a></li><br>
            </ul>
          </div>
        </div>
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
