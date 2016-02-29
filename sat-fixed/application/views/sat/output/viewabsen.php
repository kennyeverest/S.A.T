

<style>
	.well {
    background: lightblue;
    text-align:center;
    font-weight:bold;
}
#mkditutor{
	background: gray;
	text-align: center;
	font-weight: bold;
	color: black;

}
</style>

<div class="container">

  <div class="well">Absensi Peserta Tutorial</div>

</div>


<div class="col-sm-4"></div>
<div class="col-sm-8">
	<div class="container col-sm-7">

		<?php
		$attribute = array( 'class' => 'form-horizontal',
		       'role' => 'form');
		 echo form_open($aksi,$attribute);
		?>

    <?php

		echo $tabel;

		?>
<div class="well" id="mkditutor" >
Mata Kuliah Yang ditutorkan
	</div>
<div class="container">

	<div class="checkbox">
      <?php
				foreach ($taught as $value) {
					# code...
					$c = "<label><input type='checkbox' value='1'";
					$f = "name='mk[";
					$z = $c.$f.$value."]"."'>"."$value </label>";
					echo $z."</br>";
				}
			 ?>
    </div>
    <br>

    <div class="row">
		<div class="col-sm-1"></div>
		
		<div class="col-sm-11">
    <button type="submit" class="btn btn-success">

    <span class="glyphicon glyphicon-floppy-saved"></span> Simpan!
    </button>
    <button type="button" class="btn btn-danger">
    	 <span class="glyphicon glyphicon-remove"></span>Batal !
    </button>
        </div></div>

</div>
  </form>
  </div>
		</div>

</div>





	</body>
</html>

</body>
</html>
