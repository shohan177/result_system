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

		/***********************************
		 * Data base connection
		 ***********************************/
		private	function connection()
		{
			return $this -> connection = new PDO("mysql:host =".$this -> host.";dbname=".$this -> db, $this -> user , $this -> pass );
		}


		/************************************
		 * find single data
		 ************************************/
		public function find($table, array $data)
		{
			
			foreach ($data as $key => $value)
			{
				
				$arra[] = $key."= "."'".$value."'";
			}

			$condiation = implode(' || ',$arra);

			$qure = "SELECT * FROM users WHERE $condiation";
			$stmt = $this -> connection() -> prepare($qure);

			$stmt -> execute();
			$num = $stmt -> rowCount();

			return[

				'num' => $num,
				'data' => $stmt


			];


		}


		/************************************
		 * Update single data
		 ************************************/
		public function updateData($table,$id ,array $data)
		{
			
			foreach ($data as $key => $value)
			{
				
				$arra[] = $key."= "."'".$value."'";
			}

			$condiation = implode(' , ',$arra);

			$qure = "UPDATE $table SET $condiation WHERE id = $id";
			$stmt = $this -> connection() -> prepare($qure);
			$stmt -> execute();


		}


	};


 ?>