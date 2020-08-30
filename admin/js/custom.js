(function($){

// show Add new user modal
		$(document).on('click','#show_add_modal', function(){
			//alert();
			
			$('#user_add_modal').modal('show');

			return false;


		});

// show Add new student modal
	$(document).on('click','#student_show_modal', function(){
		//alert();
		$('form#add_student_form')[0].reset()
		$('#student_add_modal').modal('show');

		return false;


	});

// show Add result modal
		$(document).on('click','#result_add_show', function(){
			$('form#result_add_form')[0].reset()
			$('#result_add_modal').modal('show');
			return false;


		});

// sent usser form data

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
//sent student from data
$(document).on('submit','form#add_student_form',function(e){
	e.preventDefault()


	let name = $('input[name="name"]').val()
	let reg = $('input[name="reg"]').val()
	let roll = $('input[name="roll"]').val()
	let inst = $('input[name="inst"]').val()
	let year = $('select[name="year"]').val()
	let board = $('select[name="board"]').val()


	if (name =="" || reg =="" ||  roll =="" || inst =="" || year =="" || board =="") 
	{
		//$('.stu_mess').html('<p class = "alert alert-danger"><b>All filds</b> are requeir<button class="close" data-dismiss = "alert">&times;</button></p>')
		swal("Empty Filds", "All filds are requeirs !!", "error")
	
	}else if (document.getElementById("stu_poto").files.length == 0 ) {

		swal("Photo", "you didn't select any photo", "warning")
		
	}else {
			$.ajax({


			url : 'template/ajax/add_student.php',
			method : "POST",
			data : new FormData(this),
			contentType : false,
			processData : false,
			
			success : function(data){
			$('form#add_student_form')[0].reset()
			$('#student_add_modal').modal('hide');
			swal("Done", data, "success")
			showAllStudentData()
			}
		});
	}

	


	
});
//clear input fild for student 
$(document).on('click','input#stu_clear',function(e){
	$('form#add_student_form')[0].reset()
	
})

//number clear
	$(document).on('click','input#number_clear',function(){
		$('form#result_add_form')[0].reset()
		$('section#stu_section').addClass('hidden')
		$('.search_result').show()
		$('input#student_search').attr('disabled',false)
		$('#sub_ban').addClass('hide')
		$('#sub_eng').addClass('hide')
		$('#sub_math').addClass('hide')
		$('#sub_reli').addClass('hide')
		$('#sub_scien').addClass('hide')
		$('#sub_socal').addClass('hide')
		$('#sub_phy').addClass('hide')
		$('#sub_chy').addClass('hide')
		$('#sub_bio').addClass('hide')
		$('#sub_ban2').addClass('hide')
		$('#sub_eng2').addClass('hide')
		$('#sub_phy2').addClass('hide')
		$('#sub_chy2').addClass('hide')
		$('#sub_bio2').addClass('hide')
			
	})

//search student 
$(document).on('keyup','input#student_search',function(){

	let serach = $(this).val()

	
	$.ajax({

		url : 'template/ajax/search.php',
		method : "POST",
		data : {'val' : serach},
		success : function(data){
			$('.search_result').html(data)
		}
	});

});
// get search result
$(document).on('click','li#student_select',function(){

	let name = $(this).attr('stu_name')
	let reg = $(this).attr('stu_reg')
	let roll = $(this).attr('stu_roll')
	let photo = $(this).attr('stu_photo')
	let inst = $(this).attr('stu_inst')
	let id = $(this).attr('stu_id')
	let exm = $(this).attr('stu_exm')


	$('.search_result').hide()
	$('input#student_search').val(id)
	$('input#exm').val(exm)
	$('label#s_lab').text('Student id')
	$('section#stu_section').removeClass('hidden')
	$('input#student_search').attr('disabled',true)
	$('img#selected_stu').attr('src','images/students/'+photo)
	$('a#stu_s_name').text(name)
	$('a#stu_s_roll').text("Roll : "+ roll +" Reg : " + reg)
	$('a#stu_s_inst').text(inst+" exm: "+exm)

	if (exm == "jsc") 
	{	//input fild for jsc
		$('#sub_ban').removeClass('hide')
		$('#sub_eng').removeClass('hide')
		$('#sub_math').removeClass('hide')
		$('#sub_reli').removeClass('hide')
		$('#sub_scien').removeClass('hide')
		$('#sub_socal').removeClass('hide')

	}else if (exm == "ssc")
	{
		//input fild for ssc
		$('#sub_ban').removeClass('hide')
		$('#sub_eng').removeClass('hide')
		$('#sub_math').removeClass('hide')
		$('#sub_reli').removeClass('hide')
		$('#sub_scien').removeClass('hide')
		$('#sub_socal').removeClass('hide')
		$('#sub_phy').removeClass('hide')
		$('#sub_chy').removeClass('hide')
		$('#sub_bio').removeClass('hide')

		
	}else if (exm == "hsc")
	{	
		//input fild for Hsc
		$('#sub_ban').removeClass('hide')
		$('#sub_ban2').removeClass('hide')
		$('#sub_eng').removeClass('hide')
		$('#sub_eng2').removeClass('hide')
		$('#sub_math').removeClass('hide')
		$('#sub_hmath').removeClass('hide')
		$('#sub_phy').removeClass('hide')
		$('#sub_phy2').removeClass('hide')
		$('#sub_chy').removeClass('hide')
		$('#sub_chy2').removeClass('hide')
		$('#sub_bio').removeClass('hide')
		$('#sub_bio2').removeClass('hide')
	}



})

//show all user table data

function showAllData(){
	
	$.ajax({
		url : 'template/ajax/show_all.php',
		success : function(data){
			$('tbody#table_data').html(data)
		}
	});
	
};
showAllData();

//show all student table data 
function showAllStudentData(){
	
	$.ajax({
		url : 'template/ajax/show_all_student.php',
		success : function(data){
			$('tbody#stu_t_body').html(data)
		}
	});

}
showAllStudentData()
//delete user 


	$(document).on('click','a#delete_user',function(e){
		e.preventDefault();

		let id = $(this).attr('u_id')
		let table = $(this).attr('u_table')

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
		  		data : { user_id : id, table : table},
		  		method : "POST",
		  		success : function(data){
		  			showAllData();
		  			showAllStudentData()
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

//class remove function 
function removeActiveClass(){
	$("#bio").removeClass("active")
	$("#about").removeClass("active")
	$("#activities").removeClass("active")
	$("ul li#acti").removeClass("active")
}


 //update user info//

$(document).on('submit','form#edit_user',function(e){
	e.preventDefault();
	//receive id from url
	let urldata = geturlData()
	$.ajax({
		url : 'template/ajax/edit_user.php',
		data: new FormData(this),
		contentType: false,
		processData: false,
		method: "POST",
		success : function(data){
		//refresh page data
		viewUser(urldata.id)
		removeActiveClass()
		swal("Sucess!", data, "success");

		}

	});


});

//view single user(data load for edit section)
function viewUser($id){

	let urlData = geturlData()
	let action = urlData.action
	let table = "users"

	if (action == "profile") {
		$("#header_color").addClass("bg-info")
		$("ul#manu_color").addClass("bg-info")
	}


	if (action == "view") {

		$("#bio").addClass("active")
		$("#about").addClass("active")
		
	}else if (action == "edit") {

		$("#edit").addClass("active")
		$("ul li#uedit").addClass("active")
	}else{

		$("#activities").addClass("active")
		$("ul li#acti").addClass("active")

	}

	$.ajax({
		url: 'template/ajax/view_user.php',
		data: {'user_id' : $id},
		method: "POST",
		success : function(data){
			let user_data = JSON.parse(data)

			$('img#u_phot').attr('src','images/'+user_data.photo)
			$('h3#u_name').text(user_data.name)
			$('p#u_uname').text(user_data.uname)
			$('strong#u_roll').text(user_data.roll)
			$('a#u_cell').text(user_data.cell)
			$('a#u_email').text(user_data.email)
			$('input[name="name"]').val(user_data.name)
			$('input[name="email"]').val(user_data.email)
			$('input[name="cell"]').val(user_data.cell)
			$('input[name="uname"]').val(user_data.uname)
			$('input[name="id"]').val(user_data.id)
			$('input[name="old_phot"]').val(user_data.photo)
		
		}

	});

}
//view single student data(load data for edit section)
$(document).on('click','a#view_stu_info',function(e){
	e.preventDefault();
	
	$('#student_edit_modal').modal('show');

	let id = $(this).attr('student_id')
	$.ajax({
		url : 'template/ajax/view_student_data.php',
		data : { 'stu_id' : id},
		method : "POST",
		success : function(data){
			let s_data = JSON.parse(data);

			$('input[name="name"]').val(s_data.name)
			$('input[name="reg"]').val(s_data.reg)
			$('input[name="roll"]').val(s_data.roll)
			$('select[name="exm"]').val(s_data.exm)
			$('select[name="year"]').val(s_data.year)
			$('input[name="inst"]').val(s_data.inst)
			$('input[name="photo_old"]').val(s_data.photo)
			$('input[name="id"]').val(s_data.id)
			$('img#s_phot').attr('src','images/students/'+s_data.photo)


		}

	});
	
});
//update student 
$(document).on('submit','form#edit_student_form',function(e){
	e.preventDefault()

	$.ajax({
		url : 'template/ajax/edit_student_data.php',
		data : new FormData(this),
		contentType: false,
		processData: false,
		method: "POST",
		success : function(data){
			showAllStudentData()
			$('#student_edit_modal').modal('hide');
			swal("Updated!", data, "success");

		}

	})

	


});

//get url data frome url
function geturlData(){

	url = window.location.search.slice(1);
	url = url.replace(/=/g,'":"');
	url = url.replace(/&/g,'","');
	url = '{"'+ url +'"}'
	return urlObj = JSON.parse(url);

}


$(document).ready(function(){
	//get data from url
	
	let data = geturlData()

	viewUser(data.id)
})

})(jQuery);