
  <?php   
 session_start();  
 $conn= mysqli_connect('localhost','waleed','pakistan','threaderz');
 if(!$conn){
	echo'connection error:'. mysqli_connect_error();
	 }
	 //write query
	$sql='SELECT * FROM buy2 ORDER BY ID';
	//make query and get result
	$result = mysqli_query($conn, $sql); 
	
	//fetch all the resulting rows
	$orders= mysqli_fetch_all($result, MYSQLI_ASSOC);
	
	mysqli_free_result($result);
	mysqli_close($conn);
	

 ?>  

<!doctype html>

<head>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
      </head>  
<?php include('templates/header2.php')?>


<h3>Your Order</h3>  
                <div class="table-responsive" style="width:95%; margin:20px;">  
                     <table class="table table-bordered" style="border:3px solid black;">   
                          <tr>  
                               <th width="40%">Item Name</th>  
                               <th width="10%">Quantity</th>  
                               <th width="20%">ID</th>  
                               <th width="15%">Total</th>  
                          </tr>  
                          <?php   
                       
                               foreach($orders as $order)  
                               {  
                          ?>  
                          <tr>  
                               <td><?php echo $order['Name']; ?></td>  
                               <td><?php echo $order['quantity']; ?></td>  
                               <td> <?php echo $order['ID']; ?></td>  
                               <td>PKR <?php echo $order['total'];  ?></td>  
                          </tr>  
                          <?php  
                               }  
                          ?>  
                        
                          
                      
                     </table>  
                     <div style="margin-top:10px;position:relative;float:right; " >
                     <button type="button" class="btn" style="background-color:black; height:45px; "><a href="Home.php" style="color:white;text-decoration:none;">Continue Shopping</a></button>               
                     </div>
                
                </div>

                </div>  
                

</html>
