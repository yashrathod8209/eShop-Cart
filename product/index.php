<?php

$connection = new PDO("mysql:host=localhost;dbname=auth_system", "root", "");
$query = "SELECT * FROM `Products`";
$statement = $connection->prepare($query);
$row = $statement->execute();
$Products = $statement->fetchAll(PDO::FETCH_ASSOC);
// print_r($Users);

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add Products</title>

  <style>
    .table {
      width: 500px;
      display: flex;
      justify-content: right;
    }


    body {
      margin: 0%;
      padding: 0%;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .container {
      width: 350px;
      padding: 30px;
      box-shadow: 0 2px 5px gray;
      margin-top: 75px;
    }

    h1 {
      text-align: center;
      margin-bottom: 30px;

    }

    input[type="text"] {
      width: 330px;
      padding: 10px;
      margin-bottom: 10px;
    }

    #submit {
      width: 100%;
      background-color: yellow;
      padding: 10px 20px;
      margin-top: 10px;
    }

    .forgotpss {
      margin-top: 10px;
      text-align: center;
    }
  </style>

</head>

<body>
  <div class="container">
    <h1>add product</h1>
    <form action="./Collect_data.php" method="post">
      <label>Username </label>
      <input type="text" name="ProductName" placeholder="Enter Product Name" id="ProductName">

      <label for="Password">Password </label>
      <input type="text" name="ProductPrise" placeholder="Enter product Prise" id="ProductPrise">

      <input type="checkbox">
      <label for="checkbox">Remember me</label>

      <input type="submit" value="submit" id="submit" />
      <div class="forgotpss">
        <a href=""> Forgot password?</a><br>
        <a href="./Cart.php">cart</a>
      </div>
    </form>

  </div>
  <div class="table">
    <table border="1">
      <thead>
        <th>Produ.. Name</th>
        <th>Produ.. Prise</th>
        <th>Update</th>
        <th>Delete</th>
        <th>Add</th>
      </thead>
      <tbody>
        <?php foreach ($Products as $Product) { ?>
          <tr>
            <td><?php echo $Product["ProductName"] ?></td>
            <td><?php echo $Product["ProductPrise"] ?></td>
            <td><a href="./UpdatePage.php?Id=<?= $User['Id'] ?>">Update</a></td>
            <td><a href="./Delete.php?Id=<?= $User['Id'] ?>">Delete</a></td>
            <td><input type="button" value="add" onclick=""></td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>

  <script>



  </script>
</body>

</html>