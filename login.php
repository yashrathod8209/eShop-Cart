<?php

include "./Connection.php";
// $connection=new PDO("mysql:host=localhost;dbname=auth_system","root","");
$query="SELECT * FROM `Users`";
$statement=$connection->prepare($query);
$row=$statement->execute();
$Users=$statement->fetchAll(PDO::FETCH_ASSOC);
// print_r($Users);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
    
    <style>
      .table{
        width: 500px;
        display: flex;
        justify-content:right ;
      }


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

h1{
    text-align: center;
    margin-bottom: 30px;

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

.forgotpss{
    margin-top: 10px;
    text-align: center;
}


    </style>

</head>
<body>
    <div class="container">
        <h1>Welcome back</h1>
        <form action="./Collect_data.php" method="post" >
            <label>Username </label>
            <input type="text" name="Name" placeholder="Enter your Username" id="username" >
        
            <label for="Password">Password </label>
            <input type="text" name="Password" placeholder="Enter your Password" id="password">
            
            <input type="checkbox" name="remember me" >
            <label for="checkbox">Remember me</label>

            <input type="submit" value="submit" id="submit"/>
            <div class="forgotpss">
                <a href="./product/Product.php">products</a><br> 
                <a href=""> Forgot password?</a><br> 
                <a href="./Product/index.php">Add product</a>
            </div>
        </form>
        
    </div>
    <div class="table">
      <table border="1">
        <thead>
          <th>Name</th>
          <th>Password</th>
          <th>Update</th>
          <th>Delete</th>
        </thead>
        <tbody>
          <?php foreach ($Users as $User) {?>
          <tr>
            <td><?php echo $User["Name"] ?></td>
            <td><?php echo $User["Password"]?></td>
            <td><a href="./UpdatePage.php?Id=<?=$User['Id']?>">Update</a></td>
            <td><a href="./Delete.php?Id=<?=$User['Id']?>">Delete</a></td>
          </tr>
          <?php }?>
        </tbody>
      </table>
    </div>
    
    
</body>
</html