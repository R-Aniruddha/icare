<?php
    //session_start(); 
    $thisPage = "Admin Dashboard";
    include('controller/functions.php');

    if (!isAdmin()) {
        $_SESSION['msg'] = "You do not have access to this page";
        header('location: login.php');
    }
    
    include('includes/header.php');
?>
        
    <div class="main-content">


        <h3 class="text-center">Doctors</h3>

        <div class="container-fluid">
            <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="false">
                <div class="carousel-inner row w-100 mx-auto">
                    <?php 
                        $results = mysqli_query($conn, "SELECT * FROM users WHERE user_type = 'doctor'"); 
                    while ($row = mysqli_fetch_assoc($results)) { ?>
                        <div class="carousel-item col-md-4">
                            <div class="card">
                                <img class="card-img-top" src="images/avatar1.png" alt="User Image" style="padding: 20px;">
                                <div class="card-body">
                                    <h5 class="card-title">Dr. <?php echo $row['FirstName'] ," ", $row['LastName']; ?></h5>
                                    <!-- <p class="card-text"><?php echo $row['DoctorComments']?></p> -->
                                    <a href="doctor-details.php?id=<?php echo $row['id']?>" class="btn btn-info btn-sm">View Doctor Details</a>
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
        

        <h3 class="text-center">Patients</h3>

        <div class="container-fluid" style="">
            <div id="myCarousel2" class="carousel slide" data-ride="carousel" data-interval="false">
                
                <div class="carousel-inner row mx-auto w-100">
                    <?php 
                    $results = mysqli_query($conn, "SELECT * FROM patient"); 
                    while ($row = mysqli_fetch_assoc($results)) { 
                        $str = strtok($row['DoctorComments'], "\n");
                        ?>
                        <div class="carousel-item col-md-4">
                            <div class="card h-100" style="margin: auto;">
                                <img class="card-img-top" src="images/avatar1.png" alt="Patient Image" style="padding: 20px;">
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $row['First_Name'] ," ", $row['Last_Name']; ?></h5>
                                    <h6><strong><?php if($row['RoomNo'] !=0 )echo "Room Number: ",$row['RoomNo'] ?> </strong> </h6>
                                    <h6><strong><?php if($row['RoomNo'] == 0 )echo "Room Not Assigned" ?> </strong></h6>
                                    <p class="card-text"><?php echo $str ,"..."?></p>
                                    <a href="view-patient-dashboard.php?id=<?php echo $row['idPatient']?>" class="btn btn-info btn-sm" style="margin:auto;">
                                        View Patient Dashboard
                                    </a>
                                </div>
                            </div>
                        </div>

                    <?php } ?>
                </div>
                <a class="carousel-control-prev" href="#myCarousel2" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#myCarousel2" role="button" data-slide="next" style="">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

        </div>          
  	

    
    </div>
          
        
            
    </div>
        
</div>

<?php
	include('includes/footer.php');
?>