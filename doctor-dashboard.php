<?php

    $thisPage = "Doctor Dashboard";
    include('controller/functions.php');

    if (!isLoggedIn()) {
      $_SESSION['msg'] = "You must log in first";
      
  	    header('location: login.php');
    }
    include('includes/header.php');

    $docid = $_SESSION['user']['id'];
    $docfname = $_SESSION['user']['FirstName'];
    $doclname = $_SESSION['user']['LastName'];
    

?>
        
    <div class="main-content">
        
        <!-- logged in user information -->

        <h2> Welcome Dr.
        <?php  if (isset($_SESSION['user'])) : ?>
            <strong>
                <?php echo "$docfname $doclname";?> 
            </strong>
        <?php endif ?> </h2>   
        <br>
        <h3 class="text-center">Your Patients</h3>

        <div class="card-container row">
            <?php 
                $results = mysqli_query($conn, "SELECT * FROM patient WHERE DoctorId = '$docid'"); 

                while ($row = mysqli_fetch_assoc($results)) { 
                    $str = strtok($row['DoctorComments'], "\n");
                    ?>

                <div class="card col-md-3" style="margin: 20px;">
                    <img class="card-img-top" src="images/avatar1.png" alt="Patient Image" style="padding: 20px;">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $row['First_Name'] ," ", $row['Last_Name']; ?></h5>
                        <h6><?php if($row['RoomNo'] !=0 )echo $row['RoomNo'] ?> </h6>
                        <h6><?php if($row['RoomNo'] == 0 )echo "Room Not Assigned" ?> </h6>
                        <p class="card-text"><?php echo $str , "..."?></p>
                        <a href="view-patient-dashboard.php?id=<?php echo $row['idPatient']?>" class="btn btn-info btn-sm">View Patient Dashboard</a>
                    </div>
                </div>

            <?php } ?>

        </div>
                


    </div>
        
</div>

<?php
	include('includes/footer.php');
?>