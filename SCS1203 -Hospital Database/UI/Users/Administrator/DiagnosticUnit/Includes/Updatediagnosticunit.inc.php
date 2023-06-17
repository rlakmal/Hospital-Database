<?php
include_once '../../../../Includes/dbhadmin.inc.php';

if(isset($_POST['submit'])){

$diagnosticunitno = $_POST['Diagnostic_Unit_No'];
$diagnosticname = $_POST['Diagnostic_Name'];
$unitid = $_POST['Unit_ID'];


//considers the id number of the nurse auto incremented
$sql1 = "UPDATE diagnostic_unit SET Diagnostic_Name = '$diagnosticname', Unit_ID = '$unitid' WHERE Diagnostic_Unit_No = $diagnosticunitno;";
mysqli_query($conn, $sql1);


}
header("Location: ../updatediagnosticunit.php");