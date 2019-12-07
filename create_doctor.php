<?php
    $thisPage="Create Doctor";
    include('includes/header.php');
    include('controller/functions.php')
?>
        
    <div class="main-content">

        <h2>Admin - Create Doctor Account</h2>
        
        <form method="post" action="create_doctor.php">

            <?php echo display_error(); ?>

            <div class="input-group">
                <label>Username</label>
                <input type="text" name="username" value="<?php echo $username; ?>">
            </div>
            <div class="input-group">
                <label>Email</label>
                <input type="email" name="email" value="<?php echo $email; ?>">
            </div>
            <div class="input-group">
                <label>User type</label>
                <select name="user_type" id="user_type" >
                    <option value=""></option>
                    <option value="doctor">Doctor</option>
                    <option value="user">User</option>
                </select>
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
                <button type="submit" class="btn" name="register_btn"> + Create </button>
            </div>
        </form>
          
        
            
    </div>
        
</div>

<?php
	include('includes/footer.php');
?>