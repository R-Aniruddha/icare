<?php

    $thisPage = "View User Account";
    include('controller/functions.php');
    global $user_id;

    if (!isAdmin()) {
        $_SESSION['msg'] = "You must log in first";      
        header('location: login.php');  
    }

    include('includes/header.php');

    //$id = $_SESSION['user']['id'];
    if(isset($_GET['id'])) {
		$user_id = $_GET['id'];
	}

    if(isset($user_id)) {
        $record = mysqli_query($conn, "SELECT * FROM users WHERE id='$user_id'");

        $n = mysqli_fetch_array($record);

        $FirstName    			=  $n['FirstName'];
        $LastName    			=  $n['LastName'];
        $Email               =  $n['Email'];
    }

?>
        
    <div class="main-content">
        <div class="row" style="padding: 30px 0;"> 
        
            <h2> User - 
            <?php  if (isset($patient_id)) : ?>
                <strong>
                    <?php echo $FirstName, " ", $LastName;?> 
                </strong>'s Account <?php endif ?>
            </h2>   
        
            <form style="padding: 30px 0;">
                <input type="text" readonly value="<?php echo '$FirstName'; ?>">
                <input type="text" readonly value="<?php echo '$LastName'; ?>">
            </form>
        </div>        


    </div>
        
</div>

<?php
	include('includes/footer.php');
?>

