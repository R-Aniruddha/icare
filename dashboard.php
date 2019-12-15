<?php

    $thisPage = "Dashboard";
    include('controller/functions.php');

    if (!isLoggedIn()) {
      $_SESSION['msg'] = "You must log in first";
      
  	    header('location: login.php');
    }
    include('includes/header.php');

    $id = $_SESSION['user']['id'];


?>
        
    <div class="main-content">
        
        <!-- logged in user information -->

        <h2>
        <?php  if (isset($_SESSION['user'])) : ?>
            <strong>
                <?php echo $_SESSION['user']['FirstName'], " ", $_SESSION['user']['LastName'];?> 
            </strong>
        <?php endif ?> - Dashboard</h2>   
        
        <h3 class="text-center">Your Health Statistics</h3>

        <div class="row" >
            <div class="col-md-4 ">
                <div class="rounded" style="background-color: #1082df; opacity: 0.9; text-align: center;">
                    <br><br><br><br>
                    <a href="sensor1.php"><img  src="images/heartrate-sensor.png" alt=""></a>
                    <br><br><br><br>
                    <div class="text-left">
                        <p class="text-center">
                            <a href="sensor1.php"><button type="button" style="background-color: white;color: #065596;letter-spacing: 5px;" class="btn btn-info btn-md"><b>Heart Rate</b></button></a>
                        </p>
                        <br><br><br>
                    </div>
                </div>
            </div>

            <div class="col-md-4 ">
                <div class="rounded" style="background-color: #1082df; opacity: 0.9; text-align: center;">
                    <br><br><br><br>
                    <a href="sensor1.php"><img src="images/bloodpressure-sensor.png" alt=""> </a>
                    <br><br><br><br>
                    <div class="text-left">
                        <p class="text-center">
                            <a href="sensor1.php"><button type="button" style="background-color: white;color: #065596;letter-spacing: 5px" class="btn btn-info btn-md" ><b>Blood Pressure </b></button></a>
                        </p>
                        <br><br><br>
                    </div>
                </div>
            </div>	
            <div class="col-md-4 ">
                <div class="rounded" style="background-color: #1082df; opacity: 0.9;text-align: center;">
                    <br><br><br><br>
                    <a href="sensor1.php"><img src="images/sleep-tracking.png" alt=""></a>
                    <br><br><br><br>
                    <div class="text-left">
                        <p class="text-center">
                        <a href="sensor1.php"><button type="button" style="background-color: white;color: #065596;letter-spacing: 5px;" class="btn btn-info btn-md"><b>Sleep Tracker</b></button></a>
                        </p>
                        <br><br><br>
                    </div>
                </div>
            </div>

        </div>
        <div class="row" style="padding: 30px 0;"> 
            <div id="doctor-comments" class="col-md-12" name="doctor-comments">
                <h3 class="text-center">Doctor's Comments</h3>
                <div class="col-md-6" style="margin:auto; padding: 15px; background-color: #70befe;   border-radius: 25px;
                ">
                    <pre>
                            <?php 
                                $results = mysqli_query($conn, "SELECT * FROM patient WHERE idPatient = '$id'"); 
                                if($row = mysqli_fetch_assoc($results)) { 
                                    if($row['DoctorComments'] = "") {
                                        echo "No comments for the moment";
                                    } else {
                                        echo $row['DoctorComments'];
                                    }
                                }
                            ?>

                    </pre>
                </div>
            </div>
        </div>
                


    </div>
        
</div>

<?php
	include('includes/footer.php');
?>