<?php include 'header.php'; ?>
<div class="row">
<div class="col-md-12 p-2" style="background-color:#ca9a61; color:#fff" ><h3 class="text-center">Body Mass Index </h3></div></div>
<div class="container mt-5 pt-4">
<div class="row">
<div class="col-md-12">
<p> The body mass index (BMI) or Quetelet index is a value derived from the mass (weight) and height of an individual. The BMI is defined as the body mass divided by the square of the body height, and is universally expressed in units of kg/m2, resulting from mass in kilograms and height in metres.The BMI may also be determined using a table[note 2] or chart which displays BMI as a function of mass and height using contour lines or colours for different BMI categories, and which may use other units of measurement (converted to metric units for the calculation)</p>
</div></div>
<div class="row">
<div class="col-md-6" >
<h4>Calculate Your BMI</h4>
<form action="" method="post">
<div class="input-group">
<span class="input-group-addon" id="basic-addon1" >Enter Height</span>
<input type="number" name="height"  />
<div class="input-group">
<span class="input-group-addon" id="basic-addon1" >in cm's</span></div></div><br />
<div class="input-group">
<span class="input-group-addon" id="basic-addon1" >Enter Weight</span>
<input type="number" name="weight" />
<div class="input-group">
<span class="input-group-addon" id="basic-addon1" >in kg's</span></div></div><br />
<input type="submit" value="Calculate" name="calc" class="btn btn-dark" style="color:#fff" />
</form>
<?php 
if(isset($_POST['calc'])){
	$h=$_POST['height'];
	$w=$_POST['weight'];
	$h=($h/100);
	$he=$h*$h;
	$BMI=$w/$he;
	echo"<div class='alert alert-success'><i class='icofont icofont-2x icofont-calculator'></i>".$BMI."</div>";
	if($BMI<=18.5)
	echo "You are Underweight";
	else if($BMI<=24.9)
	echo "You Are Healty";
	else if($BMI<=29.9)
	echo "You Are Overweight";
	else
	echo "Obese";
	}

?>
</div>
<div class="col-md-6">
<img src="bmi.jpg" width="100%" height="200"/>
</div></div><br />
<p>The BMI is an attempt to quantify the amount of tissue mass (muscle, fat, and bone) in an individual, and then categorize that person as underweight, normal weight, overweight, or obese based on that value. However, there is some debate about where on the BMI scale the dividing lines between categories should be placed. </p>
</div>

<br /> 
<?php include 'footer.php'; ?>s