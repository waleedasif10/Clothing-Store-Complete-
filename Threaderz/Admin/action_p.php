<?php
include("connection1.php");
error_reporting(0);

$pid =$_POST['id'];
$pn = $_POST['name'];
$i = $_POST['item'];
$c = $_POST['category'];
$p = $_POST['price'];
$img = $_POST['img'];
$s = $_POST['stock'];
$clr = $_POST['color'];
$d = $_POST['details'];

if($pid!="" && $pn!="" && $i!="" && $c!="" && $p!="" && $img!="" && $s!="" && $clr!="" && $d!="")
{
    $query = "INSERT INTO products(ID,Name,Item,Category,price,image,stock,color,details) VALUES ('$pid','$pn','$i','$c','$p','$img','$s','$clr','$d')";
    $data = mysqli_query($conn,$query);

    header('Location:products.html');
}
else
{
    header('Location:insert1.php');
    echo "<script>alert('All the input fields must be filled')</script>";
}

?>