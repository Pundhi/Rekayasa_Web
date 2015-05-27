<html>
<head>
<title>Daftar Buku</title>
</head>
<body>
	<h3>Daftar Buku Terbaru</h3>
<?php 
$books = new SimpleXMLElement('buku.xml', null, true);
echo "<table border='1'>
	<tr>
		<th>Judul</th>
		<th>Pengarang</th>
		<th>Penerbit</th>
		<th>Harga</th>
		<th>ISBN</th>
	</tr>";
foreach($books as $buku){
	echo "<tr>
			<td width='200'>{$buku->judul}</td>
			<td width='200'>{$buku->pengarang}</td>
			<td width='130'>{$buku->penerbit}</td>
			<td width='80'>{$buku->harga}</td>
			<td width='130'>{$buku['isbn']}</td>
			</tr>";
}
	echo "</table>";
?>
</body>
</html>