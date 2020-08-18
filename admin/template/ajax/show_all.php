<?php 

	require_once "../../../config.php";
	require_once "../../../vendor/autoload.php";


	use App\controller\User;


	$user = new User;


	$data = $user -> showAll();

	$userData = ($data -> fetchAll());

	foreach ($userData as $value) :
	
 ?>

 <tr>
     <td>1</td>
     <td><?php echo $value['name']; ?></td>
     <td><?php echo $value['roll']; ?></td>
     <td><?php echo $value['uname']; ?></td>
     <td><?php echo $value['email']; ?></td>
     <td><?php echo $value['cell']; ?></td>
     <td><i class="i i-circle-sm text-success-dk"> <?php echo $value['status']; ?></i></td>
     <td><?php echo $value['create_at']; ?></td>
     <td><img src="images/<?php echo $value['photo']; ?>" height="40px" width="40px" alt=""></td>
     <td>
         <a class="btn btn-sm btn-info" href="profile.php?id=<?php echo $value['id']; ?>&action=view">View</a>
         <a class="btn btn-sm btn-warning" href="profile.php?id=<?php echo $value['id']; ?>&action=edit">Edit</a>
         <a class="btn btn-sm btn-danger" id="delete_user" u_id ="<?php echo $value['id']; ?>" href="#">Delete</a>
     </td>
 </tr>
	


 <?php endforeach ?>