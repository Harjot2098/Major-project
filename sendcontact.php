<?php
require 'PHPMailer/PHPMailerAutoload.php';

if(isset($_REQUEST['bt']))
{
 $n=$_POST['nm'];
 $e=$_POST['em'];
 $mb=$_POST['mb'];
 $mg=$_POST['mcg'];


$mail = new PHPMailer;

$mail->isSMTP();                                   // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';                    // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                            // Enable SMTP authentication
$mail->Username = 'sandykanda30@gmail.com';          // SMTP username
$mail->Password = 'sk@9855045545';            // SMTP password
$mail->SMTPSecure = 'tls';                         // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                 // TCP port to connect to

$mail->setFrom('sandykanda30@gmail.com', '');
$mail->addReplyTo('sandykanda30@gmail.com', '');
$mail->addAddress('sandykanda30@gmail.com');   // Add a recipient
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');

$mail->isHTML(true);  // Set email format to HTML

$bodyContent = '<h1> Contact Us Details </h1>
                <b> Name: </b>'.$_POST['nm'].
			   '<br> <b> Email: </b>'.$e=$_POST['em'].
			   '<br> <b> Mobile: </b>'.$e=$_POST['mb'].
			   '<br> <b> Message: </b>'.$e=$_POST['mcg']
				;



$mail->Subject = 'Email from Localhost by Yash Ailurophile';
$mail->Body    = $bodyContent;

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}

}
?>

<html>
<head>
<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
</head>
<body>
<form method="post" style="background-image:url(images/glenn-carstens-peters-112923.jpg);background-attachment:fixed;background-size:100% 100%;padding:20px;text-align:center">
     <div class="row">
        <div class="col-md-12 col-lg-12" style="font-size:50px;color:#000033;margin-top:30px;font-family:A Yummy Apology;font-weight:bolder;text-align:center">Contact us</div>
     </div>
  <div class="row">
        <div class="col-md-1 col-lg-1"></div>
	    <div class="col-md-2 col-lg-2" style="font-size:35px;color:#000033;margin-top:30px;font-family:A Yummy Apology;font-weight:bolder">Full name</div>
		  <div class="col-md-8 col-lg-8">
		     <input type="text"  name="nm" required style="background:transparent;color:#576679;width:70%;border:solid;margin-top:38px"/>
           </div>
		 <div class="col-md-1 col-lg-1"></div> 
	  </div>
	  
	  <div class="row">
	  <div class="col-md-1 col-lg-1"></div>
	    <div class="col-md-2 col-lg-2" style="font-size:35px;color:#000033;margin-top:30px;font-family:A Yummy Apology;font-weight:bolder">Email</div>
		  <div class="col-md-8 col-lg-8">
		     <input type="email"  name="em" required style="background:transparent;color:#576679;width:70%;border:solid;margin-top:30px"/>
           </div>
		  <div class="col-md-1 col-lg-1"></div> 
	  </div>
	  
	  <div class="row">
	  <div class="col-md-1 col-lg-1"></div>
	    <div class="col-md-2 col-lg-2" style="font-size:35px;color:#000033;margin-top:30px;;font-family:A Yummy Apology;font-weight:bolder">Mobile</div>
		  <div class="col-md-8 col-lg-8">
		     <input type="text"  name="mb" required style="background:transparent;color:#576679;width:70%;border:solid;margin-top:30px"/></td>
           </div>
		  <div class="col-md-1 col-lg-1"></div> 
	  </div>
	  
	  <div class="row">
	  <div class="col-md-1 col-lg-1"></div>
	    <div class="col-md-2 col-lg-2" style="font-size:35px;color:#000033;margin-top:30px;font-family:A Yummy Apology;font-weight:bolder">Message</div>
		  <div class="col-md-8 col-lg-8">
		     <input type="text"  name="mcg" required style="background:transparent;color:#576679;width:70%;border:solid;margin-top:30px;padding:70px"/></td>
           </div>
		  <div class="col-md-1 col-lg-1"></div> 
	  </div>
	  <div class="row">
	  <div class="col-md-5 col-lg-5"></div>
	      <div class="col-md-2 col-lg-2"><input type="button" name="bt" class="btn btn-default" value="SUBMIT" required style="background-color:#000033;color:#FFFFFF;border:solid;margin-top:20px"></div>
		  <div class="col-md-5 col-lg-5"></div>
	  </div>
</form>
</body>
</html>

