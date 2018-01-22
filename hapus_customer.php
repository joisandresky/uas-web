<?php 
include('koneksi.php');
$sql = "DELETE FROM data_customers WHERE id_customer = '".$_GET['id']."'";
if(mysqli_query($conn, $sql)) {
  ?>
  <script>
    alert('Customer Berhasil Dihapus dari Database!');
    window.open('data_customer.php', '_self');
  </script>
  <?php
} else {
  ?>
  <script>
    alert('Error Menghapus Customer!');
  </script>
  <?php
}
?>