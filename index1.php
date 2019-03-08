<?php
    session_start();
    $con = mysqli_connect("localhost","root","","project");
    if(isset($_POST['login']))
    {
        $a = $_POST['email'];
        $b = $_POST['password'];

        $sql = mysqli_query($con,"select * from signup where status='active' and email ='$a' and password='$b'");
        $r = mysqli_fetch_array($sql);
        $n = mysqli_num_rows($sql);

        if($n>0)
        {
            $_SESSION['email'] = $r['email'];
            $_SESSION['password'] =$r['password'];

            echo "<script type='text/javascript'>window.open('index0.php','_self');</script>";
        }
        else{
            echo "invalid email and password";
        }
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
    <h1 class="fs-title">Welcome to eBUSINESS</h1>
    <h2 class="fs-title"><i></style> Sign in for exitement</i></h2>
    
    
    <input type="text" name="email" placeholder="Email" />
    <input type="password" name="password" placeholder="Password" />
  <input type="submit" name="login" class="submit action-button" value="Submit" /><br>
 <br> <h3>Not having account <a href="index2.php">Signup</a> for free</h3><br>
 <h3> <a href="index00.php">Forget password</a></h3>
  </fieldset>
</form>
       
    


</body>
</html>