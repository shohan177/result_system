<?php include_once "template/header.php" ?>




<!-- MAIN CONTENT  -->
<section id="content">
    <section class="hbox stretch">
        <section>
    <section class="vbox">
        <section class="scrollable padder">



            <section class="row m-b-md">
                <div class="col-sm-6">
                    <h3 class="m-b-xs text-black">All Students</h3> <small>Welcome back,<?php echo $_SESSION['uname']?>, <i class="fa fa-map-marker fa-lg text-primary"></i> New York City</small> </div>
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

    <div id="student_add_modal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="stu_mess"></div>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                    </button>
                    <h3>Add new Student</h3>
                    <hr>
                    <form id = "add_student_form" action="" method="POST" enctype = "multipart/form-data">

                    <div class="panel-body">
            
                            <div class="form-group">
                                <label>NAME</label> 
                                <input name="name" type="text" class="form-control parsley-validated" />
                            </div>
                            <div class="form-group">
                                <label>REG NO</label> 
                                <input name="reg" type="text" class="form-control parsley-validated"  />
                            </div>
                            <div class="form-group">
                                <label>ROLL NO</label> 
                                <input name="roll" type="text" class="form-control parsley-validated" />
                            </div>

                            <div class="form-group pull-in clearfix">
                                <div class="col-sm-6">
                                    <label>BOARD </label>
                                     <select name="exm" class="form-control">
                                        <option value="">Examination</option>
                                        <option value="hsc">HSC/Alim/Equivalent</option>
                                        <option value="jsc">JSC/JDC</option>
                                        <option value="ssc">SSC/Dakhil</option>
                                    </select>
                                </div>
                                <div class="col-sm-6">
                                    <label>YEAR</label> 
                                    <select name="year" class="form-control" name="">
                                        <option value="">select year</option>
                                        <option value="2020">2020</option>
                                        <option value="2019">2019</option>
                                        <option value="2018">2018</option>
                                        <option value="2017">2017</option>
                                        <option value="2016">2016</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>INSTITUTE</label> 
                                <input name="inst" type="text" class="form-control parsley-validated" data-type="int"  />
                            </div>

                            <div class="form-group">
                                <label>POTO</label> 
                                <input name="photo" type="file" class="form-control parsley-validated" id="stu_poto"  />
                            </div>
                        </div>

                        <div class="form-group">
                            <label for=""></label>
                            <input class="btn btn-s-md btn-success" name="add" type="submit" value="SAVE">

                            <input class="btn btn-s-md btn-warning" id ="stu_clear" type="button" value="CLEAR">
                            
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- edit model  -->

    <div id="student_edit_modal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="stu_mess"></div>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                    </button>
                    <h3>Edit student</h3>
                    <hr>
                    <form id = "edit_student_form" action="" method="POST" enctype = "multipart/form-data">

                    <div class="panel-body">
            
                            <div class="form-group">
                                <label>NAME</label> 
                                <input id="name_s" name="name" type="text" class="form-control parsley-validated" />
                            </div>
                        
                            <div class="form-group pull-in clearfix">
                                <div class="col-sm-6">
                                    <label>REG NO </label>
                                     <input name="reg" type="text" class="form-control parsley-validated"  />
                                </div>
                                <div class="col-sm-6">
                                    <label>ROLL NO</label> 
                                    <input name="roll" type="text" class="form-control parsley-validated" />
                                </div>
                            </div>


                            <div class="form-group pull-in clearfix">
                                <div class="col-sm-6">
                                    <label>BOARD </label>
                                     <select name="exm" class="form-control">
                                        <option value="">Examination</option>
                                        <option value="hsc">HSC/Alim/Equivalent</option>
                                        <option value="jsc">JSC/JDC</option>
                                        <option value="ssc">SSC/Dakhil</option>
                                    </select>
                                </div>
                                <div class="col-sm-6">
                                    <label>YEAR</label> 
                                    <select name="year" class="form-control" name="">
                                        <option value="">select year</option>
                                        <option value="2020">2020</option>
                                        <option value="2019">2019</option>
                                        <option value="2018">2018</option>
                                        <option value="2017">2017</option>
                                        <option value="2016">2016</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>INSTITUTE</label> 
                                <input name="inst" type="text" class="form-control parsley-validated" data-type="int"  />
                            </div>
                                
                            <div class="form-group">
                                <input name="photo_old" type="hidden"/>
                                <input name="id" type="hidden"/>
                                <img id="s_phot" height="100" width="100"  src="" alt="">
                                <input name="photo_new" type="file" class="form-control parsley-validated"   />
                            </div>
                        </div>

                        <div class="form-group">
                            <label for=""></label>
                            <input class="btn btn-s-md btn-success" name="add" type="submit" value="SAVE">

                            
                            
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

                <!-- modal end -->

    <div class="col-sm-12">
        <section class="panel panel-default">
            <header class="panel-heading"> <a id = "student_show_modal"class="btn btn-sm btn-success" href="#">ADD NEW STUDENT</a></header>
            <table class="table table-striped m-b-none table table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Reg No</th>
                        <th>Roll No</th>
                        <th>Year</th>
                        <th>Exm</th>
                        <th>status</th>
                        <th>Institute</th>
                        <th>Photo</th>
                        <th>Action</th>
                       
                    </tr>
                </thead>
                <tbody id="stu_t_body">
                   

                    <!-- data load frome show_all_student.php --> 

                    
                </tbody>
            </table>
        </section>
    </div>



  
</div>

<?php include_once "template/footer.php" ?>

