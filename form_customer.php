<?php
include('header.php');
include('koneksi.php');
?>
<div id="form-rute" class="row">
  <div class="col-sm-6 col-sm-offset-3">
    <h2>Tambah Customer</h2>
    <hr>
    <form action="simpan_customer.php" method="post">
      <div class="form-group">
        <label for="nama_customer">Nama Customer</label>
        <input type="text" name="nama_customer" class="form-control">
      </div>
      <div class="form-group">
        <label for="alamat">Alamat</label>
        <input type="text" name="alamat" class="form-control">
      </div>
      <div class="form-group">
        <label for="no_telp">No Telpon</label>
        <input type="text" name="no_telp" class="form-control">
      </div>
      <div class="form-group">
        <label for="fax">Fax</label>
        <input type="text" name="fax" class="form-control">
      </div>
      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" name="email" class="form-control">
      </div>
      <input type="submit" value="Simpan" class="btn btn-primary">
      <input type="reset" value="Reset" class="btn btn-warning">
    </form>
  </div>
</div>
<?php
include('footer.php');
?>