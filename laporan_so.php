<?php
include('header.php');
?>
<script type="text/javascript">
	$(function(){
		$("#tgl1") .datepicker({
			dateFormat: 'yy-mm-dd',
			changeMonth: true,
			changeYear: true
		});
    $("#tgl2") .datepicker({
			dateFormat: 'yy-mm-dd',
			changeMonth: true,
			changeYear: true
		});
	});
</script>
<div class="row">
  <div class="col-md-6 col-md-offset-3">
    <form action="cetak_laporan.php" method="post">
      <div class="form-group">
        <label for="sd">Start Date</label>
        <input type="text" name="tgl1" id="tgl1" class="form-control">
      </div>
      <div class="form-group">
        <label for="ed">End Date</label>
        <input type="text" name="tgl2" class="form-control" id="tgl2">
      </div>
      <button type="submit" name="Cetak" value="pdf" class="btn btn-danger">Cetak PDF</button>
      <button type="submit" name="Cetak" value="excel" class="btn btn-success">Cetak Excel</button>
    </form>
  </div>
</div>
<?php
include('footer.php');
?>