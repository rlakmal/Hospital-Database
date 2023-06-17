<?php
include_once '../../../Includes/dbhregistar.inc.php';

if(isset($_POST['submit'])){

$patientid = $_POST['Patient_ID'];
$arrivaldate = date('Y-m-d', strtotime($_POST['Arrival_Date']));
$arrivaltime = $_POST['Arrival_Time'];
$outflag = "YES";

$sql1 = "UPDATE patient SET Arrival_Date = '$arrivaldate', Arrival_Time = '$arrivaltime',Out_Flag = '$outflag' where Patient_ID = '$patientid';";
mysqli_query($conn, $sql1);
}
header("Location: ../inPatientArrival.php");