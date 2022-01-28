<?php include '/dbconnect.php';?> 
<?php include 'header.php'; ?>
<?php

$sql="select * FROM diseases where disid='$_GET[id]'; ";
$result=$conn->query($sql);
if($result->num_rows>0){
$row=$result->fetch_assoc();
$sid=$row['disid'];}
?>
<div class="row">
<div class="col-md-12 p-2" style="background-color:#ca9a61; color:#fff" ><h3 class="text-center"><?php echo $row['name'] ?></h3></div></div>
<div class="container mt-5 pt-4">



<div class="row">
<div class="col-md-8">
<h6>About:</h6><br/>

 <?php echo $row['about'] ?></div>

<div class="col-md-4">
<?php echo "<img src='admin/".$row['image']."' width='370px' height='250px'>"; ?>
</div>
</div><br/>
<div class="row">
<div class="col-md-12">


<h6>Overview and Facts:</h6><br/>
 <p align="justify"><?php echo $row['overview'] ?></p><br/><br/>
<h6>Symptoms and Types:</h6><br/>
 <p align="justify"><?php echo $row['symptoms'] ?></p><br/><br/>
<h6>Diagnosis and Tests</h6>
 <p align="justify"><?php echo $row['diagnosis'] ?></p><br /><br/>

<div class="row">
<div class="col-md-6">
<h6> Suggested Medicines(Drugs & Supplements)</h6>
<ul>
<?php

$sql="select * FROM drugs,drugdiseases where drugdiseases.diseases='$_GET[id]' and drugdiseases.drug=drugs.drugid; ";
$result=$conn->query($sql);
if($result->num_rows>0){
while($row=$result->fetch_assoc()){
$did=$row['drugid'];
echo "<li> <a href='viewdrugs.php?id=$did'>".$row['drugname']."</a></li>";


}}
?>


 </ul>
</div><div class="col-md-6">

<h6> Consult</h6>
<ul>
<?php

$sql="select * FROM doctor,diseasesdoctor,city where diseasesdoctor.diseases='$_GET[id]' and diseasesdoctor.doctor=doctor.docid and city.cityid=doctor.city;  ";
$result=$conn->query($sql);
if($result->num_rows>0){
while($row=$result->fetch_assoc()){
$doid=$row['docid'];
echo "<li> <a href='docdetail.php?id=$doid'>".$row['name']." ( ".$row['cityname']." )</a></li>";


}}
?>

</div></div>


</div></div>





</div>
<?php include 'footer.php'; ?>