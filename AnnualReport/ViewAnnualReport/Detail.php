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
 
$sql = "SELECT * From AnnualReport where Year='2021'";

$rs3 = mysqli_query($con, $sql);

while ($row = $rs3->fetch_assoc()){


	$FuneralExpense1=$row['FuneralExpense'];
	$TotalExpenses1=$row['TotalExpenses'];
	$Income1=$row['Income'];
	$MedicalExpens1=$row['MedicalExpense'];
	$DailyExpense1=$row['DailyExpense'];
	

}

$dataPoints = array(
	array("label"=> "Funeral Expense", "y"=> $FuneralExpense1),
	array("label"=> "Medical Expens", "y"=> $MedicalExpens1),
	array("label"=> "Daily Expense", "y"=> $DailyExpense1),
	array("label"=> "Total Expenses", "y"=>$TotalExpenses1),
	array("label"=> "Income", "y"=>$Income1),
);

$sql1 = "SELECT * From AnnualReport where Year='2022'";

$rs4 = mysqli_query($con, $sql1);

while ($row = $rs4->fetch_assoc()){


	$FuneralExpense2=$row['FuneralExpense'];
	$TotalExpenses2=$row['TotalExpenses'];
	$Income2=$row['Income'];
	$MedicalExpens2=$row['MedicalExpense'];
	$DailyExpense2=$row['DailyExpense'];
	

}

$data = array(
	array("label"=> "Funeral Expense", "y"=> $FuneralExpense2),
	array("label"=> "Medical Expens", "y"=> $MedicalExpens2),
	array("label"=> "Daily Expense", "y"=> $DailyExpense2),
	array("label"=> "Total Expenses", "y"=>$TotalExpenses2),
	array("label"=> "Income", "y"=>$Income2),
);


$sql2 = "SELECT * From AnnualReport where Year='2023'";

$rs5 = mysqli_query($con, $sql2);

while ($row = $rs5->fetch_assoc()){


	$FuneralExpense3=$row['FuneralExpense'];
	$TotalExpenses3=$row['TotalExpenses'];
	$Income3=$row['Income'];
	$MedicalExpens3=$row['MedicalExpense'];
	$DailyExpense3=$row['DailyExpense'];
	

}

$data1 = array(
	array("label"=> "Funeral Expense", "y"=> $FuneralExpense3),
	array("label"=> "Medical Expens", "y"=> $MedicalExpens3),
	array("label"=> "Daily Expense", "y"=> $DailyExpense3),
	array("label"=> "Total Expenses", "y"=>$TotalExpenses3),
	array("label"=> "Income", "y"=>$Income3),
);



$sql3 = "SELECT * From AnnualReport where Year='2024'";

$rs6 = mysqli_query($con, $sql3);

while ($row = $rs6->fetch_assoc()){


	$FuneralExpense4=$row['FuneralExpense'];
	$TotalExpenses4=$row['TotalExpenses'];
	$Income4=$row['Income'];
	$MedicalExpens4=$row['MedicalExpense'];
	$DailyExpense4=$row['DailyExpense'];
	

}

$data2 = array(
	array("label"=> "Funeral Expense", "y"=> $FuneralExpense4),
	array("label"=> "Medical Expens", "y"=> $MedicalExpens4),
	array("label"=> "Daily Expense", "y"=> $DailyExpense4),
	array("label"=> "Total Expenses", "y"=>$TotalExpenses4),
	array("label"=> "Income", "y"=>$Income4),
);


$sql4 = "SELECT * From AnnualReport where Year='2025'";

$rs7 = mysqli_query($con, $sql4);

while ($row = $rs7->fetch_assoc()){


	$FuneralExpense5=$row['FuneralExpense'];
	$TotalExpenses5=$row['TotalExpenses'];
	$Income5=$row['Income'];
	$MedicalExpens5=$row['MedicalExpense'];
	$DailyExpense5=$row['DailyExpense'];
	

}

$data3 = array(
	array("label"=> "Funeral Expense", "y"=> $FuneralExpense5),
	array("label"=> "Medical Expens", "y"=> $MedicalExpens5),
	array("label"=> "Daily Expense", "y"=> $DailyExpense5),
	array("label"=> "Total Expenses", "y"=>$TotalExpenses5),
	array("label"=> "Income", "y"=>$Income5),
);


?>

<head>

<link rel="stylesheet" href="http://localhost/OldFolkHome/AnnualReport/ViewAnnualReport/Daily.css">

</head>

<body>
<br>
</br>
<br>
</br>
<br>
</br>

