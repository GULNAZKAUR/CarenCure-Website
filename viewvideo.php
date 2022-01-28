<?php include '/dbconnect.php';?> 
<?php include 'header.php'; ?>



<?php
$sql="select * FROM addvideo where videoid='$_GET[id]'";
$result=$conn->query($sql);
if($result->num_rows>0){
	$row=$result->fetch_assoc();
	$vid=$row['videoid'];}
	?>
<div class="row">
<div class="col-md-12 p-2" style="background-color:#ca9a61; color:#fff" ><h3 class="text-center"><?php echo $row['title']; ?></h3></div></div>
<div class="container mt-4 pt-4">
<div class="row">

<div class="col-md-8 text-center">
<?php echo " <video src='expert/".$row['video']." 'width='400' height='350' controls poster='expert/upload/images.png'></video>"; ?></div>

<div class="col-md-4"></div>
<div class="row">
<div class="col-md-12">
<h6>Content  </h6><br/>
<p align="justify"> <?php echo $row['description']; ?></p><br/><br/></div>
</div>
</div>
<div class="row">
<div class="col-md-12">
<p style="font-size:larger"> Posted On : <?php echo $row['videodate']; ?></p>
</div>
</div>

<div class="row">
<div class="col-md-12">
<p style="font-size:larger"> Posted By :<?php echo $row['videodate']; ?></p>

</div>
</div>

</div>

</div>
<?php include 'footer.php'; ?>