<?php
session_start();
$u=$_SESSION['r'];
$c=mysqli_connect('localhost','root','','cook');
if(isset($_REQUEST['bt']))
{
$st=$_POST['star'];
$q="update review set rating='$st' where r_name='$u' ";
$r=mysqli_query($c,$q);
   if($_SESSION['r']=="r1")
   {
   header('location:recipes.php');
    }
   else if($_SESSION['r']=="r2")
   {
   header('location:recipes.php');
   }
   else if($_SESSION['r']=="r3")
   {
   header('location:recipes2.php');
   }
    else if($_SESSION['r']=="r4")
   {
   header('location:recipes2.php');
   }
   else if($_SESSION['r']=="r5")
   {
   header('location:recipes3.php');
   }
   else if($_SESSION['r']=="r6")
   {
   header('location:recipes3.php');
   }
   else if($_SESSION['r']=="r7")
   {
   header('location:recipes4.php');
   }
   else if($_SESSION['r']=="r8")
   {
   header('location:recipes4.php');
   }
   else if($_SESSION['r']=="r9")
   {
   header('location:recpies5.php');
   }
   else if($_SESSION['r']=="r10")
   {
   header('location:recpies5.php');
   }
   else if($_SESSION['r']=="r11")
   {
   header('location:recipes6.php');
   }
   else if($_SESSION['r']=="r12")
   {
   header('location:recipes6.php');
   }
    else if($_SESSION['r']=="r13")
   {
   header('location:recipes7.php');
   }
   else if($_SESSION['r']=="r14")
   {
   header('location:recipes7.php');
   }
}

?>
<!DOCTYPE html>
<html >
<head>
<title>Rating</title>
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css" media="screen" />
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />

<style>
div.stars {
  width: 270px;

  display: inline-block;

}

input.star { display: none; }
 

label.star {

  float: right;

  padding: 10px;

  font-size: 36px;

  color:#FF8080;

  transition: all .2s;

}

input.star:checked ~ label.star:before {

  content: '\f005';

  color: #FD4;

  transition: all .25s;

}

input.star-5:checked ~ label.star:before {

  color: #FE7;

  text-shadow: 0 0 20px #952;

}

