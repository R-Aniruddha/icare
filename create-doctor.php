<?php
    $thisPage="Create Doctor";
    include('includes/header.php');
?>
        
    <div class="main-content">

        
        
        <form method="post" action="create-doctor.php" style="padding: 20px;">
            
            <fieldset class="col-md-8" style="margin: auto;">

            <?php include('controller/errors.php'); ?>
                
                <h2>Admin - Create Doctor Account</h2>

            <div class="input-group">
                <label class="input-group-text">Username</label>
                <input type="text" class="form-control" name="username" value="<?php echo $username; ?>">
            </div>
            <div class="input-group">
                <label class="input-group-text">Email</label>
                <input type="email" class="form-control" name="email" value="<?php echo $email; ?>">
            </div>
            <div class="input-group">
                <label class="input-group-text">Password</label>
                <input type="password" name="password_1" class="form-control">
            </div>
            <div class="input-group">
                <label class="input-group-text">Confirm password</label>
                <input type="password" name="password_2" class="form-control">
            </div>
            <div class="input-group">
                <button type="submit" class="btn btn-primary btn-md" name="create_temp_doc_ac">Create Account</button>
            </div>
            </fieldset>    
        </form>
          
        
            
    </div>
        
</div>

<?php
	include('includes/footer.php');
?>
