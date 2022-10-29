<?php 
require '../function.php';

$id = $_GET["id"];

//query
$homepage = query("SELECT * FROM homepage WHERE id_h = $id")[0];

//cek apakah tombol dipencet
if ( isset($_POST["submit"]) ) {

	//cek data berhasil
	if (ubahhome($_POST) > 0) {
		echo "
			<script>
			alert('DATA BERHASIL DIUBAH !');
			document.location.href = 'index.php';
			</script>
		";
	} else {
		echo "
			<script>
			alert('DATA GAGAL DIUBAH !!!');
			document.location.href = 'index.php';
			</script>
		";
	}
}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Ubah Tampilan Home</title>
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
	<h1>UBAH GAMBAR HOME</h1>
	<form action="" method="post" enctype="multipart/form-data">
	<input type="hidden" name="id" value=" <?= $homepage["id_h"] ?> ">
	<table border="0" cellpadding="10" cellspacing="5" style="background-color: white; width: 40%; padding: 10px;">
		<tr>
			<td style="text-align: left;">
			<ul style="list-style: none;">
			<li style="margin: 10px 0;">
				<label for="gambar"> Gambar : </label><br>
				<input type="file" name="gambar" id="gambar" autocomplete="off" value="<?=$homepage["gambar"]?> " style="margin: 10px; width: 70%;">
			</li>
			<li style="margin: 10px 0;  text-align: center;">
				<button type="submit" name="submit" style="width: 30%;"> UBAH DATA </button> ====
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