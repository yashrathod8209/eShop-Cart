<?php

$ProductName=$_POST['ProductName'];
$ProductPrise=$_POST['ProductPrise'];

$connection=new PDO("mysql:host=localhost;dbname=auth_system","root","");
$query="INSERT INTO Products(`ProductName`,`ProductPrise`)VALUE(?,?)";
$params=[$ProductName,$ProductPrise];
$statement=$connection->prepare($query);
$row=$statement->execute($params);


if($row>0)
    return header('location:./index.php');
else
    echo "Failed to Insert Data";





?>