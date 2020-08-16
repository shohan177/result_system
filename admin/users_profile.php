<?php include_once "template/header.php" ?>




<!-- MAIN CONTENT start -->

<section id="content">
        <section class="vbox">
            <section class="scrollable bg-white">
                <div class="wrapper-lg bg-white">
                    <div class="hbox">
                        <aside class="aside-md">
                            <div class="text-center">
                                <img src="images/<?php echo $_SESSION['photo'] ?>" alt="..." class="img-circle m-b" />
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
                            <h3 class="font-bold m-b-none m-t-none"><?php echo $_SESSION['name'] ?></h3>
                            <p><?php echo $_SESSION['uname'] ?></p>
                            <p><i class="fa fa-lg fa-circle-o text-primary m-r-sm"></i><strong><?php echo $_SESSION['roll'] ?></strong></p>
                            <ul class="nav nav-pills nav-stacked aside-lg">
                                <li class="bg-light dk">
                                    <a href="#"><i class="i i-phone m-r-sm"></i> <?php echo $_SESSION['cell'] ?></a>
                                </li>
                                <li class="bg-light dk">
                                    <a href="#"><i class="i i-mail m-r-sm"></i> <?php echo $_SESSION['email'] ?></a>
                                </li>
                                <!-- <li class="bg-light dk">
                                    <a href="#"><i class="i i-chat m-r-sm"></i> Send Message</a>
                                </li> -->
                            </ul>
                        </aside>
                    </div>
                </div>
                <ul class="nav nav-tabs m-b-n-xxs bg-light">
                    <li class="active">
                        <a href="#activities" data-toggle="tab" class="m-l">Activities<span class="badge bg-primary badge-sm m-l-xs">10</span></a>
                    </li>
                    <li><a href="#bio" data-toggle="tab">Bio</a></li>
                    <li><a href="#edit" id = "edit_user" user_id = "<?php echo $_SESSION['id'] ?>" data-toggle="tab">Edit profile</a></li>
                </ul>
                <div class="tab-content">
                    <div class="panel tab-pane active" id="activities">
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
                    <div class="tab-pane wrapper-lg" id="bio">
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
                    <div class="tab-pane wrapper-lg" id="edit">
                        
                            
                    <!-- frome section load from custom.ja -->
                    

                    </div>
                </div>
            </section>
        </section>
        <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen,open" data-target="#nav,html"></a>
    </section>
</section>


<!-- MAIN CONTENT end  -->
<?php include_once "template/footer.php" ?>

