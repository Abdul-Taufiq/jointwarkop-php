<?php 
require '../../function.php';

//cek apakah tombol dipencet
if ( isset($_POST["submit"]) ) {

	//cek data berhasil
	if (tambahpegawai($_POST) > 0) {
		echo "
			<script>
			alert('DATA BERHASIL DITAMBAHKAN !');
			document.location.href = '../tentang.php';
			</script>
		";
	} else {
		echo "
			<script>
			alert('DATA GAGAL DITAMBAHKAN !!!');
			document.location.href = '../tentang.php';
			</script>
		";
	}
}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data Pegawai</title>
	<link rel="stylesheet" type="text/css" href="../../style.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Ubuntu:wght@300&display=swap" rel="stylesheet">
</head>
<body>
	<nav>
		<div class="logo">
			<img class="glogo" src="../../gambar/logo.jpg" align="left" usemap="#Home"> <p><a href="../index.php">Joint Warkop</a></p>
			<map name="Home">
					<area shape="circle" coords="0,0,100" href="../index.php">
			</map>
		</div>
		<ul>
			<li><a href="../index.php"> Beranda </li>
			<li><a href="../mkmn.php"> Makanan & Minuman </a></li>
			<li><a href="../tentang.php"> Tentang Kami </a></li>
			<li><a href="../../login.php"> Login </a></li>
		</ul>
	</nav>
	<br>
  <div class="konten" align="center">
	<h1>TAMBAH DATA PEGAWAI</h1>
	<form action="" method="post" enctype="multipart/form-data">
	<table border="0" cellpadding="10" cellspacing="5" style="background-color: white; width: 40%; padding: 10px;">
		<tr>
			<td style="text-align: left;">
			<ul style="list-style: none;">

			<li style="margin: 10px 0;">
				<label for="nama"> Nama : </label> <br>
				<input type="text" name="nama" id="nama" required autocomplete="off" style="margin: 10px; width: 70%; ">
			</li>
			<li style="margin: 10px 0;">
				<label for="ttl"> TTL : </label> <br>
				<input type="text" name="ttl" id="ttl" required autocomplete="off" style="margin: 10px; width: 70%; ">
			</li>
			<li style="margin-top: 0;">
				<label for="alamat"> Alamat : </label><br>
				<textarea name="alamat" id="alamat" rows="3" cols="47" style="margin: 10px;" ></textarea>
			</li>
			<li style="margin: 10px 0;">
				<label for="agama"> Agama : </label><br>
				 <select name="agama" id="agama" style="width: 70%; margin: 10px;">
					<option value="Islam">Islam</option>
					<option value="Kristen">Kristen</option>
					<option value="Hindu">Hindu</option>
					<option value="Budha">Budha</option>
				 </select>
			</li>
			<li style="margin: 10px 0;">
				<label for="jns_kelamin"> Jenis Kelamin : </label><br>
				 <select name="jns_kelamin" id="jns_kelamin" style="width: 70%; margin: 10px;">
					<option value="Laki-Laki">Laki-Laki</option>
					<option value="Perempuan">Perempuan</option>
				 </select>
			</li>
			<li style="margin: 10px 0;">
				<label for="nohp"> No hp : </label><br>
				<input type="text" name="nohp" id="nohp" s autocomplete="off" style="margin: 10px; width: 70%;">
			</li>
			<li style="margin: 10px 0;">
				<label for="gambar"> Gambar : </label><br>
				<input type="file" name="gambar" id="gambar" s autocomplete="off" style="margin: 10px; width: 70%;">
			</li>
			<li style="margin: 10px 0;  text-align: center;">
				<button type="submit" name="submit" style="width: 30%;"> TAMBAH DATA </button> ====
				<button type="submit" name="submit" style="width: 30%; "><a href="../tentang.php" style="text-decoration: none; color: black;"> KEMBALI </a></button>		
			</li>

		</ul>
		</td>
	</tr>
	</table>
	</form>
</div>
<div class="footer">
	<br><br><br><br>
	Copyright &copy; 09/01/20201 - <?php echo date("d/m/Y"); ?>
</div>
</body>
</html>