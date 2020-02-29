   
const flashData = $('.flash-data').data('flashdata');

if (flashData) {
	setTimeout(function() {
		Swal({
		  // position: 'top-end',
		  type: 'success',
		  title: 'Berhasil '+ flashData,
		  showConfirmButton: false,
		  timer: 1500
		}, function(){
			 window.location = "https://localhost/Pkl/admin";;
		});
	});
		// setTimeout(function() {
  //       swal({
  //           title: "Wow!",
  //           text: "Message!",
  //           type: "success"
  //       }, function() {
  //           window.location = "https://localhost/Pkl/admin";
  //       });
  //   }, 1000);

}

const flashData1 = $('.flash-data-salah').data('flashdata');

if (flashData1) {
	swal({

		title:'Oopss...',
		text: flashData1,
		type: 'error'

	});
}
