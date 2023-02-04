<html>
<head>
	<title>pendaftaran</title>
</head>

<body>
<h2>|selamat datang di halaman pendaftaran|</h2>
<hr>
<nav>
        <a href="pendaftaran.php">Pendaftaran |</a>
        <a href="admin.php">Event |</a>
        <a href="login.php">Logout </a>
    </nav>
    


<hr>
	<form action="proses_pendaftaran.php" method="POST">
	<fieldset>
		<legend>daftar</legend>

		<table>
			<tr>
				<td>Nama:</td>
				<td><input type="text" name="nama" placeholder="masukkan username..."></td>
			</tr>
			<tr>
				<td>Email:</td>
				<td><input type="email" name="email" placeholder="masukkan email..."></td>
			</tr>
            <tr>
				<td>tanggal lahir:</td>
				<td><input type="date" name="tanggal_lahir" title="masukkan tanggal lahir"></td>
			</tr>
            <tr>
				<td>alamat:</td>
				<td><textarea name="alamat" style="width:250px; height:75px;" placeholder="masukkan alamat..."></textarea></td>
			</tr>
			<tr>
				<td><input type="submit" value="Daftar"></td>
			</tr>
			
		</table>
		</fieldset>
		<br>
	<hr>
	<p> Copyright &copy SMK LUKMAN AL HAKIM KUDUS</p>
	</form>
</body>
</html>

