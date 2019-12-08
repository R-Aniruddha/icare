<?php

if(!isset($_SESSION)){session_start();}
//session_start();

// initializing variables
$username = "";
$email    = "";
$errors = array(); 

// connect to the database
$conn = mysqli_connect('localhost', 'root', '', 'mydb');

// REGISTER USER
if (isset($_POST['register_btn'])) {
  register();
}

if (isset($_POST['login_user'])) {
  login();
}

function register() {
   global $conn, $errors;

  // receive all input values from the form
  $username = mysqli_real_escape_string($conn, $_POST['username']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $password_1 = mysqli_real_escape_string($conn, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($conn, $_POST['password_2']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "Passwords do not match");
  }

  // first check the database to make sure a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($conn, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {

    //encrypt the password before saving in the database
  	$password = md5($password_1);
  	$query = "INSERT INTO users (username, email, user_type, password) 
  			  VALUES('$username', '$email', 'patient', '$password')";
  	mysqli_query($conn, $query);
  	$_SESSION['user'] = $username;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: dashboard.php');
  }
}

function login() {
  global $conn, $username, $errors;
  $username = mysqli_real_escape_string($conn, $_POST['username']);
  $password = mysqli_real_escape_string($conn, $_POST['password']);

  if (empty($username)) {
  	array_push($errors, "Username is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	$password = md5($password);
  	$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $results = mysqli_query($conn, $query);
  
    if (mysqli_num_rows($results) == 1) { // user found
			// check if user is admin or user
			$logged_in_user = mysqli_fetch_assoc($results);
			if ($logged_in_user['user_type'] == 'admin') {
        $_SESSION['user'] = $logged_in_user;
        $_SESSION['success']  = "You are now logged in";
        header('location: admin-dashboard.php');		  
			}else if ($logged_in_user['user_type'] == 'user'){
				$_SESSION['user'] = $logged_in_user;
				$_SESSION['success']  = "You are now logged in";
				header('location: dashboard.php');
			} else {
        $_SESSION['user'] = $logged_in_user;
				$_SESSION['success']  = "You are now logged in";
				header('location: doctor-details.php');
      }
		}else {
			array_push($errors, "Wrong username/password combination");
    }
    
    /*
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['username'] = $username;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: dashboard.php');
  	}else {
  		array_push($errors, "Wrong username/password combination");
    }
    */

  }
}

//Logout
if (isset($_GET['logout'])) {
  session_destroy();
  unset($_SESSION['user']);
  header("location: login.php");
}

// Checks if user is the Admin
function isAdmin() {
	if (isset($_SESSION['user']) && $_SESSION['user']['user_type'] == 'admin' ) {
		return true;
	}else{
		return false;
	}
}

function isLoggedIn()
	{
		if (isset($_SESSION['user'])) {
			return true;
		}else{
			return false;
		}
	}

// return user array from their id
function getUserById($id){
  global $conn;
  $query = "SELECT * FROM users WHERE id=" . $id;
  $result = mysqli_query($conn, $query);

  $user = mysqli_fetch_assoc($result);
  return $user;
}

//Returns User Type - Doctor/Patient
function userType() {
  if (isset($_SESSION['user']) && $_SESSION['user']['user_type'] == 'doctor' ) {
		return 2;
	}else if(isset($_SESSION['user']) && $_SESSION['user']['user_type'] == 'patient' ) {
    return 3;
  }
}


?>