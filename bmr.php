<?php include 'header.php'; ?>
<div class="row">
<div class="col-md-12 p-2" style="background-color:#ca9a61; color:#fff" ><h3 class="text-center">Basal Metabolic Rate </h3></div></div>
<div class="container mt-5 pt-4">
<div class="row">
<div class="col-md-12">
<p>Basal metabolic rate (BMR) is the rate of energy expenditure per unit time by endothermic animals at rest.[1] It is reported in energy units per unit time ranging from watt (joule/second) to ml O2/min or joule per hour per kg body mass J/(h·kg). Proper measurement requires a strict set of criteria be met. These criteria include being in a physically and psychologically undisturbed state, in a thermally neutral environment, while in the post-absorptive state (i.e., not actively digesting food). In bradymetabolic animals, such as fish and reptiles, the equivalent term standard metabolic rate (SMR) is used. </p>
</div></div>
<div class="row">
<div class="col-md-6" >
<h4>Calculate your BMR</h4>
<form action="" method="post">
<label>Select Gender &nbsp;</label>
<input type="radio" name="gen" />&nbsp;Male&nbsp;<input type="radio" name="gen" />Female<br />
<div class="input-group">
<span class="input-group-addon" id="basic-addon1" >Enter Age</span>
<input type="number" name="age"  />
<div class="input-group">
<span class="input-group-addon" id="basic-addon1">in years</span></div></div><br />
<div class="input-group">
<span class="input-group-addon" id="basic-addon1">Enter Height</span>
<input type="number" name="height"  />
<div class="input-group">
<span class="input-group-addon" id="basic-addon1">in cm's</span></div></div><br />
<div class="input-group">
<span class="input-group-addon" id="basic-addon1">Enter Weight</span>
<input type="number" name="weight"  />
<div class="input-group">
<span class="input-group-addon" id="basic-addon1">in kg's</span></div></div><br />
<input type="submit" value="Calculate" name="calc" class="btn  btn-dark" style="color:#fff" /></form>
<?php 
if(isset($_POST['calc'])){
	$h=$_POST['height'];
	$w=$_POST['weight'];
	$a=$_POST['age'];
	$g=$_POST['gen'];
	if($g=='Male')
	$BMR=66.47+(13.7*$w)+(5*$h)-(6.8*$a);
	else
	$BMR=655.1+(9.6*$w)+(1.8*$h)-(4.7*$a);
	echo"<div class='alert alert-sucess'><i class='icofont icofont -2x icofont-calculator'></i> You have a BMR of ".$BMR."</div>";
	
	}

?>


</div>
<div class="col-md-6">
<img src="bmr.jpg" width="100%" height="65%" style="border-style:double"/></div></div>
<p>BMR is measured under very restrictive circumstances when a person is awake. An accurate BMR measurement requires that the person's sympathetic nervous system not be stimulated, a condition which requires complete rest. A more common measurement, which uses less strict criteria, is resting metabolic rate (RMR).</p>
</div><br /> 
<?php include 'footer.php'; ?>