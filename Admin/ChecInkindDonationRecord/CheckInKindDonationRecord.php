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


if(isset($_SESSION['username'])) { ?>

<?php 

	} else { echo '<script> alert  ("You had been logout.\nPlease login again.\nGoing to main page in 5 seconds.\nIf you need register, Please click on the regiser button")</script>';
				header("refresh:0; url=http://localhost/OldFolkHome/MainPage/Mainpage.php");

		exit();

	} ?>

<style>

<?php include 'InKindrequest.css'; ?>

body {

  width: 100%;
  height: 100%;
  background-image: url('BackgroundColor2.jpg');
  margin :0;
  background-position: center;
  background-attachment: fixed;  
}


</style>

<head>

  <Title> Welcome To Happy Old Folk Home </Title>
  
</head>

<html>

<body>


	<p> &nbsp </P>
	
	<h1> Welcome To Happy Old Folk Home </h1>

<?php 


if(isset($_GET['page']))

{

$page=$_GET['page'];

	
}

else

{
	$page=1;
}

$num_per_page=05;
$start_from=($page-1)*05;



?>

<?php 

$sql = "SELECT * FROM register WHERE LoginName = '" . $_SESSION['username'] . "'";
$rs = mysqli_query($con, $sql);

while ($row = $rs->fetch_assoc()) {

$UserID=$row["UserID"];



}

?>

		<div class="loginAlready">
		
			<table>
			
				<tr>
				
					<td>
					
					Logged on as  <?php echo $_SESSION['username']; ?> </td> 
					
					<td><a href='http://localhost/OldFolkHome/Logout/Logout.php'>
					
					<input type='Submit' name='action' value='Logout'/> </a>
					
					</td>
					
					<td>

					
					<input type="Submit" name="Submit1" value="Edit" id="three" onclick="window.location.href='http://localhost/OldFolkHome/EditDetails/EditDetails.php';"/>
					
					</td>
					
				</tr>
				
			</table>
			
		</div>
<br></br>
<div class="topnav">

    <ul id="mainMenu">
		
		<li><a href="http://localhost/OldFolkHome/MainPage/Mainpage.php">Home</a></li>
		
	</ul>
	
	
</div>

<div class="dropdown">
	
	<button class="dropbtn">Donate Money</button>

<div class="dropdown-content">

	<a href="http://localhost/OldFolkHome/DonationMoney/DonationTo.php">Donation</a></li>
	
	<a href="http://localhost/OldFolkHome/DonationMoney/CheckDonationRecord.php">Donation Record</a></li>
		
</div>

</div>

<div class="topnav">

    <ul id="mainMenu">
		
		<li><a href="http://localhost/OldFolkHome/FoodDonation/WeeklyFoodList.php">Weekly Needed Food</a></li>
		
	</ul>
	
</div>

<div class="dropdown1">
	
	<button class="dropbtn1">Additinal Function</button>

<div class="dropdown-content1">

	<a href="http://localhost/OldFolkHome/InKindrequest/InKIndDonationRequest.php">In-Kind Donation</a></li>
	<a href="http://localhost/OldFolkHome/Admin/ChecInkindDonationRecord/CheckInKindDonationRecord.php">In-Kind Donation Record</a>
	<a href="http://localhost/OldFolkHome/AnnualReport/ViewAnnualReport/ViewAnnualReport.php">View Annual Report</a></li>
	
</div>

</div>

<br></br>

<table id="columnD">

	<tr>
		
		<th  colspan="8"><h2>In-Kind Donation Record</h2></th>
	
	</tr>
			
	<tr><td> &nbsp </td></tr>

	<tr>

			<th style="background-color: #04AA6D; color: white">No</th>
			<th style="background-color: #04AA6D; color: white">Name</th>
			<th style="background-color: #04AA6D; color: white">Request ID</th>
			<th style="background-color: #04AA6D; color: white">Product Type</th>
			<th style="background-color: #04AA6D; color: white">Image</th>
			<th style="background-color: #04AA6D; color: white">Remarks</th>
			<th style="background-color: #04AA6D; color: white">Status</th>
			<th colspan="6" style="background-color: #04AA6D; color: white">Action</th>
			
	</tr>


<?php 

if(isset($_GET['page']))

{

$page=$_GET['page'];

	
}

else

{
	$page=1;
}

$num_per_page=04;
$start_from=($page-1)*04;

