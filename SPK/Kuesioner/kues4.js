// inisiasi jika sudah terisi semua
setInterval(function() {
	d_d41 = $("input[name='d41']:checked").val();
	d_d42 = $("input[name='d42']:checked").val();
	d_d43 = $("input[name='d43']:checked").val();
	d_d44 = $("input[name='d44']:checked").val();
	d_d45 = $("input[name='d45']:checked").val();
	d_d46 = $("input[name='d46']:checked").val();
	d_d47 = $("input[name='d47']:checked").val();
	d_d48 = $("input[name='d48']:checked").val();
	if (d_d41>0&&d_d42>0&&d_d43>0&&d_d44>0&&d_d45>0&&d_d46>0&&d_d47>0&&d_d48>0) {
		$('#show_button4').show();
	}
},100);
// pindah ke kues2
$('#button4').on('click',function(){
	let data_4 = parseInt(d_d41)+parseInt(d_d42)+parseInt(d_d43)+parseInt(d_d44)+parseInt(d_d45)+parseInt(d_d46)+parseInt(d_d47)+parseInt(d_d48);
	data_kues.push(data_4);

	$('#form_data').hide();
	$('#kues1').hide();
	$('#kues2').hide();
	$('#kues3').hide();
	$('#kues4').hide();
	$('#kues5').show();
	$('#kues6').hide();
	$('#kues7').hide();
	$('#hasil_tes').hide();

	document.body.scrollTop=0;
	document.documentElement.scrollTop = 0;
});