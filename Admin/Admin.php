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

$sql = "SELECT * FROM register WHERE LoginName = '" . $_SESSION['username'] . "'";
$rs = mysqli_query($con, $sql);

while ($row = $rs->fetch_assoc()) {

	$fullName = $row["UserName"];
	$loginName = $row["LoginName"];
	$nationality = $row["Nationality"];
	$password = $row['Password'];
	$code = $row["Phonecode"];
	$phone = $row["Phone"];
	$Age = $row ["Age"];
	$ID = $row ["UserID"];
	$email = $row["Email"];
	$address = $row["Address"];
	$postalCode = $row["Postcode"];
	$role = $row["Role"];
	$img="<img src ='".$row['Image']."' height='150' width='150' border='2'>";


} ?>

<html>

<script type="text/javascript" src="Admin.js">

</script>

<head>

  <Title> Welcome To Happy Old Folk Home </Title>
  
</head>

<style>

<?php include 'Admin.css'; ?>


.dropbtn {
 position:relative;
 color:#A52A2A;
	 background-color:#FFE5B4;
  padding: 8px;
 font-size :1.1vw;
  width: 200px;
  bottom: -6px;
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
	 bottom: 1px;
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
   bottom: -120px;
   font-size :14px;
  z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
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
  bottom: -5px;
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
	 bottom: 1px;
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
   font-size :14px;
  z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content1 a {
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
.dropdown-content1 a:hover {background:#009;
    color: white;}


/* Show the dropdown menu on hover */
.dropdown1:hover .dropdown-content1 {display: block;}

/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdown1:hover .dropbtn1{background:#009;
    color: white;}

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

</style>

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

 
<div class= "Mediumnav">	
 
<table>

	<form method="POST" action="http://localhost/OldFolkHome/Admin/UpadateDetail.php" enctype="multipart/form-data">
	
		<tr>
		
			<td colspan="2"> <h2>Profile</h2></td>

		</tr>

<div class="photo">

	<p><?php echo $img ?> </p>

</div>

<div>
	
	<tr><td>
	
		<label for="img">Upload Photo:</label></td><td>  
		
		<input id="max_id" type="hidden" name="MAX_FILE_SIZE" value="200000" />
		
		<input onchange="upload_check()" id="file_id" type="file" name="choosefile" accept="image/*" />
 	
		</td>
		
	</tr>
	
	<tr>
	
		<td id="ID">
		
				ID :
				
		</td>
		
		<td>
			
			<input type="text" name="UserID" id="id" input type="text" maxlength="6" size="3"required readonly value=<?php echo $ID; ?>>

		</td>
	
	</tr>

	<tr>
	
		<td id="LoginName">
		
				User Name :
		</td>
		
		<td>
		
			<input type="text" id="loginName" name="LoginName" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{5,}" maxlength="10" size="10" readonly="LoginName" required  value=<?php echo $loginName; ?>>
		
		</td>
	
	</tr>


	<tr>
			
			<td id="Name">
				Name :
			</td>
			
					<td>
				<input type="text" id="Name" Name="UserName"  maxlength="100" size="20"  required  readonly value= "<?php echo $fullName; ?>">
			</td>
	
	</tr>

	<tr>
	
		<td id="Role">
				
				Role :
		
		</td>
		
		<td>
		
			<input type="text" id="role" name="role" maxlength="10" size="5"  required  readonly value=<?php echo $role; ?>>
		
		</td>
	
	</tr>
	
	<tr>
		
		<td id="Password">
		
				Password :
				
		</td>
		
		<td>
		
			<input type="password" id="myInput" placeholder="Password" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$" name="Password"  onselectstart="return false" oncut="return false"  maxlength="20" size="20"  
			oncopy="return false" onpaste="return false" ondrag="return false" ondrop="return false" required value=<?php echo $password; ?>>
		
		</td>
	
	</tr>

	<tr>
		
		<td id="Cofirmpassword">
		
				Confirm Password :
		
		</td>
		
		<td>
			
			<input type="password" id="myInput1" placeholder="Password" name="password1" onselectstart="return false" oncut="return false" 
			oncopy="return false" onpaste="return false" ondrag="return false" ondrop="return false" onfocusout="validatePasswords()" 
		     maxlength="20" size="20"  required value=<?php echo $password; ?>> 	

		</td>
		
	</tr>
	
	<tr><td></td>
	
		<td>
		
			<input type="checkbox" onclick="myFunction1()"/><label style="font-size: 15px; color:#000000"/>Unhide password
		
		</td>
	
	</tr>
	
	<tr>
	
		<td id="Age">
		
				Age:
				
		</td>
		
		<td>
		
			<input type="Age" id="age1" name="Age" maxLength ="2" size="1"  readonly required value=<?php echo $Age; ?>>
			
	</tr>
	
	<tr>
		
		<td id="Nationality">
		
			Nationality
			
		</td>
		
		<td>
			
			<select id="country" onchange="selectCountry()" name="Nationality"/>
				
				<option selected hidden value =""><?php echo $nationality; ?></option>
				<option value="Malaysia">Malaysia</option>
				<option value="Singapore">Singapore</option>
				
			</select>
			
		</td>
		
	</tr>

	<tr>
	
		<td id="Phone">
				
				Hand Phone:
				
		</td>
		
		<td>
		
			<input id="phoneCode1" style="width:50px;"  value="<?php echo $code; ?>" name="Phonecode" required >
			<input type ="Phone"id="phoneMaxLength1" value="<?php echo $phone; ?>" placeholder="" name="Phone" 
			maxlength=8 oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" required pattern="[0-9]{8,9}"size="12"></input>
			
		</td>
		
	</tr> 
	
	<tr>
		
		<td id="email1">
		
				Email:
				
		</td>
		
		<td>
		
		<input type="email" id="Email" name="Email" maxLength = "42" size="40" value="<?php echo $email; ?>" 
		required pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$">
		
		</td>
	
	</tr>
	
	<tr>
		
		 <td id="add">
            
            Address:
        
        </td>
            
        <td>

            <textarea rows="7" id="address"name="Address" 
            maxlength="153" style="overflow:hidden"
            wrap='hard'cols="40"
                  required><?php echo $address; ?></textarea>
        
        </td>
		
	</tr>
		
	<tr>
		
		<td id="postcode1">
		
				Postcode:
				
		</td>
		
		<td>
		
			<input type="text" id="Postcode" name="Postcode" size ="6" maxlength="6" pattern=".{5,6}" value="<?php echo $postalCode; ?>"  onfocusout="number()" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" >
		
		</td>
	
	</tr>
	
	<tr>
		
		<td></td>
	
	</tr>
	
	<tr>
		
		<td></td>

		<td>
			
			<input type="Submit" name="uploadfile"  value="Submit" id="two"/>
			<button type="reset" onClick="this.form.reset()" id="three">Reset</button>
			
		</td>	
	
	</tr>
	
</form>

</table>
			
<h5 align="center"> Password must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters with no spacing" required<h5/>
			
				
</div>

<div class="fixed">

	<p align="center">Copyright 2023 © Happy Old Age Home Web Design by Jack Ng</p>

</div>

</body>

</html>

<?php 

	} else { echo '<script> alert  ("You had been logout.\nPlease login again.\nGoing to main page in 5 seconds.\nIf you need register, Please click on the regiser button")</script>';
				header("refresh:0; url=http://localhost/OldFolkHome/MainPage/mainpage.php");

	}
	
?>



