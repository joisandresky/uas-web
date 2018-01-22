<?php
include('function_global.php');
include('koneksi.php');
$deskripsi = "".$_POST['origin']." - ".$_POST['destination'];
$sql = "INSERT INTO data_rute VALUES('RT-".getId($conn, 'data_rute')."', '".$_POST['origin']."', '".$_POST['destination']."', '$deskripsi', '".$_POST['tagihan']."')";
if(mysqli_query($conn, $sql)){
  ?>
  <script>
    alert('Sukses Menambahkan Rute Baru');
    window.open('data_rute.php', '_self');
  </script>
  <?php
} else {
  ?>
    <script>
      alert('Gagal Menambahkan Rute!');
      return;
    </script>
  <?php
}
?>