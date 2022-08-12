<?php

 $id = $_POST['id'];
 $nama = $_POST['nama'];
 $asal = $_POST['asal_sekolah'];

 $database = new PDO("mysql:host=localhost;dbname=ppdb",'root','');
 $query = $database->query("insert into calon_siswa values('$id','$nama','$asal')");

 if($query){
    header("Location:index.php");
 }