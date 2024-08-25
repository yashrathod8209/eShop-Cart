<?php

$Id=$_POST['Id'];
$Name=$_POST['Name'];
$Password=$_POST['Password'];

$connection=new PDO("mysql:host=localhost;dbname=auth_system","root","");

$query="UPDATE `Users`SET `Name`=(?),`Password`=(?) WHERE `Id`=(?)";
$params=[$Name,$Password,$Id];
$statement=$connection->prepare($query);
$row=$statement->execute($params);

if($row>0)
    return header('location:./index.php');
else
    echo "Failed To Update";

?>