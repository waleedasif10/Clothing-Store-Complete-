
  <?php   
 session_start();  
 $conn= mysqli_connect('localhost','waleed','pakistan','threaderz');
 if(isset($_POST["add_to_cart"]))  
 {  
      if(isset($_SESSION["shopping_cart"]))  
      {  
           $item_array_id = array_column($_SESSION["shopping_cart"], "item_id");  
           if(!in_array($_GET["ID"], $item_array_id))  
           {  
                $count = count($_SESSION["shopping_cart"]);  
                $item_array = array(  
                     'item_id'               =>     $_GET["ID"],  
                     'item_name'               =>     $_POST["hidden_name"],  
                     'item_price'          =>     $_POST["hidden_price"],  
                     'item_quantity'          =>     $_POST["quantity"]  
                );  
                $_SESSION["shopping_cart"][$count] = $item_array;  
           }  
           else  
           {  
                echo '<script>window.location="Cart.php"</script>';  
           }  
    
          }  
      else  
      {  
           $item_array = array(  
                'item_id'               =>     $_GET["ID"],  
                'item_name'               =>     $_POST["hidden_name"],  
                'item_price'          =>     $_POST["hidden_price"],  
                'item_quantity'          =>     $_POST["quantity"]  
           );  
           $_SESSION["shopping_cart"][0] = $item_array;  
      }  
 }  
 if(isset($_GET["action"]))  
 {  
      if($_GET["action"] == "delete")  
      {  
           foreach($_SESSION["shopping_cart"] as $keys => $values)  
           {  
                if($values["item_id"] == $_GET["id"])  
                {  
                     unset($_SESSION["shopping_cart"][$keys]);  
                     echo '<script>window.location="Cart.php"</script>';  
                }  
           }  
      }  
 }  

 ?>  

<!doctype html>

<head>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
      </head>  
<?php include('templates/header2.php')?>


<h3>Your Cart</h3>  
                <div class="table-responsive" style="width:95%; margin:20px;">  
                     <table class="table table-bordered" style="border:3px solid black;">   
                          <tr>  
                               <th width="40%">Item Name</th>  
                               <th width="10%">Quantity</th>  
                               <th width="20%">Price</th>  
                               <th width="15%">Total</th>  
                               <th width="5%">Action</th>  
                          </tr>  
                          <?php   
                          if(!empty($_SESSION["shopping_cart"]))  
                          {  
                               $total = 0;  
                               foreach($_SESSION["shopping_cart"] as $keys => $values)  
                               {  
                          ?>  
                          <tr>  
                               <td><?php echo $values["item_name"]; ?></td>  
                               <td><?php echo $values["item_quantity"]; ?></td>  
                               <td>PKR <?php echo $values["item_price"]; ?></td>  
                               <td>PKR <?php echo number_format($values["item_quantity"] * $values["item_price"], 2); ?></td>  
                               <td><a href="Cart.php?action=delete&id=<?php echo $values["item_id"]; ?>" style="color:red;text-decoration:none;><span class="text-danger">Remove</span></a></td>  
                          </tr>  
                          <?php  
                                    $total = $total + ($values["item_quantity"] * $values["item_price"]);  
                               }  
                          ?>  
                          <tr>  
                               <td colspan="3" align="right">Total</td>  
                               <td align="right">PKR <?php echo number_format($total, 2); ?></td>  
                               <td></td>  
                          </tr>  
                          
                          <?php  
                          }  
                          ?>  
                     </table>  
                     <div style="margin-top:10px;position:relative;float:right; margin:10px" >
                     <button type="button" class="btn" style="background-color:black; height:45px; "><a href="Home.php" style="color:white;text-decoration:none;">Continue Shopping</a></button>               
                     </div>
                     <div style="margin-top:10px;position:relative;float:right; marin-left:10px; " >
                     <button type="button" class="btn" style="background-color:black; height:45px;margin-left:20px "><a href="buy.php" style="color:white;text-decoration:none;">Buy now</a></button>               
                     </div>

                </div>  
                

</html>
