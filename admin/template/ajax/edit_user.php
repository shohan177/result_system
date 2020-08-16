<?php 

	require_once "../../../config.php";
	require_once "../../../vendor/autoload.php";


	use App\controller\User;

	$user = new User;
	//call file uplode function
	$photo_name = $user -> fileUp($_FILES['photo'],"../../images/");
  	
  	echo $user -> updateUser($photo_name['file_name'],$_POST);

 ?>