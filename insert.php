<?php

$Name=$_POST['Name'];
$Password=$_POST['Password'];

include "./Connection.php";

$query="INSERT INTO Users(`Name`,`Password`) VALUE (?,?)";
$Params= [$Name,$Password];
$Statement= $connection->prepare($query);
$row= $Statement->execute($Params);

if($row>0)
    return header('location:./signin.php');
else
    echo "insert failed";

?>