<?php
include_once '../../../../Includes/dbhadmin.inc.php';

if(isset($_POST['submit'])){

$unitid = $_POST['Unit_ID'];
$empno = $_POST['EmpNo'];


//considers the id number of the nurse auto incremented
$sql1 = "UPDATE patient_care_unit SET EmpNo = '$empno' WHERE Unit_ID = $unitid;";
mysqli_query($conn, $sql1);


}
header("Location: ../updatepatientcareunit.php");