<?php session_start(); 
include 'dbconnect.php'?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="css/bootstrap.min.css" rel="stylesheet" />
<link href="css/icofont.css" rel="stylesheet" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>User Recover Account</title>
</head>
<body>
<script src="js/bootstrap.min.js"></script>
<div class="row p-3" >
<div class="col-md-4"> <h3> Health Care <i class="icofont icofont-stethoscope-alt"  style="color:#da9a61"> </i> </h3> </div>

<div class="col-md-4"></div>
<div class="col-md-4 text-right"> <h5>  <a href="user login.php" style="color:#da9a61"> User Login </a>  || <a href="expert login.php" style="color:#da9a61"> Expert Login
 </a> </h5> </div>

</div>
<div class="row mb-5">
<div class="col-md-12 p-2" style="background-color:#ca9a61"></div></div>
<div class="row">
<div class="col-md-4">
</div>
<div class="col-md-4"> <br /> 
<h1 class="text-center"> 
<i class="icofont icofont-user-alt-7" style="border:medium solid #999; border-radius:50%; padding:10px; padding-left:13px; padding-right:13px;"></i></h1> <br />
<h4 class="text-center" style="color:#ca9a61; letter-spacing:2pt">Recover User Account Password</h4><br />
<p class="text-center">Enter your email address and we'll send ypu a link to reset your password</p>
<form action="" method="post">
<div class="input-group">
<span class="input-group-addon" id="basic-addon1"><i class=" icofont icofont-email "></i></span>
<input type="email" placeholder="Email" class="form-control" name="em" required="required" /></div><br /><br />
<input type="submit" value="Continue" name="save" class="btn btn-dark btn-block"  style="color:#fff" /><br />

</form>


<?php
	if(isset($_POST['save']))
	{$sql="select email FROM userregister where email='$_POST[em]'";
$result=$conn-> query($sql);
if($result->num_rows>0)
{


		$code=rand(1000,9999);
		$_SESSION['code']=$code;
		$em=$_POST['em'];
		require 'PHPMailer-master/PHPMailerAutoload.php';
$email = 'gagandeep.a24@gmail.com';
$password = 'code@php';
$to_id = $em;
$subject ='Password Recovery';
$message = 'Your Verification Code is '.$code.'.Please use this code to recover your Password. Click the following link:<br/>http://localhost/carencure/recoverpassworduser.php?id='.$em.'<br/> <br/> <p> Health Care</p>';
$mail = new PHPMailer;
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->Port = 587;
$mail->SMTPSecure = 'tls';
$mail->SMTPAuth = true;
$mail->Username = $email;
$mail->Password = $password;
$mail->addAddress($to_id);
$mail->Subject = $subject;
$mail->msgHTML($message);
if (!$mail->send()) {
$error = "Mailer Error: " . $mail->ErrorInfo;
echo '<p id="para">'.$error.'</p>';
}
else {
echo "<div class ='alert alert-success' style='padding:2px;'>Message has been sent </div>";
}
}
else
echo " <div class='alert alert-danger' style='padding:2px;'> Your search did not return any result. Please check your Email Id.</div>";

	}
	?>
</div>
<div class="col-md-4">
</div>

</div>
<div class="row fixed-bottom">
<div class="col-md-12 p-2" style="background-color:#ca9a61"></div></div>

</body>
</html>
