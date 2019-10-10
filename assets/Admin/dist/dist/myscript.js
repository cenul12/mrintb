
const flashData = $('.flash-data').data('flashdata');

// console.log(flashData);

if ( flashData ) {
	swal({

		title:'data ',
		text: 'berhasil' + flashData,
		type: 'success'

	});
}