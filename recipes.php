<?php
$c=mysqli_connect('localhost','root','','cook');
session_start();
if(isset($_REQUEST['r1']))
{

 $_SESSION['r']="r1";
header('location:rating.php'); 
}
if(isset($_REQUEST['r2']))
{

 $_SESSION['r']="r2";
header('location:rating.php'); 
}
if(isset($_REQUEST['p']))
{
$fn=$_POST['fnm'];
$ln=$_POST['lnm'];
$em=$_POST['em'];
$p=$_POST['ps'];
$gn=$_POST['rd'];
$q="INSERT INTO register(first_name,last_name,email,password,gender)VALUES('$fn','$ln','$em','$p','$gn')";
mysqli_query($c,$q);
echo "<script>alert('Registration successfull')</script>";
}

?>
<html>
<head>
<title>Ice tea recipes</title>
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
<script src="jq/jquery-1.10.2.js"></script>
<script src="jq/jquery.min.js"></script>
<script src="jq/bootstrap.min.js"></script>
<script src="jq/jQuery.Validate.min.js"></script>
<script src="jq/jquery.transit.min.js"></script>

<script>
$(document).ready(function(){
$("#a").click(function(){
$(this).transition({scale:1.5});
});
$("#zoom").mouseenter(function(){
$(this).transition({scale:2.0})
});
$("#zoom").mouseleave(function(){
$(this).transition({scale:1.0})
});
$("#large").mouseenter(function(){
$(this).transition({scale:2.0})
});
$("#large").mouseleave(function(){
$(this).transition({scale:1.0})
});
});
</script>
<style>
.YSlides
{
width:100%;
height:400px;
}
ul
{
margin-top:20px;
margin-bottom:80px;
margin-left:0px;
}
li
{
list-style-type:none;
display:inline;
font-size:18px;
padding:30px;
}
.link
{
color:#003399;
font-size:12px;
}
.link:hover
{
text-decoration:none;
color:#FFFFFF;
}
/* The Modal (background) */
.modal {
    display:none; 
    position: fixed; 
    z-index: 1; 
    padding-top: 100px; 
    left: 0;
    top: 0;
    width: 100%; 
    height: 100%; 
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
    position: relative;
    background-color: #fefefe;
    margin: auto;
    padding: 0;
    border: 1px solid #888;
    width: 50%;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
    -webkit-animation-name: animatetop;
    -webkit-animation-duration: 0.4s;
    animation-name: animatetop;
    animation-duration: 0.4s
}

/* Add Animation */
@-webkit-keyframes animatetop {
    from {top:-300px; opacity:0} 
    to {top:0; opacity:1}
}

@keyframes animatetop {
    from {top:-300px; opacity:0}
    to {top:0; opacity:1}
}

/* The Close Button */
.close {
    color: white;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}

.modal-header {
    padding: 2px 16px;
    background-color: #ff5200;
    color: white;
}

.modal-body {padding: 2px 16px;}

