// inisiasi jika sudah terisi semua
setInterval(function() {
	d_d61 = $("input[name='d61']:checked").val();
	d_d62 = $("input[name='d62']:checked").val();
	d_d63 = $("input[name='d63']:checked").val();
	d_d64 = $("input[name='d64']:checked").val();
	d_d65 = $("input[name='d65']:checked").val();
	d_d66 = $("input[name='d66']:checked").val();
	d_d67 = $("input[name='d67']:checked").val();
	d_d68 = $("input[name='d68']:checked").val();
	d_d69 = $("input[name='d69']:checked").val();
	if (d_d61>0&&d_d62>0&&d_d63>0&&d_d64>0&&d_d65>0&&d_d66>0&&d_d67>0&&d_d68>0&&d_d69>0) {
		$('#show_button6').show();
	}
},100);
// pindah ke kues2
$('#button6').on('click',function(){
	let data_6 = parseInt(d_d61)+parseInt(d_d62)+parseInt(d_d63)+parseInt(d_d64)+parseInt(d_d65)+parseInt(d_d66)+parseInt(d_d67)+parseInt(d_d68)+parseInt(d_d69);
	data_kues.push(data_6);

	$('#form_data').hide();
	$('#kues1').hide();
	$('#kues2').hide();
	$('#kues3').hide();
	$('#kues4').hide();
	$('#kues5').hide();
	$('#kues6').hide();
	$('#kues7').show();
	$('#hasil_tes').hide();

	document.body.scrollTop=0;
	document.documentElement.scrollTop = 0;
});