<!DOCTYPE html>
<html lang="en">
  <head>
  	<title>
  		<?php echo $judul; ?>
  	</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="<?=base_url()?>css/style.css"/>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <style>
	
.col-sm-4{
		background-color: white;
		 opacity: 0.9;
    filter: alpha(opacity=60);
	}
.tengah{
  margin: auto;
     position: absolute;
     top: 0; left: 0; bottom: 0; right: 0;
     height: 300px;	
 }
 #salah
 {
 	text-align:center;
	}
  </style>
  </head>

  <body >
  
	<div class="header"></div>

	<div class="tengah">
	<div class="row "  >
	<div class="col-sm-4" ></div>
	<div class="col-sm-4" style="padding:30px">
    <?php
  	$attribut = array( 'role' => 'form','class' => 'form-horizontal'
						,"onsubmit" => "return cek();");
  	echo form_open($aksi,$attribut);
  	?>
        <h2 class="form-signin-heading text-center" style="color:Black   ">Sistem Absensi Tutorial</h2><br>
         <div class="form-group">
      
      <?php
      echo form_input($nim);
      ?>
      
    </div>
        
        <div class="form-group">
     
      <?php
      echo form_password($password);
      ?>
    </div>
    
        <div class="checkbox">
          <label style="color:LightSteelBlue ">
            <input type="checkbox" value="remember-me" > Remember me
          </label>
        </div><br>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      <?php
  echo form_close();
  ?>
	</div>
    </div> 
    </div><!-- /container -->
    
    <div class="error">
	<?php
	if(strcmp($warn,'firstTime')!=0)
	{
	//echo $warn;
	if(strcmp($warn,'salah')==0)
	{
		echo '<div class="alert alert-danger fade in">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Peringatan!</strong>'.'NIM atau password salah'.'</div>';
	}
	
	
	
	}
	?>
	</div>
	
	<div class="alert alert-warning fade in" id="warning" style="display:none">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Peringatan!</strong> Kolom tidak boleh ada yang kosong 
  </div>
  
  <script>
  function cek()
  {	
		var username = document.getElementById("nim").value;
		var password = document.getElementById("password").value;
		
		if(username == "" && password == ""){
	  document.getElementById("warning").style.display="block";
		return false;
		}
	  return true;
  }
  </script>
  
<div class="footer"></div>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>