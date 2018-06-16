<?php

$serverName='localhost'; 
$userName = 'root';
$password = '';
 
try{
    $connection=new PDO("mysql:host=$serverName;dbname=risotteria",$userName,$password);
    
     $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
    echo $e->getMessage();
}
?>