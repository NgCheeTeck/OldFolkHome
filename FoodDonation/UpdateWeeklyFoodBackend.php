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
	
session_start(); 


if(isset($_SESSION['username']))
{

	$Type1 = $_POST ['Type1'];
	$Product1 = $_POST ['Product1'];
	$img1 = $_FILES["choosefile1"]["name"];
	$fileTmpName1 =$_FILES['choosefile1']['tmp_name'];
	$path1="".$img1;


	$Type2 = $_POST ['Type2'];
	$Product2=$_POST ['Product2'];
	$img2 = $_FILES["choosefile2"]["name"];
	$fileTmpName2 =$_FILES['choosefile2']['tmp_name'];
	$path2="".$img2;

	$Type3 = $_POST ['Type3'];
	$Product3=$_POST ['Product3'];
	$img3 = $_FILES["choosefile3"]["name"];
	$fileTmpName3 =$_FILES['choosefile3']['tmp_name'];
	$path3="".$img3;

	$Type4 = $_POST ['Type4'];
	$Product4=$_POST ['Product4'];
	$img4 = $_FILES["choosefile4"]["name"];
	$fileTmpName4 =$_FILES['choosefile4']['tmp_name'];
	$path4="".$img4;

	$Type5 = $_POST ['Type5'];
	$Product5=$_POST ['Product5'];
	$img5 = $_FILES["choosefile5"]["name"];
	$fileTmpName5 =$_FILES['choosefile5']['tmp_name'];
	$path5="".$img5;

	$Type6 = $_POST ['Type6'];
	$Product6=$_POST ['Product6'];
	$img6 = $_FILES["choosefile6"]["name"];
	$fileTmpName6 =$_FILES['choosefile6']['tmp_name'];
	$path6="".$img6;

	$Type7 = $_POST ['Type7'];
	$Product7= $_POST ['Product7'];
	$img7 = $_FILES["choosefile7"]["name"];
	$fileTmpName7 =$_FILES['choosefile7']['tmp_name'];
	$path7="".$img7;

	$Type8 = $_POST ['Type8'];
	$Product8= $_POST ['Product8'];
	$img8 = $_FILES["choosefile8"]["name"];
	$fileTmpName8 =$_FILES['choosefile8']['tmp_name'];
	$path8="".$img8;

	$Type9 = $_POST ['Type9'];
	$Product9= $_POST ['Product9'];
	$img9 = $_FILES["choosefile9"]["name"];
	$fileTmpName9 =$_FILES['choosefile9']['tmp_name'];
	$path9="".$img9;


	$Type10 = $_POST ['Type10'];
	$Product10= $_POST ['Product10'];
	$img10 = $_FILES["choosefile10"]["name"];
	$fileTmpName10 =$_FILES['choosefile10']['tmp_name'];
	$path10="".$img10;

	$Date= date("Y-m-d");



$sql3 ="INSERT INTO WeeklyFoodList1 (Type1,Product1,Image1,Type2,Product2,Image2,Type3,Product3,Image3,Type4,Product4,Image4,
		Type5,Product5,Image5,Type6,Product6,Image6,Type7,Product7,Image7,Type8,Product8,Image8,Type9,Product9,Image9,Type10,Product10,Image10,Dates)

		VALUES ('$Type1','$Product1','$img1','$Type2','$Product2','$img2','$Type3','$Product3','$img3','$Type4','$Product4','$img4','$Type5','$Product5','$img5','$Type6','$Product6','$img6','$Type7','$Product7','$img7','$Type8','$Product8','$img8','$Type9','$Product9','$img9',
			'$Type10','$Product10','$img10','$Date')";

		$rs3 = mysqli_query($con, $sql3);

		move_uploaded_file($fileTmpName1,$path1);
		move_uploaded_file($fileTmpName2,$path2);
		move_uploaded_file($fileTmpName3,$path3);
		move_uploaded_file($fileTmpName4,$path4);
		move_uploaded_file($fileTmpName5,$path5);
		move_uploaded_file($fileTmpName6,$path6);
		move_uploaded_file($fileTmpName7,$path7);
		move_uploaded_file($fileTmpName8,$path8);
		move_uploaded_file($fileTmpName9,$path9);
		move_uploaded_file($fileTmpName10,$path10);


	echo '<script> alert ("You have successfully updated your new weekly food list") </script>';
		header("refresh:0; url=http://localhost/OldFolkHome/Admin/Admin.php");


 
}


