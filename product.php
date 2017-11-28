<?php
  session_start();
  include_once 'php/database.php';

  $kategori_id = $_GET['kategori_id'];

  $sql = "SELECT * FROM `produk` WHERE id_kategori_produk = $kategori_id";
  $query = mysqli_query($koneksi, $sql);
  $produk = [];
  while ($row = mysqli_fetch_array($query)) {
    $produk[] = $row;
  }

  $sql = "SELECT * FROM `kategori_produk`";
  $query = mysqli_query($koneksi, $sql);
  $kategori_produk = [];
  while ($row = mysqli_fetch_array($query)) {
    $kategori_produk[] = $row;
  }





?>

<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" type="text/css" href="css/style1.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <meta charset="utf-8">
    <title>Produk</title>
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
            Anda Bisa menjual untuk orang banyak, <a href="iklan_user.php"> Klik Disini!!!</a>
          </div>
          <form action="proses_logout.php">
            <button type="submit" class="btn btn-danger" onclick="alert('Apa Anda yakin keluar?')">LOG OUT</button>
          </form>
        </div><br>
        <hr>

        <div id="content">
          <div class="title">
          <h5><b>Toko Kami menyediakan berbagai macam kebutuhan Sepak Bola dengan berbagai merek dan harga yang terjangkau :)</b></h5>
          <h6>Temukan Bola yang anda inginkan</h6>
        </div>
          <hr>

          <!-- main content bootstrap -->
          <div class="col-md-12">
            <div class="row">
              <?php
                foreach ($produk as $key => $item_produk) {
              ?>
              <div class="col-md-3">
                  <h4> <?= $item_produk['nama_produk'] ?> </h4>
                  <img src="<?= $item_produk['images'] ?>" alt="Nike EPL" style="width:180px; height:150px;">
                  <p class="price"> Harga : Rp <?= $item_produk['harga_produk'] ?> </p>
                  <button type="button" class="btn btn-sm btn-success" data toggle="modal" data-target="#"> <a class="link" href="nike-epl-1.php"> Selengkapnya</a> </button>
              </div>
              <?php
                }
              ?>
            </div>
          </div>

          <!-- /main content bootstrap -->


        </div>



        <div id="menu">
          <br>
            <h5 class="tokbol"> Toko Bola </h5>
            <hr>

            <ul><br>
              <?php
                foreach ($kategori_produk as $key => $item_kategori_produk) {
               ?>
              <li><a href="product.php?kategori_id=<?= $item_kategori_produk['id'] ?>"> <img src="<?= $item_kategori_produk['images'] ?>"> <?= $item_kategori_produk['nama_kategori']?></a></li><br>
              <?php
                }
               ?>
            <br>
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
