<?php
include('koneksi.php');
require('function_global.php');

$sql = "INSERT INTO sales_orders VALUES('SO-".getId($conn, 'sales_orders')."', '".$_POST['customer']."', '".$_POST['rute']."', '".$_POST['no_shipment']."', '".$_POST['jenis_muatan']."', 'Process WO')";
if(mysqli_query($conn, $sql)){
  ?>
  <script>
    alert('Berhasil Menambah Sales Order!');
    window.open('sales_order.php', '_self');
  </script>
  <?php
} else {
  echo mysqli_error($conn);
  ?>
  <script>
    alert('Gagal Menambah Sales Order!');
  </script>
  <?php
}
?>