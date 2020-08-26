<?php 

	require_once "../../../config.php";
	require_once "../../../vendor/autoload.php";


	use App\controller\User;
	use App\controller\Manage;

	$user = new User;
	$mng = new Manage;

	$id = $_POST['stu_id'];

	
	$responce = $mng -> getUserVal($id ,"students");

	$data = $responce -> fetch(PDO::FETCH_ASSOC);
	
	echo json_encode($data);
 ?>