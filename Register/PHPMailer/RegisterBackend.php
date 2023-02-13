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

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
$mail = new PHPMailer;

$characters = '0123456789';
$randomString = '';

for ($i = 0; $i < 8; $i++) {
	
	$index = rand(0, strlen($characters) - 1);
	$randomString .= $characters[$index];

	$string=$randomString;

}


if(isset($_POST['Submit']))
{
	$Role= $_POST ['Member'];
	$UserName = $_POST ['Uname'];
	$LoginName = $_POST ['Lname'];
	$Password = $_POST['Password'];
	$Gender = $_POST['Gender'];
	$DOB = $_POST['DOB'];
	$Age = $_POST['Age'];
	$Nationality = $_POST ['Nationality'];
	$Phonecode=$_POST['Phonecode'];
	$Phone = $_POST['Phone'];
	$Email = $_POST ['Email'];
	$Address = $_POST ['Address'];
	$Postcode = $_POST ['Postcode'];
	$Newupdate = $_POST ['Newupdate'];
	date_default_timezone_set('Asia/Singapore');
	$Today =  date("Y-m-d");
	

// gonna make sure of this logic 
// for every while loop, the variable rowTaken will +1 
// if condition is met, while loop will break & rowTaken will no longer add up +1 
// the condition is if user input for LoginName matches the one in DB 
// after the while loop, another query is calculate the number of row in DB 
// after which, another if else condition 
// if the value of rowTaken DOES NOT MATCH the value of total row count, this means the Login Name is used up
// if value of RowTaken matches the value of total row count, this means the Login Name is not used up. 
// the "IF" condition in "WHILE" loop does not break. Hence, none of the LoginName in DB matches the LoginName of user input.

$sql = "SELECT * FROM register";
$rs = mysqli_query($con, $sql);

$sql2 = "SELECT COUNT(1) FROM register"; // counting actual number of row 
$rs2 = mysqli_query($con, $sql2);
$row2 = mysqli_fetch_array($rs2);

$rowTaken = 1; 
$totalRow = $row2[0];


while($row = $rs->fetch_assoc()) {	

	if ($LoginName == $row["LoginName"]) {
		echo "<script> alert ( 'User Name : ". $LoginName. " is being used.\\n\\nPlease create an account with a different user name.') </script>";
		echo "<br><br>";
		echo "Going back to previous page in 5seconds.";
		header("refresh:5; url=http://localhost/OldFolkHome/Register/Resigter.php");
		break;

	} else if ($Email == $row["Email"]) {

		echo "<script> alert ( 'User Name : ". $Email. " is being used.\\n\\nPlease create an account with a different email.') </script>";
		echo "<br><br>";
		echo "Going back to previous page in 5seconds.";
		header("refresh:1; url=http://localhost/OldFolkHome/Register/Resigter.php"); 
		break;	

	} else {

		if ($totalRow == $rowTaken) {
		$rowTaken +1;
		echo "<script> alert ( 'Cogulation account created') </script>";
		header("refresh:1; url=http://localhost/OldFolkHome/MainPage/MainPage.php");

$sql3 ="INSERT INTO register (UserID,Role,UserName,LoginName,Password,Gender,DOB,Age,Nationality,Phonecode,Phone,Email,Address,Postcode,Newupdate,RegisterDate,Image)
		VALUES ('$string','$Role','$UserName','$LoginName','$Password','$Gender','$DOB','$Age','$Nationality','$Phonecode','$Phone','$Email',
		'$Address','$Postcode','$Newupdate','$Today','Member')";

		$rs3 = mysqli_query($con, $sql3);
		
					
		$mail->SMTPDebug = 3;
		$mail->isSMTP();  
		
		$mail->Host = 'smtp.gmail.com';
		$mail->SMTPAuth = true;
		$mail->Username = 'localhostChupapi@gmail.com';
		$mail->Password = 'xolfcpxrpnlfxune';
		$mail->SMTPSecure = 'ssl';
		$mail->Port = 465;
		
		$mail->SetFrom('localhostChupapi@gmail.com', 'Old Folk Home');
		$mail->addAddress($Email);


		$mail->isHTML(true);
		
		$mail->Subject = 'Register as Old Folk Home member';
	  
	 
		
		$bodyContent = "Dear $LoginName, <br> Your user ID is <h2>$string.</h2><br>
		Warmest Regards,<br>
		Old Folk Home";
	   
		
		
		$mail->Body = $bodyContent;

		
		$mail->send();
		
		
		}
	}
	$rowTaken ++; // everytime LoginName input does not match in database, the rowTaken will +1 
} 


if ($totalRow ==0){

$sql3 ="INSERT INTO register (UserID,Role,UserName,LoginName,Password,Gender,DOB,Age,Nationality,Phonecode,Phone,Email,Address,Postcode,Newupdate,RegisterDate)
		VALUES ('$string','$Role','$UserName','$LoginName','$Password','$Gender','$DOB','$Age','$Nationality','$Phonecode','$Phone','$Email',
		'$Address','$Postcode','$Newupdate','$Today')";

		$rs3 = mysqli_query($con, $sql3);
		echo "<script> alert ('Cogulation account created') </script>";
		header("refresh:1; url=http://localhost/OldFolkHome/MainPage/MainPage.php");
}

if($sql3) {		
				
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
		

		$mail->Subject = 'Register as Old Folk Home member';
	  
		
		$bodyContent = "Dear $LoginName, <br> Your user is ID <h2>$string.</h2><br>
		Warmest Regards,<br>
		Old Folk Home";
	   
		
		
		$mail->Body = $bodyContent;

		
		$mail->send();
		
} 
		
		

}

?>