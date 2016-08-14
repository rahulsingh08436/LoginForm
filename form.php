<?php include 'database.php';?>
<?php
$query = "select * from newuser";
$sinfos = mysqli_query($con, $query);
?>
<!DOCTYPE html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<html>
<head>
<title> LOGIN </title>
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <link rel="stylesheet" type="text/css" href="formStyle.css">
  <script src="formFunction.js"> </script>
  
  

</head>
<body>

	
<div id="MainContent">

    <div id="header">
        LOGIN
    </div>
	<div class="formStyle">
	<form name="testForm" onsubmit="return validateForm()">
		<div id="myform">

        <div class="form-horizontal">
            <div class="form-group">
                <label id="fontStyle" class="control-label col-sm-2"  for="Username">Username:</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" id="Username" placeholder="Enter Username"  >
                </div>
            </div>
            <div class="form-group">
                <label id="fontStyle"  class="control-label col-sm-2" for="Password">Password:</label>
                <div class="col-sm-4">
                    <input type="password" class="form-control" id="Password" placeholder="Enter Password" >
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button class="btn btn-success" id="add" onclick="ValidateForm()">LOGIN</button>
                </div>
            </div>
			
	
		</div>
		</div>


	</form>
	</div>
</div>
		


	

</body>
</html> 