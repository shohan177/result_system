<?php 

	namespace App\support;
	use App\support\Database;
	use PDO;

	

	class Auth extends Database
	{


		/***********************
		 * notification function
		 **********************/
		public function notification($mess = "this mess", $type = "danger")
		{
			 return "<p class = \"alert alert-$type\">$mess<button class=\"close\" data-dismiss = \"alert\">&times;</button></p>";
		}

		/**************
		 * Login system
		 *************/
		public function userLoginSystem($user,$pass)
		{
			$data = $this -> userNameCheck($user);

			$num = $data['num'];
			$user_data = $data['data'] -> fetch(PDO::FETCH_ASSOC);

			if ($num == 1) {

				if (password_verify($pass, $user_data['pass'])) {
					

					$_SESSION['id'] =  $user_data['id'];
					$_SESSION['name'] =  $user_data['name'];
					$_SESSION['email'] =  $user_data['email'];
					$_SESSION['uname'] =  $user_data['uname'];
					$_SESSION['roll'] =  $user_data['roll'];
					$_SESSION['cell'] =  $user_data['cell'];
					
					header('location:dashbord.php');

				}else{

					return $this -> notification("Worng Pass");
				}
		
			}else{

				return $this -> notification("Use and Email not match","warning");
			}
		}


		 /*************************************
		 * Login system username and email check
		 **************************************/
		public function userNameCheck($uname_email)
		{
			 
			return parent::find('users',[
				
				'uname' => $uname_email,
				'email' => $uname_email



			]);
		}

		/***************
		 * logout system
		 **************/
		public function userLogout()
		{
			session_destroy();
			header("location:index.php");
		}

		/*************************
		 * recive single user data
		 ************************/
		public function singleUserData($id)
		{
			$data = parent::find('users',[

					'id' => $id
			]);

			return $singleUser = $data['data'] -> fetch(PDO::FETCH_ASSOC);

		}

		/***********************
		 * password change sytem
		 **********************/
		public function passChange($id,$currentpass, $newpass, $conpass)
		{	//reciver data form database
			$loginUserdata = $this -> oldPassCheck($id);
			$savePass = $loginUserdata['pass'];
			$newP = password_hash($newpass, PASSWORD_DEFAULT);

			//new pass check with old passs
			if (password_verify($currentpass, $savePass)) {
				//new pass and conform pass check
				if ($newpass == $conpass) {
					//data update 
					parent::updateData('users',$id ,[

						'pass' => $newP,

					]);
					//logout and session distroy 
					
			


				}else{

					return $this -> notification("Password not match","warning");
				}
			}else{

				return $this -> notification("Current Password not match");
			}

		}


		/***************************************
		 * password change sytem, old pass check
		 **************************************/
		public function oldPassCheck($oldPass)
		{
			$data = parent::find('users',[

					'id' => $oldPass
			]);

			return $singleUser = $data['data'] -> fetch(PDO::FETCH_ASSOC);
		}
		
	};
	

