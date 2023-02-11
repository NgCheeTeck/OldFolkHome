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

div.loginAlready{

  position:relative;
  width:19%;
  left: 880px;
  top:5px;
  border:1px solid;
  background:#ffdfd3;

}

.dropbtn {
 position:relative;
 color:#A52A2A;
	 background-color:#FFE5B4;
  padding: 8px;
 font-size :1.1vw;
  width: 200px;
  bottom: -2px;
  left:10px;
  font-family:Verdana;
	text-align: center;	
  cursor: pointer;
  border:1px solid;
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
  position: relative;
	float:left;
	 bottom: -3px;
	  width: 200px;
	margin-left:25px;
	font-family:Verdana;
 font-size :1.1vw;
 
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
  display: none;
  text-align: center;
  position: absolute;
  min-width: 200px;
   font-size :1.1vw;
  z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
  padding: 12px 16px;
   font-size :1.1vw;
  text-decoration: none;
  display: block;
  position: relative;
    left:10px;
	color:#A52A2A;
	 background-color:#FFE5B4;
	 border:1px solid;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background:#009;
    color: white;}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {display: block;}

/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdown:hover .dropbtn {background:#009;
    color: white;}

.dropbtn4 {
 position:relative;
 color:#A52A2A;
	 background-color:#FFE5B4;
  padding: 8px;
 font-size :1.1vw;
  width: 200px;
  bottom: -2px;
  left:10px;
  font-family:Verdana;
	text-align: center;	
  cursor: pointer;
  border:1px solid;
}

