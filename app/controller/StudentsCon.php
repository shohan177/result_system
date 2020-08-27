<?php 

	namespace App\controller;

	use App\support\Database;
	use PDO;

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
			$old_photo = $data['photo_old'];
			//if the user not update photo
			if ($photo == "no") {
				
				$photo_name = $old_photo;
			}else{
				$photo_name = $photo;
			}
			// if pass is change 

			$responce = parent::updateData('students',$id,[

				'name' => $data['name'],
				'reg' => $data['reg'],
				'roll' => $data['roll'],
				'exm' => $data['exm'],
				'year' => $data['year'],
				'inst' => $data['inst'],
				'photo' => $photo_name
			
				
				

			]);

			if ($responce) {

					return 'data updated';
				
			}
		}	

		//student search function 

		public function searchStudent($val)
		{
			$data = parent::searchData("students",$val);
			return $data -> fetchAll(PDO::FETCH_ASSOC);
		}

	}; //class end




 ?>