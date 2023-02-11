<?php 

session_start();

    $con = mysqli_connect('127.0.0.1','root','');
    
    if(!$con)
    {
        echo 'Not Connected To Server'; 
    }
    
    if (!mysqli_select_db($con,'OldFolkHomeProject'))
    {
        echo 'Database Not Selected';
        
    }

$Email= $_POST['Email'];

$sql = "SELECT * FROM register WHERE Email = '" . $Email . "'";
$rs = mysqli_query($con, $sql);

while ($row = $rs->fetch_assoc()) {
    $UserName = $row["LoginName"];
    $Email = $row["Email"];
    }


?>

<?php 

$Code=$_POST['Code'];

if(isset($_GET["Code"])) {
exit("Cant Find Page "); 
}


$GetEmailQuery = "SELECT Email FROM reset WHERE Code='$Code'";
$GetEmailQuery1 = mysqli_query($con, $sql);

if(mysqli_num_rows($GetEmailQuery1) == 0){
	
    exit("cant find page"); 
    
}

?>

<html>

<style>

<?php include 'Forgot1.css'; ?>

</style>

<head>

    <h1> Welcome To Happy Old Folk Home </h1>
	
<script>

    function validatepassword()
    {
        var OTP1 = document.getElementById("pswd").value;
        var OTP2 = document.getElementById("pswd1").value;
        
        if(OTP1 != OTP2) 
        {
            alert("Password not match");
            document.getElementById("Submit").disabled = true;
        }
        else {
            document.getElementById("Submit").disabled = false;
        }
    }


setInterval(function(){alert("Hey, your session is ending")},600000);

setInterval(function(){
    redirect();
},600000);

function redirect(){
    document.location = "http://localhost/OldFolkHome/ForgotPage/Forgot.php"
}


function myFunction1() {
  var x = document.getElementById("pswd1");
  var y = document.getElementById("pswd");
  if (x.type === "password") {
    x.type = "text";
    y.type = "text";
  } else {
    x.type = "password";
    y.type = "password";
  }
}


</script>

</head>

<body>

<div class="nav3">

	<form action="http://localhost/OldFolkHome/ForgotPage/BackendChangePasssword.php" method="post" >

	<table>
			
		<tr>
					
			<td style="color:white;">Username: &nbsp <?php echo $UserName;?></td>
				
		</tr>
		
		<tr>
		
			<td></td>
	
		</tr>
	
		<tr>
	 
			<td style="color:white;">
	
				Please key in your new password: 
			
			</td>
				
		</tr>
				
		<tr>
			
			<td></td>
				
		</tr>
		
		<tr>
		
			<td style="color:white;">New Password: &nbsp &nbsp &nbsp 
			
			<input type="password" maxlength="19" size="18" id="pswd" name="Password" 
			pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$" required 
			onselectstart="return false" oncut="return false" 
			oncopy="return false" onpaste="return false" ondrag="return false" ondrop="return false">
			
			</td>
			
		</tr>
		
		<tr>
		
			<td></td>
		
		</tr>
		
		<tr>
			<td style="color:white;" id="cofrim">Confirm Password:&nbsp
         
			<input type="password" maxlength="19" size="18" id="pswd1" name="pswd1" 
			pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$" onfocusout="validatepassword()" required
			onselectstart="return false" oncut="return false" 
			oncopy="return false" onpaste="return false" ondrag="return false" ondrop="return false" onfocusout="validatePasswords()">
			
			</td>

        </tr> 
		
		<tr>    

		<div class="aa">

			<td colspan="2"align="center" style="color:white;" >
			
            <input type="checkbox"   onclick="myFunction1()"/>unhide password</input>
			
        </div>
                
			</td>
		
		</tr>
		
		<tr>
		
		<td></td>
		
		</tr>
		
		<tr>
		
		<input type="hidden" id="email" name="Email" value="<?php echo $Email?>">
  
		</tr>  

		<tr>
		
		<input type="hidden" id="otp" name="Code" value="<?php echo $Code?>">
  
		</tr>  
		
		<tr>
		
			<td></td>
		
		</tr>
		
		<tr>
		
			<td></td>
		
		</tr>  
		
		<tr>
		
			<td align="center">
    
			<input type="Submit" name="Submit" value="Submit" id="Submit"/>
    
			<input type="Reset" name="Reset" value="Reset" id="Reset"/>
			
			</td>

		</tr>
		
		<tr>
		
			<td></td>
		
		</tr>
		
		<tr>
		
			<td></td>
		
		</tr>
     
		<tr>
		
			<td colspan="2" id="Dont">
			
			Dont want to reset:Yes?<a href="http://localhost/OldFolkHome/MainPage/Mainpage.php"> >Back Main Page</a></td>
			
		</tr>
    
    </table>
	
	</form>
	
</div>

</body>

</html>