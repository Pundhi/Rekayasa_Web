<html>
<head>
<title>Table Identitas</title>
</head>
<body>
	<h3 align="center">Table Identitas</h3>
<?php 
$xml = new SimpleXMLElement('jurusan.xml', null, true);
echo "<table border='1' align='center'>
	<tr>
		<th>ID</th>
		<th>Jurusan</th>
		<th>Fakultas</th>
		<th>Email Jurusan</th>
		<th>Web Jurusan</th>
		<th>No.Telepon Jurusan</th>
	</tr>";
foreach($xml as $program_studi){
	echo "<tr align='center'>
			<td width='150'>{$program_studi->Id}</td>
			<td width='150'>{$program_studi->Jurusan}</td>
			<td width='150'>{$program_studi->Fakultas}</td>
			<td width='150'>{$program_studi->Email_Jurusan}</td>
			<td width='150'>{$program_studi->Web_Jurusan}</td>
			<td width='150'>{$program_studi->Nomor_Telepon_Jurusan}</td>
			</tr>";
}
	echo "</table>";
?>
</body>
</html>