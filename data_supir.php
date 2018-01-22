<?php
include('header.php');
include('koneksi.php');
$sql = "SELECT * FROM data_supir";
$tampil = mysqli_query($conn, $sql);
?>
<div id="supir" class="row">
  <div class="col-sm-12">
    <h2>DATA SUPIR</h2>
    <a href="form_supir.php" class="btn btn-primary">Tambah Supir</a>
    <hr>
    <table class="table">
      <tr>
        <th>#</th>
        <th>NAMA</th>
        <th>JENIS KELAMIN</th>
        <th>TTL</th>
        <th>Truck</th>
        <th>Actions</th>
      </tr>
      <?php
      while($data = mysqli_fetch_array($tampil)) {
        ?>
        <tr>
          <td><?php echo $data['id_supir']; ?></td>
          <td><?php echo $data['nama_supir']; ?></td>
          <td><?php echo $data['jenis_kelamin']; ?></td>
          <td><?php echo $data['tempat_lahir'].', '.$data['tgl_lahir']; ?></td>
          <td><?php echo $data['no_plat_truk']; ?></td>
          <td>
            <a href="edit_supir.php?id=<?php echo $data['id_supir']; ?>" class="btn btn-xs btn-success">Edit</a>
            <a onclick="return confirm('Kamu yakin menghapus supir ini ?')" href="hapus_supir.php?id=<?php echo $data['id_supir']; ?>" class="btn btn-danger btn-xs">Hapus</a>
          </td>
      </tr>
      <?php } ?>
    </table>
  </div>
</div>
<?php
include('footer.php');
?>