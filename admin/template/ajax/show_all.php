<?php 

	require_once "../../../config.php";
	require_once "../../../vendor/autoload.php";


	use App\controller\User;
    use App\controller\Manage;


	$user = new User;
    $mng = new Manage;
    $id = 1;

	$data = $mng -> showAll("users");

	$userData = ($data -> fetchAll());

	foreach ($userData as $value) :
	
 ?>

 <tr>
     <td><?php echo $id++ ?></td>
     <td><?php echo $value['name']; ?></td>
     <td><?php echo $value['roll']; ?></td>
     <td><?php echo $value['uname']; ?></td>
     <td><?php echo $value['email']; ?></td>
     <td><?php echo $value['cell']; ?></td>
     <td><i class="i i-circle-sm text-success-dk"> <?php echo $value['status']; ?></i></td>
     <td><?php echo $value['create_at']; ?></td>
     <td><img src="images/<?php echo $value['photo']; ?>" height="40px" width="40px" alt=""></td>
     <td>
         <a class="btn btn-sm btn-info" id="view_user" href="profile.php?id=<?php echo $value['id']; ?>&action=view">View</a>
         <a class="btn btn-sm btn-warning" id="view_user" href="profile.php?id=<?php echo $value['id']; ?>&action=edit">Edit</a>
         <a class="btn btn-sm btn-danger" id="delete_user" u_table ="users" u_id ="<?php echo $value['id']; ?>" href="#">Delete</a>
     </td>
 </tr>
	


 <?php endforeach ?>