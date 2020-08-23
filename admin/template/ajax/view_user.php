<?php 

	require_once "../../../config.php";
	require_once "../../../vendor/autoload.php";


	use App\controller\User;
	use App\controller\Manage;

	$user = new User;
	$mng = new Manage;

	$id = $_POST['user_id'];
	
	$responce = $mng -> getUserVal($id,"users");

	$data = $responce -> fetch(PDO::FETCH_ASSOC);

	echo json_encode($data);
 ?>