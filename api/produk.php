<?php
include_once '../php/database.php';

$id = isset($_GET['id']) ? $_GET['id'] : NULL;
if (isset($id)) {
  $query_id = 'WHERE id = ' .$id;
} else {
  $query_id = '';
}

$sql = "SELECT * FROM `produk` $query_id";
$query = mysqli_query($koneksi, $sql);
$produk = [];
while ($row = mysqli_fetch_array($query)) {
  $produk[] = $row;
}

echo json_encode($produk);


 ?>

 <!-- <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>
     <table border="1">

       <tr>
         <th>id</th>
         <th>nama</th>
       </tr>
       <?php
         foreach ($produk as $key => $data) {
       ?>
       <tr>
         <td><?= $data['id'] ?></td>
         <td><?= $data['nama_produk'] ?></td>
       </tr>
       <?php
     }
        ?>
     </table>
   </body>
 </html> -->
