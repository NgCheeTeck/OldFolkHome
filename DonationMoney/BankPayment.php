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


$Submit= $_POST['submit'];

	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\SMTP;
	use PHPMailer\PHPMailer\Exception;

	require 'PHPMailer/src/Exception.php';
	require 'PHPMailer/src/PHPMailer.php';
	require 'PHPMailer/src/SMTP.php';

if(isset($_SESSION['username']))
	
{

$sql = "SELECT * FROM register WHERE LoginName = '" . $_SESSION['username'] . "'";

$rs = mysqli_query($con, $sql);

while ($row = $rs->fetch_assoc()) {
	
	$UserID = $row["UserID"];
	$characters = 'ABCDEF';
    $randomString = rand(0, strlen($characters)-1);
	$aaa = $characters[$randomString];
	$characters = '0123456789';
	$characters2 = 'ABCDEFHIJKLNMOPQRSTUVWXYZ';
	
	$randomString2 = rand(0, strlen($characters2)-1);
    $randomString = $characters2[$randomString2];
	
 for ($i = 0; $i < 7; $i++) {
	 
        $index = rand(0, strlen($characters) - 1);
        $randomString .= $characters[$index];
		
    }
}
	$Name = $_POST ['firstname'];
	$Email = $_POST ['email'];
	$Amount = $_POST['Amount'];
	$Donation=$_POST['Donation'];
	date_default_timezone_set('Asia/Singapore');
	$today =  date("Y-m-d");
	$Year= date("Y");


$sql = "INSERT INTO donation (UserID,UserName,Email,DonationTo,Amount,InvoiceNo,PaymentBy,Date,Year) 
		 VALUES ('$UserID','$Name','$Email','$Donation','$Amount','$randomString','Card','$today','$Year')";

$rs3 = mysqli_query($con, $sql);

echo "<script> alert ('Thanks for your kindly, donation is sucessfully.\\nReceipt have been send to your email')</script>";
	  header("refresh:0; url=http://localhost/OldFolkHome/MainPage/Mainpage.php");

if($sql) {

	//$mail->SMTPDebug = 3;	
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
		$mail->Subject = 'Online Donation - Happy Old Folk Home';
  
    	
      	$bodyContent = 'Hi&nbsp;'.$Name.",<br><br> Your donation have successfully.Please find the receipt as following.</br></br>

    	<br></br>
    	<br></br>

		<table border='4'>

			<tr> 

				<td style='text-align: center; vertical-align: middle;'colspan='2'>Happy Old Folk Home ( Charity Reg No: 123044211 )</td> 

			<tr>

				<td colspan='2'>8AA, Batu 8½, Skudai Lbh, Taman Sutera Utama, 81300 Skudai, Johor, Malaysia</td> 

			<tr>

			</tr>

			   <td>
				   
				   Invoice: ".$randomString." </td>

				 <td>  Donation Date: ".$today."

								</td>
							</tr>		

				<tr>
					 <td>
						  Donation To: ".$Donation." </td>
					</td>

					 <td>
						  Amount: Rm".$Amount." </td>
					</td>

				</tr>	

				<tr>
					 <td style='text-align: center; vertical-align: middle;'colspan='2'>

						  Payment By: Card </td>
					</td>

				</tr>			

			<tr><td style='text-align: center; vertical-align: middle;'colspan='2'>Signature: </td></tr>

			<tr>

			<td style='font-family:cursive; text-align: center; vertical-align: middle; ' colspan='2'> Happy Old Folk Home Admin

			</td></tr>

			<tr>
			<td style='text-align: center; vertical-align: middle;'colspan='2'>
			<P>This is computer generate receipt no handwriting Signature request.</p> </td>

			</tr>
			</table>


			<br><br>You can use this receipt to submit income tax deduction.

			Any enquiri please call us at 019-3329811 or email to Happy_Old_Folk_Home@gmail.com.</br></br>";

    $mail->Body = $bodyContent;
	$mail->send();

 	exit();
}



}

else{
	
	$characters = 'ABCDEF';
    $randomString = rand(0, strlen($characters)-1);
	$aaa = $characters[$randomString];
	$characters = '0123456789';
	$characters2 = 'ABCDEFHIJKLNMOPQRSTUVWXYZ';
	
	$randomString2 = rand(0, strlen($characters2)-1);
    $randomString = $characters2[$randomString2];
	
 for ($i = 0; $i < 7; $i++) {
	 
        $index = rand(0, strlen($characters) - 1);
        $randomString .= $characters[$index];
		
    }
	
	/*$Uname = ($_SESSION['username']);*/
	$Name = $_POST ['firstname'];
	$Email = $_POST ['email'];
	$Amount = $_POST['Amount'];
	$Donation=$_POST['Donation'];
	date_default_timezone_set('Asia/Singapore');
	$today =  date("Y-m-d");
	$Year= date("Y");

	
$sql3 = "INSERT INTO donation (UserID,UserName,Email,DonationTo,Amount,InvoiceNo,PaymentBy,Date,Year) 
		 VALUES ('0','$Name','$Email','$Donation','$Amount','$randomString','Card','$today','$Year')";

$rs3 = mysqli_query($con, $sql3);

echo "<script> alert ('Thanks for your kindly, donation is sucessfully.\\nReceipt have been send to your email') </script>";
	  header("refresh:0; url=http://localhost/OldFolkHome/MainPage/Mainpage.php");

if($sql3) {

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
		$mail->Subject = 'Online Donation- Happy Old Folk Home';
  
     	
      	$bodyContent = 'Hi&nbsp;'.$Name.",<br><br> Your donation have successfully.Please find the receipt as following.</br></br>

    	<br></br>
    	<br></br>

		<table border='4'>

			<tr> 

				<td style='text-align: center; vertical-align: middle;'colspan='2'>Happy Old Folk Home ( Charity Reg No: 123044211 )</td> 

			<tr>

				<td colspan='2'>8AA, Batu 8½, Skudai Lbh, Taman Sutera Utama, 81300 Skudai, Johor, Malaysia</td> 

			<tr>

			</tr>

			   <td style='text-align: center'>
				   
				   Invoice: ".$randomString." </td>

				 <td style='text-align: center'>  Donation Date: ".$today."

								</td>
							</tr>		

				<tr>
					 <td style='text-align: center'>
						  Donation To: ".$Donation." </td>
					</td>

					 <td style='text-align: center'>
						  Amount: Rm".$Amount." </td>
					</td>

				</tr>	

				<tr>
					 <td style='text-align: center; vertical-align: middle;'colspan='2'>

						  Payment By: Card </td>
					</td>

				</tr>			

			<tr>

			<td style='font-family:cursive; text-align: center; vertical-align: middle; ' colspan='2'> Happy Old Folk Home Admin

			</td></tr>
			
			<tr>
			<td style='text-align: center; vertical-align: middle;'colspan='2'>
			<P>This is computer generate receipt no handwriting Signature request.</p> </td>

			</tr>
			</table>


			<br><br>You can use this receipt to submit income tax deduction.

			Any enquiri please call us at 019-3329811 or email to Happy_Old_Folk_Home@gmail.com.</br></br>";


    $mail->Body = $bodyContent;
	$mail->send();

 	exit();
}
}

?>

</html>