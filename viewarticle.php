<?php include '/dbconnect.php';?> 
<?php include 'header.php'; ?>



<?php
$sql="select * FROM addarticle where articleid='$_GET[id]'";
$result=$conn->query($sql);
if($result->num_rows>0){
	$row=$result->fetch_assoc();
	$aid=$row['articleid'];}
	?>
<div class="row">
<div class="col-md-12 p-2" style="background-color:#ca9a61; color:#fff" ><h3 class="text-center"><?php echo $row['title']; ?></h3></div></div>
<div class="container mt-5 pt-4">
<div class="row">

<div class="col-md-8">

<h6> Sub Title</h6><br/>
<?php echo $row['subtitle']; ?><br/><br/></div>
<div class="col-md-4">
<?php echo "<img src='expert/".$row['image']."' width='300px' height='150spx'>"; ?></div>
<div class="col-md-12">
<h6>Content  </h6><br/>
<p align="justify"> <?php echo $row['data']; ?></p><br/><br/></div>
</div>
</div></div>
<?php include 'footer.php'; ?>