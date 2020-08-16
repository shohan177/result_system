(function($){

// Add new user modal
		$(document).on('click','#show_add_modal', function(){
			//alert();
			
			$('#user_add_modal').modal('show');

			return false;


		});
// adda usser form data

	$(document).on('submit','form#add_user_form', function(e){
		e.preventDefault();

		let name = $('input[name = "name"]').val();		
		let uname = $('input[name = "uname"]').val();		
		let post = $('input[name = "post"]').val();	

		if (name == "" || uname == "" || post == "" ) 
		{
			$('.mess').html('<p class = "alert alert-danger"><b> Name , User name , Post </b> are requeir<button class="close" data-dismiss = "alert">&times;</button></p>')
		}else{

			$.ajax({


			url : 'template/ajax/add_user.php',
			method : "POST",
			data : new FormData(this),
			contentType : false,
			processData : false,
			
			success : function(data){
				
				$('form#add_user_form')[0].reset();
				showAllData();
				$('#user_add_modal').modal('hide');
				swal("Done!", "Create new user", "success");
				//$('.notifi_mass').html(data);
			}
		});

		};	
	});

//show all table data

function showAllData(){
	
	$.ajax({
		url : 'template/ajax/show_all.php',
		success : function(data){
			$('tbody#table_data').html(data)
		}
	});
	
};
showAllData();

//delete user 

	$(document).on('click','a#delete_user',function(e){
		e.preventDefault();

		let id = $(this).attr('u_id')

		swal({
		  title: "Are you sure?",
		  text: "Once deleted, you will not be able to recover this account",
		  icon: "warning",
		  buttons: true,
		  dangerMode: true,
		})
		.then((willDelete) => {
		  if (willDelete) {

		  	$.ajax({
		  		url : 'template/ajax/delete_user.php',
		  		data : { user_id : id},
		  		method : "POST",
		  		success : function(data){
		  			showAllData();
		  			swal(data, {

		  			  icon: "success",
		  			});
		  		}

		  	});

		    
		  } else {
		    swal("This account is safe!");
		  }

		});

	});

// data for edit user
function editUserData($id){

	$.ajax({

		url: 'template/ajax/edit_user_data.php',
		data : {u_id : $id},
		method : "POST",
		success : function(data){
			
			$('#edit').html(data)
		}
		
		});

};



//edit button click
$(document).on('click','a#edit_user',function(e){
	
	let id = $(this).attr('user_id')
	
	editUserData(id)
	return false;
});

// edit user

$(document).on('submit','form#edit_user',function(e){
	e.preventDefault();
	$.ajax({
		url : 'template/ajax/edit_user.php',
		data: new FormData(this),
		contentType: false,
		processData: false,
		method: "POST",
		success : function(data){
		viewUser()
		swal("Sucess!", data, "success");
		}

	});


});

//view single user
function viewUser(){

	$.ajax({
		url: 'template/ajax/view_user.php',
		success : function(data){
			let user_data = JSON.parse(data)

			$('img#u_phot').attr('src','images/'+user_data.photo)
			$('h3#u_name').text(user_data.name)
			$('p#u_uname').text(user_data.uname)
			$('strong#u_roll').text(user_data.roll)
			$('a#u_cell').text(user_data.cell)
			$('a#u_email').text(user_data.email)
		
		}

	});

}



$(document).ready(function(){

	viewUser()
})

})(jQuery);