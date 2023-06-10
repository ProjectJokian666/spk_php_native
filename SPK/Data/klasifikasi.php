<?php 
include ('../Database/database.php');
$batas = $_GET['batas'];

$result = mysqli_query($koneksi_database,"select * from data_interpretasi where batas_bawah < ".$batas." AND batas_atas > ".$batas);
if (mysqli_num_rows($result)>0) {
	foreach ($result as $key => $value) {
		echo $value['klasifikasi'];
	}
}
else{
	echo "Data Tidak Sesuai";
}
?>