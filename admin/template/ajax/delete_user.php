<?php 

	require_once "../../../config.php";
	require_once "../../../vendor/autoload.php";


	use App\controller\Manage;


	$mng = new Manage;

  	$data	=  $mng -> delUser($_POST['user_id'],$_POST['table']);

	echo $data;


 ?>