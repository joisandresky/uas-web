<?php
include('function_global.php');
include('koneksi.php');
$sql = "INSERT INTO data_customers VALUES('CUS-".getId($conn, 'data_customers')."', '".$_POST['nama_customer']."', '".$_POST['alamat']."', '".$_POST['no_telp']."', '".$_POST['fax']."', '".$_POST['email']."')";
if(mysqli_query($conn, $sql)){
  ?>
  <script>
    alert('Sukses Menambahkan Customer Baru');
    window.open('data_customer.php', '_self');
  </script>
  <?php
} else {
  ?>
    <script>
      alert('Gagal Menambahkan Customer!');
      return;
    </script>
  <?php
}
?>