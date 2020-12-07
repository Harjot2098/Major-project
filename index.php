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
<title>Yummy Foods</title>
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="bootstrap/css/animate.css">

<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
<script src="bootstrap/js/jquery1111.min.js" type="text/javascript"></script>
<script src="bootstrap/js/script.js"></script>
   
<script src="jq/jquery.js"></script>
<script src="jq/jquery.min.js"></script>
<script src="jq/bootstrap.min.js"></script>

<script src="jq/jQuery.Validate.min.js"></script>
<script src="jq/jquery.transit.min.js"></script>


<script>
$(document).ready(function(){
$("#a").click(function(){
$(this).transition({scale:1.5});
});

$("#b").mouseenter(function(){
$(this).transition({skewY:'30deg'})
});
$("#b").mouseleave(function(){
$(this).transition({skewY:'0deg'});
});
$("#c").mouseenter(function(){
$(this).transition({skewY:'30deg'});
});
$("#c").mouseleave(function(){
$(this).transition({skewY:'0deg'});
});
$("#d").mouseenter(function(){
$(this).transition({skewY:'30deg'});
});
$("#d").mouseleave(function(){
$(this).transition({skewY:'0deg'});
});
$("#e").mouseenter(function(){
$(this).transition({skewY:'30deg'});
});
$("#e").mouseleave(function(){
$(this).transition({skewY:'0deg'});
});
$("#large").mouseenter(function(){
$(this).transition({scale:2.0})
});
$("#large").mouseleave(function(){
$(this).transition({scale:1.0})
});
$("#x").mouseenter(function(){
$(this).transition({scale:1.4})
});
$("#x").mouseleave(function(){
$(this).transition({scale:1.0});
});

});
</script>
<style>
.hhh:hover
{
 background-color:#FF6699; !important

 }
