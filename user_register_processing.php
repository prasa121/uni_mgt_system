<?php
include 'header.php';
include 'connection.php';

$today = date('Y-m-d');


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
   
    
    
   function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
   }     
         
    $type =test_input($_POST['type']);  
    $fullname = strtoupper(test_input($_POST['fullname']));  
    $username =test_input($_POST['username']);  
    $password1 =test_input($_POST['password1']);  
    $password2 =test_input($_POST['password2']);
    
    $deactive = 1;
    if (isset($_POST['check_deactive'])) 
    $deactive = 0;  
    
    $sql = "SELECT COUNT(id) AS count FROM system_user WHERE username='$username'";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result);
    $user_count = $row['count'];
    
    if($user_count>0) {
    echo "User already registered.Use another one";
    }
    else if($password1!=$password2){
    echo "Password not Matching. Try Again";
    }
    else{
        
        $sql = "INSERT INTO system_user (name,username,password,user_type,stat,datatime) VALUES ('$fullname','$username','$password1','$type','$deactive','$today')";
        if(mysqli_query($con, $sql)){
            echo "User Registred Sucessfully";
        }
        else{
            echo "User Registration Failed";
        }
    }
    
    
    
    
    
    
    
    
    
    
}
         
