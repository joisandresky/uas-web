<?php
function getId ($conn, $tbl_name) {
  $query = "SELECT * FROM $tbl_name";
  $exec = mysqli_query($conn, $query);
  $jumlah_data = mysqli_num_rows($exec);
  return $jumlah_data + 1;
}
?>