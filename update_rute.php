<?php
include('koneksi.php');
$deskripsi = "".$_POST['origin']." - ".$_POST['destination'];
$sql = "UPDATE data_rute SET origin = '".$_POST['origin']."', destination = '".$_POST['destination']."', deskripsi_rute = '$deskripsi' ,jumlah_tagihan = '".$_POST['tagihan']."' WHERE id_rute = '".$_GET['id']."'";
if(mysqli_query($conn, $sql)){
  ?>
    <script>
      alert('Sukses Mengupdate Data Rute!');
      window.open('data_rute.php', '_self');
    </script>
  <?php
} else {
  echo mysqli_error($conn);
  ?>
  <script>
      alert('Gagal Mengupdate Data Rute!');
      return;
    </script>
  <?php
}
?>