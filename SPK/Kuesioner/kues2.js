// inisiasi jika sudah terisi semua
setInterval(function() {
	d_d21 = $("input[name='d21']:checked").val();
	d_d22 = $("input[name='d22']:checked").val();
	d_d23 = $("input[name='d23']:checked").val();
	d_d24 = $("input[name='d24']:checked").val();
	d_d25 = $("input[name='d25']:checked").val();
	d_d26 = $("input[name='d26']:checked").val();
	d_d27 = $("input[name='d27']:checked").val();
	d_d28 = $("input[name='d28']:checked").val();
	if (d_d21>0&&d_d22>0&&d_d23>0&&d_d24>0&&d_d25>0&&d_d26>0&&d_d27>0&&d_d28>0) {
		$('#show_button2').show();
	}
},100);
// pindah ke kues2
$('#button2').on('click',function(){
	let data_2 = parseInt(d_d21)+parseInt(d_d22)+parseInt(d_d23)+parseInt(d_d24)+parseInt(d_d25)+parseInt(d_d26)+parseInt(d_d27)+parseInt(d_d28);
	data_kues.push(data_2);

	$('#form_data').hide();
	$('#kues1').hide();
	$('#kues2').hide();
	$('#kues3').show();
	$('#kues4').hide();
	$('#kues5').hide();
	$('#kues6').hide();
	$('#kues7').hide();
	$('#hasil_tes').hide();

	document.body.scrollTop=0;
	document.documentElement.scrollTop = 0;
});