<?php
include('header.php');
include('koneksi.php');
$sql = "SELECT data_truck.no_plat, data_truck.merk_truk, data_jenis_truk.jenis_truk FROM data_truck LEFT JOIN data_jenis_truk ON data_truck.id_jenis_truk = data_jenis_truk.id_jenis_truk";
$tampil = mysqli_query($conn, $sql);
?>
<div id="truck" class="row">
  <div class="col-sm-12">
    <h2>DATA TRUCK</h2>
    <a href="form_truck.php" class="btn btn-primary">Tambah Truck</a>
    <hr>
    <table class="table">
      <tr>
        <th>No. Plat</th>
        <th>MERK TRUCK</th>
        <th>JENIS TRUCK</th>
        <th>Actions</th>
      </tr>
      <?php
      while($data = mysqli_fetch_array($tampil)) {
        ?>
        <tr>
          <td><?php echo $data['no_plat']; ?></td>
          <td><?php echo $data['merk_truk']; ?></td>
          <td><?php echo $data['jenis_truk']; ?></td>
          <td>
            <a href="edit_truck.php?id=<?php echo $data['no_plat']; ?>" class="btn btn-xs btn-success">Edit</a>
            <a onclick="return confirm('Kamu yakin menghapus Truck ini ?')" href="hapus_truck.php?id=<?php echo $data['no_plat']; ?>" class="btn btn-danger btn-xs">Hapus</a>
          </td>
      </tr>
      <?php } ?>
    </table>
  </div>
</div>
<?php
include('footer.php');
?>