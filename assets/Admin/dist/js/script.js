const flashData = $('.flash-data').data('flashdata');

if (flashData) {
	swal({

		title:'Data Berhasil ' + flashData,
		// text: '' ,
		type: 'success'

	});
}


//tombol_hapus
$('.tombol_hapus').on('click', function(e){

	e.preventDefault();
	const href = $(this).attr('href');

	Swal({
	  title: 'Apakah Anda Yakin?',
	  text: "Data Akan Dihapus!",
	  type: 'warning',
	  showCancelButton: true,
	  confirmButtonColor: '#3085d6',
	  cancelButtonColor: '#d33',
	  confirmButtonText: 'Hapus!'
	}).then((result) => {
	  if (result.value) {
	    document.location.href = href;
	  }
	})

});

//tombol blok
$('.tombol_blok').on('click', function(e){

	e.preventDefault();
	const href = $(this).attr('href');

	Swal({
	  title: 'Apakah Anda Yakin?',
	  text: "Data Akan Diblok!",
	  type: 'warning',
	  showCancelButton: true,
	  confirmButtonColor: '#3085d6',
	  cancelButtonColor: '#d33',
	  confirmButtonText: 'Blok!'
	}).then((result) => {
	  if (result.value) {
	    document.location.href = href;
	  }
	})

});

//tombol terima
$('.tombol_terima').on('click', function(e){

	e.preventDefault();
	const href = $(this).attr('href');

	Swal({
	  title: 'Apakah Anda Yakin?',
	  text: "Data Akan DiTerima!",
	  type: 'warning',
	  showCancelButton: true,
	  confirmButtonColor: '#3085d6',
	  cancelButtonColor: '#d33',
	  confirmButtonText: 'Terima'
	}).then((result) => {
	  if (result.value) {
	    document.location.href = href;
	  }
	})

});

//ganti password relawan
$('.ganti').on('click', function(e){

	e.preventDefault();
	swal({

		title: 'Password Berhasil Diganti!',
		// text: '' ,
		type: 'success'
	});

});