.modal2 {
    display:none; 
    position: fixed; 
    z-index: 1; 
    padding-top: 100px; 
    left: 0;
    top: 0;
    width: 100%; 
    height: 100%; 
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

#cssmenu {
  background: none;
  margin-top: 80px;
  width: auto;
  padding: 0;
  line-height: 1;
  display: block;
  position: relative;
  font-family: 'PT Sans', sans-serif;
  z-index: 9999;
}
#cssmenu ul {
  list-style: none;
  margin: 0;
  padding: 0;
  display: block;
}
#cssmenu ul:after,
#cssmenu:after {
  content: " ";
  display: block;
  font-size: 0;
  height: 0;
  clear: both;
  visibility: hidden;
}
#cssmenu ul li {
  margin: 0;
  padding: 0;
  display: block;
  position: relative;
}
#cssmenu ul li a {
  text-decoration: none;
  display: block;
  margin: 0;
  -webkit-transition: color .2s ease;
  -moz-transition: color .2s ease;
  -ms-transition: color .2s ease;
  -o-transition: color .2s ease;
  transition: color .2s ease;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  color:#000000;
}
#cssmenu ul li ul {
  position: absolute;
  left: -9999px;
  top: auto;
}
#cssmenu ul li ul li {
  max-height: 0;
  position: absolute;
  -webkit-transition: max-height 0.4s ease-out;
  -moz-transition: max-height 0.4s ease-out;
  -ms-transition: max-height 0.4s ease-out;
  -o-transition: max-height 0.4s ease-out;
  transition: max-height 0.4s ease-out;
  background:#000000 ;
  color:#FFFFFF;
}
#cssmenu ul li ul li.has-sub:after {
  display: block;
  position: absolute;
  content: "";
  height: 10px;
  width: 10px;
  border-radius: 5px;
  background: #000000;
  z-index: 1;
  top: 13px;
  right: 15px;
}
#cssmenu.align-right ul li ul li.has-sub:after {
  right: auto;
  left: 15px;
}
#cssmenu ul li ul li.has-sub:before {
  display: block;
  position: absolute;
  content: "";
  height: 0;
  width: 0;
  border: 3px solid transparent;
  border-left-color: #ffffff;
  z-index: 2;
  top: 15px;
  right: 15px;
}
#cssmenu.align-right ul li ul li.has-sub:before {
  right: auto;
  left: 15px;
  border-left-color: transparent;
  border-right-color: #ffffff;
}
#cssmenu ul li ul li a {
  font-size: 18px;
  font-weight: 400;
  text-transform: none;
  color:#FFFFFF;
  letter-spacing: 0;
  display: block;
  width: 170px;
  padding: 11px 10px 11px 20px;
}
#cssmenu ul li ul li:hover > a,
#cssmenu ul li ul li.active > a {
  color: #FFF200;
}
#cssmenu ul li ul li:hover:after,
#cssmenu ul li ul li.active:after {
  background: #FFF200;
}
#cssmenu ul li ul li:hover > ul {
  left: 100%;
  top: 0;
}
#cssmenu ul li ul li:hover > ul > li {
  max-height: 72px;
  position: relative;
}
#cssmenu > ul > li {
  float: left;
}
#cssmenu.align-center > ul > li {
  float: none;
  display: inline-block;
}
#cssmenu.align-center > ul {
  text-align: center;
}
#cssmenu.align-center ul ul {
  text-align: left;
}
#cssmenu.align-right > ul {
  float: right;
}
#cssmenu.align-right > ul > li:hover > ul {
  left: auto;
  right: 0;
}
#cssmenu.align-right ul ul li:hover > ul {
  right: 100%;
  left: auto;
}
#cssmenu.align-right ul ul li a {
  text-align: right;
}
#cssmenu > ul > li:after {
  content: "";
  display: block;
  position: absolute;
  width: 100%;
  height: 0;
  top: 0;
  z-index: 0;
  background:#000000;
  -webkit-transition: height .2s;
  -moz-transition: height .2s;
  -ms-transition: height .2s;
  -o-transition: height .2s;
  transition: height .2s;
}
#cssmenu > ul > li.has-sub > a {
  padding-right: 40px;
}
#cssmenu > ul > li.has-sub > a:after {
  display: block;
  content: "";
  background: #ffffff;
  height: 12px;
  width: 12px;
  position: absolute;
  border-radius: 13px;
  right: 14px;
  top: 16px;
}
#cssmenu > ul > li.has-sub > a:before {
  display: block;
  content: "";
  border: 4px solid transparent;
  border-top-color: #FFF200;
  z-index: 2;
  height: 0;
  width: 0;
  position: absolute;
  right: 16px;
  top: 21px;
}
#cssmenu > ul > li > a {
 font-family:"Cooper Black";
  padding: 15px 20px;
  font-weight: 700;
  letter-spacing: 1px;
  text-transform: uppercase;
  font-size: 20px;
  z-index: 2;
  position: relative;

}
#cssmenu > ul > li:hover:after,
#cssmenu > ul > li.active:after {
  height: 100%;
}
#cssmenu > ul > li:hover > a,
#cssmenu > ul > li.active > a {
  color:#003399;
}
#cssmenu > ul > li:hover > a:after,
#cssmenu > ul > li.active > a:after {
  background:#00CC66;
}
#cssmenu > ul > li:hover > a:before,
#cssmenu > ul > li.active > a:before {
  border-top-color: #ffffff;
}
#cssmenu > ul > li:hover > ul {
  left: 0;
}
#cssmenu > ul > li:hover > ul > li {
  max-height: 72px;
  position: relative;
}
#cssmenu #menu-button {
  display: none;
}
#cssmenu > ul > li > a {
  display: block;
}
#cssmenu > ul > li {
  width: auto;
}
#cssmenu > ul > li > ul {
  width: 170px;
  display: block;
}
#cssmenu > ul > li > ul > li {
  width: 170px;
  display: block;
}
@media all and (max-width: 800px), only screen and (-webkit-min-device-pixel-ratio: 2) and (max-width: 1024px), only screen and (min--moz-device-pixel-ratio: 2) and (max-width: 1024px), only screen and (-o-min-device-pixel-ratio: 2/1) and (max-width: 1024px), only screen and (min-device-pixel-ratio: 2) and (max-width: 1024px), only screen and (min-resolution: 192dpi) and (max-width: 1024px), only screen and (min-resolution: 2dppx) and (max-width: 1024px) {
  #cssmenu > ul {
    max-height: 0;
    overflow: hidden;
    -webkit-transition: max-height 0.35s ease-out;
    -moz-transition: max-height 0.35s ease-out;
    -ms-transition: max-height 0.35s ease-out;
    -o-transition: max-height 0.35s ease-out;
    transition: max-height 0.35s ease-out;
  }
  #cssmenu > ul > li > ul {
    width: 100%;
    display: block;
  }
  #cssmenu.align-right ul li a {
    text-align: left;
  }
  #cssmenu > ul > li > ul > li {
    width: 100%;
    display: block;
  }
  #cssmenu.align-right ul ul li a {
    text-align: left;
  }
  #cssmenu > ul > li > ul > li > a {
    width: 100%;
    display: block;
  }
  #cssmenu ul li ul li a {
    width: 100%;
  }
  #cssmenu.align-center > ul {
    text-align: left;
  }
  #cssmenu.align-center > ul > li {
    display: block;
  }
  #cssmenu > ul.open {
    max-height: 1000px;
    border-top: 1px solid rgba(110, 110, 110, 0.25);
	background-color:#CCCCCC;
  }
  #cssmenu ul {
   
  }
  #cssmenu ul > li {
    float: none;
    width: 100%;
  }
  #cssmenu ul li a {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
    width: 100%;
    padding: 12px 20px;
  }
  #cssmenu ul > li:after {
    display: none;
  }
  #cssmenu ul li.has-sub > a:after,
  #cssmenu ul li.has-sub > a:before,
  #cssmenu ul li ul li.has-sub:after,
  #cssmenu ul li ul li.has-sub:before {
    display: none;
  }
  #cssmenu ul li ul,
  #cssmenu ul li ul li ul,
  #cssmenu ul li ul li:hover > ul,
  #cssmenu.align-right ul li ul,
  #cssmenu.align-right ul li ul li ul,
  #cssmenu.align-right ul li ul li:hover > ul {
    left: 0;
    position: relative;
    right: auto;
  }
  #cssmenu ul li ul li,
  #cssmenu ul li:hover > ul > li {
    max-height: 999px;
    position: relative;
    background: none;
  }
  #cssmenu ul li ul li a {
    padding: 8px 20px 8px 35px;
    color: #ffffff;
  }
  #cssmenu ul li ul ul li a {
    padding: 8px 20px 8px 50px;
  }
  #cssmenu ul li ul li:hover > a {
    color: #000000;
  }
  #cssmenu #menu-button {
    display: block;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
    width: 100%;
	font-family:"Cooper Black";
    padding: 15px 20px;
    text-transform: uppercase;
    font-weight: 700;
    font-size: 18px;
    letter-spacing: 1px;
    color: #000000;
    cursor: pointer;
  }
  #cssmenu #menu-button:after {
    display: block;
    content: '';
    position: absolute;
    height: 3px;
    width: 22px;
    border-top: 2px solid #000000;
    border-bottom: 2px solid #000000;
    right: 20px;
    top: 16px;
  }
  #cssmenu #menu-button:before {
    display: block;
    content: '';
    position: absolute;
    height: 3px;
    width: 22px;
    border-top: 2px solid #000000;
    right: 20px;
    top: 26px;
  }
  #cssmenu ul li ul li:hover > a {
		color:#000000;
	}
	#cssmenu > ul > li:hover > a,
	#cssmenu > ul > li.active > a {
	  color: #FFF200;
}

