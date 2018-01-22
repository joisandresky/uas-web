<?php
include('koneksi.php');
$sql = "UPDATE data_customers SET nama_customer = '".$_POST['nama_customer']."', alamat_customer = '".$_POST['alamat']."', no_telp = '".$_POST['no_telp']."', no_fax = '".$_POST['fax']."', email = '".$_POST['email']."' WHERE id_customer = '".$_GET['id']."'";
if(mysqli_query($conn, $sql)){
  ?>
    <script>
      alert('Sukses Mengupdate Data Customer!');
      window.open('data_customer.php', '_self');
    </script>
  <?php
} else {
  echo mysqli_error($conn);
  ?>
  <script>
      alert('Gagal Mengupdate Data Customer!');
      return;
    </script>
  <?php
}
?>