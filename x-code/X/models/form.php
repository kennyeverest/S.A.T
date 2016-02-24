<html>
<head>
	<title><?php echo $judulApp; ?> </title>
		
</head>

<body>
	
	<?php
	echo heading($judulApp,1);
	echo form_open($aksi);
	echo form_label("NIM: ");
	echo form_input($nim);
	echo "</br>";
	echo form_label("Password: ");
	echo form_password($password);
	echo "</br>";
	echo form_submit("","Login");
	echo "</br>";
	
	echo form_close();
	
	
	
	?>
	
	
	
	<?php
	if($warn!='firstTime')
	echo $warn;
	?>

</body>


</html>