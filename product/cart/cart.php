<?php

session_start();
// print_r($_SESSION[`UserId`]);

$UserId=$_SESSION[`UserId`];
// print_r($UserId['Id']);

include "../Connection.php";
// $connection=new PDO("mysql:host=localhost;dbname=auth_system","root","");

$query = "SELECT * FROM `cart` WHERE `UserId`=(?)";
$Params=[$UserId['Id']];
$statement=$connection->prepare($query);
$row=$statement->execute($Params);
$Products=$statement->fetchAll(PDO::FETCH_ASSOC);
// print_r($Purchase);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            align-items: center;
        }
        table{
            align-items: center;
        }
    </style>
</head>
<body>
    <h1>SELECTED PRODUCTS</h1>
    <table border="1">
        <thead>
            <th>Product Name</th>
            <th>Product Prise</th>
            <th>Delete</th>
        </thead>
    <tbody>
        <?php foreach ($Products as $Product)  {?>
            <tr>
                <td><?php echo $Product['ProductName'] ?></td>
                <td><?php echo $Product['ProductPrise'] ?></td>
                <td><a href="./Delete.php?Id=<?=$Product['Id']?>">Delete</a></td>
            </tr>
        <?php }?>
    </tbody>
    </table>    
</body>
</html>