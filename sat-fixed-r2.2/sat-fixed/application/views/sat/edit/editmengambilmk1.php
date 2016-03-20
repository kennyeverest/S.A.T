<style>

 #judul
 	{
 		text-align:center;
	}
.row.content {height:auto;} 

	</style>

<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2"></div>
    <div class="col-sm-8 "> 
    <div class="panel panel-info">
    <div class="panel-heading" id="judul">Edit Pengambilan MK</div>
    <div class="panel-body">
	<div class="row">
	<div class="col-sm-3" ></div>
	<div class="col-sm-6" style="padding:30px">
	<?php 
		$attribute = array( 'class' => 'form-inline',
		       'role' => 'form');
		echo form_open($aksi,$attribute);
		?>
		<input type="text" class="form-control" name="nim" id="nim" placeholder="Search NIM" required autofocus >
		<button class="btn btn-primary btn-lg" type="submit" ><span class="glyphicon glyphicon-search" style="size:10px"></span></button>
		


	<?php echo form_close(); ?>
		
	</div>
	</div>
	</div>
    </div>
  </div></div></div>

  
</body>
</html>
