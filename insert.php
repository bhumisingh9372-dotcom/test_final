<?php
include 'db.php';
if ($_SERVER["REQUEST_METHOD"]==="POST") {
$product_name=$_POST["product_name"];
$category=$_POST["category"];
$price=$_POST["price"];
$quantity=$_POST["quantity"];
$description=$_POST["description"];

$sql=$conn->prepare("insert into product(product_name,category,price,quantity,description)values(?,?,?,?,?)");
$sql->bind_param('ssdis',$product_name,$category,$price,$quantity,$description);
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
    category:
    <input type="text" name="category">
    <br>
    price:
    <input type="text" name="price">
    <br>
    quantity:
    <input type="text" name="quantity">
    <br>
    description:
    <input type="text" name="description">
    <br>
    <button type="submit">submit</button>

    </form>
    
</body>
</html>