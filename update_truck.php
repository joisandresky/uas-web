<?php
include('koneksi.php');
$sql = "UPDATE data_truck SET merk_truk= '".$_POST['merk_truk']."', id_jenis_truk = '".$_POST['jenis_truck']."' WHERE no_plat = '".$_GET['id']."'";
if(mysqli_query($conn, $sql)){
  ?>
    <script>
      alert('Sukses Mengupdate Data Truck!');
      window.open('data_truck.php', '_self');
    </script>
  <?php
} else {
  echo mysqli_error($conn);
  ?>
  <script>
      alert('Gagal Mengupdate Data Truck!');
      return;
    </script>
  <?php
}
?>