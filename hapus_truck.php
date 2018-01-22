<?php 
include('koneksi.php');
$sql = "DELETE FROM data_truck WHERE no_plat = '".$_GET['id']."'";
if(mysqli_query($conn, $sql)) {
  ?>
  <script>
    alert('Truck Berhasil Dihapus dari Database!');
    window.open('data_truck.php', '_self');
  </script>
  <?php
} else {
  ?>
  <script>
    alert('Error Menghapus Truck!');
  </script>
  <?php
}
?>