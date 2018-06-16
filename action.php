<?php
require_once('connection.php');

if(isset($_POST['enableContact'])){
   $userName =$_POST['request'];
  $userEmail =$_POST['email'];
     $request = $_POST['request'];
    
     $query="INSERT INTO contact (userName,userEmail,request) VALUES (:name,:email,:request)";
    $statement= $connection->prepare($query);
    $statement->execute(['name' =>$userName,'email' =>$userEmail, 'request' =>$request]);
    
   if($statement){
       echo '<div class="contactFinalMessage"><p></p></div>';
   }
    else {
        echo '<div class="contactFinalMessage"><h1 class="text text-danger">Failed to send...</h1></div>';
    }
    
}

$connection=null; 
 
?>