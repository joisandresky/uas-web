<?php
include('koneksi.php');
$sql = "UPDATE data_supir SET nama_supir= '".$_POST['nama_supir']."', jenis_kelamin = '".$_POST['jenis_kelamin']."', tempat_lahir = '".$_POST['tempat_lahir']."', tgl_lahir = '".$_POST['tgl_lahir']."', no_plat_truk = '".$_POST['no_plat']."' WHERE id_supir = '".$_GET['id']."'";
if(mysqli_query($conn, $sql)){
  ?>
    <script>
      alert('Sukses Mengupdate Data Supir!');
      window.open('data_supir.php', '_self');
    </script>
  <?php
} else {
  echo mysqli_error($conn);
  ?>
  <script>
      alert('Gagal Mengupdate Data Supir!');
      return;
    </script>
  <?php
}
?>