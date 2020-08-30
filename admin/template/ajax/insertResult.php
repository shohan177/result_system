<?php 

	require_once "../../../config.php";
	require_once "../../../vendor/autoload.php";


	use App\controller\StudentsCon;


	$stu = new StudentsCon;

	
	$data = $stu -> insertResult($_POST);
	print_r($data);
	


 ?>