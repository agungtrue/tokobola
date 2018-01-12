<?php
include_once 'php/database.php';
session_start();


if (isset($_POST['submit'])) {

  /*ambil data dari form */
  $nama_produk_penjual = $_POST['nama_produk'];
  $harga_produk_penjual = $_POST['harga_produk'];
  $kategori_produk_penjual = $_POST['id_kategori_produk'];
  $foto_produk_penjual = $_FILES['images']['name'];
  $alamat_penjual = $_POST['alamat'];
  $hp_penjual = $_POST['no_hp'];
  $spek_item_penjual = $_POST['spesifikasi_produk'];

  //mengambil id_member dari variable Session
  $id_penjual =  $_SESSION['user']['id_member'];


      /* Setting path folder penyimpanan foto*/
      if ($kategori_produk_penjual == "1") {
        $path = "image/bola/". basename($_FILES['images']['name']);
      } elseif ($kategori_produk_penjual == "2") {
        $path = "image/deker/". basename($_FILES['images']['name']);
      } elseif ($kategori_produk_penjual == "3") {
        $path = "image/jersey/". basename($_FILES['images']['name']);
      } elseif ($kategori_produk_penjual == "4") {
        $path = "image/sepatu/". basename($_FILES['images']['name']);
      } elseif ($kategori_produk_penjual == "5") {
        $path = "image/kaoskaki/". basename($_FILES['images']['name']);
      } elseif ($kategori_produk_penjual == "6") {
        $path = "image/sarungtangan/". basename($_FILES['images']['name']);
      }

  var_dump($path);



/*$upload = 1;
   //cek apabila file sudah ada//
   if (file_exists($path)) {
     echo "Image sudah ada ";
     $upload = 0;
   }

   //cek size image//
   if ($_FILES['images']['size'] > 500000) {
     echo "Ukuran file terlalu besar";
     $upload = 0;
   }*/

   //membuat ketentuan format file//
   /*$imagefiletype = pathinfo($targetfile, PATHINFO_EXTENSION);
   if ($imagefiletype != "jpg" && $imagefiletype != "png" && $imagefiletype != "jpeg" && $imagefiletype != "gif") {
     echo "Sorry, file yang berlaku hanya jpg, png, jpeg dan gif!!!";
     $upload = 0;
   }*/

   //cek apakah $upload adalah salah!! //
   /*if ($upload == 0) {
     echo "Sorry image yang anda upload gagal";

   //jika semua berjalan dengan baik, coba untuk mengupload image//
 } else {
   if (move_uploaded_file($_FILES['images']['tmp_name'], $path)) {
     echo "Sukses";
   }
 }*/



  /*
  //cek apakah image file asli atau palsu//

  if (isset($_POST['submit'])) {
    $checkimages = getimagesize($_FILES['image']['tmp_name']);
    if ($checkimages !== false) {
      echo "ini adalah - " . $checkimages['mime'] . "."
      $upload = 1;
    } else {
      echo "Gagal Upload";
      $upload = 0;
    }
  }
  */
}


 ?>

<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
  </head>
  <body>

  <div id="container">
    <div id="header">
      <a href="home.php" id="logo"> <img src="image/logotokbol.png"/></a>
      <div class="selamat">
      </div>

    </div>

    <div id="content">

    <?php


    //cek apabila upload image berhasil atau tidak
    if (move_uploaded_file($_FILES['images']['tmp_name'], $path)) {
      echo 'Image telah berhasil di upload <img src="image/success.gif" style="width:200px; height:100px;"/> <br>';
    } else {
      echo "Image gagal di upload";
    }


  //Proses data ke database
  $penjual = true;

  if ($penjual) {
    $sql =  mysqli_query($koneksi, "INSERT INTO produk (nama_produk, harga_produk, id_kategori_produk, id_member, spesifikasi_produk, images, no_hp_penjual)
    VALUES ('$nama_produk_penjual', '$harga_produk_penjual', '$kategori_produk_penjual', $id_penjual, '$spek_item_penjual', '$path', '$hp_penjual')");
            echo 'Data penjual BERHASIL masuk ke database <img src="image/success.gif" style="width:200px; height:100px;"/>';
            $penjual = true;
          } else {
            echo "Data penjual GAGAL masuk ke database";
            $penjual = false;
          }

     ?>

     <br><br>
      <a href="iklan_user.php" style="color:orange;"> Kembali Ke Menu </a>

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
     Copyright &copy; 2017 Team Uler
     </div>

   </div>

   </div>
  </body>
</html>
