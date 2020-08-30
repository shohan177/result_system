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
    <!-- result add model start  -->
    <div id="result_add_modal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-body">
                    <div class="mess"></div>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                    </button>
                    <h4>Add student number</h4>
                    <hr>
                    <section id="stu_section"  class="panel clearfix bg-info dk hidden"> 
                        <div class="panel-body"> 
                            <a href="#" class="thumb pull-left m-r"> 
                                <img id="selected_stu" src="" class="img-circle b-a b-3x b-white"> 
                            </a> 
                        <div class=""> 
                            <a id="stu_s_name" class="text-info">
                                
                                
                            </a> 
                            <a id="stu_s_roll"  class="block">
                            
                            </a>   
                            <a id="stu_s_inst" > 
                                
                            </a> 
                        </div> 
                    </div> 
                    </section>
                    <form id = "result_add_form" action="" method="POST">
                        <div class="form-group">
                            <label id="s_lab">Search</label>
                            <input id="student_search" class="form-control">
                            <input type="hidden" id="exm">
                        </div>
                        <div class="search_result scrollable">
                            
                        </div>

                        <div class="form-group pull-in clearfix ">
                                <div id="sub_ban" class="col-sm-4 hide">
                                    <label>Bangla 1</label>
                                     <input name="reg" type="text" class="form-control "  />
                                </div>
                                <div id="sub_ban2" class="col-sm-4 hide">
                                    <label>Bangla 2 </label>
                                     <input name="reg" type="text" class="form-control "  />
                                </div>
                                <div id="sub_eng" class="col-sm-4 hide">
                                    <label>English 1</label> 
                                    <input name="roll" type="text" class="form-control " />
                                </div>
                                <div id="sub_eng2" class="col-sm-4 hide">
                                    <label>English 2</label> 
                                    <input name="roll" type="text" class="form-control " />
                                </div>
                                <div id="sub_math" class="col-sm-4 hide">
                                    <label>Math</label> 
                                    <input name="roll" type="text" class="form-control " />
                                </div>
                                <div id="sub_hmath" class="col-sm-4 hide">
                                    <label>Higer Math</label> 
                                    <input name="roll" type="text" class="form-control " />
                                </div>
                                <div id="sub_reli" class="col-sm-4 hide" hide>
                                    <label>Religion</label>
                                     <input name="reg" type="text" class="form-control "  />
                                </div>
                                <div id="sub_scien" class="col-sm-4 hide">
                                    <label>Science</label> 
                                    <input name="roll" type="text" class="form-control " />
                                </div>
                                <div id="sub_socal" class="col-sm-4 hide">
                                    <label>Socal</label> 
                                    <input name="roll" type="text" class="form-control " />
                                </div>
                                <div id="sub_phy" class="col-sm-4 hide">
                                    <label>Physic 1</label> 
                                    <input name="roll" type="text" class="form-control " />
                                </div>
                                <div id="sub_phy2" class="col-sm-4 hide">
                                    <label>Physic 2</label> 
                                    <input name="roll" type="text" class="form-control " />
                                </div>
                                <div id="sub_chy" class="col-sm-4 hide">
                                    <label>Chimistry 1</label> 
                                    <input name="roll" type="text" class="form-control " />
                                </div>
                                <div id="sub_chy2" class="col-sm-4 hide">
                                    <label>Chimistry 2</label> 
                                    <input name="roll" type="text" class="form-control " />
                                </div>
                                <div id="sub_bio" class="col-sm-4 hide">
                                    <label>Biology 1</label> 
                                    <input name="roll" type="text" class="form-control " />
                                </div>
                                <div id="sub_bio2" class="col-sm-4 hide">
                                    <label>Biology 2</label> 
                                    <input name="roll" type="text" class="form-control " />
                                </div>
                        
                               
                        </div>

                     

                        <div class="form-group pull-in clearfix hide ">
                                <div class="col-sm-4">
                                    <label>REG NO </label>
                                     <input name="reg" type="text" class="form-control "  />
                                </div>
                                <div class="col-sm-4">
                                    <label>ROLL NO</label> 
                                    <input name="roll" type="text" class="form-control " />
                                </div>
                                <div class="col-sm-4">
                                    <label>ROLL NO</label> 
                                    <input name="roll" type="text" class="form-control " />
                                </div>
                        </div>


                        <div class="form-group">
                            <label for=""></label>
                            <input class="btn btn-primary" name="add" type="submit" value="SAVE RSULT">
                            <input class="btn btn-s-md btn-warning" id ="number_clear" type="button" value="CLEAR">
                            
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- result add model end  -->

    <!-- result update model start  -->
    <div id="result_update_modal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-body">
                    <div class="mess"></div>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                    </button>
                    <h4>Add student number</h4>
                    <hr>
                    <section class="panel clearfix bg-info dk"> 
                        <div class="panel-body"> 
                            <a href="#" class="thumb pull-left m-r"> 
                                <img src="images/a0.png" class="img-circle b-a b-3x b-white"> 
                            </a> 
                        <div class=""> 
                            <a class="text-info">
                                Sarwar Jahan Shohan
                                
                            </a> 
                            <a class="block">
                                Reg : 123093  Roll : 12131313
                            </a> 
                                Dhaka college
                            </a> 
                        </div> 
                    </div> 
                    </section>
                    <form id = "result_update_form" action="" method="POST">
                        <div class="form-group">
                            <label for="">Name</label>
                            <input class="form-control" name="name" type="text">
                        </div>

                        <div class="form-group pull-in clearfix">
                                <div class="col-sm-4">
                                    <label>REG NO </label>
                                     <input name="reg" type="text" class="form-control parsley-validated"  />
                                </div>
                                <div class="col-sm-4">
                                    <label>ROLL NO</label> 
                                    <input name="roll" type="text" class="form-control parsley-validated" />
                                </div>
                                <div class="col-sm-4">
                                    <label>ROLL NO</label> 
                                    <input name="roll" type="text" class="form-control parsley-validated" />
                                </div>
                        </div>

                        <div class="form-group pull-in clearfix">
                                <div class="col-sm-4">
                                    <label>REG NO </label>
                                     <input name="reg" type="text" class="form-control parsley-validated"  />
                                </div>
                                <div class="col-sm-4">
                                    <label>ROLL NO</label> 
                                    <input name="roll" type="text" class="form-control parsley-validated" />
                                </div>
                                <div class="col-sm-4">
                                    <label>ROLL NO</label> 
                                    <input name="roll" type="text" class="form-control parsley-validated" />
                                </div>
                        </div>

                        <div class="form-group pull-in clearfix">
                                <div class="col-sm-4">
                                    <label>REG NO </label>
                                     <input name="reg" type="text" class="form-control parsley-validated"  />
                                </div>
                                <div class="col-sm-4">
                                    <label>ROLL NO</label> 
                                    <input name="roll" type="text" class="form-control parsley-validated" />
                                </div>
                                <div class="col-sm-4">
                                    <label>ROLL NO</label> 
                                    <input name="roll" type="text" class="form-control parsley-validated" />
                                </div>
                        </div>

                        <div class="form-group pull-in clearfix">
                                <div class="col-sm-4">
                                    <label>REG NO </label>
                                     <input name="reg" type="text" class="form-control parsley-validated"  />
                                </div>
                                <div class="col-sm-4">
                                    <label>ROLL NO</label> 
                                    <input name="roll" type="text" class="form-control parsley-validated" />
                                </div>
                                <div class="col-sm-4">
                                    <label>ROLL NO</label> 
                                    <input name="roll" type="text" class="form-control parsley-validated" />
                                </div>
                        </div>


                        <div class="form-group">
                            <label for=""></label>
                            <input class="btn btn-primary" name="add" type="submit" value="SAVE RSULT">
                            <input class="btn btn-s-md btn-warning" id ="stu_clear" type="button" value="CLEAR">
                            
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- result update model end  -->
                <!-- modal end -->
<div style="margin-left:1%; padding: 5px">
    <a id = "result_add_show"class="btn btn-sm btn-success" href="#">ADD NEW RESULT</a>
</div>
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
            <header class="panel-heading"></header>
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

