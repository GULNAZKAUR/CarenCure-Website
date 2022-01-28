<?php session_start(); 
include 'dbconnect.php'?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="css/bootstrap.min.css" rel="stylesheet" />
<link href="css/icofont.css" rel="stylesheet" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Expert Sign In</title>
</head>

<body>
<div class="row p-3" >
<div class="col-md-4"> <h3><a href="index.php" style="color:#000; text-decoration:none;"> Health Care <i class="icofont icofont-stethoscope-alt"  style="color:#da9a61"> </i></a> </h3> </div>

<div class="col-md-4"></div>
<div class="col-md-4 text-right"> <h5>  <a href="user login.php" style="color:#da9a61"> User Login </a>  || <a href="expert login.php" style="color:#da9a61"> Expert Login
 </a> </h5> </div>

</div>
<div class="row mb-5">
<div class="col-md-12 p-2" style="background-color:#ca9a61"></div></div>

<script src="js/bootstrap.min.js"></script>
<div class="row">
<div class="col-md-4">
</div>
<div class="col-md-4"> <br /> 
<form action="" method="post">
<h1 class="text-center"> 
<i class="icofont icofont-user-suited" style="border:medium solid #999; border-radius:50%; padding:10px; padding-left:13px; padding-right:13px;  "></i></h1> <br />
<h4 class="text-center" style="color:#ca9a61; letter-spacing:2pt">Expert Sign In</h4>
<p class="text-center">All fields are compulsary</p>

<div class="input-group">
<span class="input-group-addon" id="basic-addon1"><i class=" icofont icofont-email "></i></span>
<input type="text" placeholder="Email" class="form-control" name="em" required="required" /></div><br />
<div class="input-group">
<span class="input-group-addon" id="basic-addon1"><i class=" icofont icofont-lock"></i></span>
<input type="password" placeholder="Password" class="form-control" name="pwd" required="required" /></div><br />
<input type="submit" value="Sign In" name="reg" class="btn btn-dark btn-block"  style="color:#fff"  /><br />
<a href="Forgotpassword.php">Forgot Password?</a></form>
<?php
if(isset($_POST['reg'])){

	$sql="select * FROM addexpert WHERE emailid='$_POST[em]' AND password='$_POST[pwd]'";
	$result=$conn ->query($sql);
	if($result->num_rows>0){
	$row=$result->fetch_assoc();
		$_SESSION['eid']=$row['expertid'];
		$_SESSION['ex']=$_POST['em'];
		echo"<script>window.location='expert/myprofileexpert.php';</script>";
	}else
	{
		echo"<br/><div class='alert alert-info'>Invalid Username or Password</div>";
	}}
?>

</div>
<div class="col-md-4">
</div>

</div>
<div class="col-md-4">
<div class="row fixed-bottom">
<div class="col-md-12 p-2" style="background-color:#ca9a61"></div></div>


</body>
</html>
