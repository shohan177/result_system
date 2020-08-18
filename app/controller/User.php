<?php 

	namespace App\controller;

	use App\support\Database;

	class User extends Database
	{
		// create user
		public function insertUser()
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
		// show user
		public function showAll()
		{
			$data = parent::showAllTableData('users');
			return $data;
		}

		// delete user

		public function delUser($id)
		{
			$date = parent :: delByid('users',$id);
			

			if ($date) {
				
				return 'Delete from Users';
			}
		}

		//edit user data

		public function getUserVal($id)
		{
			$data = parent :: find('users', [

				'id' => $id,


			]);

			return $data['data'];
		}

		// file uplode system

		public function fileUp($file, $location, $format=['png','jpg','gif'])
		{

			$file_name = $file['name'];
			$file_tmp_name = $file['tmp_name'];
			//without photo upload
			if(empty($file_name)){
			$unicname = "no";
			$status = "without";
			}else{
			//file extenation
			$file_arr = explode('.', $file_name);
			$ext = strtolower(end($file_arr));

			//unice name
			$unicname = md5(time().rand()).".".$ext;
				


			//send file to folder
			if (in_array($ext,$format)) {

				move_uploaded_file($file_tmp_name,$location.$unicname);
				$status = 'with';
			}else{
				$status = 'Error';
			}
		}
			
			return[

				'file_name' => $unicname,
				'status' => $status


			];

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