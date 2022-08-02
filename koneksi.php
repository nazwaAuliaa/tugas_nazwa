<?php

$dbh = new PDO ('mysql:host=localhost;dbname=skul',"root","");

$query = $dbh->query('select * from siswa');

?>

<h1>Data siswa<h1>

<?php while($result = $query->fetch()){?>
    <p> <?= $result ['namasiswa']; ?>
<?php } ?>
