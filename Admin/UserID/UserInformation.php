<?php 

session_start();

	if(isset($_SESSION['username'])) { 


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
		
$sql = "SELECT * FROM register limit $start_from,$num_per_page";
$rs = mysqli_query($con, $sql);


?>

<style>

<?php include 'CheckUserInformation.css'; ?>

</style>

<style>

<?php include 'Admin.css'; ?>



</style>

<html>

<head>

  <Title> Welcome To Happy Old Folk Home </Title>
  
</head>

<body>

	<p> &nbsp </P>
	
	<h1> Welcome To Happy Old Folk Home </h1>

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

<form action=""  method="GET">

<table class="center" style="width:60%" id="columnC" >
		
			
   <!-- populate table from mysql database -->
   
   
		<tr class="center" >
			
			<th style="background-color: #04AA6D; color: white">User ID</th>
			<th style="background-color: #04AA6D; color: white">Name</th>
			<th style="background-color: #04AA6D; color: white">Login Name</th>
			<th style="background-color: #04AA6D; color: white">Password</th>
			<th style="background-color: #04AA6D; color: white">Phone</th>
			<th style="background-color: #04AA6D; color: white">Action</th>
			
		</tr>

 </form>   

		<?php 

if(isset($_GET['search']))
{
	$filtervalues = $_GET['search'];
    $query = "SELECT * FROM register WHERE Role='Member' AND CONCAT(UserName) LIKE '%$filtervalues%' ";
    $query_run = mysqli_query($con, $query);
		
if(mysqli_num_rows($query_run) > 0){
	
	
	foreach($query_run as $items) {	
	
			
			echo "<tr>";

				echo "<form action='http://localhost/OldFolkHome/Admin/UserID/ID.php' method='POST'>";
				echo "<td style='background-color: #FFE5B4'>" . $items["UserID"]. "</td>";
				echo "<td style='background-color: #FFE5B4'>" . $items["UserName"]. "</td>";
				echo "<td style='background-color:#fff6e6'>". $items["LoginName"]. "</td>";
				echo "<td style='background-color: #FFE5B4' >". $items["Password"]. "</td>";
				echo "<td style='background-color: #FFE5B4'>(+". $items["Phonecode"]. ") ". $items["Phone"]. "</td>";
				echo "<td style='background-color:#fff6e6'>";
				
				echo "<button type='Submit'  style='margin-left:auto;margin-right:auto;display:block;margin-top:30%;margin-bottom:30%'
				name='UserID' id='button' value='" . $items['UserID'] . "' />Edit</button>";

				echo "</form>";
				echo "</tr>";
				
	
	

	}
	}

	else
	
	{
?>
	<tr><td><br></br></td></tr>
	
	<tr>
		<td colspan="6">No Record Found, Please key in the member full name</td>
	</tr>
	
	<tr><td><br></br></td></tr>
<?php
}

}   ?>

			


</table>

<div class ="search">

	<input type="text" name="search" required value="<?php if(isset($_GET['search'])){echo $_GET['search']; } ?>" class="form-control" placeholder="Search data">
	<button type="submit" class="btn btn-primary">Search</button>
	
</div>

		
<br></br>

<br></br>

<table class="center" style="width:60%" id="columnC" >

<form action="http://localhost/OldFolkHome/Admin/UserID/ID.php"  method="POST">

		<tr><td>&nbsp</td></tr>

		<tr>

			<td id="Member" colspan="6">

					All The Member List
			</td>

		<tr><td>&nbsp</td></tr>
		</tr>

		<tr class="center" >
			
			<th style="background-color: #04AA6D; color: white">User ID</th>
			<th style="background-color: #04AA6D; color: white">Name</th>
			<th style="background-color: #04AA6D; color: white">Login Name</th>
			<th style="background-color: #04AA6D; color: white">Password</th>
			<th style="background-color: #04AA6D; color: white">Phone</th>
			<th style="background-color: #04AA6D; color: white">Action</th>
			
		</tr>
         
		<?php	

	$sql1 ="SELECT * FROM register WHERE Role='Member'";
	$rs1 = mysqli_query($con, $sql1);
	
		while ($row = $rs1->fetch_assoc()) {

			echo "<tr>";
				
				echo "<td style='background-color: #FFE5B4'>" . $row["UserID"]. "</td>";
				echo "<td style='background-color: #FFE5B4'>" . $row["UserName"]. "</td>";
				echo "<td style='background-color:#fff6e6'>". $row["LoginName"]. "</td>";
				echo "<td style='background-color: #FFE5B4' >". $row["Password"]. "</td>";
				echo "<td style='background-color: #FFE5B4'>(+". $row["Phonecode"]. ") ". $row["Phone"]. "</td>";

				echo "<td style='background-color:#fff6e6'>";
				
				echo "<button type='Submit'  style='margin-left:auto;margin-right:auto;display:block;margin-top:30%;margin-bottom:30%'
				name='UserID' id='button' value='" . $row['UserID'] . "' />Edit</button>";
			
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
		
		echo "<a href='UserInformation.php?page=".($page-1)."'class='w3-button'>Previous</a>";
	
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
		echo "<a href='UserInformation.php?page?page=".($page+1)."'class='w3-button'>Next</a>";
	
	}
		

?>

</td>

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

