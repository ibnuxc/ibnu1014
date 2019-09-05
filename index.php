<?php
header('Content-type: application/xml');
header("Access-Control-Allow-Origin:*");

echo "<inforuang>";

	$host="localhost";
    $user="root";
    $passwd="";
    $db="inforuang_ibnu";
    $koneksi = mysqli_connect($host, $user, $passwd)or die (mysqli_error($koneksi));
    if ($koneksi)
    {
        mysqli_select_db($koneksi,$db) or die(mysql_error());
    }
	
$sql="select * from ruang";
$query=mysqli_query($koneksi, $sql) or die(mysqli_error($koneksi));
while ($infoRuang=mysqli_fetch_array($query)) {
	echo "<kode_ruangan kode_ruang='".$infoRuang['kode_ruang']."'>";
	echo "<kode_ruang>".$infoRuang['kode_ruang']."</kode_ruang>";
	echo "<nama_ruang>".$infoRuang['nama_ruang']."</nama_ruang>";
	echo "<kapasitas>".$infoRuang['kapasitas']."</kapasitas>";
	echo "<lokasi>".$infoRuang['lokasi']."</lokasi>";
	echo "</kode_ruangan>";
}
echo "</inforuang>";
