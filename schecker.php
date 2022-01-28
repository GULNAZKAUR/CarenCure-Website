<?php include'dbconnect.php';?>
<?php include 'header.php'; ?>

<SCRIPT language=JavaScript>
function reload(form)
{
var val=form.bparts.options[form.bparts.options.selectedIndex].value; 
self.location='schecker.php?bparts=' + val ;
}
function reload3(form)
{
var val=form.bparts.options[form.bparts.options.selectedIndex].value; 
var val2=form.sym.options[form.sym.options.selectedIndex].value; 

self.location='schecker.php?bparts=' + val + '&sym=' + val2 ;
}

</script>


<?Php
$_SESSION['stid']='$_GET[id]';

$quer2="SELECT * FROM bodyparts order by name"; 
@$bparts=$_GET['bparts'];
if(isset($bparts) and strlen($bparts) > 0){
$quer="SELECT * FROM symptoms,symptomsdisease where symptomsdisease.bodyparts=$bparts and 
symptomsdisease.symptoms=symptoms.sympid order by symptoms.name"; 
}else{$quer="SELECT * FROM symptoms order by name"; } 
@$sym=$_GET['sym'];
if(isset($sym) and strlen($sym) > 0){
$quer3="SELECT * FROM diseases,symptomsdisease where symptomsdisease.symptoms=$sym and symptomsdisease.disease=diseases.disid order by diseases.name"; 
}else{$quer3="SELECT * FROM diseases order by name"; } 

?>


<style> 
a:link { color:#ca9a61; text-decoration:none; }
a:visited{ color:#ca9a61; }
</style>
<div class="row">
<div class="col-md-12 p-2" style="background-color:#ca9a61; color:#fff" ><h3 class="text-center">Get Diagnosed</h3></div></div>

<div class="container"> <br/>

<div class="row">
<div class="col-md-6">
<div class="bg-dark p-5 text-white" style='min-height:550px'> 

<div class="row">
<div class="col-md-4">
<b> Step 1.</b> <br/>Select Body Part 
</div><div class="col-md-4">
<b>Step 2. </b><br/>Select Symptom
</div><div class="col-md-4">
<b>Step 3.</b><br/> Get Conditions </div> </div>


<form action="" method="post">
<br/>
<label> Select Body Part </label>
<?php
echo "<select name='bparts' required='required' class='form-control' onchange=\"reload(this.form)\"><option value=''>Select one</option>";
foreach ($conn->query($quer2) as $noticia2) {
if($noticia2['bodyid']==@$bparts){echo "<option selected value='$noticia2[bodyid]'>$noticia2[name]</option>"."<BR>";}
else{echo  "<option value='$noticia2[bodyid]'>$noticia2[name]</option>";}
}
echo "</select>";
?>

<label> Select Symptom </label>
<?php
echo "<select name='sym' required='required' class='form-control' onchange=\"reload3(this.form)\"><option value=''>Select one</option>";
foreach ($conn->query($quer) as $noticia) {
if($noticia['sympid']==@$sym){echo "<option selected value='$noticia[sympid]'>$noticia[name]</option>"."<BR>";}
else{echo  "<option value='$noticia[sympid]'>$noticia[name]</option>";}
}
echo "</select>";
?>
<br/>
<h4> Possible Conditions </h4>
<?php 
if(isset($_GET['bparts']) and isset($_GET['sym']) )
{
$result=$conn->query($quer3);
if($result->num_rows>0){
 while($row=$result->fetch_assoc()){
$did=$row['disid'];
echo "<a href='viewdisease.php?id=$did'>".$row['name']."</a>";
}}

}  
?>
</form>

</div>
</div>


<br/>
<br/>

<div class="col-md-6"> 

<p class="text-justify"> The Get diagnosed Tool is designed to help you understand what your medical symptoms could mean, and provide you with the trusted information you need.
A symptom is a departure from normal function or feeling which is noticed by a patient, reflecting the presence of an unusual state, or of a disease. A symptom is subjective, observed by the patient, and cannot be measured directly </p>
<hr>
<h4> About this Get Diagnosed Tool </h4> 
<h5 style='color:#ca9a61'><i> Identify possible conditions and treatment related to your symptoms.</i> </h5>
<br/>
<p class="text-justify"><b> This tool does not provide medical advice It is intended for informational purposes only </b>. It is not a substitute for professional medical advice, diagnosis or treatment. Never ignore professional medical advice in seeking treatment because of something you have read on the Health care Site. If you think you may have a medical emergency, immediately call your doctor.</p>

<p class="pl-2"><i>  Foot pain? Headache? Sore throat? Skin rash? Use the Get diagnosed to find out what's causing your symptom.</i></p> <br/>


<br/><br/>
</div></div></div>
<?php include'footer.php';?>