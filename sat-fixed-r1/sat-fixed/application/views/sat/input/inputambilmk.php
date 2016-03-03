	<style>
	#test{
		margin: auto;
     position: absolute;
     top: 0; left: 0; bottom: 125; right: 0;
     height: 300px;
	}
	#judul{
	 text-align:center;
	}
	</style>
	</head>
	<body>


    <div class="container " id="test" >

      <div class="panel panel-info">
        <div class="panel-heading" id="judul">Input Mata Kuliah</div>
        <div class="panel-body">
        	<div class="header"></div>

    	<div class="tengah">
    	<div class="row">
    	<div class="col-sm-4" ></div>
    	<div class="col-sm-4" style="padding:30px">

					  <form role="form" id="inputMK">
						<div class="form-group">
						   <label for="sel1">Nama Mahasiswa</label>

							 <select class="form-control" id="namaMahasiswa">
                 <?php foreach ($list_mhs as $row){
                   echo "<option>".$row."</option>";
                 }

                   ?>

               </select>

						</div>
						<div class="form-group">
						  <label for="pwd">Mata Kuliah Yang Diambil:</label>

              <?php foreach ($list_mk as $help){
                echo '<div class="checkbox"> <label><input type="checkbox" value="1">'.$help."</label>"."</div>";
              }
                ?>

              <div class="checkbox">
							  <label><input type="checkbox" value="">Algoritma dan Pemrograman</label>
							</div>

						</div>
            <br>

            <div class="row">
        		<div class="col-sm-3"></div>

        		<div class="col-sm-9">
        		<button class="btn btn-success btn-md" type="submit" >Simpan</button>

        		<button class="btn btn-danger btn-md" type="button" onclick="bersihkan()">Batal</button>
        		</div></div>

						</div>
					  </form>
					  </div>



			</div>

	</body>
</html>
