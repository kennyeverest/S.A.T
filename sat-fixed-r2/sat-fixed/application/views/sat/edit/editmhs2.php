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
    <div class="panel-heading" id="judul">Edit Mahasiswa</div>
    <div class="panel-body">
    	

	
	<div class="row">
	<div class="col-sm-3" ></div>
	<div class="col-sm-6" >
	<?php
		$attribute = array( 'class' => 'form-horizontal',
		       'role' => 'form');
		echo form_open('editmhs/tampil',$attribute);
		?><div class="form-inline">
		<input type="text" class="form-control" name="nim" id="nim" placeholder="Search NIM" value="<?php foreach ($hasil as $h){echo $h->nim;}?>" required autofocus >
		<button class="btn btn-primary btn-lg" type="submit" ><span class="glyphicon glyphicon-search" style="size:10px"></span></button>
		</div>
		<?php echo form_close(); ?>
      </div>
      <div class="row">
	<div class="col-sm-4" ></div>
	<div class="col-sm-4" style="padding:30px">
   	<?php
		$attribute = array( 'class' => 'form-horizontal',
		       'role' => 'form');
		echo form_open($aksi,$attribute);
		?>

		<div class="form-group clearfix" >

		<input type="text" class="form-control" name="nim2" id="nim2" placeholder="NIM" value="<?php foreach ($hasil as $h){echo $h->nim;}?>" <?php echo $dis;?> required autofocus>
		<br>
		<input type="text" class="form-control" name="nama" id="nama" placeholder="Nama Mahasiswa" value="<?php foreach ($hasil as $h){echo $h->nama;}?>" <?php echo $dis;?> required autofocus>
		<br>
		<input type="text" class="form-control" name="angkatan" id="angkatan" placeholder="Angkatan" value="<?php foreach ($hasil as $h){echo $h->angkatan;}?>" <?php echo $dis;?> required autofocus>
		<br>
		<input type="text" class="form-control" name="hp" id="hp" placeholder="No Handphone" value="<?php foreach ($hasil as $h){echo $h->no_hp;}?>" <?php echo $dis;?> required autofocus>
		<br>
		<input type="text" class="form-control" name="email" id="email" placeholder="Email" value="<?php foreach ($hasil as $h){echo $h->email;}?>" <?php echo $dis;?> required autofocus>
		<br>
		<div class="row">
		<div class="col-sm-3"></div>

		<div class="col-sm-9">
		<button class="btn btn-success btn-md" name="nim3" id="nim3" type="submit" value="<?php foreach ($hasil as $h){echo $h->nim;}?>" <?php echo $dis;?>>Simpan</button>

		<button class="btn btn-danger btn-md" type="button" onclick="bersihkan()" <?php echo $dis;?>>Batal</button>
		</div></div>


	<?php echo form_close(); ?>
		</div>
	</div>
	</div>
	</div>
    </div>
  </div></div></div></div>

  <?php

  	if($flag==2)
  	echo '<div class="alert alert-success">
  <strong>Success!</strong> Data berhasil diupdate
</div>';

	else if($flag==1)
	echo '<div class="alert alert-danger">
  <strong>Error!</strong> Data tidak berhasil diupdate
</div>';

else if($flag==3)
	echo '<div class="alert alert-danger">
  <strong>Error!</strong> NIM tidak ditemukan!
</div>';
  ?>
<script>
	function bersihkan()
	{
		document.getElementById('nim2').value="";
		document.getElementById('nama').value="";
		document.getElementById('angkatan').value="";
		document.getElementById('hp').value="";
		document.getElementById('email').value="";
	}
</script>

</body>
</html>
