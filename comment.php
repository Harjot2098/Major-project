
<html>
<head>
<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">

<title>Comment box</title>
</head>
<body>
<form  method="POST" enctype="multipart/form-data" style="padding:15px">
 <input type="file" name="a" style="font-size:10px"/>
<table >
<tr><td class="col-md-12 col-lg-12" style="font-family:Berlin Sans FB;color:#000099;font-size:20px;background:transparent">Email: </td></tr>
<tr><td class="col-md-12 col-lg-12"><input type="email" name="email"/></td></tr>
<tr><td class="col-md-12 col-lg-12" style="font-family:Berlin Sans FB;color:#000099;font-size:20px;background:transparent">Comment: </td></tr>
<tr><td class="col-md-12 col-lg-12"><textarea name="comment" required rows="10" cols="50"></textarea></td></tr>
<tr><td class="col-md-12 col-lg-12"><input type="submit"  required name="submit" value="Comment" style="margin-top:20px"></td></tr>
</table>
</form>
 
</body>
</html>
<?php
$c=mysqli_connect('localhost','root',"",'cook');
if(isset($_REQUEST['submit']))
{
$d=$_FILES["a"]["name"];
$_FILES["a"]["size"];
$e=$_FILES["a"]["tmp_name"];
$_FILES["a"]["type"];
move_uploaded_file($e,"upload/".$d);

$email=$_POST['email'];
$comment=$_POST['comment'];
$q="INSERT INTO comment (email,comment,image) VALUES ('$email','$comment','$d') ";
mysqli_query($c,$q);

}
$sql="SELECT * FROM comment";
$getquery= mysqli_query($c,$sql);
while($s= mysqli_fetch_array($getquery))
{
$email=$s['email'];
$comment=$s['comment'];
echo " <div class='row'>";
echo  " <div class='col-md-2 col-lg-2'>";
echo"</div>";
echo  " <div class='col-md-8 col-lg-8'>";
   
   echo  " <div class='col-md-4 col-lg-4' style='border:solid;float:left'>";
   echo  "<img src='upload/".$s['image']."'height=62 class='image'>";
   echo  "</div>"; 
   echo  " <div class='col-md-8 col-lg-8' style='float:left'>"; 
     echo  " <div class='row' >";
	 echo  " <div class='col-md-5 col-lg-5' style='border:solid;font-family:Berlin Sans FB;color:#000099;font-size:20px;'>";
     echo "Email:";
	 echo  "</div>";
	echo  " <div class='col-md-7 col-lg-7' style='float:left;font-size:20px;color:#990033'> $email;";
	 echo  "</div>";
	 echo  "</div>";
     echo  " <div class='row' >";
	  echo  " <div class='col-md-5 col-lg-5' style='border:solid;font-family:Berlin Sans FB;color:#000099;font-size:20px;'>";
      echo "Comment:";
	 echo  "</div>";
	echo  " <div class='col-md-7 col-lg-7' style='float:left;font-size:20px;color:#990033'> $comment;";
	echo  "</div>";
	  echo  "</div>";
	  echo  "</div>";
	  echo  "</div>";
	  echo  " <div class='col-md-2 col-lg-2'>";
   echo  "</div>";
echo  "</div>";	  
	  
}
?>
 