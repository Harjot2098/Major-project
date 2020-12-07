<?php
session_start();
		$i=$_SESSION['a'];
		$c= mysqli_connect('localhost','root','','cook');
		if(isset($_REQUEST['bt']))
		{
		$q="select * from register where id=$i";
        $r=mysqli_query($c,$q);
		$s=mysqli_fetch_array($r);
  
		   $gn=$_POST['rd'];
		   $z="update register set gender='$gn' where id=$i";
		   mysqli_query($c,$z);
           header('location:profile.php');
		}
?>
<html>
<head>
<title>Gender</title>
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
<div class="container-fluid" style="background-image:url(images/hny.jpg);background-repeat:no-repeat;background-size:100% 100%">

  <div class="row" >
      <div class="col-md-3 col-lg-3" ></div>
	  <div class="col-md-6 col-lg-6" style="background-color:#FFFFFF;margin-top:245px;margin-bottom:195px;background-color:#FFFFFF;background:transparent;border:dotted 2px #FFFFFF;border-radius:20px 20px 20px 20px">
	  <div class="row" style="font-size:45px;font-family:A Yummy apology;font-weight:bold;border-bottom:solid 2px #999999;padding:5px;margin-top:5px;color:#FFFFFF;text-align:center"><span class="glyphicon glyphicon-pencil"></span> Edit Gender
	  </div>
	  <form method="post">
	  <div class="row" style="margin-top:20px">
	     <div class="col-md-4 col-lg-4" style="padding:12px;font-family:A Yummy apology;font-size:40px;font-weight:bold;color:#FFFFFF"><span class="glyphicon glyphicon-user"></span> Gender:</div>
	     <div class="col-md-8 col-lg-8" style="padding:12px;font-family:A Yummy apology;font-size:40px;color:#FFFFFF">  <input type="radio" name="rd" value="male" style="color:#FFFFFF">Male
	    <input type="radio" name="rd" value="female" style="color:#ffffff;font-weight:bold">Female</div></div>
		 
		<div class="row">
	  <div class="col-md-12 col-lg-12" style="padding:10px;font-size:19px;font-weight:bold; text-align:center">
	  <button type="submit" class="btn btn-primary" name="bt" style="background-color:#003399" id="b">Done</button>
	 </div>
	 </div>
		</form>
		<div class="col-md-3 col-lg-3" ></div>
</div>
</div>	  
</body>
</html>
