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

		<?php
    echo form_open($aksi);
     ?>
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
							  <select class="form-control" id="kategori" name="kategori" >
                  <option id="intro" name="intro" selected value="intro">Pilih Kategori</option>
                  <option id="kt1" name="nochoice" value="nochoice">Tidak ada klasifikasi </option>
								<option id="kt4" name="penutor" value="penutor">Penutor</option>
								<option id="kt2" name="mk" value="mk">Mata Kuliah</option>
								<option id="kt3" name="angkatan" value="angkatan">Tahun Angkatan</option>
								<option id="kt5" name="admin" value="admin">Admin SAT</option>



		 </div>

<br>
<div class="tahun">
<input type="text" class="form-control" name="angkatan" id="angkatan" placeholder="Angkatan" required autofocus>
</div>

<br>


<div class="tombol">
            <input type="submit" name="submit" value="click me">
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