</style>
</head>
<body >
<div class="col-md-12 col-lg-12" style="background-image:url(images/background11-e1430826539520.jpg);background-size:100% 100%;background-repeat:no-repeat;background-attachment:fixed">
<div class="container-fluid" >
  <div class="row" style="z-index:0" > 
    <div class="col-md-1 col-lg-1" style="text-align:left"><a href="index.php"><img src="images/s.png"></a></div>
         <div class="wrap-body wrap-header col-md-11 col-lg-11" style="margin-top:0px">
				<div id="cssmenu"  class="align-right"  style="margin-top:10px">
				  <ul style="color:#ffffff">
				    <li ><a href="index.php"><span class="glyphicon glyphicon-home"></span> HOME</a></li>
	                <li class="has-sub active"><a class="dropdown-toggle" data-toggle="dropdown"  href="recipes.php"><span class="glyphicon glyphicon-cutlery"></span> RECIPES</a>
		               <ul>
						 <li class="has-sub active"><a href="recipes.php">Ice Tea recipes</a></li>
		                 <li class="has-sub"><a href="recipes2.php">Summer Delicious recipes</a></li>
		                 <li class="has-sub"><a href="recipes3.php">Chocolate-bar Inspired recipes</a></li>
		                 <li class="has-sub"><a href="recipes4.php">Easy Student recipes</a></li>
		                 <li class="has-sub"><a href="recpies5.php">Vegetarian Curry recipes</a></li>
		                 <li class="has-sub"><a href="recipes6.php">Watermelon recipes</a></li>
						 <li class="has-sub"><a href="recipes7.php">Veggie Soup recipes</a></li>
					  </ul>
			      </li>
				  <li><a href="postrecipe.php"><span class="glyphicon glyphicon-comment"></span> POST RECIPE</a></li>
                  <li><a href="#" id="myBtn" ><span class="glyphicon glyphicon-user"></span> REGISTER</a></li>
	              <li><a href="login.php"  ><span class="glyphicon glyphicon-log-in"></span> LOG IN</a></li>
				   <li><a href="front.php"  ><span class="glyphicon glyphicon-edit"></span> USER-POSTS</a></li>
				</ul>
		       </div>
	      </div>
	</div>

 <div id="myModal" class="modal">
  <div class="modal-content">
    <div class="modal-header ">
      <span class="close">&times;</span>
        <div class="row" style="font-size:36px;font-weight:bold;border-bottom:solid 2px #999999;padding:5px;color:#003399;text-align:center"><span class="glyphicon glyphicon-pencil"></span>Register
	  </div>
	 </div>
	<div class="modal-body">
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
	    <input type="submit" name="p" style="color:#FFFFFF;background-color:#003399; color:#FFFFFF;text-decoration:none" class="btn btn-primary">
	  </div>
	 </div>
	 
	 <div class="row">
	  <div class="col-md-12 col-lg-12" style="padding:10px;font-size:13px;font-weight:bold; text-align:center">Already a member?
	  <a href="login.php" >Sign in now.</a>
	  </div>
	 </div> 
	 </form>
	 </div>
   </div>
   </div>
  
  <div class="row">
     <div class="col-md-4 col-lg-4"></div>
     <div class="col-md-4 col-lg-4" style="font-size:36px;font-weight:bold;color:#2B0000;padding:10px;border-bottom:dotted;line-length:10px;text-align:center"><span class="glyphicon glyphicon-glass"></span>ICED TEA RECIPES<span class="glyphicon glyphicon-glass"></span></div>
     <div class="col-md-4 col-lg-4"></div>
  </div>
  
  <div class="row">
    <div class="col-md-2 col-lg-2"></div>
	<div class="col-md-4 col-lg-4"><span class="glyphicon  glyphicon-glass" style="font-size:17px;color:#2B0000;padding:20px;font-weight:bold">CUCUMBER AND LEMON ICED TEA</span>
	     <div class="row" style="background-image:url(images/cucumbertea.jpg);border:groove #400000 5px;border-radius:40px 0px 40px 0px;background-size:100% 100%;padding:140px"></div>
		 <div class="row" style="font-family:'Cooper Black';color:#400000;font-weight:bold;font-size:16px;margin-top:10px;margin-bottom:20px;border:dotted 1px;text-align:center"> 
		    <div class="col-md-6 col-lg-6"> <span class="glyphicon glyphicon-dashboard"></span> Prep time : 30 min.</div>
			<div class="col-md-6 col-lg-6"><span class="glyphicon glyphicon-glass"></span> Servings : 2 glasses</div>
		 </div>	
	   </div>
	<div class="col-md-1 col-lg-1"></div>
	<div class="col-md-3 col-lg-3">
	    <div class="row">
		    <div class="col-md-12 col-lg-12" style="padding:20px">
			   <p style="color:#2B0000;font-size:17px;font-weight:bold">Ingredients:</p>
			   <p><span class="glyphicon glyphicon-paperclip" style="font-size:19px;color:#743A3A">1 (150g) Lebanese cucumber, trimmed.</span></p>
               <p><span class="glyphicon glyphicon-paperclip" style="font-size:19px;color:#743A3A">2 x 350ml Zesty Lemon Iced Tea, chilled.</span></p>
               <p><span class="glyphicon glyphicon-paperclip" style="font-size:19px;color:#743A3A">1/4 cup fresh mint leaves.</span></p>
               <p><span class="glyphicon glyphicon-paperclip" style="font-size:19px;color:#743A3A">2 teaspoons caster sugar.</span></p>
               <p><span class="glyphicon glyphicon-paperclip" style="font-size:19px;color:#743A3A">Ice cubes for serving, optional.</span></p>
               <p><span class="glyphicon glyphicon-paperclip" style="font-size:19px;color:#743A3A">Thin lemon slices, for serving, optional.</span></p>
               <p><span class="glyphicon glyphicon-paperclip" style="font-size:19px;color:#743A3A">Baby cucumber slices, for serving, optional.</span></p>
			</div>
		</div>
		
	</div>
	<div class="col-md-2 col-lg-2"></div>
  </div>
  <div class="row">
    <div class="col-md-2 col-lg-2"></div>
	<div class="col-md-8 col-lg-8">
	   <p style="color:#2B0000;font-size:17px;font-weight:bold">Method of preparation:</p>
	   <p style="font-size:14px;color:#743A3A;font-weight:bold"><span style="color:#2B0000">�	Step 1</span>
