<?php include '/dbconnect.php';?> 
<?php include 'header.php'; ?>
<?php

$sql="select * FROM medicaltest where medid='$_GET[id]'";
$result=$conn->query($sql);
if($result->num_rows>0){
$row=$result->fetch_assoc();
	 		 $sid=$row['medid'];}
			 ?>
  <div class="row">
<div class="col-md-12 p-2" style="background-color:#ca9a61; color:#fff" ><h3 class="text-center">Medical Test</h3></div></div>
<div class="container mt-5 pt-4">
<div class="row">
<div class="col-md-12">


<h6>Name</h6><br />
<?php echo $row['name'] ?><br /><br />
<h6>Test Overview</h6><br />
<?php echo $row['testoverview'] ?><br /><br />
<h6>Why it is done?</h6><br />
<?php echo $row['reason'] ?><br /><br />
</div>
</div></div>
<?php include 'footer.php'; ?>