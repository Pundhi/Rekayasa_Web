<?php 
// sertakan file koneksi.php
include "koneksi.php";

// perintah query
$query="select * from mahasiswa";
$perintah=mysql_query($query);

echo "<h1>Daftar Nama Mahasiswa</h1>
	 	<table border=1>
	  	<tr>
  			<td>NAMA</td><td>NIM</td><td>JENIS KELAMIN</td>
  	 	</tr>";
// tampilkan data
while ($data=mysql_fetch_array($perintah))
{
	echo "<tr>		  
			<td>$data[nama]</td>
			<td>$data[nim]</td>
			<td>$data[jkl]</td>
		  </tr>";
}
echo "</table><br>";
echo "<a href='Index.php'>Back</a>";
?> 
