<?php 
include('../Database/database.php');

// var_dump($_REQUEST);
if ($_REQUEST["username"]&&$_REQUEST['password']) {
	$username = $_REQUEST["username"];
	$password = $_REQUEST["password"];
	$cek_data = mysqli_query($koneksi_database,"select * from users where username='".$username."' AND password='".$password."'");
	// var_dump($cek_data);
	if (mysqli_num_rows($cek_data)>0) {
		foreach ($cek_data as $key => $value) {
			$_SESSION['id']=$value['id'];
			$_SESSION['username']=$value['username'];
			$_SESSION['password']=$value['password'];
			$_SESSION['login']=TRUE;
		}
		header("Location: ../Admin/index.php");
		exit();
	}
	else{
		header("Location: ../login.php");
		exit();
	}
	// echo "ada";
}
else{
	if ($_GET['logout']) {
		session_destroy();
		header("Location: ../login.php");
		exit();
	}
}

?>