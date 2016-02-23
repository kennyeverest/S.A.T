# SAT
Project untuk sistem absensi tutor HIMSI bidang Keilmuan

Panduan install :

1. Copy file yang berada di SAT/application/controller ke dalam directory CI anda /application/controller

2. Copy file yang berada di SAT/application/views ke ke dalam directory CI anda /views/controller

3. Copy file SAT/assets ke dalam directory CI anda 

4. Pada director CI/application/config/config, edit file config tersebut, terutama pada baris ke-26
   yang berisi $config['base_url'] = ''; diganti menjadi $config['base_url'] = 'http://localhost/codeigniter';
   
5. Setelah itu, buka seperti biasa --> localhost/codeigniter/index.php/My_Song


