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
	
if(isset($_SESSION['username'])) {



	$ConfirmPassword = $_POST["Password"];
	date_default_timezone_set('Asia/Singapore');
	$today =  date('d-m-y h:i:s');
	$Nationality=$_POST["Nationality"];
	
	
	$code = $_POST["phoneCode"];
	
	$phone = $_POST["Phone"];
	$email = $_POST["Email"];
	$address = $_POST["Address"];
	
	$postalCode = $_POST["Postcode"];

	$Uname=$_POST["UserName"];
	
	$id=$_POST["UserID"];
	$Newupdate=$_POST["Newupdate"];
	

$sql3 = "UPDATE register SET Password ='$ConfirmPassword',RegisterDate ='$today',Phonecode='$code',Phone='$phone',Nationality='$Nationality',
				Email='$email',Address='$address',Postcode='$postalCode',UserName='$Uname',Newupdate='$Newupdate'
where UserID='$id'";
$rs3 = mysqli_query($con, $sql3);

 echo '<script> alert ( "Edit is successfully.\nGoing back to main page in 5seconds.") </script>';
 header("refresh:0; url=http://localhost/OldFolkHome/Admin/Admin.php");

   exit();

}

  



?>



