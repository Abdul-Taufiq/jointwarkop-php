<?php
require '../function.php';

$jointwarkop = query("SELECT * FROM sedia") ;

if (isset($_POST["cari"])) {
 	$jointwarkop =  cari($_POST["keyword"]);
 }


?>

<!DOCTYPE html>
<html>
<head>
	<title>Makanan & Minuman Di Joint Warkop</title>
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
	<h3> Klik dibawah ini untuk menambah data </h3>
	<a href="tambah.php"><button style="width: 30%;"> TAMBAH DATA </button></a>
	<br><br>


	<table border="0" cellpadding="10" cellspacing="2" width="70%" style="background-color: white">
		<tr>
			<th width="5%" rowspan="2">No</th>
			<th rowspan="2">Aksi</th>
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
			
			<td>
				********
				<a href="ubah.php?id=<?=  $row["id_sedia"]; ?>"><button> UBAH </button></a>  <br> -------
				<a href="hapus.php?id=<?=  $row["id_sedia"]; ?>" onclick="
					return confirm('APAKAH ANDA YAKIN INGIN MENGHAPUS DATA?');"><button> HAPUS </button></a>
				=======
			</td>

			<td><img src="../gambar/<?= $row["gambar"]; ?>" width="80%" style="border-radius: 10%;" ></td>
			<td> <?=  $row["nama"]; ?> </td>
			<td> <?=  $row["kategori"]; ?> </td>
			<td> Rp. <?=  $row["harga"]; ?> </td>
			<td> <?=  $row["dskp"]; ?> </td>
		</tr>
		<?php $i++; ?>
		<?php endforeach; ?>

	</table>
</div>

<div class="footer">
	<br><br><br><br>
	Copyright &copy; 09/01/20201 - <?php echo date("d/m/Y"); ?>
</div>

</body>
</html>