<?php include 'header.php'; ?>
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="new/slider1.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="new/slider5.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="new/slider4.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<div class="container">
<br /> 
<div class="row">
<div class="col-md-8">
<h2 style="color:#daa769" class="text-left">About Health Care </h2>
<h5>HealthCare is a health information website for the general public. </h5>
<p class="text-justify">We Are dedicated to helping people find the health and medical information, support, and services they need -- even before there was an Internet! We are dedicated to providing quality health information and to upholding the integrity of our editorial process.
</p>
<p class="text-justify">We believe fulfills the promise of health information on the Internet. We provide credible information, supportive communities, and in-depth reference material about health subjects that matter to you. We are a source for original and timely health information as well as material from well known content providers.</p>
</div>
<div class="col-md-4"> <br />
<img src="new/about.jpg"  width="100%" height="200" /></div>
</div>
</div>


<div class="container">
<br /> 
<h2 style="color:#daa769; text-align:center">Important Tools </h2>
<br />
<div class="row">

<div class="col-md-3">
<div class="img-thumbnail"><br />
<h1 style="color:#000000" class="text-center"> <i class="icofont icofont-search-alt-1"></i></h1><br />

<h4 style="color:#daa769" class="text-center">Body Mass Index </h4>

<p align="justify"> The BMI (Body Mass Index) is defined as the body mass divided by the square of the body height, and is universally expressed in units of kg/m2, resulting from mass in kilograms and height in metres.</p>
<a href="bmi.php"><p style="letter-spacing:2pt; font-size:larger; text-align:center"> Try It</b> </a>
</div>
</div>

<div class="col-md-3">
<div class="img-thumbnail"><br />
<h1 style="color:#000000" class="text-center"> <i class="icofont icofont-pulse"></i></h1><br />

<h4 style="color:#daa769" class="text-center">Basal Metabolic Rate </h4>
<p align="justify">BMR is the rate of energy expenditure per unit time by endothermic animals at rest.[1] It is reported in energy units per unit time ranging from watt to ml O2/min or joule per hour per kg body mass.</p>
<a href="bmr.php"><p style="letter-spacing:2pt; font-size:larger; text-align:center"> Try It</b> </a>
</div>
</div>

<div class="col-md-3">
<div class="img-thumbnail"><br />
<h1 style="color:#000000" class="text-center"> <i class="icofont icofont-chart-pie"></i></h1><br />
<h4 style="color:#daa769" class="text-center"  >Food Calorie Chart </h4>
<p align="justify"> Nutrition and weight loss go hand in hand.While nutritional science is an entire medical vertical that deals with the study of the effects of food on metabolism, health,tracking calorie intake is something anyone can do.</p>
<a href="calorieburn.php"><p style="letter-spacing:2pt; font-size:larger; text-align:center"> Try It</b> </a>
</div>
</div>

<div class="col-md-3">
<div class="img-thumbnail"><br />
<h1 style="color:#000000" class="text-center"><i class="icofont icofont-chart-line"></i></h1><br />
<h4 style="color:#daa769" class="text-center" >Calorie Burn Chart </h4>
<p align="justify"> A calorie is a measure of energy, just as a pound is a measure of weight and a mile is a measure of distance. So the amount of energy you exert in doing an activity is measured by the calories burn rate.</p>
<a href="caloriechart.php"><p style="letter-spacing:2pt; font-size:larger; text-align:center"> Try It</b> </a>
</div>
</div>

</div>
</div><br/>

<div class="container">
 <br /> 
<h2 style="color:#daa769; text-align:center">Our Experts </h2>
<br />   
<div class="row">

<?php 
$sql="select addexpert.*,specialization.name sname FROM addexpert,specialization where addexpert.specialization=specialization.spzid order by addexpert.name DESC  limit 4  ";
$result=$conn->query($sql);
if($result->num_rows>0){
 while($row=$result->fetch_assoc()){ 
 $sid=$row['expertid'];
?>
<div class="col-md-3">
<div class="card">
<img class="card-img-top" src="<?php echo "admin/".$row['file'];?>" alt="Card image cap" width='70%' height='200px'>;

<div class="card-body">
    <h4 class="card-title"><?php echo $row['name'];?></h4>
<h5 class="card-title"><?php echo $row['sname'];?></h5>
</div>

</div>
 </div>
<?php }}
 else
 {
	 echo "No expert found";
 }
?>



</div>
<a href="askques.php"><p class="text-right"> More <<</p> </a>

</div>
           
 

<div class="container">
<br /> 
<h2 style="color:#daa769; text-align:center">Latest Articles </h2>
<br/>
<div class="row">

<?php 
$sql="select addarticle.*,addexpert.name ename  FROM addarticle,addexpert where addarticle.expertid=addexpert.expertid order by addarticle.articleid DESC  limit 4 ";
$result=$conn->query($sql);
if($result->num_rows>0){
 while($row=$result->fetch_assoc()){ 
$sid=$row['articleid'];
?>
	<div class="col-md-3">
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
?><br/>
</div>
<a href="healthy.php"><p class="text-right"> View More Articles</p> </a>

</div><br/>




<?php include 'footer.php'; ?>
</div>