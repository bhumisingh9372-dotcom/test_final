<?php
include 'db.php';
if ($_SERVER["REQUEST_METHOD"]==="POST") {
$product_name=$_POST["product_name"];
$price=$_POST["price"];



$sql=$conn->prepare("update product set price=? where product_name=?");
$sql->bind_param('ds',$price,$product_name);
if($sql->execute()){
    header("location:dashboard.php");
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action=""method="post">
    product name:
    <input type="text" name="product_name">
    <br>
   
    price:
    <input type="text" name="price">
    <br>
    <button type="submit">submit</button>

    </form>
    
</body>
</html>