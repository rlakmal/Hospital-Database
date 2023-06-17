<?php
session_start();
include_once '../../../Includes/dbhnurse.inc.php';

if(isset($_POST['submit'])){

$empno = $_POST['EmpNo'];
$patientid = $_POST['Patient_ID'];
$weight = $_POST['Weight'];
$bloodpressure = $_POST['Blood_Pressure'];
$temperature = $_POST['Temperature'];
$pulse = $_POST['Pulse'];
$recorddate = date('Y-m-d', strtotime($_POST['Record_Date']));
$recordtime = $_POST['Record_Time'];

$_SESSION["dailypatientid"] = $patientid;
$_SESSION["dailyempno"] = $empno;
$_SESSION["dailyrecorddate"] = $recorddate;
$_SESSION["dailyrecordtime"] = $recordtime;

//insert daily records into daily_record table
$sql1 = "INSERT INTO inpatient_daily_record(EmpNo, Patient_ID, Weight, Blood_Pressure, Temperature, Pulse, Record_Date, Record_Time) VALUES ('$empno','$patientid','$weight','$bloodpressure','$temperature','$pulse','$recorddate','$recordtime');";
mysqli_query($conn, $sql1);
}
header("Location: DailyRecordsSymptomshtml.inc.php");
