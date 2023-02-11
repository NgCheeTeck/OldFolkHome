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

	
$UserName = $_POST ['UserName'];
$Password=$_POST['Password'];
$sql = "SELECT * FROM register";
$rs = mysqli_query($con, $sql);
$sql2 = "SELECT COUNT(*) FROM register"; 
$rs2 = mysqli_query($con, $sql2);
$row2 = mysqli_fetch_array($rs2);
$rowTaken = 1; 
$totalRow = $row2[0];

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';


if(!isset($_SESSION['attempt'])){
	$_SESSION['attempt'] = 0;
}
 
while($row= $rs->fetch_assoc()) {		

		
	if (strtolower($UserName) == strtolower($row["LoginName"])) {

		$sql2 = "SELECT Password,Role FROM register WHERE LoginName = '" . $UserName . "'";
		$rs2 = mysqli_query($con, $sql2);
		$Email = $row["Email"];

		while ($row2 = $rs2->fetch_assoc()) {
			$role = $row2["Role"];
			$CheckPassword = $row2["Password"];
		
			if ($Password == $CheckPassword && ($row2["Role"]=="Admin")) { 
				
				$_SESSION['username']=$UserName;
				
				echo '<script> alert  ("Welcome  -  '.$UserName.'\nGoing back to main page in 5 seconds.")</script>';

				header("refresh:0; url=http://localhost/OldFolkHome/Admin/Admin.php");

				$_SESSION['success'] = 'Login successful';

				unset($_SESSION['attempt']);

				//}elseif ($Password == $checkPassword && (!$row2["Role"] =="Admin")){

				}elseif ($Password == $CheckPassword){
					
				$_SESSION['username']=$UserName;

				echo '<script> alert  ("Welcome  -  '.$UserName.'\nGoing back to main page in 5 seconds.")</script>';

				header("refresh:0; url=http://localhost/OldFolkHome/MainPage/Mainpage.php");

				$_SESSION['success'] = 'Login successful';

				unset($_SESSION['attempt']);

				
			} else{

				echo '<script> alert  ("Sorry password incorrent,If you key worng more then 3 time!\nYou will be need to reset your password.")</script>';

				header("refresh:0; url=http://localhost/OldFolkHome/ForgotPage/Forgot.php");

				$_SESSION['attempt'] += 1;

				if($_SESSION['attempt'] == 4){

					$mail = new PHPMailer;
					$mail->isSMTP();  
					$mail->Host = 'smtp.gmail.com';			    
					$mail->SMTPAuth = true;
					$mail->Username = 'localhostChupapi@gmail.com';
					$mail->Password = 'xolfcpxrpnlfxune';			    
					$mail->SMTPSecure = 'ssl';
					$mail->Port = 465;
					$mail->SetFrom('localhostChupapi@gmail.com', 'Happy Old Folk Home');	    
					$mail->addAddress($Email);
					$mail->isHTML(true);
					$mail->Subject = 'Password Recovery - Happy Old Folk Home';
			    
			    $bodyContent = 'Username:'  . $row["LoginName"]."<br>Someone trying to access your account.<br>
			    <br>Do report to our Admin if you account suspect loss.";
			    
			    $mail->Body = $bodyContent;

			    
			    $mail->send();

				}

	if($_SESSION['attempt'] >= 4){
	
	$characters = '0123456789';
    $randomString = '';
  
 	for ($i = 0; $i < 8; $i++) {
        $index = rand(0, strlen($characters) - 1);
        $randomString .= $characters[$index];

        $string=$randomString;


$sql="UPDATE register SET Password ='$string' WHERE LoginName='$UserName'";
$rs2=mysqli_query($con,$sql);


    }
	}
				}

			
			exit();
		}
	}
		
	
	elseif ($totalRow == $rowTaken) {

		header("refresh:0; url=http://localhost/OldFolkHome/MainPage/mainpage.php");
		echo '<script> alert  ("Sorry username  -  '.$UserName. 
      ' not found.\nGoing back to main page in 5 seconds.\nIf you need register, Please click on the regiser button")</script>';
      
	}
	$rowTaken++;

}


?>

