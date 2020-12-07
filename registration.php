<?php
$c=mysqli_connect('localhost','root','','cook');
if(isset($_REQUEST['bt']))
{
$fn=$_POST['fnm'];
$ln=$_POST['lnm'];
$em=$_POST['em'];
$p=$_POST['ps'];
$gn=$_POST['rd'];



$q="INSERT INTO register(first_name,last_name,email,password,gender)VALUES('$fn','$ln','$em','$p','$gn')";
mysqli_query($c,$q);
header('location:index.php');
}
?>
<html>
<head>
<title>Registration</title>
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
<script src="jq/jquery-1.10.2.js"></script>
<script src="jq/jquery.min.js"></script>
<script src="jq/bootstrap.min.js"></script>

<script src="jq/jQuery.Validate.min.js"></script>
<script src="jq/jquery.transit.min.js"></script>

<script>
$(document).ready(function(){
$("#b").mouseenter(function(){
$(this).transition({scale:1.8})
});
$("#b").mouseleave(function(){
$(this).transition({scale:1.0});
});
});
</script>
</head>
<body>
<div class="container-fluid" style="background-image:url(images/glenn-carstens-peters-112923.jpg);background-repeat:no-repeat;background-size:100% 100%">

  <div class="row" >
      <div class="col-md-4 col-lg-4" ></div>
	  <div class="col-md-4 col-lg-4" style="background-color:#FFFFFF;margin-top:120px;margin-bottom:100px;background-color:#FFFFFF">
	  <div class="row">
         <div class="col-md-11 col-lg-11"></div>
         <div class="col-md-1 col-lg-1">
         <button class="btn btn-default" type="button" style="border:none;padding:5px" id="bt" data-toggle="tooltip"  title="Close">x</button>
         </div>
        </div>
	  <div class="row" style="font-size:36px;font-weight:bold;border-bottom:solid 2px #999999;padding:5px;color:#003399;text-align:center"><span class="glyphicon glyphicon-pencil"></span>Register	  </div>
	  <form method="post">
	  
	    <div class="row" >
	     <div class="col-md-4 col-lg-4" style="padding:12px;font-size:19px;font-weight:bold;margin-top:5px"><span class="glyphicon glyphicon-user"></span>First name:</div>
	     <div class="col-md-8 col-lg-8" style="padding:5px"> <input type="text" name="fnm"  placeholder="first name" id="text" style="margin-top:10px;width:90%;padding:5px;color:#666666;background-color:#CCCCCC"></div>
		</div> 
	 
	  <div class="row">
	    <div class="col-md-4 col-lg-4" style="padding:10px;font-size:19px;font-weight:bold;margin-top:5px"><span class="glyphicon glyphicon-user"></span>Last name:</div>
	    <div class="col-md-8 col-lg-8" style="padding:5px"> <input type="text" name="lnm"  placeholder="last name" id="text" style="margin-top:10px;width:90%;padding:5px;color:#666666;background-color:#CCCCCC"></div>
	  </div>
	 
	<div class="row">
	     <div class="col-md-4 col-lg-4" style="padding:10px;font-size:19px;font-weight:bold;margin-top:5px"><span class="glyphicon glyphicon-tag"></span>Email:</div>
		 <div class="col-md-8 col-lg-8" style="padding:5px"> <input type="email" name="em"  placeholder="someone@example.com" id="email" style="width:90%;margin-top:10px;padding:5px;color:#666666;background-color:#CCCCCC"></div>
	 </div>
	 
	 <div class="row">
	   <div class="col-md-4 col-lg-4" style="padding:10px;font-size:19px;font-weight:bold;margin-top:5px" ><span class="glyphicon glyphicon-lock"></span>Password:</div>
	   <div class="col-md-8 col-lg-8" style="padding:5px"><input type="password" name="ps"  placeholder="password" id="ps" style="width:90%;margin-top:10px;padding:5px;color:#666666;background-color:#CCCCCC"></div>
	</div>
	 
	 <div class="row">
	   <div class="col-md-4 col-lg-4" style="padding:10px;font-size:19px;font-weight:bold;margin-top:5px" ><span class="glyphicon glyphicon-heart"></span>Gender: </div>
	  <div class="col-md-8 col-lg-8" style="padding:5px;font-size:19px;font-weight:bold;margin-top:5px"> <input type="radio" name="rd" value="male" style="color:#666666;background-color:#CCCCCC">Male
	    <input type="radio" name="rd" value="female" style="color:#666666;background-color:#CCCCCC;font-weight:bold;margin-top:5px">Female</div>
	 </div>
	 
	
	 <div class="row">
	  <div class="col-md-12 col-lg-12" style="padding:10px;font-size:19px;font-weight:bold; text-align:center">
	 
	  <input type="submit" name="bt" style="color:#FFFFFF;background-color:#003399; color:#FFFFFF;text-decoration:none" class="btn btn-primary">
	 </div>
	 </div>
	 <div class="row">
	  <div class="col-md-12 col-lg-12" style="padding:10px;font-size:13px;font-weight:bold; text-align:center">Already a member?
	  <a href="login.php">Sign in now.</a>	  </div>
	 </div> 
	 </form>
	 </div>
	 
	  <div class="col-md-4 col-lg-4"></div> 
</div>	  
</div> 
</body>
</html>