<?php include 'dbconnect.php';?>
<div class="row bg-dark" style=" color:#fff; padding:10px; ">
<div class="col-md-3">
<h3 style="color:#daa769">About Us</h3>
<p class="text-justify">HealthCare is a health information website for the general public.We Are dedicated to helping people find the health and medical information, support, and services they need -- even before there was an Internet! .<br />
<a href="about page.php" style="color:#FFF"> Read more </a> </p> </div>
<div class="col-md-3">
<h3  style="color:#daa769"> Important Links</h3>
<ul style="list-style:none">
<li> <a href="healthcon.php" style="color:#FFF" >Health conditions </a> </li>
<li> <a href="drugsandsupp.php" style="color:#FFF" >Drugs A-Z</a></li>
<li> <a href="finddoc.php" style="color:#FFF" >Find a Doctor</a></li>
<li> <a href="test.php" style="color:#FFF" >Test & Procedures</a></li>
<li> <a href="surgery.php" style="color:#FFF" >Medical Surgery</a></li>
<li> <a href="askques.php" style="color:#FFF" >Ask a Question</a></li>
</ul></div>
<div class="col-md-3">
<h3  style="color:#daa769">Health Tools</h3>
<ul style="list-style:none;">
<li> <a href="bmi.php" style="color:#FFF" > Body Mass Index</a></li>
<li><a href="bmr.php" style="color:#fff">Basal Metabolic Rate</a></li>
<li><a href="schecker.php" style="color:#fff">Symptom Checker</a></li>
<li><a href="calorieburn.php" style="color:#fff">Food Calorie Chart</a></li>
<li><a href="caloriechart.php" style="color:#fff">Food Calorie Burn</a></li>
</ul>
</div>
<div class="col-md-3">
<h3  style="color:#daa769">Subscribe</h3>
<p>Please enter your email address to subscrbe for Daily Updates and Newsletters.</p>
<form action="" method="post">
<div class="input-group">
<input type="email" name="em" required placeholder="Enter Email" class="form-control" /> 
<span class="input-group-btn"><button class="btn btn-secondary" name="save" type="submit" style="background-color:#ca9a61">Go!</button> </span> </div>
</form>
<?php
if(isset($_POST['save']))
{
	$sql="select * FROM subscribe where emailid='$_POST[em]' and status='1'";
$result=$conn->query($sql);
if($result->num_rows>0)
echo "<script> window.alert('Entered Email-Id is already used for Subscription')</script>";
else{	

	$sql2="INSERT into subscribe(emailid,sdate)VALUE('$_POST[em]','$dt');";
	if($conn -> query($sql2) === TRUE){
	
require 'PHPMailer-master/PHPMailerAutoload.php';
$email = 'gagandeep.a24@gmail.com';
$password = 'code@php';
$to_id = $_POST['em'];
$subject =' Thanks for subscribing to Health Care!
';
$message = '
Hello,

Thank you for subscribing to our website.

Sincerely,

Team:Health Care

';
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
		echo "<script>window.alert('You have successfully subscribed.Thank You!')</script>";
}
	}
	else
	{
		echo"<br/><div class='alert alert-danger'>
		<i class='icofont icofont-2x icofont-delete'></i>&nbsp;&nbsp;Error".$sql."".$conn->error."</div>";
	}
	}
}?>
</div>
</div>


<script src="js/JQ.JS"></script>
<script src="js/popper.min.js"> </script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>