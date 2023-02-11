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


$sql=" SELECT *, SUM(Amount) AS Amount From donation
where DonationTo='Funeral Fund'";

$rs = mysqli_query($con, $sql);

while ($row = $rs->fetch_assoc()) {
	$Amount = $row["Amount"];
	$Amount1= $Amount/1000;


$dataPoints = array( 
	array("y" => $Amount1,"label" => "Funeral" ),
);

}

$sql1=" SELECT *, SUM(Amount) AS Amount From donation
where DonationTo='Medical Fund'";

$rs = mysqli_query($con, $sql1);

while ($row = $rs->fetch_assoc()) {
	$Amount = $row["Amount"];
	$Amount2= $Amount/1000;


$dataPoints1 = array( 
	array("y" => $Amount2,"label" => "Medical" ),
);

}

$sql1=" SELECT *, SUM(Amount) AS Amount From donation
where DonationTo='Daily Expenses Fund'";

$rs = mysqli_query($con, $sql1);

while ($row = $rs->fetch_assoc()) {
	$Amount = $row["Amount"];
	$Amount3= $Amount/1000;


$dataPoints2 = array( 
	array("y" => $Amount3,"label" => "Daily Expenses" ),
);

}

?>

<script>
window.onload = function() {
 
var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	title:{
		text: "Chart for the donation status"
	},
	axisY: {
		title: "Donation (RM)",
		includeZero: true,
		prefix: "RM",
		suffix:  "k",
		maximum:100,
	},
	data: [{
		type: "bar",
		yValueFormatString: "RM#0.000K",
		indexLabel: "{y}",
		indexLabelPlacement: "inside",
		indexLabelFontWeight: "bolder",
		indexLabelFontColor: "black",
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();

var chart = new CanvasJS.Chart("chartContainer1", {
	animationEnabled: true,
	title:{
		text: "Chart for the donation status"
	},
	axisY: {
		title: "Donation (RM)",
		includeZero: true,
		prefix: "RM",
		suffix:  "k",
		maximum:30,
	},
	data: [{
		type: "bar",
		yValueFormatString: "RM#0.000K",
		indexLabel: "{y}",
		indexLabelPlacement: "inside",
		indexLabelFontWeight: "bolder",
		indexLabelFontColor: "black",
		dataPoints: <?php echo json_encode($dataPoints1, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();

var chart = new CanvasJS.Chart("chartContainer2", {
	animationEnabled: true,
	title:{
		text: "Chart for the donation status"
	},
	axisY: {
		title: "Donation (RM)",
		includeZero: true,
		prefix: "RM",
		suffix:  "k",
		maximum:10,
	},
	data: [{
		type: "bar",
		yValueFormatString: "RM#0.000K",
		indexLabel: "{y}",
		indexLabelPlacement: "inside",
		indexLabelFontWeight: "bolder",
		indexLabelFontColor: "black",
		dataPoints: <?php echo json_encode($dataPoints2, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();

 
}

</script>


<style>

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
	bottom: -2px;
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

</style>


<head>

  <Title> Welcome To Happy Old Folk Home </Title>
  
</head>

<style>

<?php include 'DonationMoney.css'; ?>

</style>

<html>

<body>

	<p> &nbsp </P>
	
	<h1> Welcome To Happy Old Folk Home </h1>

<?php 

	if(isset($_SESSION['username'])) { ?>
	
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

<?php } else { ?>
	
	<div class="PleaseLogin">
	
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

<?php } ?>


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
        
      <button type="submit">Login</button>

	  	<button type="reset" onClick="this.`form`.reset()" id="three">Reset</button>
	  
    </div>

    <div class="container" style="background-color:#f1f1f1">
	
      <button type="button" onclick="document.getElementById('CloseLogin').style.display='none'" class="cancelbtn">Cancel</button>
	  
      <span class="psw">Forgot <a href="http://localhost/OldFolkHome/ForgotPage/Forgot.php">password?</a></span>
	  
    </div>
  </form>
</div>

<?php 

if(isset($_SESSION['username'])) { ?>

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

<div class="topnav">

    <ul id="mainMenu">
		
		<li><a href="http://localhost/OldFolkHome/FoodDonation/WeeklyFoodList.php">Weekly Needed Food</a></li>
		
	</ul>
	
</div>

<div class="topnav">

    <ul id="mainMenu">
		
		<li><a href="http://localhost/OldFolkHome/AnnualReport/ViewAnnualReport/ViewAnnualReport.php">View Annual Report</a></li>
		
	</ul>
	
</div>

<br></br>
<br></br>

<?php } ?>

<form method="post" action= "http://localhost/OldFolkHome/DonationMoney/DonationMoney.php">

<table id="DonationToColumnA">

<tr>
	<td>

<div class="Middlenav">

   <img src="Funeral.JPEG" alt="" border=3 height=260 width=200></img>

</div>

</td>

<td id="photo">

<figure>



<p>Funeral Fund :
The money will be used for old folk passing away. Our funding target is RM 100 k.
Please select from the drop box to support. 
</p>


</figure>

<div id="chartContainer" style="height: 150px;  width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

</td>

</tr>

<tr>
	<td></td>
</tr>

<tr>
	<td>

<div class="Middlenav">

   <img src="Medicine.jpeg" alt="" border=3 height=270 width=200></img>

</div>

</td>

<td id="photo">

<figure>

<p>Medical Fund :
The money will be used for the medical expenses of the elderly. Our funding target is RM 30 K per year.
Please select from the drop box to support. 
</p>

</figure>

<div id="chartContainer1" style="height: 150px;  width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

</td>

</tr>

<tr>
	<td></td>
</tr>

<tr>
	<td>

<div class="Middlenav">

   <img src="Daily Expenses.jpeg" alt="" border=3 height=275 width=200></img>

</div>

</td>

<td id="photo">

<figure>

<p>Daily Expenses Fund :
The money will be used for the old folks daily expenses (Food and water & electronic bill).Our funding target is RM 10 k per year.
Please select from the drop box to support.  
</p>

</figure>

<div id="chartContainer2" style="height: 150px;  width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

</td>

</tr>

<tr><td></td></tr>

<tr><td>&nbsp</td></tr>

	<tr>

		<td id="photo1" colspan="2">

&nbsp 
<p> Dear Donors, Please choose the fund you want to donate from the drop box. 

</p>

<p>
			<select id="Donation" name="Donation"/>
				
				<option value="Funeral Fund">Funeral Fund</option>
				<option value="Medical Fund">Medical Fund</option>
				<option value="Daily Expenses Fund">Daily Expenses</option>
	
			</select>

			<input type="submit" value="Submit">
			

</p>
&nbsp 	
	</tr>

</table>

<br></br>

<br></br>
<br></br>