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

	if(isset($_SESSION['username'])) { 


	} else { echo '<script> alert  ("You had been logout.\nPlease login again.\nGoing to main page in 5 seconds.\nIf you need register, Please click on the regiser button")</script>';
				header("refresh:0; url=http://localhost/OldFolkHome/MainPage/Mainpage.php");

		exit();

	} 

$Year=date("Y"); 


$sql1=" SELECT *, SUM(Amount) AS Amount From donation where Year=$Year";
$rs = mysqli_query($con, $sql1);

while ($row = $rs->fetch_assoc()) {

	$Amount = $row["Amount"];

}

$Year2=date("Y"); 

$newDate = date('Y', strtotime($Year2. ' - 1 years'));



$sql11="SELECT * From AnnualReport where Year=$newDate";
$rs1 = mysqli_query($con, $sql11);

while ($row = $rs1->fetch_assoc()) {

	$ProfitLose = $row["ProfitLose"];


}


$Year3=date("Y"); 


$sql11="SELECT * From AnnualReport where Year=$Year3";
$rs2 = mysqli_query($con, $sql11);

while ($row = $rs2->fetch_assoc()) {

	$ProfitLose1 = $row["ProfitLose"];


}
	
?>
	

<script>
      
    // Here the value is stored in new variable x 
    function myFunction1() {

    var x = document.getElementById("myText").value;
    
    var i = Number (x);

	var y = <?php echo $Amount; ?>;

	var k = <?php echo $ProfitLose1?>

	document.getElementById("Expenses").innerHTML = y - i + k;

    }

     // Here the value is stored in new variable x 
    function myFunction() {

    var x = document.getElementById("myText").value;
    
    var i = Number (x);

    var a = document.getElementById("myText1").value;

    var j = Number (a);

    var b = document.getElementById("myText2").value;

    var k = Number (b);

	var y = <?php echo $Amount; ?>;

	var b = <?php echo $ProfitLose; ?>;

	document.getElementById("demo").innerHTML = y - i - j - k + b;

	document.getElementById("Expenses").innerHTML = i + j + k;

    }


    </script>

<html>

<head>

  <Title> Welcome To Happy Old Folk Home </Title>
  
</head>

<style>

<?php include 'UpdateAnnualReport.css'; ?>

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

	<form method="post"  action="http://localhost/OldFolkHome/AnnualReport/UpdateAnnualReportBackend.php" enctype="multipart/form-data">
	
		<tr>
			
			<td style= "text-align: center" colspan="2"> <h2>Update Annual Report</h2></td>

		</tr>


	<tr>
		
		<td>
		
				Year :
				
		</td>
		
		<td>
		
			<input type="text" pattern="[0-9]+" maxlength="5" size="5" required  readonly="Year" name="Year" value=<?php echo $Year3; ?>>
		
			
		</td>
	
	</tr>


	<tr><td></td></tr></tr>

	<tr>
	
		<td>
		
				Funeral Expense : RM
		</td>
		
		<td>
   
     <input type="text" id="myText" pattern="[0-9]+" maxlength="5" size="5"  id="subject"
			required  class="form-control" name="Funeral">
  
  	</td>
	
	</tr>

	<tr>
		
		<td>
   
     <input type="hidden" name="Submit" value="Submit">
  
  	</td>
	
	</tr>

	<tr><td></td></tr></tr>

		<tr>
	
		<td>
		
				Medical Expense : RM
		</td>

		
		<td>
   
    <input type="text" id="myText1" pattern="[0-9]+" maxlength="5" size="5"  id="subject"
			required  class="form-control" name="Medical">
  
  	</td>
	
	</tr>

	<tr><td></td></tr></tr>

			<tr>
	
		<td>
		
				Daily Expenses : RM
		</td>
		
		<td>
   
     <input type="text" id="myText2" pattern="[0-9]+" maxlength="5" size="5"  id="subject"
			required  class="form-control" name="Daily">
  
  	</td>
	
	</tr>

	
	<tr><td></td></tr></tr>

	<tr>
	
		<td>
		
				Total Expenses : RM
		</td>
		
		<td>
		
			<textarea onkeydown="event.preventDefault()" rows="1" cols="4" id="Expenses" name="Expenses" required></textarea>
	
		
		</td>
	
	</tr>

	<tr>

		<td></td>

		<td><button type="button" onclick="myFunction()">Enter expense amount</button></td></tr>

	<tr><td></td></tr></tr>

	<tr>
	
		<td>
		
			 Income (For This Year)  : RM

		</td>
		
		<td>
		
			<input type="text" pattern="[0-9]+" maxlength="6" size="6" required  readonly="Income" name="Income" value=<?php echo $Amount; ?>>
		
		</td>
	
	</tr>

	<tr><td></td></tr></tr>

		<tr>
	
		<td>
		
			Balance Forward  : RM

		</td>
		
		<td>
		
			<input type="text" pattern="[0-9]+" maxlength="6" size="6" required  readonly="Profit" name="Profit" value=<?php echo $ProfitLose ; ?>>
		
		</td>
	
	</tr>

	<tr><td></td></tr></tr>

	<tr>
	
		<td>
		
				Gross Profit/Loss : RM
		</td>
		
		<td>

			<textarea onkeydown="event.preventDefault()" rows="1" cols="4 " id="demo" name="Profit" required></textarea>
	
		
		</td>
	
	</tr>

	<tr><td></td></tr></tr>
		
		<tr><td>
	
		<label for="img">Upload PDF/Photo report : </label></td><td>  
		
		<input id="max_id" type="hidden" name="MAX_FILE_SIZE" value="200000" />
		
		<input onchange="upload_check()" id="file_id" type="file" name="choosefile" accept="image/*,application/pdf" />
 	
		</td>
		
	</tr>

		<tr>
		
		<td></td>
	
	</tr>
	

	<tr>
		
		<td style= "text-align: center" colspan="2" >Remarks:Please click enter on the "Enter expense amount" button, after changing the expense amount</td>
	
	</tr>
	
	<tr>
		
		<td></td>
	
	</tr>
	
	<tr>
		
		<td></td>

		<td>
			
			<input type="Submit" name="Submit"  value="Submit" id="two"/>
			<button type="reset" onClick="this.form.reset()" id="three">Reset</button>
			
		</td>	
	
	</tr>



	
</form>

</table>

<p></p>
					
</div>





<?php }?>




