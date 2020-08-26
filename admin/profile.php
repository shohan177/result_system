<?php include_once "template/header.php" ?>




<!-- MAIN CONTENT start -->

<section id="content">
        <section class="vbox">
            <section class="scrollable bg-white">
                <div id="header_color" class="wrapper-lg bg-light ">
                    <div class="hbox">
                        <aside class="aside-md">
                            <div class="text-center">

                                <img id="u_phot" height="150" width="150" src="" alt="..." class="img-circle m-b" />
                                <div>Profile finished</div>
                                <div class="">
                                    <div class="progress progress-xs progress-striped active inline m-b-none bg-white" style="width: 128px;">
                                        <div class="progress-bar bg-success" data-toggle="tooltip" data-original-title="50%" style="width: 50%;"></div>
                                    </div>
                                </div>
                                <p>50%</p>
                            </div>
                        </aside>
                        <aside>
                            <p class="pull-right m-l inline">
                                <a href="#" class="btn btn-sm btn-icon btn-info rounded m-b"><i class="fa fa-twitter"></i></a>
                                <a href="#" class="btn btn-sm btn-icon btn-primary rounded m-b"><i class="fa fa-facebook"></i></a>
                                <a href="#" class="btn btn-sm btn-icon btn-danger rounded m-b"><i class="fa fa-google-plus"></i></a>
                            </p>
                            <h3 id="u_name" class="font-bold m-b-none m-t-none"></h3>
                            <p id="u_uname"></p>
                            <p ><i class="fa fa-lg fa-circle-o text-primary m-r-sm"></i><strong id="u_roll"></strong></p>
                            <ul class="nav nav-pills nav-stacked aside-lg">
                                <li class="bg-light dk">
                                    <a id="u_cell" href=""><i class="i i-phone m-r-sm"></i></a>
                                </li>
                                <li class="bg-light dk">
                                    <a id ="u_email" href=""><i class="i i-mail m-r-sm"></i></a>
                                </li>
                                <!-- <li class="bg-light dk">
                                    <a href="#"><i class="i i-chat m-r-sm"></i> Send Message</a>
                                </li> -->
                            </ul>
                        </aside>
                    </div>
                </div>
                <ul id="manu_color" class="nav nav-tabs m-b-n-xxs bg-light">
                    <li id="acti">
                        <a href="#activities" data-toggle="tab" class="m-l">Activities<span class="badge bg-primary badge-sm m-l-xs">10</span></a>
                    </li>
                    <li id="about" ><a href="#bio" data-toggle="tab">About</a></li>
                    <li id="uedit"><a href="#edit" id = "edit_user" user_id = "<?php echo $_SESSION['id'] ?>" data-toggle="tab">Edit profile</a></li>
                </ul>
                <div class="tab-content">
                    <div  class="panel tab-pane" id="activities">
                        <ul class="list-group no-radius m-b-none m-t-n-xxs list-group-lg no-border">
                            <li class="list-group-item">
                                <a href="#" class="thumb-sm pull-left m-r-sm"> <img src="images/a0.png" class="img-circle" /> </a>
                                <a href="#" class="clear"> <small class="pull-right">3 minuts ago</small> <strong class="block">Drew Wllon</strong> <small>Wellcome and play this web application template ... </small> </a>
                            </li>
                            <li class="list-group-item">
                                <a href="#" class="thumb-sm pull-left m-r-sm"> <img src="images/a1.png" class="img-circle" /> </a>
                                <a href="#" class="clear"> <small class="pull-right">1 hour ago</small> <strong class="block">Jonathan George</strong> <small>Morbi nec nunc condimentum...</small> </a>
                            </li>
                            <li class="list-group-item">
                                <a href="#" class="thumb-sm pull-left m-r-sm"> <img src="images/a2.png" class="img-circle" /> </a>
                                <a href="#" class="clear"> <small class="pull-right">2 hours ago</small> <strong class="block">Josh Long</strong> <small>Vestibulum ullamcorper sodales nisi nec...</small> </a>
                            </li>
                            <li class="list-group-item">
                                <a href="#" class="thumb-sm pull-left m-r-sm"> <img src="images/a3.png" class="img-circle" /> </a>
                                <a href="#" class="clear"> <small class="pull-right">1 day ago</small> <strong class="block">Jack Dorsty</strong> <small>Morbi nec nunc condimentum...</small> </a>
                            </li>
                            <li class="list-group-item">
                                <a href="#" class="thumb-sm pull-left m-r-sm"> <img src="images/a4.png" class="img-circle" /> </a>
                                <a href="#" class="clear"> <small class="pull-right">3 days ago</small> <strong class="block">Morgen Kntooh</strong> <small>Mobile first web app for startup...</small> </a>
                            </li>
                            <li class="list-group-item">
                                <a href="#" class="thumb-sm pull-left m-r-sm"> <img src="images/a5.png" class="img-circle" /> </a>
                                <a href="#" class="clear"> <small class="pull-right">Jun 21</small> <strong class="block">Yoha Omish</strong> <small>Morbi nec nunc condimentum...</small> </a>
                            </li>
                            <li class="list-group-item">
                                <a href="#" class="thumb-sm pull-left m-r-sm"> <img src="images/a6.png" class="img-circle" /> </a>
                                <a href="#" class="clear"> <small class="pull-right">May 10</small> <strong class="block">Gole Lido</strong> <small>Vestibulum ullamcorper sodales nisi nec...</small> </a>
                            </li>
                            <li class="list-group-item">
                                <a href="#" class="thumb-sm pull-left m-r-sm"> <img src="images/a7.png" class="img-circle" /> </a>
                                <a href="#" class="clear"> <small class="pull-right">Jan 2</small> <strong class="block">Jonthan Snow</strong> <small>Morbi nec nunc condimentum...</small> </a>
                            </li>
                            <li class="list-group-item" href="#email-content" data-toggle="class:show">
                                <a href="#" class="thumb-sm pull-left m-r-sm"> <img src="images/a8.png" class="img-circle" /> </a>
                                <a href="#" class="clear">
                                    <small class="pull-right">3 minuts ago</small> <strong class="block">Drew Wllon</strong> <small>Vestibulum ullamcorper sodales nisi nec sodales nisi nec sodales nisi nec...</small>
                                </a>
                            </li>
                            <li class="list-group-item">
                                <a href="#" class="thumb-sm pull-left m-r-sm"> <img src="images/a9.png" class="img-circle" /> </a>
                                <a href="#" class="clear"> <small class="pull-right">1 hour ago</small> <strong class="block">Jonathan George</strong> <small>Morbi nec nunc condimentum...</small> </a>
                            </li>
                        </ul>
                    </div>
                    <div  class="tab-pane wrapper-lg" id="bio">
                        <div class="row m-b">
                            <div class="col-xs-6">
                                <small>Cell Phone</small>
                                <div class="text-lt font-bold">1243 0303 0333</div>
                            </div>
                            <div class="col-xs-6">
                                <small>Family Phone</small>
                                <div class="text-lt font-bold">+32(0) 3003 234 543</div>
                            </div>
                        </div>
                        <div class="row m-b">
                            <div class="col-xs-6">
                                <small>Reporter</small>
                                <div class="text-lt font-bold">Coch Jose</div>
                            </div>
                            <div class="col-xs-6">
                                <small>Manager</small>
                                <div class="text-lt font-bold">James Richo</div>
                            </div>
                        </div>
                        <div>
                            <small>Bio</small>
                            <div class="text-lt">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi id neque quam. Aliquam sollicitudin venenatis ipsum ac feugiat. Vestibulum ullamcorper sodales nisi nec condimentum. Mauris
                                convallis mauris at pellentesque volutpat. Phasellus at ultricies neque, quis malesuada augue.
                            </div>
                        </div>
                    </div>
                    <div  class="tab-pane wrapper-lg " id="edit">
                        
                            <form class="form-horizontal" id="edit_user" method="POST" enctype = "multipart/form-data">
                            <input type="hidden" name="id" value="">
                           <div class="form-group">
                               <label class="col-sm-3 control-label">Name:</label>
                               <div class="col-sm-5"><input id="u_name" name ="name" value = "" type="text" class="form-control" /></div>
                           </div>
                           <div class="line line-dashed b-b line-lg pull-in"></div>
                           <div class="form-group">
                               <label class="col-sm-3 control-label" for="input-id-1">User Name:</label>
                               <div class="col-sm-5"><input id="u_uname" name ="uname" value = ""  type="text" class="form-control" id="input-id-1" disabled="disabled" value="drew.willon@scale.com" /></div>
                           </div>
                           <div class="line line-dashed b-b line-lg pull-in"></div>
                           <div class="form-group">
                               <label class="col-sm-3 control-label" for="input-id-1">Email:</label>
                               <div class="col-sm-5"><input id="u_email" name ="email" value = "" type="text" class="form-control" id="input-id-1" value="drew.willon@scale.com" /></div>
                           </div>
                           
                           
                           <div class="line line-dashed b-b line-lg pull-in"></div>
                           <div class="form-group">
                               <label class="col-sm-3 control-label">Phone:</label>
                               <div class="col-sm-5"><input id="u_cell" name ="cell" value = "" type="text" class="form-control" /></div>
                           </div>

                           <div class="line line-dashed b-b line-lg pull-in"></div>
                           <div class="form-group">
                               
                               <label class="col-sm-3 control-label">photo:</label>
                               <div class="col-sm-5"><input name = "photo" type="file" class="form-control" /></div>
                           </div>
                                <input type="hidden" name="old_phot" value="" >
                           <div class="form-group">
                               <div class="col-sm-offset-3 col-sm-5"><button  type="submit" class="btn btn-sm btn-primary">Update</button></div>
                           </div>
                       </form>
                    

                    </div>
                </div>
            </section>
        </section>
        <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen,open" data-target="#nav,html"></a>
    </section>
</section>


<!-- MAIN CONTENT end  -->
<?php include_once "template/footer.php" ?>

