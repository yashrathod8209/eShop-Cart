<?php

$Id=$_GET['Id'];

include "../Connection.php";
// $connection=new PDO("mysql:host=localhost;dbname=auth_system","root","");

$query="DELETE FROM cart WHERE `Id`=(?)";
$params=[$Id];
$statement=$connection->prepare($query);
$row=$statement->execute($params);

if($row>0)
    return header('location:./cart.php');
else
    echo "Failed To Delete Data";

?>