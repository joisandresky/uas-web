<?php
include('header.php');
include('koneksi.php');
?>
<div id="form-supir" class="row">
  <div class="col-sm-6 col-sm-offset-3">
    <h2>Tambah Uang Jalan Supir</h2>
    <hr>
    <form action="simpan_ujs.php" method="post">
      <div class="form-group">
        <label for="rute">Rute</label>
        <select name="rute" class="form-control">
          <option value="-">--> Pilih Rute <--</option>
          <?php
          $sqlRute = "SELECT id_rute, deskripsi_rute FROM data_rute";
          $tampil = mysqli_query($conn, $sqlRute);
          while($data = mysqli_fetch_array($tampil)) {
            echo "<option value='".$data['id_rute']."'>".$data['deskripsi_rute']."</option>";
          }
          ?>
        </select>
      </div>
      <div class="form-group">
        <label for="ujs">Uang Jalan</label>
        <input type="number" name="ujs" class="form-control">
      </div>
      <div class="form-group">
        <label for="jenis_truk">Jenis Truck</label>
        <select name="jenis_truk" class="form-control">
          <option value="-">--> Jenis Truk <--</option>
          <?php
          $sqlJT = "SELECT * FROM data_jenis_truk";
          $tampilJT = mysqli_query($conn, $sqlJT);
          while($data = mysqli_fetch_array($tampilJT)) {
            echo "<option value='".$data['id_jenis_truk']."'>".$data['jenis_truk']."</option>";
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