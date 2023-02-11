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
	
$sql = "SELECT * FROM register";
$rs = mysqli_query($con, $sql);
$sql2 = "SELECT COUNT(1) FROM REGISTER"; // counting actual number of row 



	$ConfirmPassword = $_POST["Password"];
	date_default_timezone_set('Asia/Singapore');
	$today =  date('d-m-y h:i:s');
	$Nationality=$_POST["Nationality"];
	
	$img = $_FILES["choosefile"]["name"];
	$fileTmpName =$_FILES['choosefile']['tmp_name'];
	$code = $_POST["Phonecode"];
	
	$phone = $_POST["Phone"];
	$email = $_POST["Email"];
	$address = $_POST["Address"];
	
	$postalCode = $_POST["Postcode"];
	$Uname=$_POST["UserName"];
	$age=$_POST["Age"];
	
	$id=$_POST["UserID"];
	$loginName=$_POST["LoginName"];

	$path="".$img;

while($row = $rs->fetch_assoc()) {  

if(!empty($_FILES["choosefile"]["name"])&& empty($_POST["Nationality"])){
	
$rs2 = mysqli_query($con,"UPDATE register SET Password ='$ConfirmPassword',RegisterDate ='$today',Image ='$img',
Phonecode='$code',Phone='$phone',Email='$email',Address='$address',Postcode='$postalCode',UserName='$Uname',Age='$age' where UserID='$id'");

 echo '<script> alert ( "Edit is successfully.\nGoing back to main page in 5seconds.") </script>';
 header("refresh:0; url=http://localhost/OldFolkHome/Admin/Admin.php");

break;

  }else{

if (empty($_FILES["choosefile"]["name"])&& !empty($_POST["Nationality"])){

 
$rs2 = mysqli_query($con,"UPDATE register SET  Nationality ='$Nationality', Password ='$ConfirmPassword',RegisterDate ='$today',
Phonecode='$code',Phone='$phone',Email='$email',Address='$address',Postcode='$postalCode',UserName='$Uname',Age='$age' where UserID='$id'");

 echo '<script> alert ( "Edit is successfully.\nGoing back to main page in 5seconds.") </script>';
 header("refresh:0; url=http://localhost/OldFolkHome/Admin/Admin.php");
	
  }
 else {
	 
$rs2 = mysqli_query($con,"UPDATE register SET Password ='$ConfirmPassword',
RegisterDate ='$today',Phonecode='$code',Phone='$phone',Email='$email',Address='$address',Postcode='$postalCode',
UserName='$Uname',Age='$age' where UserID='$id'");

 echo '<script> alert ( "Edit is successfully.\nGoing back to main page in 5seconds.") </script>';
 header("refresh:0; url=http://localhost/OldFolkHome/Admin/Admin.php");
 
}
  exit();
  
    }
   
  }
  
}
  

if($rs2){
	
	move_uploaded_file($fileTmpName,$path);
	
	echo "success";
	
}else{
	
	echo "no sucess";

}


?>








	








