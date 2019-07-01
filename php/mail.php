<?php
  $to = "agungkeren@localhost";
  $subject = "Admin Toko Bola";
  $message = "Selamat anda berhasil terdaftar";
  $header = "from: admintokbol@localhost \n";
  $header .= "content-type: text/html";
  $sendmail = mail($to, $subject, $message, $header);

  echo ($sendmail)? "Email sukses terkirim" : "Email gagal terkirim";


?>
