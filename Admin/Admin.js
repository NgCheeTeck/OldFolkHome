function upload_check()
{
    var upl = document.getElementById("file_id");
    var max = document.getElementById("max_id").value;

    if(upl.files[0].size > max)
    {
       alert("File too big!");
       upl.value = "";
    }
};

function validatePasswords()
{
    var pass1 = document.getElementById("myInput").value;
    var pass2 = document.getElementById("myInput1").value;
    if(pass1 != pass2) 
    {
	   
       alert("passwords don't match");
	   document.getElementById("two").disabled =true;
       
    }
	 else{	
    
	document.getElementById("two").disabled=false;
	 }
}

function myFunction1() {
  var x = document.getElementById("myInput1");
  var y = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
	y.type = "text";
  } else {
    x.type = "password";
	y.type = "password";
  }
}


function selectCountry() {
	var x = document.getElementById("country");
	var y = document.getElementById("phoneCode1");
	var z = document.getElementById("phoneMaxLength1");

	
	if (x.value == "Singapore") {
		y.value = "+65";
		z.maxLength = 8;
	} else { 
		y.value = "+60";
		z.maxLength = 9;
	}
}




