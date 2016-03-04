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
								<option id="kt2" name="kategori1" value="inputMahasiswa2.php">Mata Kuliah</option>
								<option id="kt3" name="kategori2" value="inputMahasiswa3.php">Tahun Angkatan</option>
								<option id="kt4" name="kategori3" value="inputMahasiswa4.php">Penutor</option>
								<option id="kt5" name="kategori4" value="inputMahasiswa5.php">Admin SAT</option>
							  </select>
		 </div>
		 
		  </div>
		  </div>
		  <div class="row">
		 <div class="col-xs-1"></div>
		 <div class="col-xs-6">
			<label for="list">Mata Kuliah</label>

		 </div>
		 </div>
		
		  <div class="row">
		 <div class="col-xs-1"></div>
		 <div class="col-xs-6">
		 <div class="form-group">
							  <select class="form-control" id="MataKuliah" name="MataKuliah" onChange="window.location.href=this.value">
								<option id="mk1" name="matakuliah1" value=""></option>
								<option id="mk2" name="matakuliah2" value="http://www.google.com">Algoritma dan Pemrograman</option>
								<option id="mk3" name="matakuliah3" value="http://www.google.com">Kalkulus</option>
								<option id="mk4" name="matakuliah4" value="http://www.google.com">Struktur Data</option>
								<option id="mk5" name="matakuliah5" value="http://www.google.com">Matriks dan Transformasi Linear</option>
								<option id="mk6" name="matakuliah6" value="http://www.google.com">Statistika Dasar</option>
								<option id="mk7" name="matakuliah7" value="http://www.google.com">Pemrograman Berbasis Internet</option>
								<option id="mk8" name="matakuliah8" value="http://www.google.com">Sistem Basis Data</option>
								<option id="mk9" name="matakuliah9" value="http://www.google.com">Matematika Diskrit</option>
								<option id="mk10" name="matakuliah10" value="http://www.google.com">Basis Data</option>

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