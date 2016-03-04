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
				<div class="panel-heading" id="judul">Penutor Pengajar Matakuliah</div>
				<div class="panel-body" id="isi">
					
					  <form role="form" id="MKTutor">
						<div class="form-group">
						   <label for="sel1">Nama Penutor</label>
						
							  <select class="form-control" id="namaPenutor" name="namaPenutor">
								<option id="penutor1" name="nama1">Pratomo Adi Atmaji</option>
								<option id="penutor2" name="nama2">Kenny Everest Karnama</option>
								<option id="penutor3" name="nama3">Zafitra Ramadani</option>
								<option id="penutor4" name="nama4">Halimatuz Zuhriyah</option>
							  </select>
							  
						</div>
						<div class="form-group">
						  <label for="mk">Mata Kuliah Yang Diajar:</label>
						  <form role="form">
							<div class="checkbox" id="matkulTutor" name="checkboxMatkul">
							  <label><input type="checkbox" id="alpro" name="alpro" value="">Algoritma dan Pemrograman</label>
							</div>
							<div class="checkbox">
							  <label><input type="checkbox" name="mk2"id="kalkulus" name="kalkulus" value="">Kalkulus</label>
							</div>
							<div class="checkbox">
							  <label><input type="checkbox" id="strukdat" name="strukdat" value="">Struktur Data</label>
							</div>
							<div class="checkbox">
							  <label><input type="checkbox" id="mtl" name="mtl" value="">Matriks dan Transformasi Linear</label>
							</div>
							<div class="checkbox">
							  <label><input type="checkbox" id="strukdat" name="strukdat" value="">Statistika Dasar</label>
							</div>
							<div class="checkbox">
							  <label><input type="checkbox" id="sistemBasisData" name="strukdat" value="sistemBasisData">Sistem Basis Data</label>
							</div>
							<div class="checkbox">
							  <label><input type="checkbox" id="pbi" name="pbi"="">Pemrograman Berbasis Internet</label>
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