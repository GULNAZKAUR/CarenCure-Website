<?php include 'header.php';include 'dbconnect.php'; ?>
<div class="row">
<div class="col-md-12 p-2" style="background-color:#ca9a61; color:#fff" ><h3 class="text-center">Latest Articles </h3></div></div>
<div class="container mt-5 pt-4">
<div class='row'>
<?php 
$sql="select addarticle.*,addexpert.name ename  FROM addarticle,addexpert where addarticle.expertid=addexpert.expertid order by addarticle.articleid DESC  ";
$result=$conn->query($sql);
if($result->num_rows>0){
 while($row=$result->fetch_assoc()){ 
$sid=$row['articleid'];
?>
	<div class='col-md-4'>
<div class="card">
  <img class="card-img-top" src="<?php echo "expert/".$row['image'];?>" alt="Card image cap" width='70%' height='200px'>;
  <div class="card-body">
    <h5 class="card-title"><?php echo $row['title']; ?></h5>
    <p class="card-text"><?php echo $row['subtitle']; ?></p>
    <?php echo "<a href='viewarticle.php?id=$sid'>  Read More</a>" ;?>
  </div>
</div>	</div>

	
 
<?php  }}
 else
 {
	 echo "No article found";
 }
?>
</div>


</div>

<br /> 
<?php include 'footer.php'; ?>