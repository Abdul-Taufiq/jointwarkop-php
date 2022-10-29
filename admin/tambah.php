<?php 
require '../function.php';

//cek apakah tombol dipencet
if ( isset($_POST["submit"]) ) {

	//cek data berhasil
	if (tambah($_POST) > 0) {
		echo "
			<script>
			alert('DATA BERHASIL DITAMBAHKAN !');
			document.location.href = 'mkmn.php';
			</script>
		";
	} else {
		echo "
			<script>
			alert('DATA GAGAL DITAMBAHKAN !!!');
			document.location.href = 'mkmn.php';
			</script>
		";
	}
}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data makanan atau Minuman</title>
	<link rel="stylesheet" type="text/css" href="../style.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Ubuntu:wght@300&display=swap" rel="stylesheet">
</head>
<body>
	<nav>
		<div class="logo">
			<img class="glogo" src="../gambar/logo.jpg" align="left" usemap="#Home"> <p><a href="index.php">Joint Warkop</a></p>
			<map name="Home">
					<area shape="circle" coords="0,0,100" href="index.php">
			</map>
		</div>
		<ul>
			<li><a href="index.php"> Beranda </li>
			<li><a href="mkmn.php"> Makanan & Minuman </a></li>
			<li><a href="tentang.php"> Tentang Kami </a></li>
			<li><a href="../login.php"> Login </a></li>
		</ul>
	</nav>
	<br>
  <div class="konten" align="center">
	<h1>TAMBAH DATA MAKANAN ATAU MINUMAN</h1>
	<form action="" method="post" enctype="multipart/form-data" >
	<table border="0" cellpadding="10" cellspacing="5" style="background-color: white; width: 40%; padding: 10px;">
		<tr>
			<td style="text-align: left;">
			<ul style="list-style: none;">
			<li style="margin: 10px 0;">
				<label for="nama"> Nama Produk : </label> <br>
				<input type="text" name="nama" id="nama" required autocomplete="off" style="margin: 10px; width: 70%; ">
			</li>
			<li style="margin: 10px 0;">
				<label for="kategori"> Kategori : </label><br>
				 <select name="kategori" id="kategori" style="width: 70%; margin: 10px;">
					<option value="Makanan">Makanan</option>
					<option value="Minuman">Minuman</option>
				 </select>
			</li>
			<li style="margin: 10px 0;">
				<label for="harga"> Harga : </label><br>
				<input type="number" name="harga" id="harga" required autocomplete="off" style="margin: 10px; width: 70%;">
			</li>
			<li style="margin-top: 0;">
				<label for="dskp"> Deskripsi : </label><br>
				<textarea name="dskp" id="dskp" rows="3" cols="47" style="margin: 10px;" ></textarea>
			</li>
			<li style="margin: 10px 0;">
				<label for="gambar"> Gambar : </label><br>
				<input type="file" name="gambar" id="gambar" s autocomplete="off" style="margin: 10px; width: 70%;">
			</li>
			<li style="margin: 10px 0;  text-align: center;">
				<button type="submit" name="submit" style="width: 30%;"> TAMBAH DATA </button> ====
				<button type="submit" name="submit" style="width: 30%; "><a href="mkmn.php" style="text-decoration: none; color: black;"> KEMBALI </a></button>		
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