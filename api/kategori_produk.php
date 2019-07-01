<?php
include_once '../php/database.php';

$id = isset($_GET['id']) ? $_GET['id'] : NULL;
if (isset($id)) {
  $query_id = 'WHERE id = ' .$id;
} else {
  $query_id = '';
}

$sql = "SELECT * FROM `kategori_produk` $query_id";
$query = mysqli_query($koneksi, $sql);
$kategori_produk = [];
while ($row = mysqli_fetch_array($query)) {
  $kategori_produk[] = $row;
}

echo json_encode($kategori_produk);


 ?>
