<?php
    $thisPage="My Account";
    include('includes/header.php');
    
    if (!isLoggedIn()) {
        $_SESSION['msg'] = "You must log in first";
        
          header('location: login.php');
      }
            
      if (isLoggedIn()) {
        $id = $_SESSION['user']['id'];
        $record = mysqli_query($conn, "SELECT * FROM users WHERE id=$id");
      
          $n = mysqli_fetch_array($record);
      
          $FirstName    =  $n['FirstName'];
          $LastName    	=  $n['LastName'];
          $Email    =   $n['Email'];
          $Password =   $n['Password'];
      }
?>
        
    <div class="main-content">

          <form id="user-account" method="post" action="my-account.php" style="padding: 20px;">
            
            <fieldset class="col-md-8" style="margin: auto;">

                <?php include('controller/errors.php'); ?>
                    
                    <h2>Modify - Account Details</h2>

                <div class="input-group">
                    <label class="input-group-text">First Name</label>
                    <input type="text" class="form-control" value="<?php echo $FirstName ; ?>" name="FirstName">
                </div>
                <div class="input-group">
                    <label class="input-group-text">Last Name</label>
                    <input type="text" class="form-control" value="<?php echo $LastName ; ?>" name="LastName">
                </div>
                <div class="input-group">
                    <label class="input-group-text">Email</label>
                    <input type="email" class="form-control" value="<?php echo $Email ; ?>" name="Email">
                </div>
                <div class="input-group">
                    <label class="input-group-text">Password</label>
                    <input type="password" name="Password_1" class="form-control">
                </div>
                <div class="input-group">
                    <label class="input-group-text">Confirm password</label>
                    <input type="password" name="Password_2" class="form-control">
                </div>
                <div class="input-group">
                    <button type="submit" class="btn btn-primary btn-md" name="modify-account-details">Edit</button>
                </div>
            </fieldset>    
        </form>
        
         




    <!-- Don't delete both the divs after this comment -->
    </div>
        
</div>

<?php
	include('includes/footer.php');
?>