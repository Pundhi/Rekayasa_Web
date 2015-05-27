<?php
require_once("koneksi.php");
$nama = $_POST['nama'];
$nim = $_POST['nim'];
$jkl = $_POST['jkl'];

$simpan = mysql_query("INSERT INTO mahasiswa(nama, nim, jkl) VALUES('$nama','$nim','$jkl')");
if($simpan) {
	echo "Nama :$nama<br/>";
	echo "Nim :$nim<br/>";
	echo "Jenis Kelamin :$jkl<br/>";
	echo "<a href='Index.php'>  Back </a>  Atau ";
	echo "<a href='tampil_database.php'> Tampilkan Database </a>";
} else {
echo "Nama Sudah ada !!  <a href='Index.php'> Back </a>";
}
?>

