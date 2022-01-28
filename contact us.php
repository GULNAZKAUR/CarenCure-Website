<?php include 'header.php';?>
<?php include 'dbconnect.php';?>
<br/>
<div class="container">
<div class="row">
<div class="col-md-12 text-center "> <h2> Get In Touch</h2>  </div></div>  <br />
<div class="row">
<div class="col-md-3 text-center">
<h1> <i class="icofont icofont-address-book " style="color:#daa769"></i></h1> <h4> Address</h4> <p>155,Dashmesh Avenue,Asr</p></div>

<div class="col-md-3 text-center"><h1><i class="icofont icofont-phone" style="color:#daa769"></i></h1><h4>Phone</h4><p> 9988833331</p></div>
<div class="col-md-3 text-center"><h1><i class="icofont icofont-email" style="color:#daa769"></i></h1><h4>Email</h4><p>gulnaz.kaur@yahoo.com</p></div>
<div class="col-md-3 text-center"><h1><i class="icofont icofont-time" style="color:#daa769"></i></h1><h4>Working Hours</h4><p>Mon-Sat 10:00-08:00, Sunday Closed</p></div></div><br /><br />

<div class="row">
<div class="col-md-7">
<p> Please fill out the quick form and we will be in touch with lightning speed</p>
<form action="" method="post"> 
<input type="text" placeholder="Name" required="required" class="form-control" name="nm" /><br />
<input type="email" placeholder="Email" required="required" class="form-control" name="em" /><br />
<input type="text" placeholder="Subject" required="required" class="form-control" name="sb"/><br />
<label> Type Message </label>
<textarea name="msg" class="form-control" rows="4" name="msg"> </textarea> <br /> <br /> 
<input type="submit" value="Send Message" class="btn btn-dark btn-block" style="color:#fff" name="save2"/></form></div>
<div class="col-md-5">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13588.45472228208!2d74.82561083094396!3d31.630737671453772!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391964d13c22d983%3A0xb0ffa9eed6457d42!2sNew+Dashmesh+Avenue%2C+Guru+Arjun+Nagar%2C+Putligarh%2C+Amritsar%2C+Punjab+143002!5e0!3m2!1sen!2sin!4v1527766893841" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
</div></div>
<?php

if(isset($_POST['save2']))
{
 $sql="INSERT INTO enquiry(name,email,subject,message,msgdate)values('$_POST[nm]','$_POST[em]','$_POST[sb]','$_POST[msg]','$dt');";
 {if($conn->query($sql)===TRUE){


		
		$em=$_POST['em'];
		require 'PHPMailer-master/PHPMailerAutoload.php';
$email = 'gagandeep.a24@gmail.com';
$password = 'code@php';
$to_id = $em;
$subject ='Health Care';
$message = '<p> Thank You For Contacting Us.
</p>
<h4> Regards,</h4>
Health Care';
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
 echo"<br/><br/><div class='alert alert-success'>Message Sent</div>";
    }
	}
else
{
echo"Error:".$sql."<br>".$conn->error;
}
}}
?>
<br />

</div>


<?php include 'footer.php';?>
