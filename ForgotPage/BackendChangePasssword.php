<?php

    $con = mysqli_connect('127.0.0.1','root','');
    
    if(!$con)
    {
        echo 'Not Connected To Server'; 
    }
    
    if (!mysqli_select_db($con,'OldFolkHomeProject'))
    {
        echo 'Database Not Selected';
        
    }

if (isset($_POST["Submit"])){
   
   $Password=$_POST["Password"];
   $Email= $_POST["Email"];
   $Code= $_POST["Code"];

   $sql="UPDATE register SET Password ='$Password' WHERE Email='$Email'";
   $query= mysqli_query($con, $sql);
   
if ($query) {

    $sql1="DELETE FROM reset WHERE Code='$Code'";
    $query2= mysqli_query($con, $sql1);
   

    echo '<script> alert  ("Password updated - '.$Password. 
      '\nPlease process to login")</script>';
    header("refresh:0; url=http://localhost/OldFolkHome/MainPage/MainPage.php");
    
	exit ;

}  
  
else {
	
    exit ("Something went wrong");
    ;
	
}

}

?>