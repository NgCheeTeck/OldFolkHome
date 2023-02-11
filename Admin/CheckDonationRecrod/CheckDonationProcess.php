<?php 

session_start();

    $con = mysqli_connect('127.0.0.1','root','qk14016T');
    
    if(!$con)
    {
        echo 'Not Connected To Server'; 
    }
    
    if (!mysqli_select_db($con,'oldfolkhome'))
    {
        echo 'Database Not Selected';
        
    }


$hiddenID= $_POST['hiddenID'];

$sql = "DELETE FROM donation WHERE ID ='". $hiddenID. "'";
$rs = mysqli_query($con, $sql);

if ($rs) {
	
 echo '<script> alert ( "Delete is successfully.\nGoing back to check donation page in 5seconds.") </script>';
 
 header("refresh:5; url=http://localhost/Old/Role/Admin/CheckDonationRecrod/DonationRecrod.php");
 
} else {
	
	echo "Not successful.";
	
}




?>
