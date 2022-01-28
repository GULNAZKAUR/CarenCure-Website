<?php include 'dbconnect.php'; ?>
<?php include 'header.php'; ?>
<?php
$sql="select doctor.*,specialization.name sname FROM doctor,specialization where doctor.docid='$_GET[id]' and doctor.specialization=specialization.spzid order by doctor.name ";
$result=$conn->query($sql);

if($result->num_rows>0){
$row=$result->fetch_assoc();}
$sid=$row['docid'];


?>
<div class="row">
<div class="col-md-12 p-2" style="background-color:#ca9a61; color:#fff" ><h3 class="text-center"><?php echo $row['name']; ?></h3></div></div>
<div class="container mt-5 pt-4">
<div class="row">
<div class="col-md-4">
<?php echo "<img src='admin/".$row['image']."' width='250px' height='250px'>" ;?> 
</div>
<div class="col-md-8">	 		 
<h4><?php echo $row['sname']; ?></h4><br/>

<p align="justify"><?php echo $row['aboutdoc']; ?></p>





</div></div>
<hr color="#ca9a61"/>
<div class="row">

<div class="col-md-5">
<h2 align="center"> <font face="Times New Roman, Times, serif" color="#ca9a61"> Address </font></h2><br/>

<big> <i class="icofont icofont-hospital">&nbsp;<?php echo $row['clinicname']; ?></i></big><br/><br/>
<big><i class="icofont icofont-location-pin">&nbsp; <?php echo $row['address']; ?></i></big><br/>
</div>
<div class="col-md-4 ">
<h2 align="center"> <font face="Times New Roman, Times, serif" color="#ca9a61"> Contact Info </font></h2><br/>
 <big><i class="icofont icofont-phone">&nbsp; <?php echo $row['phoneno']; ?></i></big><br/><br/>
<big><i class="icofont icofont-email">&nbsp; <?php echo $row['emailid']; ?></i></big><br/><br/>
 <big><i class="icofont icofont-web">&nbsp;<?php echo $row['website']; ?></i></big><br/>

</div>

<div class="col-md-3 text-center">
<h2 align="center"> <font face="Times New Roman, Times, serif" color="#ca9a61">Visiting Hours </font></h2><br/>

 <big ><i class="icofont icofont-clock-time">&nbsp;<?php echo $row['timefrom']; ?>: <?php echo $row['timeto']; ?></i>
</big>
</div></div>



</div><br/>
	

	


<?php include 'footer.php'; ?>