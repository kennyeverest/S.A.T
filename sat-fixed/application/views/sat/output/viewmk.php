<style>
	.well {
    background: lightblue;
    text-align:center;
    font-weight:bold;
}
</style>

<div class="container">
  
  <div class="well">List Mata Kuliah Yang Ditutorkan</div>
  
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
	<button type="button" class="btn btn-success">
    <span class="glyphicon glyphicon-print"></span> Cetak!
  </button>
</div>

	</body>
</html>