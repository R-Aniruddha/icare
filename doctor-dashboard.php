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
        <div class="container-fluid">
            <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="false">
                <div class="carousel-inner row w-100 mx-auto">
                    <?php 
                        $results = mysqli_query($conn, "SELECT * FROM patient WHERE DoctorId = '$docid'"); 
                        while ($row = mysqli_fetch_assoc($results)) { 
                            $str = strtok($row['DoctorComments'], "\n");
                        ?>
                        
                        <div class="carousel-item col-md-4">
                            <div class="card" style="margin: 20px;">
                                <img class="card-img-top" src="images/avatar1.png" alt="Patient Image" style="padding: 20px;">
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $row['First_Name'] ," ", $row['Last_Name']; ?></h5>
                                    <h6><strong><?php if($row['RoomNo'] !=0 )echo "Room Number: ",$row['RoomNo'] ?> </strong> </h6>
                                    <h6><strong><?php if($row['RoomNo'] == 0 )echo "Room Not Assigned" ?> </strong></h6>
                                    <p class="card-text"><?php echo $str , "..."?></p>
                                    <a href="view-patient-dashboard.php?id=<?php echo $row['idPatient']?>" class="btn btn-info btn-sm">View Patient Dashboard</a>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
                <!--Controls-->
                <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
                <!--/.Controls-->
            </div>
                <!--/.Inner-->

        </div>
        
                


    </div>
        
</div>

<?php
	include('includes/footer.php');
?>