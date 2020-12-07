<?php
session_start();
$i=$_SESSION['a'];
error_reporting(0);
$c=mysqli_connect('localhost','root','','cook');

$q="select * from recipes ";
$r=mysqli_query($c,$q);
while($s=mysqli_fetch_array($r))
{
$ttl=$s['title'];
$des=$s['des'];

$ty=$s['type'];
$pmo=$s['mode'];
$pti=$s['time'];
$in=$s['ing'];
$mp=$s['method'];
$ser=$s['serve'];
$img=$s['image'];


echo "<div class='container-fluid' style='background-color:#CCCCCC'>";
echo "<a href='index.php' class='row' ><span class='glyphicon glyphicon-home'>";
echo "</span>";
echo "</a>";

  echo "<div class='row'>"; 
	 echo " <div class='col-md-12 col-lg-12 image'>";
	 echo  "<img src='upload/".$s['image']."'height=200 class='image'>";
	  echo  "</div>"; 
   echo  "</div>";
   echo  "<div class='row'>";
    echo  " <div class='col-md-12 col-lg-12 title'>$ttl";
	echo  " </div>";
	
 echo  " </div>";
 echo  "  <div class='row'>";
  echo  "   <div class='col-md-12 col-lg-12 serves' >Serves : $ser";
  echo  " </div>";
  echo  " </div>";
  echo  " <div class='row recipes'>";
   echo  "  <div class='col-md-4 col-lg-4' style='float:left' >";
	   echo  "  <div class='row sectiontitle' >Recipe type";
	   echo  " </div>";
		 echo  " <div class='row sub'>$ty";
		 echo  " </div>";
	echo " </div>";
    echo  " <div class='col-md-4 col-lg-4' style='float:left'>";
	   echo  "  <div class='row sectiontitle' >Mode of preparation";
	   echo  " </div>";
		echo  "  <div class='row sub'>$pmo";
		echo  " </div>";
	echo  " </div>";
    echo  " <div class='col-md-4 col-lg-4' style='float:left'>";
	   echo  " <div class='row sectiontitle' >Preparation time";
	   echo  " </div>";
		 echo  " <div class='row sub'>$pti";
		 echo  " </div>";
	echo  " </div>";
	echo  " </div>";
    echo  " <div class='row'>";
      echo  " <div class='col-md-12 col-lg-12 head' >Description:";
	  echo  " </div>";
	  echo  " <div class='col-md-12 col-lg-12 des' >$des";
	  echo  " </div>";
    echo  " </div>";
	echo  " <div class='row'>";
      echo  " <div class='col-md-12 col-lg-12 head' >Ingredients:";
	  echo  " </div>";
	  echo  " <div class='col-md-12 col-lg-12 ingre' >$in<br>";
	  echo  " </div>";
    echo  " </div>";
	echo  " <div class='row'>";
      echo  " <div class='col-md-12 col-lg-12 head' >Method of Preparation: ";
	  echo  " </div>";
	  echo  " <div class='col-md-12 col-lg-12 method' >$mp<br> ";
	  echo  " </div>";
    echo  " </div>";
	echo  " <div class='row' style='border-bottom:dotted 1px;padding:10px 10px 10px 10px'>";
	echo  " </div>";
  echo  " </div>";
echo  " </div>";
}
?>
<html>
<head>
<title>User posts</title>
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
<style>
.title
{
font-family: cooper black;
    font-size: 70px;
    font-weight: normal;
    font-style: normal;
    text-transform: none;
    text-decoration: none;
	color: #FFFFFF;
	margin-top:10px;
	text-align:center;
}
.image
{ 
       text-align:center;
    display: inline-block;
    background-repeat: no-repeat;
    background-position: center;
    background-size:cover;
    margin-top:10px;
}
.serves
{    
      margin-top:20px;
    font-family:"A Yummy Apology";
    font-size: 35px;
    font-weight:bold;
    font-style: normal;
    text-transform: none;
    text-decoration: none;
	text-align:center;
}
.recipes
{
    margin-top:10px;
	border-top-color: #CDEFEC;
    border-top-width: 1px;
    border-top-style: solid;
	border-bottom-color: #CDEFEC;
    border-bottom-width: 1px;
    border-bottom-style: solid;
	
   
    
	
}
.sectiontitle
{
   
	 margin-top:10px;
    position: relative;
    
	font-family:Brush script MT;
    font-size: 35px;
    font-weight: BOLD;
    font-style:none;
    text-decoration:underline;
	text-align: center;
	color: #CE004E;
}
.sub 
{
    
	
    margin-top:5px;
    
	font-family:"A Yummy Apology";
    font-size: 35px;
    font-weight:bold;
    font-style: normal;
    text-transform: none;
	text-align: center;
}
.head
{
font-family: cooper black;;
    font-size: 25px;
    font-weight: normal;
    font-style: normal;
    text-transform: none;
    text-decoration: none;
	color: #E80058;
	
	margin-top: 15px;
 }
.des,.ingre,.method
{
 
	 margin-top:10px;
    
	font-family:"A Yummy Apology";
    font-size:35px;
    font-weight:bold;
    font-style:normal;
	
	color:#000000;
}
</style>
</head>
<body>

</body>
</html>