Cut cucumber into four, place in a plastic bag and freeze for 2-3 hours or until frozen.</p>
<p style="font-size:14px;color:#743A3A;font-weight:bold"><span style="color:#2B0000">�	Step 2</span>
Place frozen cucumber and iced tea in a high powered blender. Process 1-2 minutes until smooth.<p>
<p style="font-size:14px;color:#743A3A;font-weight:bold"><span style="color:#2B0000">�	Step 3</span>
Finely chop mint and combine with sugar in a bowl.</p>
<p style="font-size:14px;color:#743A3A;font-weight:bold"><span style="color:#2B0000">�	Step 4</span>
Divide some ice between serving glasses. Top with tea mixture. Add some lemon and cucumber slices and scatter with the mint sugar to serve.</p>

<div class="row" style="border:dotted 1px">;
    <div class="row" style="font-size:20px;font:color:#000033;font-weight:bold;font-family:'Cooper Black'"><center>Give Reviews</center></div>
    <div class="row" style="padding:20px">
         <div class="col-md-6 col-lg-6"  >
		      <div class="row" >
                <form  method="POST" enctype="multipart/form-data">
                  <div class="col-md-12 col-lg-12"  style="font-family:Berlin Sans FB;color:#2B0000;font-size:20px;background:transparent">Select image:</div>
                     <div class="col-md-12 col-lg-12"><input type="file" name="a" style="font-size:10px;padding-bottom:10px"/></div>
				 
                       <table >
                         <tr><td class="col-md-12 col-lg-12" style="font-family:Berlin Sans FB;color:#2B0000;font-size:20px;background:transparent">Email: </td></tr>
                         <tr><td class="col-md-12 col-lg-12"><input type="email" name="email"/></td></tr>
                         <tr><td class="col-md-12 col-lg-12" style="font-family:Berlin Sans FB;color:#2B0000;font-size:20px;background:transparent">Comment: </td></tr>
                         <tr><td class="col-md-12 col-lg-12"><textarea name="comment" required rows="10" cols="40"></textarea></td></tr>
                         <tr><td class="col-md-12 col-lg-12"><input type="submit"  required name="re1" value="Comment" style="margin-top:20px"></td></tr>
                       </table>
                </form>
			  </div>
                <form method="post">
	              <span class="glyphicon glyphicon-star" style="color:#FFFF00"></span> <input class="btn btn-default" type="submit" name="r1" value="Rate the recipe" style="background:#996666;font-size:16px;font-weight:bolder"> <span class="glyphicon glyphicon-star" style="color:#FFFF00"></span></form>
           </div>
           <div class="col-md-6 col-lg-6" style="text-align:center;font-family:Berlin Sans FB;color:#000099;font-size:20px;text-decoration:underline;margin-bottom:30px"> User Reviews

