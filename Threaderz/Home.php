
<!DOCTYPE html>
<html lang="en">



<head>
<style>
     .mySlides {display:none;}
     input[type="submit"]:hover{opacity: 0.7;border:2px solid red;}  
 </style>
</head>
  <?php include('templates/header.php')?>




  
<section class="featured" style="margin-top:0px;padding-top: 0;">
    <div class="container" style="margin-top: 0px;padding-top: 0;">
      
        <div class="col-12 col-m-12 col-h-10" style="padding-top: 0;" >
            <div class="col-m-12 col-h-10 mySlides  w3-animate-left " style="background-image: url(https://cdn.shopify.com/s/files/1/2290/7887/files/1900_x_850_banner_01_80f02fe2-7085-4202-b1ac-bcdb6c841ce2_1900x850.jpg?v=1579865883); background-size: 100% 100%;background-repeat: no-repeat;padding-right: 27px; width:98%;" >

                <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                  </div>
                 <div class="col-m-12 col-h-10 mySlides   w3-animate-left" style="background-image: url(https://cdn.shopify.com/s/files/1/2290/7887/files/Main-banner-No2-1900x850_1900x850.jpg?v=1582393296); background-size: 100% 100% ;background-repeat: no-repeat;width:98% ;padding-right: 27px; ">

                <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                  </div>
                <div class="col-12 col-m-12 mySlides   w3-animate-left " style="background-image: url(https://cdn.shopify.com/s/files/1/2290/7887/files/Main-banner-No1-1900x850_1900x850.jpg?v=1582392879); background-size: 100% 100% ;background-repeat: no-repeat;width:98%;padding-right: 27px; ">
                <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                </div>


               
             
              
</div>
</section>

    
<div class="clear" ></div>
<section class="Classifications">

    <div class="container" style="Margin-top:100px" >
        <div class="col-6 col-m-11"  style="margin-left: 30px;margin-top: 0;">
     <div class="col-m-6 img-zoom1 " style="margin-top: 20px; margin-right: 30px;margin-bottom: 10px;">
     <a href="THREADERZ-MEN.php"> <img src="https://cdn.shopify.com/s/files/1/2290/7887/files/570x570_Man_570x.jpg?v=1581705388" alt="" width="100%" height="100%" ></a>   
     </div>
     <a href="Threaderz-Women.php"><div class="img-zoom1" style="margin-top: 20px; margin-right: 10px;margin-bottom: 10px;">
        <img src="https://cdn.shopify.com/s/files/1/2290/7887/files/570x570_women_570x.jpg?v=1581705416" alt="" width="100%" height="100%" ></a>
    </div>
    <div class="img-zoom1" style="margin-top: 20px; margin-right: 30px;margin-bottom: 10px;">
     <a href="Threaderz-Kids.php"> <img src="https://cdn.shopify.com/s/files/1/2290/7887/files/boys_570x.jpg?v=1581705441" alt="" width="100%" height="100%" ></a>  
    </div>
   <div class="img-zoom1" style="margin-top: 20px; margin-right: 20px;margin-bottom: 10px;">
    <a href="Threaderz-Kids.php">  <img src="https://cdn.shopify.com/s/files/1/2290/7887/files/Mobile-view-570x570-CATEGORY_570x.jpg?v=1582393971" alt="" width="100%" height="100%" ></a>
    </div>
    </div>

    <div class=" col-5 col-m-12 img-zoom2" style=" margin-top: 20px; padding: 0;">
        <img src="https://cdn.shopify.com/s/files/1/2290/7887/files/new_arrivals_final_570x.jpg?v=1581705785" alt="" width="100%" height=640px>
    </div>
        </div>
<div class="clear"></div>




</section>

<div style="background-color:#E52924; margin:50px; text-align:center;" > 

<H1 style="color:white   margin: 0;
  font-size: 4em;
  padding: 0;
  color: white;
  text-shadow: 0 0.1em 20px rgba(0, 0, 0, 1), 0.05em -0.03em 0 rgba(0, 0, 0, 1),
    0.05em 0.005em 0 rgba(0, 0, 0, 1), 0em 0.08em 0 rgba(0, 0, 0, 1),
    0.05em 0.08em 0 rgba(0, 0, 0, 1), 0px -0.03em 0 rgba(0, 0, 0, 1),
    -0.03em -0.03em 0 rgba(0, 0, 0, 1), -0.03em 0.08em 0 rgba(0, 0, 0, 1), -0.03em 0 0 rgba(0, 0, 0, 1);">#Place you orders now</H1>
</div>

<?php include('templates/footer.php')?>
<script>
    var slideIndex = 0;
    carousel();
    
    function carousel() {
      var i;
      var x = document.getElementsByClassName("mySlides");
      for (i = 0; i < x.length; i++) {
        x[i].style.display = "none"; 
      }
      slideIndex++;
      if (slideIndex > x.length) {slideIndex = 1} 
      x[slideIndex-1].style.display = "block"; 
      setTimeout(carousel, 4000); 
    }
    </script>

<script>
    //Get the button
    var mybutton = document.getElementById("myBtn");
    
    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function() {scrollFunction()};
    
    function scrollFunction() {
      if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        mybutton.style.display = "block";
      } else {
        mybutton.style.display = "none";
      }
    }
    
    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
      document.body.scrollTop = 0;
      document.documentElement.scrollTop = 0;
    }
    </script>
    


</html>