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
    
    if($pid!="" && $pn!="" && $i!="" && $c!="" && $p!="" && $img!="" && $s!="" && $clr!="" && $d!="")
    {
        $query = "INSERT INTO products(ID,Name,Item,Catogary,price,image,stock,color,details) VALUES ('$pid','$pn','$i','$c','$p','$img','$s','$clr','$d')";
        if(mysqli_query($conn,$query)){

            header('Location: products.php');
        
        }else{
          echo 'query error:'.mysqli_error($conn);
        }
    }
    else
    {
        header('Location:insert1.php');
        echo "<script>alert('All the input fields must be filled')</script>";
    }


	}
?>

<html>
    <head>
        <title>Inserting New Product</title>
        <link rel="stylesheet" href="Projectcss2.css">
        <link rel="icon" href="White2.png" type="image/png">

        <style>
            p{font-size:xx-large;font-weight: bolder;}
            div{text-align: center;height: auto;}
                tr{padding-top: 10px;padding-bottom: 10px;}
                input[type=button]
                {
                    margin-left: 30px;
                    padding: 5px;
                    font-weight: bold;
                    background-color:beige ;
                    border-radius: 5px;
                }
                span{
                    font-size: larger;
                    font-weight: bold;
                }

                input[type=text]{
                width: 30em;
                padding: 12px 20px;
                margin: 8px 0;
                display: inline-block;
                border: 1px solid grey;
                border-radius: 20px;
                box-sizing: border-box;
                -webkit-transition: 0.5s;
                transition: 0.5s;
                outline:none;
                }

                input[type=text]:focus {
                border: 1px solid black;
                }

                input[type=submit] {
                width: auto;
                background-color: black;
                color: white;
                font-weight:bold;
                padding: 11px 17px;
                margin: 5px;
                border: 2px solid black;
                border-radius: 4px;
                cursor: pointer;
                }

                input[type=submit]:hover {
                background-color: white;
                color:black;
                }

        </style>
    </head>

    <body>

    <div id="logo"><img style="height:10em;" src="1583354940827.png" alt="Threaderz Logo"></div>


    <div style="padding:4em;">
    
    <p style="font-family: Montserrat; font-size: 1.5em; font-weight: bold;">INSERTING NEW PRODUCT</p>
		<hr>
        <br>
		<div style="padding-left: 1em;">
			<form action="insert1.php" method="POST">
              <label for="id" style="font-family: Montserrat; font-size: 1em; font-weight: bold;">Product's ID</label>
              <br>
			  <input type="text" id="id" name="id">
              <br>
              <label for="name" style="font-family: Montserrat; font-size: 1em; font-weight: bold;">Product's Name</label>
              <br>
			  <input type="text" id="name" name="name">
              <br>
              <label for="item" style="font-family: Montserrat; font-size: 1em; font-weight: bold;">Item</label>
              <br>
			  <input type="text" id="item" name="item">
              <br>
              <label for="ctg" style="font-family: Montserrat; font-size: 1em; font-weight: bold;">Category</label>
              <br>
			  <input type="text" id="ctg" name="category">
              <br>
              <label for="price" style="font-family: Montserrat; font-size: 1em; font-weight: bold;">Price</label>
              <br>
			  <input type="text" id="price" name="price">
              <br>
              <label for="img" style="font-family: Montserrat; font-size: 1em; font-weight: bold;">Image source</label>
              <br>
			  <input type="text" id="img" name="img">
              <br>
              <label for="stock" style="font-family: Montserrat; font-size: 1em; font-weight: bold;">Stock info</label>
              <br>
			  <input type="text" id="stock" name="stock">
              <br>
              <label for="color" style="font-family: Montserrat; font-size: 1em; font-weight: bold;">Color</label>
              <br>
			  <input type="text" id="color" name="color">
              <br>
              <label for="details" style="font-family: Montserrat; font-size: 1em; font-weight: bold;">Details</label>
              <br>
			  <input type="text" id="details" name="details">
			  <br>

		  
			
			  <input type="submit" name="submit" value="INSERT">
			</form>

		  </div>


    </body>
</html>