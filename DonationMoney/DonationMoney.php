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

	$var_value = $_POST['Donation'];

?>

<style>


div.loginAlready{

  position:relative;
  width:20%;
  left: 870px;
  top:10px;
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


<script type="text/javascript">
	
function selectCountry() {
	var x = document.getElementById("country");
	var y = document.getElementById("phoneCode1");
	var z = document.getElementById("phoneMaxLength1");
	
	if (x.value == "Singapore") {
		y.value = "65";
		z.maxLength = 8;
	} else { 
		y.value = "60";
		z.maxLength = 9;
	}
}

</script>

<head>

  <Title> Welcome To Happy Old Folk Home </Title>
  
</head>

<style>

<?php include  'DonationMoney.css'; ?>

</style>

<html>

<body>

	<p> &nbsp </P>
	
	<h1> Welcome To Happy Old Folk Home </h1>

<?php 

	if(isset($_SESSION['username'])) { 

	$sql = "SELECT * FROM register WHERE LoginName = '" . $_SESSION['username'] . "'";
$rs = mysqli_query($con, $sql);

while ($row = $rs->fetch_assoc()) {

	$UserID=$row["UserID"];
	$UserName=$row["UserName"]; 
	$Email = $row ["Email"];
	$Nationality = $row["Nationality"];
	$Phonecode = $row["Phonecode"];
	$Phone = $row["Phone"];	

} ?>
	
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

<?php } 

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
	
<button class="dropbtn1">Additinal Function</button>

<div class="dropdown-content1">

  <a href="http://localhost/OldFolkHome/InKindrequest/InKIndDonationRequest.php">In-Kind Donation</a></li>
	<a href="http://localhost/OldFolkHome/InKindrequest/CheckInKindDonationRecord.php">In-Kind Donation Record</a>
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
		
		<li><a href="http://localhost/OldFolkHome/DonationMoney/DonationTo.php">Donation Money</a></li>
		
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
		
		<li><a href="http://localhost/Old/DonationFood/DonationFood.php">Annual Report</a></li>
		
	</ul>
	
</div>


<?php } 

