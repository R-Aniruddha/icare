<?php
    $thisPage="Home";
	include('includes/header.php');
?>
    <!-- CAROUSEL CODE STARTS HERE --> 
    <div class="row">
        <div id="mySlider" class="carousel slide" data-ride="carousel" data-interval="2000" style="margin:auto;">
            <!--data-pause="false" data-interval="1000"-->
                <!-- Indicators dot navigation -->
                <ol class="carousel-indicators">
                    <li data-target="#mySlider" data-slide-to="0" class="active"></li>
                    <li data-target="#mySlider" data-slide-to="1"></li>
                    <li data-target="#mySlider" data-slide-to="2"></li>
                    <li data-target="#mySlider" data-slide-to="3"></li>
                </ol>
                <!-- wrapper for slides -->
                <div class="carousel-inner" >
                    <div class="carousel-item active">
                        <img class="d-block" src="images/image-6.jpg" alt="Smart Hospital" />
                        <div class="carousel-caption">
                            <h1>Remote Health Monitoring System</h1>
                        </div>
                    </div>
                     <div class="carousel-item">
                        <img class="d-block" src="images/image-3.jpg" alt="" />
                    </div>
                     <div class="carousel-item">
                        <img class="d-block" src="images/image-4.jpg" alt="" />
                        <div class="carousel-caption">
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block" src="images/image-5.png" alt="" />
                        <div class="carousel-caption">
                        </div>
                    </div>
                </div>

                <!--navigation buttons -->
                <a class="carousel-control-prev" href="#mySlider" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                 <a class="carousel-control-next" href="#mySlider" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>


            </div>

   </div>
    <!-- CAROUSEL CODE ENDS HERE --> 

    <div class="main-content">
        <h2>WHO WE ARE</h2>
        <p>
            Smart System to create an environment at home or in a hospital room to monitor people’s health. Taking precautions for emergency situations by notifying registered family members or trusted persons to avoid worst-case scenarios. Allows for remote monitoring and gathering of medical data. This will allow a cost-effective solution for patients thereby allowing them to stay in the comfort of their homes instead of being admitted into an expensive hospital. 
        </p>
        <div class="row homepage-row"> 
            <div class="col-sm-4 text-center">
                <h3>Automate Health Analytics</h3>
                <img class="img-responsive img-circle" src="images/analytics.png" />
            </div>
            <div class="col-sm-4 text-center">
                <h3>Remote Monitoring of Patient</h3>
                <img class="img-responsive img-circle" src="images/remote-monitoring.png" />
            </div>
            <div class="col-sm-4 text-center">
                <h3>Alert in Emergency Situations</h3>
                <img class="img-responsive img-circle" src="images/emergency_call.png" />
            </div>
        </div>
        <div class="row homepage-row">
            <div class="col-sm-6">
                <img class="" src="images/raw/image-5.png" width="100%" />
            </div>
            <div class="col-sm-6">
                <h3>Statistics</h3>
                <p>
                    View Health Statistics at the tip of your finger. <br>
                    Data shown as graphs for better viewability and can be used to easily identify trends. <br>
                    Monitor your health over a period of time <br>
                    
                </p>
            </div>
        </div>
        
        <div class="row homepage-row">
            <div class="col-sm-6">
                <h3>Stay Updated with the Patient's Status</h3>
                <p>
                    Family members and loved ones can remain updated with the patient's status. <br>
                    Monitor their health and see how their recovery is progressing <br>
                    View doctor's comments on recovery process
                </p>
            </div>
            <div class="col-sm-6">
                <img class="" src="images/raw/image-4.jpg" width="100%" />
            </div>
        </div>
        <div class="row homepage-row">
            <div style="margin:auto; text-align: center; padding: 40px 0;">
                <h2>Join Us Now</h2>
                <a class="btn btn-info" href="#">Register</a>
                <a class="btn btn-info" href="#">Learn More</a>
            </div>
        </div>
        <div class="row homepage-row" style="text-align: center;">
            <div class="col-sm-12 text-center" style="padding-bottom:15px;">
                <h2>Our Smart System can help monitor your health</h2>
            </div>
            <div class="col-sm-3" >
                <h3>Movement</h3>
                <img src="images/smart-body-sensor.png" class="img-responsive img-rounded"/>
            </div>
            <div class="col-sm-3">
                <h3>Heart Rate</h3>
                <img src="images/heartrate-sensor.png" class="img-responsive img-rounded"/>
            </div>
            <div class="col-sm-3">
                <h3>Sleep Tracking</h3>
                <img src="images/sleep-tracking.png" class="img-responsive img-rounded"/>
            </div>
            <div class="col-sm-3">
                <h3>Blood Pressure</h3>
                <img src="images/bloodpressure-sensor.png" class="img-responsive img-rounded"/>
            </div>

        </div>    
            
            
    </div>
        

<?php
	include('includes/footer.php');
?>