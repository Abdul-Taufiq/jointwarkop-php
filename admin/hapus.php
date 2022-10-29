<?php 

require '../function.php';
	
	$id = $_GET["id"];

	if ( hapus($id) ) {
		echo "
			<script>
			alert('DATA BERHASIL DIHAPUS !!!');
			document.location.href = 'mkmn.php';
			</script>
		";
	} else {
		echo "
			<script>
			alert('DATA GAGAL DIHAPUS !!!');
			document.location.href = 'mkmn.php';
			</script>
		";
	}

?>