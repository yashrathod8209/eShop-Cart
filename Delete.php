<?php

$Id=$_GET['Id'];

$connection=new PDO("mysql:host=localhost;dbname=auth_system","root","");

$query="DELETE FROM Users WHERE `Id`=(?)";
$params=[$Id];
$statement=$connection->prepare($query);
$row=$statement->execute($params);

if($row>0)
    return header('location:./index.php');
else
    echo "Failed To Delete Data";

?>