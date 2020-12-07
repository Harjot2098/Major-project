<?php 
        session_start();
		$i=$_SESSION['a'];
		$c= mysqli_connect('localhost','root','','cook');
		
		if(isset($_REQUEST['bt']))
		{
		$old_pass=$_POST['old_pass'];
		$new_pass=$_POST['new_pass'];
		$co_pass=$_POST['co_pass'];
 		$q="select * from register where id=$i";
        $r=mysqli_query($c,$q);
        $s=mysqli_fetch_array($r);
		$d=$s['password'];
		if($d==$old_pass){
		  if($new_pass==$co_pass){
			$z="update register set password='$new_pass' where id=$i";
			
			mysqli_query($c,$z);
			header('location:profile.php');
			
		}
		   else{
			echo "<script>alert('Your new and Confirm Password does not match')</script>";
		       }
		}
		else
		{
		echo "<script>alert('Your old password is wrong')</script>";
		}
		
		}
	?>

<html>
<head>
<title>Password</title>
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
<div class="container-fluid" style="background-image:url(images/hny.jpg);background-repeat:repeat;background-size:100% 100%">

  <div class="row" >
      <div class="col-md-3 col-lg-3" ></div>
	  <div class="col-md-6 col-lg-6" style="background:transparent;margin-top:148px;margin-bottom:100px;border:dotted 2px #FFFFFF;border-radius:20px 20px 20px 20px">
	  <div class="row" style="margin-top:20px;font-size:45px;font-weight:bold;border-bottom:solid 2px #999999;padding:5px;color:#FFFFFF;font-family:A Yummy apology;text-align:center"><span class="glyphicon glyphicon-lock"></span> Change password	  </div>
	  <form method="post">
	  <div class="row" style="margin-top:20px">
	     <div class="col-md-4 col-lg-4" style="padding:12px;font-size:29px;color:#FFFFFF;font-family:A Yummy apology;font-weight:bold;margin-top:5px"><span class="glyphicon glyphicon-lock"></span> Old password:</div>
	     <div class="col-md-8 col-lg-8" style="padding:5px"> <input type="password" name="old_pass" required placeholder="Type the old password" style="margin-top:10px;width:93%;padding:5px;color:#FFFFFF;background:transparent"></div>
		</div> 
	  <div class="row" style="margin-top:20px">
	     <div class="col-md-4 col-lg-4" style="padding:12px;font-size:29px;color:#FFFFFF;font-family:A Yummy apology;font-weight:bold;margin-top:5px"><span class="glyphicon glyphicon-lock"></span> New password:</div>
	     <div class="col-md-8 col-lg-8" style="padding:5px"> <input type="password" name="new_pass" required placeholder="Type the new password" style="margin-top:10px;width:93%;padding:5px;color:#FFFFFF;background:transparent"></div>
		</div>
		<div class="row" style="margin-top:20px">
	     <div class="col-md-4 col-lg-4" style="padding:12px;font-size:30px;color:#FFFFFF;font-family:A Yummy apology;font-weight:bold;margin-top:5px"><span class="glyphicon glyphicon-lock"></span> Confirm new password:</div>
	     <div class="col-md-8 col-lg-8" style="padding:5px"> <input type="password" name="co_pass" required placeholder="Confirm the new password" style="margin-top:10px;width:93%;padding:5px;color:#FFFFFF;background:transparent"></div>
		</div> 
	   
	  
 <div class="row">
	  <div class="col-md-12 col-lg-12" style="padding:10px;font-size:19px;font-weight:bold; text-align:center">
	  <button type="submit" class="btn btn-primary" name="bt"  value="rest_password" style="color:#FFFFFF;background-color:#003399" id="b">Reset</button>
	 </div>
	 </div>
</form>
<div class="col-md-3 col-lg-3"></div> 
</div>
</div>	
</div> 
</body>
</html>