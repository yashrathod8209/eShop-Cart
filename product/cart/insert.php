<?php

include "../Connection.php";
$ProductId = $_POST['ProductId'];
$UserId = $_POST['UserId'];
$ProductName = $_POST['ProductName'];
$ProductPrise = $_POST['ProductPrise'];

$query = "INSERT INTO cart(`ProductId`,`UserId`,`ProductName`,`ProductPrise`)VALUE(?,?,?,?)";
$params = [$ProductId,$UserId,$ProductName, $ProductPrise];
$statement = $connection->prepare($query);
$row = $statement->execute($params);
// print_r($row);


if ($row > 0)
    return header('location:../product.php');
else
    echo "Failed to Insert Data";
?>