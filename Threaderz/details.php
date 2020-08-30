
<?php
$conn= mysqli_connect('localhost','waleed','pakistan','threaderz');
 
if(!$conn){
echo'connection error:'. mysqli_connect_error();
}
else{
if(isset($_GET['ID'])){

$id= mysqli_real_escape_string($conn,$_GET['ID']);

$sql= "SELECT * FROM products WHERE ID = $id";

$result= mysqli_query($conn , $sql);
$detail=  mysqli_fetch_assoc($result);

mysqli_free_result($result);
mysqli_close($conn);

}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>

 
    <style>
   

.img-zoom-container {
  position: relative;
}

.img-zoom-lens {
  position: absolute;
  border: 1px solid #d4d4d4;
  /*set the size of the lens:*/
  width: 200px;
  height: 200px;
}

.img-zoom-result {
    position: absolute;
  border: 1px solid #d4d4d4;
  /*set the size of the result div:*/
  width: 300px;
  height: 350px;
  left:490px;
  top: 50px;
visibility: hidden;
}
.img-zoom-container:hover .img-zoom-result,
.img-zoom-container:hover ~ .img-zoom-result{
 visibility: visible;
}
 button:hover{
border: 2px solid rgb(209, 45, 45);
 }
 button:focus{border:3px solid rgb(209, 45, 45)}

 

    </style>
    <script>
        function imageZoom(imgID, resultID) {
          var img, lens, result, cx, cy;
          img = document.getElementById(imgID);
          result = document.getElementById(resultID);
          /*create lens:*/
          lens = document.createElement("DIV");
          lens.setAttribute("class", "img-zoom-lens");
          /*insert lens:*/
          img.parentElement.insertBefore(lens, img);
          /*calculate the ratio between result DIV and lens:*/
          cx = result.offsetWidth / lens.offsetWidth;
          cy = result.offsetHeight / lens.offsetHeight;
          /*set background properties for the result DIV:*/
          result.style.backgroundImage = "url('" + img.src + "')";
          result.style.backgroundSize = (img.width * cx) + "px " + (img.height * cy) + "px";
          /*execute a function when someone moves the cursor over the image, or the lens:*/
          lens.addEventListener("mousemove", moveLens);
          img.addEventListener("mousemove", moveLens);
          /*and also for touch screens:*/
          lens.addEventListener("touchmove", moveLens);
          img.addEventListener("touchmove", moveLens);
          function moveLens(e) {
            var pos, x, y;
            /*prevent any other actions that may occur when moving over the image:*/
            e.preventDefault();
            /*get the cursor's x and y positions:*/
            pos = getCursorPos(e);
            /*calculate the position of the lens:*/
            x = pos.x - (lens.offsetWidth / 2);
            y = pos.y - (lens.offsetHeight / 2);
            /*prevent the lens from being positioned outside the image:*/
            if (x > img.width - lens.offsetWidth) {x = img.width - lens.offsetWidth;}
            if (x < 0) {x = 0;}
            if (y > img.height - lens.offsetHeight) {y = img.height - lens.offsetHeight;}
            if (y < 0) {y = 0;}
            /*set the position of the lens:*/
            lens.style.left = x + "px";
            lens.style.top = y + "px";
            /*display what the lens "sees":*/
            result.style.backgroundPosition = "-" + (x * cx) + "px -" + (y * cy) + "px";
          }
          function getCursorPos(e) {
            var a, x = 0, y = 0;
            e = e || window.event;
            /*get the x and y positions of the image:*/
            a = img.getBoundingClientRect();
            /*calculate the cursor's x and y coordinates, relative to the image:*/
            x = e.pageX - a.left;
            y = e.pageY - a.top;
            /*consider any page scrolling:*/
            x = x - window.pageXOffset;
            y = y - window.pageYOffset;
            return {x : x, y : y};
          }
        }
        </script>
 
</head>
<?php include('templates/header.php')?>

    <br><br>
    
    
    <?php if($detail): ?>

    <div class="col-5 img-zoom-container" style="margin-left: 30px;">
       <div>
        <img style="margin-top: 40px;margin-left: 30px;" id="myimage" src="<?php echo $detail['image']; ?></" width="80%" height="600px">    <div id="myresult" class=" img-zoom-result" style=" position: absolute;"></div></img>
    </div></div>

<div class="col-3" style="margin-left: 150px;">
  <h1 ><Strong><?php echo $detail['Item']; ?></</Strong></h1>
  <p><?php echo $detail['Name']; ?></</p>
  <h1><Strong>PKR <?php echo $detail['price']; ?></</Strong></h1>
  <p ><strong> color:</strong>  <?php echo $detail['color']; ?></p>
  <p ><strong> Availability:</strong>  <?php echo $detail['stock']; ?></p>

  <strong>Details:</strong>
 <?php  foreach(explode(',', $detail['details']) as $det): ?>
     <li><?php echo htmlspecialchars($det) ?></li>
      <?php endforeach; ?>
      <br>

 <strong>Size:</strong><br>
 <button style="width:35px ;height: 35px;margin-top:0 ; margin-right: 10px;">S</button>
 <button style="width:35px ;height: 35px;margin-top:0 ; margin-right: 10px;">M</button>
 <button style="width:35px ;height: 35px;margin-top:0 ; margin-right: 10px;">L</button>
 <button style="width:35px ;height: 35px;margin-top:0 ; margin-right: 10px;">XL</button>
 <br><br>
 <strong>Quantity:</strong><br>
          <div class="col-md-4" style="position:relative;left:-180px;top:-10px;">  
                     <form method="post" action="Cart.php?action=add&ID=<?php echo $detail["ID"]; ?>" style="transition-property: none; transform: none;transform: translate(0, 0) translate3d(0, 0, 0), top:50px;" >
                               <div style="display:none;">
                               <h4 class="text-info" style="diplay:none" ><?php echo $detail["Name"]; ?></h4>  
                               <h4 class="text-danger"> <?php echo $detail["price"]; ?></h4>  
                               </div>
                               <input type="text" name="quantity" class="form-control" value="1" />  
                               <input type="hidden" name="hidden_name" value="<?php echo $detail["Name"]; ?>" />  
                               <input type="hidden" name="hidden_price" value="<?php echo $detail["price"]; ?>" />   
                               <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" />  

                          </div>  

                     </form>  
                </div>  
<br><br>


</div>

<?php else: ?>
			<h5>No such pizza exists.</h5>
		<?php endif ?>

    <script>
        imageZoom("myimage", "myresult");
      </script>
