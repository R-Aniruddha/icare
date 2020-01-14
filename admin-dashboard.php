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
                                    <a href="#" class="btn btn-info btn-sm" style="margin:auto;">
                                        View Guardian Account
                                    </a>
                                </div>
                            </div>
                        </div>

                    <?php } ?>
                </div>
                <a class="carousel-control-prev" href="#myCarousel3" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#myCarousel3" role="button" data-slide="next" style="">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

        </div>

        <div class="row" style="padding: 30px 0;">
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
        
</div>

<?php
	include('includes/footer.php');
?>
