<?php

require_once 'lattugas.php';

$orang2 = new orang ('diah setiawatie','bandung','xl rpl 2','belum menikah');
echo "Namanya : " .$orang2-> get_nama().'<br>';
echo "Tempat Lahir : " .$orang2-> get_ttl().'<br>';
echo "Kelas : " .$orang2-> get_kelas().'<br>';
echo "status : " .$orang2-> get_status().'<br>';


?>