
function checkUsername(){
	var username = document.getElementById("UserName").value;
	
	if(name){
		.$ajax({
			type : 'post';
			url: 'checkdata.php',
			data: {
				N_Username:name,
			},
			success: function(response){
				$('#name_status' ).html(response);
				if(response=="OK" ){
					return true;
				}
				else{
				 return false;
				}
			
			}
			
			
		});
	
	}
	else
	{
		$('#name_status').html("");
		return false;
	}

} 
function validateSignupForm(){
	 if ($("#Password").val() != $("#ConfirmPassword").val()) {
          alert("Passwords do not match.");
		 exit();
      }
	  

}