$sql3= "SELECT * FROM InKindRequest WHERE UserID  = '" . $UserID . "'  order by ID DESC limit $start_from,$num_per_page";
$rs3 = mysqli_query($con, $sql3);



	while ($row = $rs3->fetch_assoc()) {
	
	$img="<img src ='".$row['Image']."' height='150' width='150' border='2'>";

		echo "<table";

		
		echo "<tr>";
		echo "<td style='background-color: #FFE5B4'>" . $row["ID"]. "</td>";
		echo "<td style='background-color: #FFE5B4'>" . $row["UserName"]. "</td>";
		echo "<td style='background-color: #FFE5B4'>" . $row["InKinddonationID"]. "</td>";
		echo "<td style='background-color:#fff6e6'>". $row["ProductType"]. "</td>";			
		echo "<td style='background-color:#fff6e6'>". $img . "</td>";	
		echo "<td style='background-color:#fff6e6'>". $row["Remarks"]. "</td>";	
		echo "<td style='background-color: #FFE5B4'>" . $row["Status"]. "</td>";
		echo "<td colspan='3'style='background-color:#fff6e6'>";
		echo "<form action='http://localhost/OldFolkHome/InKindrequest/DeleteInKind.php' method='POST'>";
		echo "<button type='Submit'  style='margin-left:auto;margin-right:auto;display:block;margin-top:22%;margin-bottom:0%'
		name='ID' id='button' value='" . $row['InKinddonationID'] . "' />Delect Record</button>";
		echo "</tr>";
		echo "</form>";	
		echo "</table";
		
	} 
	

$per_query = "SELECT * FROM InKindRequest WHERE UserID = '" . $UserID . "'";
$per_result = mysqli_query($con, $per_query);

$total_record=mysqli_num_rows($per_result);
$total_page=ceil($total_record/$num_per_page);

?>

<br></br>


<table id ="buttonA">

<tr>	
	
	<td>

<?php 
	
	if($page>1)
	
	{
		
	echo "<a href='CheckInKindDonationRecord.php?page=".($page-1)."'class='w3-button'>Previous</a>";
	
	}
?>

	</td>	
	
	<td>

<?php
 
	for ($i=1;$i<$total_page;$i++)
		
	{
		

	}
?>

	</td>
	
<td>

<?php

	if ($i>$page)
		
	{
		echo "<a href='CheckInKindDonationRecord.php?page=".($page+1)."'class='w3-button w3-red'>Next</a>";
	
	}
		

?>

</td>

</tr>

</div>

</table>

<br></br>


<form method="GET">

<table class="center" id="columnE" >

   
 </form>
 <tr>	<th  colspan="8"><h2>Search result of In-Kind Donation record</h2><h3>(Enter the In Kind Donation No to search)</h3></th></tr>

	<tr>

			<th style="background-color: #04AA6D; color: white">No</th>
			<th style="background-color: #04AA6D; color: white">Name</th>
			<th style="background-color: #04AA6D; color: white">Request ID</th>
			<th style="background-color: #04AA6D; color: white">ProductType</th>
			<th style="background-color: #04AA6D; color: white">Image</th>
			<th style="background-color: #04AA6D; color: white">Remarks</th>
			<th style="background-color: #04AA6D; color: white">Status</th>
			<th colspan="6" style="background-color: #04AA6D; color: white">Action</th>
			
	</tr>


<?php 

if(isset($_GET['search']))
{
	$filtervalues = $_GET['search'];
    $query = "SELECT * FROM InKindRequest WHERE (InKinddonationID) LIKE '%$filtervalues%' ";
    $query_run = mysqli_query($con, $query);

		
if($row = $query_run->fetch_assoc() > 0){
	
	
	foreach($query_run as $items) {	
	
		$InKinddonationID=$items["InKinddonationID"];
		$img="<img src ='".$items['Image']."' height='150' width='150' border='2'>";
		
	
		echo "<table";

		
		echo "<tr>";
		echo "<td style='background-color: #FFE5B4'>" . $items["ID"]. "</td>";
		echo "<td style='background-color: #FFE5B4'>" . $items["UserName"]. "</td>";
		echo "<td style='background-color: #FFE5B4'>" . $items["InKinddonationID"]. "</td>";
		echo "<td style='background-color:#fff6e6'>". $items["ProductType"]. "</td>";			
		echo "<td style='background-color:#fff6e6'>". $img. "</td>";	
		echo "<td style='background-color:#fff6e6'>". $items["Remarks"]. "</td>";	
		echo "<td style='background-color: #FFE5B4'>" . $items["Status"]. "</td>";
		echo "<td colspan='3'style='background-color:#fff6e6'>";
		echo "<form action='http://localhost/OldFolkHome/InKindrequest/DeleteInKind.php' method='POST'>";
		echo "<button type='Submit'  style='margin-left:auto;margin-right:auto;display:block;margin-top:22%;margin-bottom:0%'
		name='ID' id='button' value='" . $items['InKinddonationID'] . "' />Delect Record</button>";
		echo "</tr>";
		echo "</form>";	

		echo "</table";

	}
	}

	else
	
	{
?>
	<tr><td></td></tr>
	<tr><td></td></tr>
	<tr><td></td></tr>
	<tr>
		<td colspan="8">No Record Found,Pleae Key in the correct In Kind Donation Request ID</td>
	</tr>
	

<?php
}

}   ?>

</form>

<tr>
		<td></td></tr>

<tr>
		<td></td></tr>

<div class ="search">

<tr>
	<td id="search" colspan="7">

	<input type="text"  name="search" required value="<?php if(isset($_GET['search'])){echo $_GET['search']; } ?>" class="form-control" placeholder="Search data">
	<button type="submit" class="btn btn-primary">Search</button>
	
</td></tr>

</div>

</table>

<br></br>

<br></br>
<br></br>





