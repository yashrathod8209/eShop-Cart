<?php
$Id=$_GET['Id'];

$connection=new PDO("mysql:host=localhost;dbname=auth_system","root","");

$query="SELECT * FROM `Users` WHERE `Id`=(?)";
$params=[$Id];
$statement=$connection->prepare($query);
$row=$statement->execute($params);
$User=$statement->fetch(PDO::FETCH_ASSOC);
// print_r($User);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Page</title>
    <style>
 body{
    margin: 0%;
    padding: 0%;
    display: flex;
    justify-content: center;
    align-items: center;
}

.container{
    width: 350px;
    padding: 30px;
    box-shadow: 0 2px 5px gray;
    margin-top: 75px;
}


input[type="text"]{
    width: 330px;
    padding: 10px ;
    margin-bottom: 10px ;
}

#submit{
    width: 100%;
    background-color: yellow;
    padding: 10px 20px;
    margin-top:  10px;
}
    </style>
</head>
<body>

<div class="container">
        <h1>Welcome back</h1>
        <form action="./Update.php" method="post">
            <input type="hidden" name="Id" value="<?=$User["Id"]?>"/>

            <label>Username </label>
            <input type="text" name="Name" value="<?=$User["Name"]?>"/>
        
            <label for="Password">Password </label>
            <input type="text" name="Password" value="<?=$User["Password"]?>"/>

            <input type="submit" value="submit" id="submit"/>
            
        </form>
    </div>
</body>
</html>