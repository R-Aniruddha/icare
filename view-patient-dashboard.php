<?php

    $thisPage = "View Patient Dashboard";
    include('controller/functions.php');
    global $patient_id;

    if (!isLoggedIn()) {
        $_SESSION['msg'] = "You must log in first";      
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
        $RoomNo               =  $n['RoomNo'];
    }

?>
        
    <div class="main-content">
        
        <!-- logged in user information -->

        <h2> Patient - 
        <?php  if (isset($patient_id)) : ?>
            <strong>
                <?php echo $FirstName, " ", $LastName;?> 
            </strong>'s Dashboard <?php endif ?>
        </h2>   
        
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
            <form class="col-md-12" action="view-patient-dashboard.php?id=<?php echo $patient_id?>" method="post">
                <h3 class="text-center">Doctor's Comments</h3>
                <div class="input-group col-md-6" style="margin:auto; padding: 15px; background-color: #70befe;   border-radius: 25px;">
                    <input type="hidden" name="patient_id" readonly value="<?php echo $patient_id ; ?>">
                    <textarea class="form-control" rows="3" <?php if(userType()!=3) echo 'readonly'?> name="DoctorComments"><?php echo $Comments ; ?></textarea>
                </div>
                <?php if(userType()==3) echo ' 
                <div style="text-align:center; margin-top:15px;">
                    <button class="btn btn-success" type="submit" name="update-comments" >Update</button>
                </div>
                '?>
            </form>
        </div>
        <div class="row" style="padding-top:30px;"> 
            <h3 style="margin:10px auto;">Room</h3>
            <form class="col-md-12 row" action="view-patient-dashboard.php?id=<?php echo $patient_id?>" method="post" style="margin:auto; padding: 20px; background-color: #70befe;   border-radius: 25px;">
                <div class="input-group col-md-5" >
                    <h4 style="margin: 0 auto 10px auto;">Select Room</h4>
                    <div class="input-group">
                        <input type="hidden" name="patient_id" readonly value="<?php echo $patient_id ; ?>">
                        <select class="custom-select" name="room_no" required>
                            <option <?php if($RoomNo == 0)echo "selected"; ?> value="0">Assign Room</option>
                            <option selected><?php echo $RoomNo; ?></option>
                            <!-- if($RoomNo == $roomno)echo "selected";  -->
                            <?php 
                                $records = mysqli_query($conn, "SELECT * FROM room WHERE Occupied = 'No'");
                                while ($row = mysqli_fetch_assoc($records)) {
                                    $roomid = $row['RoomID'];
                                    $roomno = $row['RoomNo'];
                            ?>
                                <option value="<?php echo $roomno; ?>"><?php echo $roomno; ?></option>
                            <?php    
                                }
                            ?>
                        </select>
                        <br>
                        <div style="margin: 0 5px;">
                            <button class="btn btn-success" type="submit" name="update-room" >Select</button>
                        </div>
                    </div>
                </div>
                <?php if($RoomNo==0) {
                    echo "
                    <div class='input-group col-md-6 offset-md-1' >
                        <h4 style='margin: 0 auto 10px auto;'>Room Details</h4>
                        <div class='input-group ml-5'>
                            <ul>
                                <li>First Assign Room to Patient</li>
                            <ul>
                        </div>
                    </div>
                    ";
                } else {
                    echo ''
                ?>
                <div class="input-group col-md-6 offset-md-1" >
                    <h4 style="margin: 0 auto 10px auto;">Room Details</h4>
                    <div class="input-group">
                        <ul>
                            <?php 
                                    $records = mysqli_query($conn, "SELECT * FROM room WHERE RoomNo = '$RoomNo'");
                                    while ($row = mysqli_fetch_assoc($records)) {
                                        $HeartRateSensor = $row['HeartRateSensor'];
                                        $BloodPressureSensor = $row['BloodPressureSensor'];
                                        $SleepSensor = $row['SleepSensor'];
                                        $Location = $row['Location'];

                                ?>
                                    <li>Heartrate Sensor - <?php echo $HeartRateSensor; ?></li>
                                    <li>Bloodpressure Sensor - <?php echo $BloodPressureSensor; ?></li>
                                    <li>Sleep Sensor - <?php echo $SleepSensor; ?></li>
                                    <li>Location -  <?php echo $Location; ?> </li>
                                <?php    
                                    }
                                ?>
                        </ul>
                    </div>
                </div>
                <?php 
                        }
                ?>
                
            </form>
        </div>
                


    </div>
        
</div>

<?php
	include('includes/footer.php');
?>