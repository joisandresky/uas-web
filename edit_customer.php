<?php 
include('header.php');
include('koneksi.php');
$sql = "SELECT * FROM data_customers WHERE id_customer = '".$_GET['id']."'";
$tampil = mysqli_query($conn, $sql);
$data = mysqli_fetch_array($tampil);
if(!isset($_GET['id']) || !$data) {
  ?>
  <script>
    window.open('data_customer.php', '_self');
  </script>
  <?php
}
?>
<h2>Edit Customer : <?php echo $data['nama_customer']; ?></h2>
<div id="edit-supir">
<div class="col-sm-6 col-sm-offset-3">
    <hr>
    <form action="update_customer.php?id=<?php echo $data['id_customer']; ?>" method="post">
    <div class="form-group">
      <label for="nama_customer">Nama Customer</label>
      <input type="text" name="nama_customer" class="form-control" value="<?php echo $data['nama_customer']; ?>">
    </div>
    <div class="form-group">
      <label for="alamat">Alamat</label>
      <input type="text" name="alamat" class="form-control" value="<?php echo $data['alamat_customer']; ?>">
    </div>
    <div class="form-group">
      <label for="no_telp">No Telpon</label>
      <input type="text" name="no_telp" class="form-control" value="<?php echo $data['no_telp']; ?>">
    </div>
    <div class="form-group">
      <label for="fax">Fax</label>
      <input type="text" name="fax" class="form-control" value="<?php echo $data['no_fax']; ?>">
    </div>
    <div class="form-group">
      <label for="email">Email</label>
      <input type="email" name="email" class="form-control" value="<?php echo $data['email']; ?>">
    </div>
      <input type="submit" value="Simpan" class="btn btn-primary">
      <input type="reset" value="Reset" class="btn btn-warning">
    </form>
  </div>
</div>
<?php
include('footer.php');
?>