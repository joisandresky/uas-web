<?php
include('header.php');
include('koneksi.php');
$sql = "SELECT data_ujs.id_ujs, data_rute.deskripsi_rute, data_ujs.uang_jalan, data_jenis_truk.jenis_truk FROM data_ujs LEFT JOIN data_rute ON data_ujs.id_rute = data_rute.id_rute LEFT JOIN data_jenis_truk ON data_ujs.id_jenis_truk = data_jenis_truk.id_jenis_truk";
$tampil = mysqli_query($conn, $sql);
?>
<div id="rute" class="row">
  <div class="col-sm-12">
    <h2>DATA UANG JALAN SUPIR</h2>
    <a href="form_ujs.php" class="btn btn-primary">Tambah UJS</a>
    <hr>
    <table class="table">
      <tr>
        <th>#</th>
        <th>RUTE</th>
        <th>UANG JALAN</th>
        <th>JENIS TRUK</th>
        <th>Actions</th>
      </tr>
      <?php
      while($data = mysqli_fetch_array($tampil)) {
        ?>
        <tr>
          <td><?php echo $data['id_ujs']; ?></td>
          <td><?php echo $data['deskripsi_rute']; ?></td>
          <td>Rp. <?php echo number_format($data['uang_jalan']); ?></td>
          <td><?php echo $data['jenis_truk']; ?></td>
          <td>
            <a href="edit_ujs.php?id=<?php echo $data['id_ujs']; ?>" class="btn btn-xs btn-success">Edit</a>
            <a onclick="return confirm('Kamu yakin menghapus UJS ini ?')" href="hapus_ujs.php?id=<?php echo $data['id_ujs']; ?>" class="btn btn-danger btn-xs">Hapus</a>
          </td>
      </tr>
      <?php } ?>
    </table>
  </div>
</div>
<?php
include('footer.php');
?>