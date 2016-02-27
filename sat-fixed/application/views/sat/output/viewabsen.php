

<style>
	.well {
    background: lightblue;
    text-align:center;
    font-weight:bold;
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
<div class="col-sm-7"></div> 
   
    <button type="submit" class="btn btn-success">
    	
    <span class="glyphicon glyphicon-floppy-saved"></span> Simpan!
    </button>
    <button type="button" class="btn btn-danger">
    	 <span class="glyphicon glyphicon-remove"></span>Batal !
    </button>
    
    
  </form>
  </div>
		</div>
	
</div>





	</body>
</html>

</body>
</html>
