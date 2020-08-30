<!DOCTYPE html>
<html lang="en">
<head>

    <style>
    
body {
  display: flex;
  justify-content: center;
  align-items: center;

  background-image: linear-gradient(#b62020,#b62020,#ffffff);
}

h1 {
  margin: 0;
  font-size: 4em;
  padding: 0;
  color: white;
  text-shadow: 0 0.1em 20px rgba(0, 0, 0, 1), 0.05em -0.03em 0 rgba(0, 0, 0, 1),
    0.05em 0.005em 0 rgba(0, 0, 0, 1), 0em 0.08em 0 rgba(0, 0, 0, 1),
    0.05em 0.08em 0 rgba(0, 0, 0, 1), 0px -0.03em 0 rgba(0, 0, 0, 1),
    -0.03em -0.03em 0 rgba(0, 0, 0, 1), -0.03em 0.08em 0 rgba(0, 0, 0, 1), -0.03em 0 0 rgba(0, 0, 0, 1);
 
    animation-name: bop,bopB;
  animation-duration: 2s;
  animation-iteration-count: 2;
  animation-direction: alternate;
}

@keyframes bop {
  0% {
    transform: scale(0.9);
  }
  50%,
  100% {
    transform: scale(1);
  }
}

@keyframes bopB {
  0% {
    transform: scale(0.9);
  }
  80%,
  100% {
    transform: scale(1) rotateZ(-3deg);
  }

}
}

    </style>
</head>

<?php include('templates/header.php')?>

<div class="container" >
     <br><br><br><br><br><br><br><br><br><br><br><br>     <br><br><br>     <br><br>
<div class="section-heading" style=" margin-left:50px;margin-right:50px; margin-top:300px;margin-bottom: 120px;" >

       <h1 style="text-align: center;"><span >"About </span><span>Us"</span></h1>
        <p style="color: black;">Threaderz is a name which is synonymous with fashions & trends in Pakistan. Established in 2020, this is a company birthed out of an ambitious investment in the fashion industry by the visionary team. Pioneers of providing the latest fashion apparel to the Pakistani consumers, Threaderz has been at the forefront of introducing the latest and trendiest clothes for the masses. With the immense love and support of the loyal customers over the last 10 months, Threaderz has been able to expand into further brands with 60+ stores throughout Pakistan.

            Threaderz started out as trendy street-smart fashion for men and women. 
            
            The company is steadily growing and now has set foot in the international market, with aims to elevate the brand into a truly global player.</p>
    </div>

    <?php include('templates/footer.php')?>
 
</html>