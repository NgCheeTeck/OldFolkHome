<?php 
	
session_start();

	$con = mysqli_connect('127.0.0.1','root','');
	
	if(!$con)
	{
		echo 'Not Connected To Server'; 
	}
	
	if (!mysqli_select_db($con,'OldFolkHomeProject'))
	{
		echo 'Database Not Selected';
		
	}


if(isset($_SESSION['username']))
{	

	$Submit=$_POST['Submit'];
	$Year=$_POST['Year'];

$check="SELECT * FROM AnnualReport";
$rs = mysqli_query($con,$check);

$sql2 = "SELECT COUNT(1) FROM AnnualReport"; // counting actual number of row 
$rs2 = mysqli_query($con, $sql2);
$row2 = mysqli_fetch_array($rs2);

$rowTaken = 1; 
$totalRow = $row2[0];

while($row = $rs->fetch_assoc()) {	

	if(($Submit==$row["Submit"])&&($Year==$row["Year"])) {

    echo '<script> alert ("Hi Admin,'.$Year.' yearly report have submitted before.\nGoing back to previous page in 5seconds.") </script>';
		header("refresh:0; url=http://localhost/OldFolkHome/AnnualReport/UpdateAnnualReport.php"); 

    break;

} else {

	if ($totalRow == $rowTaken) {
		$rowTaken +1;

	$Year=$_POST ['Year'];
	$Funeral=$_POST ['Funeral'];
	$Medical=$_POST ['Medical'];
	$Daily=$_POST ['Daily'];
	$Expenses=$_POST['Expenses'];
	$Income=$_POST['Income'];
	$Profit=$_POST['Profit'];
	$img = $_FILES["choosefile"]["name"];
	$fileTmpName =$_FILES['choosefile']['tmp_name'];
	$path="".$img;
	$Submit=$_POST['Submit'];

$sql3 ="INSERT INTO AnnualReport(Year,FuneralExpense,MedicalExpense,DailyExpense,TotalExpenses,Income,ProfitLose,PDF,Submit)
		VALUES ('$Year','$Funeral','$Medical','$Daily','$Expenses','$Income','$Profit','$img','$Submit')";

		$rs3 = mysqli_query($con, $sql3);

		move_uploaded_file($fileTmpName,$path);
	

		echo '<script> alert ("Hi Admin,you have success update the '.$Year.' yearly annual report.\nGoing back to main page in 5seconds.") </script>';
		header("refresh:0; url=http://localhost/OldFolkHome/Admin/Admin.php"); 


		
		}
	}
	$rowTaken ++;
} 

if ($totalRow ==0){ 

	$Year=$_POST ['Year'];
	$Funeral=$_POST ['Funeral'];
	$Medical=$_POST ['Medical'];
	$Daily=$_POST ['Daily'];
	$Expenses=$_POST['Expenses'];
	$Income=$_POST['Income'];
	$Profit=$_POST['Profit'];
	$img = $_FILES["choosefile"]["name"];
	$fileTmpName =$_FILES['choosefile']['tmp_name'];
	$path="".$img;
	$Submit=$_POST['Submit'];


$sql3 ="INSERT INTO AnnualReport(Year,FuneralExpense,MedicalExpense,DailyExpense,TotalExpenses,Income,ProfitLose,PDF,Submit)
		VALUES ('$Year','$Funeral','$Medical','$Daily','$Expenses','$Income','$Profit','$img','$Submit')";

		$rs3 = mysqli_query($con, $sql3);

		move_uploaded_file($fileTmpName,$path);
	

		echo '<script> alert ("Hi Admin,You have success update the '.$Year.' yearly annual report.\nGoing back to previous page in 5seconds.") </script>';
		header("refresh:10000; url=http://localhost/OldFolkHome/Admin/Admin.php"); 



}

}
