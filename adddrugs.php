<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="css/bootstrap.min.css" rel="stylesheet" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Add Drugs</title>
</head>

<body>
<div class="container">
<div class="row">
<div class="col-md-12">
<h2 style="background-color:#daa769; color:#fff; text-align:center; padding:5px;">Add Drugs</h2></div></div><br /><br />
<div class="row">
<div class="col-md-6">
<h6>Drug Name</h6>
<form>
<input type="text" placeholder="Enter Drug Name" name="drugname" class="form-control" /></form></div>
<div class="col-md-6">
<h6>Generic Name</h6>
<form><input type="text" placeholder="Enter Generic Name" name="gname" class="form-control" /></form></div></div>
<div class="row">
<div class="col-md-12">
<label>Uses</label>
<textarea name="uses" class="form-control" rows="4"> </textarea> 
<label>Side Effects</label>
<textarea name="effects" class="form-control" rows="4"> </textarea>
<label>Precautions</label>
<textarea name="prec" class="form-control" rows="4"> </textarea><br />
<input type="submit" class="btn btn-block" style="background-color:#ca9a61; color:#fff;" value="Save Data" />
</div></div>
</div>
</body>
</html>