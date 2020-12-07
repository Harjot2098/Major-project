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

$ttl=$_POST['rttl'];
$des=$_POST['rdes'];
$ty=$_POST['rty'];
$pmo=$_POST['pmode'];
$pti=$_POST['ptime'];
$in=$_POST['ing'];
$mp=$_POST['mp'];
$ser=$_POST['ser'];

$q="INSERT INTO recipes(title,des,type,mode,time,ing,method,serve,image)VALUES('$ttl','$des','$ty','$pmo','$pti','$in','$mp','$ser','$d')";
$r=mysqli_query($c,$q);
header('location:front.php');

}
?>
<html>
<head>
<title>Post recipe</title>
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
<body>
<div class="container-fluid" style="background-image:url(images/imageedit_1_7764404505.jpg);background-size:100% 100%;background-attachment:fixed" >
<a href="home.php" class="row" ><span class="glyphicon glyphicon-home"></span></a>

  <div class="row" >
    <div class="col-md-2 col-lg-2" ></div>
    <div class="col-md-8 col-lg-8" style="margin-top:100px;margin-bottom:100px;border-radius:20px 20px 20px 20px;background:transparent;border:dotted 2px #FFFFFF"> 
		<div class="row" style="font-size:44px;font-family:Courier New, Courier, monospace;font-weight:bold;border-bottom:solid 2px #FFFFFF;padding:5px;color:#FFFFFF;text-align:center"><span class="glyphicon glyphicon-pencil"></span>Post recipe
	  </div>
	  <div class="row" style="padding:20px">
	  <div class="col-md-6 col-lg-6" style="padding:20px;border:dotted 2px #FFFFFF;margin-top:15px;border-radius:40px 40px 40px 40px">
	  <form method="post" enctype="multipart/form-data" style="padding:5px">
       <input type="file" name="a" style="text-align:center" />
        
     </div>
	  
	  
	  <div class="col-md-6 col-lg-6">
	  <div class="row">
	        <div class="col-md-5 col-lg-5" style="padding:10px;color:#FFFFFF;font-family:Courier New, Courier, monospace;font-size:17px;font-weight:bold;margin-top:15px"><span class="glyphicon glyphicon-tag"></span>Recipe title:</div>
		    <div class="col-md-7 col-lg-7" style="padding:5px"><input type="text" name="rttl" required placeholder="Recipe title" style="width:90%;margin-top:10px;padding:5px;color:#000000;background-color:#CCCCCC"><span class="required">*</span></div>
			</div>	
		  <div class="row">
		    <div class="col-md-5 col-lg-5" style="padding:10px;font-size:17px;;color:#FFFFFF;font-family:Courier New, Courier, monospace;font-weight:bold;margin-top:5px"><span class="glyphicon glyphicon-tag"></span>Recipe Description:</div>
		    <div class="col-md-7 col-lg-7" style="padding:5px"> <textarea  row="6" cols="30" name="rdes"  required placeholder="Recipe name"  style="width:90%;margin-top:10px;padding:5px;color:#000000;background-color:#CCCCCC"></textarea>
		    </div>
		 </div>
		 <div class="row">
	        <div class="col-md-5 col-lg-5" style="padding:10px;color:#FFFFFF;font-family:Courier New, Courier, monospace;font-size:17px;font-weight:bold;margin-top:5px"><span class="glyphicon glyphicon-tag"></span>Recipe Type:</div>
		    <div class="col-md-7 col-lg-7" style="padding:5px"> <select name="rty" id="rty" style="width:90%;margin-top:10px;padding:5px;color:#000000;background-color:#CCCCCC"><span class="required">*</span>
			<option value selected="selected">Select recipe type</option>
			<option>Vegeterian</option>
			<option>Non-Vegeterian</option>
			<option>Drink</option></select>
			</div>
		  </div>	
		 
		  <div class="row">
	        <div class="col-md-5 col-lg-5" style="padding:10px;font-size:17px;color:#FFFFFF;font-family:Courier New, Courier, monospace;font-weight:bold;margin-top:5px"><span class="glyphicon glyphicon-tag"></span>Preparation mode:</div>
		    <div class="col-md-7 col-lg-7" style="padding:5px"> <select name="pmode" id="pmo" style="width:90%;margin-top:10px;padding:5px;color:#000000;background-color:#CCCCCC"><span class="required">*</span>
			<option value selected="selected">Select preparation mode</option>
			<option>Bake</option>
			<option>Freeze</option>
			<option>Grill</option>
			<option>Cook</option>
			</select>
			</div>
		  </div>		
		  <div class="row">
	        <div class="col-md-5 col-lg-5" style="padding:10px;font-size:17px;color:#FFFFFF;font-family:Courier New, Courier monospace;font-weight:bold;margin-top:5px"><span class="glyphicon glyphicon-tag"></span>Preparation time:</div>
		    <div class="col-md-7 col-lg-7" style="padding:5px"><input type="text" name="ptime"   required placeholder="Preparation time(hrs/min/sec)" id="pt" style="width:90%;margin-top:10px;padding:5px;color:#000000;background-color:#CCCCCC"><span class="required">*</span></div>
			</div>	
		  	<div class="row">
		    <div class="col-md-5 col-lg-5" style="padding:10px;color:#FFFFFF;font-family:Courier New, Courier, monospace;font-size:17px;font-weight:bold;margin-top:5px"><span class="glyphicon glyphicon-tag"></span>Ingredients:</div>
		    <div class="col-md-7 col-lg-7" style="padding:5px"> <textarea  rows="6" cols="30" name="ing" required placeholder="Put ingredients one in each line" id="ing" style="width:90%;margin-top:10px;padding:5px;color:#000000;background-color:#CCCCCC"></textarea><span class="required">*</span>
		    </div>
		 </div>
		 <div class="row">
		    <div class="col-md-5 col-lg-5" style="padding:10px;color:#FFFFFF;font-family:Courier New, Courier, monospace;font-size:17px;font-weight:bold;margin-top:5px"><span class="glyphicon glyphicon-tag"></span>Method of preparation:</div>
		    <div class="col-md-7 col-lg-7" style="padding:5px"> <textarea  rows="6" cols="30" name="mp" required placeholder="Write one step in each line" id="mp" style="width:90%;margin-top:10px;padding:5px;color:#000000;background-color:#CCCCCC"></textarea><span class="required">*</span>
		    </div>
		    </div>
			<div class="row">
	        <div class="col-md-5 col-lg-5" style="padding:10px;color:#FFFFFF;font-family:Courier New, Courier, monospace;font-size:17px;font-weight:bold;margin-top:5px"><span class="glyphicon glyphicon-tag"></span>Servings:</div>
		    <div class="col-md-7 col-lg-7" style="padding:5px"><input type="text" name="ser" required placeholder="Servings" id="pt" style="width:90%;margin-top:10px;padding:5px;color:#000000;background-color:#CCCCCC"></div>
			</div>	
	 </div>
	         </div>
	  <div class="row">
			<div class="col-md-12 col-lg-12" style="text-align:center;padding:20px">
			<button type="submit" class="btn btn-primary" name="bt" style="background-color:#003399" id="b">Post</button></div></div>
	
	
	</div></form>
    <div class="col-md-2 col-lg-2"></div>
</div>
</div>
</body>
</html>