<?php
$c=mysqli_connect('localhost','root',"",'cook');
if(isset($_REQUEST['re1']))
{
$d=$_FILES["a"]["name"];
$_FILES["a"]["size"];
$e=$_FILES["a"]["tmp_name"];
$_FILES["a"]["type"];
move_uploaded_file($e,"upload/".$d);
$email=$_POST['email'];
$comment=$_POST['comment'];
$q="INSERT INTO review (email,comment,image,r_name) VALUES ('$email','$comment','$d','r1') ";
mysqli_query($c,$q);

}
$sql="SELECT * FROM review where r_name='r1'";
$getquery= mysqli_query($c,$sql);
while($s= mysqli_fetch_array($getquery))
{
$email=$s['email'];
$comment=$s['comment'];
$st=$s['rating'];

echo " <div class='row'>";
echo  " <div class='col-md-1 col-lg-1'>";
echo"</div>";
echo  " <div class='col-md-10 col-lg-10'>";
   echo  " <div class='col-md-3 col-lg-3' style='float:left;margin-top:35px'>";
   echo  "<img src='upload/".$s['image']."'height=62 class='image'>";
   echo  "</div>"; 
   echo "<br>";
   echo  " <div class='col-md-9 col-lg-9' style='float:left'>"; 
   echo  " <div class='row' >";
     echo " <div class='col-md-3 col-lg-3' style='font-family:Berlin Sans FB;color:#000099;font-size:17px'>Rating:";
   echo " </div>";
    echo "<div class='col-md-9 col-lg-9' style='float:left;font-size:17px;color:#990033'>$st";
      echo " </div>";
	  echo " </div>";
     echo  " <div class='row' >";
	 echo  " <div class='col-md-3 col-lg-3' style='font-family:Berlin Sans FB;color:#000099;font-size:17px;'>Email:";
	 echo  "</div>";
	echo  " <div class='col-md-9 col-lg-9' style='float:left;font-size:17px;color:#990033'> $email";
	 echo  "</div>";
	 echo  "</div>";
	 
     echo  " <div class='row' >";
	  echo  " <div class='col-md-5 col-lg-5' style='font-family:Berlin Sans FB;color:#000099;font-size:17px;'>Comment:";
	 echo  "</div>";
	echo  " <div class='col-md-7 col-lg-7' style='float:left;font-size:17px;color:#990033'> $comment";
	echo  "</div>";
	  echo  "</div>";
	  echo  "</div>";
	  echo  "</div>";
	  echo  " <div class='col-md-1 col-lg-1'>";
   echo  "</div>";
echo  "</div>";	  
	  
}

