<?php include 'db.php' ?>

<?php include 'header.php' ?>
<div class="row bg-dark">
 <div class="col-md-4">
</div>
  
  <div class="col-md-4 text-center" style="min-height:800px"> <br/>
   <h1> <i class="icofont icofont-user-alt-4 text-info " style="border:thick solid; border-radius:50%; padding:10px; padding-right:13px;"> </i></h1><br/>

  <h2><font face="Georgia, Times New Roman, Times, serif" color="#FFFFFF"> Reset Password </font></h2> <br/>
  <div class="jumbotron">
  <form action="" method="post">
  <div class="input-group">
   <span class="input-group-addon"> <i class="icofont icofont-open-eye"> </i></span>
    <input type="text" name="otp" placeholder="Enter OTP" class="form-control" /></div>	<br/>
   
    <div class="input-group">
   <span class="input-group-addon"> <i class="icofont icofont-lock"> </i></span>
     <input type="password" title="Minimum 8 charcters that should include upper case,lower case,special characters,numbers." pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" name="npwd" placeholder="New Password" class="form-control" /></div><br/>
    
     <div class="input-group">
   <span class="input-group-addon"> <i class="icofont icofont-lock"> </i></span>
     <input type="password" name="cpwd" placeholder="Confirm Password" title="Minimum 8 charcters that should include upper case,lower case,special characters,numbers." pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" class="form-control" /></div><br/>
   
     <input type="submit" name="save" value="Reset Password" class="form-control btn btn-block btn-info" /> <br/>
    </form>
    <?php
	if(isset($_POST['save']))
	{
		if($_POST['otp']==$_SESSION['code'])
		{
			if($_POST['npwd']==$_POST['cpwd'])
			{
				$sql="UPDATE userprofile SET password ='$_POST[npwd]' where emailid='$_GET[id]';";
				if($conn->query($sql)===TRUE)
				echo"<script>window.alert('Password Changed..Login to Your Account');
				window.location='sign in.php'; </script>";
				
				else 
				echo "Error:-"."$sql".$conn->error;
				}
				else
				echo"Retype Password doesnot match";
				}
				else
				echo "Invalid Code";
				}
	
	
	?>
    </div>
    </div>
<div class="col-md-4">
</div>
</div>
<?php include 'footer.php' ?>