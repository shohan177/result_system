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

		/**********************
		 * Data base connection
		 ***********************/
		private	function connection()
		{
			return $this -> connection = new PDO("mysql:host =".$this -> host.";dbname=".$this -> db, $this -> user , $this -> pass );
		}


		/*******************
		 * find single data
		 ********************/
		public function find($table, array $data)
		{
			
			foreach ($data as $key => $value)
			{
				
				$arra[] = $key."= "."'".$value."'";
			}

			$condiation = implode(' || ',$arra);

			$qure = "SELECT * FROM $table WHERE $condiation";
			$stmt = $this -> connection() -> prepare($qure);

			$stmt -> execute();
			$num = $stmt -> rowCount();

			return[

				'num' => $num,
				'data' => $stmt


			];


		}


		/*********************
		 * Update single data
		 *********************/
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

			if ($stmt) {
				return true;
			}else{
				return false;
			}


		}

		/**************************
		 * show all data from table
		 *************************/

		public function showAllTableData($table,$order = "DESC")
		{
			
			$qure = "SELECT * FROM $table ORDER BY id $order";
			$stmt = $this -> connection() -> prepare($qure);
			$stmt -> execute();
			return $stmt;
		}

		/**************************
		 * Insert function
		 *************************/

		public function insert($table, array $data)
		{
			foreach ($data as $key => $value) {
				
				$keys[] = $key;
				$values[] = "'".$value."'";
			}

			$val = implode(',', $values); 
			$col = implode(',',$keys);


			$qure = "INSERT INTO $table ($col) VALUES ($val)";
			$stmt = $this -> connection() -> prepare($qure);
			$stmt -> execute();

			if ($stmt) {
				return true;
			}else{
				return false;
			}

		}

		/*******************
		 * delete from table
		 ******************/

		public function delByid($table,$id)
		{
			$qure = "DELETE FROM $table WHERE id = $id";
			$stmt = $this -> connection() -> prepare($qure);
			$stmt -> execute();

			if ($stmt) {
				return true;
			}else{
				return false;
			}
		}
	};


 ?>