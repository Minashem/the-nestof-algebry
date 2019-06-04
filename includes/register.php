<?php
include 'db_connection.php';
$conn = OpenCon();

// initializing variables
$username = "";
$password = "";
$errors = array(); 

// REGISTER USER
if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['name']) && isset($_POST['lastName']) &&
    isset($_POST['birthDate']) && isset($_POST['secQuestion']) && isset($_POST['secAnswer'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($conn, $_POST['username']);
  $password = mysqli_real_escape_string($conn, $_POST['password']);
  $name = mysqli_real_escape_string($conn, $_POST['name']);
  $lastName = mysqli_real_escape_string($conn, $_POST['lastName']);
  $birthDate = mysqli_real_escape_string($conn, $_POST['birthDate']);
  $gender = mysqli_real_escape_string($conn, $_POST['gender']);
  $secQuestion = mysqli_real_escape_string($conn, $_POST['secQuestion']);
  $secAnswer = mysqli_real_escape_string($conn, $_POST['secAnswer']);
  
  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM users WHERE username='$username' LIMIT 1";
  $result = $conn->query($user_check_query) or die($conn->error);
  //$result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$query = "INSERT INTO users (username, password, firstname, lastname, birthdate, gender, security_question, answer)
              VALUES('$username', '$password', '$name', '$lastName', '$birthDate', '$gender', '$secQuestion', '$secAnswer')";
  	mysqli_query($conn, $query);
  	 $_SESSION['user'] = $username;
  	$_SESSION['response'] =true;
  	header('location: /');
  }
}
