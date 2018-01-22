<?php
include('header.php');
include('koneksi.php');
?>
<div id="form-rute" class="row">
  <div class="col-sm-6 col-sm-offset-3">
    <h2>Tambah Sales Orders</h2>
    <hr>
    <form action="simpan_so.php" method="post">
      <div class="form-group">
        <label for="no_shipment">No Shipment</label>
        <input type="text" name="no_shipment" class="form-control">
      </div>
      <div class="form-group">
        <label for="customer">Customer</label>
        <select name="customer" class="form-control">
        <option value="-">--> Pilih Customer <--</option>
          <?php
          $customer = "SELECT * FROM data_customers";
          $tampilCus = mysqli_query($conn, $customer);
          while($cs = mysqli_fetch_array($tampilCus)) {
            echo "<option value='".$cs['id_customer']."'>".$cs['nama_customer']."</option>";
          }
          ?>
        </select>
      </div>
      <div class="form-group">
        <label for="rute">Rute</label>
        <select name="rute" class="form-control">
        <option value="-">--> Pilih Rute <--</option>
          <?php
          $rute = "SELECT * FROM data_rute";
          $tampilRute = mysqli_query($conn, $rute);
          while($rt = mysqli_fetch_array($tampilRute)) {
            echo "<option value='".$rt['id_rute']."'>".$rt['deskripsi_rute']."</option>";
          }
          ?>
        </select>
      </div>
      <div class="form-group">
        <label for="jenis_muatan">Jenis Muatan</label>
        <select name="jenis_muatan" class="form-control">
        <option value="-">--> Pilih Jenis Muatan <--</option>
          <?php
          $jenis_muatan = "SELECT * FROM data_jenis_muatan";
          $tampilJM = mysqli_query($conn, $jenis_muatan);
          while($jm = mysqli_fetch_array($tampilJM)) {
            echo "<option value='".$jm['id_jenis_muatan']."'>".$jm['jenis_muatan']."</option>";
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