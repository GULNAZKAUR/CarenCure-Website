<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="css/bootstrap.min.css" rel="stylesheet" />

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Drug Disease</title>
</head>

<body>
<div class="row">
<div class="col-md-12">
<h2 style="background-color:#ca9a61; color:#fff; text-align:center; padding:5px;">Drug and Disease</h2></div></div><br /><br />
<div class="row">
<div class="col-md-3"></div>
<div class="col-md-6">
<h6>Select Drug</h6>
<input list="drug" name="drug" class="form-control" />
<datalist id="drug">
<option>Ibuprofen</option>
<option>Amoxicillin</option>
<option>Adderall</option>
<option>Tofranil</option>
<option>Feosol</option>
<option>Cromolyn</option>

</datalist>
<br /><br />
<h6>Select Disease</h6>
<input list="disease" name="disease" class="form-control" />
<datalist id="disease">
<option>a</option>
<option>b</option>
<option>c</option>
<option>d</option>
<option>e</option>

</datalist><br /><br />
<input type="submit" class="btn btn-block" style="background-color:#daa769; color:#fff;" value="Save Data" />
</div>
</body>
</html>