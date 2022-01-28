<?php include '/dbconnect.php';?> 
<?php include 'header.php'; ?>

<div class="row">
<div class="col-md-12 p-2" style="background-color:#ca9a61; color:#fff" ><h3 class="text-center">Food Calories Chart </h3></div></div> 

<div class="container mt-5 pt-4">
<div class="row">
<div class="col-md-12">
<p class="text-justify"> Nutrition and weight loss go hand in hand. While nutritional science is an entire medical vertical that deals with the study of the effects of food on metabolism, health and performance, tracking calorie intake is something anyone can do. The recommended calorie intake varies from person to person, based on age, gender, fitness, metabolism and physical activity levels. This makes it hard to define a nutrition and calorie budget that works for all.</p>
<form action="" method="post">
<div class="row pt-3 pb-2" style='background-color:#e4e4e4'>
<div class="col-md-2 text-right"><label>Enter Keyword : <label></div>
<div class="col-md-4"><input list="fi" name="fi" class="form-control" placeholder="eg: Chapatti,Dal,Egg,Puri..">
<datalist id="fi">
<?php  
$results=$conn->query("select * FROM foodcalories");
if($results->num_rows>0){
while($rows=$results->fetch_assoc()){
echo"<option>".$rows['food']."</option>";
}}
?>
<datalist>
</div>
<div class="col-md-1"><input type="submit" name="srch" value="Search" class="btn btn-dark"> </div>
</form>
<?php 
if(isset($_POST['srch'])){
$resultsr=$conn->query("select * FROM foodcalories where food='$_POST[fi]'");
if($resultsr->num_rows>0){
$rowsr=$resultsr->fetch_assoc();
$res=$rowsr['food']." has ".$rowsr['calorie']." calories per ".$rowsr['measure'];
}else 
$res= "No Match Found ";
}else 
$res='';
?>

<div class="col-md-5 pt-1"><label>Result : <?php echo $res; ?></label>  </div>
</div>


<br/> <h4> How we began counting calories</h4>
<p class="text-justify"> The idea of counting calories became popular around the turn of the 20th century when American scientist Wilbur Atwater revealed that a &quot bomb calorimeter &quot could measure how much &quot energy &quot was present in a particular food. Since then, calorie counting has been a part of health, fitness and diet plans across the world. Apart from losing weight, counting calories is recommended for anyone who wants to build mass, increase strength and boost endurance.</p>

<h4>  Calculating nutritional value and calories in Indian Foods</h4>
<p class="text-justify"> One of the biggest challenges faced by people who follow an Indian Diet, is access to the caloric count and value of the dishes they consume. Most calorie counters are tailored to a Western audience.This gap in information is overcome by HealthifyMe, We provide calorie info of Indian food items like Jalebi,Rasgulla,Biryani, etc Pulav .<p class="text-jsutify">


<div class="table-responsive">
<table class="table table-sm table-bordered table-striped table-hover">

<?php
$sql="select * FROM producttype";
$result1=$conn->query($sql);
if($result1->num_rows>0){
while($row1=$result1->fetch_assoc()){
$atype=$row1['producttype'];
echo"<tr><th colspan='3'>".$row1['producttype']."</td></tr>";
?>


<tr class="bg-light
 clr">
 <th>Food</th>
<th>Measure</th>
<th>Calorie</th>

</tr>
<?php
$sql="select * FROM foodcalories where foodtype='$atype'";
$result=$conn->query($sql);
if($result->num_rows>0){
	while($row=$result->fetch_assoc()){
		$fid=$row['fid'];
		echo"<tr>";
		echo"<td>".$row['food']."</td>";
		echo"<td>".$row['measure']."</td>";
		echo"<td>".$row['calorie']."</td>";
		
	
		}}
	?>
		
</div>

<?php }}?>
</table>
</div></div>
</div>
</div>
<?php include 'footer.php' ;?>