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
    <form action="simpan_supir.php" method="post">
      <div class="form-group">
        <label for="nama">Nama Supir</label>
        <input type="text" name="nama_supir" class="form-control">
      </div>
      <div class="form-group">
        <label for="jenis_kelamin">Jenis Kelamin</label>
        <select name="jenis_kelamin" class="form-control">
          <option value="Pria">Pria</option>
          <option value="Wanita">Wanita</option>
        </select>
      </div>
      <div class="form-group">
        <label for="tempat_lahir">Tempat Lahir</label>
        <input type="text" name="tempat_lahir" class="form-control">
      </div>
      <div class="form-group">
        <label for="tgl_lahir">Tanggal Lahir</label>
        <input type="text" id="tgl_lahir" name="tgl_lahir" class="form-control">
      </div>
      <div class="form-group">
        <label for="Truck">No Plat Truck</label>
        <select name="no_plat" class="form-control">
          <option value="-">--> Pilih NO Plat Truck <--</option>
          <?php
            $sql = "SELECT * FROM data_truck";
            $tampil = mysqli_query($conn, $sql);
            while($data = mysqli_fetch_array($tampil)) {
              echo "<option value=".$data['no_plat'].">".$data['no_plat']."</option>";
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