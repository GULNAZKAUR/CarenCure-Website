<?php include '/dbconnect.php';?> 
<?php include 'header.php'; ?>
<?php

$sql="select * FROM drugs where drugid='$_GET[id]'; ";
$result=$conn->query($sql);
if($result->num_rows>0){
$row=$result->fetch_assoc();
$sid=$row['drugid'];}
?>
<div class="row">
<div class="col-md-12 p-2" style="background-color:#ca9a61; color:#fff" ><h3 class="text-center"><?php echo $row['drugname'] ?></h3></div></div>
<div class="container mt-5 pt-4">
<div class="row">
<div class="col-md-12">
 <h6>Generic Name</h6>
<p align="justify"><?php echo $row['genericname'] ?></p><br /><br />

<h6>Uses </h6>
<p align="justify"><?php echo $row['uses'] ?></p> <br /><br />
<h6>Side Effects</h6><br />
<p align="justify"><?php echo $row['sideeffects'] ?></p><br /><br />
<h6>Precautions</h6><br />
<p align="justify"><?php echo $row['precautions'] ?> </p> <br /><br />
</div></div>

</div>

<?php include 'footer.php'; ?>