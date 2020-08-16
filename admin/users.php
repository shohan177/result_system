<?php include_once "template/header.php" ?>




<!-- MAIN CONTENT  -->
<section id="content">
    <section class="hbox stretch">
        <section>
    <section class="vbox">
        <section class="scrollable padder">



            <section class="row m-b-md">
                <div class="col-sm-6">
                    <h3 class="m-b-xs text-black">All Users</h3> <small>Welcome back,<?php echo $_SESSION['uname']?>, <i class="fa fa-map-marker fa-lg text-primary"></i> New York City</small> </div>
               <!--  <div class="col-sm-6 text-right text-left-xs m-t-md">
                    <div class="btn-group"> <a class="btn btn-rounded btn-default b-2x dropdown-toggle" data-toggle="dropdown">Widgets <span class="caret"></span></a>
                        <ul class="dropdown-menu text-left pull-right">
                            <li><a href="#">Notification</a></li>
                            <li><a href="#">Messages</a></li>
                            <li><a href="#">Analysis</a></li>
                            <li class="divider"></li>
                            <li><a href="#">More settings</a></li>
                        </ul> -->
                    
            </section>
				<!-- main contain start-->

                <!-- modal start -->

    <div id="user_add_modal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="mess"></div>
                    <h2>Add new User</h2>
                    <hr>
                    <form id = "add_user_form" action="" method="POST" enctype = "multipart/form-data">
                        <div class="form-group">
                            <label for="">Name</label>
                            <input class="form-control" name="name" type="text">
                        </div>
                        <div class="form-group">
                        <div class="m-b-sm">
                            <div class="btn-group" data-toggle="buttons">
                                <label class="btn btn-sm btn-info"> 
                                    <input type="radio" name="post" value="admin" id="option1" />
                                    <i class="fa fa-check text-active"></i>Admin 
                                </label>
                                <label class="btn btn-sm btn-success">
                                    <input type="radio" name="post" value="staff" id="option2" />
                                    <i class="fa fa-check text-active"></i>Staff 
                                </label>
                                <label class="btn btn-sm btn-primary">
                                    <input type="radio" name="post" value="teacher" id="option3" />
                                    <i class="fa fa-check text-active"></i>Teacher
                                </label>
                            </div>
                            </div>
                        <div class="form-group">
                            <label for="">User Name</label>
                            <input class="form-control" name="uname" type="text">
                        </div>

                        <div class="form-group">
                            <label for="">Cell</label>
                            <input class="form-control" name="cell" type="text">
                        </div>  

                       

                       

                       <!--  <div class="form-group">
                            <label for="">Photo</label>
                            <input class="form-control" name="photo" type="file">
                        </div> -->
                        

                        </div>

                        <div class="form-group">
                            <label for=""></label>
                            <input class="btn btn-s-md btn-primary" name="add" type="submit" value="SAVE">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

                <!-- modal end -->


    <div class="col-sm-14">
        <div class="notifi_mass">
            
        </div>
        <section class="panel panel-default">
            <header class="panel-heading"> <a id = "show_add_modal"class="btn btn-sm btn-success" href="#">ADD NEW USER</a></header>
            <table class="table table-striped m-b-none">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Post</th>
                        <th>User id</th>
                        <th>Email</th>
                        <th>cell</th>
                        <th>Status</th>
                        <th>Created at</th>
                        <th>Photo</th>
                        <th>Action</th>
                       <!--  <th width="70"></th> -->
                    </tr>
                </thead>
                <tbody id="table_data">
                    

                   
                </tbody>
            </table>
        </section>
    </div>



  
</div>

<?php include_once "template/footer.php" ?>