?></div>
 </div>
 </div>
</div>
	<div class="col-md-2 col-lg-2"></div>
	
  </div>
  
   <div class="row">
     <div class="col-md-2 col-lg-2"></div>
	 <div class="col-md-4 col-lg-4"><span class="glyphicon  glyphicon-glass" style="font-size:17px;color:#2B0000;padding:20px;font-weight:bold">PEACH AND MINT ICED TEA</span>
	   <div class="row">
	     <div class="col-md-12 col-lg-12" style="background-image:url(images/granita_1980x1320-121102-1.jpg);border:groove #400000 5px;border-radius:40px 0px 40px 0px;background-size:100% 100%;padding:140px"></div>
		 <div class="col-md-12 col-lg-12" style="font-family:'Cooper Black';color:#400000;font-weight:bold;font-size:16px;margin-top:10px;margin-bottom:20px;border:dotted 1px;text-align:center"> 
		    <div class="col-md-6 col-lg-6"> <span class="glyphicon glyphicon-dashboard"></span> Prep time : 6 hrs 20 min.</div>
			<div class="col-md-6 col-lg-6"><span class="glyphicon glyphicon-glass"></span> Servings : 6</div>
		 </div>	
	   </div>
	</div>
	<div class="col-md-1 col-lg-1"></div>
	<div class="col-md-3 col-lg-3">
	    <div class="row">
		    <div class="col-md-12 col-lg-12" style="padding:20px">
			   <p style="color:#2B0000;font-size:17px;font-weight:bold">Ingredients:</p>
			   <p><span class="glyphicon glyphicon-paperclip" style="font-size:19px;color:#743A3A">4 cups (1 litre) Fuze Juicy Peach Iced Tea.</span></p>
               <p><span class="glyphicon glyphicon-paperclip" style="font-size:19px;color:#743A3A">2 peaches, stones removed.</span></p>
               <p><span class="glyphicon glyphicon-paperclip" style="font-size:19px;color:#743A3A">1/4 cup fresh mint leaves</span></p>
               <p><span class="glyphicon glyphicon-paperclip" style="font-size:19px;color:#743A3A">20g pkt freeze dried peaches</span></p>
               <p><span class="glyphicon glyphicon-paperclip" style="font-size:19px;color:#743A3A">Ice cubes for serving, optional.</span></p>
               <p><span class="glyphicon glyphicon-paperclip" style="font-size:19px;color:#743A3A">Small fresh mint leaves, optional</span></p>
			</div>
		</div>
	</div>
	<div class="col-md-2 col-lg-2"></div>
  </div>
  <div class="row" >
    <div class="col-md-2 col-lg-2"></div>
	<div class="col-md-8 col-lg-8">
	   <p style="color:#2B0000;font-size:17px;font-weight:bold">Method of preparation:</p>
	   <p style="font-size:14px;color:#743A3A;font-weight:bold"><span style="color:#2B0000">�	Step 1</span>
	   Combine tea, peach flesh and mint leaves in a blender. Process 1-2 minutes or until almost smooth.</p>
       <p style="font-size:14px;color:#743A3A;font-weight:bold"><span style="color:#2B0000">�	Step 2</span>
       Strain mixture into a 4 x 20 x 30 cm rectangular tin. Place in the freezer 4-5 hours or until firm<p>
       <p style="font-size:14px;color:#743A3A;font-weight:bold"><span style="color:#2B0000">�	Step 3</span>
       Place dried peaches in a food processor and process until fine.</p>
       <p style="font-size:14px;color:#743A3A;font-weight:bold"><span style="color:#2B0000">�	Step 4</span>
       Scrape the granita with a fork and spoon into chilled serving glasses. Scatter over peach powder and top with extra mint leaves to serve alone with ice cubes.</p>
	   <div class="col-md-12 col-lg-12 " style="margin-top:20px">

 <div class="row" style="border:dotted 1px">;
      <div class="row" style="font-size:20px;font:color:#000033;font-weight:bold;font-family:'Cooper Black'"><center>Give Reviews</center></div>
          <div class="row" style="padding:20px">
            <div class="col-md-6 col-lg-6"  >
	           <div class="row" >
                 <form  method="POST" enctype="multipart/form-data" >
                    <div class="col-md-12 col-lg-12"  style="font-family:Berlin Sans FB;color:#2B0000;font-size:20px;background:transparent">Select image:</div>
                      <div class="col-md-12 col-lg-12"><input type="file" name="a" style="font-size:10px;padding-bottom:10px"/></div>
                  
