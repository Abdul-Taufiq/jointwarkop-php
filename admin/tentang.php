<?php
require '../function.php';

$jointwarkop = query("SELECT * FROM pemilik") ;
$jointwarkop1 = query("SELECT * FROM pegawai") ;
$jointwarkop2 = query("SELECT * FROM develop") ;

if (isset($_POST["cari"])) {
 	$jointwarkop =  cari($_POST["keyword"]);
 }


?>

<!DOCTYPE html>
<html>
<head>
	<title>Tentang Kami</title>
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
	<h1>Tentang Kami</h1>
	<br>
	<b> 
		Untuk menikmati layanan yang kami berikan, <br>
		anda bisa mengunjungi Joint Warkop yang beralamatkan di :<br>
		Jl.Raya Blora - Purwodadi, Singopranan, Belor, Ngaringan, Kabupaten Grobogan, Jawa Tengah <br>
		Untuk Informasi lebih lanjut anda bisa menghubungi kami dengan : <br>
		WA : 083820267199. atau bisa klik link <a style="color: red;" href="https://wa.me/6283820267199">Disini</a> <br>
		IG : @joint_warkop. atau bisa klik link <a style="color: red;" href="https://instagram.com/joint_warkop?igshid=ks7z5x5k1ilv">Disini</a>
	</b>
	<br><br>
	<h2>STRUKTUR KEPEGAWAIAN JOINT WARKOP</h2>

	</table>
	<!-- PEMILIK PROFILE -->
	<br><br><br><br>
	<h2 style="background-color: red; color: white;">PEMILIK</h2><br>
	<?php foreach ($jointwarkop as $row ) : ?>
	<ul style="font-weight: bold; font-size: 17px;">
		<li><img src="gambar/<?= $row["gambar"]; ?>" width="20%"style="border-radius: 10%;"></li><br>
		<li> Nama : <?=  $row["nama"]; ?> </li>
		<li> TTL : <?= $row["ttl"] ?> </li>
		<li> Alamat : <?=  $row["alamat"]; ?> </li>	
		<li> Agama : <?= $row["agama"] ?> </li>
		<li> Jenis Kelamin : <?=  $row["jns_kelamin"]; ?> </li>	
		<li> No Hp : <?=  $row["nohp"]; ?> </li>
		<li>================================================================</li>
		<li>
			<a href="crudpemilik/tambah.php"><button style="width: 10%; font-weight: bold;"> TAMBAH DATA </button></a> ||
			<a href="crudpemilik/ubah.php?id=<?=  $row["id_pemilik"]; ?>"><button style="width: 10%; font-weight: bold;"> UBAH </button></a> ||
			<a href="crudpemilik/hapus.php?id=<?=  $row["id_pemilik"]; ?>" onclick="
				return confirm('APAKAH ANDA YAKIN INGIN MENGHAPUS DATA?');"><button style="width: 10%; color: red; font-weight: bold;" > HAPUS </button></a>
		</li>
		<li>=============================+-*-+==============================</li>
		<br>	
	</ul>
	<?php endforeach; ?>
	
	<!-- PEGAWAI PROFILE -->
	<br><br>
	<h2 style="background-color: red; color: white;">PEGAWAI</h2><br>
	<?php foreach ($jointwarkop1 as $row ) : ?>
	<ul style="font-weight: bold; font-size: 17px;">
		<li><img src="gambar/<?= $row["gambar"]; ?>" width="20%"style="border-radius: 10%;"></li><br>
		<li> Nama : <?=  $row["nama"]; ?> </li>
		<li> TTL : <?= $row["ttl"] ?> </li>
		<li> Alamat : <?=  $row["alamat"]; ?> </li>	
		<li> Agama : <?= $row["agama"] ?> </li>
		<li> Jenis Kelamin : <?=  $row["jns_kelamin"]; ?> </li>	
		<li> No Hp : <?=  $row["nohp"]; ?> </li>
		<li>================================================================</li>
		<li>
			<a href="crudpegawai/tambah.php"><button style="width: 10%; font-weight: bold;"> TAMBAH DATA </button></a> ||
			<a href="crudpegawai/ubah.php?id=<?=  $row["id_pegawai"]; ?>"><button style="width: 10%; font-weight: bold;"> UBAH </button></a> ||
			<a href="crudpegawai/hapus.php?id=<?=  $row["id_pegawai"]; ?>" onclick="
				return confirm('APAKAH ANDA YAKIN INGIN MENGHAPUS DATA?');"><button style="width: 10%; color: red; font-weight: bold;" > HAPUS </button></a>
		</li>
		<li>=============================+-*-+==============================</li>
		<br>	
	</ul>
	<?php endforeach; ?>

	<!-- WEB DEVELOP PROFILE -->
	<br><br>
	<h2 style="background-color: red; color: white;">WEB DEVELOPMENT</h2><br>
	<?php foreach ($jointwarkop2 as $row ) : ?>
	<ul style="font-weight: bold; font-size: 17px;">
		<li><img src="gambar/<?= $row["gambar"]; ?>" width="20%"style="border-radius: 10%;"></li><br>
		<li> NIM : <?= $row["nim"] ?> </li>
		<li> Nama : <?=  $row["nama"]; ?> </li>
		<li> TTL : <?= $row["ttl"] ?> </li>
		<li> Alamat : <?=  $row["alamat"]; ?> </li>	
		<li> Agama : <?= $row["agama"] ?> </li>
		<li> Jenis Kelamin : <?=  $row["jns_kelamin"]; ?> </li>	
		<li> No Hp : <?=  $row["nohp"]; ?> </li>
		<li>================================================================</li>
		<li>
			<a href="cruddevelop/tambah.php"><button style="width: 10%; font-weight: bold;"> TAMBAH DATA </button></a> ||
			<a href="cruddevelop/ubah.php?id=<?=  $row["id_dev"]; ?>"><button style="width: 10%; font-weight: bold;"> UBAH </button></a> ||
			<a href="cruddevelop/hapus.php?id=<?=  $row["id_dev"]; ?>" onclick="
				return confirm('APAKAH ANDA YAKIN INGIN MENGHAPUS DATA?');"><button style="width: 10%; color: red; font-weight: bold;" > HAPUS </button></a>
		</li>
		<li>=============================+-*-+==============================</li>
		<br>	
	</ul>
	<?php endforeach; ?>
</div>

<div class="footer">
	<br><br><br><br>
	Copyright &copy; 09/01/20201 - <?php echo date("d/m/Y"); ?>
</div>

</body>
</html>