<html>
<head>
<title>Jurusan</title>
</head>
</body>

<h3>Identitas Jurusan</h3>
<?php 
$usm = new SimpleXMLElement('usm.xml', null, true);
echo "
<table>
<tr>
<td>Nama</td><td>:</td><td>{$usm->nama}</td>
</tr>
<tr>
<td>Nim</td><td>:</td><td>{$usm->nim}</td>
</tr>
<tr>
<td>Progdi</td><td>:</td><td>{$usm->progdi}</td>
</tr>
<tr>
<td>Fakultas</td><td>:</td><td>{$usm->fakultas}</td>
</tr>
<tr>
<td>Universitas</td><td>:</td><td>{$usm->universitas}</td>
</tr>
<tr>
<td>Alamat</td><td>:</td><td>{$usm->alamat}</td>
</tr>
<tr>
<td>Kota</td><td>:</td><td>{$usm->kota}</td>
</tr>
<tr>
<td>Propinsi</td><td>:</td><td>{$usm->propinsi}</td>
</tr>
<tr>
<td>Kode Pos</td><td>:</td><td>{$usm->kodepos}</td>
</tr>
<tr>
<td>Nomor Telepon</td><td>:</td><td>{$usm->telepon}</td>
</tr>
<tr>
<td>Email</td><td>:</td><td>{$usm->email}</td>
</tr>
</table>";
?>
</body></html>