.YSlides
{
width:100%;
height:550px;
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

.gallery
{
font-family:Curmudgeonly;
font-size:30px;
font-weight:bolder;
margin-bottom:400px;
margin-top:50px;
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

<body>
<div class="container-fluid" >
   <div class="row" style="background-image:url(images/images1/widget.jpg);background-repeat:no-repeat;background-size:100% 100%">
    <div class="col-md-12 col-lg-12">
         <div class="col-md-1 col-lg-1" style="text-align:left"><a href="index.php"><img src="images/s.png"></a></div>
         <div class="wrap-body wrap-header col-md-11 col-lg-11" style="margin-top:0px;z-index:0">
				<div id="cssmenu"  class="align-right"  style="margin-top:10px">
				  <ul style="color:#ffffff">
				    <li class="active"><a href="index.php"><span class="glyphicon glyphicon-home"></span> HOME</a></li>
	                <li class="has-sub"><a class="dropdown-toggle" data-toggle="dropdown"  href="recipes.php"><span class="glyphicon glyphicon-cutlery"></span> RECIPES</a>
		               <ul>
						 <li class="has-sub"><a href="recipes.php">Ice Tea recipes</a></li>
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
     <div class="col-md-12 col-lg-12" style="margin-top:220px;margin-bottom:0px">
	     <div class="col-md-6 col-lg-6 "> <a href="gallery.php" style="padding:10px;line-height:normal;text-align:bottom;text-decoration:blink;color:#000000;font-size:150px;font-family:'A Cut Above The Rest';font-weight:bolder">Food gallery</a></div>
	      <div class="col-md-6 col-lg-6 ">
               <ul style="text-align:right" type="none">
	              <li  class="bottom-social" ><a href=""><img src="images/1493894849_Facebook_Solid.png" class="hhh"></a></li>
	              <li ><a href=""><img src="images/1493895190_Instagram_Solid.png" class="hhh"></a></li>
	              <li ><a href="" ><img src="images/1493895398_Twitter_Solid.png" class="hhh"></a></li>
	              <li ><a href=""><img src="images/1493896270_googleplus-2048-black.png" class="hhh"></a></li>
	           </ul>
           </div> 
	 </div>
		 <?php
$c=mysqli_connect('localhost','root','','cook');
if(isset($_REQUEST['reg']))
{
$fn=$_POST['fnm'];
$ln=$_POST['lnm'];
$em=$_POST['em'];
$p=$_POST['ps'];
$gn=$_POST['rd'];



$q="INSERT INTO register(first_name,last_name,email,password,gender)VALUES('$fn','$ln','$em','$p','$gn')";
mysqli_query($c,$q);
echo "<script>alert('Registration successful')</script>";
}
?>
    <div id="myModal" class="modal">
       <div class="modal-content">
          <div class="modal-header ">
            <span class="close">&times;</span>
              <div class="row" style="font-size:36px;font-weight:bold;border-bottom:solid 2px #999999;padding:5px;color:#003399;text-align:center"><span class="glyphicon glyphicon-pencil"></span>Register</div>
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
	          <div class="col-md-8 col-lg-8" style="padding:5px;font-size:19px;font-weight:bold;margin-top:5px"> 
			     <input type="radio" name="rd" value="male" style="color:#666666;background-color:#CCCCCC">Male
	             <input type="radio" name="rd" value="female" style="color:#666666;background-color:#CCCCCC;font-weight:bold;margin-top:5px">Female</div>
	      </div>
	 
	
	     <div class="row">
	          <div class="col-md-12 col-lg-12" style="padding:10px;font-size:19px;font-weight:bold; text-align:center">
	              <input type="submit" name="reg" style="color:#FFFFFF;background-color:#003399; color:#FFFFFF;text-decoration:none" class="btn btn-primary"></div>
	     </div>
	 
	     <div class="row">
	          <div class="col-md-12 col-lg-12" style="padding:10px;font-size:13px;font-weight:bold; text-align:center">Already a member?
	          <a href="login.php" >Sign in now.</a>	  </div>
	     </div> 
	  </form>
	 </div>
	</div>
  </div>	</div>
  
  <div class="row">
     <div class="col-md-12 col-lg-12" style="background-image:url(images/images1/footer.jpg);background-size:100% 100%;background-repeat:no-repeat;background-attachment:fixed;font-size:60px;color:#FFFFFF;font-weight:bolder;font-family:A Yummy apology"><marquee direction="up" scrollamount="4" loop="20">Yummy Foods has a massive collection of recipes that are submitted and reviewed by people who are passionate about food.  If you are a parent with young kids and you are looking for new ways to keep your little darlings eating healthily and entertained at the same time, this website should be on your list of recipes favorites. </marquee>
	 </div>
 </div>
	<div class="row" style="background-color:#FFFFFF">
	   <div class="col-md-4 col-lg-4"></div>
	   <div class="col-md-4 col-lg-4" style="font-family:Verdana, Arial, Helvetica, sans-serif;text-alignment:center;color:#000033;font-size:40px;padding:50px"><b><center><span class="glyphicon glyphicon-heart"></span>TRY THESE<span class="glyphicon glyphicon-heart"></span></center></b></div>
	   <div class="col-md-4 col-lg-4"></div>
	</div>   
	<div class="row" style="background-color:#FFFFFF">
	   <div class="col-md-4 col-lg-4">
	      <div class="row">
		      <div class="col-md-12 col-lg-12">
	          <a href="recipes4.php" class="col-md-12 col-lg-12 "><center><img src="images/imageedit_1_5215501483.png" style="border:groove 10px;border-radius:100%"></center></a>		              </div>
		   </div>
	         <p style="font-family:Verdana, Arial, Helvetica, sans-serif;font-size:14px;color:#000033; padding:10px; font-weight:bold;text-align:center">This quick and easy, creamy chorizo pasta is the perfect dish for weeknight dinners.</p>
	    </div>
	   <div class="col-md-4 col-lg-4"> 
	      <div class="row">
		     <div class="col-md-12 col-lg-12">
		     <a href="recipes2.php" class="col-md-12 col-lg-12"><center><img src="images/imageedit_1_8927459549.png" style="border:groove 10px;border-radius:100%"></center></a>		             </div>
		   </div>	 
	         <p style="font-family:Verdana, Arial, Helvetica, sans-serif;font-size:14px;color:#000033;padding:10px; font-weight:bold; text-align:center">Matched with a juicy roast,these fun vegie wedges are a crunchier, more delicious way to tasteful day.</p>
	   </div>
	   
	   <div class="col-md-4 col-lg-4">
	      <div class="row">
		     <div class="col-md-12 col-lg-12">
		     <a href="recipes3.php" class="col-md-12 col-lg-12"><center><img src="images/imageedit_1_6623592931.png" style="border:groove 10px;border-radius:100%"></center></a>		             </div>
		   </div>	 
	         <p style="font-family:Verdana, Arial, Helvetica, sans-serif;font-size:14px;color:#000033;padding:10px; font-weight:bold; text-align:center">This is a fun tribute to one of our favourite chocobars, Cadbury Cherry Ripe.With sweet fruit,chewy coconut and dark chocolate,its got all the ripe stuff.</p>
		</div>
	</div>
	<div class="row">
     <div class="col-md-12 col-lg-12">
      <img class="YSlides" src="b.jpg">
      <img class="YSlides" src="c.jpg">
      <img class="YSlides" src="d.jpg">
      <img class="YSlides" src="j.jpg">
      <img class="YSlides" src="e.jpg">
      <img class="YSlides" src="f.jpg">
      <img class="YSlides" src="g.jpg">
      <img class="YSlides" src="h.jpg">
      <img class="YSlides" src="i.jpg">
<script>
var Slider = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("YSlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    Slider++;
    if (Slider > x.length) {Slider = 1}    
    x[Slider-1].style.display = "block";  
    setTimeout(carousel, 2000);
}
</script>
    </div></div>
<?php
require 'PHPMailer/PHPMailerAutoload.php';

if(isset($_REQUEST['cnt']))
{
 $n=$_POST['nm'];
 $e=$_POST['em'];
 $mb=$_POST['mb'];
 $mg=$_POST['mcg'];


$mail = new PHPMailer;

$mail->isSMTP();                                   // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';                    // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                            // Enable SMTP authentication
$mail->Username = 'yfood40@gmail.com';          // SMTP username
$mail->Password ='password17';            // SMTP password
$mail->SMTPSecure = 'tls';                         // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                 // TCP port to connect to

$mail->setFrom('yfood40@gmail.com', '');
$mail->addReplyTo('yfood40@gmail.com', '');
$mail->addAddress('yfood40@gmail.com');   // Add a recipient
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');

$mail->isHTML(true);  // Set email format to HTML

$bodyContent = '<h1> Contact Us Details </h1>
                <b> Name: </b>'.$_POST['nm'].
			   '<br> <b> Email: </b>'.$e=$_POST['em'].
			   '<br> <b> Mobile: </b>'.$e=$_POST['mb'].
			   '<br> <b> Message: </b>'.$e=$_POST['mcg']
				;



$mail->Subject = 'Email from Localhost by Sandeep';
$mail->Body    = $bodyContent;

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo "<script>alert('Message has been sent successfully');</script>";
}

}
?>
<div class="row">
   <form method="post" style="background-image:url(images/glenn-carstens-peters-112923.jpg);background-attachment:fixed;background-size:100% 100%;padding:20px;text-align:center">
     <div class="row">
        <div class="col-md-12 col-lg-12" style="font-size:50px;color:#000033;margin-top:30px;font-family:A Yummy Apology;font-weight:bolder;text-align:center">Contact us</div>
     </div>
	 
     <div class="row">
        <div class="col-md-1 col-lg-1"></div>
	    <div class="col-md-2 col-lg-2" style="font-size:35px;color:#000033;margin-top:30px;font-family:A Yummy Apology;font-weight:bolder">Full name</div>
		<div class="col-md-8 col-lg-8">
		     <input type="text"  name="nm" required style="background:transparent;olor:#fffff;font-weight:bold;width:70%;border:solid;margin-top:38px"/>
        </div>
		<div class="col-md-1 col-lg-1"></div> 
      </div>
	  
	  <div class="row">
	    <div class="col-md-1 col-lg-1"></div>
	    <div class="col-md-2 col-lg-2" style="font-size:35px;color:#000033;margin-top:30px;font-family:A Yummy Apology;font-weight:bolder">Email</div>
		<div class="col-md-8 col-lg-8">
		     <input type="email"  name="em" required style="background:transparent;olor:#fffff;font-weight:bold;width:70%;border:solid;margin-top:30px"/>
        </div>
		<div class="col-md-1 col-lg-1"></div> 
	  </div>
	  
	  <div class="row">
	    <div class="col-md-1 col-lg-1"></div>
	    <div class="col-md-2 col-lg-2" style="font-size:35px;color:#000033;margin-top:30px;;font-family:A Yummy Apology;font-weight:bolder">Mobile</div>
		<div class="col-md-8 col-lg-8">
		     <input type="text"  name="mb" required style="background:transparent;olor:#fffff;font-weight:bold;width:70%;border:solid;margin-top:30px"/></td>
        </div>
	    <div class="col-md-1 col-lg-1"></div> 
	  </div>
	  
	  <div class="row">
	    <div class="col-md-1 col-lg-1"></div>
	    <div class="col-md-2 col-lg-2" style="font-size:35px;color:#000033;margin-top:30px;font-family:A Yummy Apology;font-weight:bolder">Message</div>
		<div class="col-md-8 col-lg-8">
		     <textarea type="text" rows="5" name="mcg" required style="background:transparent;color:#fffff;font-weight:bold;width:70%;border:solid;margin-top:30px"></textarea></td>
        </div>
		<div class="col-md-1 col-lg-1"></div> 
	  </div>
	  
	  <div class="row">
	     <div class="col-md-5 col-lg-5"></div>
	     <div class="col-md-2 col-lg-2"><input type="submit" name="cnt" class="btn btn-default" value="SUBMIT" required style="background-color:#000033;color:#FFFFFF;border:solid;margin-top:20px"></div>
		 <div class="col-md-5 col-lg-5"></div>
	  </div>
</form>

</div>		
	<div class="row">
      <div class="col-md-12 col-lg-12">
	  <ul class="pager">
       <li><a href="recipes.php"  style="font-weight:bold;color:#FFFFFF;background-color:#000033" id="large">Next</a></li>
      </ul>	
	  <p style="font-family:Trebuchet MS;color:#003399;font-size:13px;text-align:center;color:#000033;padding:2px">
	©2017 All Rights Reserved. </p>
	  <p style="font-family:Trebuchet MS;color:#003399;font-size:13px;text-align:center;color:#000033;padding:1px"> Privacy Policy | Relevant Ads Opt-Out | Cookie Policy | Advertise | Legal Notices</p>
	  </div>
	</div>
	  
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
// Get the modal
var modal2 = document.getElementById('myModal2');

// Get the button that opens the modal
var btn2 = document.getElementById("myBtn2");

// Get the <span> element that closes the modal
var span2 = document.getElementsByClassName("close2")[0];

// When the user clicks the button, open the modal 
btn2.onclick = function() {
    modal2.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span2.onclick = function() {
    modal2.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal2) {
        modal2.style.display = "none";
    }
}
</script>
</div>
</body>
</html>
