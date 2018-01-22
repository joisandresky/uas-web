<?php 
include('header.php');
include('koneksi.php');
$sql = "SELECT * FROM data_supir WHERE id_supir = '".$_GET['id']."'";
$tampil = mysqli_query($conn, $sql);
$data = mysqli_fetch_array($tampil);
if(!isset($_GET['id']) || !$data) {
  ?>
  <script>
    window.open('data_supir.php', '_self');
  </script>
  <?php
}
?>
<h2>Edit Supir : <?php echo $data['nama_supir']; ?></h2>
<div id="edit-supir">
<div class="col-sm-6 col-sm-offset-3">
    <hr>
    <form action="update_supir.php?id=<?php echo $data['id_supir']; ?>" method="post">
      <div class="form-group">
        <label for="nama">Nama Supir</label>
        <input type="text" name="nama_supir" class="form-control" value="<?php echo $data['nama_supir']; ?>">
      </div>
      <div class="form-group">
        <label for="jenis_kelamin">Jenis Kelamin</label>
        <select name="jenis_kelamin" class="form-control">
          <option value="Pria" <?php echo $data['jenis_kelamin'] == 'Pria' ? 'selected="selected"' : '' ?>>Pria</option>
          <option value="Wanita" <?php echo $data['jenis_kelamin'] == 'Wanita' ? 'selected="selected"' : '' ?>>Wanita</option>
        </select>
      </div>
      <div class="form-group">
        <label for="tempat_lahir">Tempat Lahir</label>
        <input type="text" name="tempat_lahir" class="form-control" value="<?php echo $data['tempat_lahir']; ?>">
      </div>
      <div class="form-group">
        <label for="tgl_lahir">Tanggal Lahir</label>
        <input type="text" id="tgl_lahir" name="tgl_lahir" class="form-control" value="<?php echo $data['tgl_lahir']; ?>">
      </div>
      <div class="form-group">
        <label for="Truck">No Plat Truck</label>
        <select name="no_plat" class="form-control">
          <?php
            $sql = "SELECT * FROM data_truck";
            $tampil = mysqli_query($conn, $sql);
            while($dt = mysqli_fetch_array($tampil)) {
              echo "<option value=".$dt['no_plat']." ".($data['no_plat_truk'] == $dt['no_plat'] ? 'selected="selected"' : '').">".$dt['no_plat']."</option>";
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