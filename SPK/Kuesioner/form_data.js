// inisiasi jika sudah terisi semua

setInterval(function() {
	nama = $("#nama").val();
	kelas = $("#kelas").val();
	sekolah = $("#sekolah").val();
	jenis_kelamin = $("#jenis_kelamin").val();
	tanggal_lahir = $("#tanggal_lahir").val();
	if (nama!=""&&kelas!=""&&sekolah!=""&&jenis_kelamin!=""&&tanggal_lahir!="") {
		$('#show_form_button').show();
	}
},100);
// pindah ke kues1
$('#form_button').on('click',function(){
	data_kues.push(nama,kelas,sekolah,jenis_kelamin,tanggal_lahir);

	$('#form_data').hide();
	$('#kues1').show();
	$('#kues2').hide();
	$('#kues3').hide();
	$('#kues4').hide();
	$('#kues5').hide();
	$('#kues6').hide();
	$('#kues7').hide();
	$('#hasil_tes').hide();

	document.body.scrollTop=0;
	document.documentElement.scrollTop = 0;
	// console.log('sa');
	var tahun = new Date().getFullYear();
	var bulan = new Date().getMonth();
	var tanggal = new Date().getDate();
	var jam = new Date().getHours();
	var menit = new Date().getMinutes();
	var detik = new Date().getSeconds();
	var milidetik = new Date().getMilliseconds();

	// id = tahun+""+bulan+""+tanggal+""+jam+""+menit+""+detik+""+milidetik;

	// // console.log(data_kues);
	// if (tanggal.length!=2) {
	// 	console.log(tanggal.length!=2);
	// 	tanggal = '0'+tanggal;
	// 	console.log(tanggal);
	// }
	// if (bulan.length!=2) {
	// 	// bulan = bulan.padStart(2,'0');
	// }

});


