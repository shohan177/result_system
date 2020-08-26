<?php include_once "template/header.php" ?>




<!-- MAIN CONTENT  -->
<section id="content">
    <section class="hbox stretch">
        <section>
    <section class="vbox">
        <section class="scrollable padder">



            <section class="row m-b-md">
                <div class="col-sm-6">
                    <h3 class="m-b-xs text-black">All Results</h3> <small>Welcome back,<?php echo $_SESSION['uname']?>, <i class="fa fa-map-marker fa-lg text-primary"></i> New York City</small> </div>
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
                    <h2>Add Results</h2>
                    <hr>
                    <form id = "add_student_form" action="" method="POST" enctype = "multipart/form-data">
                        <div class="form-group">
                            <label for="">Name</label>
                            <input class="form-control" name="name" type="text">
                        </div>

                        <div class="form-group">
                            <label for="">Email</label>
                            <input class="form-control" name="email" type="text">
                        </div>

                        <div class="form-group">
                            <label for="">Cell</label>
                            <input class="form-control" name="cell" type="text">
                        </div>

                        <div class="form-group">
                            <label for="">Photo</label>
                            <input class="form-control" name="photo" type="file">
                        </div>

                        <div class="form-group">
                            <label for=""></label>
                            <input class="btn btn-primary" name="add" type="submit" value="Add student">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

                <!-- modal end -->

<ul id="manu_color" class="nav nav-tabs m-b-n-xxs bg-light">
    <li class="active">
        <a href="#jsc" data-toggle="tab" class="m-l">JSC
            <span class="badge bg-warning badge-sm m-l-xs">10</span>
        </a>
    </li>
    <li id="" >
        <a href="#ssc" data-toggle="tab">SSC
            <span class="badge bg-warning badge-sm m-l-xs">300</span>
        </a>
    </li>
    <li id="">
        <a href="#hsc" id = "edit_user"  data-toggle="tab">HSC
            <span class="badge bg-warning badge-sm m-l-xs">200</span>
        </a>
    </li>
</ul>

<div class="tab-content">
    <!-- contenter start -->
<div  class=" panel tab-pane active" id="jsc">
    <div class="col-sm-12">
        <section class="panel panel-default">
            <header class="panel-heading"> <a id = "show_add_modal"class="btn btn-sm btn-success" href="#">ADD NEW RESULT</a></header>
            <table class="table table-striped m-b-none">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
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
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Sarwar jahan shohan</td>
                        <td>shohan</td>
                        <td>shohan@gmail.com</td>
                        <td>0177738207</td>
                        <td><i class="i i-circle-sm text-success-dk"> Active</i></td>
                        <td>20/20/2020</td>
                        <td><img src="images/a0.png" height="40px" width="40px" alt=""></td>
                        <td>
                            <a class="btn btn-sm btn-info" href="#">View</a>
                            <a class="btn btn-sm btn-warning" href="#">Edit</a>
                            <a class="btn btn-sm btn-danger" href="#">Delete</a>
                        </td>
                    </tr>

                    <tr>
                        <td>1</td>
                        <td>Sarwar jahan shohan</td>
                        <td>shohan</td>
                        <td>shohan@gmail.com</td>
                        <td>0177738207</td>
                        <td><i class="i i-circle-sm text-success-dk"> Active</i></td>
                        <td>20/20/2020</td>
                        <td><img src="images/a0.png" height="40px" width="40px" alt=""></td>
                        <td>
                            <a class="btn btn-sm btn-info" href="#">View</a>
                            <a class="btn btn-sm btn-warning" href="#">Edit</a>
                            <a class="btn btn-sm btn-danger" href="#">Delete</a>
                        </td>
                    </tr>

                    <tr>
                        <td>1</td>
                        <td>Sarwar jahan shohan</td>
                        <td>shohan</td>
                        <td>shohan@gmail.com</td>
                        <td>0177738207</td>
                        <td><i class="i i-circle-sm text-success-dk"> Active</i></td>
                        <td>20/20/2020</td>
                        <td><img src="images/a0.png" height="40px" width="40px" alt=""></td>
                        <td>
                            <a class="btn btn-sm btn-info" href="#">View</a>
                            <a class="btn btn-sm btn-warning" href="#">Edit</a>
                            <a class="btn btn-sm btn-danger" href="#">Delete</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </section>
    </div>
</div>
<div  class="panel tab-pane" id="ssc">
    ss panal
</div>
<div  class="panel tab-pane" id="hsc">
    hsc panal
</div>
<!-- contenter end -->
</div>

    



  
</div>

<?php include_once "template/footer.php" ?>

