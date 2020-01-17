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

        <div class="container-fluid" style="margin-bottom:20px;">
            <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="false">
                <div class="carousel-inner row w-100 mx-auto">
                    <?php 
                        $results = mysqli_query($conn, "SELECT * FROM users WHERE user_type = 'doctor'"); 
                    while ($row = mysqli_fetch_assoc($results)) { 
                            $id = $row['id'];
                        ?>
                        <div class="carousel-item col-md-4">
                            <div class="card">
                                <img class="card-img-top" src="images/avatar1.png" alt="User Image" style="padding: 20px;">
                                <div class="card-body">
                                    <h5 class="card-title">Dr. <?php echo $row['FirstName'] ," ", $row['LastName']; ?></h5>
                                    <p>
                                        <?php
                                            $result = mysqli_query($conn, "SELECT * FROM patient WHERE DoctorId = '$id'"); 
                                            $num = 0;
                                            while($row1 = mysqli_fetch_assoc($result)) {$num++;}
                                            echo 'Number of Patients: ', $num ;
                                        ?>
                                    </p>
                                    <button type="button" class="btn btn-primary" data-toggle="modal" 
                                        data-name="<?php echo 'Dr. ', $row['FirstName'] ,' ', $row['LastName']; ?>" 
                                        data-email="<?php echo $row['Email']?>"
                                        data-id="<?php echo $row['id']?>"
                                        data-target="#doctorModal">
                                        Account Details
                                    </button>
                                </div>
                            </div>
                        </div>

                    <?php } ?>
                </div>
                
                <!-- Modal -->
                <div class="modal fade" id="doctorModal" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="doctorModalLabel">Dr.</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form method="post" action="admin-dashboard.php">
                                <div class="modal-body">
                                    <ul style="list-style:none;">
                                    </ul>
                                    <div class="doctor-data"></div>

                                    <input type="hidden" name="userId" >
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" name="delete-user" class="btn btn-danger">Delete User</button>
                                    <button type="button" class="btn btn-secondary"  data-dismiss="modal">Close</button>
                                </div>
                            </form>
                        </div>
                    </div>
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

        <div class="container-fluid" style="margin-bottom:20px;">
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
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#patientmodal"
                                    data-name="<?php echo  $row['First_Name'] ,' ', $row['Last_Name']; ?>" 
                                    data-email="<?php echo $row['EmailID']?>"
                                    data-id="<?php echo $row['idPatient'] ?>" >
                                    Account Details</button>
                                </div>
                            </div>
                        </div>

                    <?php } ?>
                </div>
                <div id="patientmodal" class="modal fade" role="dialog">
                    <div class="modal-dialog">
                        <!-- Modal content-->
                        <div class="modal-content">
                            <form method="post" action="admin-dashboard.php">

                                <div class="modal-header">
                                    <h4 class="modal-title">Modal Header</h4>

                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <div class="modal-body">
                                        <ul> </ul>
                                        <div class="patient-data"></div>
                                        <input type="hidden" name="userId" >
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" name="delete-user" class="btn btn-danger">Delete User</button>
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </form>
                        </div>
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
                        
        <h3 class="text-center">Guardians</h3>

        <div class="container-fluid" style="">
            <div id="myCarousel3" class="carousel slide" data-ride="carousel" data-interval="false">

                <div class="carousel-inner row mx-auto w-100">
                    <?php 
                    $results = mysqli_query($conn, "SELECT * FROM users WHERE user_type = 'guardian'") or die('MySQL Error: ' . mysqli_error($conn)); 
                    while ($row = mysqli_fetch_assoc($results)) { 
                        $id = $row['id'];
                        $result = mysqli_query($conn, "SELECT * FROM guardian WHERE GuardianId = '$id'") or die('MySQL Error: ' . mysqli_error($conn)); 
                        $row2 = mysqli_fetch_assoc($result);
                        $PatientId = $row2['PatientID'];
                        $result = mysqli_query($conn, "SELECT * FROM patient WHERE idPatient = '$PatientId'") or die('MySQL Error: ' . mysqli_error($conn)); 
                        $row2 = mysqli_fetch_assoc($result);
                        ?>
                        <div class="carousel-item col-md-4">
                            <div class="card h-100" style="margin: auto;">
                                <img class="card-img-top" src="images/avatar1.png" alt="Patient Image" style="padding: 20px;">
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $row['FirstName'] ," ", $row['LastName']; ?></h5>
                                    <h6><strong>Guardian of: <?php echo $row2['First_Name'] ," ", $row2['Last_Name'];  ?>  </strong> </h6>
                                    <button type="button" class="btn btn-primary" data-toggle="modal" 
                                        data-name="<?php echo $row['FirstName'] ,' ', $row['LastName']; ?>" 
                                        data-email="<?php echo $row['Email']?>"
                                        data-id="<?php echo $id; ?>"
                                        data-target="#guardianmodal">
                                        Account Details
                                    </button>
                                </div>
                            </div>
                        </div>

                    <?php } ?>
                </div>
                <div id="guardianmodal" class="modal fade" role="dialog">
                    <div class="modal-dialog">
                        <!-- Modal content-->
                        <div class="modal-content">
                            <form method="post" action="admin-dashboard.php">

                                <div class="modal-header">
                                    <h4 class="modal-title">Modal Header</h4>

                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <div class="modal-body">
                                        <ul></ul>
                                        <div class="guardian-data"></div>
                                        <input type="hidden" name="userId" >
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" name="delete-user" class="btn btn-danger">Delete User</button>
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!--Controls-->
                    <a class="carousel-control-prev" href="#myCarousel3" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#myCarousel3" role="button" data-slide="next" style="">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                <!--/.Controls-->
                </div>

                
                
            </div>

        </div>

        <div class="main-content row" style="">
            <form id="contact-us-messages" class="col-md-12" action="admin-dashboard.php" method="post" >
                <h3 class="text-center">Messages</h3>
                <div class="col-md-12 " style="margin:auto; padding: 15px; background-color: #70befe;   border-radius: 25px;">
                    <table class="table ">
                        <thead>
                            <tr>
                                <th scope="col">Name</th>
                                <th scope="col">Subject</th>
                                <th scope="col">Email ID</th>
                                <th scope="col">Message</th>
                                <th> </th><th> </th>

                            </tr>
                        </thead>
                        <?php
                        
                        $sql = "SELECT id, name, subject, emailid, message FROM contact WHERE recepient='admin'";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                            // output data of each row
                            while($row = $result->fetch_assoc()) {
                                $messageID = $row["id"];
                                echo "
                                    <tr>
                                        <input type='hidden' name='messageID' readonly value='". $messageID. "'>
                                        <td >" . $row["name"]. "</td>
                                        <td>" . $row["subject"] . "</td>
                                        <td>" . $row["emailid"]. "</td>
                                        <td>" . $row["message"]."</td>
                                        <td> 
                                            <a href='mailto:" . $row["emailid"]. "' class='btn btn-primary btn-sm' style='margin:auto;'>
                                            Reply
                                            </a> 
                                        </td>
                                        <td> 
                                            <button class='btn btn-secondary btn-sm' type='submit' name='delete-message' >Delete</button>
                                        
                                            </a> 
                                        </td>  
                                    </tr>
                                    ";
                            }
                            echo "</table>";
                        } else { echo "<tr><td colspan='6' style='text-align:center;'>No Messages</tr></td>"; }
                        $conn->close();
                        ?>
                    </table>

                </div>
            </form>
        </div>

    
    </div>
          
        
            
        
</div>

<?php
	include('includes/footer.php');
?>
