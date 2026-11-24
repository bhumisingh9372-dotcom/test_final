<?php
$servername="localhost";
$username="root";
$password="";
$dbname="product_managment";

$conn= new mysqli($servername,$username,$password,$dbname);

if (!$conn) {
    echo "not connected";
}
?>