<?php
include "koneksi.php";
 $koneksi = new koneksi();
 $db = $koneksi->getKoneksi();
 $query = $db->query('select * from calon_siswa1');

 while ($data = $query->fetch() ) :?>
    <p>
        <a href="edit.php?id=<?= $data['id']; ?>">
            <?= $data['nama'] ?>
        </a>
        
        <a href="proses_hapus.php?id=<?= $data['id']; ?>" style="color:white;background:red;padding:2px;border-radius:3px">
            Hapus
        </a>
    </p>
<?php endwhile ?>