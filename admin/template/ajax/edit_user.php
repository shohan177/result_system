<?php 

	require_once "../../../config.php";
	require_once "../../../vendor/autoload.php";


	use App\controller\User;
	use App\controller\Manage;

	$user = new User;
	$mng = new Manage;
	//call file uplode function
	$photo_name = $mng -> fileUp($_FILES['photo'],"../../images/");
  	
  	echo $user -> updateUser($photo_name['file_name'],$_POST);

 ?>