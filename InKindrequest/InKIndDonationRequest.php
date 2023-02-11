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




  } else { echo '<script> alert  ("You had been logout.\nPlease login again.\nGoing to main page in 5 seconds.\nIf you need register, Please click on the regiser button")</script>';
        header("refresh:0; url=http://localhost/OldFolkHome/MainPage/Mainpage.php");

  }

?>

<html>

	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 

<head>

	<title> Old Folk Home Web-based System </title>

</head> 

<link rel="stylesheet" href="http://localhost/OldFolkHome/InKindrequest/Inkindonation.css">

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


function upload_check()
{
    var upl = document.getElementById("file_id");
    var max = document.getElementById("max_id").value;

    if(upl.files[0].size > max)
    {
       alert("File too big!");
       upl.value = "";
    }
};


</script>


<?php 


$sql = "SELECT * FROM register WHERE LoginName = '" . $_SESSION['username'] . "'";
$rs = mysqli_query($con, $sql);

while ($row = $rs->fetch_assoc()) {

  $UserID=$row ["UserID"];
  $UserName = $row["UserName"];
  $LoginName = $row["LoginName"];
  $Nationality = $row["Nationality"];
  $Phonecode = $row["Phonecode"];
  $Phone = $row["Phone"]; 
  $Email = $row["Email"];
  $Address = $row["Address"];
  $Postcode = $row["Postcode"];
 
  }

?>

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
					
					<input type='Submit' name='action' value='Logout'/></a>
					
					</td>
					
					<td>

					<input type="Submit" name="Submit1" value="Edit" id="three" onclick="window.location.href='http://localhost/OldFolkHome/editDetails/editDetails.php'"/>
					
					</td>

				</tr>
				
			</table>
			
		</div>
		
	<p> &nbsp </P>

<?php } ?>

<?php 

if(isset($_SESSION['username'])) { ?>

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
  
  <button class="dropbtn1">Additinal Function</button>

<div class="dropdown-content1">

  <a href="http://localhost/OldFolkHome/InKindrequest/InKIndDonationRequest.php">In-Kind Donation</a></li>
  <a href="http://localhost/OldFolkHome/Admin/ChecInkindDonationRecord/CheckInKindDonationRecord.php">In-Kind Donation Record</a>
  <a href="http://localhost/OldFolkHome/AnnualReport/ViewAnnualReport/ViewAnnualReport.php">View Annual Report</a></li>
  
</div>

</div>

<br></br>

<br></br>

<form action="http://localhost/OldFolkHome/Admin/ChecInkindDonationRecord/InKIndRequestBackend.php" method="POST" enctype="multipart/form-data">

<table class="columnA">

  <tr>
  
    <td colspan= 2 >
       
       <h2 style="text-align:center">In-Kind Donation Form</h2>
       
    </td>
  
  </tr>

  <tr>

    <td>
      
      <input type="hidden" name="UserID" value ="<?php echo $UserID;?>">

    </td>



  </tr>
  
  <tr>
  
    <td>
        
        Name :
    
    </td>
    
    <td>
      
      <input type="text" name="UserName" maxLength = "50" value="<?php echo $UserName; ?>"readonly="UserName">
    
    </td>
    
  </tr>
  
  <tr>
    
    <td>
      
      <input type="hidden" id="loginName1" name="LoginName" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{5,}" maxlength="10" size="10" readonly="LoginName" required  value=<?php echo $LoginName; ?>>
    
    </td>
    
  </tr> 

   <tr>
    
    
    <td>
      
      <input type="hidden" name="Status" value="Pending">

    </td>
    
  </tr> 

<tr>
    
    <td id="email1">
    
        Email:
        
    </td>
    
    <td>
    
    <input type="email" id="Email" name="Email" maxLength = "42" size="40" value="<?php echo $Email; ?>" 
    required pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$">
    
    </td>
  
  </tr>

<tr>
  
  <td>
  
  Product Type
  
  </td>
  
  <td>
    
    <select name="ProductType" required>
      
      <option value ="">Select</option>
      <option value="Cleaning Product">Cleaning Product</option>
      <option value="Funiture">Funiture</option>
      <option value="Funiture">Cloth & Elder Diapers</option>
      <option value="Funiture">wheelchair</option> 
      <option value="Funiture">Other</option> 

    </select>
  
  </td>
    
</tr>

  <tr><td>
  
    <label for="img">Upload Photo:</label></td><td>  
    
    <input id="max_id" type="hidden" name="MAX_FILE_SIZE" value="200000" />
    
    <input onchange="upload_check()" id="file_id" type="file" name="choosefile" accept="image/*" />
  
    </td>
    
  </tr>

<tr>
  
  <td>
      
      Remarks:
    
    </td>
      
    <td>

      <textarea rows="5" name="Remarks" 
      maxlength="153" style="overflow:hidden"
      wrap='hard'cols="30"
                  required></textarea>
    
    </td>
  
  </tr>


<tr>
  
  <td id="Nationality">
  
  Nationality
  
  </td>
  
  <td>
    
    <select id="country" onchange="selectCountry()" name="Nationality">
      
      <option selected hidden value ="Follow Registration Form"><?php echo $Nationality; ?></option>
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
    
    <input id="phoneCode1" style="width:33px;"  name="Phonecode" value="+<?php echo $Phonecode; ?>" >
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
                  required><?php echo $Address?> </textarea>
    
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

<tr></td></td></tr>
<tr></td></td></tr>

<tr><td colspan="2">Dear Donors, Please put in the remarks for the in-kind product you would like to donate. </td></tr>


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



</body>

</html>

<?php 
  
  } else 

    { echo '<script> alert  ("You had been logout.\nPlease login again.\nGoing to main page in 5 seconds.\nIf you need help, Please call the IT admin")</script>';
        
        header("refresh:0; url=http://localhost/OldFolkHome/MainPage/mainpage.php");
        
  }
?>


