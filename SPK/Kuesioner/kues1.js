// inisiasi jika sudah terisi semua
setInterval(function() {
	d_d11 = $("input[name='d11']:checked").val();
	d_d12 = $("input[name='d12']:checked").val();
	d_d13 = $("input[name='d13']:checked").val();
	d_d14 = $("input[name='d14']:checked").val();
	d_d15 = $("input[name='d15']:checked").val();
	d_d16 = $("input[name='d16']:checked").val();
	d_d17 = $("input[name='d17']:checked").val();
	d_d18 = $("input[name='d18']:checked").val();
	if (d_d11>0&&d_d12>0&&d_d13>0&&d_d14>0&&d_d15>0&&d_d16>0&&d_d17>0&&d_d18>0) {
		$('#show_button1').show();
	}
},100);
// pindah ke kues2
$('#button1').on('click',function(){
	let data_1 = parseInt(d_d11)+parseInt(d_d12)+parseInt(d_d13)+parseInt(d_d14)+parseInt(d_d15)+parseInt(d_d16)+parseInt(d_d17)+parseInt(d_d18);
	data_kues.push(data_1);

	$('#form_data').hide();
	$('#kues1').hide();
	$('#kues2').show();
	$('#kues3').hide();
	$('#kues4').hide();
	$('#kues5').hide();
	$('#kues6').hide();
	$('#kues7').hide();
	$('#hasil_tes').hide();

	document.body.scrollTop=0;
	document.documentElement.scrollTop = 0;
});
