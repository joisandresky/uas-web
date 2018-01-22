<?php
include('header.php');
include('koneksi.php');
$sql = "SELECT * FROM data_customers";
$tampil = mysqli_query($conn, $sql);
?>
<div id="rute" class="row">
  <div class="col-sm-12">
    <h2>DATA CUSTOMER</h2>
    <a href="form_customer.php" class="btn btn-primary">Tambah Customer</a>
    <hr>
    <table class="table">
      <tr>
        <th>#</th>
        <th>NAMA</th>
        <th>ALAMAT</th>
        <th>NO TELP</th>
        <th>FAX</th>
        <th>E-mail</th>
        <th>Actions</th>
      </tr>
      <?php
      while($data = mysqli_fetch_array($tampil)) {
        ?>
        <tr>
          <td><?php echo $data['id_customer']; ?></td>
          <td><?php echo $data['nama_customer']; ?></td>
          <td><?php echo $data['alamat_customer']; ?></td>
          <td><?php echo $data['no_telp']; ?></td>
          <td><?php echo $data['no_fax']; ?></td>
          <td><?php echo $data['email']; ?></td>
          <td>
            <a href="edit_customer.php?id=<?php echo $data['id_customer']; ?>" class="btn btn-xs btn-success">Edit</a>
            <a onclick="return confirm('Kamu yakin menghapus Customer ini ?')" href="hapus_customer.php?id=<?php echo $data['id_customer']; ?>" class="btn btn-danger btn-xs">Hapus</a>
          </td>
      </tr>
      <?php } ?>
    </table>
  </div>
</div>
<?php
include('footer.php');
?>