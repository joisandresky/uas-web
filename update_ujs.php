<?php
include('koneksi.php');
$sql = "UPDATE data_ujs SET id_rute = '".$_POST['rute']."', uang_jalan = '".$_POST['ujs']."', id_jenis_truk = '".$_POST['jenis_truk']."' WHERE id_ujs = '".$_GET['id']."'";
if(mysqli_query($conn, $sql)){
  ?>
    <script>
      alert('Sukses Mengupdate Data UJS!');
      window.open('data_ujs.php', '_self');
    </script>
  <?php
} else {
  echo mysqli_error($conn);
  ?>
  <script>
      alert('Gagal Mengupdate Data UJS!');
      return;
    </script>
  <?php
}
?>