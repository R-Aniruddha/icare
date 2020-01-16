<?php
$conn = mysqli_connect('localhost', 'root', '', 'mydb');

//Include database connection
if($_POST['rowid']) {

    $id = $_POST['rowid']; 
    $res = mysqli_query($conn, "SELECT * FROM users WHERE id='$id'"); 
    $check = mysqli_fetch_assoc($res);
    
    //Patient
    if($check['user_type'] == 'patient') {
        $results = mysqli_query($conn, "SELECT * FROM patient WHERE idPatient = '$id'"); 
        $row = mysqli_fetch_assoc($results);
        $docId = $row['DoctorId'];
        $roomNo = $row['RoomNo'];
        $result = mysqli_query($conn, "SELECT * FROM doctorsdetails WHERE DoctorId='$docId'"); 
        $row2 = mysqli_fetch_assoc($result);
        $firstName = $row2['FirstName'];
        $lastName = $row2['LastName'];

        echo '<ul style="list-style:none;">';
        echo '<li>Doctor: ', $firstName,' ', $lastName ,'</li>';
        echo '<li>Room No: ', $roomNo , '</li>';
        $count = 1;

        $results = mysqli_query($conn, "SELECT * FROM guardian WHERE PatientID = '$id'"); 
        if($results) {
            while ($row = mysqli_fetch_assoc($results)) {
                $guardianId = $row['GuardianId'];
                $res = mysqli_query($conn, "SELECT * FROM users WHERE id='$guardianId'"); 
                $row3 = mysqli_fetch_assoc($res);
                $fname = $row3['FirstName'];
                $lname = $row3['LastName'];
                echo '<li> Guardian ',$count, ': ', $fname, ' ', $lname, '</li>';
            }
        } else {
            echo '<li>No Guardians Currently </li>';
        }
        
        echo '</ul>';

        //Doctor
    } else if($check['user_type'] == 'doctor') {
        echo '<ul style="list-style:none;">';
        $count=1;
        $result = mysqli_query($conn, "SELECT * FROM patient WHERE DoctorId = '$id'"); 

        while($row = mysqli_fetch_assoc($result)) {
            $fname = $row['First_Name'];
            $lname = $row['Last_Name'];
            echo '<li> Patient ',$count, ': ', $fname, ' ', $lname, '</li>';
            $count++;
        }
        echo '</ul>';
    }
    
 }
?>