<?php include 'header.php';include 'dbconnect.php'; ?>
<div class="row">
<div class="col-md-12 p-2" style="background-color:#ca9a61; color:#fff" ><h3 class="text-center">Health Videos </h3></div></div>
<div class="container mt-5 pt-4">
<div class='row'>
<?php 
$sql="select * from addvideo  ";
$result=$conn->query($sql);
if($result->num_rows>0){
 while($row=$result->fetch_assoc()){ 
$vid=$row['videoid'];
?>
	<div class='col-md-4'>
  <?php echo "<video src='".$row['video']." 'width='80' height='80' poster='expert/upload/images.png'></video>";
?><br />
    <h5><?php echo $row['title']; ?></h5><br />
    <?php echo "<a href='viewvideo.php?id=$vid'>  View More</a>" ;?>
	</div>

	
 
<?php  }}
 else
 {
	 echo "No Video found";
 }
?>
</div>


</div>

<br /> 
<?php include 'footer.php'; ?>