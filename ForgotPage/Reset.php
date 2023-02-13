
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


	$characters = '0123456789';
	$randomString = '';
  
for ($i = 0; $i < 8; $i++) {
	
        $index = rand(0, strlen($characters) - 1);
        $randomString .= $characters[$index];
		
    }

	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\SMTP;
	use PHPMailer\PHPMailer\Exception;

	require 'PHPMailer/src/Exception.php';
	require 'PHPMailer/src/PHPMailer.php';
	require 'PHPMailer/src/SMTP.php';

if(isset($_POST['submit'])) {

	$Email = $_POST ['Email'];
	$sql = "SELECT * FROM register";
	$rs = mysqli_query($con, $sql);
	$sql2 = "SELECT COUNT(1) FROM register"; 
	$rs2 = mysqli_query($con, $sql2);
	$row2 = mysqli_fetch_array($rs2);
	$rowTaken = 1; 
	$totalRow = $row2[0];
	$mail = new PHPMailer;
	$Code=uniqid(true);
	
while($row = $rs->fetch_assoc()) {   

	if (strtolower($Email) == strtolower($row["Email"])){           
    
	echo '<script> alert  ("Email found - '.$Email. 
    '\nOTP and has been sent to your email\nPlease key in your OTP to reset")</script>';?>

    <?php $EmailTo = $_POST["Email"];
    $Today =  date('d-m-y h:i:s');
    $query1="INSERT INTO reset(Code,Email,Date) VALUES('$Code','$EmailTo','$Today')"; 
    $rs3 = mysqli_query($con, $query1); ?>


<script>

  function validateOTP()
  {
	  
    var OTP1 = document.getElementById("otp1").value;
    var OTP2 = <?php echo $randomString; ?> 
    
    if(OTP1 != OTP2) 
    {
		
      alert("Incorrect OTP");
      document.getElementById("two").disabled = true;
	  
    }
	
    else {
		
      document.getElementById("two").disabled = false;
	  
    }
  }

setInterval(function(){alert("Hey, your session is ending")},360000);

setInterval(function(){
    redirect();
},360000);

function redirect(){
    document.location = "http://localhost/OldFolkHome/ForgotPage/Forgot.php"
}

</script>

<style>

	<?php include 'forgot.css'; ?>

</style>

<html>
	
	<body>
		
		<div class="reset1">
		
		<form action="http://localhost/OldFolkHome/ForgotPage/ChangePasword.php?code=<?php echo $Code?>" method="POST" >
		
		<input type="hidden" name="Email" value="<?php echo $Email; ?>">
        
		<table>
            
			<tr>
				<td  style="color:white;"> 
                
				Please key in the OTP: 
                
				</td>
				<td>
			
					<input type="text" maxlength="8" id="otp1" name="otp1" onfocusout="validateOTP()" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"
					onselectstart="return false" oncut="return false" 
					oncopy="return false" onpaste="return false" ondrag="return false" ondrop="return false"required>
				
				</td>  

				<td>

					<input type="hidden" id="otp" name="Code" value="<?php echo $Code?>">
			
				<td>
            
					<input type="submit" name="Submit1" value="Submit" id="two"/>
					
				</td>
			
			</tr>
			
			<tr>
				
				<td></td>
				
				<td>

					<button onclick="location.href = 'http://localhost/OldFolkHome/ForgotPage/Forgot.php'" id="two" >Resend Code</button>
				
				</td>

			
			</tr>
			
			<tr>
			
			<td></td>
			
			</tr>
			
			<tr>
				
				<td style="color:#FFFFFF" colspan="2">Cancel reset: Yes?<a href="http://localhost/OldFolkHome/MainPage/Mainpage.php">->->->Back Main Page</a></td>
			
			</tr>
		
	</table>
		
	</form> 
		
	</div>
	
	</body>

</html>


<?php 

    if($query1) {


	//$mail->SMTPDebug = 3;	
    $mail->isSMTP();  
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'localhostChupapi@gmail.com';
    $mail->Password = 'oslvqghjabpkewqx';
    
	$mail->SMTPSecure = 'ssl';
    $mail->Port = 465;
    $mail->SetFrom('localhostChupapi@gmail.com', 'Old Folk Home');
    $mail->addAddress($Email);
    $url ="http://".$_SERVER["HTTP_HOST"].dirname($_SERVER["PHP_SELF"])."/send_link.php?code=$Code ";
	$mail->isHTML(true);
    $mail->Subject = 'Password Recovery - Old Folk Home';
  
    $bodyContent = 'Username: ' . $row["LoginName"]."<br> Your requested a password reset.<br>
    OTP expire in five minutes time.<h2>OTP:$randomString</h2>";
    $mail->Body = $bodyContent;
	$mail->send();
    break;
	
	} 
    
	}
    
    elseif ($totalRow == $rowTaken) {
      
	  echo '<script> alert  ("Sorry your email not found -'.$Email. 
      '\nGoing back to main page in 5 seconds.\nIf you need register, Please click on the regiser button")</script>';
      header("refresh:0; url=http://localhost/OldFolkHome/MainPage/MainPage.php");
	  
    }
    
    $rowTaken++;
	
	}
	
	exit();
	
	}

?>