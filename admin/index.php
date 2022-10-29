<?php
require '../function.php';

$hp = query("SELECT * FROM homepage") ;

?>

<!DOCTYPE html>
<html>
<head>
	<title>Welcome To Joint Warkop</title>
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

<div class="konten" align="center">
	<h1>WELCOME TO JOINT WARKOP</h1>
	<br>
	<b>Warung Kopi yang menyedikan aneka kopi dan minuman-minimuan segar, <br> </b>
 	<b>Kami juga menyediakan fasilitas Free Wi-Fi yang bisa anda kujungi di :<br></b>
	<b>Jl.Raya Blora - Purwodadi, Singopranan, Belor, Ngaringan, Kabupaten Grobogan, Jawa Tengah</b>
	<br><br><br>
	
	<p>
		<?php foreach ($hp as $row ) : ?>
			
			<img class="g0" src="../gambar/<?= $row["gambar"]; ?>">
		<?php endforeach; ?>
		<a href="ubahhome.php?id=1"><button style="width: 20%; height: 20%;"> UBAH GAMBAR 1</button></a> ||
		<a href="ubahhome.php?id=2"><button style="width: 20%; height: 20%;"> UBAH GAMBAR 2</button></a> ||
		<a href="ubahhome.php?id=3"><button style="width: 20%; height: 20%;"> UBAH GAMBAR 3</button></a>
	</p>

</div>

<div class="footer">
	<br><br><br><br>
	Copyright &copy; 09/01/20201 - <?php echo date("d/m/Y"); ?>
</div>

</body>
</html>