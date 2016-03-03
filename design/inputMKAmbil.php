<!DOCTYPE html>
<html lang="en">
	<head>
	 <title>Sistem Absen Tutorial</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<style>
	#test{
		margin: auto;
     position: absolute;
     top: 0; left: 0; bottom: 0; right: 0;
     height: 300px;	
	}
	#judul{		
	 text-align:center;
	}
	</style>
	</head>
	<body>
		<div class="container" id="test">
			<div class="panel panel-info">
				<div class="panel-heading" id="judul">Input Matakuliah Yang Diambil</div>
				<div class="panel-body" id="isi">
					
					  <form role="form" id="inputMK">
						<div class="form-group">
						   <label for="sel1">Nama Mahasiswa</label>
						
							  <select class="form-control" id="namaMahasiswa">
								<option>Pratomo Adi Atmaji</option>
								<option>Kenny Everest Karnama</option>
								<option>Zafitra Ramadani</option>
								<option>Halimatuz Zuhriyah</option>
							  </select>
							  
						</div>
						<div class="form-group">
						  <label for="pwd">Mata Kuliah Yang Diambil:</label>
						  <form role="form">
							<div class="checkbox">
							  <label><input type="checkbox" value="">Algoritma dan Pemrograman</label>
							</div>
							<div class="checkbox">
							  <label><input type="checkbox" value="">Kalkulus</label>
							</div>
							<div class="checkbox">
							  <label><input type="checkbox" value="">Struktur Data</label>
							</div>
							<div class="checkbox">
							  <label><input type="checkbox" value="">Matriks dan Transformasi Linear</label>
							</div>
							<div class="checkbox">
							  <label><input type="checkbox" value="">Statistika Dasar</label>
							</div>
							<div class="checkbox">
							  <label><input type="checkbox" value="">Sistem Basis Data</label>
							</div>
							<div class="checkbox">
							  <label><input type="checkbox" value="">Pemrograman Berbasis Internet</label>
							</div>
						  </form>
						</div>
						<div class="row">
						<button type="submit" class="btn btn-success">Simpan</button>
						<button type="submit" class="btn btn-danger">Batal</button>
						</div>
					  </form>
					  </div>

				
				<div class="panel-footer" id="footer"></div>
			
			</div>
		</div>
	</body>
</html>