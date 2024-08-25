<?php

session_start();
// print_r($_SESSION[`UserId`]);

$connection = new PDO("mysql:host=localhost;dbname=auth_system", "root", "");

//Products data fatch
$query = "SELECT * FROM `Products`";
$statement = $connection->prepare($query);
$row = $statement->execute();
$Products = $statement->fetchAll(PDO::FETCH_ASSOC);
// print_r($Products);

$UserId = $_SESSION[`UserId`];
// print_r($UserId['Id']);


?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Products</title>
  <style>
    .products {
      border: 2px solid black;
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      padding: 30px;
      background-color: #F1F1F1;
    }

    .product {
      width: 200px;
      flex: 0 0 23%;
      background-color: aqua;
      border: 2px solid black;
      text-align: center;
      margin-bottom: 20px;
      font-size: 20px;
    }

    button {
      color: white;
      background-color: #4caf50;
      border: none;
      border-radius: 5px;
      font-size: 16px;
      margin-bottom: 10px;
    }
    h1{
      text-align: center;
    }
    a{
      font-size: 30px;
      color: black;
    }
  </style>
</head>

<body>
<h1>Products</h1>
  <div class="products">
    <?php foreach ($Products as $Product) { ?>
      <div class="product">
        <p><?php echo $Product['ProductName'] ?></p>
        <p><?php echo $Product['ProductPrise'] ?></p>

        <form action="./cart/insert.php" method="POST">
          <input type="hidden" name="ProductId" value="<?php echo $Product['ProductId'] ?>">
          <input type="hidden" name="ProductName" value="<?php echo $Product['ProductName'] ?>">
          <input type="hidden" name="ProductPrise" value="<?php echo $Product['ProductPrise'] ?>">
          <input type="hidden" name="UserId" value="<?php print_r($UserId['Id']); ?>">
          <button type="submit" name="Add-to-cart">add to cart</button>
        </form>
      </div>
    <?php } ?>
  </div>
  <a href="./cart/cart.php">cart</a>

</body>

</html>