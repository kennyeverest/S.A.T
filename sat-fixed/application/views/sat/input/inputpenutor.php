
<style>
	tengah{
  margin: auto;
     position: absolute;
     top: 0; left: 0; bottom: 0; right: 0;
     height: 300px;	
 }
 
 #test
 {
margin: auto;
     position: absolute;
     top: 0; left: 0; bottom: 0; right: 0;
     height: 300px;	
	}
 #judul 
 	{
 		text-align:center;
	}
 
	</style>

 
<div class="container " id="test" >
  
  <div class="panel panel-info">
    <div class="panel-heading" id="judul">Input Penutor</div>
    <div class="panel-body">
    	<div class="header"></div>
	
	<div class="tengah">
	<div class="row">
	<div class="col-sm-4" ></div>
	<div class="col-sm-4" style="padding:30px">
   	<?php
		$attribute = array( 'class' => 'form-horizontal',
		       'role' => 'form');
		echo form_open($aksi,$attribute);
		?>
	
		<div class="form-group clearfix" >
	
		<input type="text" class="form-control" name="nim" id="nim" placeholder="NIM" required autofocus>
		<br>
		<input type="text" class="form-control" name="nama" id="nama" placeholder="Nama Penutor" required autofocus>
		<br>
		<input type="text" class="form-control" name="password" id="password" placeholder="Password" required autofocus>
		<br>
		<div class="col-sm-4">
		
		</div>
		<button class="btn btn-success btn-md" type="submit" >Simpan</button>
		
			
		<div class="col-sm-3">
		</div>
		<button class="btn btn-danger btn-md" type="button" onclick="bersihkan()">Batal</button>	
		
		
		
	<?php form_close(); ?>
		</div>
	</div>
	</div>
	</div>
    </div>
  </div>
  
  <?php
  
  	if($flag==2)
  	echo '<div class="alert alert-success">
  <strong>Success!</strong> Data berhasil disimpan
</div>';

	else if($flag==1)
	echo '<div class="alert alert-danger">
  <strong>Error!</strong> Data tidak berhasil disimpan
</div>'; 
  
  ?>
<script>
	function bersihkan()
	{
		document.getElementById('nim').value="";
		document.getElementById('nama').value="";
		document.getElementById('password').value="";
	}
</script>

</body>
</html>
