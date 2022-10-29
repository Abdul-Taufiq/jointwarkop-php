<?php 
	require 'function.php';
	if (isset($_POST["login"])) {
		$username = $_POST["username"];
		$password = $_POST["password"];

	// perintah untuk mendapatkan user dari db berdasarkan nama yang di input di form login
	$get_user = "SELECT * FROM login WHERE username = '$username'";
	$result = mysqli_query($conn,$get_user);
	
	$data = mysqli_fetch_array($result);
	if($data){
		// email yang dimasukan ada di db
		// check password
		if($password == $data['password']){
			Header("Location: admin/index.php");
		}else{
			echo "
				<script>
					alert('Username / Password anda salah !');
					document.location.href = 'login.php';
				</script>
			";
		}
	}else{
		echo "
				<script>
					alert('Username / Password anda salah !');
					document.location.href = 'login.php';
				</script>
			";
	}
}
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Login Sebagai Admin</title>
		<link rel="stylesheet" type="text/css" href="login.css">		
	</head>
	<body>
		<div class="login">
			<h2 class="login-header">Form Login</h2>
			<form class="login-container" action="" method="post">
				<p>
					<input type="text" placeholder="Username" name="username" autocomplete="off" />
				</p>
				<p>
					<input type="password" placeholder="Password" name="password" />
				</p>
				<p>
					<input type="submit" name="login" placeholder="Login Bre" />
				</p>
				<p>
					<a href="index.php">Login Sebagai User</a>
				</p>
			</form>
		</div>
	</body>
</html>