<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="css/bootstrap.min.css" rel="stylesheet" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Add Diseases</title>
</head>

<body>
<div class="container">
<div class="row">
<div class="col-md-12">
<h2 style="background-color:#ca9a61; color:#fff; text-align:center; padding:5px;">Add Diseases</h2></div></div><br /><br />
<div class="row">
<div class="col-md-6">
<h6>Disease Name</h6>
<form>
<input type="text" name="dname" placeholder="Enter Disease Name" class="form-control" /></form></div>
<div class="col-md-3">
<p> Select Disease Image:</p>
<input type="submit" value="choose file" /></div>
<div class="col-md-3">
<p>No file chosen</p></div></div>
<div class="row">
<div class="col-md-12">
<label>About:</label>
<textarea name="abt" class="form-control" rows="4"></textarea>
<label>Overview and Facts:</label>
<textarea name="facts" class="form-control" rows="4"></textarea>
<label>Symptoms and Types:</label>
<textarea name="type" class="form-control" rows="4"></textarea>
<label>Diagnosis and Tests</label>
<textarea name="tests" class="form-control" rows="3"></textarea><br />
<input type="submit" class="btn btn-block" style="background-color:#daa769; color:#fff;" value="Save Data" />
</div></div></div>
</body>
</html>