/* The container <div> - needed to position the dropdown content */
.dropdown4 {
  position: relative;
	float:left;
	 bottom: -3px;
	  width: 200px;
	margin-left:25px;
	font-family:Verdana;
 font-size :14px;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content4 {
  display: none;
  text-align: center;
  position: absolute;
  min-width: 200px;
   font-size :1.1vw;
  z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content4 a {
  padding: 12px 16px;
   font-size :14px;
  text-decoration: none;
  display: block;
  position: relative;
    left:10px;
	color:#A52A2A;
	 background-color:#FFE5B4;
	 border:1px solid;
}

/* Change color of dropdown links on hover */
.dropdown-content4 a:hover {background:#009;
    color: white;}

/* Show the dropdown menu on hover */
.dropdown4:hover .dropdown-content4 {display: block;}

/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdown4:hover .dropbtn4 {background:#009;
    color: white;}


.dropbtn3 {
 position:relative;
 color:#A52A2A;
	 background-color:#FFE5B4;
  padding: 8px;
 font-size :1.1vw;
  width: 200px;
  bottom: -5px;
  left:10px;
  font-family:Verdana;
	text-align: center;	
  cursor: pointer;
  border:1px solid;
}

/* The container <div> - needed to position the dropdown content */
.dropdown3 {
  position: relative;
	float:left;
	 bottom: 1px;
	  width: 200px;
	margin-left:25px;
	font-family:Verdana;
 font-size :1.1vw;
 
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content3 {
  display: none;
  text-align: center;
  position: absolute;
  min-width: 200px;
  font-size :14px;
  z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content3 a {
  padding: 12px 16px;
   font-size :14px;
  text-decoration: none;
  display: block;
  position: relative;
    left:10px;
	color:#A52A2A;
	 background-color:#FFE5B4;
	 border:1px solid;
}

/* Change color of dropdown links on hover */
.dropdown-content3 a:hover {background:#009;
    color: white;}

/* Show the dropdown menu on hover */
.dropdown3:hover .dropdown-content3 {display: block;}

/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdown3:hover .dropbtn3 {background:#009;
    color: white;}

.dropbtn1 {
 position:relative;
 color:#A52A2A;
	 background-color:#FFE5B4;
  padding: 8px;
 font-size :1.1vw;
  width: 200px;
  bottom: -2px;
  left:10px;
  font-family:Verdana;
	text-align: center;	
  cursor: pointer;
  border:1px solid;
}

/* The container <div> - needed to position the dropdown content */
.dropdown1 {
  position: relative;
	float:left;
	 bottom: -2px;
	  width: 200px;
	margin-left:25px;
	font-family:Verdana;
 font-size :1.1vw;
 
 
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content1 {
  display: none;
  text-align: center;
  position: absolute;
  min-width: 200px;
   font-size :1.1vw;
  z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content1 a {
  padding: 12px 16px;
   font-size :1.1vw;
  text-decoration: none;
  display: block;
  position: relative;
    left:10px;
	color:#A52A2A;
	 background-color:#FFE5B4;
	 border:1px solid;
}

/* Change color of dropdown links on hover */
.dropdown-content1 a:hover {background:#009;
    color: white;}


/* Show the dropdown menu on hover */
.dropdown1:hover .dropdown-content1 {display: block;}

/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdown1:hover .dropbtn1{background:#009;
    color: white;}

h1{ 
	color:#fff;
    width: 100%;
	text-align: center;
	font-family:Lucida Sans Unicode;
	font-size :2.5vw;
}

body {
	width: 100%;
    height: 100%;
	background-image: url("MainBackgroud.jpg");
	margin :0;
    background-position: center;
    background-attachment: fixed;	 
}

div.topnav{
  position: relative;
  margin-left:200; 
  bottom: -5px;
  margin-right:auto;
}

#mainMenu {
	width: inherit;
    height: inherit;
    margin: 0;
    padding: 0;
	font-family:Verdana;
	text-align: center;	
	font-size :1.1vw;
	
}

#mainMenu li {
	display:block;
	width:200px;
	float:left;
	margin-left:45px;
	border:1px solid;
}

#mainMenu a {
	display:block;
	padding:7px;
	background-color:#FFE5B4;
	color:#A52A2A;
	text-decoration:none;
	
}

#mainMenu a:hover {
	background-color:#009;
	color:#fff;
	
}




#columnA{
	
	background:linear-gradient(to top,#bfff7a 100%,transparent 80%);
	border: 3px solid #00008B;
	border-collapse:initial;
	padding: 35px;
	width: 750px;  
	text-align:center;
    position: relative;
   	bottom: -50px;
	margin-left:auto; 
	margin-right:auto;
	color: red;
	font-family:arial;
	font-size :16px;
}


#columnE{
	
	background:linear-gradient(to top,#cec5fa 100%,transparent 80%);
	border: 3px solid #00008B;
	border-collapse:initial;
	padding: 35px;
	width: 750px;  
	text-align:center;
    position: relative;
   	bottom: -45px;
	margin-left:auto; 
	margin-right:auto;
	font-family:arial;
	font-size :16px;
}

#columnD

{
	
	background:linear-gradient(to top,#cec5fa 100%,transparent 80%);
	border: 3px solid #00008B;
	border-collapse:initial;
	padding: 35px;
	width: 750px;  
	text-align:center;
    position: relative;
   	bottom: -45px;
	margin-left:auto; 
	margin-right:auto;
	font-family:arial;
	font-size :16px;
}


#buttonA{
margin-left:938px; 
position: relative;
bottom: -40px;
background:linear-gradient(to top,#FFC0CB 100%,transparent 80%);
	border: 3px solid #00008B;
	border-collapse:initial;

}

#buttonB{
margin-left:955px; 
position: relative;
bottom: -63px;
background:linear-gradient(to top,#FFC0CB 100%,transparent 80%);
	border: 3px solid #00008B;
	border-collapse:initial;

}


#buttonC{
margin-left:938px; 
position: relative;
bottom: -36px;
background:linear-gradient(to top,#FFC0CB 100%,transparent 80%);
	border: 3px solid #00008B;
	border-collapse:initial;

}
	
div.fixed{
	position: relative;
	bottom: -80px;
	font-size: 16px;
	font-family:Lucida Sans Unicode;
	color: #black;
	background:#fff;
	font-size :1.1vw;
}


#button {
  background-color: #4CAF50; /* Green */
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
$case=$row["Role"];
$UserID=$row["UserID"];



}

switch($case) {

case "Member": ?>

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
	
	<button class="dropbtn1">Additional Function</button>

<div class="dropdown-content1">

	<a href="http://localhost/OldFolkHome/InKindrequest/InKIndDonationRequest.php">In-Kind Donation</a></li>
	<a href="http://localhost/OldFolkHome/Admin/ChecInkindDonationRecord/CheckInKindDonationRecord.php">In-Kind Donation Record</a>
	<a href="http://localhost/OldFolkHome/AnnualReport/ViewAnnualReport/ViewAnnualReport.php">View Annual Report</a></li>
	
	
</div>

</div>

<br></br>

<table id="columnD">

	<tr>
		
		<th  colspan="7"><h2>Donation Record</h2></th>
	
	</tr>
			
	<tr><td> &nbsp </td></tr>

	<tr>

			<th style="background-color: #04AA6D; color: white">Name</th>
			<th style="background-color: #04AA6D; color: white">Donation For</th>
			<th style="background-color: #04AA6D; color: white">Invoice No</th>
			<th style="background-color: #04AA6D; color: white">Amount</th>
			<th style="background-color: #04AA6D; color: white">Date</th>
			<th style="background-color: #04AA6D; color: white">Payment By</th>
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

$num_per_page=03;
$start_from=($page-1)*03;

$sql3= "SELECT * FROM donation WHERE UserID  = '" . $UserID . "'  order by Date DESC limit $start_from,$num_per_page";
$rs3 = mysqli_query($con, $sql3);

	while ($row = $rs3->fetch_assoc()) {


		echo "<table";

		
		echo "<tr>";
		echo "<td style='background-color: #FFE5B4'>" . $row["UserName"]. "</td>";
		echo "<td style='background-color:#fff6e6'>". $row["DonationTo"]. "</td>";	
		echo "<td style='background-color:#fff6e6'>". $row["InvoiceNo"]. "</td>";			
		echo "<td style='background-color:#fff6e6'>RM". $row["Amount"]. "</td>";	
		echo "<td style='background-color:#fff6e6'>". $row["Date"]. "</td>";	
		echo "<td style='background-color: #FFE5B4'>" . $row["PaymentBy"]. "</td>";
		
		echo "<td colspan='3'style='background-color:#fff6e6'>";
		echo "<form action='http://localhost/OldFolkHome/DonationMoney/Invoive.php' method='POST'>";
		echo "<button type='Submit'  style='margin-left:auto;margin-right:auto;display:block;margin-top:22%;margin-bottom:0%'
		name='Invoice' id='button' value='" . $row['InvoiceNo'] . "' />Review Recipt</button>";
		echo "</tr>";
		echo "</form>";	
	

		echo "</table";
		
	} 
	

$per_query = "SELECT * FROM donation WHERE UserID = '" . $UserID . "'";
$per_result = mysqli_query($con, $per_query);

$total_record=mysqli_num_rows($per_result);
$total_page=ceil($total_record/$num_per_page);

?>

<br></br>


<table id ="buttonC">

<tr>	
	
	<td>

<?php 
	
	if($page>1)
	
	{
		
		echo "<a href='CheckDonationRecord.php?page=".($page-1)."'class='w3-button'>Previous</a>";
	
	
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
		echo "<a href='CheckDonationRecord.php?page=".($page+1)."'class='w3-button w3-red'>Next</a>";
	
	}
		

?>
</td>

</tr>

</table>


<form method="GET">

<table class="center" id="columnD" >

   
 </form>
 <tr>	<th  colspan="7"><h2>Search result of Donation record</h2><h3>(Enter the Invoice No to search)</h3></th></tr>
	 <tr>

			<th style="background-color: #04AA6D; color: white">Name</th>
			<th style="background-color: #04AA6D; color: white">Donation For</th>
			<th style="background-color: #04AA6D; color: white">Invoice No</th>
			<th style="background-color: #04AA6D; color: white">Amount</th>
			<th style="background-color: #04AA6D; color: white">Date</th>
			<th style="background-color: #04AA6D; color: white">Payment By</th>
			<th colspan="6" style="background-color: #04AA6D; color: white">Action</th>
			
	</tr>

<?php 

if(isset($_GET['search']))
{
	$filtervalues = $_GET['search'];
    $query = "SELECT * FROM donation WHERE CONCAT(InvoiceNo) LIKE '%$filtervalues%' ";
    $query_run = mysqli_query($con, $query);

		
if($row = $query_run->fetch_assoc() > 0){
	
	
	foreach($query_run as $items) {	
	
		$InvoiceNo=$items["InvoiceNo"];
	
		
		echo "<tr>";
		echo "<form action='http://localhost/OldFolkHome/DonationMoney/Invoive.php' method='POST'>";
		echo "<td style='background-color: #FFE5B4'>" .  $items["UserName"]. "</td>";
		echo "<td style='background-color:#fff6e6'>".  $items["DonationTo"]. "</td>";	
		echo "<td style='background-color:#fff6e6'>".  $items["InvoiceNo"]. "</td>";			
		echo "<td style='background-color:#fff6e6'>RM".  $items["Amount"]. "</td>";	
		echo "<td style='background-color:#fff6e6'>".  $items["Date"]. "</td>";	
		echo "<td style='background-color: #FFE5B4'>" .  $items["PaymentBy"]. "</td>";
		
		echo "<td colspan='3'style='background-color:#fff6e6'>";

		
		echo "<button type='Submit'  style='margin-left:auto;margin-right:auto;display:block;margin-top:20%;margin-bottom:20%'
		name='Invoice' id='button' value='" . $items['InvoiceNo'] . "'/>Review Recipt</button>";
		echo "</tr>";
		echo"</form>";

	}
	}

	else
	
	{

?>

<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>

	<tr>
		<td colspan="7">No Record Found,Please renter the Invoice No</td>
	</tr>
	

<?php
}

}   ?>

</form>

<tr>
		<td></td></tr>

<tr>
		<td></td></tr>

<tr>
	<td id="search" colspan="7">

	<input type="text"  name="search" required value="<?php if(isset($_GET['search'])){echo $_GET['search']; } ?>" class="form-control" placeholder="Search data">
	<button type="submit" class="btn btn-primary">Search</button>
	

</td></tr>

</table>

<br></br>

<br></br>
<br></br>

<?php break;

	case "Admin": ?>


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

<div class="dropdown4">
	
	<button class="dropbtn4">Donation</button>

<div class="dropdown-content4">

	<a href="http://localhost/OldFolkHome/DonationMoney/CheckDonationRecord.php">Donation Money Record</a></li>
	<a href="http://localhost/OldFolkHome/FoodDonation/UpdateWeeklyFood.php">Update Weekly Food List</a></li>
		
</div>

</div>

<div class="topnav">

    <ul id="mainMenu">
		
		<li><a href="http://localhost/OldFolkHome/AnnualReport/UpdateAnnualReport.php">Update Annual Report</a></li>
		
	</ul>
	
</div>

<div class="dropdown3">
	
	<button class="dropbtn3">Additional Function</button>

<div class="dropdown-content3">

	<a href="http://localhost/OldFolkHome/Admin/UserID/UserInformation.php">Member List</a></li>
	<a href="http://localhost/OldFolkHome/Admin/ChecInkindDonationRecord/CheckInKindDonationRequest.php">Check In-Kind Donation Record</a></li>
	
</div>

</div>

<br></br>

<table id="columnE">

	<tr>
		
		<th  colspan="8"><h2>All The Donation Record</h2></th>
	
	</tr>


	<tr><td> &nbsp </td></tr>

	<tr>
			<th style="background-color: #04AA6D; color: white">No</th>
			<th style="background-color: #04AA6D; color: white">Name</th>
			<th style="background-color: #04AA6D; color: white">Donation For</th>
			<th style="background-color: #04AA6D; color: white">Invoice No</th>
			<th style="background-color: #04AA6D; color: white">Amount</th>
			<th style="background-color: #04AA6D; color: white">Date</th>
			<th style="background-color: #04AA6D; color: white">Payment By</th>
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
$start_from=($page-1)*03;

$sql3= "SELECT * FROM donation order by Date DESC limit $start_from,$num_per_page";
$rs3 = mysqli_query($con, $sql3);

	while ($row = $rs3->fetch_assoc()) {


		echo "<table";

		echo "<form>";
	
		echo "<tr>";
		echo "<td style='background-color: #FFE5B4'>" . $row["ID"]. "</td>";
		echo "<td style='background-color: #FFE5B4'>" . $row["UserName"]. "</td>";
		echo "<td style='background-color:#fff6e6'>". $row["DonationTo"]. "</td>";	
		echo "<td style='background-color:#fff6e6'>". $row["InvoiceNo"]. "</td>";			
		echo "<td style='background-color:#fff6e6'>RM". $row["Amount"]. "</td>";	
		echo "<td style='background-color:#fff6e6'>". $row["Date"]. "</td>";	
		echo "<td style='background-color: #FFE5B4'>" . $row["PaymentBy"]. "</td>";
		
		echo "<td colspan='3'style='background-color:#fff6e6'>";
		echo "<form action='http://localhost/OldFolkHome/DonationMoney/Invoive.php' method='POST'>";
		echo "<button type='Submit'  style='margin-left:auto;margin-right:auto;display:block;margin-top:22%;margin-bottom:0%'
		name='Invoice' id='button' value='" . $row['InvoiceNo'] . "' />Review Recipt</button>";
		echo "</tr>";
		echo "</form>";	


		echo "</table";


		
	} 
	

$per_query = "SELECT * FROM donation ";
$per_result = mysqli_query($con, $per_query);

$total_record=mysqli_num_rows($per_result);
$total_page=ceil($total_record/$num_per_page);

?>


</table>


<table id ="buttonB">

<tr>	
	
	<td>

<?php 
	
	if($page>1)
	
	{
		
		echo "<a href='CheckDonationRecord.php?page=".($page-1)."'class='w3-button'>Previous</a>";
	
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
		echo "<a href='CheckDonationRecord.php?page=".($page+1)."'class='w3-button'>Next</a>";
	
	}
		

?>


</td>

</tr>

</div>

</table>

<br></br>

<form method="GET">

<table class="center" id="columnD" >

   
 </form>
 <tr>	<th  colspan="8"><h2>Search result of Donation record</h2><h3>(Enter the User Name to search)</h3></th></tr>
	 <tr>

	 		<th style="background-color: #04AA6D; color: white">No</th>
			<th style="background-color: #04AA6D; color: white">Name</th>
			<th style="background-color: #04AA6D; color: white">Donation For</th>
			<th style="background-color: #04AA6D; color: white">Invoice No</th>
			<th style="background-color: #04AA6D; color: white">Amount</th>
			<th style="background-color: #04AA6D; color: white">Date</th>
			<th style="background-color: #04AA6D; color: white">Payment By</th>
			<th colspan="6" style="background-color: #04AA6D; color: white">Action</th>
			
	</tr>

<?php 

if(isset($_GET['search']))
{
	$filtervalues = $_GET['search'];
    $query = "SELECT * FROM donation WHERE CONCAT(UserName) LIKE '%$filtervalues%' ";
    $query_run = mysqli_query($con, $query);

		
if($row = $query_run->fetch_assoc() > 0){
	
	
	foreach($query_run as $items) {	
	
		$InvoiceNo=$items["InvoiceNo"];
	
		
		echo "<tr>";
		echo "<form action='http://localhost/OldFolkHome/DonationMoney/Invoive.php' method='POST'>";
		echo "<td style='background-color: #FFE5B4'>" .  $items["ID"]. "</td>";
		echo "<td style='background-color: #FFE5B4'>" .  $items["UserName"]. "</td>";
		echo "<td style='background-color:#fff6e6'>".  $items["DonationTo"]. "</td>";	
		echo "<td style='background-color:#fff6e6'>".  $items["InvoiceNo"]. "</td>";			
		echo "<td style='background-color:#fff6e6'>RM".  $items["Amount"]. "</td>";	
		echo "<td style='background-color:#fff6e6'>".  $items["Date"]. "</td>";	
		echo "<td style='background-color: #FFE5B4'>" .  $items["PaymentBy"]. "</td>";
		
		echo "<td colspan='3'style='background-color:#fff6e6'>";

		
		echo "<button type='Submit'  style='margin-left:auto;margin-right:auto;display:block;margin-top:20%;margin-bottom:20%'
		name='Invoice' id='button' value='" . $items['InvoiceNo'] . "'/>Review Recipt</button>";
		echo "</tr>";
		echo"</form>";

	}
	}

	else
	
	{
?>

<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
	<tr>
		<td colspan="7">No Record Found,Please renter the User Name</td>
	</tr>
	

<?php
}

}   ?>

</form>

<tr>
		<td></td></tr>

<tr>
		<td></td></tr>

<tr>
	<td id="search" colspan="7">

	<input type="text"  name="search" required value="<?php if(isset($_GET['search'])){echo $_GET['search']; } ?>" class="form-control" placeholder="Search data">
	<button type="submit" class="btn btn-primary">Search</button>
	

</td></tr>

</table>

<br></br>

<table id="columnA" >

	<tr>
		<td colspan="8">Remarks:If you want to delete donation record,Please contact IT technician to remove the donation record <td>
		
	</tr>
	
</table>

<br></br>
<br></br>
<br></br>


<?php break;} ?>


