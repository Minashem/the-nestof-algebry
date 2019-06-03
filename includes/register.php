<?php
include 'db_connection.php';
$conn = OpenCon();

// initializing variables
$username = "";
$password    = "";
$errors = array(); 


// REGISTER USER
if (isset($_POST['register_form'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($conn, $_POST['username']);
  $password = mysqli_real_escape_string($conn, $_POST['password']);
  $name = mysqli_real_escape_string($conn, $_POST['name']);
  $lastName = mysqli_real_escape_string($conn, $_POST['lastName']);
  $birthName = mysqli_real_escape_string($conn, $_POST['birthName']);
  $gender = mysqli_real_escape_string($conn, $_POST['gender']);
  $secQuestion = mysqli_real_escape_string($conn, $_POST['secQuestion']);
  $secAnswer = mysqli_real_escape_string($conn, $_POST['secAnswer']);

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
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
//   if (count($errors) == 0) {
//   	$password = md5($password_1);//encrypt the password before saving in the database

//   	$query = "INSERT INTO users (username, email, password) 
//   			  VALUES('$username', '$email', '$password')";
//   	mysqli_query($db, $query);
//   	$_SESSION['username'] = $username;
//   	$_SESSION['success'] = "You are now logged in";
//   	header('location: index.php');
//   }
}
