<?php
include("connection1.php");
error_reporting(0);
?>

<html>
    <head>
    <title>Updating A Product</title>
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
    
    <p style="font-family: Montserrat; font-size: 1.5em; font-weight: bold;">UPDATING A PRODUCT</p>
		<hr>
        <br>
		<div style="padding-left: 1em;">
			<form action="up_action1.php" method="POST">
              <label for="id" style="font-family: Montserrat; font-size: 1em; font-weight: bold;">Product's ID</label>
              <br>
			  <input type="text" name="id" value="<?php echo $_GET['pid'] ?>">
              <br>
              <label for="name" style="font-family: Montserrat; font-size: 1em; font-weight: bold;">Product's Name</label>
              <br>
			  <input type="text" name="name" value="<?php echo $_GET['n'] ?>">
              <br>
              <label for="item" style="font-family: Montserrat; font-size: 1em; font-weight: bold;">Item</label>
              <br>
			  <input type="text" name="item" value="<?php echo $_GET['i'] ?>">
              <br>
              <label for="ctg" style="font-family: Montserrat; font-size: 1em; font-weight: bold;">Category</label>
              <br>
			  <input type="text" name="category" value="<?php echo $_GET['c'] ?>">
              <br>
              <label for="price" style="font-family: Montserrat; font-size: 1em; font-weight: bold;">Price</label>
              <br>
			  <input type="text" name="price" value="<?php echo $_GET['p'] ?>">
              <br>
              <label for="img" style="font-family: Montserrat; font-size: 1em; font-weight: bold;">Image source</label>
              <br>
			  <input type="text" name="img" value="<?php echo $_GET['img'] ?>">
              <br>
              <label for="stock" style="font-family: Montserrat; font-size: 1em; font-weight: bold;">Stock info</label>
              <br>
			  <input type="text" name="stock" value="<?php echo $_GET['s'] ?>">
              <br>
              <label for="color" style="font-family: Montserrat; font-size: 1em; font-weight: bold;">Color</label>
              <br>
			  <input type="text" name="color" value="<?php echo $_GET['clr'] ?>">
              <br>
              <label for="details" style="font-family: Montserrat; font-size: 1em; font-weight: bold;">Details</label>
              <br>
			  <input type="text" name="details" value="<?php echo $_GET['d'] ?>">
			  <br>

		  
			
			  <input type="submit" name="submit" value="UPDATE">
			</form>

		  </div>


    </body>
</html>