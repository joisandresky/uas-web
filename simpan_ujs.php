<?php
include('koneksi.php');
require('function_global.php');

$sql = "INSERT INTO data_ujs VALUES('UJS-".getId($conn, 'data_ujs')."', '".$_POST['rute']."', '".$_POST['ujs']."', '".$_POST['jenis_truk']."')";
if(mysqli_query($conn, $sql)){
  ?>
  <script>
    alert('Berhasil Menambah Data!');
    window.open('data_ujs.php', '_self');
  </script>
  <?php
} else {
  ?>
  <script>
    alert('Gagal Menambah UJS!');
  </script>
  <?php
}
?>