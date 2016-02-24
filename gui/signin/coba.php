<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <style>
	body{
		background-image: url("classroom.jpg");
	}
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
  </style>
  </head>

  <body >
  
	<div class="header"></div>

	<div class="tengah">
	<div class="row "  >
	<div class="col-sm-4" ></div>
	<div class="col-sm-4" style="padding:30px">
      <form class="form-horizontal" >
        <h2 class="form-signin-heading text-center" style="color:Black   ">Sistem Absensi Online</h2>
        <label for="NIM" class="sr-only">NIM</label>
        <input type="text" id="inputNIM" class="form-control" placeholder="NIM" required autofocus><br>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" required><br>
        <div class="checkbox">
          <label style="color:LightSteelBlue ">
            <input type="checkbox" value="remember-me" > Remember me
          </label>
        </div><br>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      </form>
	</div>
    </div> 
    </div><!-- /container -->
<div class="footer"></div>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
