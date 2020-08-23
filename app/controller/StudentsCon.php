<?php 

	namespace App\controller;

	use App\support\Database;

	class StudentsCon extends Database
	{
		// create user
		public function insertStudent($photo,$data)
		{
			$data = parent:: insert("students",[

				'name' => $_POST['name'],
				'reg' => $_POST['reg'],
				'roll' => $_POST['roll'],
				'year' => $_POST['year'],
				'exm' => $_POST['exm'],
				'inst' => $_POST['inst'],
				'photo' =>  $photo
				
				
			]);
	

				if ($data) {
					
					return 'Save to Database';
				}
		}
		
	// update user
		public function updateUser($photo,array $data)
		{	
			$id = $data['id'];
			$session_poto = $_SESSION['photo'];
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

			if ($responce) {

			
					$_SESSION['name'] =  $data['name'];
					$_SESSION['email'] =  $data['email'];
					$_SESSION['cell'] =  $data['cell'];
					$_SESSION['photo'] =  $photo_name;

					return 'data updated';
				
			}
		}	

	}; //class end




 ?>