<?php
    $thisPage="Doctor Details";
	include('includes/header.php');
	
	
	include_once("controller/connection.php");

	

if(isset($_POST['submit']))
{
	
	
	$Name    			=  $_POST['Name'];
	$Phone  			=  $_POST['Phone'];
	$Street   		    =  $_POST['Street'];
	$City   			=  $_POST['City'];
	$Country 			=  $_POST['Country'];
	$Website			=  $_POST['Website'];
	$SelectYourGender 	=  $_POST['Selectgender'];
	$DateOfBirth		=  $_POST['dob'];
	$Nationality	 	=  $_POST['Nationality'];
	$Speciality    		=  $_POST['Speciality'];
	$Department			=	$_POST['Department'];
	$Qualifications		=	$_POST['Qualifications'];
	$Availability		=	$_POST['Availability'];
	
	
	
	
	$sql  =  mysqli_query($conn,"insert into doctorsdetails(Name,Phone,Street,City,Country,Website,gen,dob,Nationality,Speciality,Department,Qualifications,Availability)values('$Name','$Phone','$Street','$City','$Country','$Website','$SelectYourGender','$DateOfBirth','$Nationality','$Speciality','$Department','$Qualifications','$Availability')")or die(mysqli_error($conn));
	
	if($sql)
	{
		echo "Data Inserted Successfully..";
	}
	
}

?>
<form action="" method="post" enctype="multipart/form-data">

    <div class="main-content">
        <h2>Doctor Details</h2>
        <form action="" class="register">
            <fieldset class="row1">
                <legend>Personal Details</legend>
                <p>
                    <label>Name * </label>
                    <input type="text" class="long" name="Name" required>
                </p>
                <p>
                    <label>Phone * </label>
                    <input type="text" maxlength="10" name="Phone" required>
                </p>
                <p>
                    <label class="optional">Street
                    </label>
                    <input type="text" class="long" name="Street" required>
                </p>
                <p>
                    <label>City *</label>
                    <input type="text" class="long" name="City" required>
                </p>
                <p>
                    <label>Country *</label>
                    <input type="text" class="long" name="Country" required>
                </p>
                <p>
                    <label class="optional">Website</label>
                    <input class="long" type="text" value="http://" name="Website" required>
                </p>
            </fieldset>
            <fieldset class="row2">
                <legend>Further Information
                </legend>
                <p>
                    <td>Select Gender </td>
                    <td><select name="Selectgender" required>
                            <option>selectgender</option>
                            <option value="male">male</option>
                            <option value="female">female</option>
                            <option value="other">other</option>
                        </select>
                    </td>
                </p>
                <p>
                    <tr>
                        <td>Date of Birth</td>
                        <td>

                            <input type="date" name="dob" required>
                        </td>
                    </tr>
                </p>
                <p>
                    <label>Nationality *
                    </label>
                    <input type="text" class="long" name="Nationality" required>
                </p>
                <p>
                    <label>Speciality *
                    </label>
                    <input type="text" class="long" name="Speciality" required>
                </p>
                <p>
                    <label>Department *
                    </label>
                    <input type="text" class="long" name="Department" required>
                </p>
                <p>
                    <label>Qualifications *
                    </label>
                    <input type="text" class="long" name="Qualifications" required>
                </p>
                <p>
                    <td>Availability</td>
                    <td><select name="Availability" required>
                            <option>select</option>
                            <option value="yes">yes</option>
                            <option value="No">No</option>

                        </select>
                    </td>
                </p>
                <div class="infobox">
                    <h2>Helpful Information</h2>
                    <p> Doctors can edit and change thier Personal information </p>
                </div>
            </fieldset>
            <fieldset class="row3">
                <legend>Terms and Mailing
                </legend>

            </fieldset>
            <div>

                <input type="submit" name="submit" class="registerbtn">
            </div>
        </form>

    </div>

    <?php
	include('includes/footer.php');
?>