input.star-1:checked ~ label.star:before { color: #F62; }

label.star:hover { transform: rotate(-15deg) scale(1.3); }

label.star:before {

  content: '\f006';

  font-family: FontAwesome;

}
div.s {
  width: 270px;

  display: inline-block;

}
input.s { display: none; }
 

label.s {

  float: right;

  padding: 10px;

  font-size: 36px;

  color:#FF8080;

  transition: all .2s;

}

input.s:checked ~ label.s:before {

  content: '\f005';

  color: #FD4;

  transition: all .25s;

}

input.s-5:checked ~ label.s:before {

  color: #FE7;

  text-shadow: 0 0 20px #952;

}

input.s-1:checked ~ label.s:before { color: #F62; }

label.s:hover { transform: rotate(-15deg) scale(1.3); }

label.s:before {

  content: '\f006';

  font-family: FontAwesome;

}
div.st {
  width: 270px;

  display: inline-block;

}
input.st { display: none; }
 

label.st {

  float: right;

  padding: 10px;

  font-size: 36px;

  color:#FF8080;

  transition: all .2s;

}

input.st:checked ~ label.st:before {

  content: '\f005';

  color: #FD4;

  transition: all .25s;

}

input.st-5:checked ~ label.st:before {

  color: #FE7;

  text-shadow: 0 0 20px #952;

}

input.st-1:checked ~ label.st:before { color: #F62; }

label.st:hover { transform: rotate(-15deg) scale(1.3); }

label.st:before {

  content: '\f006';

  font-family: FontAwesome;

}
div.sta {
  width: 270px;

  display: inline-block;

}
input.sta { display: none; }
 

label.sta {

  float: right;

  padding: 10px;

  font-size: 36px;

  color:#FF8080;

  transition: all .2s;

}

input.sta:checked ~ label.sta:before {

  content: '\f005';

  color: #FD4;

  transition: all .25s;

}

input.sta-5:checked ~ label.sta:before {

  color: #FE7;

  text-shadow: 0 0 20px #952;

}

input.sta-1:checked ~ label.sta:before { color: #F62; }

label.sta:hover { transform: rotate(-15deg) scale(1.3); }

label.sta:before {

  content: '\f006';

  font-family: FontAwesome;

}
div.sts {
  width: 270px;

  display: inline-block;

}
input.sts { display: none; }
 

label.sts {

  float: right;

  padding: 10px;

  font-size: 36px;

  color:#FF8080;

  transition: all .2s;

}

input.sts:checked ~ label.sts:before {

  content: '\f005';

  color: #FD4;

  transition: all .25s;

}

input.sts-5:checked ~ label.sts:before {

  color: #FE7;

  text-shadow: 0 0 20px #952;

}

input.sts-1:checked ~ label.sts:before { color: #F62; }

label.sts:hover { transform: rotate(-15deg) scale(1.3); }

label.sts:before {

  content: '\f006';

  font-family: FontAwesome;

}



</style>
</head>
<body  class="col-12 col-lg-12" style="margin-top:50px;background-image:url(images/hny.jpg);background-repeat:no-repeat;background-size:100% 100%">
<div class="container-fluid">
<div class="row">
<a href="index.php" class="col-md-12 col-lg-12 "  ><span class="glyphicon glyphicon-home" style="color:#FFFFFF"></span></a></div>
<div class="row">
<div class="col-md-12 col-lg-12 " >
<div class="col-md-2 col-lg-2 " ></div>
<div class="col-md-8 col-lg-8 " >

<div class="col-md-12 col-lg-12 "  >
<center><h1 style="color:#FFFFFF;font-family:cooper black" >RATE THE RECIPE</h1></center>
</div></div>

<div class="row">
<div class="col-md-12 col-lg-12 " style="border:dotted 2PX #FFFFFF;margin-top:30px" >

<h1 style="text-align:center;color:#FFFFFF">Rate according to the following Instructions on a scale of 5</h1>

<center><span class="glyphicon glyphicon-star" style="color:#FF0000;font-size:28px">Poor</span><br>
<span class="glyphicon glyphicon-star" style="color:#FE7;font-size:28px"></span><span class="glyphicon glyphicon-star" style="color:#FE7;font-size:28px">Bad</span><br>
<span class="glyphicon glyphicon-star" style="color:#FE7;font-size:28px"></span><span class="glyphicon glyphicon-star" style="color:#FE7;font-size:28px"></span><span class="glyphicon glyphicon-star" style="color:#FE7;font-size:28px">Average</span><br>
<span class="glyphicon glyphicon-star" style="color:#FE7;font-size:28px"></span><span class="glyphicon glyphicon-star" style="color:#FE7;font-size:28px"></span><span class="glyphicon glyphicon-star" style="color:#FE7;font-size:28px"></span><span class="glyphicon glyphicon-star" style="color:#FE7;font-size:28px">Good</span><br>
<span class="glyphicon glyphicon-star" style="color:#FE7;font-size:28px"></span><span class="glyphicon glyphicon-star" style="color:#FE7;font-size:28px"></span><span class="glyphicon glyphicon-star" style="color:#FE7;font-size:28px"></span><span class="glyphicon glyphicon-star" style="color:#FE7;font-size:28px"></span><span class="glyphicon glyphicon-star" style="color:#FE7;font-size:28px">Excellent</span><br></center>
</div>
</div>



<div class="row">
<div class="col-md-12 col-lg-12 " >
<center><h2 style="font-family:cooper black;color:#FFFFFF">Give Ratings!!</h2>
</center>
</div>
<div class="col-md-12 col-lg-12 " style="margin-top:10px">
<center><div class="stars">
 <form method="post">
    <input class="star star-5" id="star-5" type="radio" name="star" value="5 stars,Excellent"/>
    <label class="star star-5" for="star-5"></label>

    <input class="star star-4" id="star-4" type="radio" name="star" value="4 stars,Good"/>

    <label class="star star-4" for="star-4"></label>

    <input class="star star-3" id="star-3" type="radio" name="star" value="3 stars,Average"/>

    <label class="star star-3" for="star-3"></label>

    <input class="star star-2" id="star-2" type="radio" name="star" value="2 stars,Bad"/>

    <label class="star star-2" for="star-2"></label>

    <input class="star star-1" id="star-1" type="radio" name="star" value="1 star,Poor"/>

    <label class="star star-1" for="star-1"></label>

  </div></center>

</div></div></div>

		<div class="row" style="margin-bottom:65px">
	  <div class="col-md-12 col-lg-12" style="padding:10px;font-size:19px;font-weight:bold; text-align:center">
	  <input type="Submit"  name="bt" style="padding:5px;color:#000000;font-weight:bold" >
	
	 
	 </div>
	 </div>
		</form>
</div></div>

</div>
<div class="col-md-2 col-lg-2 "></div>

</div></div>
</div>
</body>
</html>
