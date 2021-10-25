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
         
    $student_id =test_input($_POST['student_id']); 
    $payment_mode =test_input($_POST['payment_mode']);  
    $payment_type =test_input($_POST['payment_type']);  
    $payment_date =test_input($_POST['payment_date']);
    $user = $_SESSION['sess_user_id'];
    $today = date('Y-m-d');
  
    
        
        $sql = "INSERT INTO payment (student_id,payment_type_id,payment_mode,payment_date,user,data_time) "
                . "VALUES ('$student_id','$payment_type','$payment_mode','$payment_date','$user','$today')";
        if(mysqli_query($con, $sql)){
            echo "Payment Added Sucessfully";
        }
        else{
            echo "Payment Adding Failed";
        }
    }
    
    
    
    
    
    
    
    
    
    

         
