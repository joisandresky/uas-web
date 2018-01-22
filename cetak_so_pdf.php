<?php
include('koneksi.php');
$sql = "SELECT sales_orders.id_sales_order, sales_orders.tanggal, sales_orders.no_shipment, sales_orders.status_so, r.deskripsi_rute, c.nama_customer, jm.jenis_muatan FROM sales_orders LEFT JOIN data_customers as c ON sales_orders.id_customer = c.id_customer LEFT JOIN data_rute as r ON sales_orders.id_rute = r.id_rute LEFT JOIN data_jenis_muatan as jm ON sales_orders.id_jenis_muatan = jm.id_jenis_muatan WHERE sales_orders.tanggal BETWEEN '".$_GET['tgl1']."' AND '".$_GET['tgl2']."'";
$tampil = mysqli_query($conn, $sql);
$html .= "<table class='table' border='1'>
  <thead>
    <tr>
      <th>#</th>
      <th>NAMA CUSTOMER</th>
      <th>TANGGAL</th>
      <th>RUTE</th>
      <th>NO SHIPMENT</th>
      <th>JENIS MUATAN</th>
      <th>STATUS</th>
    </tr>
  </thead>
  <tbody>";
  while($data = mysqli_fetch_array($tampil)) {
    $html .= "<tr>
      <td>".$data['id_sales_order']."</td>
      <td>".$data['nama_customer']."</td>
      <td>".$data['tanggal']."</td>
      <td>".$data['deskripsi_rute']."</td>
      <td>".$data['no_shipment']."</td>
      <td>".$data['jenis_muatan']."</td>
      <td>".$data['status_so']."</td>
    </tr>";
  }
  $html .= "</tbody>
</table>";

include('mpdf/mpdf.php');
$mpdf = new mPDF();
$mpdf->WriteHTML($html);
$mpdf->Output();
exit;
?>