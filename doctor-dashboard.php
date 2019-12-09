<?php

    $thisPage = "Doctor Dashboard";
    include('controller/functions.php');

    if (!isLoggedIn()) {
      $_SESSION['msg'] = "You must log in first";
      
  	    header('location: login.php');
    }
    include('includes/header.php');


?>
        
    <div class="main-content">
        
        <!-- logged in user information -->

        <h2>
        <?php  if (isset($_SESSION['user'])) : ?>
            <strong>
                <?php echo $_SESSION['user']['username'];?> 
            </strong>
        <?php endif ?> - Dashboard</h2>   
        
        <h3 class="text-center">Your Patients</h3>

        
                


    </div>
        
</div>

<?php
	include('includes/footer.php');
?>