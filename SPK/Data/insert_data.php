<?php
include('../Database/database.php');
$id=isset($_GET['id'])?$_GET['id']:'';
$tanggal_test=isset($_GET['tanggal_test'])?$_GET['tanggal_test']:'';
$nama=isset($_GET['nama'])?$_GET['nama']:'';
$kelas=isset($_GET['kelas'])?$_GET['kelas']:'';
$sekolah=isset($_GET['sekolah'])?$_GET['sekolah']:'';
$jenis_kelamin=isset($_GET['jenis_kelamin'])?$_GET['jenis_kelamin']:'';
$tanggal_lahir=$_GET['tanggal_lahir']?$_GET['tanggal_lahir']:'';
$hasil_tes=isset($_GET['hasil_tes'])?$_GET['hasil_tes']:'';
if ($id&&$tanggal_test&&$nama&&$kelas&&$jenis_kelamin&&$tanggal_lahir&&$hasil_tes) {
	$result = mysqli_query($koneksi_database,"insert into hasil_kuesioner(id,tanggal_test,nama,kelas,sekolah,jenis_kelamin,tanggal_lahir,hasil_tes)values('$id','$tanggal_test','$nama','$kelas','$sekolah','$jenis_kelamin','$tanggal_lahir','$hasil_tes')");
	// $result = mysqli_query($koneksi_database,"
	// 	insert into hasil_kuesioner(
	// 	id,
	// 	tanggal_test,
	// 	nama,
	// 	kelas,
	// 	jenis_kelamin,
	// 	tanggal_lahir,
	// 	hasil_tes
	// 	)
	// 	values
	// 	(
	// 	$id,
	// 	$tanggal_test,
	// 	$nama,
	// 	$kelas,
	// 	$jenis_kelamin,
	// 	$tanggal_lahir,
	// 	$hasil_tes
	// 	)
	// 	");
	if ($result) {
		echo "berhasil insert data ";
	}
	else{
		echo "data gagal diinput";
	}
}
else{
	echo "gagal";
}

?>