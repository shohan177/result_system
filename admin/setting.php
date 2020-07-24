<?php include_once "template/header.php" ?>
<?php 

	if (isset($_GET['id'])) {
		
		$loginuserData = $auth -> singleUserData($_GET['id']);
	}


?>
<?php 
    
    if (isset($_POST['save'])) {
       
       $cpass = $_POST['cpass'];
       $nPass = $_POST['npass'];
       $nnpass = $_POST['nnpass'];
       $id = $_SESSION['id'];

       if (empty($cpass)||empty($nPass)||empty($nnpass)) {

          $mess = "<p class = \"alert alert-danger\">All fild requar <button class=\"close\" data-dismiss = \"alert\">&times;</button></p>";
       }

        $mess = $auth -> passChange($id,$cpass,$nPass,$nnpass);
    }




 ?>




<!-- MAIN CONTENT  -->
<section id="content">
    <section class="hbox stretch">
        <section>
    <section class="vbox">
        <section class="scrollable padder">



            <section class="row m-b-md">
                <div class="col-sm-6">
                    <h3 class="m-b-xs text-black">Setting</h3> <small>Welcome back,<?php echo $_SESSION['uname']?>, <i class="fa fa-map-marker fa-lg text-primary"></i> New York City</small> </div>
                <div class="col-sm-6 text-right text-left-xs m-t-md">
                    <div class="btn-group"> <a class="btn btn-rounded btn-default b-2x dropdown-toggle" data-toggle="dropdown">Widgets <span class="caret"></span></a>
                        <ul class="dropdown-menu text-left pull-right">
                            <li><a href="#">Notification</a></li>
                            <li><a href="#">Messages</a></li>
                            <li><a href="#">Analysis</a></li>
                            <li class="divider"></li>
                            <li><a href="#">More settings</a></li>
                        </ul>
                    
            </section>
				<!-- main contain start-->

<div class="row">
    <div class="col-sm-6">
        <section class="panel panel-default">
            <header class="panel-heading font-bold">Update Information</header>
            <div class="panel-body">
                <form role="form" id ="update_info" action="<?php echo $_SERVER['PHP_SELF']?>?id=<?php echo $loginuserData['id']?>" method = "POST">
                    <div class="mess"></div>
                    <div class="form-group"><label>Name</label>
                    <input type="hidden" name="id" value="<?php echo $loginuserData['id']?>">

                    <input name = "name" value="<?php echo $loginuserData['name']?>" type="text" class="form-control"/></div>

                    <div class="form-group"><label>cell</label>
                    <input name = "cell" value="<?php echo $loginuserData['cell']?>" type="text" class="form-control" /></div>

                    <div class="form-group"><label>email</label>
                    <input name = "email" value="<?php echo $loginuserData['email']?>" type="text" class="form-control" /></div> 

                    <div class="form-group">
                    	<img style="height: 150px; width: 150px;" src="images/<?php echo $loginuserData['photo']?>" alt="">
                    </div> 
                   
					<div class="form-group"><label>change photo</label>
                    <input name = "photo" type="file" class="form-control" value="" /></div> 

                    <button type="submit" class="btn btn-sm btn-default">Update</button>
                </form>
            </div>
        </section>
    </div>
    <div class="col-sm-6">
        <section class="panel panel-default">
            <header class="panel-heading font-bold">Change Password</header>
            <div class="panel-body">
                <?php 
                if (isset($mess)) {
                    echo $mess;
                }

                 ?>
                <form role="form" action="<?php echo $_SERVER['PHP_SELF']?>?id=<?php echo $loginuserData['id']?>" method = "POST">
                    
                    <div class="form-group"><label>Curent Password</label>
                     <input name = "cpass"type="text" class="form-control"/></div>

                    <div class="form-group"><label>New Password</label>
                     <input name = "npass"type="text" class="form-control" /></div>

                    <div class="form-group"><label>Confurm Password</label>
                     <input name = "nnpass"type="text" class="form-control" /></div> 

                    <button name = "save"type="submit" class="btn btn-sm btn-default">Change Password</button>


                </form>
            </div>
        </section>
    </div>
</div>

<?php include_once "template/footer.php" ?>

