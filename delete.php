<?php
include 'db.php';
if ($_SERVER["REQUEST_METHOD"]==="POST") {
$product_name=$_POST["product_name"];


$sql=$conn->prepare("delete from product where product_name=?");
$sql->bind_param('s',$product_name);
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

    <button type="submit">submit</button>

    </form>
    
</body>
</html>