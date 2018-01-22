<?php 
include('header.php');
include('koneksi.php');
$sql = "SELECT * FROM data_ujs WHERE id_ujs = '".$_GET['id']."'";
$tampil = mysqli_query($conn, $sql);
$data = mysqli_fetch_array($tampil);
if(!isset($_GET['id']) || !$data) {
  ?>
  <script>
    window.open('data_ujs.php', '_self');
  </script>
  <?php
}
?>
<h2>Edit UJS : <?php echo $data['id_ujs']; ?></h2>
<div id="edit-supir">
  <div class="col-sm-6 col-sm-offset-3">
    <hr>
    <form action="update_ujs.php?id=<?php echo $data['id_ujs']; ?>" method="post">
    <div class="form-group">
      <label for="rute">Rute</label>
      <select name="rute" class="form-control">
        <option value="-">--> Pilih Rute <--</option>
        <?php
        $sqlRute = "SELECT id_rute, deskripsi_rute FROM data_rute";
        $tampil = mysqli_query($conn, $sqlRute);
        while($rt = mysqli_fetch_array($tampil)) {
          echo "<option value='".$rt['id_rute']."' ".($rt['id_rute'] === $data['id_rute'] ? 'selected="selected"' : '').">".$rt['deskripsi_rute']."</option>";
        }
        ?>
      </select>
      </div>
      <div class="form-group">
        <label for="ujs">Uang Jalan</label>
        <input type="number" name="ujs" class="form-control" value="<?php echo $data['uang_jalan']; ?>">
      </div>
      <div class="form-group">
        <label for="jenis_truk">Jenis Truck</label>
        <select name="jenis_truk" class="form-control">
          <option value="-">--> Jenis Truk <--</option>
          <?php
          $sqlJT = "SELECT * FROM data_jenis_truk";
          $tampilJT = mysqli_query($conn, $sqlJT);
          while($jt = mysqli_fetch_array($tampilJT)) {
            echo "<option value='".$jt['id_jenis_truk']."'".($jt['id_jenis_truk'] === $data['id_jenis_truk'] ? 'selected="selected"' : '').">".$jt['jenis_truk']."</option>";
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