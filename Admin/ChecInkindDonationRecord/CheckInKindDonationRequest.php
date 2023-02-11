<?php session_start();


if(isset($_SESSION['username'])) { 




	} else { echo '<script> alert  ("You had been logout.\nPlease login again.\nGoing to main page in 5 seconds.\nIf you need register, Please click on the regiser button")</script>';
				header("refresh:0; url=http://localhost/OldFolkHome/MainPage/Mainpage.php");

	}
	

$con = mysqli_connect('127.0.0.1','root','');
	
	if(!$con)
	{
		echo 'Not Connected To Server'; 
	}
	
	if (!mysqli_select_db($con,'OldFolkHomeProject'))
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

$sql = "SELECT * FROM InKindRequest limit $start_from,$num_per_page";
$rs = mysqli_query($con, $sql);


?>

<style>

<?php include 'CheckInKindDonation.css'; ?>

</style>

<html>

<head>

  <Title> Welcome To Happy Old Folk Home </Title>
  
</head>

<body>

	<p> &nbsp </P>
	
	<h1> Welcome To Happy Old Folk Home </h1>
	
<body>

<?php ?>

		<div class="loginAlready">
		
			<table>
			
				<tr>
				
					<td>
					
					Logged on as  <?php echo $_SESSION['username']; ?> </td> 
					
					<td><a href='http://localhost/OldFolkHome/Logout/Logout.php'>
					
					<input type='Submit' name='action' value='Logout'/> </a>
					
					</td>

					<td>
					
					<input type="Submit" name="Submit1" value="Edit" id="three" onclick="window.location.href='http://localhost/OldFolkHome/Admin/Admin.php';"/>
					
					</td>
					
				</tr>
				
			</table>
			
		</div>
<br></br>

<div class="topnav">

    <ul id="mainMenu">
		
		<li><a href="http://localhost/OldFolkHome/Admin/Admin.php">Home</a></li>
		
	</ul>

</div>

<div class="dropdown">
	
	<button class="dropbtn">Donation</button>

<div class="dropdown-content">

	<a href="http://localhost/OldFolkHome/DonationMoney/CheckDonationRecord.php">Donation Money Record</a></li>
	<a href="http://localhost/OldFolkHome/FoodDonation/UpdateWeeklyFood.php">Update Weekly Food List</a></li>
	
</div>

</div>

<div class="topnav">

    <ul id="mainMenu">
		
		<li><a href="http://localhost/OldFolkHome/AnnualReport/UpdateAnnualReport.php">Update Annual Report</a></li>
		
	</ul>
	
</div>

<div class="dropdown1">
	
	<button class="dropbtn1">Additional Function</button>

<div class="dropdown-content1">

	<a href="http://localhost/OldFolkHome/Admin/UserID/UserInformation.php">Member List</a></li>
	<a href="http://localhost/OldFolkHome/Admin/ChecInkindDonationRecord/CheckInKindDonationRequest.php">Check In-Kind Donation Record</a></li>
	
</div>

</div>

<br></br>

<br></br>

<form action=""  method="GET">

<table class="center" style="width:70%" id="columnC" >

   <tr>
		
		<th  colspan="9"><h2>Search result of In-Kind Donation Record</h2><h3>(Enter the User Name to search)</h3></th>
	
	</tr>

		<tr class="center" >
			
			<th style="background-color: #04AA6D; color: white">ID</th>
			<th style="background-color: #04AA6D; color: white">Name</th>
			<th style="background-color: #04AA6D; color: white">User ID</th>
			<th style="background-color: #04AA6D; color: white">Email</th>
			<th style="background-color: #04AA6D; color: white">Phone</th>
			<th style="background-color: #04AA6D; color: white">Postcode</th>
			<th style="background-color: #04AA6D; color: white">Description</th>
			<th style="background-color: #04AA6D; color: white">Photo</th>
			<th style="background-color: #04AA6D; color: white">Action</th>

			
		</tr>
  </form>   

		<?php 

