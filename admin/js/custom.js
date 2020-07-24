(function($){



//update usre infomation
	$('form#update_info').submit(function(e){
		e.preventDefault();
		$.ajax({
			url: '../app/controller/User.php',
			data: new FormData(this),
			contentType: false,
	 		processData: false,
	 		method: "POST",
	 		success: function(data){
	 			
	 			alert(data);
	 		}
		})

	});



})(jQuery)