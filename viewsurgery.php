<?php include '/dbconnect.php';?> 
<?php include 'header.php'; ?>
<?php
$sql="select * FROM surgery  where surgeryid='$_GET[id]'  ; ";
$result=$conn->query($sql);
if($result->num_rows>0){
 $row=$result->fetch_assoc();
	 $sid=$row['surgeryid'];}
	 ?>
 
<div class="row">
<div class="col-md-12 p-2" style="background-color:#ca9a61; color:#fff" ><h3 class="text-center"><?php echo $row['name'] ?></h3></div></div>
<div class="container mt-5 pt-4">

<div class="row">

<div class="col-md-8">

<h6>Description</h6><br />

<p align="justify"><?php echo $row['description'] ?></p><br /><br /></div>
<div class="col-md-4">
<?php echo "<img src='admin/".$row['image']."' width='370px' height='250px'>"; ?></div>
</div><br/>
</div></div>
<?php include 'footer.php'; ?>