<?php 

	require_once "../../../config.php";
	require_once "../../../vendor/autoload.php";


	use App\controller\User;


	$user = new User;

	$data =  $user -> getUserVal($_POST['u_id']);
	$udata = $data -> fetch(PDO::FETCH_ASSOC)


 ?>

    <form class="form-horizontal" id="edit_user" method="POST" enctype = "multipart/form-data">
        <div class="form-group">
            <label class="col-sm-3 control-label">Name:</label>
            <div class="col-sm-5"><input name ="name" value = "<?php echo $udata['name'] ?>" type="text" class="form-control" /></div>
        </div>
        <div class="line line-dashed b-b line-lg pull-in"></div>
        <div class="form-group">
            <label class="col-sm-3 control-label" for="input-id-1">User Name:</label>
            <div class="col-sm-5"><input name ="uname" value = "<?php echo $udata['uname']  ?>"  type="text" class="form-control" id="input-id-1" disabled="disabled" value="drew.willon@scale.com" /></div>
        </div>
        <div class="line line-dashed b-b line-lg pull-in"></div>
        <div class="form-group">
            <label class="col-sm-3 control-label" for="input-id-1">Email:</label>
            <div class="col-sm-5"><input name ="email" value = "<?php echo $udata['email']  ?>" type="text" class="form-control" id="input-id-1" value="drew.willon@scale.com" /></div>
        </div>
        
        
        <div class="line line-dashed b-b line-lg pull-in"></div>
        <div class="form-group">
            <label class="col-sm-3 control-label">Phone:</label>
            <div class="col-sm-5"><input name ="cell" value = "<?php echo $udata['cell']  ?>" type="text" class="form-control" /></div>
        </div>

        <div class="line line-dashed b-b line-lg pull-in"></div>
        <div class="form-group">
            
            <label class="col-sm-3 control-label">photo:</label>
            <div class="col-sm-5"><input name = "photo" type="file" class="form-control" /></div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-5"><button  type="submit" class="btn btn-sm btn-primary">Update</button></div>
        </div>
    </form>