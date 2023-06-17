<?php
include_once '../../../../Includes/dbhadmin.inc.php';

if(isset($_POST['submit'])){
$empno = $_POST['EmpNo'];


//considers the id number of the nurse auto incremented
$sql1 = "INSERT INTO patient_care_unit(EmpNo) VALUES ('$empno');";
mysqli_query($conn, $sql1);


}
header("Location: ../addpatientcareunit.php");