<?php

include("connection1.php");
error_reporting(0);
if(isset($_POST['submit'])){

$pid =$_POST['id'];
$pn = $_POST['name'];
$i = $_POST['item'];
$c = $_POST['category'];
$p = $_POST['price'];
$img = $_POST['img'];
$s = $_POST['stock'];
$clr = $_POST['color'];
$d = $_POST['details'];


$query = "UPDATE products SET Name='$pn' , Item='$i', Catogary='$c', price='$p', image='$img', stock='$s', color='$clr', details='$d' WHERE ID='$pid' ";
$data = mysqli_query($conn,$query);

header('Location:products.html');
}

?>