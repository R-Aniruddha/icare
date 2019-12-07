<?php
    $thisPage="Doctor Details";
	include('includes/header.php');
?>
        
    <div class="main-content">  
        <h2>Doctor Details</h2>
        <form action="" class="register">
            <fieldset class="row1">
                <p>
                    
                    <form id="contact-form">
                    <div class="form-group">
                        <label for="FirstName">Name</label>
                        <div class="row">
                            <div class="col-sm-6">
                              <input type="text" class="form-control" id="FirstName" placeholder="First name">
                            </div>
                            <div class="col-sm-6">
                              <input type="text" class="form-control" id="LastName" placeholder="Last name">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="PhoneInput">Phone Number</label>
                        <input type="phone" class="form-control" id="PhoneInput" placeholder="Phone Number">
                    </div>
                    <div class="form-group">
                        <label for="EmailInput">Email address</label>
                        <input type="email" class="form-control" id="EmailInput" aria-describedby="emailHelp" placeholder="Enter email">
                    </div>
                        <div class="form-group">
    <label for="inputAddress">Address</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
  </div>
  <div class="form-group">
    <label for="inputAddress2">Address 2</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">City</label>
      <input type="text" class="form-control" id="inputCity">
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">Country</label>
      <select id="inputState" class="form-control">
        <option selected>Choose...</option>
          <option value="1">United States
                        </option>
                        <option value="2">France
                        </option>
                        <option value="3">India
                        </option>
                        <option value="4">China
                        </option>
                        <option value="5">Japan
                        </option>
                        <option value="6">Germany
                        </option>
                        <option value="7">Australia
                        </option>
                        <option value="8">Canada
                        </option>
                        <option value="9">England
                        </option>
      </select>
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip">Zip</label>
      <input type="text" class="form-control" id="inputZip">
    </div>
  </div>
                    <div class="form-group">
                <p>
                    <label class="optional">Website</label>
                    <input class="long" type="text" value="http://"/>
                  <div class="form-group col-md-0">
      <legend class="col-form-label col-sm-0 pt-0">Gender</legend>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
          <label class="form-check-label" for="gridRadios1">
            Male
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
          <label class="form-check-label" for="gridRadios2">
            Female
          </label>  
                      </div> </div> </div> </form>
<div class="form-group">
<label for="dob" class="col-sm-0 control-label">Date of birth</label>
<div class="col-sm-0">
<input type="text" name="dob" class="form-control datepicker" id="dob" placeholder="MM/DD/YYYY">
</div>
</div>
                <div class="form-group">
                        <label for="SpecialityInput">Speciality</label>
                        <input type="Speciality" class="form-control" id="SpecialityInput" placeholder="Cardiologist">
                    </div>
               <div class="form-group">
                        <label for="DeparmentInput">Department</label>
                        <input type="Department" class="form-control" id="DepartmentInput" placeholder="Orthopaedics">
                    </div>
                <div class="form-group">
                        <label for="QualificationInput">Qualification</label>
                        <input type="Qualification" class="form-control" id="QualificationInput" placeholder="MBBS">
                    </div>
              <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="defaultUnchecked">
    <label class="custom-control-label" for="defaultUnchecked">Availability</label> </div>
            <fieldset class="row2">
                <div class="infobox"><h2>Helpful Information</h2>
                    <p> Doctors can edit and change thier Personal information </p>
                </div></fieldset> 
            </fieldset>
            <fieldset class="row3">
                <legend>Terms and Condition</legend>
                <p class="agreement">
                    <input type="checkbox" value=""/>
                    <label>*  I agree to Icare's <a href="#">Terms of Use</a></label> <label> and <a href="#"> Cookie & Privacy Policy</a></label>
                </p>
            </fieldset>
            <div>   
                <button type="button" class="btn btn-primary">Edit</button>
                <button type="button" class="btn btn-primary">Save</button>
            </div>
        </form>
            
    </div>
        
</div>

<?php
	include('includes/footer.php');
?>