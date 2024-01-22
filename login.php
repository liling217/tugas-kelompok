<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Login</title>
</head>
<body>
<?php 
if (isset($_GET['pesan'])) {
	if ($_GET['pesan']=="gagal") {
		echo "<div class='alert'>Username dan Password tidak sesuai!</div>";
	}
}
?>

<div class="kotaklogin">
	<p class="tulisanlogin"><font face="comic sans ms" size="5" color="white">Silahkan Login</font></p>

	<form action="ceklogin.php" method="post" name="input">
		<label><font face="courier new" size="3" color="white">Username</font></label>
		<input type="text" name="username" class="form_login" placeholder="Username..." required="required"><br><br>

		<label><font face="courier new" size="3" color="white">Password</font></label>
		<input type="password" name="password" class="form_login" placeholder="Password..." required="required"><br><br>

		<input type="submit" class="tombol_login1" name="Login" value="Login"><br><br>

		<input type="reset" class="tombol_login2" name="reset" value="Hapus">
	</form>
</div>
</body>
</html>