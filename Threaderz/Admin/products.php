<?php
include("connection1.php");
$query = "SELECT * FROM products";
$output = array();
$data = mysqli_query($conn, $query);



while ($result = mysqli_fetch_array($data))
{
    $output[] = array(
        "id" => $result['ID'],
        "name" => $result['Name'],
        "item" => $result['Item'],
        "cat" => $result['Catogary'],
        "price" => $result['price'],
        "img" => $result['image'],
        "stock" => $result['stock'],
        "color" => $result['color'],
        "details" => $result['details']
    );
}

echo json_encode($output);

?>

