<html>

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


if(isset($_SESSION['username'])) { 

$sql = "SELECT * FROM register WHERE LoginName = '" . $_SESSION['username'] . "'";
$rs = mysqli_query($con, $sql);

while ($row = $rs->fetch_assoc()) {
	$UserName = $row["UserName"];
	$LoginName = $row["LoginName"];
	$Nationality = $row["Nationality"];
	$Phonecode = $row["Phonecode"];
	$Phone = $row["Phone"];	
	$Email = $row["Email"];
	$Address = $row["Address"];
	$Postcode = $row["Postcode"];
	$Newupdate = $row["Newupdate"];
	$Password=$row["Password"];
	}

?>

<script>

function selectCountry() {
	var x = document.getElementById("country");
	var y = document.getElementById("phoneCode1");
	var z = document.getElementById("phoneMaxLength1");
	
	if (x.value == "Singapore") {
		y.value = "+65";
		z.maxLength = 8;
	} else { 
		y.value = "+60";
		z.maxLength = 9;
	}
}


function validatePasswords()
{
    var pass1 = document.getElementById("myInput").value;
    var pass2 = document.getElementById("myInput1").value;
    if(pass1 != pass2) 
    {
	   
       alert("passwords don't match");
	   document.getElementById("two").disabled =true;
       
    }
	 else{	
    
	document.getElementById("two").disabled=false;
	 }
}

function myFunction1() {
  var x = document.getElementById("myInput1");
  var y = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
	y.type = "text";
  } else {
    x.type = "password";
	y.type = "password";
  }
}

</script>


<style>

<?php include 'editDetails.css'; ?>

</style>

<head>

  <Title> Welcome To Happy Old Folk Home </Title>
  
</head>

<html>

<body>

	<p> &nbsp </P>
	
	<h1> Welcome To Happy Old Folk Home </h1>
	
		<div class="loginAlready">
		
			<table>
			
				<tr>
				
					<td>
					
					Logged on as  <?php echo $_SESSION['username']; ?> </td> 
					
					<td><a href='http://localhost/OldFolkHome/Logout/Logout.php'>
					
					<input type='Submit' name='action' value='Logout'/> </a>
					
					</td>
					
					<td>

					<input type="Submit" name="Submit1" value="Edit" id="three" onclick="window.location.href='http://localhost/OldFolkHome/editDetails/editDetails.php';"/></td>
					
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
  
  <button class="dropbtn1">Donation Money</button>

<div class="dropdown-content">

 	<a href="http://localhost/OldFolkHome/DonationMoney/DonationTo.php">Donation</a></li>
	
	<a href="http://localhost/OldFolkHome/DonationMoney/CheckDonationRecord.php">Donation Record</a></li>
		
</div>

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

<br></br>

<form action="http://localhost/OldFolkHome/editDetails/UpdatedDetail.php" method="POST">

<table class="columnA">

	<tr>
	
		<td colspan= 2 id= "Title">
		   
		   <h2>Edit Detail</h2>
		   
		</td>
	
	</tr>
	
	<tr>
	
		<td id="Name1">
				
				Name :
		
		</td>
		
		<td>
			
			<input type="text" id="Email" name="UserName" maxLength = "50" value="<?php echo $UserName; ?>"readonly="UserName">
		
		</td>
		
	</tr>
	
	<tr>
		
		<td id="LoginName">
				
				User Name :
				
		</td>
		
		<td>
			
			<input type="text" id="loginName1" name="LoginName" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{5,}" maxlength="10" size="10" readonly="LoginName" required  value=<?php echo $LoginName; ?>>
		
		</td>
		
	</tr>		
		
<tr>
	
	<td id="Password">
			
			Password :
	</td>
	
	<td>
		
		<input style="width: 193px;font-size:15;" type="password" id="myInput" placeholder="Password" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$" name="Password"  onselectstart="return false" oncut="return false"  maxlength="20" size="20"  
		oncopy="return false" onpaste="return false" ondrag="return false" ondrop="return false" required value=<?php echo $Password; ?>>
	
	</td>
	
</tr>
	
<tr>

	<td></td>		
	
</tr>
	
<tr>
	
	<td id="Cofirmpassword">
				
		Confirm Password :
	</td>
		
	<td>
			
	<input style="width: 193px;font-size:15;" type="password" id="myInput1" placeholder="Password" name="password1" onselectstart="return false" oncut="return false" 
	oncopy="return false" onpaste="return false" ondrag="return false" ondrop="return false" onfocusout="validatePasswords()" 
	maxlength="20" size="20"  required value=<?php echo $Password; ?>> 	

	</td>

</tr>		
	
<tr>
	
	<td></td>
		
	<td>
           
		<input type="checkbox" onclick="myFunction1()"/><label style="font-size: 15px;"/>Unhide password
				
	</td>
	
</tr>
	
<tr><td></td></tr>
		
<tr><td></td></tr>

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
		
<tr>
	
	<td id="Phone">
	
	Hand Phone:
	
	</td>
	
	<td>
		
		<input id="phoneCode1" style="width:33px;"  value="+<?php echo $Phonecode; ?>" >
		<input type ="Phone" id="phoneMaxLength1" value="<?php echo $Phone; ?>" placeholder="" name="Phone" maxlength=8 oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" required pattern="[0-9]{8,9}"></input>
	
	</td>

</tr> 
		
<tr>
	
	<td id="email1">
			
			Email:
			
	</td>
	
	<td>
		
		<input type="email" id="Email" name="Email" maxLength = "50" size="27" value="<?php echo $Email; ?>" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$">
	
	</td>

</tr>

<tr>
	
	<td id="add">
			
			Address:
		
		</td>
			
		<td>

			<textarea rows="7" id="address"name="Address" 
			maxlength="153" style="overflow:hidden"
			wrap='hard'cols="50"
                  required><?php echo $Address ?> </textarea>
		
		</td>
	
	</tr>
		
<tr>
	
	<td id="postcode1">
			
			Postcode:
	</td>
	
	<td>
		
		<input type="text" id="Postcode" name="Postcode" value="<?php echo $Postcode; ?>" maxLength="6" size="6" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" required >
	
	</td>

</tr>

<tr>

	<td id="Newupdate">
	
	Received new update :
	
	<td>
	
		<input type="radio" name="Newupdate" value="Yes" required 
		<?php if ($Newupdate == "Yes") { 
			echo "checked"; } ?> />
		
		<label style="font-size: 16px; ">Yes</label>

		<input type="radio" name="Newupdate" value="No" required 
		<?php if ($Newupdate == "No") {
		echo "checked"; } ?> /> 
		
		<label style="font-size: 16px;">No </label>
	</td>
		
</tr>

<tr><td></td></tr>
<tr><td></td></tr>

<tr><td></td></tr>
<tr><td></td></tr>

<tr>
	
	<td></td>

	<td>
		
		<input type="Submit" name="Submit" onclick="validatePasswords()" value="Submit" id="two"/>
			
		<button type="reset" onClick="this.form.reset()" id="three">Reset</button>
			
	</td>

</tr>

</table>

</form>


<br></br>

<div class="fixed"><p>Copyright 2021 © Happy Old Age Home
Web Design by Jack Ng.</p></div>

</body>

</html>

<?php 
	
	} else 

		{ echo '<script> alert  ("You had been logout.\nPlease login again.\nGoing to main page in 5 seconds.\nIf you need help, Please call the IT admin")</script>';
				
				header("refresh:0; url=http://localhost/OldFolkHome/MainPage/mainpage.php");
				
	}
?>

