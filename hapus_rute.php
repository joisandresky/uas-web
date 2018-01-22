<?php 
include('koneksi.php');
$sql = "DELETE FROM data_rute WHERE id_rute = '".$_GET['id']."'";
if(mysqli_query($conn, $sql)) {
  ?>
  <script>
    alert('Rute Berhasil Dihapus dari Database!');
    window.open('data_rute.php', '_self');
  </script>
  <?php
} else {
  ?>
  <script>
    alert('Error Menghapus Rute!');
  </script>
  <?php
}
?>