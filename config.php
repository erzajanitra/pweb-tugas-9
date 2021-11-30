<?php

$server = "localhost";
$user = "id18037938_root";
$password = "[Em!&(d35tl=cgUI";
$nama_database = "id18037938_pendaftaran_siswa";

$db = mysqli_connect($server, $user, $password, $nama_database);

if( !$db ){
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}

?>