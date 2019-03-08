<?php
	$con = mysqli_connect("localhost","root","","project");
	//include("connect.php");
	if(isset($_POST['signup']))
	{
		$a = $_POST['fname'];
		$b = $_POST['lname'];
		$c = $_POST['mobile'];
        $d = $_POST['email'];
		$e = $_POST['password'];
		$f = $_POST['status'];

		$sql = "insert into signup(fname,lname,mobile,email,password,status)values('$a','$b','$c','$d','$e','$f')";
		$r = mysqli_query($con,$sql);
		echo "<script type='text/javascript'>alert('registration successful');</script>";
		echo "<script type='text/javascript'>window.open('index.php','_self');</script>";
	}
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/reg1.css">
</head>
<body>
  <form id="msform" method="post">
 
  <fieldset>
    <h1>Welcome to eBUSINESS</h1>
    <h2 class="fs-title"><i>Sign Up for Exitement</i></h2>
    
    <input type="text" name="fname" placeholder="First Name" />
    <input type="text" name="lname" placeholder="Last Name" />
    <input type="number" name="mobile" placeholder="Mobile Number" />
    <input type="email" name="email" placeholder="Email" />
    <input type="password" name="password" placeholder="Password" />
    <input type="hidden" name="status" value="deactive" />

  <input type="submit" name="signup" class="submit action-button" value="Submit" />
 <br> <h3>Already having account <a href="index1.html">Signin</a> from here</h3>
  </fieldset>
</form>
</body>
</html>