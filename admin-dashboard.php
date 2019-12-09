<?php
    //session_start(); 
    $thisPage = "Admin Dashboard";
    include('controller/functions.php');

    if (!isAdmin()) {
        $_SESSION['msg'] = "You must log in first";
        header('location: login.php');
    }
    
    include('includes/header.php');

?>
        
    <div class="main-content">
        
        <div class="header">
            <h2>Admin - Dashboard</h2>
        </div>
        <div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['user'])) : ?>
    	<p>Welcome <strong>
              <?php echo $_SESSION['user']['username']; ?> 
        </strong></p>
    <?php endif ?>
</div>
          
        
            
    </div>
        
</div>

<?php
	include('includes/footer.php');
?>