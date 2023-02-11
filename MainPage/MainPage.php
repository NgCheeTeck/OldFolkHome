<?php session_start(); ?>

<html>

	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 

<head>

	<title> Old Folk Home Web-based System </title>
	<link rel="stylesheet" href="Mainpage.css">


</head> 


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>


div.pleaseLogin{ 

  position:relative;
  width:25%;
  left:830px;
  top:-10px;
  border:1px solid;
  background:#ffdfd3;

}

div.loginAlready{

  position:relative;
  width:20%;
  left: 870px;
  top:25px;
  border:1px solid;
  background:#ffdfd3;

}

.fa {
    padding: 15px;
    font-size: 30px;
    width: 30px;
    text-align: center;
    text-decoration: none;
    margin: 5px 2px;
  }

  .fa:hover {
    opacity: 0.7;
  }

  .fa-facebook {
    background: #3B5998;
    color: white;
    
  }

  .fa-twitter {
    background: #55ACEE;
    color: white;
  }

  .fa-google {
    background: #dd4b39;
    color: white;
  }

  .fa-linkedin {
    background: #007bb5;
    color: white;
  }

  .fa-youtube {
    background: #bb0000;
    color: white;
  }

  .fa-instagram {
    background: #125688;
    color: white;
  }

  .fa-pinterest {
    background: #cb2027;
    color: white;
  }

  .fa-snapchat-ghost {
    background: #fffc00;
    color: white;
    text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;
  }

  .fa-skype {
    background: #00aff0;
    color: white;
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
	 bottom: 12px;
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
  bottom: -4px;
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
	 bottom: 15px;
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

<body>

	<p> &nbsp </P>
	
	<p> &nbsp </P>

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

<?php if(isset($_SESSION['username'])) { ?>

<div class= "Mediumnav1">

<br></br>
<h2 style="font-size :1.8vw;">Welcome Join Happy Old Folk Home</h2>
	
	<p style="font-size :1.1vw;">
	
	Dear <?php echo ($_SESSION['username'])?>,	
	We are glad to welcome you to our community, as our donors or volunteers.<br><br>
	We really thank you for choosing us and we all welcome you to our organization(Happy Old Folk Home).
	<br></br>
	
	<p> Follow us via below social media </p>
	
	<p id="social media">
	
	<a href="https://www.facebook.com/" class="fa fa-facebook"></a>
	<a href="https://twitter.com/?lang=en" class="fa fa-twitter"></a>
	<a href="https://www.google.com.sg/" class="fa fa-google"></a>
	<a href="https://www.linkedin.com/" class="fa fa-linkedin"></a>
	<a href="https://www.youtube.com/?feature=youtu.be" class="fa fa-youtube"></a>
	<a href="https://www.instagram.com/" class="fa fa-instagram"></a>
	
	</p>
<br></br>		
</div>

<?php } else {?>

<div class= "Mediumnav">

<h2 style="font-size :1.8vw;"> Welcome to Happy Old Folk Home </h2>
	
	<p>
	
	Happy Old Folk Home is not simply a place for its residents to exist.

	We strive to make sure that every resident feels respected, listening and healthy. 
	
	We encourage residents to keep in touch with their existing community, family and friends, and explore new connections with other residents, local partners and build new interests or hobbies.

	Founded in 1990, Happy Old Folk Home is an established voluntary welfare organization that provides integrated nursing home care and services to the elderly. 

	Maintaining a " family " feeling, and our employees work tirelessly to meet the individual needs of every resident and ensure that they receive all the care and attention they want. 
	
	</p>

	<h2 style="font-size :1.8vw;"> Our Philosophical Values </h2>

	Our first priority while sending our care services depends on our values–TRUTH, RIGHT CONDUCT, PEACE, LOVE and NON-VIOLENCE to meet the desire standards in the hearts and minds of our residents. 

	Our firmest belief is that everyone's needs are unique, and we strive to provide care and support to meet the needs of residents at every stage. 

	To provide welfare and care for those who need it the most. 
	
	Daily mission performed by dedicated volunteers and loving staff. 
	
	
	
	<p> Follow us via below social media </p>
	
	<p id="social media">
	
	<a href="https://www.facebook.com/" class="fa fa-facebook"></a>
	<a href="https://twitter.com/?lang=en" class="fa fa-twitter"></a>
	<a href="https://www.google.com.sg/" class="fa fa-google"></a>
	<a href="https://www.linkedin.com/" class="fa fa-linkedin"></a>
	<a href="https://www.youtube.com/?feature=youtu.be" class="fa fa-youtube"></a>
	<a href="https://www.instagram.com/" class="fa fa-instagram"></a>
	
	</p>

</div>

<?php } ?>

<?php if(isset($_SESSION['username'])) { ?>



<div class="fixe">

	<p align="center">Copyright 2023 © Happy Old Age Home Web Design by Jack Ng</p>

</div>

<?php } else { ?>

<br></br>
<br></br>

<div class="fixed">

	<p align="center">Copyright 2023 © Happy Old Age Home Web Design by Jack Ng</p>

</div>

<?php }?>

</body>

</html>



