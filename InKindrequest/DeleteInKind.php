
<?php session_start();

$con = mysqli_connect('127.0.0.1','root','');
	
	if(!$con)
	{
		echo 'Not Connected To Server'; 
	}
	
	if (!mysqli_select_db($con,'OldFolkHomeProject'))
	{
		echo 'Database Not Selected';
		
	}


if(isset($_SESSION['username'])) {

$ID=$_POST["ID"];

$sql3 ="DELETE FROM InKindRequest WHERE InKinddonationID =$ID";

$rs3 = mysqli_query($con, $sql3);

echo '<script> alert ( "In-kind donation form is successfully submit.\nGoing back to main page in 5seconds.") </script>';
	header("refresh:0; url=http://localhost/OldFolkHome/MainPage/Mainpage.php");
 
}


?>