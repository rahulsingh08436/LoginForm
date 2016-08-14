<?php include 'database.php';?>
<?php
$query = "select * from newuser";
$sinfos = mysqli_query($con, $query);
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <link rel="stylesheet" type="text/css" href="formStyle.css">
  <script src="SignupFunction.js"> </script>

  
  
<title>Product Detail</title>

<body>
<div id="MainContent">
	<div id="header">
		SIGN UP
	</div>
	<div class="formStyle">
	<form name="testForm" onsubmit="return validateSignupForm()" method="post" action="process.php">
		<div id="myform">

        <div class="form-horizontal">
            <div class="form-group">
                <label id="fontStyle" class="control-label col-sm-2"  for="Name">Name:</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" id="FirstNAME" name="N_Name" placeholder="Enter Full Name" required >
                </div>
            </div>
            <div class="form-group">
                <label id="fontStyle"  class="control-label col-sm-2" for="UserName">USER NAME:</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" id="UserName" name="N_Username" placeholder="Choose a UserName" onkeyup="checkUsername();" required>
					<span id="name_status"></span>
                </div>
            </div>
            <div class="form-group">
                <label id="fontStyle"  class="control-label col-sm-2" for="Password">Password:</label>
                <div class="col-sm-4">
                    <input type="password" class="form-control" id="Password" name="N_Password" placeholder="Enter Password" required >
                </div>
            </div>
			
			 <div class="form-group">
                <label id="fontStyle"  class="control-label col-sm-2" for="ConfirmPassword">Confirm Password:</label>
                <div class="col-sm-4">
                    <input type="password" class="form-control" id="ConfirmPassword" placeholder="Confirm Password" required >
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button class="btn btn-success" name="Submit" id="add" onclick="validateSignupForm()">SIGN UP</button>
			     
					<button id="signUp" class="btn btn-success">LOGIN</button>
					<script type="text/javascript">
						document.getElementById("signUp").onclick = function () {
							location.href = "form.php";
						};
					</script>		
						
			     
					
                </div>
            </div>
			<div class="form-group">

			</div>
			
	
		</div>
		</div>
		


	</form>
	</div>



</div>
</body>
</head>
</html>