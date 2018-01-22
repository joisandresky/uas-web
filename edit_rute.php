<?php 
include('header.php');
include('koneksi.php');
$sql = "SELECT * FROM data_rute WHERE id_rute = '".$_GET['id']."'";
$tampil = mysqli_query($conn, $sql);
$data = mysqli_fetch_array($tampil);
if(!isset($_GET['id']) || !$data) {
  ?>
  <script>
    window.open('data_rute.php', '_self');
  </script>
  <?php
}
?>
<h2>Edit Rute : <?php echo $data['deskripsi_rute']; ?></h2>
<div id="edit-supir">
<div class="col-sm-6 col-sm-offset-3">
    <hr>
    <form action="update_rute.php?id=<?php echo $data['id_rute']; ?>" method="post">
      <div class="form-group">
        <label for="origin">Origin</label>
        <input type="text" name="origin" class="form-control" value="<?php echo $data['origin']; ?>">
      </div>
      <div class="form-group">
        <label for="destination">Destination</label>
        <input type="text" name="destination" class="form-control" value="<?php echo $data['destination']; ?>">
      </div>
      <div class="form-group">
        <label for="tagihan">Tagihan</label>
        <input type="number" name="tagihan" class="form-control" value="<?php echo $data['jumlah_tagihan']; ?>">
      </div>
      <input type="submit" value="Simpan" class="btn btn-primary">
      <input type="reset" value="Reset" class="btn btn-warning">
    </form>
  </div>
</div>
<?php
include('footer.php');
?>