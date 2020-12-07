<?php
session_start();
$i=$_SESSION['a'];
$c=mysqli_connect('localhost','root','','cook');
if(isset($_REQUEST['bt']))
{
$d=$_FILES["a"]["name"];
$_FILES["a"]["size"];
$e=$_FILES["a"]["tmp_name"];
$_FILES["a"]["type"];
move_uploaded_file($e,"upload/".$d);
$q="update register set image='$d' where id='$i'";
mysqli_query($c,$q);
header('location:profile.php');

}
?>

<html>
<head>
<title>Profile picture</title>
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
      <div class="col-md-4 col-lg-4" ></div>
	  <div class="col-md-4 col-lg-4" style="background-color:#FFFFFF;margin-top:205px;margin-bottom:195px;background-color:#FFFFFF;background:transparent;border:dotted 2px #FFFFFF;border-radius:20px 20px 20px 20px">
	  <div class="row" style="font-size:36px;font-family:Courier New, Courier, monospace;font-weight:bold;border-bottom:solid 2px #999999;padding:5px;margin-top:5px;color:#FFFFFF;text-align:center"><span class="glyphicon glyphicon-pencil"></span> Change Profile Picture
	  </div>
	  <form method="post" enctype="multipart/form-data" style="margin-top:30px;color:#FFFFFF;font-size:22px">
       <input type="file" name="a"/>
       
      
		<div class="row">
	  <div class="col-md-12 col-lg-12" style="padding:10px;font-size:19px;font-weight:bold; text-align:center">
	  <button type="submit" class="btn btn-primary" name="bt" style="background-color:#003399" id="b">Done</button>
	 </div>
	 </div>
		</form></div>
		<div class="col-md-4 col-lg-4" ></div>
</div></div>
</div>	  
</body>
</html>
