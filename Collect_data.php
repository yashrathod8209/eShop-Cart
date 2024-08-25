<?php

session_start();
$connection = new PDO("mysql:host=localhost;dbname=auth_system", "root", "");
// $connection = mysqli_connect('localhost', 'root', '', 'auth_system');

$Name = $_POST['Name'];
$Password = $_POST['Password'];

$query = "SELECT `Id` FROM `Users` WHERE `Name`=(?) AND `Password`=(?) ";
$params=[$Name,$Password];
$statement=$connection->prepare($query);
$row=$statement->execute($params);
$User=$statement->fetch(PDO::FETCH_ASSOC);

print_r($User);

// STORE IN SESSION
$_SESSION['UserId']=$User;
// print_r($_SESSION['UserId']);


if ($row > 0)
    return header('location:./product./product.php');
 else
     echo "INVELID USERNAME OR PASSWORD";
 


############################################################################################################
// insert.php

// $Name = $_POST['Name'];
// $Password = $_POST['Password'];

// $query = "INSERT INTO Users(`Name`,`Password`)VALUE(?,?)";
// $params = [$Name, $Password];
// $statement = $connection->prepare($query);
// $row = $statement->execute($params);



// if ($row > 0)
//     return header('location:./product./product.php');
// else
//     echo "Failed to Insert Data";
// 
?>