if(isset($_GET['search']))
{
	$filtervalues = $_GET['search'];
    $query = "SELECT * FROM InKindRequest WHERE CONCAT(UserName) LIKE '%$filtervalues%' ";
    $query_run = mysqli_query($con, $query);
		
if(mysqli_num_rows($query_run) > 0){
	
	
	foreach($query_run as $items) {	
	
$email=$items["Email"];
$img="<img src ='".$items['Image']."' height='230' width='230' border='2'>";
$Status=$items["Status"];
$ID=$items["UserID"];


		
		echo "<form action='http://localhost/OldFolkHome/InKindrequest/InKindrequestBackend.php' method='POST'>";

			echo "<tr>";
				
				echo "<td style='background-color: #FFE5B4'> " . $items["ID"]. "</td>";

				echo "<td style='background-color: #FFE5B4'>" . $items["UserName"]. "</td>";
				echo "<td style='background-color: #FFE5B4'>" . $items["UserID"]. "</td>";
				echo "<td style='background-color:#fff6e6'>". $items["Email"]. "</td>";
				echo "<td style='background-color: #FFE5B4'>(". $items["Phonecode"]. ") ". $items["Phone"]. "</td>";
				echo "<td style='background-color: #FFE5B4' >". $items["Postcode"]. "</td>";
				echo "<td style='background-color: #FFE5B4' >". $items["Remarks"]. "</td>";
				echo "<td style='background-color: #FFE5B4' >".$img. "</td>"; ?>

				<td style="background-color:#fff6e6"><br></br>


				<select id='status'name='status' required >
 
						<option selected hidden value='Pending'><?php echo $Status?></option>
						<option value='Approved'>Approved</option>
						<option value='Rejected'>Rejected</option></select></input>
				
						<br></br> <button type='submit' id='ID' name="ID" value="<?php echo $ID?>"<?php if ($Status == "Approved"or $Status == "Rejected"){ ?> disabled <?php   } ?>/>Submit</button>
				

				<?php 

				echo "<br></br> <a href='mailto:".$email."' >Reply email</a><br></br></td>";
			echo "</tr>";
		
			echo "</form>";
	

	}
	}

	else
	
	{
?>
	<tr><td><br></br></td></tr>
	
	<tr>
		<td colspan="10">No Record Found,Please renter the User Name</td>
	</tr>
	
	<tr><td><br></br></td></tr>
<?php
}

}   ?>

</form>

</table>

<div class ="search">

	<input type="text" name="search" required value="<?php if(isset($_GET['search'])){echo $_GET['search']; } ?>" class="form-control" placeholder="Search data">
	<button type="submit" class="btn btn-primary">Search</button>
	
</div>

		
<br></br>

<br></br>

<table class="center" style="width:70%" id="columnC" >

   <tr>
		
		<th  colspan="9"><h2>All the In-Kind Donation Record</h2></th>
	
	</tr>

		<tr class="center" >
			
			<th style="background-color: #04AA6D; color: white">ID</th>
			<th style="background-color: #04AA6D; color: white">Name</th>
			<th style="background-color: #04AA6D; color: white">User ID</th>
			<th style="background-color: #04AA6D; color: white">Email</th>
			<th style="background-color: #04AA6D; color: white">Phone</th>
			<th style="background-color: #04AA6D; color: white">Postcode</th>
			<th style="background-color: #04AA6D; color: white">Description</th>
			<th style="background-color: #04AA6D; color: white">Photo</th>
			<th style="background-color: #04AA6D; color: white">Action</th>
			
		</tr>
	
		<?php	while ($row = $rs->fetch_assoc()) {
			
			$email=$row["Email"];
			$img="<img src ='".$row['Image']."' height='220' width='220' border='2'>";
			$Status=$row["Status"];
			$ID=$row["UserID"];

			
		
			echo "<tr>";

				echo "<form action='http://localhost/OldFolkHome/InKindrequest/InKindrequestBackend.php' method='POST'>";

				echo "<td style='background-color: #FFE5B4'>" . $row["ID"]. "</td>";
				echo "<td style='background-color: #FFE5B4'>" . $row["UserName"]. "</td>";
				echo "<td style='background-color: #FFE5B4'>" . $row["UserID"]. "</td>";
				echo "<td style='background-color:#fff6e6'>". $row["Email"]. "</td>";
				echo "<td style='background-color: #FFE5B4'>(". $row["Phonecode"]. ") ". $row["Phone"]. "</td>";
				echo "<td style='background-color: #FFE5B4' >". $row["Postcode"]. "</td>";
				echo "<td style='background-color: #FFE5B4' >". $row["Remarks"]. "</td>";
				echo "<td style='background-color: #FFE5B4' >". $img. "</td>";?>

				<td style="background-color:#fff6e6"><br></br>


				<select id='status'name='status' required >
 
						<option selected hidden value='Pending'><?php echo $Status?></option>
						<option value='Approved'>Approved</option>
						<option value='Rejected'>Rejected</option></select></input>
				
				<br></br> <button type='submit' id='ID' name="ID" value="<?php echo $ID?>"<?php if ($Status == "Approved"or $Status == "Rejected"){ ?> disabled <?php   } ?>/>Submit</button>
				
				<?php 

				echo "<br></br> <a href='mailto:".$email."' >Reply email</a><br></br></td>";
			echo "</tr>";

			echo "</form>";
		
		} ?>

</form>

</table>
	
<?php 

	$per_query = "SELECT * FROM InKindRequest ";
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
		echo "<a href='CheckInKindDonationRequest.php?page=".($page-1)."'class='w3-button'>Previous</a>";
	
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
		echo "<a href='CheckInKindDonationRequest.php?page=".($page+1)."'class='w3-button'>Next</a>";
	
	}
		

?>

</td>

<tr><td><br></br></td></tr>
</tr>	

</table>

<tr><td><br></br></td></tr>
<tr><td><br></br></td></tr>


</body>
</html>



