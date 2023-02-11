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

?>

<style>
	
div.pleaseLogin1{ 

  position:relative;
  width:25%;
  left:830px;
  top:10px;
  border:1px solid;
  background:#ffdfd3;

}

/* The container <div> - needed to position the dropdown content */
div.dropdown {
  position: relative;
  float:left;
   bottom: 13px;
    width: 200px;
  margin-left:25px;
  font-family:Verdana;
 font-size :1.1vw;
 
}

/* The container <div> - needed to position the dropdown content */
div.dropdown1 {
  position: relative;
  float:left;
   bottom: 13px;
    width: 200px;
  margin-left:25px;
  font-family:Verdana;
 font-size :1.1vw;
 
}



</style>

<head>

  <Title> Welcome To Happy Old Folk Home </Title>
  
</head>

<link rel="stylesheet" type="text/css" href="http://localhost/OldFolkHome/AnnualReport/ViewAnnualReport/ViewAnnalReport.css">

<script> 

// Get the modal
var modal = document.getElementById('CloseLogin');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

</script>

<p> &nbsp </P>
	
	<h1> Welcome To Happy Old Folk Home </h1>
	

<?php if(isset($_SESSION['username'])) { ?>
	

		<div class="loginAlready">
		
			<table>
			
				<tr>
				
					<td>
					
					Logged on as  <?php echo $_SESSION['username']; ?> </td> 
					
					<td><a href='http://localhost/OldFolkHome/Logout/Logout.php'>
					
					<input type='Submit' name='action' value='Logout'/></a>
					
					</td>
					
					<td>

					<input type="Submit" name="Submit1" value="Edit" id="three" onclick="window.location.href='http://localhost/OldFolkHome/editDetails/editDetails.php'"/>
					
					</td>

				</tr>
				
			</table>
			
		</div>
		
	<p> &nbsp </P>

<?php } else { ?>
	
	<div class="pleaseLogin1">
	
	<table>
			<tr>
				
				<td></td>

				<td></td>

				<td colspan="2">
					
					<p style="font-size :1.2vw;color:#A52A2A;">Login or register as a member</p>			
	
				</td>
			
				<td>

					<button onclick="document.getElementById('CloseLogin').style.display='block'" style="width:auto; font-size: 14px;">Login</button>
			
				</td>

				<td>
				
					<a href ="http://localhost/OldFolkHome/Register/Resigter.php"><button style="width:auto;font-size: 14px;">Register</button></a>
			
				</td>
		
			</tr>
			
	</table>
	
</div>

<div id="CloseLogin" class="modal">
  
  <form class="modal-content animate" action="http://localhost/OldFolkHome/Login/DoLogin.php" method="post">
  
    <div class="imgcontainer">
	
      <span onclick="document.getElementById('CloseLogin').style.display='none'" class="close" title="Close Modal">&times;</span>
	  
      <img src="img_avatar2.png" alt="Avatar" class="avatar" height='180' width='180' >
	  
    </div>

    <div class="container">
	
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="UserName" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="Password" required>
        
      <button type="submit" name="Submit">Login</button>

	  	<button type="reset" onClick="this.`form`.reset()" id="three">Reset</button>
	  
    </div>

    <div class="container" style="background-color:#f1f1f1">
	
      <button type="button" onclick="document.getElementById('CloseLogin').style.display='none'" class="cancelbtn">Cancel</button>
	  
      <span class="psw">Forgot <a href="http://localhost/OldFolkHome/ForgotPage/Forgot.php">password?</a></span>
	  
    </div>
  </form>
</div>

	
<?php } 
	
if(isset($_SESSION['username'])) { ?>

<div class="topnav3">

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

<div class="topnav3">

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

  
<?php } else { ?>

<br></br>

<div class="topnav">

    <ul id="mainMenu">
		
		<li><a href="http://localhost/OldFolkHome/MainPage/Mainpage.php">Home</a></li>
		
	</ul>
	
	
</div>

<div class="topnav">

    <ul id="mainMenu">
		
		<li><a href="http://localhost/OldFolkHome/DonationMoney/DonationTo.php">Donate Money</a></li>
		
	</ul>
	
</div>

</div>

<div class="topnav">

    <ul id="mainMenu">
		
		<li><a href="http://localhost/OldFolkHome/FoodDonation/WeeklyFoodList.php">Weekly Needed Food</a></li>
		
	</ul>
	
</div>

<div class="topnav">

    <ul id="mainMenu">
		
			<li><a href="http://localhost/OldFolkHome/AnnualReport/ViewAnnualReport/ViewAnnualReport.php">Annual Report</a></li>
		
	</ul>
	
</div>

<br>

<?php }

