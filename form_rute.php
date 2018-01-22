<?php
include('header.php');
include('koneksi.php');
?>
<div id="form-rute" class="row">
  <div class="col-sm-6 col-sm-offset-3">
    <h2>Tambah Rute</h2>
    <hr>
    <form action="simpan_rute.php" method="post">
      <div class="form-group">
        <label for="origin">Origin</label>
        <input type="text" name="origin" class="form-control">
      </div>
      <div class="form-group">
        <label for="destination">Destination</label>
        <input type="text" name="destination" class="form-control">
      </div>
      <div class="form-group">
        <label for="tagihan">Tagihan</label>
        <input type="number" name="tagihan" class="form-control">
      </div>
      <input type="submit" value="Simpan" class="btn btn-primary">
      <input type="reset" value="Reset" class="btn btn-warning">
    </form>
  </div>
</div>
<?php
include('footer.php');
?>