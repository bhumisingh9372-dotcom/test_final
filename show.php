<?php
include 'db.php';
$result=$conn->query("select * from product");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>

    <tr>product_name</tr>
    <tr>category</tr>
    <tr>price</tr>
    <tr>quantity</tr>
    <tr>description</tr>

    <?php while ($row=$result->fetch_assoc()) {
    <tr><?php echo "[$product_name]"    ?></tr>
    <tr><?php echo "[$category]"    ?></tr>
    <tr><?php echo "[$price]"    ?></tr>
    <tr><?php echo "[$quantity]"    ?></tr>
    <tr><?php echo "[$description]"    ?></tr>
    
    <?php } ?>
    </table>
</body>
</html>