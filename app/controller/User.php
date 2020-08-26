<?php 

	namespace App\controller;

	use App\support\Database;

	class User extends Database
	{
		// create user
		public function insertUser($data)
		{
			$data = parent:: insert("users",[

				'name' => $_POST['name'],
				'uname' => $_POST['uname'],
				'roll' => $_POST['post'],
				'cell' => $_POST['cell'],
				
			]);
	

				if ($data) {
					
					return '<p class = "alert alert-danger"><b>save</b> to database<button class="close" data-dismiss = "alert">&times;</button></p>';
				}



		}
		


		
	// update user
		public function updateUser($photo,array $data)
		{	
			$id = $data['id'];
			$sid = $_SESSION['id'];
			$session_poto = $data['old_phot'];
			//if the user not update photo
			if ($photo == "no") {
				
				$photo_name = $session_poto;
			}else{
				$photo_name = $photo;
			}
			// if pass is change 

			$responce = parent::updateData('users',$id,[

				'name' => $data['name'],
				'email' => $data['email'],
				'cell' => $data['cell'],
				'photo' => $photo_name
				
				

			]);

			if ($sid == $id) {

			
					$_SESSION['name'] =  $data['name'];
					$_SESSION['email'] =  $data['email'];
					$_SESSION['cell'] =  $data['cell'];
					$_SESSION['photo'] =  $photo_name;

					return 'data updated';
				
			}
		}	

	}; //class end




 ?>