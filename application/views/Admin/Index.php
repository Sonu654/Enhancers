<div class="container">
    <div class="row">
    <div class="col-sm-4"></div>    
    <div class="col-sm-4">
        <form action="<?php echo site_url('Admin/Login');?>" method="post" class="form-inline">
            <div class="form-group">
                <span class="glyphicon glyphicon-user"></span><label>User Name</label>
                <input type="text" name="loginID" class="form-control">
            </div>
            <div class="form-group">
                <span class="glyphicon glyphicon-asterisk"></span><label>Password</label>
                <input type="password" name="loginPass" class="form-control">
            </div>
        </form>
    </div>
    <div class="col-sm-4"></div>
    </div>

</div>