<?php
    $thisPage="Create Room";
    include('includes/header.php');
?>
        
    <div class="main-content">
        
        
        <form id="create-room-form" method="post" action="create-room.php" style="padding: 20px;">
            
            <fieldset class="col-md-8" style="margin: auto;">

                <?php include('controller/errors.php'); ?>
                    
                    <h2>Admin - Create Room</h2>

                <div class="input-group">
                    <label class="input-group-text">Room Number</label>
                    <input type="number" class="form-control" name="RoomNo">
                </div>
                <div class="input-group">
                    <label class="input-group-text">Location</label>
                    <input type="text" class="form-control" name="Location">
                </div>
                <div class="input-group">
                    <select class="custom-select" required name="Occupied" required>
                        <option selected>Occupied</option>
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                    </select>
                </div>
                <fieldset style="margin-left:;">
                    <h4>Sensors</h4>
                    <div class="input-group">
                        <select class="custom-select" required name="Heartrate" required>
                            <option selected>Heartrate Sensor</option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                        </select>
                    </div>
                    <div class="input-group">
                        <select class="custom-select" required name="Sleepsensor" required>
                            <option selected>Sleep Sensor</option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                        </select>
                    </div>
                    <div class="input-group">
                        <select class="custom-select" required name="Bloodpressure" required>
                            <option selected>Bloodpressure Sensor</option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                        </select>
                    </div>
                </fieldset>
                
                
                <div class="input-group">
                    <button type="submit" class="btn btn-primary btn-md" name="create_room">Create Room</button>
                </div>
            </fieldset>    
        </form>
          
        
            
    </div>
        
</div>

<?php
	include('includes/footer.php');
?>
