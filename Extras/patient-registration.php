<?php
    $thisPage="Patient Registration";
	include('includes/header.php');


	//include_once("controller/connection.php");


if(isset($_POST['submit']))
{
    $firstname    			=  $_POST['firstname'];
    $lastname    			=  $_POST['lastname'];
    $areacode    			=  $_POST['areacode'];
    $phonenumber    		=  $_POST['phonenumber'];
    $dobmonth    			=  $_POST['dobmonth'];
    $dobdate    			=  $_POST['dobdate'];
    $dobyear    			=  $_POST['dobyear'];
    $gender    			    =  $_POST['gender'];
    $occupation    			=  $_POST['occupation'];
    $marital_status    		=  $_POST['marital_status'];
    $email    			    =  $_POST['email'];
    $socialsecurity    		=  $_POST['socialsecurity'];
    $street    			    =  $_POST['street'];
    $street2    			=  $_POST['street2'];
    $city    			    =  $_POST['city'];
    $state    			    =  $_POST['state'];
    $postal    			    =  $_POST['postal'];
    $country    			=  $_POST['country'];
    $e_firstname    		=  $_POST['e_firstname'];
    $e_lastname    			=  $_POST['e_lastname'];
    $relationship    		=  $_POST['relationship'];
    $e_areacode    			=  $_POST['e_areacode'];
    $e_phonenumber    		=  $_POST['e_phonenumber'];
    $e_areacode2    		=  $_POST['e_areacode2'];
    $e_phonenumber2    		=  $_POST['e_phonenumber2'];
    $e2_firstname    		=  $_POST['e2_firstname'];
    $e2_lastname    		=  $_POST['e2_lastname'];
    $e2_realtionship    	=  $_POST['e2_relationship'];
    $e2_areacode    		=  $_POST['e2_areacode'];
    $e2_phonenumber    		=  $_POST['e2_phonenumber'];
    $e2_areacode2    		=  $_POST['e2_areacode2'];
    $e2_phonenumber2    	=  $_POST['e2_phonenumber2'];
    $hepatitis    			=  $_POST['hepatitis'];
    $chickenpox    			=  $_POST['chickenpox'];
    $measles    			=  $_POST['measles'];
    $significantmedical    	=  $_POST['significantmedical'];
    $cdate    			    =  $_POST['cdate'];
    $c_details    			=  $_POST['c_details'];
    $c_results    			=  $_POST['c_results'];
    $bpdate    			    =  $_POST['bpdate'];
    $bp_details    			=  $_POST['bp_details'];
    $bp_result    			=  $_POST['bp_result'];
    $hdate    			    =  $_POST['hdate'];
    $h_detaiils    			=  $_POST['h_detaiils'];
    $h_result    			=  $_POST['h_result'];
    $vaccination_history    =  $_POST['vaccination_history'];
    $height    			    =  $_POST['height'];
    $weight    			    =  $_POST['weight'];
    $other_issues    		=  $_POST['other_issues'];
    
    
    $sql = mysqli_query($conn,"INSERT INTO patientdetails(firstname,lastname,areacode,phonenumber,dobmonth,dobdate,dobyear,gender,occupation,marital_status,email,socialsecurity,street,street2,city,state,postal,country,e_firstname,e_lastname,relationship,e_areacode,e_phonenumber,e_areacode2,e_phonenumber2,e2_firstname,e2_lastname,e2_relationship,e2_areacode,e2_phonenumber,e2_areacode2,e2_phonenumber2,hepatitis,chickenpox,measles,significantmedical,cdate,c_details,c_results,bpdate,bp_details,bp_result,hdate,h_detaiils,h_result,vaccination_history,height,weight,other_issues)
    values('$firstname','$lastname','$areacode','$phonenumber','$dobmonth','$dobdate','$dobyear','$gender','$occupation','$marital_status','$email','$socialsecurity','$street','$street2','$city','$state','$postal','$country','$e_firstname','$e_lastname','$relationship','$e_areacode','$e_phonenumber','$e_areacode2','$e_phonenumber2','$e2_firstname','$e2_lastname','$e2_realtionship','$e2_areacode','$e2_phonenumber','$e2_areacode2','$e2_phonenumber2','$hepatitis','$chickenpox','$measles','$significantmedical','$cdate','$c_details','$c_results','$bpdate','$bp_details','$bp_result','$hdate','$h_detaiils','$h_result','$vaccination_history','$height','$weight','$other_issues')")
    or die(mysqli_error($conn));
    
    
	if($sql)
	{
		echo "Data Inserted Successfully..";
	}
}

?>


<div class="main-content">
    <form id="patient-registration-form" method="post" enctype="multipart/form-data" accept-charset="utf-8">
        <input type="hidden" name="formID" value="92766146676370" />
        <input type="hidden" id="JWTContainer" value="" />
        <input type="hidden" id="cardinalOrderNumber" value="" />
        <div role="main" class="form-all">
            <ul class="form-section page-section">
                <li id="cid_1" class="form-input-wide" data-type="control_head">
                    <div class="form-header-group ">
                        <div class="header-text httal htvam">
                            <h1 id="header_1" class="form-header" data-component="header">
                                Patient Registration Form
                            </h1>
                            <div id="subHeader_1" class="form-subHeader">
                                Please fill out your information carefully
                            </div>
                        </div>
                    </div>
                </li>
                <li class="form-line" data-type="control_fullname" id="id_5">
                    <div id="cid_5" class="form-input">
                        <div data-wrapper-react="true">
                            <label class="form-sub-label" for="first_5" id="sublabel_5_first" style="min-height:13px"> First Name </label>
                            <span class="form-sub-label-container" style="vertical-align:top">
                                <input type="text" id="first_5" name="firstname" class="form-textbox" size="10" value="" data-component="first" aria-labelledby="label_5 sublabel_5_first" />
                            </span>
                            <span class="form-sub-label-container" style="vertical-align:top">
                                <label class="form-sub-label" for="last_5" id="sublabel_5_last" style="min-height:13px"> Last Name </label>
                                <input type="text" id="last_5" name="lastname" class="form-textbox" size="15" value="" data-component="last" aria-labelledby="label_5 sublabel_5_last" />
                            </span>
                        </div>
                    </div>
                </li>
                <li class="form-line" data-type="control_phone" id="id_6">
                    <label class="form-label form-label-left form-label-auto" id="label_6" for="input_6_area">
                        Phone Number
                        <span class="form-required">
                            *
                        </span>
                    </label>
                    <div id="cid_6" class="form-input">
                        <div data-wrapper-react="true">
                            <span class="form-sub-label-container" style="vertical-align:top">
                                <input type="tel" id="input_6_area" name="areacode" class="form-textbox" size="6" value="" data-component="areaCode" aria-labelledby="label_6 sublabel_6_area" />
                                <span class="phone-separate" aria-hidden="true">
                                    -
                                </span>
                                <label class="form-sub-label" for="input_6_area" id="sublabel_6_area" style="min-height:13px"> Area Code </label>
                            </span>
                            <span class="form-sub-label-container" style="vertical-align:top">
                                <input type="tel" id="input_6_phone" name="phonenumber" class="form-textbox" size="12" value="" data-component="phone" aria-labelledby="label_6 sublabel_6_phone" />
                                <label class="form-sub-label" for="input_6_phone" id="sublabel_6_phone" style="min-height:13px"> Phone Number </label>
                            </span>
                        </div>
                    </div>
                </li>
                <li class="form-line" data-type="control_birthdate" id="id_7">
                    <label class="form-label form-label-left form-label-auto" id="label_7" for="input_7">
                        Birth Date
                        <span class="form-required">
                            *
                        </span>
                    </label>
                    <div id="cid_7" class="form-input">
                        <div data-wrapper-react="true">
                            <span class="form-sub-label-container" style="vertical-align:top">
                                <select name="dobmonth" id="input_7_month" class="form-dropdown" data-component="birthdate-month">
                                    <option> </option>
                                    <option value="January"> January </option>
                                    <option value="February"> February </option>
                                    <option value="March"> March </option>
                                    <option value="April"> April </option>
                                    <option value="May"> May </option>
                                    <option value="June"> June </option>
                                    <option value="July"> July </option>
                                    <option value="August"> August </option>
                                    <option value="September"> September </option>
                                    <option value="October"> October </option>
                                    <option value="November"> November </option>
                                    <option value="December"> December </option>
                                </select>
                                <label class="form-sub-label" for="input_7_month" id="sublabel_month" style="min-height:13px"> Month </label>
                            </span>
                            <span class="form-sub-label-container" style="vertical-align:top">
                                <select name="dobdate" id="input_7_day" class="form-dropdown" data-component="birthdate-day">
                                    <option> </option>
                                    <option value="1"> 1 </option>
                                    <option value="2"> 2 </option>
                                    <option value="3"> 3 </option>
                                    <option value="4"> 4 </option>
                                    <option value="5"> 5 </option>
                                    <option value="6"> 6 </option>
                                    <option value="7"> 7 </option>
                                    <option value="8"> 8 </option>
                                    <option value="9"> 9 </option>
                                    <option value="10"> 10 </option>
                                    <option value="11"> 11 </option>
                                    <option value="12"> 12 </option>
                                    <option value="13"> 13 </option>
                                    <option value="14"> 14 </option>
                                    <option value="15"> 15 </option>
                                    <option value="16"> 16 </option>
                                    <option value="17"> 17 </option>
                                    <option value="18"> 18 </option>
                                    <option value="19"> 19 </option>
                                    <option value="20"> 20 </option>
                                    <option value="21"> 21 </option>
                                    <option value="22"> 22 </option>
                                    <option value="23"> 23 </option>
                                    <option value="24"> 24 </option>
                                    <option value="25"> 25 </option>
                                    <option value="26"> 26 </option>
                                    <option value="27"> 27 </option>
                                    <option value="28"> 28 </option>
                                    <option value="29"> 29 </option>
                                    <option value="30"> 30 </option>
                                    <option value="31"> 31 </option>
                                </select>
                                <label class="form-sub-label" for="input_7_day" id="sublabel_day" style="min-height:13px"> Day </label>
                            </span>
                            <span class="form-sub-label-container" style="vertical-align:top">
                                <select name="dobyear" id="input_7_year" class="form-dropdown" data-component="birthdate-year">
                                    <option> </option>
                                    <option value="2019"> 2019 </option>
                                    <option value="2018"> 2018 </option>
                                    <option value="2017"> 2017 </option>
                                    <option value="2016"> 2016 </option>
                                    <option value="2015"> 2015 </option>
                                    <option value="2014"> 2014 </option>
                                    <option value="2013"> 2013 </option>
                                    <option value="2012"> 2012 </option>
                                    <option value="2011"> 2011 </option>
                                    <option value="2010"> 2010 </option>
                                    <option value="2009"> 2009 </option>
                                    <option value="2008"> 2008 </option>
                                    <option value="2007"> 2007 </option>
                                    <option value="2006"> 2006 </option>
                                    <option value="2005"> 2005 </option>
                                    <option value="2004"> 2004 </option>
                                    <option value="2003"> 2003 </option>
                                    <option value="2002"> 2002 </option>
                                    <option value="2001"> 2001 </option>
                                    <option value="2000"> 2000 </option>
                                    <option value="1999"> 1999 </option>
                                    <option value="1998"> 1998 </option>
                                    <option value="1997"> 1997 </option>
                                    <option value="1996"> 1996 </option>
                                    <option value="1995"> 1995 </option>
                                    <option value="1994"> 1994 </option>
                                    <option value="1993"> 1993 </option>
                                    <option value="1992"> 1992 </option>
                                    <option value="1991"> 1991 </option>
                                    <option value="1990"> 1990 </option>
                                    <option value="1989"> 1989 </option>
                                    <option value="1988"> 1988 </option>
                                    <option value="1987"> 1987 </option>
                                    <option value="1986"> 1986 </option>
                                    <option value="1985"> 1985 </option>
                                    <option value="1984"> 1984 </option>
                                    <option value="1983"> 1983 </option>
                                    <option value="1982"> 1982 </option>
                                    <option value="1981"> 1981 </option>
                                    <option value="1980"> 1980 </option>
                                    <option value="1979"> 1979 </option>
                                    <option value="1978"> 1978 </option>
                                    <option value="1977"> 1977 </option>
                                    <option value="1976"> 1976 </option>
                                    <option value="1975"> 1975 </option>
                                    <option value="1974"> 1974 </option>
                                    <option value="1973"> 1973 </option>
                                    <option value="1972"> 1972 </option>
                                    <option value="1971"> 1971 </option>
                                    <option value="1970"> 1970 </option>
                                    <option value="1969"> 1969 </option>
                                    <option value="1968"> 1968 </option>
                                    <option value="1967"> 1967 </option>
                                    <option value="1966"> 1966 </option>
                                    <option value="1965"> 1965 </option>
                                    <option value="1964"> 1964 </option>
                                    <option value="1963"> 1963 </option>
                                    <option value="1962"> 1962 </option>
                                    <option value="1961"> 1961 </option>
                                    <option value="1960"> 1960 </option>
                                    <option value="1959"> 1959 </option>
                                    <option value="1958"> 1958 </option>
                                    <option value="1957"> 1957 </option>
                                    <option value="1956"> 1956 </option>
                                    <option value="1955"> 1955 </option>
                                    <option value="1954"> 1954 </option>
                                    <option value="1953"> 1953 </option>
                                    <option value="1952"> 1952 </option>
                                    <option value="1951"> 1951 </option>
                                    <option value="1950"> 1950 </option>
                                    <option value="1949"> 1949 </option>
                                    <option value="1948"> 1948 </option>
                                    <option value="1947"> 1947 </option>
                                    <option value="1946"> 1946 </option>
                                    <option value="1945"> 1945 </option>
                                    <option value="1944"> 1944 </option>
                                    <option value="1943"> 1943 </option>
                                    <option value="1942"> 1942 </option>
                                    <option value="1941"> 1941 </option>
                                    <option value="1940"> 1940 </option>
                                    <option value="1939"> 1939 </option>
                                    <option value="1938"> 1938 </option>
                                    <option value="1937"> 1937 </option>
                                    <option value="1936"> 1936 </option>
                                    <option value="1935"> 1935 </option>
                                    <option value="1934"> 1934 </option>
                                    <option value="1933"> 1933 </option>
                                    <option value="1932"> 1932 </option>
                                    <option value="1931"> 1931 </option>
                                    <option value="1930"> 1930 </option>
                                    <option value="1929"> 1929 </option>
                                    <option value="1928"> 1928 </option>
                                    <option value="1927"> 1927 </option>
                                    <option value="1926"> 1926 </option>
                                    <option value="1925"> 1925 </option>
                                    <option value="1924"> 1924 </option>
                                    <option value="1923"> 1923 </option>
                                    <option value="1922"> 1922 </option>
                                    <option value="1921"> 1921 </option>
                                    <option value="1920"> 1920 </option>
                                </select>
                                <label class="form-sub-label" for="input_7_year" id="sublabel_year" style="min-height:13px"> Year </label>
                            </span>
                        </div>
                    </div>
                </li>
                <li class="form-line form-line-column form-col-2" data-type="control_radio" id="id_20">
                    <label class="form-label form-label-left" id="label_20" for="input_20"> Gender: </label>
                    <div id="cid_20" class="form-input">
                        <div class="form-single-column" role="group" aria-labelledby="label_20" data-component="radio">
                            <span class="form-radio-item" style="clear:left">
                                <span class="dragger-item">
                                </span>
                                <input type="radio" class="form-radio" id="input_20_0" name="gender" value="Male" />
                                <label id="label_input_20_0" for="input_20_0"> Male </label>
                            </span>
                            <span class="form-radio-item" style="clear:left">
                                <span class="dragger-item">
                                </span>
                                <input type="radio" class="form-radio" id="input_20_1" name="gender" value="Female" />
                                <label id="label_input_20_1" for="input_20_1"> Female </label>
                            </span>
                        </div>
                    </div>
                </li>
                <li class="form-line form-line-column form-col-2" data-type="control_radio" id="id_20">
                    <label class="form-label form-label-left" id="label_20" for="input_20"> Occupation: </label>
                    <div id="cid_20" class="form-input">
                        <div class="form-single-column" role="group" aria-labelledby="label_20" data-component="radio">
                            <span class="form-radio-item" style="clear:left">
                                <span class="dragger-item">
                                </span>
                                <input type="radio" class="form-radio" id="input_20_0" name="occupation" value="Employed" />
                                <label id="label_input_20_0" for="input_20_0"> Employed </label>
                            </span>
                            <span class="form-radio-item" style="clear:left">
                                <span class="dragger-item">
                                </span>
                                <input type="radio" class="form-radio" id="input_20_1" name="occupation" value="Unemployed" />
                                <label id="label_input_20_1" for="input_20_1"> Unemployed </label>
                            </span>
                            <span class="form-radio-item" style="clear:left">
                                <span class="dragger-item">
                                </span>
                                <input type="radio" class="form-radio" id="input_20_1" name="occupation" value="Retied" />
                                <label id="label_input_20_1" for="input_20_1"> Retired </label>
                            </span>
                        </div>
                    </div>
                </li>
                <li class="form-line form-line-column form-col-2" data-type="control_radio" id="id_20">
                    <label class="form-label form-label-left" id="label_20" for="input_20"> Marital Status: </label>
                    <div id="cid_20" class="form-input">
                        <div class="form-single-column" role="group" aria-labelledby="label_20" data-component="radio">
                            <span class="form-radio-item" style="clear:left">
                                <span class="dragger-item">
                                </span>
                                <input type="radio" class="form-radio" id="input_20_0" name="marital_status" value="Single" />
                                <label id="label_input_20_0" for="input_20_0"> Single </label>
                            </span>
                            <span class="form-radio-item" style="clear:left">
                                <span class="dragger-item">
                                </span>
                                <input type="radio" class="form-radio" id="input_20_1" name="marital_status" value="Married" />
                                <label id="label_input_20_1" for="input_20_1"> Married </label>
                            </span>
                            <span class="form-radio-item" style="clear:left">
                                <span class="dragger-item">
                                </span>
                                <input type="radio" class="form-radio" id="input_20_1" name="marital_status" value="Divorced" />
                                <label id="label_input_20_1" for="input_20_1"> Divorced </label>
                            </span>
                            <span class="form-radio-item" style="clear:left">
                                <span class="dragger-item">
                                </span>
                                <input type="radio" class="form-radio" id="input_20_1" name="marital_status" value="Widowed" />
                                <label id="label_input_20_1" for="input_20_1"> Widowed </label>
                            </span>
                            <span class="form-radio-item" style="clear:left">
                                <span class="dragger-item">
                                </span>
                                <input type="radio" class="form-radio" id="input_20_1" name="marital_status" value="Other" />
                                <label id="label_input_20_1" for="input_20_1"> Other </label>
                            </span>
                        </div>
                    </div>
                </li>
                <li class="form-line" data-type="control_fullname" id="id_5">
                    <label class="form-label form-label-left form-label-auto" id="label_5" for="first_5">
                        Email ID
                        <span class="form-required">
                            *
                        </span>
                        <i class="fa fa-envelope" style="font-size:15px"></i>
                    </label>
                    <div id="cid_5" class="form-input">
                        <div data-wrapper-react="true">
                            <span class="form-sub-label-container" style="vertical-align:top">
                                <input type="text" id="first_5" name="email" class="form-textbox" size="25" value="" data-component="first" aria-labelledby="label_5 sublabel_5_first" />
                                <label class="form-sub-label" for="first_5" id="sublabel_5_first" style="min-height:13px"> myname@example.com </label>
                            </span>
                        </div>
                    </div>
                </li>
                <li class="form-line" data-type="control_fullname" id="id_5">
                    <label class="form-label form-label-left form-label-auto" id="label_5" for="first_5">
                        Social Security
                        <i class="fa fa-envelope" style="font-size:15px"></i>
                    </label>
                    <div id="cid_5" class="form-input">
                        <div data-wrapper-react="true">
                            <span class="form-sub-label-container" style="vertical-align:top">
                                <input type="text" id="first_5" name="socialsecurity" class="form-textbox" size="25" value="" data-component="first" aria-labelledby="label_5 sublabel_5_first" />
                                <label class="form-sub-label" for="first_5" id="sublabel_5_first" style="min-height:15px"> 1234567890 </label>
                            </span>
                        </div>
                    </div>
                </li>
                <li class="form-line" data-type="control_address" id="id_8">
                    <label class="form-label form-label-top" id="label_8" for="input_8undefined"> Address </label>
                    <div id="cid_8" class="form-input-wide">
                        <table summary="" class="form-address-table">
                            <tbody>
                                <tr>
                                    <td colspan="2">
                                        <span class="form-sub-label-container" style="vertical-align:top">
                                            <input type="text" id="input_8_addr_line1" name="street" class="form-textbox form-address-line" autocomplete="address-line1" value="" data-component="address_line_1" aria-labelledby="label_8 sublabel_8_addr_line1" />
                                            <label class="form-sub-label" for="input_8_addr_line1" id="sublabel_8_addr_line1" style="min-height:13px"> Street Address </label>
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <span class="form-sub-label-container" style="vertical-align:top">
                                            <input type="text" id="input_8_addr_line2" name="street2" class="form-textbox form-address-line" autocomplete="address-line2" size="46" value="" data-component="address_line_2" aria-labelledby="label_8 sublabel_8_addr_line2" />
                                            <label class="form-sub-label" for="input_8_addr_line2" id="sublabel_8_addr_line2" style="min-height:13px"> Street Address Line 2 </label>
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="form-sub-label-container" style="vertical-align:top">
                                            <input type="text" id="input_8_city" name="city" class="form-textbox form-address-city" autocomplete="address-level2" size="21" value="" data-component="city" aria-labelledby="label_8 sublabel_8_city" />
                                            <label class="form-sub-label" for="input_8_city" id="sublabel_8_city" style="min-height:13px"> City </label>
                                        </span>
                                    </td>
                                    <td>
                                        <span class="form-sub-label-container" style="vertical-align:top">
                                            <input type="text" id="input_8_state" name="state" class="form-textbox form-address-state" autocomplete="address-level1" size="22" value="" data-component="state" aria-labelledby="label_8 sublabel_8_state" />
                                            <label class="form-sub-label" for="input_8_state" id="sublabel_8_state" style="min-height:13px"> State / Province </label>
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="form-sub-label-container" style="vertical-align:top">
                                            <input type="text" id="input_8_postal" name="postal" class="form-textbox form-address-postal" autocomplete="postal-code" size="10" value="" data-component="zip" aria-labelledby="label_8 sublabel_8_postal" />
                                            <label class="form-sub-label" for="input_8_postal" id="sublabel_8_postal" style="min-height:13px"> Postal / Zip Code </label>
                                        </span>
                                    </td>
                                    <td>
                                        <span class="form-sub-label-container" style="vertical-align:top">
                                            <select class="form-dropdown form-address-country noTranslate" name="country" id="input_8_country" data-component="country" aria-labelledby="label_8 sublabel_8_country" autocomplete="country">
                                                <option value=""> Please Select </option>
                                                <option value="United States"> United States </option>
                                                <option value="Afghanistan"> Afghanistan </option>
                                                <option value="Albania"> Albania </option>
                                                <option value="Algeria"> Algeria </option>
                                                <option value="American Samoa"> American Samoa </option>
                                                <option value="Andorra"> Andorra </option>
                                                <option value="Angola"> Angola </option>
                                                <option value="Anguilla"> Anguilla </option>
                                                <option value="Antigua and Barbuda"> Antigua and Barbuda </option>
                                                <option value="Argentina"> Argentina </option>
                                                <option value="Armenia"> Armenia </option>
                                                <option value="Aruba"> Aruba </option>
                                                <option value="Australia"> Australia </option>
                                                <option value="Austria"> Austria </option>
                                                <option value="Azerbaijan"> Azerbaijan </option>
                                                <option value="The Bahamas"> The Bahamas </option>
                                                <option value="Bahrain"> Bahrain </option>
                                                <option value="Bangladesh"> Bangladesh </option>
                                                <option value="Barbados"> Barbados </option>
                                                <option value="Belarus"> Belarus </option>
                                                <option value="Belgium"> Belgium </option>
                                                <option value="Belize"> Belize </option>
                                                <option value="Benin"> Benin </option>
                                                <option value="Bermuda"> Bermuda </option>
                                                <option value="Bhutan"> Bhutan </option>
                                                <option value="Bolivia"> Bolivia </option>
                                                <option value="Bosnia and Herzegovina"> Bosnia and Herzegovina </option>
                                                <option value="Botswana"> Botswana </option>
                                                <option value="Brazil"> Brazil </option>
                                                <option value="Brunei"> Brunei </option>
                                                <option value="Bulgaria"> Bulgaria </option>
                                                <option value="Burkina Faso"> Burkina Faso </option>
                                                <option value="Burundi"> Burundi </option>
                                                <option value="Cambodia"> Cambodia </option>
                                                <option value="Cameroon"> Cameroon </option>
                                                <option value="Canada"> Canada </option>
                                                <option value="Cape Verde"> Cape Verde </option>
                                                <option value="Cayman Islands"> Cayman Islands </option>
                                                <option value="Central African Republic"> Central African Republic </option>
                                                <option value="Chad"> Chad </option>
                                                <option value="Chile"> Chile </option>
                                                <option value="China"> China </option>
                                                <option value="Christmas Island"> Christmas Island </option>
                                                <option value="Cocos (Keeling) Islands"> Cocos (Keeling) Islands </option>
                                                <option value="Colombia"> Colombia </option>
                                                <option value="Comoros"> Comoros </option>
                                                <option value="Congo"> Congo </option>
                                                <option value="Cook Islands"> Cook Islands </option>
                                                <option value="Costa Rica"> Costa Rica </option>
                                                <option value="Cote d&#x27;Ivoire"> Cote d&#x27;Ivoire </option>
                                                <option value="Croatia"> Croatia </option>
                                                <option value="Cuba"> Cuba </option>
                                                <option value="Cyprus"> Cyprus </option>
                                                <option value="Czech Republic"> Czech Republic </option>
                                                <option value="Democratic Republic of the Congo"> Democratic Republic of the Congo </option>
                                                <option value="Denmark"> Denmark </option>
                                                <option value="Djibouti"> Djibouti </option>
                                                <option value="Dominica"> Dominica </option>
                                                <option value="Dominican Republic"> Dominican Republic </option>
                                                <option value="Ecuador"> Ecuador </option>
                                                <option value="Egypt"> Egypt </option>
                                                <option value="El Salvador"> El Salvador </option>
                                                <option value="Equatorial Guinea"> Equatorial Guinea </option>
                                                <option value="Eritrea"> Eritrea </option>
                                                <option value="Estonia"> Estonia </option>
                                                <option value="Ethiopia"> Ethiopia </option>
                                                <option value="Falkland Islands"> Falkland Islands </option>
                                                <option value="Faroe Islands"> Faroe Islands </option>
                                                <option value="Fiji"> Fiji </option>
                                                <option value="Finland"> Finland </option>
                                                <option value="France"> France </option>
                                                <option value="French Polynesia"> French Polynesia </option>
                                                <option value="Gabon"> Gabon </option>
                                                <option value="The Gambia"> The Gambia </option>
                                                <option value="Georgia"> Georgia </option>
                                                <option value="Germany"> Germany </option>
                                                <option value="Ghana"> Ghana </option>
                                                <option value="Gibraltar"> Gibraltar </option>
                                                <option value="Greece"> Greece </option>
                                                <option value="Greenland"> Greenland </option>
                                                <option value="Grenada"> Grenada </option>
                                                <option value="Guadeloupe"> Guadeloupe </option>
                                                <option value="Guam"> Guam </option>
                                                <option value="Guatemala"> Guatemala </option>
                                                <option value="Guernsey"> Guernsey </option>
                                                <option value="Guinea"> Guinea </option>
                                                <option value="Guinea-Bissau"> Guinea-Bissau </option>
                                                <option value="Guyana"> Guyana </option>
                                                <option value="Haiti"> Haiti </option>
                                                <option value="Honduras"> Honduras </option>
                                                <option value="Hong Kong"> Hong Kong </option>
                                                <option value="Hungary"> Hungary </option>
                                                <option value="Iceland"> Iceland </option>
                                                <option value="India"> India </option>
                                                <option value="Indonesia"> Indonesia </option>
                                                <option value="Iran"> Iran </option>
                                                <option value="Iraq"> Iraq </option>
                                                <option value="Ireland"> Ireland </option>
                                                <option value="Israel"> Israel </option>
                                                <option value="Italy"> Italy </option>
                                                <option value="Jamaica"> Jamaica </option>
                                                <option value="Japan"> Japan </option>
                                                <option value="Jersey"> Jersey </option>
                                                <option value="Jordan"> Jordan </option>
                                                <option value="Kazakhstan"> Kazakhstan </option>
                                                <option value="Kenya"> Kenya </option>
                                                <option value="Kiribati"> Kiribati </option>
                                                <option value="North Korea"> North Korea </option>
                                                <option value="South Korea"> South Korea </option>
                                                <option value="Kosovo"> Kosovo </option>
                                                <option value="Kuwait"> Kuwait </option>
                                                <option value="Kyrgyzstan"> Kyrgyzstan </option>
                                                <option value="Laos"> Laos </option>
                                                <option value="Latvia"> Latvia </option>
                                                <option value="Lebanon"> Lebanon </option>
                                                <option value="Lesotho"> Lesotho </option>
                                                <option value="Liberia"> Liberia </option>
                                                <option value="Libya"> Libya </option>
                                                <option value="Liechtenstein"> Liechtenstein </option>
                                                <option value="Lithuania"> Lithuania </option>
                                                <option value="Luxembourg"> Luxembourg </option>
                                                <option value="Macau"> Macau </option>
                                                <option value="Macedonia"> Macedonia </option>
                                                <option value="Madagascar"> Madagascar </option>
                                                <option value="Malawi"> Malawi </option>
                                                <option value="Malaysia"> Malaysia </option>
                                                <option value="Maldives"> Maldives </option>
                                                <option value="Mali"> Mali </option>
                                                <option value="Malta"> Malta </option>
                                                <option value="Marshall Islands"> Marshall Islands </option>
                                                <option value="Martinique"> Martinique </option>
                                                <option value="Mauritania"> Mauritania </option>
                                                <option value="Mauritius"> Mauritius </option>
                                                <option value="Mayotte"> Mayotte </option>
                                                <option value="Mexico"> Mexico </option>
                                                <option value="Micronesia"> Micronesia </option>
                                                <option value="Moldova"> Moldova </option>
                                                <option value="Monaco"> Monaco </option>
                                                <option value="Mongolia"> Mongolia </option>
                                                <option value="Montenegro"> Montenegro </option>
                                                <option value="Montserrat"> Montserrat </option>
                                                <option value="Morocco"> Morocco </option>
                                                <option value="Mozambique"> Mozambique </option>
                                                <option value="Myanmar"> Myanmar </option>
                                                <option value="Nagorno-Karabakh"> Nagorno-Karabakh </option>
                                                <option value="Namibia"> Namibia </option>
                                                <option value="Nauru"> Nauru </option>
                                                <option value="Nepal"> Nepal </option>
                                                <option value="Netherlands"> Netherlands </option>
                                                <option value="Netherlands Antilles"> Netherlands Antilles </option>
                                                <option value="New Caledonia"> New Caledonia </option>
                                                <option value="New Zealand"> New Zealand </option>
                                                <option value="Nicaragua"> Nicaragua </option>
                                                <option value="Niger"> Niger </option>
                                                <option value="Nigeria"> Nigeria </option>
                                                <option value="Niue"> Niue </option>
                                                <option value="Norfolk Island"> Norfolk Island </option>
                                                <option value="Turkish Republic of Northern Cyprus"> Turkish Republic of Northern Cyprus </option>
                                                <option value="Northern Mariana"> Northern Mariana </option>
                                                <option value="Norway"> Norway </option>
                                                <option value="Oman"> Oman </option>
                                                <option value="Pakistan"> Pakistan </option>
                                                <option value="Palau"> Palau </option>
                                                <option value="Palestine"> Palestine </option>
                                                <option value="Panama"> Panama </option>
                                                <option value="Papua New Guinea"> Papua New Guinea </option>
                                                <option value="Paraguay"> Paraguay </option>
                                                <option value="Peru"> Peru </option>
                                                <option value="Philippines"> Philippines </option>
                                                <option value="Pitcairn Islands"> Pitcairn Islands </option>
                                                <option value="Poland"> Poland </option>
                                                <option value="Portugal"> Portugal </option>
                                                <option value="Puerto Rico"> Puerto Rico </option>
                                                <option value="Qatar"> Qatar </option>
                                                <option value="Republic of the Congo"> Republic of the Congo </option>
                                                <option value="Romania"> Romania </option>
                                                <option value="Russia"> Russia </option>
                                                <option value="Rwanda"> Rwanda </option>
                                                <option value="Saint Barthelemy"> Saint Barthelemy </option>
                                                <option value="Saint Helena"> Saint Helena </option>
                                                <option value="Saint Kitts and Nevis"> Saint Kitts and Nevis </option>
                                                <option value="Saint Lucia"> Saint Lucia </option>
                                                <option value="Saint Martin"> Saint Martin </option>
                                                <option value="Saint Pierre and Miquelon"> Saint Pierre and Miquelon </option>
                                                <option value="Saint Vincent and the Grenadines"> Saint Vincent and the Grenadines </option>
                                                <option value="Samoa"> Samoa </option>
                                                <option value="San Marino"> San Marino </option>
                                                <option value="Sao Tome and Principe"> Sao Tome and Principe </option>
                                                <option value="Saudi Arabia"> Saudi Arabia </option>
                                                <option value="Senegal"> Senegal </option>
                                                <option value="Serbia"> Serbia </option>
                                                <option value="Seychelles"> Seychelles </option>
                                                <option value="Sierra Leone"> Sierra Leone </option>
                                                <option value="Singapore"> Singapore </option>
                                                <option value="Slovakia"> Slovakia </option>
                                                <option value="Slovenia"> Slovenia </option>
                                                <option value="Solomon Islands"> Solomon Islands </option>
                                                <option value="Somalia"> Somalia </option>
                                                <option value="Somaliland"> Somaliland </option>
                                                <option value="South Africa"> South Africa </option>
                                                <option value="South Ossetia"> South Ossetia </option>
                                                <option value="South Sudan"> South Sudan </option>
                                                <option value="Spain"> Spain </option>
                                                <option value="Sri Lanka"> Sri Lanka </option>
                                                <option value="Sudan"> Sudan </option>
                                                <option value="Suriname"> Suriname </option>
                                                <option value="Svalbard"> Svalbard </option>
                                                <option value="eSwatini"> eSwatini </option>
                                                <option value="Sweden"> Sweden </option>
                                                <option value="Switzerland"> Switzerland </option>
                                                <option value="Syria"> Syria </option>
                                                <option value="Taiwan"> Taiwan </option>
                                                <option value="Tajikistan"> Tajikistan </option>
                                                <option value="Tanzania"> Tanzania </option>
                                                <option value="Thailand"> Thailand </option>
                                                <option value="Timor-Leste"> Timor-Leste </option>
                                                <option value="Togo"> Togo </option>
                                                <option value="Tokelau"> Tokelau </option>
                                                <option value="Tonga"> Tonga </option>
                                                <option value="Transnistria Pridnestrovie"> Transnistria Pridnestrovie </option>
                                                <option value="Trinidad and Tobago"> Trinidad and Tobago </option>
                                                <option value="Tristan da Cunha"> Tristan da Cunha </option>
                                                <option value="Tunisia"> Tunisia </option>
                                                <option value="Turkey"> Turkey </option>
                                                <option value="Turkmenistan"> Turkmenistan </option>
                                                <option value="Turks and Caicos Islands"> Turks and Caicos Islands </option>
                                                <option value="Tuvalu"> Tuvalu </option>
                                                <option value="Uganda"> Uganda </option>
                                                <option value="Ukraine"> Ukraine </option>
                                                <option value="United Arab Emirates"> United Arab Emirates </option>
                                                <option value="United Kingdom"> United Kingdom </option>
                                                <option value="Uruguay"> Uruguay </option>
                                                <option value="Uzbekistan"> Uzbekistan </option>
                                                <option value="Vanuatu"> Vanuatu </option>
                                                <option value="Vatican City"> Vatican City </option>
                                                <option value="Venezuela"> Venezuela </option>
                                                <option value="Vietnam"> Vietnam </option>
                                                <option value="British Virgin Islands"> British Virgin Islands </option>
                                                <option value="Isle of Man"> Isle of Man </option>
                                                <option value="US Virgin Islands"> US Virgin Islands </option>
                                                <option value="Wallis and Futuna"> Wallis and Futuna </option>
                                                <option value="Western Sahara"> Western Sahara </option>
                                                <option value="Yemen"> Yemen </option>
                                                <option value="Zambia"> Zambia </option>
                                                <option value="Zimbabwe"> Zimbabwe </option>
                                                <option value="other"> Other </option>
                                            </select>
                                            <label class="form-sub-label" for="input_8_country" id="sublabel_8_country" style="min-height:13px"> Country </label>
                                        </span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </li>
                <li class="form-line" data-type="control_text" id="id_11">
                    <div id="cid_11" class="form-input-wide">
                        <div id="text_11" class="form-html" data-component="text">
                            <h2> In Case of Emergency </h2>
                            <b>Contact 1: </b>
                        </div>
                    </div>
                </li>
                <li class="form-line" data-type="control_fullname" id="id_12">
                    <label class="form-label form-label-left form-label-auto" id="label_12" for="first_12"> Name
                        <span class="form-required">
                            *
                        </span>
                    </label>
                    <div id="cid_12" class="form-input">
                        <div data-wrapper-react="true">
                            <span class="form-sub-label-container" style="vertical-align:top">
                                <input type="text" id="first_12" name="e_firstname" class="form-textbox" size="10" value="" data-component="first" aria-labelledby="label_12 sublabel_12_first" />
                                <label class="form-sub-label" for="first_12" id="sublabel_12_first" style="min-height:13px"> First Name </label>
                            </span>
                            <span class="form-sub-label-container" style="vertical-align:top">
                                <input type="text" id="last_12" name="e_lastname" class="form-textbox" size="15" value="" data-component="last" aria-labelledby="label_12 sublabel_12_last" />
                                <label class="form-sub-label" for="last_12" id="sublabel_12_last" style="min-height:13px"> Last Name </label>
                            </span>
                        </div>
                    </div>
                </li>
                <li class="form-line" data-type="control_fullname" id="id_5">
                    <label class="form-label form-label-left form-label-auto" id="label_5" for="first_5">
                        Relationship:
                        <i class="fa fa-envelope" style="font-size:15px"></i>
                    </label>
                    <div id="cid_5" class="form-input">
                        <div data-wrapper-react="true">
                            <span class="form-sub-label-container" style="vertical-align:top">
                                <input type="text" id="first_5" name="relationship" class="form-textbox" size="25" value="" data-component="first" aria-labelledby="label_5 sublabel_5_first" />
                                <label class="form-sub-label" for="first_5" id="sublabel_5_first" style="min-height:15px"> Relationship With Patient </label>
                            </span>
                        </div>
                    </div>
                </li>
                <li class="form-line" data-type="control_phone" id="id_13">
                    <label class="form-label form-label-left form-label-auto" id="label_143" for="input_15_area"> Phone Number 1
                        <span class="form-required">
                            *
                        </span>
                    </label>
                    <div id="cid_15" class="form-input">
                        <div data-wrapper-react="true">
                            <span class="form-sub-label-container" style="vertical-align:top">
                                <input type="tel" id="input_13_area" name="e_areacode" class="form-textbox" size="6" value="" data-component="areaCode" aria-labelledby="label_15 sublabel_15_area" />
                                <span class="phone-separate" aria-hidden="true">
                                    -
                                </span>
                                <label class="form-sub-label" for="input_13_area" id="sublabel_13_area" style="min-height:13px"> Area Code </label>
                            </span>
                            <span class="form-sub-label-container" style="vertical-align:top">
                                <input type="tel" id="e_phonenumbe" name="e_phonenumber" class="form-textbox" size="12" value="" data-component="phone" aria-labelledby="label_15 sublabel_15_phone" />
                                <label class="form-sub-label" for="input_13_phone" id="sublabel_13_phone" style="min-height:13px"> Phone Number 1 </label>
                            </span>
                        </div>
                    </div>
                </li>
                <li class="form-line" data-type="control_phone" id="id_14">
                    <label class="form-label form-label-left form-label-auto" id="label_15" for="input_15_area"> Phone Number 2 </label>
                    <div id="cid_15" class="form-input">
                        <div data-wrapper-react="true">
                            <span class="form-sub-label-container" style="vertical-align:top">
                                <input type="tel" id="input_14_area" name="e_areacode2" class="form-textbox" size="6" value="" data-component="areaCode" aria-labelledby="label_15 sublabel_15_area" />
                                <span class="phone-separate" aria-hidden="true">
                                    -
                                </span>
                                <label class="form-sub-label" for="input_14_area" id="sublabel_14_area" style="min-height:13px"> Area Code </label>
                            </span>
                            <span class="form-sub-label-container" style="vertical-align:top">
                                <input type="tel" id="input_14_phone" name="e_phonenumber2" class="form-textbox" size="12" value="" data-component="phone" aria-labelledby="label_15 sublabel_15_phone" />
                                <label class="form-sub-label" for="input_14_phone" id="sublabel_14_phone" style="min-height:13px"> Phone Number 2 </label>
                            </span>
                        </div>
                    </div>
                </li>
                <li class="form-line" data-type="control_text" id="id_16">
                    <div id="cid_16" class="form-input-wide">
                        <div id="text_16" class="form-html" data-component="text">
                            <b>Contact 2: </b>
                        </div>
                    </div>
                </li>
                <li class="form-line" data-type="control_fullname" id="id_12">
                    <label class="form-label form-label-left form-label-auto" id="label_12" for="first_12"> Name
                        <span class="form-required">
                            *
                        </span>
                    </label>
                    <div id="cid_12" class="form-input">
                        <div data-wrapper-react="true">
                            <span class="form-sub-label-container" style="vertical-align:top">
                                <input type="text" id="first_12" name="e2_firstname" class="form-textbox" size="10" value="" data-component="first" aria-labelledby="label_12 sublabel_12_first" />
                                <label class="form-sub-label" for="first_12" id="sublabel_12_first" style="min-height:13px"> First Name </label>
                            </span>
                            <span class="form-sub-label-container" style="vertical-align:top">
                                <input type="text" id="last_12" name="e2_lastname" class="form-textbox" size="15" value="" data-component="last" aria-labelledby="label_12 sublabel_12_last" />
                                <label class="form-sub-label" for="last_12" id="sublabel_12_last" style="min-height:13px"> Last Name </label>
                            </span>
                        </div>
                    </div>
                </li>
                <li class="form-line" data-type="control_fullname" id="id_5">
                    <label class="form-label form-label-left form-label-auto" id="label_5" for="first_5">
                        Relationship:
                        <i class="fa fa-envelope" style="font-size:15px"></i>
                    </label>
                    <div id="cid_5" class="form-input">
                        <div data-wrapper-react="true">
                            <span class="form-sub-label-container" style="vertical-align:top">
                                <input type="text" id="first_5" name="e2_relationship" class="form-textbox" size="25" value="" data-component="first" aria-labelledby="label_5 sublabel_5_first" />
                                <label class="form-sub-label" for="first_5" id="sublabel_5_first" style="min-height:15px"> Relationship With Patient </label>
                            </span>
                        </div>
                    </div>
                </li>
                <li class="form-line" data-type="control_phone" id="id_13">
                    <label class="form-label form-label-left form-label-auto" id="label_143" for=" input_15_area"> Phone Number 1
                        <span class="form-required">
                            *
                        </span>
                    </label>
                    <div id="cid_15" class="form-input">
                        <div data-wrapper-react="true">
                            <span class="form-sub-label-container" style="vertical-align:top">
                                <input type="tel" id="input_13_area" name="e2_areacode" class="form-textbox" size="6" value="" data-component="areaCode" aria-labelledby="label_15 sublabel_15_area" />
                                <span class="phone-separate" aria-hidden="true">
                                    -
                                </span>
                                <label class="form-sub-label" for="input_13_area" id="sublabel_13_area" style="min-height:13px"> Area Code </label>
                            </span>
                            <span class="form-sub-label-container" style="vertical-align:top">
                                <input type="tel" id="input_13_phone" name="e2_phonenumber" class="form-textbox" size="12" value="" data-component="phone" aria-labelledby="label_15 sublabel_15_phone" />
                                <label class="form-sub-label" for="input_13_phone" id="sublabel_13_phone" style="min-height:13px"> Phone Number 1 </label>
                            </span>
                        </div>
                    </div>
                </li>
                <li class="form-line" data-type="control_phone" id="id_14">
                    <label class="form-label form-label-left form-label-auto" id="label_15" for="input_15_area"> Phone Number 2 </label>
                    <div id="cid_15" class="form-input">
                        <div data-wrapper-react="true">
                            <span class="form-sub-label-container" style="vertical-align:top">
                                <input type="tel" id="input_14_area" name="e2_areacode2" class="form-textbox" size="6" value="" data-component="areaCode" aria-labelledby="label_15 sublabel_15_area" />
                                <span class="phone-separate" aria-hidden="true">
                                    -
                                </span>
                                <label class="form-sub-label" for="input_14_area" id="sublabel_14_area" style="min-height:13px"> Area Code </label>
                            </span>
                            <span class="form-sub-label-container" style="vertical-align:top">
                                <input type="tel" id="input_14_phone" name="e2_phonenumber2" class="form-textbox" size="12" value="" data-component="phone" aria-labelledby="label_15 sublabel_15_phone" />
                                <label class="form-sub-label" for="input_14_phone" id="sublabel_14_phone" style="min-height:13px"> Phone Number 2 </label>
                            </span>
                        </div>
                    </div>
                </li>
                <li class="form-line" data-type="control_text" id="id_16">
                    <div id="cid_16" class="form-input-wide">
                        <div id="text_16" class="form-html" data-component="text">
                            <h2>
                                General Medical History
                            </h2>
                        </div>
                    </div>
                </li>
                <li class="form-line jf-required" data-type="control_radio" id="id_17">
                    <label class="form-label form-label-top" id="label_17" for="input_17">
                        Have you had the Hepatitis B vaccination
                        <span class="form-required">
                            *
                        </span>
                    </label>
                    <div id="cid_17" class="form-input-wide jf-required">
                        <div class="form-single-column" role="group" aria-labelledby="label_17" data-component="radio">
                            <span class="form-radio-item" style="clear:left">
                                <span class="dragger-item">
                                </span>
                                <input type="radio" class="form-radio validate[required]" id="input_17_0" name="hepatitis" value="Yes" required="" />
                                <label id="label_input_17_0" for="input_17_0"> Yes </label>
                            </span>
                            <span class="form-radio-item" style="clear:left">
                                <span class="dragger-item">
                                </span>
                                <input type="radio" class="form-radio validate[required]" id="input_17_1" name="hepatitis" value="No" required="" />
                                <label id="label_input_17_1" for="input_17_1"> No </label>
                            </span>
                        </div>
                    </div>
                </li>

                <div id="cid_18" class="form-input-wide">
                    <div id="text_18" class="form-html" data-component="text">
                    </div>
                </div>

                <li class="form-line form-line-column form-col-1" data-type="control_radio" id="id_19">
                    <label class="form-label form-label-left" id="label_19" for="input_19"> Chicken Pox: </label>
                    <div id="cid_19" class="form-input">
                        <div class="form-single-column" role="group" aria-labelledby="label_19" data-component="radio">
                            <span class="form-radio-item" style="clear:left">
                                <span class="dragger-item">
                                </span>
                                <input type="radio" class="form-radio" id="input_19_0" name="chickenpox" value="IMMUNE" />
                                <label id="label_input_19_0" for="input_19_0"> IMMUNE </label>
                            </span>
                            <span class="form-radio-item" style="clear:left">
                                <span class="dragger-item">
                                </span>
                                <input type="radio" class="form-radio" id="input_19_1" name="chickenpox" value="NOT IMMUNE" />
                                <label id="label_input_19_1" for="input_19_1"> NOT IMMUNE </label>
                            </span>
                        </div>
                    </div>
                </li>
                <li class="form-line form-line-column form-col-2" data-type="control_radio" id="id_20">
                    <label class="form-label form-label-left" id="label_20" for="input_20"> Measles: </label>
                    <div id="cid_20" class="form-input">
                        <div class="form-single-column" role="group" aria-labelledby="label_20" data-component="radio">
                            <span class="form-radio-item" style="clear:left">
                                <span class="dragger-item">
                                </span>
                                <input type="radio" class="form-radio" id="input_20_0" name="measles" value="IMMUNE" />
                                <label id="label_input_20_0" for="input_20_0"> IMMUNE </label>
                            </span>
                            <span class="form-radio-item" style="clear:left">
                                <span class="dragger-item">
                                </span>
                                <input type="radio" class="form-radio" id="input_20_1" name="measles" value="NOT IMMUNE" />
                                <label id="label_input_20_1" for="input_20_1"> NOT IMMUNE </label>
                            </span>
                        </div>
                    </div>
                </li>
                <li class="form-line" data-type="control_textarea" id="id_21">
                    <label class="form-label form-label-top" id="label_21" for="input_21"> Significant Medical History (surgery, injuries, serious illness): </label>
                    <div id="cid_21" class="form-input-wide">
                        <textarea id="input_21" class="form-textarea" value="" name="significantmedical" cols="40" rows="3" data-component="textarea" aria-labelledby="label_21"></textarea>
                    </div>
                </li>

                </li>
                <li class="form-line" data-type="control_textarea" id="id_23">
                    <label class="form-label form-label-top" id="label_23" for="input_23"> Health Maintenance Screening Test History: </label>
                    <div id="cid_23" class="form-input-wide">

                        <table id="input_health" style="width:100%">
                            <tr>
                                <th>Cholestrol</th>
                                <th><input id="HealthDate" type="date" value="" name="cdate" onload="getDate()" /></th>
                                <th>Details: <input id="HealthDetails" name="c_details" type="text" /></th>
                                <th>
                                    Result:
                                    <input type="radio" class="form-radio" id="input_19_0" name="c_results" value="+" />
                                    <label id="label_input_19_0" for="input_19_0"> + </label>
                                    <input type="radio" class="form-radio" id="input_19_1" name="c_results" value="-" />
                                    <label id="label_input_19_1" for="input_19_1"> - </label>
                                </th>
                            </tr>
                            <tr>
                                <th>Blood Pressure</th>
                                <th><input id="HealthDate" type="date" name="bpdate" value="" onload="getDate()" /></th>
                                <th>Details: <input id="HealthDetails" name="bp_details" value="" type="text" /></th>
                                <th>
                                    Result:
                                    <input type="radio" class="form-radio" id="input_19_0" name="bp_result" value="+" />
                                    <label id="label_input_19_0" for="input_19_0"> + </label>
                                    <input type="radio" class="form-radio" id="input_19_1" name="bp_result" value="-" />
                                    <label id="label_input_19_1" for="input_19_1"> - </label>
                                </th>
                            </tr>
                            <tr>
                                <th>Heart Disease</th>
                                <th><input id="HealthDate" type="date" name="hdate" value="" onload="getDate()" /></th>
                                <th>Details: <input id="HealthDetails" name="h_detaiils" type="text" /></th>
                                <th>
                                    Result:
                                    <input type="radio" class="form-radio" id="input_19_0" name="h_result" value="+" />
                                    <label id="label_input_19_0" for="input_19_0"> + </label>
                                    <input type="radio" class="form-radio" id="input_19_1" name="h_result" value="-" />
                                    <label id="label_input_19_1" for="input_19_1"> - </label>
                                </th>
                            </tr>
                        </table>


                    </div>
                </li>
                <li class="form-line" data-type="control_textarea" id="id_24">
                    <label class="form-label form-label-top" id="label_24" for="input_24"> Vaccination History: </label>
                    <div id="cid_24" class="form-input-wide">
                        <textarea id="input_24" class="form-textarea" name="vaccination_history" cols="40" rows="3" data-component="textarea" aria-labelledby="label_24"></textarea>
                    </div>
                </li>
                </li>
                <div id="cid_34" class="form-input-wide">
                    <div id="text_34" class="form-html" data-component="text">
                        <h2>
                            Physical Examination
                        </h2>
                    </div>
                </div>
                </li>
                <li class="form-line form-line-column form-col-1" data-type="control_textbox" id="id_35">
                    <label class="form-label form-label-left" id="label_35" for="input_35"> Height: </label>
                    <div id="cid_35" class="form-input">
                        <input type="text" id="input_35" name="height" data-type="input-textbox" class="form-textbox validate[Numeric]" size="20" value="" placeholder=" " data-component="textbox" aria-labelledby="label_35" />
                    </div>
                </li>
                <li class="form-line form-line-column form-col-2" data-type="control_textbox" id="id_36">
                    <label class="form-label form-label-left" id="label_36" for="input_36"> Weight: </label>
                    <div id="cid_36" class="form-input">
                        <input type="text" id="input_36" name="weight" data-type="input-textbox" class="form-textbox validate[Numeric]" size="20" value="" placeholder=" " data-component="textbox" aria-labelledby="label_36" />
                    </div>
                <li class="form-line" data-type="control_textarea" id="id_24">
                    <label class="form-label form-label-top" id="label_24" for="input_24"> Other Health Issues: </label>
                    <div id="cid_24" class="form-input-wide">
                        <textarea id="input_24" class="form-textarea" name="other_issues" cols="40" rows="5" data-component="textarea" aria-labelledby="label_24"></textarea>
                    </div>
                </li>
                </li>
                <li class="form-line" data-type="control_button" id="id_2">
                    <div id="cid_2" class="form-input-wide">
                        <div style="margin-left:156px" class="form-buttons-wrapper ">
                            <button id="input_2" type="submit" name="submit" class="form-submit-button" data-component="button">
                                Submit Form
                            </button>
                        </div>
                    </div>
                </li>
                <li style="display:none">
                    Should be Empty:
                    <input type="text" name="website" value="" />
                </li>
            </ul>
        </div>
        <script>
            JotForm.showJotFormPowered = "new_footer";

        </script>
        <input type="hidden" id="simple_spc" name="simple_spc" value="92766146676370" />
        <script type="text/javascript">
            document.getElementById("si" + "mple" + "_spc").value = "92766146676370-92766146676370";

        </script>
        <div class="formFooter-heightMask">
        </div>
        <div class="formFooter f6">
            <div class="formFooter-rightSide">

            </div>
        </div>
    </form>








</div>

</div>

<?php
	include('includes/footer.php');
?>
