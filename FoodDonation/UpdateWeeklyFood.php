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

?>

<style>

<?php include 'UpdateWeeklyFood.css'; ?>

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

<br></br>
 
<table class="center" id="columnB">

	<form method="POST" action="http://localhost/OldFolkHome/FoodDonation/UpdateWeeklyFoodBackend.php" enctype="multipart/form-data">
	

<tr>

	<td><h3 align="center">Happy Old Folk Home weekly food/product list<h3></td>
	
</tr>

<tr>

	<td><h4 align="center"><?php echo date("Y.m.d")  ?>
</h4></td>

</tr>


	<tr>
	
	<td colspan ="3" align="center"><p>Type in the food & fruit in the text box needed for this weeks 	
	</td></tr>
<tr><td>&nbsp</td></tr>

	<tr>
			
			<td>

				01:


			<select name="Type1"/>
				
				<option selected hidden value ="Did no select">Please select</option>
				<option value="Vegetable">Vegetable</option>
				<option value="Fruit">Fruit</option>
				<option value="Other Product">Other</option>
				
			</select>


		<input type="text" Name="Product1"  maxlength="30" size="20"  required/>
		
		<input id="max_id" type="hidden" name="MAX_FILE_SIZE" value="200000" />
		
		<input onchange="upload_check()" id="file_id" type="file" name="choosefile1" accept="image/*" />
 	

			</td>
	
	</tr>
	<tr>
			<td>
				02:

			<select name="Type2"/>
				
				<option selected hidden value ="Did no select">Please select</option>
				<option value="Vegetable">Vegetable</option>
				<option value="Fruit">Fruit</option>
				<option value="Other Product">Other</option>
				
			</select>
		
			
				<input type="text" Name="Product2"  maxlength="30" size="20"  />
		
		<input id="max_id" type="hidden" name="MAX_FILE_SIZE" value="200000" />
		
		<input onchange="upload_check()" id="file_id" type="file" name="choosefile2" accept="image/*" />

			</td>
	
	</tr>

		<tr>
			
			<td>
				03:

			<select name="Type3"/>
				
				<option selected hidden value ="Did no select">Please select</option>
				<option value="Vegetable">Vegetable</option>
				<option value="Fruit">Fruit</option>
				<option value="Other Product">Other</option>
				
			</select>	
			
				<input type="text" Name="Product3"  maxlength="30" size="20"  />
		
		<input id="max_id" type="hidden" name="MAX_FILE_SIZE" value="200000" />
		
		<input onchange="upload_check()" id="file_id" type="file" name="choosefile3" accept="image/*" />
			</td>
	
	</tr>

		<tr>
			
			<td>
				04:

					<select name="Type4"/>
				
				<option selected hidden value ="Did no select">Please select</option>
				<option value="Vegetable">Vegetable</option>
				<option value="Fruit">Fruit</option>
				<option value="Other Product">Other</option>
				
				
			</select>
			
			<input type="text" Name="Product4"  maxlength="30" size="20"  />
		
		<input id="max_id" type="hidden" name="MAX_FILE_SIZE" value="200000" />
		
		<input onchange="upload_check()" id="file_id" type="file" name="choosefile4" accept="image/*" />
			</td>
	
	</tr>

		<tr>
			
			<td>
				05:

				<select name="Type5"/>
				
				<option selected hidden value ="Did no select">Please select</option>
				<option value="Vegetable">Vegetable</option>
				<option value="Fruit">Fruit</option>
				<option value="Other Product">Other</option>
				
				
			</select>

			<input type="text" Name="Product5"  maxlength="30" size="20"  />
		
		<input id="max_id" type="hidden" name="MAX_FILE_SIZE" value="200000" />
		
		<input onchange="upload_check()" id="file_id" type="file" name="choosefile5" accept="image/*" />
			</td>
	</tr>


		<tr>
			
			<td>
				06:

					<select name="Type6"/>
				
				<option selected hidden value ="Did no select">Please select</option>
				<option value="Vegetable">Vegetable</option>
				<option value="Fruit">Fruit</option>
				<option value="Other Product">Other</option>
				
				
			</select>
			<input type="text" Name="Product6"  maxlength="30" size="20"  />
		
		<input id="max_id" type="hidden" name="MAX_FILE_SIZE" value="200000" />
		
		<input onchange="upload_check()" id="file_id" type="file" name="choosefile6" accept="image/*" />
			</td>
	</tr>


		<tr>
			
			<td>
				07:
			
				<select name="Type7"/>
				
				<option selected hidden value ="Did no select">Please select</option>
				<option value="Vegetable">Vegetable</option>
				<option value="Fruit">Fruit</option>
				<option value="Other Product">Other</option>
				
				
			</select>

				<input type="text" Name="Product7"  maxlength="30" size="20"  />
		
		<input id="max_id" type="hidden" name="MAX_FILE_SIZE" value="200000" />
		
		<input onchange="upload_check()" id="file_id" type="file" name="choosefile7" accept="image/*" />
			</td>
	
	</tr>


		<tr>
			
			<td>
				08:

				<select name="Type8"/>
				
				<option selected hidden value ="Did no select">Please select</option>
				<option value="Vegetable">Vegetable</option>
				<option value="Fruit">Fruit</option>
				<option value="Other Product">Other</option>
				
				
			</select>

			<input type="text" Name="Product8"  maxlength="30" size="20"  />
		
		<input id="max_id" type="hidden" name="MAX_FILE_SIZE" value="200000" />
		
		<input onchange="upload_check()" id="file_id" type="file" name="choosefile8" accept="image/*" />
			</td>
	
	</tr>

		<tr>
			
			<td>
				09:

					<select name="Type9"/>
				
				<option selected hidden value ="Did no select">Please select</option>
				<option value="Vegetable">Vegetable</option>
				<option value="Fruit">Fruit</option>
				<option value="Other Product">Other</option>
				
			</select>
			
				<input type="text" Name="Product9"  maxlength="30" size="20"  />
		
		<input id="max_id" type="hidden" name="MAX_FILE_SIZE" value="200000" />
		
		<input onchange="upload_check()" id="file_id" type="file" name="choosefile9" accept="image/*" />
			</td>
	</tr>

		<tr>
			
			<td>
				10:

					<select name="Type10"/>
				
				<option selected hidden value ="Did no select">Please select</option>
				<option value="Vegetable">Vegetable</option>
				<option value="Fruit">Fruit</option>
				<option value="Other Product">Other</option>
				
			</select>

			<input type="text" Name="Product10"  maxlength="30" size="20"  />
		
		<input id="max_id" type="hidden" name="MAX_FILE_SIZE" value="200000" />
		
		<input onchange="upload_check()" id="file_id" type="file" name="choosefile10" accept="image/*" />
			</td>
	</tr>

<tr><td></td></tr></tr>
<tr><td></td></tr></tr>
<tr><td></td></tr></tr>
	<tr>
	
		<td align='center'>
			
			<input type="Submit" name="Submit"  value="Submit" id="two"/>
			<button type="reset" onClick="this.form.reset()" id="three">Reset</button>
			
		</td>	
	
	</tr>

</table>

<br></br>

<br></br>
<br></br>

<?php 

	} else { echo '<script> alert  ("You had been logout.\nPlease login again.\nGoing to main page in 5 seconds.\nIf you need register, Please click on the regiser button")</script>';
				header("refresh:0; url=http://localhost/Old/MainPage/mainpage.php.");

	}
	
?>