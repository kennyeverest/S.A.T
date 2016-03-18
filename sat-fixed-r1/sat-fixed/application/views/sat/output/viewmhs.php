
<style>
	.well {
    background: lightblue;
    text-align:center;
    font-weight:bold;
	
}
</style>

<div class="container">

  <div class="well"><p style="text-align:center">Daftar Mahasiswa</p><br><?php echo $hari.", ".date('d-m-Y');?></div>

</div>

<div class="col-sm-4"></div>
<div class="col-sm-8">
	<div class="container col-sm-7">
		<?php

		echo $tabel;

		?>
	</div>
</div>

<div class="col-sm-6"></div>

<div class="col-sm-6">
	<button type="button" class="btn btn-success" onclick="cetak()">
    <span class="glyphicon glyphicon-print"></span> Cetak!
  </button>
  
  <script type="text/javascript">
    function cetak() {
            window.location.href = "<?php echo site_url('/c_php_excel_class');?>";
        }
</script>
</div>

	</body>
</html>