$sql = "SELECT * From AnnualReport where Year='2021' AND Submit ='Submit'";

$rs3 = mysqli_query($con, $sql);

while ($row = $rs3->fetch_assoc()){
	
	$TotalExpenses=$row['TotalExpenses'];
	$Income=$row['Income'];
	$Pdf1 = $row ['PDF'];


$sql = "SELECT * From AnnualReport where Year='2022' AND Submit ='Submit'";

$rs3 = mysqli_query($con, $sql);

while ($row = $rs3->fetch_assoc()){
	
	$TotalExpenses1=$row['TotalExpenses'];
	$Income1=$row['Income'];
	$Pdf2 = $row ['PDF'];

}

$sql = "SELECT * From AnnualReport where Year='2023'";

$rs3 = mysqli_query($con, $sql);

while ($row = $rs3->fetch_assoc()){
	
	$TotalExpenses2=$row['TotalExpenses'];
	$Income2=$row['Income'];
	$Pdf3 = $row ['PDF'];

}


$sql = "SELECT * From AnnualReport where Year='2024'";

$rs3 = mysqli_query($con, $sql);

while ($row = $rs3->fetch_assoc()){
	
	$TotalExpenses3=$row['TotalExpenses'];
	$Income3=$row['Income'];
	$Pdf4 = $row ['PDF'];

}

$sql = "SELECT * From AnnualReport where Year='2025'";

$rs3 = mysqli_query($con, $sql);

while ($row = $rs3->fetch_assoc()){
	
	$TotalExpenses4=$row['TotalExpenses'];
	$Income4=$row['Income'];
	$Pdf5 = $row ['PDF'];

}

$dataPoints1 = array(
	array("label"=> "2021", "y"=> $TotalExpenses),
	array("label"=> "2022", "y"=> $TotalExpenses1),
	array("label"=> "2023", "y"=> $TotalExpenses2),
	array("label"=> "2024", "y"=> $TotalExpenses3),
	array("label"=> "2025", "y"=> $TotalExpenses4),
);
$dataPoints2 = array(
	array("label"=> "2021", "y"=> $Income),
	array("label"=> "2022", "y"=> $Income1),
	array("label"=> "2023", "y"=> $Income2),
	array("label"=> "2024", "y"=> $Income3),
	array("label"=> "2025", "y"=> $Income4),
);

}
?>

<style type="text/css">

div.topnav3{
  position: relative;
  margin-left:200; 
  bottom: 10px;
  margin-right:auto;
}

	#columnB{
	position:relative;
	margin-left:auto;
	margin-right:auto;
	background:linear-gradient(to top,#CBC3E3 100%,transparent 80%);
	border: 3px solid #00008B;
	padding: 30px;
	width:50%;  
   	bottom: -50px;
	font-size: 16px;
	font-family:arial;
	text-align: center;
}
</style>

<html>
<head>

