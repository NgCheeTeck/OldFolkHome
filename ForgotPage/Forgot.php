<html>

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<head>
	
	<title>Happy Old Folk Home</title>

</head>

<style>
	
	<?php include 'Forgot.css'; ?>
	
</style>

<body>

	<p> &nbsp </P>
	
	<h1> Welcome To Happy Old Folk Home </h1>

	<div class="pleaseLogin">
	
	
	
	<table>
			<tr>
			
				<td colspan="2">
				
					<p style="font-size :1.1vw;color:#A52A2A;">Process to login or register to the system</p>			
			
				</td>
			
				<td>
					
					<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>
			
				</td>

				<td>
				
					<a href ="http://localhost/OldFolkHome/Register/Resigter.php"><button style="width:auto;">Register</button></a>
				
			
				</td>
		
			</tr>
			
	</table>
	
</div>


<div id="id01" class="modal">
  
  <form class="modal-content animate" action="http://localhost/OldFolkHome/Login/DoLogin.php" method="post">
  
    <div class="imgcontainer">
	
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
	  
      <img src="img_avatar2.png" alt="Avatar" class="avatar" height='180' width='180' >
	  
    </div>

    <div class="container">
	
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="UserName" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="Password" required>
        
      <button type="submit">Login</button>
	  <button type="reset" onClick="this.form.reset()" id="three">Reset</button>
	  
    </div>

    <div class="container" style="background-color:#f1f1f1">
	
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
	  
      <span class="psw">Forgot <a href="http://localhost/OldFolkHome/ForgotPage/Forgot.php">password?</a></span>
	  
    </div>
  </form>
</div>

	
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
		
		<li><a href="http://localhost/OldFolkHome/DonationFood/DonationFood.php">Weekly Needed Food</a></li>
		
	</ul>
	
</div>

<div class="topnav1">

    <ul id="mainMenu">
		
		<li><a href="http://localhost/OldFolkHome/DonationFood/DonationFood.php">Annual Report</a></li>
		
	</ul>
	
</div>
 
<form action="http://localhost/OldFolkHome/ForgotPage/Reset.php" method="Post">

  <div class="Reset">
	<br></br>
      <p>Enter registered email address to process reset password</p>

		<input type="text" name="Email" maxlength="35"  size="35"  id="email" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$"required></input>
        
		<br></br>
		
		<input type="submit" name="submit" value="Submit" style="height:25px; width:70px" id="three"  >
	
		<input type="reset" name="reset" value="Reset" style="height:25px; width:70px" >
    
		<br></br>
		
	
	</div>  
	  
</form>



</body>

</html>



