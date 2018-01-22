<?php 
include('koneksi.php');
$sql = "DELETE FROM data_supir WHERE id_supir = '".$_GET['id']."'";
if(mysqli_query($conn, $sql)) {
  ?>
  <script>
    alert('Supir Berhasil Dihapus dari Database!');
    window.open('data_supir.php', '_self');
  </script>
  <?php
} else {
  ?>
  <script>
    alert('Error Menghapus Supir!');
  </script>
  <?php
}
?>