<?php
include_once '../../../../Includes/dbhadmin.inc.php';

if(isset($_POST['submit'])){
$diagnosticname = $_POST['Diagnostic_Name'];
$unitid = $_POST['Unit_ID'];

//considers the id number of the nurse auto incremented
$sql1 = "INSERT INTO diagnostic_unit(Diagnostic_Name,Unit_ID) VALUES ('$diagnosticname','$unitid');";
mysqli_query($conn, $sql1);


}
header("Location: ../adddiagnosticunit.php");