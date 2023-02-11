<?php 

session_start();

	$con = mysqli_connect('127.0.0.1','root','');
	
	if(!$con)
	{
		echo 'Not Connected To Server'; 
	}
	
	if (!mysqli_select_db($con,'oldfolkhome'))
	{
		echo 'Database Not Selected';
		
	}


$Submit= $_POST['Submit'];
$PaymentMethod=$_POST['PaymentMethod'];
$Purpose=$_POST['Purpose'];
$Amount1 = $_POST['Amount'];
$Name=$_POST['Name'];
$Email=$_POST['Email'];
$Nationality=$_POST['Nationality'];

if ($Submit and $PaymentMethod=="Online Banking"){

	echo '<script>alert("Dear donor, the system will link you to an online banking page.")</script>';
	header("refresh:0; url= https://www.maybank2u.com.my/home/m2u/common/login.do");
	exit();
}

else if ($Submit and $PaymentMethod=="Online Banking Public Bank") {
	echo '<script>alert("Dear donor, the system will link you to an online banking page.")</script>';
	header("refresh:0; url= https://www2.pbebank.com/myIBK/apppbb/servlet/BxxxServlet?RDOName=BxxxAuth&MethodName=login");
	exit();

} 

else if ($Submit and $PaymentMethod=="Touch N Go"){

	echo '<script>alert("Dear donor, the system will link you to touch n go page.")</script>';
	header("refresh:0; url= https://tngportal.touchngo.com.my/#login");
	exit();

} else {

	echo '<script>alert("Dear donor, the system will link you to card payment page.")</script>';

}


if ($Submit and $Nationality=='Nationality')

{

echo '<script>alert("Dear donor, you have not selected a country.")</script>';

header("refresh:0; url= http://localhost/OldFolkHome/DonationMoney/DonationTo.php");

exit();


}

else if ($Submit and $Nationality =='Singapore'||'Malaysia') {



} 


?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script><script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script><script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js">

</script>

<script>

$(document).ready(function(){
//For Card Number formatted input
var cardNum = document.getElementById('cr_no');
cardNum.onkeyup = function (e) {
if (this.value == this.lastValue) return;
var caretPosition = this.selectionStart;
var sanitizedValue = this.value.replace(/[^0-9]/gi, '');
var parts = [];
for (var i = 0, len = sanitizedValue.length; i < len; i +=4) { parts.push(sanitizedValue.substring(i, i + 4)); } for (var i=caretPosition - 1; i>= 0; i--) {
var c = this.value[i];
if (c < '0' || c> '9') {
caretPosition--;
}
}
caretPosition += Math.floor(caretPosition / 4);
this.value = this.lastValue = parts.join(' ');
this.selectionStart = this.selectionEnd = caretPosition;
}

caretPosition += Math.floor(caretPosition / 2);
this.value = this.lastValue = parts.join('/');
this.selectionStart = this.selectionEnd = caretPosition;
}
);

</script>

<!DOCTYPE html>

<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>

body {
  font-family: Arial;
  font-size: 17px;
  padding: 8px;
  width: 1000px; 
   margin-left: 220px;
}


* {
  box-sizing: border-box;
}

.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 30%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}



.col-75 {
  padding: 0 120px;
}

.col-50{
  padding: 0 16px;
}

.col-25 {
  padding: 0 106px;
}


.container {
  background-color: #f2f2f2;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
}

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: #04AA6D;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
    text-align: center;
}

.btn:hover {
  background-color: #45a049;
}

a {
  color: #2196F3;
}

hr {
  border: 1px solid lightgrey;
}

span.price {
  float: right;
  color: grey;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}


#fname,
#email,
#cname,
#cr_no,
#Donation,
#expmonth{

	font-size: 15px;
}

option{ font-size:17px; }

select{ font-size:16px; }


</style>

</head>

