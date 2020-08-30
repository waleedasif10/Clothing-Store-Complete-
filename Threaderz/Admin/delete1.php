<?php
include("connection1.php");
error_reporting(0);
$pid = $_GET['ID'];
$query = "DELETE FROM products WHERE ID = '$ID' ";
$data = mysqli_query($conn,$query);

header('Location:products.html');

?>