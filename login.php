<?php
session_start();
$c=mysqli_connect('localhost','root','','cook');
if(isset($_REQUEST['bt']))
{
$e=$_POST['em'];
$p=$_POST['ps'];
$q="select * from register WHERE email='$e' and password='$p'";
$r=mysqli_query($c,$q);
$s=mysqli_fetch_array($r);

$_SESSION['a']=$s['id'];
if(mysqli_num_rows($r)==1)
{
 header('location:profile.php');
}
else
{ 
echo "<script>alert('Your email or password is invalid');</script>";
}
}
?>
<html>
<head>
<title>Login</title>
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
<script src="jq/jquery-1.10.2.js"></script>
<script src="jq/jquery.min.js"></script>
<script src="jq/bootstrap.min.js"></script>

<script src="jq/jQuery.Validate.min.js"></script>
<script src="jq/jquery.transit.min.js"></script>

</head>
<body>
<div class="container-fluid" style="background-image:url(images/glenn-carstens-peters-112923.jpg);background-size:100% 100%" >
<a href="index.php" class="row" ><span class="glyphicon glyphicon-home"></span></a>
  <div class="row">
      <div class="col-md-4 col-lg-4" ></div>
	  <div class="col-md-4 col-lg-4" style="background-color:#FFFFFF;margin-top:190px;margin-bottom:195px;background-color:#FFFFFF">
	  
	  <div class="row" style="font-size:36px;font-weight:bold;border-bottom:solid 2px #999999;padding:5px;color:#003399;text-align:center"><span class="glyphicon glyphicon-pencil"></span>Log in
	  </div>
	  <form method="post" >
	<div class="row">
	     <div class="col-md-4 col-lg-4" style="padding:10px;font-size:19px;font-weight:bold;margin-top:5px"><span class="glyphicon glyphicon-tag"></span>Email:</div>
		 <div class="col-md-8 col-lg-8" style="padding:5px"> <input type="email" name="em" required placeholder="someone@example.com" id="email" style="width:90%;margin-top:10px;padding:5px;color:#666666;background-color:#CCCCCC"></div>
	 </div>
	 
	 <div class="row">
	   <div class="col-md-4 col-lg-4" style="padding:10px;font-size:19px;font-weight:bold;margin-top:5px" ><span class="glyphicon glyphicon-lock"></span>Password:</div>
	   <div class="col-md-8 col-lg-8" style="padding:5px"><input type="password" name="ps" required placeholder="password" id="ps" style="width:90%;margin-top:10px;padding:5px;color:#666666;background-color:#CCCCCC"></div>
	</div>
	 
	 <div class="row">
	  <div class="col-md-12 col-lg-12" style="padding:10px;font-size:19px;font-weight:bold; text-align:center">
	  <button type="submit" class="btn btn-primary" name="bt" style="background-color:#003399" id="b">Sign in</button>
	 </div>
	 </div>
	 <div class="row">
	  <div class="col-md-12 col-lg-12" style="padding:10px;font-size:13px;font-weight:bold; text-align:center">Not yet registered?
	  <a href="registration.php">Register now.</a>
	  </div>
	 </div> 
	 </form>
	 </div>
	 
	  <div class="col-md-4 col-lg-4"></div> 
	  

</div> 
</body>
</html>
