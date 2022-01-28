



<?php session_start(); 
include 'dbconnect.php'?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="css/bootstrap.min.css" rel="stylesheet" />
<link href="css/icofont.css" rel="stylesheet" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Forgot Password</title>
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
<h4 class="text-center" style="color:#ca9a61; letter-spacing:2pt">Forgot Password</h4><br />
<p class="text-center">Enter your email address and we'll send you a link to reset your password</p>
<form action="" method="post">
<div class="input-group">
<span class="input-group-addon" id="basic-addon1"><i class=" icofont icofont-open-eye "></i></span>
<input type="text" placeholder="OTP" class="form-control" name="otp" required="required" /></div><br /><br />
    
     <div class="input-group">
   <span class="input-group-addon"> <i class="icofont icofont-lock"> </i></span>

<input type="password" placeholder="New Password" class="form-control" title="Minimum 8 charcters that should include upper case,lower case,special characters,numbers." pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" name="npwd" required="required" /></div><br /><br />
    
     <div class="input-group">
   <span class="input-group-addon"> <i class="icofont icofont-lock"> </i></span>

<input type="password" placeholder="Confirm Password" class="form-control" title="Minimum 8 charcters that should include upper case,lower case,special characters,numbers." pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" name="cpwd" required="required" /></div><br /><br />

<input type="submit" value="Submit" name="save" class="btn btn-dark btn-block"  style="color:#fff" /><br />



    </form>
    <?php
	if(isset($_POST['save']))
	{
		if($_POST['otp']==$_SESSION['code'])
		{
			if($_POST['npwd']==$_POST['cpwd'])
			{
				$sql="UPDATE userregister SET password ='$_POST[npwd]' where email='$_GET[id]';";
				if($conn->query($sql)===TRUE)
				echo"<script>window.alert('Password Changed..Login to Your Account');
				window.location='user login.php'; </script>";
				
				else 
				echo "Error:-"."$sql".$conn->error;
				}
				else
				echo"Retype Password doesnot match";
				}
				else
				echo "Invalid Code";
				}
	
	
	?>
	</div>
<div class="col-md-4">
</div>
</div>
<div class="row fixed-bottom">
<div class="col-md-12 p-2" style="background-color:#ca9a61"></div></div>
    </div>
    </div>

<?php include 'footer.php' ?>