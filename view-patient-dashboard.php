<?php

    $thisPage = "View Patient Dashboard";
    include('controller/functions.php');
    global $patient_id;

    if (!isLoggedIn()) {
        $_SESSION['msg'] = "You must log in first";      
        header('location: login.php');  
    }
    if(userType() != 2) {
        $_SESSION['msg'] = "You do not have access to this webpage";      
        header('location: login.php');
    }

    include('includes/header.php');

    //$id = $_SESSION['user']['id'];
    if(isset($_GET['id'])) {
		$patient_id = $_GET['id'];
	}

    if(isset($patient_id)) {
        $record = mysqli_query($conn, "SELECT * FROM patient WHERE idPatient=$patient_id");

        $n = mysqli_fetch_array($record);

        $FirstName    			=  $n['First_Name'];
        $LastName    			=  $n['Last_Name'];
        $Comments               =  $n['DoctorComments'];
    }

?>
        
    <div class="main-content">
        
        <!-- logged in user information -->

        <h2> Patient - 
        <?php  if (isset($patient_id)) : ?>
            <strong>
                <?php echo $FirstName, " ", $LastName;?> 
            </strong>
        <?php endif ?>'s Dashboard</h2>   
        
        <h3 class="text-center">Health Statistics</h3>

        <div class="row" >
            <div class="col-md-4 ">
                <div class="rounded" style="background-color: #1082df; opacity: 0.9; text-align: center;">
                    <br><br><br><br>
                    <a href="#"><img  src="images/heartrate-sensor.png" alt=""></a>
                    <br><br><br><br>
                    <div class="text-left">
                        <p class="text-center">
                            <a href="#"><button type="button" style="background-color: white;color: #065596;letter-spacing: 5px;" class="btn btn-info btn-md"><b>Heart Rate</b></button></a>
                        </p>
                        <br><br><br>
                    </div>
                </div>
            </div>

            <div class="col-md-4 ">
                <div class="rounded" style="background-color: #1082df; opacity: 0.9; text-align: center;">
                    <br><br><br><br>
                    <a href="#"><img src="images/bloodpressure-sensor.png" alt=""> </a>
                    <br><br><br><br>
                    <div class="text-left">
                        <p class="text-center">
                            <a href="#"><button type="button" style="background-color: white;color: #065596;letter-spacing: 5px" class="btn btn-info btn-md" ><b>Blood Pressure </b></button></a>
                        </p>
                        <br><br><br>
                    </div>
                </div>
            </div>	
            <div class="col-md-4 ">
                <div class="rounded" style="background-color: #1082df; opacity: 0.9;text-align: center;">
                    <br><br><br><br>
                    <a href="#"><img src="images/sleep-tracking.png" alt=""></a>
                    <br><br><br><br>
                    <div class="text-left">
                        <p class="text-center">
                        <a href="#"><button type="button" style="background-color: white;color: #065596;letter-spacing: 5px;" class="btn btn-info btn-md"><b>Sleep Tracker</b></button></a>
                        </p>
                        <br><br><br>
                    </div>
                </div>
            </div>

        </div>
        <div class="row" style="padding: 30px 0;"> 
            <form class="col-md-12" action="view-patient-dashboard.php" method="post">
                <h3 class="text-center">Doctor's Comments</h3>
                <div class="input-group col-md-6" style="margin:auto; padding: 15px; background-color: #70befe;   border-radius: 25px;">
                    <input type="hidden" name="patient_id" readonly value="<?php echo $patient_id ; ?>">
                    <textarea class="form-control" rows="3" name="DoctorComments"><?php echo $Comments ; ?></textarea>
                </div>
                <div style="text-align:center; margin-top:15px;">
                    <button class="btn btn-success" type="submit" name="update-comments" >Update</button>
                </div>
            </form>
        </div>
                


    </div>
        
</div>

<?php
	include('includes/footer.php');
?>