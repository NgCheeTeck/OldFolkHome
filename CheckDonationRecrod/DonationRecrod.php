<?php 

session_start();

	if(isset($_SESSION['username'])) { 


$con = mysqli_connect('127.0.0.1','root','qk14016T');
	
	if(!$con)
	{
		echo 'Not Connected To Server'; 
	}
	
	if (!mysqli_select_db($con,'oldfolkhome'))
	{
		echo 'Database Not Selected';
		
	}
	
if(isset($_GET['page']))

{

$page=$_GET['page'];

	
}

else

{
	$page=1;
}

$num_per_page=03;
$start_from=($page-1)*03;

$sql = "SELECT * FROM donation limit $start_from,$num_per_page";
$rs = mysqli_query($con, $sql);


?>

<style>

<?php include 'CheckDonation.css'; ?>

</style>

<html>

<head>

  <Title> Welcome To Happy Old Folk Home </Title>
  
</head>

<body>

	<p> &nbsp </P>
	
	<h1> Welcome To Happy Old Folk Home </h1>

		<div class="loginAlready">
		
			<table>
			
				<tr>
				
					<td>&nbsp &nbsp 
					
					Logged on as  <?php echo $_SESSION['username']; ?> </td> 
					
					<td><a href='http://localhost/Old/Logout/Logout.php'>
					
					<input type='Submit' name='action' value='Logout'/> </a>
					
					<input type="Submit" name="Submit1" value="Edit" id="three" onclick="window.location.href='http://localhost/Old/Role/Admin/Admin.php';"/></td>
					
				</tr>
				
			</table>
			
		</div>
		
<br></br>

<div class="topnav">

    <ul id="mainMenu">
		
		<li><a href="http://localhost/Old/Role/Admin/CheckDonationRecrod/DonationRecrod.php">Donation Record</a></li>
		
		<li><a href="http://localhost/Old/Role/Admin/CheckFeedback/Checkfeedback.php">Check Feedback</a></li>
		
		<li><a href="http://localhost/Old/Role/Admin/CheckBooking/CheckBooking.php">Check Booking</a></li>
		
		<li><a href="http://localhost/Old/Role/Admin/DonationFoodRecord/DonationFoodRequest.php">Donation Food Request</a></li>
		
		<li><a href="http://localhost/Old/Role/Job/Check-Job-apply.php">Check Job Apply</a></li>
		
		<li><a href="http://localhost/Old/MainPage/UpdateNew/UpdateNews.php">Upadate News</a></li>
		
	</ul>

</div>

<br></br>



<table class="center" style="width:86%" id="columnC" >

<form action="http://localhost/Old/Role/Admin/CheckDonationRecrod/CheckDonationProcess.php" method="POST">

		<tr class="center" >
		
			<th style="background-color: #04AA6D; color: white">Name</th>
			<th style="background-color: #04AA6D; color: white">Email</th>
			<th style="background-color: #04AA6D; color: white">Amount</th>
			<th style="background-color: #04AA6D; color: white">Donation For</th>
			<th style="background-color: #04AA6D; color: white">Invoice</th>
			<th style="background-color: #04AA6D; color: white">Action</th>
			
		</tr>
	
		<?php	while ($row = $rs->fetch_assoc()) {
			
			$email=$row["email"];
			
			echo "<tr>";
			
				echo "<td style='background-color: #FFE5B4'>" . $row["Name"]. "</td>";
				echo "<td style='background-color:#fff6e6'>". $row["email"]. "</td>";
				echo "<td style='background-color:#fff6e6'>". $row["Amount"]. "</td>";
				echo "<td style='background-color: #FFE5B4' >". $row["DonationFor"]. "</td>";
				echo "<td style='background-color: #FFE5B4' >". $row["Invoice"]. "</td>";
				echo "<td style='background-color:#fff6e6'><br></br><button type='Submit' name='hiddenID' value='". $row["ID"]. "' />Delete</button> 
				<br></br> <a href='mailto:".$email."' >Reply email</a><br></br></td>";
			
			echo "</tr>";
		
		} ?>

</form>

</table>
	
<?php 

	$per_query = "SELECT * FROM donation ";
	$per_result = mysqli_query($con, $per_query);
	
	$total_record=mysqli_num_rows($per_result);
	$total_page=ceil($total_record/$num_per_page);

?>

<table id="columnD" >

<tr>

<td>

<?php 

	if($page>1)
	{
		echo "<a href='DonationRecrod.php?page=".($page-1)."'w3-button w3-red'>Previous</a>";
	
	}
?>

</td>	

<td>

<?php 

	for ($i=1;$i<$total_page;$i++)
	{
		echo "<a href='DonationRecrod.php?page=".$i."'class='w3-button w3-red' >$i</a>";
	}
?>
</td>

<td>

<?php

	if ($i>$page)
		
	{
		echo "<a href='DonationRecrod.php?page=".($page+1)."'class='w3-button w3-red'>Next</a>";
	
	}
		

?>

</td>

<tr><td><br></br></td></tr>
</tr>	

</table>



</body>
</html>

<?php 

	} else { echo '<script> alert  ("You had been logout.\nPlease login again.\nGoing to main page in 5 seconds.\nIf you need register, Please click on the regiser button")</script>';
				header("refresh:0; url=http://localhost/Old/MainPage/mainpage.php.");
?>

<?php 

	}
	
?>

