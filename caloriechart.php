<?php include '/dbconnect.php';?> 
<?php include 'header.php'; ?>

<div class="row">
<div class="col-md-12 p-2" style="background-color:#ca9a61; color:#fff" ><h3 class="text-center">Calories Burn Chart  </h3></div></div> 
</div>
</div>  
<div class="container mt-5 pt-4">
<div class="row">
<div class="col-md-12">
<h5 class="text-right"><a href='caloriesburninfo.php' style="color:#ca9a61; text-decoration:none;"> What Is Calories</a> </h5>
<br/>
<div class="table-responsive">
<table class="table table-sm table-bordered table-striped table-hover">
<tr class="bg-light
 clr">
<th>Activity Name</th>
<th>Pound_125</th>
<th>Pound_155</th>
<th>Pound_185</th>
</tr>

<?php
$sql="select * FROM activitytype";
$result1=$conn->query($sql);
if($result1->num_rows>0){
while($row1=$result1->fetch_assoc()){
$atype=$row1['activitytype'];
echo" <tr><th colspan='4'>".$row1['activitytype']."</th></tr>";
?>
<?php
$sql="select * FROM caloriesburn where activitytype='$atype';";
$result=$conn->query($sql);
if($result->num_rows>0){
	while($row=$result->fetch_assoc()){
		$cbid=$row['cbid'];
		echo"<tr>";
		echo"<td>".$row['activityname']."</td>";
		echo"<td>".$row['pound_125']."</td>";
		echo"<td>".$row['pound_155']."</td>";
		echo"<td>".$row['pound_185']."</td>";
		echo"</tr>";
			}}
	?>
		
<?php }}?>
</table>
</div>
</div>

</div></div></div>
<?php include 'footer.php' ;?>