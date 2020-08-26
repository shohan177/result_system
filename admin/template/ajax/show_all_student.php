<?php 

	require_once "../../../config.php";
	require_once "../../../vendor/autoload.php";


	use App\controller\StudentsCon;
    use App\controller\Manage;
    


    $stu = new StudentsCon;
    $mng = new manage;
    
    $id = 1;

	$data = $mng -> showAll("students");

	$userData = ($data -> fetchAll());

	foreach ($userData as $value) :
	
 ?>
	<tr>
        <td><?php echo $id++ ?></td>
        <td><?php echo $value['name'] ?></td>
        <td><?php echo $value['reg'] ?></td>
        <td><?php echo $value['roll'] ?></td>
        <td><?php echo $value['year'] ?></td>
        <td><?php echo $value['exm'] ?></td>
        <td><i class="i i-circle-sm text-success-dk"><?php echo $value['status'] ?></i></td>
       
        <td><?php echo $value['inst'] ?></td>
        <td><img src="images/students/<?php echo $value['photo'] ?>" height="40px" width="40px" alt=""></td>
        <td>
          
            <a class="btn btn-sm btn-warning" id="view_stu_info" student_id="<?php echo $value['id'] ?>" href="#">Edit</a>
            <a class="btn btn-sm btn-danger" id="delete_user" u_table ="students" u_id ="<?php echo $value['id']; ?>" href="#">Delete</a>
        </td>
    </tr>


 <?php endforeach ?>