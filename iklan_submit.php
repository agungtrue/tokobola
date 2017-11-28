<?php
include_once 'php/database.php';


/*$nama_penjual = $_POST['nama_lengkap'];*/
$nama_produk_penjual = $_POST['nama_produk'];
$harga_produk_penjual = $_POST['harga_produk'];
$foto_produk_penjual = $_POST['images'];
$alamat_penjual = $_POST['alamat'];
$hp_penjual = $_POST['no_hp'];
$email_penjual = $_POST['email'];
$spek_item_penjual = $_POST['spesifikasi_produk'];

 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    /*echo $nama_penjual . "<br>";
    echo $alamat_penjual . "<br>";
    echo $nama_produk_penjual . "<br>";
    echo $harga_produk_penjual . "<br>";
    echo $foto_produk_penjual . "<br>";
    echo $email_penjual . "<br>";
    echo $hp_penjual . "<br>";
    echo $spek_item_penjual . "<br>";*/

    $penjual = true;

    if ($penjual) {
          $sql =  mysqli_query($koneksi, "INSERT INTO produk (nama_produk, harga_produk, images, spesifikasi_produk)
          VALUES ('$nama_produk_penjual', '$harga_produk_penjual', '$foto_produk_penjual',
              '$spek_item_penjual')");
          echo "Berhasil";
        } else {
          echo "gagal";

        }

     ?>
  </body>
</html>