<?php if ($_POST['Detail1']) { ?>

<div id="chartContainer" style="height: 470px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
<br>
</br>

<script>
window.onload = function () {
 
var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	exportEnabled: true,
	title:{
		text: "Average Expenses and Income 2021"
	},
	subtitles: [{
		text: "Currency Used:Ringgit Malaysia (RM)"
	}],
	data: [{
		type: "pie",
		showInLegend: "true",
		legendText: "{label}",
		indexLabelFontSize: 16,
		indexLabel: "{label} - #percent%",
		yValueFormatString: "RM#,##0",
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();
 
}

</script>

<input type="Submit" name="Submit1" value="Back to Previous Page" id="three" onclick="window.location.href='http://localhost/OldFolkHome/AnnualReport/ViewAnnualReport/ViewAnnualReport.php'"/>

<?php } else if ($_POST['Detail2']) { ?>

<div id="chartContainer1" style="height: 470px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
<br>
</br>

<script>
window.onload = function () {
 
var chart = new CanvasJS.Chart("chartContainer1", {
	animationEnabled: true,
	exportEnabled: true,
	title:{
		text: "Average Expenses and Income 2022"
	},
	subtitles: [{
		text: "Currency Used:Ringgit Malaysia (RM)"
	}],
	data: [{
		type: "pie",
		showInLegend: "true",
		legendText: "{label}",
		indexLabelFontSize: 16,
		indexLabel: "{label} - #percent%",
		yValueFormatString: "RM#,##0",
		dataPoints: <?php echo json_encode($data, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();
 
}

</script>

<input type="Submit" name="Submit1" value="Back to Previous Page" id="three" onclick="window.location.href='http://localhost/OldFolkHome/AnnualReport/ViewAnnualReport/ViewAnnualReport.php'"/>

<?php } 

 else if ($_POST['Detail3']) { ?>

<div id="chartContainer2" style="height: 470px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
<br>
</br>

<script>
window.onload = function () {
 
var chart = new CanvasJS.Chart("chartContainer2", {
	animationEnabled: true,
	exportEnabled: true,
	title:{
		text: "Average Expenses and Income 2023"
	},
	subtitles: [{
		text: "Currency Used:Ringgit Malaysia (RM)"
	}],
	data: [{
		type: "pie",
		showInLegend: "true",
		legendText: "{label}",
		indexLabelFontSize: 16,
		indexLabel: "{label} - #percent%",
		yValueFormatString: "RM#,##0",
		dataPoints: <?php echo json_encode($data1, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();
 
}

</script>

<input type="Submit" name="Submit1" value="Back to Previous Page" id="three" onclick="window.location.href='http://localhost/OldFolkHome/AnnualReport/ViewAnnualReport/ViewAnnualReport.php'"/>

<?php } 

 else if ($_POST['Detail4']) { ?>

<div id="chartContainer3" style="height: 470px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
<br>
</br>

<script>
window.onload = function () {
 
var chart = new CanvasJS.Chart("chartContainer3", {
	animationEnabled: true,
	exportEnabled: true,
	title:{
		text: "Average Expenses and Income 2024"
	},
	subtitles: [{
		text: "Currency Used:Ringgit Malaysia (RM)"
	}],
	data: [{
		type: "pie",
		showInLegend: "true",
		legendText: "{label}",
		indexLabelFontSize: 16,
		indexLabel: "{label} - #percent%",
		yValueFormatString: "RM#,##0",
		dataPoints: <?php echo json_encode($data2, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();
 
}

</script>

<input type="Submit" name="Submit1" value="Back to Previous Page" id="three" onclick="window.location.href='http://localhost/OldFolkHome/AnnualReport/ViewAnnualReport/ViewAnnualReport.php'"/>

<?php } else { ?>

<div id="chartContainer4" style="height: 470px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
<br>
</br>

<script>
window.onload = function () {
 
var chart = new CanvasJS.Chart("chartContainer4", {
	animationEnabled: true,
	exportEnabled: true,
	title:{
		text: "Average Expenses and Income 2025"
	},
	subtitles: [{
		text: "Currency Used:Ringgit Malaysia (RM)"
	}],
	data: [{
		type: "pie",
		showInLegend: "true",
		legendText: "{label}",
		indexLabelFontSize: 16,
		indexLabel: "{label} - #percent%",
		yValueFormatString: "RM#,##0",
		dataPoints: <?php echo json_encode($data3, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();
 
}

</script>

<input type="Submit" name="Submit1" value="Back to Previous Page" id="three" onclick="window.location.href='http://localhost/OldFolkHome/AnnualReport/ViewAnnualReport/ViewAnnualReport.php'"/>


<?php } ?>




