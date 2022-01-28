<?php include '/dbconnect.php';?> 
<?php include 'header.php'; ?>
<style> 
a:link { color:#ca9a61; text-decoration:none; }
a:visited{ color:#ca9a61; }
</style>
<div class="row">
<div class="col-md-12 p-2" style="background-color:#ca9a61; color:#fff" ><h3 class="text-center">Test & Procedures </h3></div></div>
<div class="container mt-5 pt-4">

</div>


<div class="container-fluid">
<div class="row">
<div class="col-md-3">
<div class="pt-4 pb-4" style="background-color:#e8e8e8"> 
<h5 class="pl-4 pr-3"> Find a test or procedure by its first letter</h5> <br />
<nav aria-label="Page navigation example">
  <ul class="pagination pagination-md justify-content-start pl-3">
    <li class="page-item"><a class="page-link" href="test.php?id=A">A</a></li>
    <li class="page-item"><a class="page-link" href="test.php?id=B">B</a></li>
    <li class="page-item"><a class="page-link" href="test.php?id=C">C</a></li>
    <li class="page-item"><a class="page-link" href="test.php?id=D">D</a></li>
    <li class="page-item"><a class="page-link" href="test.php?id=E">E</a></li>
    <li class="page-item"><a class="page-link" href="test.php?id=F">F</a></li>
    <li class="page-item"><a class="page-link" href="test.php?id=G">G</a></li>
    <li class="page-item"><a class="page-link" href="test.php?id=H">H</a></li>
    <li class="page-item"><a class="page-link" href="test.php?id=I">I</a></li>
	</ul>
	<ul class="pagination pagination-md justify-content-start pl-3">
    <li class="page-item"><a class="page-link" href="test.php?id=J">J</a></li>
    <li class="page-item"><a class="page-link" href="test.php?id=K">K</a></li>
    <li class="page-item"><a class="page-link" href="test.php?id=L">L</a></li>
    <li class="page-item"><a class="page-link" href="test.php?id=M">M</a></li>
    <li class="page-item"><a class="page-link" href="test.php?id=N">N</a></li>
    <li class="page-item"><a class="page-link" href="test.php?id=O">O</a></li>
    <li class="page-item"><a class="page-link" href="test.php?id=P">P</a></li>
    <li class="page-item"><a class="page-link" href="test.php?id=Q">Q</a></li>
    <li class="page-item"><a class="page-link" href="test.php?id=R">R</a></li>
	</ul>
	<ul class="pagination pagination-md justify-content-start pl-3">
    <li class="page-item"><a class="page-link" href="test.php?id=S">S</a></li>
    <li class="page-item"><a class="page-link" href="test.php?id=T">T</a></li>
    <li class="page-item"><a class="page-link" href="test.php?id=U">U</a></li>
    <li class="page-item"><a class="page-link" href="test.php?id=V">V</a></li>
    <li class="page-item"><a class="page-link" href="test.php?id=W">W</a></li>
    <li class="page-item"><a class="page-link" href="test.php?id=X">X</a></li>
    <li class="page-item"><a class="page-link" href="test.php?id=Y">Y</a></li>
    <li class="page-item"><a class="page-link" href="test.php?id=Z">Z</a></li>
	<li class="page-item"><a class="page-link" href="test.php?id=#">#</a></li>
 </ul></nav>
</div>
</div>
<div class="col-md-9">
<?php
$ltr=$_GET['id'];
$sql="select * FROM medicaltest  where name Like '$ltr%' order by name";
$result=$conn->query($sql);
if($result->num_rows>0){
 while($row=$result->fetch_assoc()){
	 		 $sid=$row['medid'];

	
 	 echo "<h3>".$row['name']."</h3>";
 	 echo "<p>".substr($row['testoverview'],0,200)."...<a href='viewtest.php?id=$sid'> Read More </a> </p>";
	 echo "<hr/>";
	
	

	
 
 }}
 else
 {
	 echo "No medical test found";
 }
?>
</div></div></div>
<?php include 'footer.php'; ?>
