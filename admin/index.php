<?php 
    require_once "../config.php";
    require_once "../vendor/autoload.php";

    use App\support\Auth;
    $auth = new Auth;



?>


<!DOCTYPE html>
<html lang="en" class=" ">
<!-- Mirrored from flatfull.com/themes/scale/signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 13 Jul 2019 15:15:07 GMT -->

<head>
    <meta charset="utf-8" />
    <title>Result system login</title>
    <meta name="description" content="app, web app, responsive, admin dashboard, admin, flat, flat ui, ui kit, off screen nav" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <link rel="stylesheet" href="css/app.v1.css" type="text/css" />
    <!--[if lt IE 9]> <script src="js/ie/html5shiv.js"></script> <script src="js/ie/respond.min.js"></script> <script src="js/ie/excanvas.js"></script> <![endif]-->
</head>
<?php 
    if (isset($_POST['login'])) {
        $user = $_POST['user'];
        $pass = $_POST['pass'];

        if (empty($user) || empty($pass)) {

             $mess = "<p class = \"alert alert-danger\">All fild requar <button class=\"close\" data-dismiss = \"alert\">&times;</button></p>";
        }else{
          $mess =  $auth -> userLoginSystem($user,$pass);
        }
    }
  


   

?>

<body class="">
    <section id="content" class="m-t-lg wrapper-md animated fadeInUp">
        <div class="container aside-xl"><!--  <a class="navbar-brand block" href="index.html">Result System</a> -->
                 <img style="height:200px;width: 200px; margin-left:20%; " src="../media/logo/22.png" alt="">
            <section class="m-b-lg">
                <!-- <header class="wrapper text-center"> <strong>Login to get in assess</strong> </header> -->
                <form action="<?php echo $_SERVER['PHP_SELF']?>" method = "POST">
                   <?php 
                        if (isset($mess)) {
                            echo $mess;
                        }

                    ?>
                    <div class="list-group">
                        <div class="list-group-item">
                            <input name = "user" type="text" placeholder="Email" class="form-control no-border"> </div>
                        <div class="list-group-item">
                            <input name = "pass" type="password" placeholder="Password" class="form-control no-border"> </div>
                    </div>
                    <button type="submit" name ="login" class="btn btn-lg btn-primary btn-block">Login</button>
                    <!-- <div class="text-center m-t m-b"><a href="#"><small>Forgot password?</small></a></div> -->
                    <!-- <div class="line line-dashed"></div>
                    <p class="text-muted text-center"><small>Do not have an account?</small></p> <a href="signup.html" class="btn btn-lg btn-default btn-block">Create an account</a> --> </form>
            </section>
        </div>
    </section>
    <!-- footer -->
    <footer id="footer">
        <div class="text-center padder">
            <p> <small>Result System Devoloped by sarwar jahan shohan<br>&copy; 2020</small> </p>
        </div>
    </footer>
    <!-- / footer -->
    <!-- Bootstrap -->
    <!-- App -->
    <script src="js/app.v1.js"></script>
    <script src="js/app.plugin.js"></script>
</body>
<!-- Mirrored from flatfull.com/themes/scale/signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 13 Jul 2019 15:15:07 GMT -->

</html>