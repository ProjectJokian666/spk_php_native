<?php 
include('../Database/database.php');
var_dump($_POST);

$id = $_POST['id'];
$header = $_POST['header'];
$size_header = $_POST['size_header'];
$location = $_POST['location'];
$size_location = $_POST['size_location'];
$judul = $_POST['judul'];
$size_judul = $_POST['size_judul'];
$wilayah = $_POST['wilayah'];
$konselor = $_POST['konselor'];

// var_dump($header!=''&&$size_header!=''&&$location&&$size_location!=''&&$judul!=''&&$size_judul!=''&&$wilayah&&$konselor!='');
if ($header!=''&&$size_header!=''&&$location!=''&&$size_location!=''&&$judul!=''&&$size_judul!=''&&$wilayah!=''&&$konselor!=''&&$id!='') {
	$update_data = mysqli_query($koneksi_database,"update data_cetak set 
		header='$header',
		size_header='$size_header',
		location='$location',
		size_location='$size_location',
		judul='$judul',
		size_judul='$size_judul',
		wilayah='$wilayah',
		konselor='$konselor' 
		where id='$id'");
	if ($update_data) {	
		// var_dump($update_data);
		header("Location: index.php?data=file_cetak");
		exit();
	}
	else{
		header("Location: index.php");
		exit();
	}
}
else{
	header("Location: index.php");
	exit();
}
?>