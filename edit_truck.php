<?php 
include('header.php');
include('koneksi.php');
$sql = "SELECT * FROM data_truck WHERE no_plat = '".$_GET['id']."'";
$tampil = mysqli_query($conn, $sql);
$data = mysqli_fetch_array($tampil);
if(!isset($_GET['id']) || !$data) {
  ?>
  <script>
    window.open('data_truck.php', '_self');
  </script>
  <?php
}
?>
<h2>Edit Truck : <?php echo $data['no_plat']; ?></h2>
<div id="edit-supir">
<div class="col-sm-6 col-sm-offset-3">
    <hr>
    <form action="update_truck.php?id=<?php echo $data['no_plat']; ?>" method="post">
      <div class="form-group">
        <label for="nama">Merk Truck</label>
        <input type="text" name="merk_truk" class="form-control" value="<?php echo $data['merk_truk']; ?>">
      </div>
      <div class="form-group">
        <label for="Truck">Jenis Truck</label>
        <select name="jenis_truck" class="form-control">
          <option value="-">--> Pilih Jenis Truck <--</option>
          <?php
            $sql = "SELECT * FROM data_jenis_truk";
            $tampil = mysqli_query($conn, $sql);
            while($dt = mysqli_fetch_array($tampil)) {
              echo "<option value=".$dt['id_jenis_truk']." ".($dt['id_jenis_truk'] == $data['id_jenis_truk'] ? 'selected="selected"' : '').">".$dt['jenis_truk']."</option>";
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