<table >
<tr><td class="col-md-12 col-lg-12" style="font-family:Berlin Sans FB;color:#2B0000;font-size:20px;background:transparent">Email: </td></tr>
<tr><td class="col-md-12 col-lg-12"><input type="email" name="email"/></td></tr>
<tr><td class="col-md-12 col-lg-12" style="font-family:Berlin Sans FB;color:#2B0000;font-size:20px;background:transparent">Comment: </td></tr>
<tr><td class="col-md-12 col-lg-12"><textarea name="comment" required rows="10" cols="40"></textarea></td></tr>
<tr><td class="col-md-12 col-lg-12"><input type="submit"  required name="re2" value="Comment" style="margin-top:20px"></td></tr>
</table>
                 </form>
				</div>
                 <form method="post">
	             <span class="glyphicon glyphicon-star" style="color:#FFFF00"></span> <input class="btn btn-default" type="submit" name="r2" value="Rate the recipe" style="background:#996666;font-size:16px;font-weight:bolder">  <span class="glyphicon glyphicon-star" style="color:#FFFF00"></span></form>
            </div>
          <div class="col-md-6 col-lg-6" style="text-align:center;font-family:Berlin Sans FB;color:#000099;font-size:20px;text-decoration:underline;margin-bottom:30px"> User Reviews

