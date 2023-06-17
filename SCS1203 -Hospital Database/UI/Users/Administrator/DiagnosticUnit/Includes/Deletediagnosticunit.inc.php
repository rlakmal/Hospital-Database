<?php
include_once '../../../../Includes/dbhadmin.inc.php';

if(isset($_POST['submit'])){
$diagnosticunitno = $_POST['Diagnostic_Unit_No'];


//considers the id number of the nurse auto incremented
$sql1 = "DELETE FROM diagnostic_unit WHERE Diagnostic_Unit_No = '$diagnosticunitno';";
mysqli_query($conn, $sql1);


}
header("Location: ../deletediagnosticunit.php");