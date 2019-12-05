<?php
    $thisPage="PageName";
	include('includes/header.php');
?>
        
    <div class="main-content">
        <div class="login-form text-center" style="width: 340px;
    	margin: 50px auto;">
            <form action="/examples/actions/confirmation.php" method="post" style="margin-bottom: 15px;
            background: #f7f7f7;
            box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
            padding: 30px;">
                <h2 class="text-center">Log in</h2>       
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Username" required="required">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Password" required="required">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Log In</button>
                </div>
                <div class="clearfix">
                    <label class="pull-left checkbox-inline"><input type="checkbox"> Remember Me</label>
                    <a href="#" class="pull-right">Forgot Password?</a>
                </div>        
            </form>
            <p class="text-center"><a href="patient-registration.php">Create an Account</a></p>
        </div>
        
          
            
            
            
            
            
            
    </div>
        
</div>

<?php
	include('includes/footer.php');
?>