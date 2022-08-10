<?php
$database = new PDO('mysql:host=localhost;dbname=sekolah3','root','');
$query = $database->query("update siswa set nama='naon' where kelas='12'   ");