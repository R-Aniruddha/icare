<?php
$thisPage = "Doctor Details";
include_once("controller/functions.php");

include('includes/header.php');

if (isset($_POST['submit'])) {
$Name             = $_POST['Name'];
$Phone            = $_POST['Phone'];
$Street           = $_POST['Street'];
$City             = $_POST['City'];
$Country          = $_POST['Country'];
$Website          = $_POST['Website'];
$SelectYourGender = $_POST['Selectgender'];
$DateOfBirth      = $_POST['dob'];
$Nationality      = $_POST['Nationality'];
$Speciality       = $_POST['Speciality'];
$Department       = $_POST['Department'];
$Qualifications   = $_POST['Qualifications'];
$Availability     = $_POST['Availability'];
$sql = mysqli_query($conn, "insert into doctorsdetails(Name,Phone,Street,City,Country,Website,gen,dob,Nationality,Speciality,Department,Qualifications,Availability)values('$Name','$Phone','$Street','$City','$Country','$Website','$SelectYourGender','$DateOfBirth','$Nationality','$Speciality','$Department','$Qualifications','$Availability')") or die(mysqli_error($conn));
if ($sql) {
echo "Data Inserted Successfully..";
} //$sql
} //isset($_POST['submit'])
?>
<form action="" method="post" enctype="multipart/form-data">
  <div class="main-content">
    <div class="form-group">
      <h2>Doctor Details
      </h2>
      <form action="" class="register">
          <div class="col-sm-6">
        <fieldset class="row1">
          <p>
            <!--              <form id="contact-form">                   -->
              
            <label>Name 
            </label>
            <input type="text" class="form-control" name="Name" required placeholder="John Pascal">
          </p>
          <p>      
            <label>Phone 
            </label>
            <input type="text" maxlength="10" class="form-control"  name="Phone" required placeholder="9876543210">
          </p>
          <p>
            <label class="optional">Street
            </label>
            <input type="text" class="form-control" name="Street" required placeholder="1234 Main St">
          </p>
          <p>
            <label>City 
            </label>
            <input type="text" class="form-control" name="City" required placeholder="Paris">
          </p>
          <p>
            <label>Country 
            </label>
            <input type="text" class="form-control" name="Country" required placeholder="France">
          </p>
          <p>
            <label class="optional">Website
            </label>
            <input class="form-control" type="text" value="http://" name="Website" required>
          </p> 
        </fieldset> 
        <fieldset class="row2">
          <p>
            <td>Select Gender 
            </td>
            <td>
              <select name="Selectgender" required>
                <option>selectgender
                </option>
                <option value="male">male
                </option>
                <option value="female">female
                </option>
                <option value="other">other
                </option>
              </select>
            </td>
          </p>
          <p>
            <tr>
              <td>Date of Birth
              </td>
              <td>
                <input type="date" name="dob" required>
              </td>
            </tr>
          </p>
          <p>
            <label>Nationality 
            </label>
            <input type="text" class="form-control" name="Nationality" required placeholder="American">
          </p>
          <p>
            <label>Speciality 
            </label>
            <input type="text" class="form-control" name="Speciality" required placeholder="Cardiologist">
          </p>
          <p>
            <label>Department 
            </label>
            <input type="text" class="form-control" name="Department" required placeholder="Orthopaedics">
          </p>
          <p>
            <label>Qualifications *
            </label>
            <input type="text" class="form-control" name="Qualifications" required placeholder="MBBS">
          </p>
          <p>
            <td>Availability
            </td>
            <td>
              <select name="Availability" required>
                <option>select
                </option>
                <option value="yes">yes
                </option>
                <option value="No">No
                </option>
              </select>
            </td>
          </p>
        </fieldset>
        <fieldset class="row3">
          <input type="checkbox" value=""/>
                    <label>*  I agree to Icare's <a href="#">Terms of Use</a></label> <label> and <a href="#"> Cookie & Privacy Policy</a></label>
        </fieldset>
        <div> 
          <input type="submit" name="submit" class="registerbtn btn-primary">
        </div> </div> 
        <!--        </form>--
    <?php
include('includes/footer.php');
?>
