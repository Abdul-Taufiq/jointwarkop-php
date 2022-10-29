<?php 
//koneksi
$conn = mysqli_connect("localhost", "root", "", "jointwarkop");


function query($query){
	global  $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while ( $row = mysqli_fetch_assoc($result) ) {
		$rows[] = $row;
	}
	return $rows;
}

// ====================================================
// FUNGSI UPLOAD
function upload(){
	$namaFile = $_FILES['gambar']['name'];
	$ukuranfile = $_FILES['gambar']['size'];
	$error = $_FILES['gambar']['error'];
	$tmpName = $_FILES['gambar']['tmp_name'];

	//cek gmbr kalo tidak ada akan error
	if ($error === 4) {
		echo "<script>
			alert('Silahkan Pilih Gambar Terlebih Dahulu !');
		</script>";
		return false;
	}
	
	//format yang dapat diupload
	$ekstensiValid = ['jpg', 'png', 'jpeg'];
	$ekstensiGambar = explode('.', $namaFile);
	$ekstensiGambar = strtolower(end($ekstensiGambar));
	if ( !in_array($ekstensiGambar, $ekstensiValid) ) {
		echo "<script>
			alert('Silahkan Upload gambar yang sesuai !');
		</script>";
		return false;
	}
	
	//cek ukuran
	if ($ukuranfile > 1500000) {
		echo "<script>
			alert('Gambar yang anda upload terlalu Besar!');
		</script>";
		return false;
	}
	
	//lolos cek
	move_uploaded_file($tmpName, '../gambar/'. $namaFile);
	return $namaFile;

}

// ===========================================================
// ===========================================================
// PEMILIK
function tambahpemilik($data){
	global $conn;

	  //ambil data
	$nama = htmlspecialchars($data ["nama"]);
	$ttl = htmlspecialchars($data ["ttl"]);
	$alamat = htmlspecialchars($data ["alamat"]);
	$agama = htmlspecialchars($data ["agama"]);
	$jns_kelamin = htmlspecialchars($data ["jns_kelamin"]);
	$nohp = htmlspecialchars($data ["nohp"]);
	
	$gambar = upload();
	if (!$gambar) {
		return false;
	}

	//query
	$query = "INSERT INTO pemilik
				VALUES
				('', '$nama', '$ttl', '$alamat', '$agama', '$jns_kelamin', '$nohp', '$gambar' ) ";

	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}

function ubahpemilik($data){
	global $conn;
	$id = $data["id"];
	$nama = htmlspecialchars($data ["nama"]);
	$ttl = htmlspecialchars($data ["ttl"]);
	$alamat = htmlspecialchars($data ["alamat"]);
	$agama = htmlspecialchars($data ["agama"]);
	$jns_kelamin = htmlspecialchars($data ["jns_kelamin"]);
	$nohp = htmlspecialchars($data ["nohp"]);
	
	$gambar = upload();
	if (!$gambar) {
		return false;
	}

	$query = "UPDATE pemilik
				SET
				nama = '$nama',
				ttl = '$ttl',
				alamat = '$alamat',
				agama = '$agama',
				jns_kelamin = '$jns_kelamin',
				nohp = '$nohp',
				gambar = '$gambar'
			  WHERE id_pemilik = $id
				";

	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}

function hapuspemilik($id){
	global $conn;
	mysqli_query($conn, "DELETE FROM pemilik where id_pemilik = $id");

	return mysqli_affected_rows($conn);
}

// ===================================================
// ===================================================
// DEVELOPMENT
function tambahdevelop($data){
	global $conn;

	  //ambil data
	$nim = htmlspecialchars($data ["nim"]);
	$nama = htmlspecialchars($data ["nama"]);
	$ttl = htmlspecialchars($data ["ttl"]);
	$alamat = htmlspecialchars($data ["alamat"]);
	$agama = htmlspecialchars($data ["agama"]);
	$jns_kelamin = htmlspecialchars($data ["jns_kelamin"]);
	$nohp = htmlspecialchars($data ["nohp"]);
	
		// upload gambar
	$gambar = upload();
	if (!$gambar) {
		return false;
	}

	//query
	$query = "INSERT INTO develop
				VALUES
				('', '$nim', '$nama', '$ttl', '$alamat', '$agama', '$jns_kelamin', '$nohp', '$gambar' ) ";

	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}

