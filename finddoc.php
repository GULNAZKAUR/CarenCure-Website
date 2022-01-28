<?php include 'header.php';?>

<form action="" method="post">
<div class="row">
<div class="col-md-12 p-2" style="background-color:#ca9a61; color:#fff" ><h3 class="text-center">Search Doctor </h3></div></div><br/>


<div class="row pt-3 pb-2" style='background-color:#e4e4e4'>
<div class="col-md-2 text-right"><label>Search Doctor : <label></div>
<div class="col-md-4"><input list="si" name="si" class="form-control" placeholder="Specializationeg: Dermatologist,Psychiatrist,Physician.."  required="required">
<datalist id="si">
<?php  
echo"<option selected='selected'>All</option>";
$results=$conn->query("select * FROM specialization");
if($results->num_rows>0){
while($rows=$results->fetch_assoc()){
echo"<option>".$rows['name']."</option>";
}}
?>
</datalist>
</div>
<div class="col-md-4"><input list="ci" name="ci" class="form-control" placeholder="City: Amritsar,Jalandhar,Ludhiana.." required="required">
<datalist id="ci">
<?php  
echo"<option selected='selected'>All</option>";
$results=$conn->query("select * FROM city");
if($results->num_rows>0){
while($rows=$results->fetch_assoc()){
echo"<option>".$rows['cityname']."</option>";
}}
?>
</datalist>
</div>
<div class="col-md-2"><input type="submit" name="srch" value="Search" class="btn btn-dark"> </div></div>
</form>


<div class="container mt-5 pt-4">

<?php 
if(isset($_POST['srch'])){
	$si=$_POST['si'];
	$ci=$_POST['ci'];
if($ci=="All" and $si=="All")
$sql="select doctor.*,specialization.name sname FROM doctor,specialization where doctor.specialization=specialization.spzid order by doctor.name ";
else if($ci=="All")
$sql="select doctor.*,specialization.name sname FROM doctor,specialization where specialization.name='$si' and doctor.specialization=specialization.spzid  order by doctor.name ";
else if($si=="All")
$sql="select doctor.*,city.*,specialization.name sname FROM doctor,specialization,city where doctor.specialization=specialization.spzid and city.cityname='$ci' and doctor.city=city.cityid order by doctor.name ";
else
$sql="select doctor.*,city.*,specialization.name sname FROM doctor,specialization,city where specialization.name='$si' and doctor.specialization=specialization.spzid and city.cityname='$ci' and doctor.city=city.cityid order by doctor.name ";
}
else
$sql="select doctor.*,specialization.name sname FROM doctor,specialization where doctor.specialization=specialization.spzid order by doctor.name ";
$result=$conn->query($sql);
$i=0;
if($result->num_rows>0){
 while($row=$result->fetch_assoc()){ 
echo "<div class='row'><div class='col-md-2'><img src='admin/".$row['image']."' width='90%' height='180px'></div>
<div class='col-md-10'>";	 		 
$sid=$row['docid'];
echo "<h3>".$row['name']."</h3>";
echo "<h4>".$row['sname']."</h4>";

echo "<p>".substr($row['aboutdoc'],0,300)."</p>";
?>
<form action="" method="post">
<input type="hidden" value='<?php echo $sid;?>' name="sid" > 
<button type="submit" name="save" class="btn btn-dark">  Contact Details</button>
</form>

<?php 
if(isset($_POST['save'])){
$sid=$_POST['sid'];
if(!isset($_SESSION['un']))
echo"<script> window.location='user login.php?id=$sid';</script>"; 
else
echo"<script> window.location='docdetail.php?id=$sid';</script>"; 
}
?>

<?php	
echo "</div></div><hr/>";
	

	
 $i++;
 }}
 else
 {
	 echo "No Doctor found";
 }
?>



</div>

<br /> 
<?php include 'footer.php'; ?>