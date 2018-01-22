<?php
include('koneksi.php');
require('function_global.php');

$sql = "INSERT INTO data_truck VALUES('".$_POST['no_plat']."', '".$_POST['merk_truk']."', '".$_POST['jenis_truck']."')";
if(mysqli_query($conn, $sql)){
  ?>
  <script>
    alert('Berhasil Menambah Data!');
    window.open('data_truck.php', '_self');
  </script>
  <?php
} else {
  ?>
  <script>
    alert('Gagal Menambah Supir!');
  </script>
  <?php
}
?>