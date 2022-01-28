<?php include '/dbconnect.php';?> 
<?php include 'header.php'; ?>
<style> 
a:link { color:#ca9a61; text-decoration:none; }
a:visited{ color:#ca9a61; }
</style>
<div class="row">
<div class="col-md-12 p-2" style="background-color:#ca9a61; color:#fff" ><h3 class="text-center">Health Conditions</h3></div></div>
<div class="container mt-5 pt-4">

</div>


<div class="container-fluid">
<div class="row">
<div class="col-md-3">

<div class="pt-4 pb-4" style="background-color:#e8e8e8"> 
<h5 class="pl-4 pr-3"> Find a test or procedure by its first letter</h5> <br />
<nav aria-label="Page navigation example">
  <ul class="pagination pagination-md justify-content-start pl-3">
    <li class="page-item"><a class="page-link" href="healthcon.php?id=A">A</a></li>
    <li class="page-item"><a class="page-link" href="healthcon.php?id=B">B</a></li>
    <li class="page-item"><a class="page-link" href="healthcon.php?id=C">C</a></li>
    <li class="page-item"><a class="page-link" href="healthcon.php?id=D">D</a></li>
    <li class="page-item"><a class="page-link" href="healthcon.php?id=E">E</a></li>
    <li class="page-item"><a class="page-link" href="healthcon.php?id=F">F</a></li>
    <li class="page-item"><a class="page-link" href="healthcon.php?id=G">G</a></li>
    <li class="page-item"><a class="page-link" href="healthcon.php?id=H">H</a></li>
    <li class="page-item"><a class="page-link" href="healthcon.php?id=I">I</a></li>
	</ul>
	<ul class="pagination pagination-md justify-content-start pl-3">
    <li class="page-item"><a class="page-link" href="healthcon.php?id=J">J</a></li>
    <li class="page-item"><a class="page-link" href="healthcon.php?id=K">K</a></li>
    <li class="page-item"><a class="page-link" href="healthcon.php?id=L">L</a></li>
    <li class="page-item"><a class="page-link" href="healthcon.php?id=M">M</a></li>
    <li class="page-item"><a class="page-link" href="healthcon.php?id=N">N</a></li>
    <li class="page-item"><a class="page-link" href="healthcon.php?id=O">O</a></li>
    <li class="page-item"><a class="page-link" href="healthcon.php?id=P">P</a></li>
    <li class="page-item"><a class="page-link" href="healthcon.php?id=Q">Q</a></li>
    <li class="page-item"><a class="page-link" href="healthcon.php?id=R">R</a></li>
	</ul>
	<ul class="pagination pagination-md justify-content-start pl-3">
    <li class="page-item"><a class="page-link" href="healthcon.php?id=S">S</a></li>
    <li class="page-item"><a class="page-link" href="healthcon.php?id=T">T</a></li>
    <li class="page-item"><a class="page-link" href="healthcon.php?id=U">U</a></li>
    <li class="page-item"><a class="page-link" href="healthcon.php?id=V">V</a></li>
    <li class="page-item"><a class="page-link" href="healthcon.php?id=W">W</a></li>
    <li class="page-item"><a class="page-link" href="healthcon.php?id=X">X</a></li>
    <li class="page-item"><a class="page-link" href="healthcon.php?id=Y">Y</a></li>
    <li class="page-item"><a class="page-link" href="healthcon.php?id=Z">Z</a></li>
	<li class="page-item"><a class="page-link" href="healthcon.php?id=#">#</a></li>
 </ul></nav>
</div>


</div>
<div class="col-md-9">
<?php
$ltr=$_GET['id'];
$sql="select * FROM diseases where name Like '$ltr%' order by name";
$result=$conn->query($sql);
if($result->num_rows>0){
 while($row=$result->fetch_assoc()){
	 		 $sid=$row['disid'];

	
 	 echo "<h3>".$row['name']."</h3>";
 	 echo "<p>".substr($row['about'],0,200)."...<a href='viewdisease.php?id=$sid'> Read More </a> </p>";
	 echo "<hr/>";
	
	

	
 
 }}
 else
 {
	 echo "No diseasefound";
 }
?>
</div></div></div>
<?php include 'footer.php'; ?>
