<?php
include_once 'php/database.php';


if (isset($_POST['submit'])) {

  /*$nama_penjual = $_POST['nama_lengkap'];*/
  /*ambil data dari form */
  $nama_produk_penjual = $_POST['nama_produk'];
  $harga_produk_penjual = $_POST['harga_produk'];
  $kategori_produk_penjual = $_POST['id_kategori_produk'];
  $foto_produk_penjual = $_FILES['images']['name'];
  $alamat_penjual = $_POST['alamat'];
  $hp_penjual = $_POST['no_hp'];
  $email_penjual = $_POST['email'];
  $spek_item_penjual = $_POST['spesifikasi_produk'];

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


      if (move_uploaded_file($_FILES['image']['tmp_name'], $path)) {
        echo "Image telah berhasil di upload";
      } else {
        echo "Image gagal di upload";
      }






  //var_dump($path);



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
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php

    //Proses data ke database
    $penjual = true;

    if ($penjual) {

            $sql =  mysqli_query($koneksi, "INSERT INTO produk (nama_produk, harga_produk, id_kategori_produk, images, alamat_penjual, no_hp_penjual, spesifikasi_produk)
            VALUES ('$nama_produk_penjual', '$harga_produk_penjual', '$kategori_produk_penjual', '$path', '$alamat_penjual', '$hp_penjual',
                '$spek_item_penjual')");
                echo "Berhasil";
                $penjual = true;
          } else {
            echo "Gagal";
            $penjual = false;
          }



     ?>


  </body>
</html>
