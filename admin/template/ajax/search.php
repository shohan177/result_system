<?php 

	require_once "../../../config.php";
	require_once "../../../vendor/autoload.php";


	use App\controller\StudentsCon;

	$stu = new StudentsCon;
	$data = $stu -> searchStudent($_POST['val']);
	echo "<ul>";
	foreach ($data as $stu):
 ?>
	<li style="list-style: none; padding: 2px; cursor: pointer;"
	id = "student_select" 
	stu_name = "<?php echo $stu['name']?>"
	stu_reg = "<?php echo $stu['reg']?>"
	stu_roll = "<?php echo $stu['roll']?>"
	stu_photo = "<?php echo $stu['photo']?>"
	stu_inst = "<?php echo $stu['inst']?>"
	stu_id = "<?php echo $stu['id']?>"
	>
		<img src="images/students/<?php echo $stu['photo']?>" style="width: 50px; height: 50px; border-radius: 50%; padding: 5px" alt="">
		<span>  <?php echo $stu['name']?></span>
		<span> - Reg : <?php echo $stu['reg']?></span>
		<span> Roll : <?php echo $stu['roll']?></span>
	</li>

 <?php endforeach; ?>
 </ul>