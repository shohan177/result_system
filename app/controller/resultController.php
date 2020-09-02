<?php 

	
	namespace App\controller;

	use App\support\Database;
	use PDO;


	/**
	 * 
	 */
	class resultController extends Database
	{
		// result serach function
		public function serachResult($exm,$year,$reg,$roll)

		{	$sql = "SELECT * FROM students INNER JOIN $exm ON students.id= $exm.student_id WHERE students.exm='$exm' AND students.year='$year' AND students.roll='$roll' AND students.Reg='$reg' ";

			$data = parent::rowQure($sql);

			return $data -> fetch(PDO::FETCH_ASSOC);
		}
		
	}

 ?>
