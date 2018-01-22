<?php
include('koneksi.php');
require('function_global.php');

$sql = "INSERT INTO data_supir VALUES('SP-".(getId($conn, 'data_supir'))."','".$_POST['nama_supir']."','".$_POST['jenis_kelamin']."', '".$_POST['tempat_lahir']."', '".$_POST['tgl_lahir']."', '".$_POST['no_plat']."')";
if(mysqli_query($conn, $sql)){
  ?>
  <script>
    alert('Berhasil Menambah Data!');
    window.open('data_supir.php', '_self');
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