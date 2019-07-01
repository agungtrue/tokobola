<?php
  session_start();
  include_once 'php/database.php';

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
    <link rel="stylesheet" type="text/css" href="css/penjual.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Iklan Produk</title>
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
            <p></p>
            <p>Anda bisa menjual berbagai macam kebutuhan Sepak Bola ke semua orang! Toko Bola memudahkan penjual dan pembeli. Isi form data penjual dengan baik dan benar.</p>
          </div>

          <div class="form-penjual">
          <form class="penjual" action="iklan_submit.php" method="post" enctype="multipart/form-data">
            <center>
              <table>

                <tr>
                  <td>Nama Produk</td>
                  <td>: &emsp;</td>
                  <td> <input type="text" name="nama_produk" value="" placeholder="Nama Produk" required> </td>
                </tr>
                <tr>
                  <td>Harga Produk</td>
                  <td>:</td>
                  <td> <input type="text" name="harga_produk" value="" placeholder="Harga Produk" required> </td>
                </tr>
                <tr>
                  <td>Kategori Produk</td>
                  <td>:</td>
                  <td>
                    <select class="" name="id_kategori_produk">
                      <option value="1">Bola</option>
                      <option value="2">Deker</option>
                      <option value="3">Jersey</option>
                      <option value="4">Sepatu</option>
                      <option value="5">Kaos Kaki</option>
                      <option value="6">Sarung Tangan</option>
                    </select>
                  </td>
                </tr>
                <tr>
                  <td>Foto Produk</td>
                  <td>:</td>
                  <td> <input type="file" name="images" placeholder="Upload Foto Produk" required>  </td>
                </tr>
                <tr>
                  <td>No HP</td>
                  <td>:</td>
                  <td> <input type="text" name="no_hp" value="" placeholder="No HP" required> </td>
                </tr>
                <tr>
                  <td>Spesifikasi</td>
                  <td>:</td>
                  <td> <textarea name="spesifikasi_produk" rows="8" cols="50" placeholder="Spesifikasi atau Keterangan..." required></textarea> </td>
                </tr>
              </table>
              <br>
              <input class="submit-iklan" type="submit" name="submit" value="Submit" style="background-color:orange;">
              <input class="submit-iklan" type="reset" name="submit" value="Reset" style="background-color:orange;">
            </center>
          </form>
        </div>
        </div>



        <div id="menu">
          <br>
            <h5 class="tokbol"> Kategori Produk <img src="image/logotokbol.png" style="width:150px; height:auto;" alt=""> </h5>
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

    Copyright &copy; 2017 Team Uler
    </div>

        </div>





      </div>






    </body>

</html>
