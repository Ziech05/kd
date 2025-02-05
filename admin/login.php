<?php
require 'koneksi.php';
$user = $_REQUEST["user"];
$password = $_POST["password"];

$query_sql = "SELECT * FROM admin
				WHERE user='$user' AND password='$password'";
$result = mysqli_query($conn,$query_sql);

if (mysqli_num_rows($result)>0){
	header("Location: home.php");
} else {
	echo "<center><h1>E-Mail atau Password yang anda masukkan salah. Silahkan Login Kembali.</h1>
			<button><strong><a href='login.html'>Log in</a></strong></button></center>";
}