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

$sql = "SELECT * FROM register";
$rs = mysqli_query($con, $sql);

if(isset($_SESSION['username'])) {

while($row = $rs->fetch_assoc()) {  

		$LoginName=$_POST["LoginName"];
		$UserName=$_POST["UserName"];
		$Password=$_POST["Password"];
		$Phone=$_POST["Phone"];
		
		$Email=$_POST["Email"];
		$Address=$_POST["Address"];
		$Postcode=$_POST["Postcode"];
		
		$Nationality=$_POST["Nationality"];
		$Newupdate=$_POST["Newupdate"];
		date_default_timezone_set('Asia/Singapore');
		$Today =  date('d-m-y h:i:s');

if (!empty($_POST["Nationality"])){ 

$rs2=mysqli_fetch_array($rs);
$rs = mysqli_query ($con,"SELECT LoginName FROM register WHERE UserName='$UserName'");

$rs2 = mysqli_query($con,"UPDATE register SET Nationality ='$Nationality',Password='$Password',Phone='$Phone',Email='$Email',Address='$Address',Postcode='$Postcode',Newupdate='$Newupdate',RegisterDate='$Today' where LoginName='$LoginName'");

	echo '<script> alert ( "Edit is successfully.\nGoing back to main page in 5seconds.") </script>';
	header("refresh:0; url=http://localhost/OldFolkHome/editDetails/editDetails.php");

}

	else {

$rs2=mysqli_fetch_array($rs);
$rs = mysqli_query ($con,"SELECT LoginName FROM register WHERE UserName='$UserName'");
$rs2 = mysqli_query($con,"UPDATE register SET Password='$Password',Phone='$Phone',Email='$Email',Address='$Address',Postcode='$Postcode',Newupdate='$Newupdate',RegisterDate='$Today' where LoginName='$LoginName'");


	echo '<script> alert ( "Edit is successfully.\nGoing back to main page in 5seconds.") </script>';
	header("refresh:0; url=http://localhost/OldFolkHome/editDetails/editDetails.php");
}

 exit();
 
}

}

  


?>





	







