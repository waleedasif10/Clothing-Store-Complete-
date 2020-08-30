<?php
$conn= mysqli_connect('localhost','waleed','pakistan','threaderz');
 
if(!$conn){
echo'connection error:'. mysqli_connect_error();
}


	if(isset($_POST['submit'])){

	$name = mysqli_real_escape_string($conn,$_POST["name"]);
	$phone = mysqli_real_escape_string($conn,$_POST["phone"]);
	$email = mysqli_real_escape_string($conn,$_POST["email"]);
	$password = mysqli_real_escape_string($conn,$_POST["pass"]);
	$salt = "threaderz";
	$password_encrypted = sha1($password.$salt);
	$sql = "SELECT email FROM signup WHERE '$email'=email";
	$res=mysqli_query($conn,$sql);
if (mysqli_num_rows($res) <= 0) {


	   if(mysqli_query($conn,$sql)){ 
	$sql = "INSERT INTO signup (Name,phonenumber, email, password)
VALUES ('$name','$phone' ,'$email','$password_encrypted')";
   if(mysqli_query($conn,$sql)){

	header('Location: Sign-In.php');

}else{
  echo 'query error:'.mysqli_error($conn);
}
	   }
	   else{
		echo 'query error:'.mysqli_error($conn);
	  }
	}
	}
?>


<!doctype html>

<html>
<head>

</head>
<?php include('templates/header2.php')?>


	<div class="col-12" style="padding:4em;">
		
		<p style="font-family: Montserrat; font-size: 1.5em; font-weight: bold;">CREATE YOUR ACCOUNT</p>
        <hr>
        <br>
		<div style="padding-left: 1em;">
			<form action="Log in.php" id="logform" method="post">
			  <label for="name" style="font-family: Montserrat; font-size: 1em; font-weight: bold;"> Name</label>
			  <br>
			  <input type="text" id="name" name="name" required>
			  <div class="my-4 err" id="firstname"style=" color:red;"  ></div>

			  <br>
		

			  <label for="phone" style="font-family: Montserrat; font-size: 1em; font-weight: bold;">Phone</label>
			  <br>
			  <input type="text" id="phone" name="phone" required>
			  <div class="my-4" id="phoneno" style=" color:red;" ></div>

			  <br>
              <label for="email" style="font-family: Montserrat; font-size: 1em; font-weight: bold;">Email Address</label>
			  <br>
			  <input type="text" name="email"  id="email" required >
			  <div class="my-4 err" id="Email" style=" color:red;" ></div>

			  <br>
              <label for="pass" style="font-family: Montserrat; font-size: 1em; font-weight: bold;">Password</label>
			  <br>
			  <input type="password" id="pass" name="pass" style="  width: 27em;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid grey;
    border-radius: 20px;
    box-sizing: border-box;
    -webkit-transition: 0.5s;
      transition: 0.5s;
    outline:none;" required>

			  <br>
		  

		  
			
			  <input type="submit" value="CREATE AN ACCOUNT" name="submit">
			</form>
			<p style="font-family: Montserrat; font-size: 0.9em;"></p>
		  </div>

	</div>


	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script>
$("#logform").submit(function(event) {

const Email = $('#email').val();
const Name = $('#name').val();
const phone = $('#phone').val();


var namereg = /^[a-zA-Z]+(?:[\s.]+[a-zA-Z]+)*$/;
var Emailreg=/^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$/;
var phonereg = /^[+]*[(]{0,1}[0-9]{1,4}[)]{0,1}[-\s\./0-9]*$/;




if (!Name.match(namereg)) {
		$("#firstname").html("<span class='alert '> Enter Valid Name (Letters only)</span>");
		event.preventDefault();
	  }


	  if (!phone.match(phonereg)) {
        $("#phoneno").html("<span class='alert'> Enter a valid phone number </span>");
        event.preventDefault();
      }
if (!Email.match(Emailreg)) {
        $("#Email").html("<span class='alert'> Enter a valid Email </span>");
        event.preventDefault();
      }




});

</script>
</body>


<?php include('templates/footer2.php')?>


</html>