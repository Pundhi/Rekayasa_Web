<?php
session_start();
if(isset($_SESSION['username'])) {
header('location:index.php'); }
?>
<html>
<head>
<title>Form Pendaftaran</title>
</head>
	<body>
		<form action="proses.php" method="post">
			Nama<br/>
			<input type="text" name="nama" required><br/>
			Nim<br/>
			<input type="text" name="nim" required><br/>
			Jenis Kelamin<br/>
			<input type="radio" name="jkl" value="L">Laki-Laki
			<input type="radio" name="jkl" value="P">Perempuan<br/>

			<input type="submit" value="Input">
			<input type="reset" value="Batal">
		</form>
</body>
</html>