<?php
$c=mysqli_connect('localhost','root',"",'cook');
if(isset($_REQUEST['re2']))
{
$d=$_FILES["a"]["name"];
$_FILES["a"]["size"];
$e=$_FILES["a"]["tmp_name"];
$_FILES["a"]["type"];
move_uploaded_file($e,"upload/".$d);
$email=$_POST['email'];
$comment=$_POST['comment'];
$q="INSERT INTO review (email,comment,image,r_name) VALUES ('$email','$comment','$d','r2') ";
mysqli_query($c,$q);

}
$sql="SELECT * FROM review where r_name='r2'";
$getquery= mysqli_query($c,$sql);
while($s= mysqli_fetch_array($getquery))
{
$email=$s['email'];
$comment=$s['comment'];
$st=$s['rating'];

echo " <div class='row'>";
echo  " <div class='col-md-1 col-lg-1'>";
echo"</div>";
echo  " <div class='col-md-10 col-lg-10'>";
   echo  " <div class='col-md-4 col-lg-4' style='float:left;margin-top:35px'>";
   echo  "<img src='upload/".$s['image']."'height=62 class='image'>";
   echo  "</div>"; 
   echo "<br>";
   echo  " <div class='col-md-8 col-lg-8' style='float:left'>"; 
   echo  " <div class='row' >";
     echo " <div class='col-md-3 col-lg-3' style='font-family:Berlin Sans FB;color:#000099;font-size:17px'>Rating:";
   echo " </div>";
    echo "<div class='col-md-9 col-lg-9' style='float:left;font-size:17px;color:#990033'>$st";
      echo " </div>";
	  echo " </div>";
     echo  " <div class='row' >";
	 echo  " <div class='col-md-3 col-lg-3' style='font-family:Berlin Sans FB;color:#000099;font-size:17px;'>Email:";
	 echo  "</div>";
	echo  " <div class='col-md-9 col-lg-9' style='float:left;font-size:17px;color:#990033'> $email";
	 echo  "</div>";
	 echo  "</div>";
	 
     echo  " <div class='row' >";
	  echo  " <div class='col-md-5 col-lg-5' style='font-family:Berlin Sans FB;color:#000099;font-size:17px;'>Comment:";
	 echo  "</div>";
	echo  " <div class='col-md-7 col-lg-7' style='float:left;font-size:17px;color:#990033'> $comment";
	echo  "</div>";
	  echo  "</div>";
	  echo  "</div>";
	  echo  "</div>";
	  echo  " <div class='col-md-1 col-lg-1'>";
   echo  "</div>";
echo  "</div>";	  
	  
}

?>
</div></div></div></div>

	<div class="col-md-2 col-lg-2"></div>
  </div>
 
  <div class="row">
      <div class="col-md-12 col-lg-12">
	  <ul class="pager">
        <li><a href="index.php"  style="font-weight:bold;color:#FFFFFF;background-color:#000033" id="zoom">Previous</a></li>
        <li><a href="recipes2.php"  style="font-weight:bold;color:#FFFFFF;background-color:#000033" id="large">Next</a></li>
      </ul>		
  
	  <p style="font-family:Trebuchet MS;color:#000033;font-size:13px;text-align:center;padding:2px">
	�2017 All Rights Reserved. </p>
	<p style="font-family:Trebuchet MS;color:#000033;font-size:13px;text-align:center;color:#000033;padding:1px"> Privacy Policy | Relevant Ads Opt-Out | Cookie Policy | Advertise | Legal Notices</p>
	 
	  </div>
	</div>  
</div></div>
<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script> 
</body>
</html>
