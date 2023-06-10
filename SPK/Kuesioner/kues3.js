// inisiasi jika sudah terisi semua
setInterval(function() {
	d_d31 = $("input[name='d31']:checked").val();
	d_d32 = $("input[name='d32']:checked").val();
	d_d33 = $("input[name='d33']:checked").val();
	d_d34 = $("input[name='d34']:checked").val();
	d_d35 = $("input[name='d35']:checked").val();
	d_d36 = $("input[name='d36']:checked").val();
	d_d37 = $("input[name='d37']:checked").val();
	d_d38 = $("input[name='d38']:checked").val();
	if (d_d31>0&&d_d32>0&&d_d33>0&&d_d34>0&&d_d35>0&&d_d36>0&&d_d37>0&&d_d38>0) {
		$('#show_button3').show();
	}
},100);
// pindah ke kues2
$('#button3').on('click',function(){
	let data_3 = parseInt(d_d31)+parseInt(d_d32)+parseInt(d_d33)+parseInt(d_d34)+parseInt(d_d35)+parseInt(d_d36)+parseInt(d_d37)+parseInt(d_d38);
	data_kues.push(data_3);

	$('#form_data').hide();
	$('#kues1').hide();
	$('#kues2').hide();
	$('#kues3').hide();
	$('#kues4').show();
	$('#kues5').hide();
	$('#kues6').hide();
	$('#kues7').hide();
	$('#hasil_tes').hide();

	document.body.scrollTop=0;
	document.documentElement.scrollTop = 0;
});