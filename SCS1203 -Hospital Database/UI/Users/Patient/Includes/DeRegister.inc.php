<?php
include_once '../../../Includes/dbhpatient.inc.php';

if(isset($_POST['submit'])){

$patientid = $_POST['Patient_ID'];

//
$sql1 = "DELETE FROM patient where Patient_ID = '$patientid';";
mysqli_query($conn, $sql1);
}
header("Location: ../patientDeregister.php");