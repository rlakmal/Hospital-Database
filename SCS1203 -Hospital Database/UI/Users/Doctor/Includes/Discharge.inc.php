<?php
include_once '../../../Includes/dbhdoctor.inc.php';

if(isset($_POST['submit'])){

$patientid = $_POST['Patient_ID'];
$dischargedate = date('Y-m-d', strtotime($_POST['Discharged_Date']));
$dischargetime = $_POST['Discharged_Time'];


//insert the id number of the doctor in the admit_doc column in patient table
$sql1 = "UPDATE Patient SET Discharged_Date = '$dischargedate', Discharged_Time = '$dischargetime' WHERE Patient_ID = $patientid;";
mysqli_query($conn, $sql1);
}
header("Location: ../doctorDischarge.php");