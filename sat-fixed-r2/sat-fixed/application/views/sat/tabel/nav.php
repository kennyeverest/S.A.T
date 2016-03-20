
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
  
  table {
 table-layout: fixed;
    word-wrap: break-word;
  }
  
  th{
  width:50px;
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
      <li class="active"><a href="<?php echo base_url()?>index.php/home">Home</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Input<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="<?php echo base_url()?>index.php/inputmhs">Input Mahasiswa</a></li>
          <li><a href="<?php echo base_url()?>index.php/inputmk">Input Mata Kuliah</a></li>
          <li><a href="<?php echo base_url()?>index.php/inputpenutor">Input Penutor</a></li>
        </ul>
      </li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">View<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="<?php echo base_url()?>index.php/viewmhs">Data Mahasiswa</a></li>
          <li><a href="#">Data Absensi</a></li>
          <li><a href="#">Data Mata Kuliah</a></li>
        </ul>
      </li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="<?php echo base_url();?>index.php/c_login"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
    </ul>
  </div>
</nav>