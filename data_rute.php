<?php
include('header.php');
include('koneksi.php');
$sql = "SELECT * FROM data_rute";
$tampil = mysqli_query($conn, $sql);
?>
<div id="rute" class="row">
  <div class="col-sm-12">
    <h2>DATA RUTE</h2>
    <a href="form_rute.php" class="btn btn-primary">Tambah Rute</a>
    <hr>
    <table class="table">
      <tr>
        <th>#</th>
        <th>ORIGIN</th>
        <th>DESTINATION</th>
        <th>DESKRIPSI RUTE</th>
        <th>TAGIHAN</th>
        <th>Actions</th>
      </tr>
      <?php
      while($data = mysqli_fetch_array($tampil)) {
        ?>
        <tr>
          <td><?php echo $data['id_rute']; ?></td>
          <td><?php echo $data['origin']; ?></td>
          <td><?php echo $data['destination']; ?></td>
          <td><?php echo $data['deskripsi_rute']; ?></td>
          <td>Rp. <?php echo number_format($data['jumlah_tagihan']); ?></td>
          <td>
            <a href="edit_rute.php?id=<?php echo $data['id_rute']; ?>" class="btn btn-xs btn-success">Edit</a>
            <a onclick="return confirm('Kamu yakin menghapus Rute ini ?')" href="hapus_rute.php?id=<?php echo $data['id_rute']; ?>" class="btn btn-danger btn-xs">Hapus</a>
          </td>
      </tr>
      <?php } ?>
    </table>
  </div>
</div>
<?php
include('footer.php');
?>