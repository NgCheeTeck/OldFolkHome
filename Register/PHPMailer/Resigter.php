<html>

<head>

	<title>Register Form</title>
	
</head>

<script src="JScriptforRegister.js"> 

</script>

<style>

	<?php include 'Register.css'; ?>
	
</style>

<body onload=display_ct(); >

<form action="http://localhost/OldFolkHome/Register/RegisterBackend.php" method="POST">
	
<table class="center" id="Form" >
	
	<tr>
		<td colspan= 2 id= "title">
		    
			<H1>Welcome To Happy Old Folk Home Register Page</H1>
			
		</td>
		
	</tr>
	
	<tr>
	
		<td></td>
		
		<td>
		
			<p type ="text" id='ct' name="ct"/>

		</td>
		
	</tr>

	<tr>
		
		<td id="Name">
		
			Name :
			
		</td>
		
		<td>
			
			<input type="text" name="Uname" id="Uname" input type="text" 
			onkeypress='return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || (event.charCode == 32))'required >
			
		</td>
		
	</tr>

	
	<input type="hidden"  name="Member" id="Member" value="Member"> </input> 
				
	<tr>
		
		<td id="LoginName">
				
				User Name :
		</td>
		
		<td>
		
			<input type="text" id="Lname" name="Lname" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{5,}" required >
			
		</td>
		
	</tr>
	
	<tr>
		
 	<td id="Password">
		
				Password :
				
		</td>
		
		<td>
		
			<input type="password" id="myInput" placeholder="Password" name="Password" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$"  
			onselectstart="return false" oncut="return false"oncopy="return false" onpaste="return false" ondrag="return false" ondrop="return false" required>
				  
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
			
			<input type="password" id="myInput1" placeholder="Password" 
			pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$" 
			onselectstart="return false" oncut="return false"oncopy="return false" onpaste="return false" ondrag="return false"
			ondrop="return false" onfocusout="validatePasswords()" required > 	

		</td>
		
	</tr>
	
	<tr>
		
		<td>
		
		</td>
		
		<td>
            
			<input type="checkbox" onclick="myFunction1()"/><label style="font-size: 18px; color:#000000"/>Unhide password
				
		</td>
	
	</tr>
	
	<tr>
		
		<td></td>
	
	</tr>
		
	</tr>
	
	<tr>
		
		<td></td>
	
	</tr> 
	
	<tr>
	
		<td id="Gender">
				
				Gender :
		
		</td>
			
		<td>
		
			<input type="radio" name="Gender" value="Male" required /> <label style="font-size: 19px; color: #000000">Male</label> 
			
			<input type="radio" name="Gender" value="Female" required /> <label style="font-size: 19px;color: #000000">Female </label>
			
		</td>
		
	</tr>
		
 	<tr id="Age1">
	
		<td>
			
			<label for="birthday">Date Of Birth:</label>
		
		</td>
		
		<td>
		
			<input type="date" id="DOB" name="DOB" required />
	
			<button type="button" onclick = "ageCalculator()" id = "message" > Calculate age </button> 
			
		</td>
		
	</tr>
	
	<tr> 
		
 		<td id="Age">
		
				Age :
		
		</td> 

		<td>
		
		<textarea  id="result"name="Age" required onkeypress="return false;"></textarea>
		

		</td>
			
	</tr>

 <tr>
		
	<td id="Nationality">
		
			Nationality
		
		</td>
		
		<td>
		
			<select id="country" onchange="selectCountry()" name="Nationality">
				<option selected hidden value ="">Nationality</option>
				<option value="Malaysia">Malaysia</option>
				<option value="Singapore">Singapore</option>
			</select>
			
		</td>
		
		</tr>
		
		<tr>
			
		<td id="Phone">
				
				Phone:

			</td>
			
			<td>
			
				<input id="phoneCode1" style="width:32px" name="Phonecode" readonly="phoneCode1"></input>

				<input type ="Phone"id="phoneMaxLength1" placeholder="" name="Phone" maxlength=8 oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" required pattern="[0-9]{8,9}"></input>
			
			</td>
			
		</tr>
		
		<tr>
			
			<td></td>
			
		</tr> 
		
		<tr> 
		
			<td id="email1">
				
				Email:
				
			</td>
			
			<td>
			
			<input type="email" id="Email" name="Email" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" required>
			
			</td>
		
		</tr> 
		
		<tr>
		
		<td id="add">
			
			Address:
		
		</td>
			
		<td>

			<textarea rows="7" id="address"name="Address" 
			maxlength="73" style="overflow:hidden"
			wrap='hard'cols="50"
                  required></textarea>
		
		</td>
		
		</tr>
		
		<tr>
		
			<td id="postcode1">
			
				Postcode
				
			</td>
			
			<td>
				
				<input type="text" id="Postcode" name="Postcode" maxLength="6" pattern=".{5,6}" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" required placeholder="79XXX">
			
			</td>
			
		</tr>


			<td id="Newupdate">
		
				Received news:
				
			<td>
			
				<input type="radio" name="Newupdate" value="Yes" required /> <label style="font-size: 20px; color: #000000">Yes</label> 
				
				<input type="radio" name="Newupdate" value="No" required /> <label style="font-size: 20px; color: #000000">No </label>
				
			</td>
			
			</td>  
			
		</tr> 

		<tr><td>&nbsp</td></tr>
 
	    <tr>
			
			<td>
			
			</td> 
			
			<td>
				
				<input type="Submit" name="Submit"  value="Submit" id="three"></input>
				
				<input type="reset" onClick="this.form.reset()" id="three"></input>
			
			</td>
			
		</tr>
		
		<tr>

		<tr><td>&nbsp</td></tr>

		<td colspan=2 id="postcode1">
			
			<p>Already Have Account:Yes?<a href="http://localhost/OldFolkHome/MainPage/mainpage.php"> >Back Main Page To Login</a></p>
			
	
		</td>
		
		</tr>
		
		<tr><td>&nbsp;

		</td></tr>

		<tr>
			
			<td colspan= 2 >
			
			<h4 id="remarks"> Remarks:<h4/>
			
			</td>
		
		</tr>
		
		<tr>
			
			<td colspan= 2 >
			
			<h4 id="remarks"> User Name must contain at least one number and one uppercase and lowercase letter, and at least 5 or characters with no spacing" required <h4/>
			
			</td>
			
		</tr>
		
		<tr>
			
			<td colspan= 2 >
			
			<h4 id="remarks"> Password must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters with no spacing" required<h4/>
			
			</td>
		
		</tr>
		
	</table>

</form>

</body>

</html>