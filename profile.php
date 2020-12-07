<?php
session_start();
$i=$_SESSION['a'];
error_reporting(0);
$c=mysqli_connect('localhost','root',"",'cook');

$q="select * from register where id=$i";
$r=mysqli_query($c,$q);
while($s=mysqli_fetch_array($r))
{

$fn= $s['first_name'];
$ln= $s['last_name'];
$em= $s['email'];
$s['password'];
$g= $s['gender'];
$d=$s['image'];
}
?>

<html>
<head>
<title>Profile</title>
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
<div class="container-fluid" style="background-image:url(images/imageedit_1_5842000499.jpg);background-size:100% 100%;background-repeat:no-repeat">

  <div class="row" >
  
      <div class="col-md-1 col-lg-1" ></div>
	
	  <div class="col-md-10 col-lg-10" style="background:transparent;border-radius:20px 20px 20px 20px;border:dotted 2px #FFFFFF;margin-top:120px;margin-bottom:195px">
	  
         
	  <div class="row" style="font-size:45px;font-family:A Yummy apology;font-weight:bold;border-bottom:solid 2px #999999;padding:5px;color:#FFFFFF;text-align:center"><span class="glyphicon glyphicon-pencil"></span>Profile
	  </div>
	  <div class="row" style="padding:20px">
	  <a class="col-md-2 col-lg-2" style="padding:20px;margin-bottom:10px;border-radius:40px 40px 40px 40px;color:#FFFFFF;font-family:A Yummy apology;font-size:25px;text-decoration:none" href="picture.php"><img src="upload/<?php echo $d;  ?>" class="img-responsive" > 
Change Picture

	  </a>
	  <div class="col-md-10 col-lg-10">
	  <div class="row">
	  <div class="col-md-6 col-lg-6">
	     <div class="col-md-6 col-lg-6" style="font-size:30px;font-weight:bold;font-family:A Yummy apology;color:#FFFFFF;margin-top:17px"><span class="glyphicon glyphicon-user"></span> First name:</div>
	     <div class="col-md-4 col-lg-4" style="margin-top:30px;color:#FFFFFF"><?php echo $fn; ?></div>
		 <div class="col-md-2 col-lg-2"></div>
		  
	 </div>
	  
	   <div class="col-md-6 col-lg-6" >
	   <div class="col-md-6 col-lg-6" style="font-size:30px;color:#FFFFFF;font-family:A Yummy apology;font-weight:bold;margin-top:17px"><span class="glyphicon glyphicon-user"></span> Last name:</div>
	     <div class="col-md-4 col-lg-4" style="margin-top:30px;color:#FFFFFF"><?php echo $ln; ?></div>
		 <div class="col-md-2 col-lg-2" >
		 <button class="btn btn-default" type="submit" style="background-color:#003399;margin-top:19px" data-toggle="tooltip" title="edit"><a href="user.php" style="color:#FFFFFF">Edit</a></button></div></div></div>

		 <div class="row">
		 <div class="col-md-12 col-lg-12">
	     <div class="col-md-5 col-lg-5" style="font-size:30px;color:#FFFFFF;font-family:A Yummy apology;font-weight:bold;margin-top:17px"><span class="glyphicon glyphicon-user"></span> Email:</div>
	     <div class="col-md-6 col-lg-6" style="margin-top:30px;color:#FFFFFF"><?php echo $em;?></div>
		   <div class="col-md-1 col-lg-1" >
		 <button class="btn btn-default" type="submit" style="background-color:#003399;margin-top:30px" data-toggle="tooltip" title="edit"><a href="email.php" style="color:#FFFFFF">Edit</a></button></div></div></div>
		 <div class="row">
		 <div class="col-md-12 col-lg-12">
	     <div class="col-md-5 col-lg-5" style="font-size:30px;color:#FFFFFF;font-family:A Yummy apology;font-weight:bold;margin-top:17px"><span class="glyphicon glyphicon-lock"></span> Password:</div>
	     <div class="col-md-6 col-lg-6" style="margin-top:30px;color:#FFFFFF"><?php echo '******';?></div>
		   <div class="col-md-1 col-lg-1" >
		 <button class="btn btn-default" type="submit" style="background-color:#003399;margin-top:30px" data-toggle="tooltip" title="edit"><a href="reset_pass.php" style="color:#FFFFFF">Edit</a></button></div></div></div>
		 <div class="row">
		 <div class="col-md-12 col-lg-12">
	     <div class="col-md-5 col-lg-5" style="font-size:30px;color:#FFFFFF;font-family:A Yummy apology;font-weight:bold;margin-top:17px"><span class="glyphicon glyphicon-user"></span> Gender:</div>
	     <div class="col-md-6 col-lg-6" style="margin-top:30px;color:#FFFFFF"><?php echo $g;?></div>
		   <div class="col-md-1 col-lg-1" >
		 <button class="btn btn-default" type="submit" style="background-color:#003399;margin-top:30px" data-toggle="tooltip" title="edit"><a href="gender.php" style="color:#FFFFFF">Edit</a></button></div></div></div>
		 
		 
	  </div>
	  <div class="row">
	  <div class="col-md-12 col-lg-12" style="padding:10px;font-size:19px;font-weight:bold; text-align:center">
	  <a href="index.php"><button type="submit" class="btn btn-primary" name="bt" style="background-color:#003399" id="b">Done</button></a>
	 </div>
	 </div>
	 </div> 
  </div>
   <div class="col-md-1 col-lg-1" ></div></div>
</div>
</div>
</div>
</body>
</html>	  
	  
