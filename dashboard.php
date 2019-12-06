<?php
    session_start(); 
    $thisPage = "Dashboard";
	include('includes/header.php');

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
        
    <div class="main-content">
        
        <div class="header">
            <h2>Temporary Home Page</h2>
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
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
    	<p> <a href="dashboard.php?logout='1'" style="color: red;">logout</a> </p>
    <?php endif ?>
</div>
          
        
            
    </div>
        
</div>

<?php
	include('includes/footer.php');
?>