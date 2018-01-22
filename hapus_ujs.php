<?php 
include('koneksi.php');
$sql = "DELETE FROM data_ujs WHERE id_ujs = '".$_GET['id']."'";
if(mysqli_query($conn, $sql)) {
  ?>
  <script>
    alert('UJS Berhasil Dihapus dari Database!');
    window.open('data_ujs.php', '_self');
  </script>
  <?php
} else {
  ?>
  <script>
    alert('Error Menghapus Ujs!');
  </script>
  <?php
}
?>