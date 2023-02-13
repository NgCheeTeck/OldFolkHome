<?php 
	
	$con = mysqli_connect('127.0.0.1','root','');
	
	if(!$con)
	{
		echo 'Not Connected To Server'; 
	}
	
	if (!mysqli_select_db($con,'OldFolkHomeProject'))
	{
		echo 'Database Not Selected';	
	}
	
session_start(); 

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$sql = "SELECT * FROM register";
$rs = mysqli_query($con, $sql);


if(isset($_SESSION['username'])) {

$characters = '0123456789';
    $randomString = '';
  
 	for ($i = 0; $i < 8; $i++) {
        $index = rand(0, strlen($characters) - 1);
        $randomString .= $characters[$index];

        $string=$randomString;

    }

		$UserID=$_POST["UserID"];
		$UserName=$_POST["UserName"];
		$LoginName=$_POST["LoginName"];
		$Email=$_POST["Email"];
		$ProductType=$_POST["ProductType"];
		$img = $_FILES["choosefile"]["name"];
		$fileTmpName =$_FILES['choosefile']['tmp_name'];
		$path="".$img;
		$Remarks=$_POST["Remarks"];
		$Nationality=$_POST["Nationality"];
		$Phonecode=$_POST["Phonecode"];
		$Phone=$_POST["Phone"];
		$Address=$_POST["Address"];
		$Postcode=$_POST["Postcode"];
		$Status=$_POST["Status"];
		$today= date("Y-m-d");



$sql3 ="INSERT INTO InKindRequest (UserID,UserName,Email,ProductType,Image,Remarks,Nationality,Phonecode,Phone,Address,Postcode,Status,InKinddonationID) VALUES ('$UserID','$UserName','$Email','$ProductType','$img','$Remarks','$Nationality','$Phonecode','$Phone','$Address','$Postcode','$Status','$string')";
$rs3 = mysqli_query($con, $sql3);



	echo '<script> alert ( "In kind donation form is successfully submit.\nGoing back to main page in 5seconds.") </script>';
	header("refresh:0; url=http://localhost/OldFolkHome/MainPage/Mainpage.php");
 
}


if($rs3) {

	//$mail->SMTPDebug = 3;	
    	$mail = new PHPMailer;
		$mail->isSMTP();  
		$mail->Host = 'smtp.gmail.com';			    
		$mail->SMTPAuth = true;
		$mail->Username = 'localhostChupapi@gmail.com';
		$mail->Password = 'oslvqghjabpkewqx';			    
		$mail->SMTPSecure = 'ssl';
		$mail->Port = 465;
		$mail->SetFrom('localhostChupapi@gmail.com', 'Happy Old Folk Home');	    
		$mail->addAddress($Email);
		$mail->isHTML(true);
		$mail->Subject = 'Online Donation - Happy Old Folk Home';
  
    	
      	$bodyContent = 'Hi&nbsp;'.$UserName.",<br><br> Your In Kind Donation Request have successfully.Please find the request no as following.</br></br>

    	<br></br>
    	<br></br>

		<table border='4'>

			<tr> 

				<td style='text-align: center; vertical-align: middle;'colspan='2'>Happy Old Folk Home ( Charity Reg No: 123044211 )</td> 

			<tr>

				<td style='text-align: center; vertical-align: middle;'colspan='2'>

				8AA, Batu 8½, Skudai Lbh, Taman Sutera Utama, 81300 Skudai, Johor, Malaysia</td> 

			</tr>

			<tr>

			 <td style='text-align: center; vertical-align: middle;'colspan='2'>  Request Date: ".$today." </td>
			
			</tr>

			<tr>

			<td style='text-align: center; vertical-align: middle;'colspan='2'>  In kind donation request no: ".$string." </td>

				
			</tr>	

			<tr> <td colspan='2'>

			Any enquiri please call us at 019-3329811 or email to Happy_Old_Folk_Home@gmail.com</br></br> 

			</td></tr>

			</table>";

    $mail->Body = $bodyContent;
	$mail->send();

	move_uploaded_file($fileTmpName,$path);
	
	echo "success";


 	exit();
}




?>





	



