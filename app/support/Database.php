<?php 
	namespace App\support;
	

	use PDO;

	abstract class Database
	{

		/**
		 * Server information
		 */

		private $host = HOST;
		private $user = USER;
		private $pass = PASS;
		private $db = DB;
		private $connection;

		private	function connection()
		{
			return $this -> connection = new PDO("mysql:host =".$this -> host.";dbname=".$this -> db, $this -> user , $this -> pass );
		}

		protected function dataCheck($table,$data)
		{
			
			$stmt = $this -> connection() -> prepare("SELECT * FROM users WHERE uname ='$data' || email = '$data'");

			$stmt -> execute();
			$num = $stmt -> rowCount();

			return[

				'num' => $num,
				'data' => $stmt


			];
		}

	};


 ?>