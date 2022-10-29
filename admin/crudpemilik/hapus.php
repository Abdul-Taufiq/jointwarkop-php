<?php 

require '../../function.php';
	
	$id = $_GET["id"];

	if ( hapuspemilik($id) ) {
		echo "
			<script>
			alert('DATA BERHASIL DIHAPUS !!!');
			document.location.href = '../tentang.php';
			</script>
		";
	} else {
		echo "
			<script>
			alert('DATA GAGAL DIHAPUS !!!');
			document.location.href = '../tentang.php';
			</script>
		";
	}

?>