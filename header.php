<?php include 'dbconnect.php' ?>
<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="css/bootstrap.min.css" rel="stylesheet" />
<link href="css/icofont.css" rel="stylesheet" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<div class="row p-3" >
<div class="col-md-4"> <h3><a href="index.php" style="color:#000; text-decoration:none"> Health Care <i class="icofont icofont-stethoscope-alt"  style="color:#da9a61"> </i></a> </h3> </div>

<div class="col-md-4"></div>
<div class="col-md-4 text-right"> <h5>  <a href="user login.php" style="color:#da9a61"> User Login </a>  || <a href="expert login.php" style="color:#da9a61"> Expert Login
 </a> </h5> </div>

</div>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
 
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mx-auto nav">

    <li class="nav-item">
        <a class="nav-link" href="healthcon.php?id=A" >Health Conditions </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="drugsandsupp.php?id=A" >Drugs A-Z </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="finddoc.php" >Find a Doctor</a>
      </li>
     
     <li class="nav-item">
        <a class="nav-link" href="test.php?id=A" >Test & Procedures</a>
      </li>

     <li class="nav-item">
        <a class="nav-link" href="surgery.php?id=A">Medical Surgery</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="healthy.php" >Healthy Living </a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="video.php" >Health Videos</a>
      </li>
	
      <li class="nav-item">
        <a class="nav-link" href="askques.php" >Ask a Question</a>
      </li>
	  
	  <li class="nav-item">
        <a class="nav-link" href="contact us.php" >Contact Us</a>
      </li>
    </ul>
  </div></nav>

