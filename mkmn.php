<?php
require 'function.php';

$jointwarkop = query("SELECT * FROM sedia") ;

if (isset($_POST["cari"])) {
 	$jointwarkop =  cari($_POST["keyword"]);
 }


?>

<!DOCTYPE html>
<html>
<head>
	<title>Makanan & Minuman Di Joint Warkop</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Ubuntu:wght@300&display=swap" rel="stylesheet">
</head>
<body>
	<nav>
		<div class="logo">
			<img class="glogo" src="gambar/logo.jpg" align="left" usemap="#Home"> <p><a href="index.php">Joint Warkop</a></p>
			<map name="Home">
					<area shape="circle" coords="0,0,100" href="index.php">
			</map>
		</div>
		<ul>
			<li><a href="index.php"> Beranda </li>
			<li><a href="mkmn.php"> Makanan & Minuman </a></li>
			<li><a href="tentang.php"> Tentang Kami </a></li>
			<li><a href="login.php"> Login </a></li>
		</ul>
	</nav>

<div class="konten" align="center">
	<h1>Makanan & Minuman</h1>
	<br>
	<b> Kami juga Menyediakan Berbagai macam makanan dan minuman yang bisa anda dapatkan di Joint Warkop<br>
	Berikut daftar Makanan Dan Minuman.</b>
	<br><br>
	<h4>DAFTAR MENU MAKANAN & MINUMAN</h4>

	<!-- Pencarian -->
	<form action="" method="post">
		<input type="text" name="keyword" size="50" autofocus autocomplete="off" placeholder="Masukan Keyword Pencarian..">
		<button type="submit" name="cari"> CARI </button>	
	</form>
	<br>

	<table border="0" cellpadding="10" cellspacing="2" width="70%" style="background-color: white">
		<tr>
			<th width="5%" rowspan="2">No</th>
			<th width="20%" rowspan="2">Gambar</th>
			<th colspan="4">List Menu</th>
		</tr>
		<tr>
			<th width="15%"> Nama Produk </th>	
			<th width="15%"> Kategori </th>	
			<th width="15%"> Harga </th>	
			<th> Deskripsi </th>	
		</tr>

		<?php $i = 1; ?> 
		<?php foreach ($jointwarkop as $row ) : ?>
		<tr>
			<td style="text-align: center; vertical-align: middle;"> <?=  $i; ?> </td>
			<td><img src="gambar/<?= $row["gambar"]; ?>" width="80%" style="border-radius: 10%;" ></td>
			<td> <?=  $row["nama"]; ?> </td>
			<td> <?=  $row["kategori"]; ?> </td>
			<td> Rp. <?=  $row["harga"]; ?> </td>
			<td> <?=  $row["dskp"]; ?> </td>
		</tr>
		<?php $i++; ?>
		<?php endforeach; ?>

	</table>
<!-- 	<br><br><br><br>
	<?php foreach ($jointwarkop as $row ) : ?>
	<ul style="font-weight: bold;">
		<li><img src="gambar/<?= $row["gambar"]; ?>" width="20%"style="border-radius: 10%;"></li><br>
		<li> Nama Produk : <?=  $row["nama"]; ?> </li>
		<li> Kategori : <?=  $row["kategori"]; ?> </li>	
		<li> Harga : Rp. <?=  $row["harga"]; ?> </li>	
		<li> Deskripsi : <?=  $row["dskp"]; ?> </li>
		<li>================================================================</li>
		<li>=============================+-*-+==============================</li>
		<br>	
	</ul>
	<?php endforeach; ?> -->

</div>

<div class="footer">
	<br><br><br><br>
	Copyright &copy; 09/01/20201 - <?php echo date("d/m/Y"); ?>
</div>

</body>
</html>