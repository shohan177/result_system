<?php 

	require_once "../../../config.php";
	require_once "../../../vendor/autoload.php";


	use App\controller\User;


	$user = new User;

  	$data	=  $user -> delUser($_POST['user_id']);

	echo $data;


 ?>