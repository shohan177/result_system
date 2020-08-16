<?php 

	require_once "../../../config.php";
	require_once "../../../vendor/autoload.php";


	use App\controller\User;


	$user = new User;

	echo $user -> insertUser($_POST);

	


 ?>