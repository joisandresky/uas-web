<?php
include('header.php');
include('koneksi.php');
$sql = "SELECT sales_orders.id_sales_order, sales_orders.no_shipment, sales_orders.status_so, r.deskripsi_rute, c.nama_customer, jm.jenis_muatan FROM sales_orders LEFT JOIN data_customers as c ON sales_orders.id_customer = c.id_customer LEFT JOIN data_rute as r ON sales_orders.id_rute = r.id_rute LEFT JOIN data_jenis_muatan as jm ON sales_orders.id_jenis_muatan = jm.id_jenis_muatan";
$tampil = mysqli_query($conn, $sql);
echo mysqli_error($conn);
?>
<div id="rute" class="row">
  <div class="col-sm-12">
    <h2>SALES ORDERS</h2>
    <a href="transaksi_so.php" class="btn btn-primary">Tambah Sales Order</a>
    <hr>
    <table class="table">
      <tr>
        <th>#</th>
        <th>CUSTOMER</th>
        <th>RUTE</th>
        <th>NO SHIPMENT</th>
        <th>JENIS MUATAN</th>
        <th>STATUS</th>
        <th>Actions</th>
      </tr>
      <?php
      while($data = mysqli_fetch_array($tampil)) {
        ?>
        <tr>
          <td><?php echo $data['id_sales_order']; ?></td>
          <td><?php echo $data['nama_customer']; ?></td>
          <td><?php echo $data['deskripsi_rute']; ?></td>
          <td><?php echo $data['no_shipment']; ?></td>
          <td><?php echo $data['jenis_muatan']; ?></td>
          <td><?php echo $data['status_so']; ?></td>
          <td>
            <a href="edit_customer.php?id=<?php echo $data['id_customer']; ?>" class="btn btn-xs btn-success">Edit</a>
            <a onclick="return confirm('Kamu yakin menghapus Customer ini ?')" href="hapus_customer.php?id=<?php echo $data['id_customer']; ?>" class="btn btn-danger btn-xs">Hapus</a>
          </td>
      </tr>
      <?php } ?>
    </table>
  </div>
</div>
<?php
include('footer.php');
?>