if(isset($_SESSION['username'])) { ?>

<form method="post" action= "http://localhost/OldFolkHome/DonationMoney/BankCard.php">

<table id=columnE>

<tr>

	<td> 
		
		<input type="hidden" id="loginName" name="loginName" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{5,}" maxlength="10" size="10" readonly="LoginName" required  value="<?php echo $UserID; ?>">
	
	</td>
	
</tr>
 
 <tr>
	
	<td></td>
 
	<td> 

	<h2 style="text-align:center">Thanks for you kindly Support</h2></td>
	
</tr>

<tr>

	<td id="Name">
		
		Name :
		
	</td>
			
	<td> 
		
		<input type="text" id="Lname" Name="Name"  maxlength="100" size="20" value="<?php echo "$UserName"; ?>"required>  
	
	</td>
		
	<tr><td> &nbsp </td> </tr>
	
	<tr>
	
		<td id="Email">
				
				Email :
				
		</td>
		
		<td>
			
			<input type="text" name="Email" id="Lname" input type="text" required value= "<?php echo $Email; ?>"
			pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" placeholder="XXXX" size="25">
		
		</td>
	
	</tr>
		
	<tr><td> &nbsp </td> </tr>

	</tr>
	
	
 <tr>
		
	<td id="Nationality">
		
			Nationality
		
		</td>
		
		<td>
		
			<select id="country" onchange="selectCountry()" name="Nationality">
				<option selected hidden value =""><?php echo $Nationality; ?></option>
				<option value="Malaysia">Malaysia</option>
				<option value="Singapore">Singapore</option>
			</select>
			
		</td>
		
		</tr>
			
	<tr><td> &nbsp </td> </tr>

	<tr>
			
		<td id="Phone">
				
				Phone:

			</td>
			
			<td>
			
				<input id="phoneCode1" style="width:33px;"  value="<?php echo $Phonecode; ?>" >

				<input type ="Phone" id="phoneMaxLength1" value="<?php echo $Phone; ?>" placeholder="" name="Phone" maxlength=8 oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" required pattern="[0-9]{8,9}"></input>
	
			
			</td>
			
		</tr>
		
		<tr>
		
		<td id="Amount">
			
			RM:
		
		</td>
		
		<td>
			
			<input type="text" name="Amount" id="Lname" input type="text" maxlength="4" size="4"required value= "" style="width:13%"  onkeypress='return event.charCode >= 48 && event.charCode <= 57' placeholder="XXXX">
		
		</td>

	</tr>
		
	<tr>
	
		<td id="Donation">
			
			Purpose:
		
		</td>
			
		<td>
		
			<input type="text" name="Purpose" id="Lname" input type="text" maxlength="4" size="4"required value="<?php echo $var_value ?>" readonly>
			
		</td>

	</tr>

<tr><td> &nbsp </td> </tr>
	
		<tr>
		
	<td colspan="2">
		
			Payment Method:
		
			<select id="Payment" name="PaymentMethod" required>
				<option value="CreditCard">Credit & Debit Card</option>
				<option value="Online Banking">Online Banking (MayBank)</option>
				<option value="Online Banking Public Bank">Online Banking (Public Bank)</option>
				<option value="Touch N Go">Touch N Go</option>
			</select>
			
		</td>
			

</select>
		</tr>

		</tr>
		
		<tr><td> &nbsp </td> </tr>
		
	<tr>
		
		<td id="Policy">
		
			Policy:
			
		</td>
			
		<td>
		
		<p> Old Folk Home only accept the Malaysia Ringgit. 
		All donations are non-refundable, and donations will help old people home operations. 
		By tick checkbox, I acknowledge that I have read, understand, and agree to
	    the policies and procedures of Old Folk Home policy. 
		
		<input type="checkbox" id="Policy" name="Policy" value="Policy" required></p>
		
		</td>
		
	</tr>
		
	<tr><td> &nbsp </td> </tr>
		
<tr> 
	
	<td></td>
		
	<td>
		
		<input type="Submit" name="Submit" value="Submit" id="Submit"/>
			
		<button type="reset" onClick="this.form.reset()" id="three">Reset</button>
			
	</td>
	
</tr>

<tr>

	<tr><td> &nbsp </td> </tr>

		<td id="Policy">
		
			<p>Remarks : </p>
			
		</td>
			
		<td>
		
		<p> For cash and cheque payment, please visit to us at office (Mon - Fri 9 am to 6 pm).
		Address: 8AA, Batu 8½, Skudai Lbh, Taman Sutera Utama, 81300 Skudai, Johor, Malaysia。 </p>

	</td>
			
</tr>

<tr>

	<tr><td> &nbsp </td> </tr>

		<td id="Policy">
		
			<p></p>
			
		</td>
			
		<td>
		
		<p> For online banking and Touch N Go payment. After payment forward to our admin email (OldFolkHomeAdmin@gmail.com), receipt will send to your email. </p>

	</td>
			
</tr>

</form>

</table>

<br></br>
<br></br>

 
<?php  } else { ?>
	

<form method="post" action= "http://localhost/OldFolkHome/DonationMoney/BankCard.php" >

<table id=columnD>

</tr>

<tr>

	<td>
		
		<input type="hidden" id="loginName" name="loginName" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{5,}" maxlength="10" size="10" readonly="LoginName" required  value="Visitor">
	
	</td>
	
</tr>
 
 <tr>
	
	<td></td>
 
	<td>
	
	<h2 style="text-align:center">Thanks for you kindly Support</h2></td>
	
</tr>

<tr>

	<td id="Name">
		
		Name :
		
	</td>
			
	<td >
		
		<input type="text" id="Lname" Name="Name"  maxlength="25" size="20" style="width:50%" required >
	
	</td>
		
	<tr><td> &nbsp </td> </tr>
	
	<tr>
	
		<td id="Email">
				
				Email :
				
		</td>
		
		<td>
			
			<input type="text" name="Email" id="Lname" input type="text" required
			pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" size="25" style="width:50%">
		
		</td>
	
	</tr>
		
	<tr><td> &nbsp </td> </tr>

	</tr>
	
	
 <tr>
		
	<td id="Nationality">
		
			Nationality:
		
		</td>
		
		<td>
		
			<select id="country" onchange="selectCountry()" name="Nationality">
				<option selected hidden value ="Nationality">Nationality</option>
				<option value="Malaysia">Malaysia</option>
				<option value="Singapore">Singapore</option>
			</select>
			
		</td>
		
		</tr>
			
	<tr><td> &nbsp </td> </tr>

	<tr>
			
		<td id="Phone">
				
				Phone:

			</td>
			
			<td>
			
				<input id="phoneCode1" style="width:32px" name="Phonecode" readonly="phoneCode1"></input>

				<input type ="Phone"id="phoneMaxLength1" placeholder="" name="Phone" maxlength=8 oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" required pattern="[0-9]{8,9}" style="width:120px"></input>
			
			</td>
			
		</tr>
		
	<tr><td> &nbsp </td> </tr>

		</tr>
		
	
	<tr>
		
		<td id="Amount">
			
			RM:
		
		</td>
		
		<td>
			
			<input name="Amount" id="Lname" type="text" maxlength="4" size="4" required value="" placeholder="XXXX"  onkeypress='return event.charCode >= 48 && event.charCode <= 57' style="width:13%">
		
		</td>

	</tr>
		
	<tr>
	
		<td id="Donation">
			
			Purpose:
		
		</td>
			
		<td>
		
			<input type="text" name="Purpose" id="Lname" input type="text" maxlength="4" size="4"required value="<?php echo $var_value ?>" 
			style="width:175px" readonly>
			
		</td>

	</tr>
		
		<tr><td> &nbsp </td> </tr>
		


	<tr>
		
	<td colspan="2">
		
			Payment Method:
		
			<select id="Payment" name="PaymentMethod" required>
				<option value="CreditCard">Credit & Debit Card</option>
				<option value="Online Banking">Online Banking (MayBank)</option>
				<option value="Online Banking Public Bank">Online Banking (Public Bank)</option>
				<option value="Touch N Go">Touch N Go</option>
			</select>
			
		</td>
			
</select>
		</tr>


	</tr>
		
		<tr><td> &nbsp </td> </tr>
		


	<tr>

<tr>


	<td colspan="2">
		
			How to you know us:
	
			<select id="Payment">
				<option selected hidden value ="Select">Select</option>
				<option >NewsPaper</option>
				<option >Friend</option>
				<option >Social Media</option>
			</select>

		
			
		</td>
			
</select>

		</tr>

		
		<tr><td> &nbsp </td> </tr>

<tr>

		<td id="Policy">
		
			Policy:
			
		</td>
			
		<td>
		
		<p> Old Folk Home only accept the Malaysia Ringgit. 
		All donations are non-refundable, and donations will help old people home operations. 
		By tick checkbox, I acknowledge that I have read, understand, and agree to
	    the policies and procedures of Old Folk Home policy. 
		
		<input type="checkbox" id="Policy" name="Policy" value="Policy" required></p>
		
		</td>
		
	</tr>

<tr>

	<tr><td> &nbsp </td> </tr>

		<td id="Policy">
		
			<p>Remarks : </p>
			
		</td>
			
		<td>
		
		<p> For cash and cheque payment, please visit to us at office (Mon - Fri 9 am to 6 pm). </p>

	</td>
			
</tr>

<tr>

	<tr><td> &nbsp </td> </tr>

		<td id="Policy">
		
			
		</td>
			
		<td>
		
		<p> For online banking and Touch N Go payment. After payment forward to our admin email (OldFolkHomeAdmin@gmail.com), receipt will send to your email. </p>

	</td>
			
</tr>

<tr><td>&nbsp</td></tr>

		
<tr> 
	
	<td></td>
		
	<td>
		
		<input type="Submit"  name="Submit" value="Submit" id="Submit"/>
			
		<button type="reset" onClick="this.form.reset()">Reset</button>
			
	</td>
	
</tr>

</form>

</table>

<br></br>
<br></br>


<?php }?>

<div class="fixed">

	<p align="center">Copyright 2023 © Happy Old Age Home Web Design by Jack Ng</p>

</div>

</body>

</html>




