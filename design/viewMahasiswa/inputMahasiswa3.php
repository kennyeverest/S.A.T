<!DOCTYPE html>
<html>
	<head>
	<title>Sistem Absen Tutorial</title>
		  <meta charset="utf-8">
		  <meta name="viewport" content="width=device-width, initial-scale=1">
		  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
		  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
		  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	</head>
	<body>
	<div class="container" id="test">
			<div class="panel panel-info">
				<div class="panel-heading" id="judul">View Mahasiswa</div>
				<div class="panel-body" id="isi">
					
		<form role="form">
		<div class="form-group">
		<div class="container">
		 
		<div class="row">
		 <div class="col-xs-1"></div>
		 <div class="col-xs-6">
			<label for="list">Kategori</label>
		 </div>
		 </div>
		 <div class="row">
		 <div class="col-xs-1"></div>
		 <div class="col-xs-6">
		 <div class="form-group">
							 <select class="form-control" id="Kategori" name="Kategori" onChange="window.location.href=this.value">
								<option id="kt3" name="kategori2" value="inputMahasiswa3.php">Tahun Angkatan</option>
								<option id="kt2" name="kategori1" value="inputMahasiswa2.php">Mata Kuliah</option>
								<option id="kt4" name="kategori3" value="inputMahasiswa4.php">Penutor</option>
								<option id="kt5" name="kategori4" value="inputMahasiswa5.php">Admin SAT</option>
							  </select>
		 </div>
		 
		  </div>
		  </div>
		  <div class="row">
		 <div class="col-xs-1"></div>
		 <div class="col-xs-6">
			<label for="list">Angkatan</label>
		 </div>
		 </div>
		
		  <div class="row">
		 <div class="col-xs-1"></div>
		 <div class="col-xs-6">
		 <div class="form-group">
							  <select class="form-control" id="Angkatan" name="Angkatan" onChange="window.location.href=this.value">
								  <option id="at1" name="angkatan1" value=""></option>
								<option id="at2" name="angkatan2" value="">2015</option>
								<option id="at3" name="angkatan3" value="">2014</option>
								
								  </select>
		 </div>
		 
		  </div>
		  </div>
		 
		 </div>
		 </div>
		 </form>
		 
					  
					  </div>

				
				<div class="panel-footer" id="footer"></div>
			
			</div>
	</div>
				
	</body>
</html>