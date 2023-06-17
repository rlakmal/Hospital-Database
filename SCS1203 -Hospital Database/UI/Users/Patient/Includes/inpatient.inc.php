<?php
include_once '../../../Includes/dbhregistar.inc.php';

if(isset($_POST['submit'])){

$patientid = $_POST['Patient_ID'];
$admitteddate = date('Y-m-d', strtotime($_POST['Admitted_Date']));
$admittedtime = $_POST['Admitted_Time'];
$inflag = "YES";

//
$sql1 = "UPDATE patient SET Admitted_Date = '$admitteddate', Admitted_Time = '$admittedtime',In_Flag = '$inflag' where Patient_ID = '$patientid';";
mysqli_query($conn, $sql1);
}
header("Location: ../inPatientArrival.php");