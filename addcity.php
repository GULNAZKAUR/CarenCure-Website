<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="css/bootstrap.min.css" rel="stylesheet" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Add City</title>
</head>

<body>
<?php include 'header.php'?> <br />
<div class="container">
<div class="row">
<div class="col-md-12">
<h2 style="background-color:#ca9a61; color:#fff; text-align:center; padding:5px;">Add City</h2></div></div><br /><br />
<div class="row">
<div class="col-md-3"></div>
<div class="col-md-6">
<h5>Select State And Type City Name</h5><br />
<h6> City Name</h6>
<form>
<input type="text" placeholder="Enter City Name" name="city" class="form-control" /></form><br />
<h6> Select State</h6>
<input list="state" name="state" class="form-control">
<datalist id="state">
<option>Punjab</option>
<option>Haryana</option>
<option>Rajasthan</option>
<option>West-Bengal</option>
</datalist>
<br><br />
<input type="submit" class="btn btn-block" style="background-color:#daa769; color:#fff;" value="Save Data" />
</div>

</div>
</body>
</html>