<?php session_start(); ?>
<?php include 'dbconnect.php'; ?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Health Care</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/icofont.css">
</head>

<body>
<div class="row">
<div class="col-md-3"></div>
<div class="col-md-6 text-center text-justify">
<div class="pt-5 mt-5 alert alert-info">
<?php 
$sql="update subscribe set status='0' where emailid='$_GET[emid]'";
if($conn -> query($sql) === TRUE){
$em='$_GET[emid]';?>

<h1><i class="icofont icofont-check-circled"></i> UNSUBSCRIBED ! </h1>
<p>You have opted opted out. You will no longer see any emails. </p>
<br />

<br />
<?php }
else{
echo"<br/><div class='alert alert-danger'>
<b class='icofont icofont-2x icofont-delete'></b>&nbsp;&nbsp;Error".$sql."".$conn->error."</div>";

}
?></div>
</div><div class="col-md-3"></div></div>
</body>
</html>