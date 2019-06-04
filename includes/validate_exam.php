<?php
include 'db_connection.php';
session_start();
$conn = OpenCon();
$errors= array();


$answer1= $_POST['respuesta1'];
$answer2= $_POST['respuesta2'];
$answer3= $_POST['respuesta3'];
$answer4= $_POST['respuesta4'];
$answer5= $_POST['respuesta5'];

$pre_result=$answer1+$answer2+$answer3+$answer4+$answer5;

if($pre_result==4){
    $exam_grade=80;
    $exam=true;
}elseif($pre_result==5){
    $exam_grade=100;
    $exam=true;
}

$user = $_SESSION['user'] != null ? $_SESSION['user'] : "";
if(!empty($user)){
    
    $user_check_query = "SELECT * FROM users WHERE username='$user' LIMIT 1";
    $result = $conn->query($user_check_query) or die($conn->error);

    $user2 = mysqli_fetch_assoc($result);
    
    if ($user2) { // if user exists
      if ($user2['username'] === $user) {
        array_push($errors, "Username already exists");
      }
    }

    if($exam){
        if(count($errors) == 0){
            $query = "INSERT INTO userhistory (username,examGrade1) VALUES('$user',$exam_grade')";
        }else{
            $query = "UPDATE userhistory SET examGrade1='$exam_grade' WHERE username='$user'";

        }
        mysqli_query($conn, $query);
        header('location: ../dashboard.php');
        if($SESSION['subject']<3){
            $SESSION['subject']++;  
        }else{
            $SESSION['subject']=1;  
        }      
    }
}
?>