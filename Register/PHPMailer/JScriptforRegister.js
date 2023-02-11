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


setInterval(function(){
    logout();
},1200000);


function logout(){
    if(confirm('Already have account?'))
        redirect();
    else
        alert('OK! keeping you logged in register')
}

function redirect(){
    document.location ="http://localhost/OldFolkHome/MainPage/mainpage.php"
}


function validatePasswords()
{
    var pass1 = document.getElementById("myInput").value;
    var pass2 = document.getElementById("myInput1").value;
	
    if(pass1 != pass2) 
    {
	   
       alert("passwords don't match");
	   document.getElementById("three").disabled =true;
       
    }
	 else{	
    
	document.getElementById("three").disabled=false;
	 }
}



function display_c(){
var refresh=1000; // Refresh rate in milli seconds
mytime=setTimeout('display_ct()',refresh)
}


function display_ct() {


var today = new Date();

var date = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+today.getDate();

var time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();

var dateTime = date+' '+time;

document.getElementById('ct').innerHTML = dateTime;
tt=display_c();

 }
 
 
function selectCountry() {
	var x = document.getElementById("country");
	var y = document.getElementById("phoneCode1");
	var z = document.getElementById("phoneMaxLength1");
	
	if (x.value == "Singapore") {
		y.value = "65";
		z.maxLength = 8;
	} else { 
		y.value = "60";
		z.maxLength = 9;
	}
}

function ageCalculator() {
    var userinput = document.getElementById("DOB").value;
    var dob = new Date(userinput);
    var ToDate = new Date();

    
    if(userinput== null || userinput=='') {
      alert("Please enter your brithday");
     
     //return document.getElementById("result").innerHTML =  
     //"Invalid Age";
    
     return fales;
      
}
else if (new Date(userinput).getTime() >= ToDate.getTime()) {
    alert("The Brithday date must be less then today date");

    
    //return document.getElementById("result").innerHTML =  
    //"Invalid Age";
    
    return fales;

    
} else
    {
    
    document.getElementById("message").innerHTML = "Calculate age"; 
    
    //calculate month difference from current date in time
    var month_diff = Date.now() - dob.getTime();
    
    //convert the calculated difference in date format
    var age_dt = new Date(month_diff); 
    
    //extract year from date    
    var year = age_dt.getUTCFullYear();
   
    //now calculate the age of the user
    var age = Math.abs(year - 1970);
   
   //alert("Your = " + age + " years ");  
   
    return document.getElementById("result").innerHTML =  
             (+ age); 
               
    }
}
   

$("form input").each(function(){
    var elem = $(this);
    var type = elem.attr("type");
    if(type == "checkbox") elem.prop("checked", "");
    else if(type == "text") elem.val("");
});

 
function show()
{
    document.getElementById('two').removeAttribute('disabled');
}
// And Same For Second Button Click
function show1()
{
    document.getElementById('three').removeAttribute('disabled');
}