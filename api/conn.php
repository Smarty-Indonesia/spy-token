<?php
// $dbhost = "119.235.252.50";
// $dbuser = "u0243318_card88";
// $dbpass = "iLL}k_hRfq2)";
// $dbname = "u0243318_nemot";
// $koneksi = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
// if(!$koneksi){ die ("Koneksi dengan database gagal: ".mysqli_connect_errno()." - ".mysqli_connect_error()); }
// echo "Connected successfully";
// mysqli_close($koneksi);

$dbhost = "localhost";
$dbuser = "spytoken_member";
$dbpass = "Member@2022";
$dbname = "spytoken_member";
$koneksi = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
if(!$koneksi){ die ("Koneksi dengan database gagal: ".mysqli_connect_errno()." - ".mysqli_connect_error()); }
echo "Connected successfully";
mysqli_close($koneksi);

?>
