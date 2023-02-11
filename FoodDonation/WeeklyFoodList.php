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

<html>

	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 

<head>

	<title> Old Folk Home Web-based System </title>

	<link rel="stylesheet" href="Mainpage.css">


</head> 


<link rel="stylesheet">

<style>

#h1{ 
      color: white;
  width: 100%;
	text-align: center;
	font-family:Lucida Sans Unicode;
	font-size :2.5vw;

}

div.pleaseLogin{ 

  position:relative;
  width:25%;
  left:830px;
  top:10px;
  border:1px solid;
  background:#ffdfd3;

}

body {

	width: 100%;
  height: 100%;
	background-image: url("MainBackgroud.jpg");
	margin :0;
  background-position: center;
  background-attachment: fixed;	 
}

div.loginAlready{

  position:relative;
  width:20%;
  left: 870px;
  top:10px;
  border:1px solid;
  background:#ffdfd3;

}

#B{
	font-family:arial;
	position:relative;
	margin-left:auto;
	margin-right:auto;
	background:linear-gradient(to top,#a9fdd8 100%,transparent 80%);
	border: 3px solid #00008B;
	border-collapse:initial;
	padding: 50px;
	width: 650px;  
   	bottom: -30px;
   	height: 100px;
	font-size:16px;
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
	 bottom: 51px;
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
		 bottom: 51px;
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


/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 25%;
	/* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}


button:hover {
  opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
}

/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  margin: 40px 0 5px 0;
  position: relative;
  
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}



Input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

#columnB{
	position:relative;
	margin-left:auto;
	margin-right:auto;
	background:linear-gradient(to top,#a9fdd8 100%,transparent 80%);
	border: 3px solid #00008B;
	border-collapse:initial;
	padding: 50px;
	width: 50%;  
    position: relative;
   	bottom: -50px;
	font-size: 16px;
	font-family:arial;
}


div.topnav1{
  position: relative;
  margin-left:200; 
  bottom: 48px;
  margin-right:auto;
}

</style>


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


?>
	
	<h1 id='h1'> Welcome To Happy Old Folk Home </h1>

<body>

	<p> </P>
	
<?php 

	if(isset($_SESSION['username'])) { ?>
	
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

<br></br>

<div class="topnav1">

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

<div class="topnav1">

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

<?php } ?>

<table class="center" id="columnB">

<tr>

	<td  colspan="10"><h3 align="center">Happy Old Folk Home Opening hour<h3></td>
	
</tr>

<tr>

	<td  colspan="10"><h4 align="center"> 9 am to 6 pm - Mon to Sun </h4></td>

</tr>

	<tr>
	
	<td colspan="10"><p>Weekly needed food/product</p>
	
	</td></tr>

	<tr><td><br></br></td></tr>

		<tr>

			<th style="background-color: #04AA6D; color: white">ID</th>
			<th style="background-color: #04AA6D; color: white">Type</th>
			<th style="background-color: #04AA6D; color: white">Product</th>
			<th style="background-color: #04AA6D; color: white">Photo</th>
			<th></th>
			<th></th>
			<th style="background-color: #04AA6D; color: white">ID</th>
			<th style="background-color: #04AA6D; color: white">Type</th>
			<th style="background-color: #04AA6D; color: white">Product</th>
			<th style="background-color: #04AA6D; color: white">Photo</th>
			
	</tr>


<?php  

$sql3= "SELECT * FROM WeeklyFoodList1 ORDER BY ID DESC LIMIT 1";

$rs3 = mysqli_query($con, $sql3);

while ($row = $rs3->fetch_assoc()){


$Date = $row ['Dates'];


$Type1= $row['Type1'];
$Product1 = $row['Product1'];
$img1="<img src ='".$row['Image1']."' height='150' width='150' border='2'>";


$Type2= $row['Type2'];
$Product2 = $row['Product2'];
$img2="<img src ='".$row['Image2']."' height='150' width='150' border='2'>";


$Type3= $row['Type3'];
$Product3 = $row['Product3'];
$img3="<img src ='".$row['Image3']."' height='150' width='150' border='2'>";


$Type4= $row['Type4'];
$Product4 = $row['Product4'];
$img4="<img src ='".$row['Image4']."' height='150' width='150' border='2'>";


$Type5= $row['Type5'];
$Product5 = $row['Product5'];
$img5="<img src ='".$row['Image5']."' height='150' width='150' border='2'>";


$Type6= $row['Type6'];
$Product6 = $row['Product6'];
$img6="<img src ='".$row['Image6']."' height='150' width='150' border='2'>";


$Type7= $row['Type7'];
$Product7 = $row['Product7'];
$img7="<img src ='".$row['Image7']."' height='150' width='150' border='2'>";


$Type8= $row['Type8'];
$Product8 = $row['Product8'];
$img8="<img src ='".$row['Image8']."' height='150' width='150' border='2'>";


$Type9= $row['Type9'];
$Product9 = $row['Product9'];
$img9="<img src ='".$row['Image9']."' height='150' width='150' border='2'>";


$Type10= $row['Type10'];
$Product10 = $row['Product10'];
$img10="<img src ='".$row['Image10']."' height='150' width='150' border='2'>";
	
		echo "<tr align='center'>";
		echo "<td style='background-color: #FFE5B4'>$Date</td>";
		echo "<td style='background-color: #FFE5B4'>$Type1</td>";
		echo "<td style='background-color: #FFE5B4'>$Product1</td>";	
		echo "<td style='background-color:#fff6e6'>$img1</td>";	

		echo "<td>";
		echo "<br></br>";
		
		echo "</td>";

			echo "<td>";
		echo "<br></br>";
		
		echo "</td>";

		echo "<td style='background-color: #FFE5B4'>$Date</td>";
		echo "<td style='background-color: #FFE5B4'>$Type2</td>";
		echo "<td style='background-color: #FFE5B4'>$Product2</td>";	
		echo "<td style='background-color:#fff6e6'>$img2</td>";	
		
		echo "<tr align='center'>";
		echo "<td style='background-color: #FFE5B4'>$Date</td>";
		echo "<td style='background-color: #FFE5B4'>$Type3</td>";
		echo "<td style='background-color: #FFE5B4'>$Product3</td>";	
		echo "<td style='background-color:#fff6e6'>$img3</td>";	
		
		echo "<td>";
		echo "<br></br>";
		
		echo "</td>";

			echo "<td>";
		echo "<br></br>";
		
		echo "</td>";

		echo "<td style='background-color: #FFE5B4'>$Date</td>";
		echo "<td style='background-color: #FFE5B4'>$Type4</td>";
		echo "<td style='background-color: #FFE5B4'>$Product4</td>";	
		echo "<td style='background-color:#fff6e6'>$img4</td>";	
		echo "</tr>";

		echo "<tr align='center'>";
		echo "<td style='background-color: #FFE5B4'>$Date</td>";
		echo "<td style='background-color: #FFE5B4'>$Type5</td>";
		echo "<td style='background-color: #FFE5B4'>$Product5</td>";	
		echo "<td style='background-color:#fff6e6'>$img5</td>";	
		
		echo "<td>";
		echo "<br></br>";
		
		echo "</td>";

		echo "<td>";
		echo "<br></br>";
		
		echo "</td>";

		echo "<td style='background-color: #FFE5B4'>$Date</td>";
		echo "<td style='background-color: #FFE5B4'>$Type6</td>";
		echo "<td style='background-color: #FFE5B4'>$Product6</td>";	
		echo "<td style='background-color:#fff6e6'>$img6</td>";	
		echo "</tr>";

		echo "<tr align='center'>";
		echo "<td style='background-color: #FFE5B4'>$Date</td>";
		echo "<td style='background-color: #FFE5B4'>$Type7</td>";
		echo "<td style='background-color: #FFE5B4'>$Product7</td>";	
		echo "<td style='background-color:#fff6e6'>$img7</td>";	
		
		echo "<td>";
		echo "<br></br>";
		
		echo "</td>";

		echo "<td>";
		echo "<br></br>";
		
		echo "</td>";

		echo "<td style='background-color: #FFE5B4'>$Date</td>";
		echo "<td style='background-color: #FFE5B4'>$Type8</td>";
		echo "<td style='background-color: #FFE5B4'>$Product8</td>";	
		echo "<td style='background-color:#fff6e6'>$img8</td>";	
		echo "<tr>";

		echo "<tr align='center'>";
		echo "<td style='background-color: #FFE5B4'>$Date</td>";
		echo "<td style='background-color: #FFE5B4'>$Type9</td>";
		echo "<td style='background-color: #FFE5B4'>$Product9</td>";	
		echo "<td style='background-color:#fff6e6'>$img9</td>";	
		
		echo "<td>";
		echo "<br></br>";
		
		echo "</td>";

		echo "<td>";
		echo "<br></br>";
		
		echo "</td>";

		echo "<td style='background-color: #FFE5B4'>$Date</td>";
		echo "<td style='background-color: #FFE5B4'>$Type10</td>";
		echo "<td style='background-color: #FFE5B4'>$Product10</td>";	
		echo "<td style='background-color:#fff6e6'>$img10</td>";	
		echo "</tr>";

	 ?>

<?php }  ?>

<tr><td><br></br></td></tr>

<tr><td colspan="10" align="center">Remarks:Above are needed food for this week (Only review for the food name and photo)</td></tr>

</table>


<br></br>

<tr><td><br></br></td></tr>


<table class="center" id="B">

	<tr>
	
	<td colspan="4"><p>Long term needed</p>
	
	</td></tr>
	
	<tr><td colspan="4">
	
	<ol>
	
	  <li>Rice</li>
	  
	  <li>Bee Hoon</li>
	  
	  <li>Macaroni</li>
	  
	  <li>Oil (preferably Canola Oil or Sunflower Oil) </li>
	  
	  <li>Salt</li>
	  
	  <li>Sugar (preferably Raw Sugar) </li>
	  
	  <li>Tomato Sauce</li>
	  
	  <li>Chilli Sauce</li>
	  
	  <li>Sesame Oil</li>
	  
	  <li>Light Soy Sauce</li>
	  
	  <li>Dark Soy Sauce </li>
  
	</ol> </td></tr>

<tr><td align='center'>Location as below</td></tr>

<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td>

	<iframe  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d127634.35161252163!2d103.68585763683647!3d1.4312905810140233!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31da73d1e1d8b2ed%3A0xba5a6790191b81e5!2z5YWr5ZOp5Y2K5LiJ5L-d5Z2b6KeC6Z-z6ZiB5a6J6ICB6ZmiIFBlcnNhdHVhbiBQZW5nYW51dCBTYW0gUG9oIFRhbmcgS3VhbiBZaW4gR2U!5e0!3m2!1sen!2ssg!4v1636879720742!5m2!1sen!2ssg"
	width="450" height="350" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

</td></tr>
</table>

<br></br>
<br></br>
<br></br>

