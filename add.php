<?php
	include("login.php");
	if (!isset($_SESSION['login_user'])) {
		header("location:index.php");
	}
	echo "welcome, ".$_SESSION['login_user'].".";
?>
<!DOCTYPE html>
<html>
<head>
	<title>tambah aja terus</title>
</head>
<body>
	<p><a href="index.php">home</a>
	
	<h3>Tambah Data</h3>
	
	<form action="tambah.php" method="post" enctype="multipart/form-data">
		<table cellpadding="3" cellspacing="0">
			<tr>
				<td>NRP</td>
				<td>:</td>
				<td><input type="text" name="nrp" placeholder="xx-xxxx"required></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><input type="text" name="name" size="30" required></td>
			</tr>
			<tr>
				<td>Asal</td>
				<td>:</td>
				<td><input type="text" name="residence" size="30" required></td></td>
			</tr>
			<tr>
				<td>Tanggal lahir</td>
				<td>:</td>
				<td><input type="text" name="birthday" size="10" placeholder="yyyy-mm-dd" required></td></td>
			</tr>
			<tr>
				<td>Foto</td>
				<td>:</td>
				<td><input type="file" name="fileToUpload" required></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td></td>
				<td><input type="submit" name="add" value="Tambah"></td>
			</tr>
		</table>
	</form>
</body>
</html>