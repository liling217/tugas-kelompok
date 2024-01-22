<?php
if (isset($_POST['Login'])) {
	$user = $_POST['username'];
	$pass = $_POST['password'];
	if ($user == "bintang" && $pass == "123") {
		header ("location: home.php");
	} else {
		echo "<h2> Login Gagal </h2>";
	}
}
?>