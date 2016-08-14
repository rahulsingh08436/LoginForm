function validateForm(){
		var x = document.forms["testForm"]["Username"].value;
		var y = document.forms["testForm"]["Password"].value;
		if( x == null || x == ""){
			alert("Username field must be filled");	
		}
		else if(y == null || y == ""){
			alert("Password field must be filled");
		}
		else{
			alert("login success");
		}
	
	}

	