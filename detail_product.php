<?php
session_start();
include_once 'php/database.php';

$kategori_id = $_GET['kategori_id'];


$sql = "SELECT * FROM `produk` WHERE id = $kategori_id";
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
    <link rel="stylesheet" type="text/css" href="css/style-3.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nike EPL 1</title>

    <style media="screen">
      .info-penjual td {padding: 10px;}
    </style>

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
          <?php
            foreach ($produk as $key => $item_produk) {
          ?>

          <div class="item">
            <center>
            <h5><h3> <?= $item_produk['nama_produk'] ?> </h3> </b></h5>
            <img src="<?= $item_produk['images'] ?>"><br><br>
            <p class="price" style=""> <b> Rp. <?= $item_produk['harga_produk'] ?> </b> </p>
          </center>
          </div>


          <div class="info-spesifikasi">
            <p style="text-align:center;"> <?= $item_produk['spesifikasi_produk'] ?> </p>
          </div>

          <div class="info-ket">
            <img src="image/attention.png" alt="" style="width:50px; height:50px; margin:0px;">
            <p>  <q> Mohon untuk berhati-hati terhadap penipuan. Konfirmasi dan cari tau penjual/pengiklan. </q> </p>
          </div>

          <div class="info-penjual">
            <table>
              <tr>
                <td>Nama Penjual</td>
                <td>:</td>
                <td> </td>
              </tr>

              <tr>
                <td>Alamat </td>
                <td>:</td>
                <td> <?= $item_produk['alamat_penjual'] ?></td>
              </tr>
              <tr>
                <td>No HP </td>
                <td>:</td>
                <td><?= $item_produk['no_hp_penjual'] ?></td>
              </tr>
              <tr>
                <td>E-Mail</td>
                <td>:</td>
                <td></td>
              </tr>
            </table>
          </div>

        </div>

        <?php
          }
        ?>



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