<script>
window.onload = function () {
 
var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	theme: "light2",
	title:{
		text: "Average Amount Spent On Expenses And Income"
	},
	axisY:{
		includeZero: true
	},
	legend:{
		cursor: "pointer",
		verticalAlign: "center",
		horizontalAlign: "right",
		itemclick: toggleDataSeries
	},
	data: [{
		type: "column",
		name: "Expense",
		indexLabel: "{y}",
		yValueFormatString: "$#0.##",
		showInLegend: true,
		dataPoints: <?php echo json_encode($dataPoints1, JSON_NUMERIC_CHECK); ?>
	},{
		type: "column",
		name: "Income",
		indexLabel: "{y}",
		yValueFormatString: "$#0.##",
		showInLegend: true,
		dataPoints: <?php echo json_encode($dataPoints2, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();
 
function toggleDataSeries(e){
	if (typeof(e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
		e.dataSeries.visible = false;
	}
	else{
		e.dataSeries.visible = true;
	}
	chart.render();
}
 
}

</script>

<br></br>
<br></br>

<form action="http://localhost/OldFolkHome/AnnualReport/ViewAnnualReport/Detail.php" method="POST">

<div class="graph" id="chartContainer" style="height: 330px; width: 50%; margin: auto;">
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</div>

<div class= "Mediumnav">	
 
<table class="center" id="columnB">

<tr>
			
		<td style= "text-align: center" colspan="3"> <h2>Annual Report</h2></td>

		</tr>



	<tr>

			<th style="background-color: #06038D; color: white">Year</th>
			<th style="background-color: #06038D; color: white">Detail</th>
			<th style="background-color: #06038D; color: white">Download</th>

	</tr>

	<tr>

	<tr>
		
		<td style="background-color: #04AA6D; color: white ">
		
			2021
			
			
		</td>

		<td style="background-color: #04AA6D; color: white">

		

		<input type="hidden"  name="Detail1" id="Detail1"> </input> 
		<input type="Submit" name="Detail1"  value="Detail" id="three"></input>
				

	</td>

	<td style="background-color: #04AA6D; color: white">

		<?php echo $Pdf1 ?>->
		
		<a href="http://localhost/OldFolkHome/AnnualReport/DownloadAnualReport.php?file=<?php echo $Pdf1?>">Download</a><br>

		</td>		
	
	</tr>

		<tr>
		
		<td style="background-color: #04AA6D; color: white">
		
			2022
			
			
		</td>

		<td style="background-color: #04AA6D; color: white">

		<input type="hidden"  name="Detail2" id="Detail2"> </input> 
		<input type="Submit" name="Detail2"  value="Detail" id="three"></input>
				
	</td>

	<td style="background-color: #04AA6D; color: white">

		<?php echo $Pdf2 ?>->
		
		<a href="http://localhost/OldFolkHome/AnnualReport/DownloadAnualReport.php?file=<?php echo $Pdf2?>">Download</a><br>

		</td>	

	</td>
	
	</tr>

		<tr>
		
		<td style="background-color: #04AA6D; color: white">
		
			2023
			
			
		</td>

		<td style="background-color: #04AA6D; color: white">

		<input type="hidden"  name="Detail3" id="Detail3"> </input> 
		<input type="Submit" name="Detail3"  value="Detail" id="three"></input>

	</td>

	<td style="background-color: #04AA6D; color: white">

		<?php echo $Pdf3 ?>->
		
		<a href="http://localhost/OldFolkHome/AnnualReport/DownloadAnualReport.php?file=<?php echo $Pdf3?>">Download</a><br>

	</td>
	
	</tr>


		<tr>
		
		<td style="background-color: #04AA6D; color: white">
		
			2024
			
			
		</td>

		<td style="background-color: #04AA6D; color: white">

		
		<input type="hidden"  name="Detail4" id="Detail4"> </input> 
		<input type="Submit" name="Detail4"  value="Detail" id="three"></input>
		

	</td>

	<td style="background-color: #04AA6D; color: white">

		<?php echo $Pdf4 ?>->
		
		<a href="http://localhost/OldFolkHome/AnnualReport/DownloadAnualReport.php?file=<?php echo $Pdf3?>">Download</a><br>


	</td>
	
	</tr>

		<tr>
		
		<td style="background-color: #04AA6D; color: white">
		
			2025
			
			
		</td>

		<td style="background-color: #04AA6D; color: white">

		<input type="hidden"  name="Detail5" id="Detail5"> </input> 
		<input type="Submit" name="Detail5"  value="Detail" id="three"></input>
		

	</td>

	<td style="background-color: #04AA6D; color: white">

		<?php echo $Pdf5 ?>->
		
		<a href="http://localhost/OldFolkHome/AnnualReport/DownloadAnualReport.php?file=<?php echo $Pdf5?>">Download</a><br>


	</td>
	
	</tr>

</table>

<br></br>
<br></br>
<br></br>
<br></br>


   