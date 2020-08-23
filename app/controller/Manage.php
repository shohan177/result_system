<?php 

	namespace App\controller;

	use App\support\Database;

	/**
	 * 
	 */
	class Manage extends Database
	{
		/**
		 * delet from tabel
		 */
		public function delUser($id,$table)
		{
			$date = parent :: delByid($table,$id);
			

			if ($date) {
				
				return 'Delete from Users';
			}
		}

		/**
		 * file upload function
		 */
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

		//find data frome table

		public function getUserVal($id,$table)
		{
			$data = parent :: find($table, [

				'id' => $id,


			]);

			return $data['data'];
		}

		// show all from table
		public function showAll($table)
		{
			$data = parent::showAllTableData($table);
			return $data;
		}

	}


 ?>