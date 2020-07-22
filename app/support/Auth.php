<?php 

	namespace app\support;
	use App\support\Database;
	use PDO;



	class Auth extends Database
	{

		public function userLoginSystem($user,$pass)
		{
			$data = $this -> userNameCheck($user);

			$num = $data['num'];
			$user_data = $data['data'] -> fetch(PDO::FETCH_ASSOC);

			if ($num == 1) {

				if (password_verify($pass, $user_data['pass'])) {
					session_start();

					$_SESSION['id'] =  $user_data['id'];
					$_SESSION['name'] =  $user_data['name'];
					$_SESSION['email'] =  $user_data['email'];
					$_SESSION['uname'] =  $user_data['uname'];
					$_SESSION['roll'] =  $user_data['roll'];
					$_SESSION['cell'] =  $user_data['cell'];
					header('location:dashbord.php');





				}else{
					return "<p class = \"alert alert-danger\">Worng password<button class=\"close\" data-dismiss = \"alert\">&times;</button></p>";
				}
				
				
			}else{

				return "<p class = \"alert alert-danger\">User or email not match<button class=\"close\" data-dismiss = \"alert\">&times;</button></p>";
			}
		}

		public function userNameCheck($uname_email)
		{
			 
			return parent::dataCheck('users',$uname_email);
		}


	};
	



 ?>