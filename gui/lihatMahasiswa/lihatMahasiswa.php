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
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 70%;
      margin: auto;
  }
  tengah{
  margin: auto;
     position: absolute;
     top: 0; left: 0; bottom: 0; right: 0;
     height: 300px;	
 }
  #test
 {
margin: auto;
     position: absolute;
     top: 0; left: 0; bottom: 0; right: 0;
     height: 300px;	
	}
 #judul 
 	{
 		text-align:center;
	}
 
  </style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Sistem Absen Tutorial</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Input<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Input Mahasiswa</a></li>
          <li><a href="#">Input Mata Kuliah</a></li>
          <li><a href="#">Input Penutor</a></li>
        </ul>
      </li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">View<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Data Mahasiswa</a></li>
          <li><a href="#">Data Absensi</a></li>
          <li><a href="#">Data Mata Kuliah</a></li>
        </ul>
      </li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
    </ul>
  </div>
</nav>
  
<div class="container" id="test">
    <div class="panel panel-info">
      <div class="panel-heading" id="judul">Data Mahasiswa</div>
      <div class="panel-body">
	  <div class="header"></div>
	  
	  <div class="tengah">     
  <table class="table table-bordered">
    <thead>
      <tr>
        <th class="nim">Nim</th>
        <th>Nama</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>081411631044</td>
        <td>Kenny Everest Karnama</td>
      </tr>
      <tr>
        <td>081411631050</td>
        <td>Halimatuz Zuhriyah</td>
      </tr>
      <tr>
        <td>081411631016</td>
        <td>Zafitra Ramadani</td>
      </tr>
      <tr>
        <td>081411631041</td>
        <td>Pratomo Adi Atmaji</td>
      </tr>
    </tbody>
  </table>
  </div>
  
	  </div>
    </div>
  
</div>

</body>
</html>