function ubahdevelop($data){
	global $conn;
	$id = $data["id"];
	$nim = htmlspecialchars($data ["nim"]);
	$nama = htmlspecialchars($data ["nama"]);
	$ttl = htmlspecialchars($data ["ttl"]);
	$alamat = htmlspecialchars($data ["alamat"]);
	$agama = htmlspecialchars($data ["agama"]);
	$jns_kelamin = htmlspecialchars($data ["jns_kelamin"]);
	$nohp = htmlspecialchars($data ["nohp"]);
	
		// upload gambar
	$gambar = upload();
	if (!$gambar) {
		return false;
	}

	$query = "UPDATE develop
				SET
				nim = '$nim',
				nama = '$nama',
				ttl = '$ttl',
				alamat = '$alamat',
				agama = '$agama',
				jns_kelamin = '$jns_kelamin',
				nohp = '$nohp',
				gambar = '$gambar'
			  WHERE id_dev = $id
				";

	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}

function hapusdevelop($id){
	global $conn;
	mysqli_query($conn, "DELETE FROM develop where id_dev = $id");

	return mysqli_affected_rows($conn);
}

// ===========================================================
// ===========================================================
// PEGAWAI
function tambahpegawai($data){
	global $conn;

	  //ambil data
	$nama = htmlspecialchars($data ["nama"]);
	$ttl = htmlspecialchars($data ["ttl"]);
	$alamat = htmlspecialchars($data ["alamat"]);
	$agama = htmlspecialchars($data ["agama"]);
	$jns_kelamin = htmlspecialchars($data ["jns_kelamin"]);
	$nohp = htmlspecialchars($data ["nohp"]);
	
	$gambar = upload();
	if (!$gambar) {
		return false;
	}

	//query
	$query = "INSERT INTO pegawai
				VALUES
				('', '$nama', '$ttl', '$alamat', '$agama', '$jns_kelamin', '$nohp', '$gambar' ) ";

	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}

function ubahpegawai($data){
	global $conn;
	$id = $data["id"];
	$nama = htmlspecialchars($data ["nama"]);
	$ttl = htmlspecialchars($data ["ttl"]);
	$alamat = htmlspecialchars($data ["alamat"]);
	$agama = htmlspecialchars($data ["agama"]);
	$jns_kelamin = htmlspecialchars($data ["jns_kelamin"]);
	$nohp = htmlspecialchars($data ["nohp"]);
	
	$gambar = upload();
	if (!$gambar) {
		return false;
	}

	$query = "UPDATE pegawai
				SET
				nama = '$nama',
				ttl = '$ttl',
				alamat = '$alamat',
				agama = '$agama',
				jns_kelamin = '$jns_kelamin',
				nohp = '$nohp',
				gambar = '$gambar'
			  WHERE id_pegawai = $id
				";

	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}

function hapuspegawai($id){
	global $conn;
	mysqli_query($conn, "DELETE FROM pegawai where id_pegawai = $id");

	return mysqli_affected_rows($conn);
}


// ===========================================================
// ===========================================================
// MAKANAN & MINUMAN
function tambah($data){
	  global $conn;
	  //ambil data
	$nama = htmlspecialchars($data ["nama"]);
	$kategori = htmlspecialchars($data ["kategori"]);
	$harga = htmlspecialchars($data ["harga"]);
	$dskp = htmlspecialchars($data ["dskp"]);

	// upload gambar
	$gambar = upload();
	if (!$gambar) {
		return false;
	}

	//query
	$query = "INSERT INTO sedia
				VALUES
				('', '$nama', '$kategori', '$harga', '$dskp', '$gambar' ) ";

	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}



function hapus($id){
	global $conn;
	mysqli_query($conn, "DELETE FROM sedia where id_sedia = $id");

	return mysqli_affected_rows($conn);
}

function ubah($data) {
	global $conn;

	$id = $data["id"];
	$nama = htmlspecialchars($data ["nama"]);
	$kategori = htmlspecialchars($data ["kategori"]);
	$harga = htmlspecialchars($data ["harga"]);
	$dskp = htmlspecialchars($data ["dskp"]);
	
	// upload gambar
	$gambar = upload();
	if (!$gambar) {
		return false;
	}

	//query
	$query = "UPDATE sedia
				SET
				nama = '$nama',
				kategori = '$kategori',
				harga = '$harga',
				dskp = '$dskp',
				gambar = '$gambar'
			  WHERE id_sedia = $id
				";

	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}


 function cari($keyword){
 	$query = "SELECT * FROM sedia 
 				WHERE
 				nama LIKE '%$keyword%' OR 
 				kategori LIKE '%$keyword%' OR
 				harga LIKE '%$keyword%'
 			  ";

 	return query($query);
 }
// UBAH HOMEPAGE
 function ubahhome($data){
	global $conn;
	$id = $data["id"];
	
	$gambar = upload();
	if (!$gambar) {
		return false;
	}

	$query = "UPDATE homepage
				SET
				gambar = '$gambar'
			  WHERE id_h = $id
				";

	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}

?>