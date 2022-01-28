<?php  include 'dbconnect.php'?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="css/bootstrap.min.css" rel="stylesheet" />
<link href="css/icofont.css" rel="stylesheet" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>User Register</title>
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
<div class="col-md-4">
<h1 class="text-center"> 
<i class="icofont icofont-user-alt-7"style="border:medium solid #999; border-radius:50%; padding:10px; padding-left:13px; padding-right:13px;  "></i></h1> <br />
<h4 class="text-center"> Create your account</h4>
<p class="text-center">All fields are compulsary</p>
<form action="" method="post">
<div class="input-group">
<span class="input-group-addon" id="basic-addon1"><i class=" icofont icofont-user"></i></span>
<input type="text" pattern="[a-zA-Z]{3,40}" placeholder="Username" class="form-control" name="un" required="required" /></div><br />
<label> Gender  </label>  &nbsp; &nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="gen" value="Male" /> Male   <input type="radio" name="gen" value="Female"/> Female <input type="radio" name="gen"  value="Transgender"/> Trangender <br />	
<div class="input-group">
<span class="input-group-addon" id="basic-addon1">Age </span>
<input type="number" placeholder="Age" class="form-control" name="age" min="10" max="120" required="required" /></div><br />
<div class="input-group">
<span class="input-group-addon" id="basic-addon1"><i class=" icofont icofont-email "></i></span>
<input type="email" placeholder="Email" class="form-control" name="em" required="required" /></div><br />
<div class="input-group">
<span class="input-group-addon" id="basic-addon1"><i class=" icofont icofont-lock"></i></span>
<input type="password" title="Minimum 8 charcters that should include upper case,lower case,special characters,numbers." pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" placeholder="Password" class="form-control" name="pwd" required="required" /></div><br />

<div class="input-group">
<span class="input-group-addon" id="basic-addon1"><i class=" icofont icofont-lock"></i></span>
<input type="password" title="Minimum 8 charcters that should include upper case,lower case,special characters,numbers." pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" placeholder="Confirm Password" class="form-control" name="rpd" required="required" /></div><br />
<input type="submit" value="Register" name="reg" class="btn btn-dark btn-block"  style=" color:#fff"  /><br/>
<a href="user login.php"> Already A User? Click Here To Login </a>
</form>

<br />
<?php

if(isset($_POST['reg']))
{
	$sql=" select email FROM userregister where email='$_POST[em]'";
$result=$conn->query($sql);
if($result->num_rows>0)
    echo"  <div class='alert alert-danger'>
	<i class='icofont icofont-1x icofont-delete'></i>
        Email Id Already Exists
    </div>";
else
{
 if($_POST['pwd']==$_POST['rpd'])
    {
    $dp='../userdata/defaultdp.png';
    $uemail=$_POST['em'];
    
	
	
 $sql="INSERT INTO userregister(name,gender,age,email,password,regdate )values('$_POST[un]','$_POST[gen]','$_POST[age]','$_POST[em]','$_POST[pwd]','$dt');";
 if($conn->query($sql)===TRUE)
    {
	


		
		$em=$_POST['em'];
		require 'PHPMailer-master/PHPMailerAutoload.php';
$email = 'gagandeep.a24@gmail.com';
$password = 'code@php';
$to_id = $em;
$subject ='Health Care';
$message = '<p> Thanks For Registration.
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
	
	
	
 echo"<br/><div class='alert alert-success'>Register Successfully</div>";
    }}
else{
	
	echo "<div class='alert alert-danger'>
	<i class='icofont icofont-2x icofont-delete'></i>
	&nbsp;Error ".$sql." ".$conn->error."
	</div>";
}
}
    else
      echo"  <div class='alert alert-danger'>
	<i class='icofont icofont-1x icofont-delete'></i>
        Password does not match 
    </div>";
}
}
?>

</div>


<div class="col-md-4"></div></div>
<div class="row fixed-bottom">
<div class="col-md-12 p-2" style="background-color:#ca9a61"></div></div>

</body>
</html>
