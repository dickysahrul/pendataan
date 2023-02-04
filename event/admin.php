<html>
<?php
    include "koneksi.php"
?>
<head>
	<title>home</title>
</head>
<body>

<h1>Selamat Datang Di Halaman Admin</h1>
<hr>
<nav>
        <a href="pendaftaran.php">Pendaftaran |</a>
        <a href="admin.php">Event |</a>
        <a href="login.php">Logout </a>
    </nav>
    <hr>

	  <h2 align="center">DATA EVENT</h2>
    <p align="center"><a href="form_siswa.php">+ TAMBAH SISWA</a></p>
    <br>
      <table border="2" width="80%"  cellpadding="10" align="center">
      	<tr>
      		<td align="center">Nomer</td>
      		<td align="center">Nama</td>
      		<td align="center">Tanggal</td>
      		<td align="center">Informasi</td>
      		<td align="center">Opsi</td>
      	</tr>
      	<?php

      	$tampil = mysqli_query($mysqli,"select*from admin");
      	$no= 1;
      	while ($hasil = mysqli_fetch_array($tampil)){
      		?>
      		<tr align="center">
      			<td><?php echo $no++;?></td>
      			<td><?php echo $hasil['nama'];?></td>
       			<td><?php echo $hasil['tanggal'];?></td>
      			<td><?php echo $hasil['informasi'];?></td>
      			
      			<td>
      				<a href ="edit_event.php?id=<?php echo $hasil['id'];?>">edit</a>|

      				<a href ="hapus_admin.php?hapus&id=<?= $hasil['id'];?>">hapus</a>
      			</td>
      		</tr>


      		<?php
      	}
      	?>

      	
      </table>
    <br>
    <hr>
    <div>Copyright &copy; 2023 | SMK Luqman Al Hakim Kudus</div>
  </body>
  </html>
