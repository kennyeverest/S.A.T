	<style>
 #judul
 	{
 		text-align:center;
	}
.row.content {height:auto;} 
	</style>
	
	</head>
	<body>

    <div class="container-fluid ">   
      <div class="row content">
    <div class="col-sm-2"></div>
    <div class="col-sm-8 ">
  <div class="panel panel-info">
    <div class="panel-heading" id="judul">Edit Pengambilan MK</div>
    <div class="panel-body">
    	

	
	<div class="row text-center">
	<div class="col-sm-3" ></div>
	<div class="col-sm-6" >
	<?php
		$attribute = array( 'class' => 'form-horizontal',
		       'role' => 'form');
		echo form_open('editmengambilmk/tampil',$attribute);
		?><div class="form-inline">
		<input type="text" class="form-control" name="nim" id="nim" placeholder="Search NIM" value="<?php foreach ($hasil as $h){echo $h->nim;}?>" required autofocus >
		<button class="btn btn-primary btn-lg" type="submit" ><span class="glyphicon glyphicon-search" style="size:10px"></span></button>
		</div>
		<?php echo form_close(); ?>
      </div></div>

    	<div class="row">
	    <div class="col-sm-3" ></div>
	    <div class="col-sm-6" >
	    <form class="form-horizontal" role="form">
                <div class="form-group">
				<label for="sel1">Nama Mahasiswa</label>
                <input type="text" class="form-control" name="nama" id="nama" placeholder="<?php foreach ($hasil as $h){echo $h->nama;}?>" disabled>
                </div>
                </form>
				<?php
				$attribute = array( 'class' => 'form-horizontal',
							 'role' => 'form');
				echo form_open($aksi,$attribute);
				?>
				<div class="form-group">
				<label for="pwd">Mata Kuliah Yang Diambil:</label>
                   <?php
							$puter = 0;
							foreach ($list_mk as $help){
								$c="";
								if(in_array($list_id[$puter], $ambilMK)==true){$c="checked";}
                echo '<div class="checkbox"> <label><input type="checkbox" name="mk[]" id="mk" value="'.$list_id[$puter].'"'.$dis.' '.$c.'>'.$help."</label>"."</div>";
								$puter++;
							}
                ?>
                 </div>
                 <br>
                <div class="row">
        		<div class="col-sm-3"></div>

        		<div class="col-sm-9">
        		<button class="btn btn-success btn-md" name="nimMHS" id="nimMHS" value="<?php foreach ($hasil as $h){echo $h->nim;}?>" type="submit"  <?php echo $dis;?> >Simpan</button>

        		<button class="btn btn-danger btn-md" type="button" onclick="bersihkan()"  <?php echo $dis;?>>Batal</button>
        		</div></div>

						</div>
					  <?php echo form_close(); ?>
					  </div>



			</div></div></div></div></div>
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
else if($flag==4)
	echo '<div class="alert alert-danger">
  <strong>Error!</strong> MK kosong !
</div>';
  ?>
			<script>
			function bersihkan(){
				location.reload();
			}
			</script>

	</body>
</html>
