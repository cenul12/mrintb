const flashData = $('.flash-data').data('flashdata');

if (flashData) {
	swal({

		title:'data ',
		text: 'berhasil' + flashData,
		type: 'success'

	});
}