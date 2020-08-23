<?php 

	require_once "../../../config.php";
	require_once "../../../vendor/autoload.php";


	use App\controller\StudentsCon;
	use App\controller\Manage;
	


	$stu = new StudentsCon;
	$mng = new Manage;


	$photo_name = $mng -> fileUp($_FILES['photo'],"../../images/students/");
	
	

	echo $stu -> insertStudent( $photo_name['file_name'],$_POST)


 ?>