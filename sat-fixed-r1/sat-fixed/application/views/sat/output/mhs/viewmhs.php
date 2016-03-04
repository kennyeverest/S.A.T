<style>
#test{
  margin: auto;
       position: absolute;
       top: 0; left: 0; bottom: 0; right: 0;
       height: 200px;

}
</style>

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
								<option id="kt4" name="kategori3" value="inputMahasiswa4.php">Penutor</option>
								<option id="kt2" name="kategori1" value="inputMahasiswa2.php">Mata Kuliah</option>
								<option id="kt3" name="kategori2" value="inputMahasiswa3.php">Tahun Angkatan</option>
								<option id="kt5" name="kategori4" value="inputMahasiswa5.php">Admin SAT</option>

							  </select>
		 </div>

     <div class="tombol">
       <button type="button" class="btn btn-default">
<span class="glyphicon glyphicon-eye-open"></span> Lihat!
         </button
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