<?php 
    
    if(isset($_SESSION['username'])) { ?>

<body>

<br></br>

<div class="main">

<div class="row">

	<div class="col-75">
	
		<div class="container">
			
			<form action="http://localhost/OldFolkHome/DonationMoney/BankPayment.php" method="post">
      
				<div class="row">
				
				<div class="col-50">
				
				<h3>Billing Address</h3>
				
					<label for="fname"><i class="fa fa-user"></i> Full Name</label>
					<input type="text" id="fname" name="firstname" placeholder="Jack NCT" value="<?php echo $Name;?>"required>
					  
					<label for="email"><i class="fa fa-envelope" ></i> Email</label>
				
					<input type="text" id="email" name="email" value="<?php echo $Email;?>"></required>
					
					<label for="Donation"></i> Donation</label>
				
					<input type="text" id="Donation" readonly name="Donation" value="<?php echo $Purpose;?>"></required>
				
				<div class="col-25">
    
				<div class="container">
        
      <hr>
	  
	  <input type="hidden" id="Amount" name="Amount" value="<?php echo $Amount1;?>"required>
		
		<p>Total <span style="color:black" name="Amount"><b>Rm:<?php echo $Amount1;?></b></span></p>
				
				</div>
				
				</div>
  
				</div>

        <div class="col-50">
		
          <h3>Payment</h3>
		  
			<label for="fname">Accepted Cards</label>
            
			<div class="icon-container">
              
			  <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
             
         </div>
		 
            <label for="cname">Name on Card</label>
			
            <input type="text" id="cname" name="cardname" value="<?php echo$Name;?>" required onkeypress='return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || (event.charCode == 32))'>
			
            <label for="ccnum">Credit card number</label>

			<input type="text" name="cardnumber" placeholder="0000 0000 0000 0000" size="18" id="cr_no" minlength="19" maxlength="19" required>
			
            <label for="expmonth">Exp Month : 
			
<select id="Month">

  	<option value=''>--Select Month--</option>
    <option selected value='1'>Janaury</option>
    <option value='2'>February</option>
    <option value='3'>March</option>
    <option value='4'>April</option>
    <option value='5'>May</option>
    <option value='6'>June</option>
    <option value='7'>July</option>
    <option value='8'>August</option>
    <option value='9'>September</option>
    <option value='10'>October</option>
    <option value='11'>November</option>
    <option value='12'>December</option>

</select></label>


         <div class="row">
		 
         <div class="col-50">
		 
            <label for="expyear">Exp Year</label>
            
			<input type="text" id="expyear" name="expyear" placeholder="2026" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" 
			
			required  maxlength="4" pattern="[0-9]{4}">
         
		 </div>
          
		 <div class="col-50">
		 
             <label for="cvv">CVV</label>
			 
             <input type="text" id="cvv" name="cvv" placeholder="352" maxlength="3"
			 oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" 
			 pattern="[0-9]{3}"
			 required>
			 
              </div>
            </div>

          </div>
          
        </div>
      
        <input type="submit" value="Continue to checkout" class="btn"  name="submit">
		<a href='http://localhost/OldFolkHome/DonationMoney/DonationTo.php'/><input type="Cancel" value="Cancel to payment"  class="btn"></a></input>
		 
      </form>
    </div>
  </div>

</div>

<?php } else { ?>

<br></br>

<br></br>

<div class="main">

<div class="row">

	<div class="col-75">
	
		<div class="container">
			
			<form action="http://localhost/OldFolkHome/DonationMoney/BankPayment.php" method="post">
      
				<div class="row">
				
				<div class="col-50">
				
				<h3>Billing Address</h3>
				
					<label for="fname"><i class="fa fa-user"></i> Full Name</label>
					<input type="text" id="fname" name="firstname" value="<?php echo$Name;?>">
					  
					<label for="email"><i class="fa fa-envelope" ></i> Email</label>
				
					<input type="text" id="email" name="email" value="<?php echo$Email;?>"> </required>
					
					<label for="Donation"></i> Donation To:</label>
				
					<input type="text" id="Donation" readonly name="Donation" value="<?php echo$Purpose;?>"></required>
				
				<div class="col-25">
    
				<div class="container">
        
      <hr>
	  
	  <input type="hidden" id="Amount" name="Amount" required value="<?php echo $Amount1;?>">
		
		<p>Total <span name="Amount" style="color:black"><b>Rm:<?php echo $Amount1;?></b></span></p>
				
				</div>
				
				</div>
  
				</div>

        <div class="col-50">
		
          <h3>Payment</h3>
		  
			<label for="fname">Accepted Cards</label>
            
			<div class="icon-container">
              
			  <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
			 
         </div>
		 
            <label for="cname">Name on Card</label>
			
            <input type="text" id="cname" name="cardname" value="" required onkeypress='return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || (event.charCode == 32))'>
			
            <label for="ccnum">Credit card number</label>
			
			<input type="text" name="cardnumber" placeholder="0000 0000 0000 0000" size="18" id="cr_no" minlength="19" maxlength="19" required>
			
            <label for="expmonth">Exp Month : 
			
<select id="Month">

  	<option value=''>--Select Month--</option>
    <option selected value='1'>Janaury</option>
    <option value='2'>February</option>
    <option value='3'>March</option>
    <option value='4'>April</option>
    <option value='5'>May</option>
    <option value='6'>June</option>
    <option value='7'>July</option>
    <option value='8'>August</option>
    <option value='9'>September</option>
    <option value='10'>October</option>
    <option value='11'>November</option>
    <option value='12'>December</option>

</select></label>

         <div class="row">
		 
         <div class="col-50">
		 
            <label for="expyear">Exp Year</label>
            
			<input type="text" id="expyear" name="expyear" placeholder="2026" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" 
			
			required  maxlength="4" pattern="[0-9]{4}">
         
		 </div>
          
		 <div class="col-50">
		 
             <label for="cvv">CVV</label>
			 
             <input type="text" id="cvv" name="cvv" placeholder="352" maxlength="3"
			 oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" 
			 pattern="[0-9]{3}"
			 required>
			 
              </div>
            </div>

          </div>
          
        </div>
      
        <input type="submit" name="submit" value="Continue to checkout" class="btn"  >
		<a href='http://localhost/OldFolkHome/DonationMoney/DonationTo.php'/><input type="Cancel" value="Cancel to payment"  class="btn"></a></input>
		 
      </form>
    </div>
  </div>

</div>


<?php }?>






</body>
</html>