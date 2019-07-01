<?php
include_once '../php/database.php';

$id = isset($_GET['id_member']) ? $_GET['id_member'] : NULL;
if (isset($id)) {
  $query_id = 'WHERE id_member = ' .$id;
} else {
  $query_id = '';
}

$sql = "SELECT * FROM `member` $query_id";
$query = mysqli_query($koneksi, $sql);
$member = [];
while ($row = mysqli_fetch_array($query)) {
  $member[] = $row;
}

echo json_encode($member);


 ?>
