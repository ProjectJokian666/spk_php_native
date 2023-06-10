// inisiasi jika sudah terisi semua
setInterval(function() {
	d_d71 = $("input[name='d71']:checked").val();
	d_d72 = $("input[name='d72']:checked").val();
	d_d73 = $("input[name='d73']:checked").val();
	d_d74 = $("input[name='d74']:checked").val();
	d_d75 = $("input[name='d75']:checked").val();
	d_d76 = $("input[name='d76']:checked").val();
	d_d77 = $("input[name='d77']:checked").val();
	d_d78 = $("input[name='d78']:checked").val();
	d_d79 = $("input[name='d79']:checked").val();
	if (d_d71>0&&d_d72>0&&d_d73>0&&d_d74>0&&d_d75>0&&d_d76>0&&d_d77>0&&d_d78>0&&d_d79>0) {
		$('#show_button7').show();
	}
},100);
// pindah ke kues2
$('#button7').on('click',function(){
	let data_7 = parseInt(d_d71)+parseInt(d_d72)+parseInt(d_d73)+parseInt(d_d74)+parseInt(d_d75)+parseInt(d_d76)+parseInt(d_d77)+parseInt(d_d78)+parseInt(d_d79);
	data_kues.push(data_7);

	$('#form_data').hide();
	$('#kues1').hide();
	$('#kues2').hide();
	$('#kues3').hide();
	$('#kues4').hide();
	$('#kues5').hide();
	$('#kues6').hide();
	$('#kues7').hide();
	$('#hasil_tes').show();

	document.body.scrollTop=0;
	document.documentElement.scrollTop = 0;

	// insert data ke db
	// console.log(data_kues);
	var persentase = data_kues.slice(5,12).reduce((a,b)=>{
		return a+b;
	},0);
	data_kues.push(persentase)

	var tahun = new Date().getFullYear();
	var bulan = new Date().getMonth();
	var tanggal = new Date().getDate();
	var jam = new Date().getHours();
	var menit = new Date().getMinutes();
	var detik = new Date().getSeconds();
	var milidetik = new Date().getMilliseconds();

	// console.log(data_kues);
	if (tanggal.length!=2) {
		tanggal = '0'+tanggal;
	}
	if (bulan.length!=2) {
		bulan = '0'+bulan;
	}
	id = tahun+""+bulan+""+tanggal+""+jam+""+menit+""+detik+""+milidetik;
	var tanggal_test = tahun+"-"+tanggal+"-"+bulan;
	// console.log(tanggal_test,data_kues);
	$.ajax({
		url:'Data/insert_data.php',
		type:"GET",
		data:{
			id:id,
			tanggal_test:tanggal_test,
			nama:data_kues[0],
			kelas:data_kues[1],
			sekolah:data_kues[2],
			jenis_kelamin:data_kues[3],
			tanggal_lahir:data_kues[4],
			hasil_tes:persentase,
		},
		success:function(data){
			console.log(data,"sukses")
		},
		error:function(data){
			console.log(data,"gagal")
		}
	});

	// menampilkan hasil test
	persentase = Math.ceil(persentase/232*100);
	$('#persentase').html(persentase);

	$.ajax({
		url:'Data/klasifikasi.php',
		type:"GET",
		data:{
			batas:persentase,
		},
		success:function(data){
			$('#kategori').html(data);
			// console.log(data,"sukses")
		},
		error:function(data){
			// console.log(data,"gagal")
		}
	})
	$.ajax({
		url:'Data/interpretasi.php',
		type:"GET",
		data:{
			batas:persentase,
		},
		success:function(data){
			$('#data_interpretasi').html(data);
			// $('#kategori').html(data);
			// console.log(data,"sukses")
		},
		error:function(data){
			// console.log(data,"gagal")
		}
	})
	// console.log(data_kues);
	// let hasil_data_kues = data_kues[1].reduce((a,b)=>{
	// 	return a+b;
	// },0);
	// console.log(hasil_data_kues);

	// console.log("aaa",id,"aaa")
	// console.log(new Date())
});