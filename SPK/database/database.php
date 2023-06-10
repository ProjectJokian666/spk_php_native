<?php 

$host="localhost";
$user="root";
$pass="";
$db="efikasi";

$koneksi = mysqli_connect($host,$user,$pass);
$koneksi_database = mysqli_connect($host,$user,$pass,$db);

session_start();
if(!isset($_SESSION['login'])){
	$_SESSION['login']=FALSE;
}
?>