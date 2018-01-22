<?php
include('header.php');
include('koneksi.php');
?>
<script type="text/javascript">
	$(function(){
		$("#tgl_lahir") .datepicker({
			dateFormat: 'yy-mm-dd',
			changeMonth: true,
			changeYear: true
		});
	});
</script>
<div id="form-supir" class="row">
  <div class="col-sm-6 col-sm-offset-3">
    <h2>Tambah Supir</h2>
    <hr>
    <form action="simpan_truck.php" method="post">
      <div class="form-group">
        <label for="no_plat">No Plat</label>
        <input type="text" name="no_plat" class="form-control">
      </div>
      <div class="form-group">
        <label for="merk_truk">Merk Truck</label>
        <input type="text" name="merk_truk" class="form-control">
      </div>
      <div class="form-group">
        <label for="jenis_truck">Jenis Truck</label>
        <select name="jenis_truck" class="form-control">
          <option value="-">--> Pilih Jenis Truck <--</option>
          <?php
            $sql = "SELECT * FROM data_jenis_truk";
            $tampil = mysqli_query($conn, $sql);
            while($data = mysqli_fetch_array($tampil)) {
              echo "<option value=".$data['id_jenis_truk'].">".$data['jenis_truk']."</option>";
            }
          ?>
        </select>
      </div>
      <input type="submit" value="Simpan" class="btn btn-primary">
      <input type="reset" value="Reset" class="btn btn-warning">
    </form>
  </div>
</div>
<?php
include('footer.php');
?>