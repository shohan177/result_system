<?php 

	require_once "../../../config.php";
	require_once "../../../vendor/autoload.php";


	use App\controller\User;

	$user = new User;

	$id = $_SESSION['id'];
	
	$responce = $user -> getUserVal($id);

	$data = $responce -> fetch(PDO::FETCH_ASSOC);

	echo json_encode($data);
 ?>