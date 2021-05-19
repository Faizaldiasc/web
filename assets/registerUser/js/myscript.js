const flashData= $('.flash-data').data('flashdata');

if(flashData){
	Swal({
		title: 'Registrasi Berhasil',
		text: 'Berhasil' + flashData,
		type: 'success'
	});
}