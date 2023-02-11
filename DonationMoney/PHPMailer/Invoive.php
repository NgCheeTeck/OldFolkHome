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
	

$Invoice= $_POST['Invoice'];	
$sql3 = "SELECT * FROM donation WHERE InvoiceNo ='". $Invoice. "'";
$rs3 = mysqli_query($con, $sql3);

	while ($row = $rs3->fetch_assoc()) {
	
	$fullName = $row["UserName"];
	$Amount= $row["Amount"];
	$email = $row ["Email"];
	$DonationFor = $row ["DonationTo"];
	$Invoice=$row ["InvoiceNo"];
	$Today=$row ["Date"];

	}
?>

<style> 

#printPageButton {
  background-color: #000000;
  border: none;
  color: white;
  padding: 8px 8px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 14px;
  cursor: pointer;
}


</style>

<html>

<style> 

<?php include 'Receipt.css'; ?>

</style>

<br></br>
<br></br>
	
	<body> 
		
		<table align="center" border="4">

			<tr> 

				<td style="text-align: center; vertical-align: middle;"colspan="2">Happy Old Folk Home ( Charity Reg No: 123044211 )</td> 

			<tr>

				<td colspan="2">8AA, Batu 8½, Skudai Lbh, Taman Sutera Utama, 81300 Skudai, Johor, Malaysia</td> 

			<tr>

			</tr>

			   <td>
				   
				   Invoice value:<?php echo $Invoice?> </td>

				 <td>  Donation Date:<?php echo $Today ?>

								</td>
							</tr>		

				<tr>
					 <td>
						  Donation To=<?php echo $DonationFor ?> </td>
					</td>

					 <td>
						  Amount:Rm <?php echo $Amount ?> </td>
					</td>

				</tr>	

				<tr>
					 <td style="text-align: center; vertical-align: middle;"colspan="2">

						  Payment By: Card </td>
					</td>

				</tr>			

			<td style="font-family:cursive; text-align: center; vertical-align:" middle;  colspan="2">Prepared by: Happy Old Folk Home Admin

			</td></tr>

			<tr>
			<td style="text-align: center; vertical-align: middle;"colspan="2">
			<P>This is computer generate receipt no handwriting Signature request.</p> </td>

			</tr>



<tr >

	<td colspan="2" align="center">

	<a href="http://localhost/OldFolkHome/DonationMoney/CheckDonationRecord.php">
	<button  type='Submit' id="printPageButton"/>Cancel</button></a>
		
	<a href="javascript:if(window.print)window.print()">
	<button type='Submit'id="printPageButton"/>Print</button></a>
	
	</td>
		
</tr>


</table>
	

</body>
	
















</html>