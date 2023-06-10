// inisiasi jika sudah terisi semua
setInterval(function() {
	d_d51 = $("input[name='d51']:checked").val();
	d_d52 = $("input[name='d52']:checked").val();
	d_d53 = $("input[name='d53']:checked").val();
	d_d54 = $("input[name='d54']:checked").val();
	d_d55 = $("input[name='d55']:checked").val();
	d_d56 = $("input[name='d56']:checked").val();
	d_d57 = $("input[name='d57']:checked").val();
	d_d58 = $("input[name='d58']:checked").val();
	if (d_d51>0&&d_d52>0&&d_d53>0&&d_d54>0&&d_d55>0&&d_d56>0&&d_d57>0&&d_d58>0) {
		$('#show_button5').show();
	}
},100);
// pindah ke kues2
$('#button5').on('click',function(){
	let data_5 = parseInt(d_d51)+parseInt(d_d52)+parseInt(d_d53)+parseInt(d_d54)+parseInt(d_d55)+parseInt(d_d56)+parseInt(d_d57)+parseInt(d_d58);
	data_kues.push(data_5);

	$('#form_data').hide();
	$('#kues1').hide();
	$('#kues2').hide();
	$('#kues3').hide();
	$('#kues4').hide();
	$('#kues5').hide();
	$('#kues6').show();
	$('#kues7').hide();
	$('#hasil_tes').hide();

	document.body.scrollTop=0;
	document.documentElement.scrollTop = 0;
});