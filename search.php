<?php 

require_once "config.php";
require_once "vendor/autoload.php";


use App\controller\resultController;

	$res = new resultController;


	if (isset($_POST['result'])) {
		$exm = $_POST['exm'];
		$year = $_POST['year'];
		$board = $_POST['board'];
		$reg = $_POST['reg'];
		$roll = $_POST['roll'];

		$data = $res -> serachResult($exm,$year,$reg,$roll);

	
	} else {

		header("location:index.php");
	}
	

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Education Board Bangladesh</title>
	<link rel="stylesheet" href="assets/css/syle.css">

	<link rel="shortcut icon" type="image/x-icon" href="assets/images/bd_logo.png">
</head>
<body>
	

	<div class="wraper">
		<div class="w-top">
			<div class="logo">
				<img src="assets/images/bd_logo.png" alt="">
			</div>
			<div class="banner">
				<h3>Ministry of Education</h3>
				<hr>
				<h4>Intermediate and Secondary Education Boards Bangladesh</h4>
			</div>
		</div>
		<div class="w-main">

			<?php if (isset($data['id'])):?>
			
				<div class="student-info">
					<div class="student-photo">
						<img src="admin/images/students/<?php echo $data['photo']?>" alt="">
					</div>
					<div class="student-details">
						<table>
							<tr>
								<td>Name</td>
								<td><?php echo $data['name']?></td>
							</tr>
							<tr>
								<td>Roll</td>
								<td><?php echo $data['roll']?></td>
							</tr>
							<tr>
								<td>Reg.</td>
								<td><?php echo $data['reg']?></td>
							</tr>
							<tr>
								<td>Board</td>
								<td>Dhaka</td>
							</tr>
							<tr>
								<td>Institute</td>
								<td><?php echo $data['inst']?></td>
							</tr>
							<tr>
								<td>Result</td>
								<td><span style="color:green;font-weight:bold;">Passed<span></td>
							</tr>
						</table>
					</div>

				</div>

				<div class="student-result">
					<table>
						<tr>
							<td>Subject</td>
							<td>Marks</td>
							<td>Grade</td>
							<td>GPA</td>
							<td>CGPA</td>
						</tr>
						<tr>
							<td>Bangla</td>
							<td>89</td>
							<td>5</td>
							<td>4.8</td>
							<td rowspan="6">4.8</td>
						</tr>
						<tr>
							<td>Bangla</td>
							<td>89</td>
							<td>5</td>
							<td>4.8</td>
						</tr>
						<tr>
							<td>Bangla</td>
							<td>89</td>
							<td>5</td>
							<td>4.8</td>
						</tr>
						<tr>
							<td>Bangla</td>
							<td>89</td>
							<td>5</td>
							<td>4.8</td>
						</tr>
						<tr>
							<td>Bangla</td>
							<td>89</td>
							<td>5</td>
							<td>4.8</td>
						</tr>
						<tr>
							<td>Bangla</td>
							<td>89</td>
							<td>5</td>
							<td>4.8</td>
						</tr>
					</table>
				</div>
		<?php endif; ?>
		<?php if (empty($data['id'])):?>

			<div style="height: 170px;">
				
				<h2 style="text-align: center; margin-top: 100px; color: red;">Result Not Found</h2>
				
			</div>


		<?php endif; ?>

		</div>
		<div class="w-footer">
			<div class="f-left">
				<p>©2005-2019 Ministry of Education, All rights reserved.</p>
			</div>
			<div class="f-right">
				<span>Powered by</span>
				<img src="assets/images/tbl_logo.png" alt="">
			</div>
		</div>
	</div>
	<div class="bottom">
		<img src="assets/images/play.png" alt="">
	</div>

	

	
</body>
</html>