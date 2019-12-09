<?php
    $thisPage="Create Doctor";
    include('includes/header.php');
?>
        
    <div class="main-content">

        <h2>Admin - Create Doctor Account</h2>
        
        <form method="post" action="create-doctor.php">

            <?php include('controller/errors.php'); ?>

            <div class="input-group">
                <label>Username</label>
                <input type="text" name="username" value="<?php echo $username; ?>">
            </div>
            <div class="input-group">
                <label>Email</label>
                <input type="email" name="email" value="<?php echo $email; ?>">
            </div>
            <div class="input-group">
                <label>Password</label>
                <input type="password" name="password_1">
            </div>
            <div class="input-group">
                <label>Confirm password</label>
                <input type="password" name="password_2">
            </div>
            <div class="input-group">
                <button type="submit" class="btn" name="create_temp_doc_ac">Create Account</button>
            </div>
        </form>
          
        
            
    </div>
        
</div>

<?php
	include('includes/footer.php');
?>