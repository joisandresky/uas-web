<?php
if($_POST['Cetak'] == 'pdf') {
  ?>
  <script>
    window.open("cetak_so_pdf.php?tgl1=<?php echo $_POST['tgl1'] ?>&tgl2=<?php echo $_POST['tgl2'] ?>", "_self");
  </script>
  <?php
} else {
  ?>
  <script>
    window.open("cetak_so_excel.php?tgl1=<?php echo $_POST['tgl1'] ?>&tgl2=<?php echo $_POST['tgl2'] ?>", "_self");
  </script>
  <?php
}

?>