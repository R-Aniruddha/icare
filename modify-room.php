<?php
    $thisPage="Modify Room";
    $subMenu="Room";

    include_once("controller/functions.php");
    include('includes/header.php');

    if (!isAdmin()) {
        $_SESSION['msg'] = "You do not have access to this page";
        header('location: login.php');
      }

?>
        
    <div class="main-content">
        
        <h2>Admin - Modify Room</h2>

        <div id="accordion">
        <?php 
            $count = 1;
            $records = mysqli_query($conn, "SELECT * FROM room");
            while ($row = mysqli_fetch_assoc($records)) {
                $RoomNo = $row['RoomNo'];
                $Location = $row['Location'];
                $Occupied = $row['Occupied'];
                $HeartRate = $row['HeartRateSensor'];
                $Sleep = $row['SleepSensor'];
                $BloodPressure = $row['BloodPressureSensor'];
                $PatientID = $row['PatientID'];
                //$record = mysqli_query($conn, "SELECT FirstName, LastName FROM users where id='PatientID'");
                //$row2 = mysqli_fetch_assoc($record);
            ?>
            
            <div class="card">
                <div class="card-header" id="heading<?php echo $count; ?>">
                    <h5 class="mb-0">
                        <button class="btn btn-link" data-toggle="collapse" data-target="#collapse<?php echo $count; ?>" aria-expanded="true" aria-controls="collapse<?php echo $count; ?>">
                            Modify Room
                        </button>
                    </h5>
                </div>

                <div id="collapse<?php echo $count; ?>" class="collapse show" aria-labelledby="heading,<?php echo $count; ?>" data-parent="#accordion">
                    <div class="card-body">
                        <form id="modify-room-form" method="post" action="modify-room.php" style="padding: 20px;">

                        <fieldset class="col-md-8 bg-light py-3 px-lg-5" style="margin: auto; border-radius:10px;">

                            <?php include('controller/errors.php'); ?>
                                
                            <div class="input-group">
                                <label class="input-group-text">Room Number</label>
                                <input type="number" class="form-control" name="RoomNo" value="<?php echo $RoomNo; ?>">
                            </div>
                            <div class="input-group">
                                <label class="input-group-text">Location</label>
                                <input type="text" class="form-control" name="Location" value="<?php echo $RoomNo; ?>">
                            </div>
                            <div class="input-group">
                                <select class="custom-select" required name="Occupied" required>
                                    <option>Occupied</option>
                                    <option <?php  if($Occupied == "Yes")echo 'selected'; ?> value="Yes">Yes</option>
                                    <option <?php  if($Occupied == "No")echo 'selected'; ?> value="No">Yes</option>
                                </select>
                            </div>
                            <div class="input-group">
                                <select class="custom-select" name="PatientID" required>
                                    <option value="0">Assign Patient</option>
                                    <?php 
                                        $records = mysqli_query($conn, "SELECT * FROM patient WHERE RoomNo = 0");
                                        while ($row = mysqli_fetch_assoc($records)) {
                                            $patientid = $row['idPatient'];
                                            $fname = $row['First_Name'];
                                            $lname = $row['Last_Name'];
                                    ?>
                                            <option <?php  if($PatientID == $patientid)echo 'selected'; ?> value="<?php echo $patientid; ?>"><?php echo $fname ," ", $lname; ?></option>
                                    <?php     
                                        }
                                    ?>
                                </select>
                            </div>
                            <h4>Sensors</h4>
                            <div class="input-group">
                                <select class="custom-select" required name="Heartrate" required>
                                    <option selected>Heartrate Sensor</option>
                                    <option <?php  if($HeartRate == "Yes")echo 'selected';?> value="Yes">Yes</option>
                                    <option <?php if($HeartRate == "No")echo 'selected'; ?> value="No">No</option>
                                </select>
                            </div>
                            <div class="input-group">
                                <select class="custom-select" required name="Sleepsensor" required>
                                    <option selected>Sleep Sensor</option>
                                    <option <?php  if($Sleep == "Yes")echo 'selected'; ?> value="Yes">Yes</option>
                                    <option <?php  if($Sleep == "No")echo 'selected'; ?> value="No">No</option>
                                </select>
                            </div>
                            <div class="input-group">
                                <select class="custom-select" required name="Bloodpressure" required>
                                    <option selected>Bloodpressure Sensor</option>
                                    <option <?php  if($BloodPressure == "Yes")echo 'selected'; ?> value="Yes">Yes</option>
                                    <option <?php  if($BloodPressure == "No")echo 'selected'; ?> value="No">No</option>
                                </select>
                            </div>
                            <div class="input-group" >
                                <button type="submit" class="btn btn-primary btn-md" name="modify_room" style="margin:10px auto;">Modify</button>
                            </div>
                        </fieldset>
                            
                            
                            
                        </fieldset>    
                        </form>
                    </div>
                </div>
            </div>
            <?php 
            $count++;
            } ?>
        </div>
        
          
        
            
    </div>
        
</div>

<?php
	include('includes/footer.php');
?>
