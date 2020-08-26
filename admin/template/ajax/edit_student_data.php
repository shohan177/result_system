<?php 

	require_once "../../../config.php";
	require_once "../../../vendor/autoload.php";


	use App\controller\StudentsCon;
	use App\controller\Manage;

	$stu = new StudentsCon;
	$Manage = new Manage;

	 $photo_name = $Manage -> fileUp($_FILES['photo_new'],"../../images/students/");
	 echo $stu -> updateUser($photo_name['file_name'],$_POST);

	 
 ?>