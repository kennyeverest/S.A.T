# SAT
Project untuk sistem absensi tutor HIMSI bidang Keilmuan

#Panduan install :

1. Sebelumnya, import dulu script sql

2. Buka file Pentutor.php (sat-fixed/applications/models/)

3. Ganti semua method __construct pada applications/models/ sebelum melakukan instalasi
 
4. Pada file tersebut, dalam method __construct(), ganti seperlunya pada bagian $config
	 Bagian yang diganti pada config :
	 
	 	$config['hostname'] = "localhost"; --> Definisikan hostname anda
	 	
		$config['dbdriver'] = "mysqli"; --> Default menggunakan ini, karena yang sebelumnya deprecated :)
		
		$config['database'] = "mydb"; --> Definisikan schema database yang ingin anda gunakan
		
		$config['username'] = 'root'; --> Definisikan username yang dapat mengakses database client anda
		
		$config['password'] = ''; --> Definisikan password database client anda disini, biasanya tidak ada password

4. Copy folder sat-fixed ke directory htdocs

5. Buka browser, ketik url : localhost/sat-fixed/




