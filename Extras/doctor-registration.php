<?php
$thisPage = "Doctor Registration";
include_once("controller/functions.php");

if (!isLoggedIn()) {
  $_SESSION['msg'] = "You must log in first";
  
    header('location: login.php');
}

include('includes/header.php');


?>
  <div class="main-content">

    <form id="doctor-details-registration" action="doctor-details.php" method="post" 
      style="padding: 20px;"
    >

      <fieldset class="col-md-8" style="margin: auto;">
          <h2 style="margin-bottom: 20px;"> Personal Details </h2>

          <div class="input-group">
                <span class="input-group-text" id="">First Name</span>
              <input type="text" class="form-control" required name="FirstName">
          </div>
          <div class="input-group">
                <span class="input-group-text" id="">Last Name</span>
              <input type="text" class="form-control" required name="LastName">
          </div>
          <div class="input-group">
              <span class="input-group-text" id="">Phone</span>
              <input type="text" maxlength="10" class="form-control"  name="Phone" required placeholder="9876543210">
          </div>
          <div class="input-group">
            <span class="input-group-text" class="optional" id="">Street </span>
            <input type="text" class="form-control" name="Street" required placeholder="1234 Main St">
          </div>
          <div class="input-group">
            <span class="input-group-text" id="">City 
            </span>
            <input type="text" class="form-control" name="City" required placeholder="Paris">
          </div>
          <div class="input-group">
            <span class="input-group-text" id="">Country 
            </span>
            <input type="text" class="form-control" name="Country" required placeholder="France">
          </div>
          <!--
          <div class="input-group">
            <span class="input-group-text optional">Website</span>
            <input class="form-control" type="text" value="http://" name="Website" required>
          </div> 
            -->
          <div class="input-group">
            <select class="custom-select" name="Selectgender" required>
              <option selected>Select Gender</option>
              <option value="Male">Male</option>
              <option value="Female">Female</option>
              <option value="Other">Other</option>
            </select>
          </div>
          <div class="input-group">
              <span for="date-input" class="input-group-text">Date * </span>
              <input class="form-control" type="date" value="mm-dd-yyyy" id="date-input" name="DOB">
          </div>
          <div class="input-group">
            <span class="input-group-text" id="">Nationality * </span>
            <input type="text" class="form-control" name="Nationality" required placeholder="American">
          </div>
          <div class="input-group">
            <span class="input-group-text" id="">Speciality * </span>
            <input type="text" class="form-control" name="Speciality" required placeholder="Cardiologist">
          </div>
          <div class="input-group">
            <span class="input-group-text" id="">Department</span>
            <input type="text" class="form-control" name="Department" required placeholder="Orthopaedics">
          </div>
          <div class="input-group">
            <span class="input-group-text" id="">Qualifications * </span>
            <input type="text" class="form-control" name="Qualifications" required placeholder="MBBS">
          </div>
          <div class="input-group">
            <select class="custom-select" name="Availability" required>
              <option selected>Availability</option>
              <option value="Yes">Yes</option>
              <option value="No">No</option>
            </select>
          </div>

          <button type="submit" name="register_doc_btn" class="btn btn-primary">Save</button>

      </fieldset>
        
        
    </form>


  </div> 
</div> 

    <?php
include('includes/footer.php');
?>
