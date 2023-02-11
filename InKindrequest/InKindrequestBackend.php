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


if($_POST['status']== "Pending"){

echo '<script> alert ("Please update the status to approve or reject") </script>';
header("refresh:0; url=http://localhost/OldFolkHome/Admin/ChecInkindDonationRecord/CheckInKindDonationRequest.php");
exit();

}



if(isset($_SESSION['username']))
{

	$ID = $_POST ['ID'];
	$status = $_POST ['status'];


$rs2 = "UPDATE InKindRequest SET Status ='$status' where UserID='$ID'";
	$rs3 = mysqli_query($con, $rs2);


	echo '<script> alert ("You have succefully update in-kind donation request status") </script>';
		header("refresh:0; url=http://localhost/OldFolkHome/Admin/ChecInkindDonationRecord/CheckInKindDonationRequest.php");

 
}









?>