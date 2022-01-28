<?php include '/dbconnect.php';?> 
<?php include 'header.php'; ?>

<div class="row">
<div class="col-md-12 p-2" style="background-color:#ca9a61; color:#fff" ><h3 class="text-center">What is Calories ? </h3></div></div> 

<div class="container mt-5 pt-4">
<div class="row">
<div class="col-md-12">
<h5 class="text-right"><a href='calorieburn.php' style="color:#ca9a61; text-decoration:none;"> Calories Burn Chart   </a> </h5>
<h3> What are calories? </h3> 
<p> A calorie is a measure of energy, just as a pound is a measure of weight and a mile is a measure of distance. So the amount of energy you exert in doing an activity is measured by the calories burn rate. </p>

<div id="accordion" role="tablist">
  <div class="card">
    <div class="card-header" role="tab" id="headingOne">
      <h5 class="mb-0">
        <a data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style="color:#000000; text-decoration:none;">
How to burn calories?
        </a>
      </h5>
    </div>

    <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
      <div class="card-body">
That's easy, just be alive! Your body is constantly burning calories to keep your body functioning. To burn more calories, do more activities, and the more strenuous the activity the greater the calorie burn. 

      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" role="tab" id="headingTwo">
      <h5 class="mb-0">
        <a class="collapsed" data-toggle="collapse" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" style="color:#000000; text-decoration:none;">
How many calories to lose one pound?
        </a>
      </h5>
    </div>
    <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion">
      <div class="card-body">
You have to burn 3500 calories to lose one pound of weight. This is why you should use a calorie counter regularly. 


      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" role="tab" id="headingThree">
      <h5 class="mb-0">
        <a class="collapsed" data-toggle="collapse" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree" style="color:#000000; text-decoration:none;">
How to lose 20 pounds?
        </a>
      </h5>
    </div>
    <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordion">
      <div class="card-body">
You have to have a calorie deficit* of 70,000 calories to lose 20 pounds (*burn 70,000 more calories than the number of calories you eat). 
      </div>
    </div>
  </div>
</div>


</div></div></div><br><br>
<?php include 'footer.php' ;?>


