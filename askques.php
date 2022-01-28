<?php include 'header.php' ?>
<div class="row">
<div class="col-md-12 p-2" style="background-color:#ca9a61; color:#fff" ><h3 class="text-center">Our Experts </h3></div></div>
<div class="container mt-5 pt-4">

<?php 
$sql="select addexpert.*,specialization.name sname FROM addexpert,specialization where addexpert.specialization=specialization.spzid order by addexpert.name ";
$result=$conn->query($sql);
if($result->num_rows>0){
 while($row=$result->fetch_assoc()){ 
 $sid=$row['expertid'];

echo "<div class='row'><div class='col-md-2'><img src='admin/".$row['file']."' width='90%' height='180px'></div>
<div class='col-md-10'>";	 		 
echo "<h3>".$row['name']."</h3>";
echo "<h4>".$row['sname']."</h4>";
echo "<p>".substr($row['about'],0,300)."</p>";

?>	
<form action="" method="post">
<input type="hidden" value='<?php echo $sid;?>' name="sid" > 
<button type="submit" name="ask" class="btn btn-dark" > Ask </button>
	</form>

<?php 
if(isset($_POST['ask'])){
$sid=$_POST['sid'];
if(!isset($_SESSION['un']))
echo"<script> window.location='user login.php?id=$sid';</script>"; 
else
echo"<script> window.location='user/askque.php?id=$sid';</script>"; 
}
?>
	
 
 <?php 
 echo "</div></div><hr/>";
}}
 else
 {
	 echo "No expert found";
 }
?>



</div>

<br /> 
<?php include 'footer.php'; ?>