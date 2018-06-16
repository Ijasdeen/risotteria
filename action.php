<?php
 if($_SERVER['REQUEST_METHOD']=='POST'){
    require_once('connection.php');
    require_once('validation.php');
     
     //Sending contact information to db

if(isset($_POST['enableContact']) && isset($_POST['userName']) && isset($_POST['email']) && isset($_POST['request'])){
   $userName =test_input($_POST['userName']);
  $userEmail =test_input($_POST['email']);
     $request =test_input($_POST['request']);    
    
    if(!filter_var($userEmail,FILTER_VALIDATE_EMAIL)){
        header("location:contact.php");
    }
  
    $query="INSERT INTO contact (userName,userEmail,request) VALUES (:name,:email,:request)";
    $statement= $connection->prepare($query);
    $statement->execute(['name' =>$userName,'email' =>$userEmail, 'request' =>$request]);
    
   if($statement){
       echo '<div class="contactFinalMessage"><p class="text text-center text-success">Send successfully</p></div>';
   }
    else {
        echo '<div class="contactFinalMessage"><p class="text text-center text-dangers">Failed to send....</p></div>';
    }
    
} 
else {
    //If any of fields is unset, it would be redirected to index.php
    header("location:index.php");
}

$connection=null; 

}
?>