## Info Project

Project Untuk Test Flips ini saya mengguanakan bahasa pemograman PHP Native dan saya buat dengan struktur standard folder yang saya contoh dari laravel, seperti :

- config -> Folder yang di gunakan untuk meletakan file configurasi.
	> Config.php -> File yang saya pakai untuk configurasi project seperti base_url dll.
	> Database.php -> File yang saya pakai untuk configurasi yang berkaitan dengan database dan fungsi fungsi SQL standar yang dapat di gunakan.
- controller -> Folder yang berisi file yang berfungsi untuk menghubungkan service yang di inginkan dan view tujuan
- service -> Folder yang berisi file service di gunakan untuk melakukan semua prosses seperti (validasi, dll) menjadi menghubungkan untuk Controller ke Repo.
- repo -> Folder yang berisi file repo yang melakukan semua prosses yang hanya berhubungan dengan sql /pengolahan data ke database.(kalo di laravel repository)
- res -> folder resource yang berisi template config dan saya menggunakan template startbootstrap-sb-admin-2 
- model -> Folder yang berisi file Model table untuk mengenalkan table database dan field table

## How To Run

Untuk menjalankan project ini ada beberapa langkah:

- Extract file zip / clone dari git:
	> Copy folder yang telah di Extract / clone ke folder www jika mengguanak laragon 
	> Copy folder yang telah di Extract / clone ke folder htdocs jika mengguanakan xampp/wampp
- Import/migrasi database:
	> Buka file database.sql dan copy query tersebut
	> Import file database.sql
- Configurasi base Url dan rubah nama folder project menjadi "test_flip", tahapan:
  > jika menggunakan laragon untuk menjalankan apache dan mysql nyalakan code ***$config['base_url'] = "http://test_flip.apps/";*** di folder config/Config.php
  > jika menggunakan xampp/wampp untuk menjalankan apache dan mysql nyalakan code ***$config['base_url'] = "http://localhost/flip_test/";*** di folder config/Config.php
- Default halaman Index tampilan list all data dari database
- Klik button Post Transactions dan akan muncul pop up form, untuk Post request ke ***https://nextar.flip.id/disburse*** dan insert data ke database
- Klik button check untuk Get request ke ke ***https://nextar.flip.id/disburse/{transaction_id}*** untuk check status, reciept, time_served dan akan mengupdate data ke database sesuai response yang di dapatkan 