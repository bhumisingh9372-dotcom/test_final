<?php
include 'db.php';
session_start();
$result=$conn->query("select * from product");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>hello <?php echo $_SESSION["name"] ?></h1>
    <br><br><br>
     <table border>
<td>
    <tr>product_name</tr>
    <tr>category</tr>
    <tr>price</tr>
    <tr>quantity</tr>
   <tr>description</tr>
</td>
    <?php 
    while ($row=$result->fetch_assoc()) { 
?>
<tr>
    <td><?php echo $row['product_name'] ?></td>
    <td><?php echo $row['category'] ?></td>
    <td><?php echo $row['price'] ?></td>
    <td><?php echo $row['quantity'] ?></td>
    <td><?php echo $row['description'] ?></td>
</tr>

<?php } ?>
    </table>
    <br><br>
    
    <a href="insert.php"> insert</a><br>
    <a href="update.php">update</a><br>
    <a href="delete.php">delete</a><br>
    <a href="logout.php"> logout</a>
</body>
</html>


