<?php
include 'db_connection.php';
session_start();
$conn = OpenCon();
$user = $_POST['user'];
$password = $_POST['password'];
  
$sql = "SELECT * FROM users WHERE username='$user' and password='$password'";
$result = $conn->query($sql) or die($conn->error);
 
if($row =  mysqli_fetch_array($result)){
    if($row['password'] == $password){
    $_SESSION['user'] = $user;
    $_SESSION['id'] = $row['password'];
    $_SESSION['response'] = true;
  
    if($_SESSION['response'] = true){
        header("location: /includes/dashboard.php");
    }
    }else{
        $_SESSION['response'] = false;
        header("location: /");
    exit();
    }
}else{
    $_SESSION['response'] = false;
    header("location: index.php");
exit();
}
?>




