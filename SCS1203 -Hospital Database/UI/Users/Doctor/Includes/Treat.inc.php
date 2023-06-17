<?php
include_once '../../../Includes/dbhdoctor.inc.php';

if(isset($_POST['submit'])){

$empno = $_POST['EmpNo'];
$patientid = $_POST['Patient_ID'];
$treatcode = $_POST['Treat_Code'];
$treatmentdate = $_POST['Treatment_Date'];
$treatmenttime = $_POST['Treatment_Time'];


//insert data into DoTreatment table
$sql2 = "INSERT INTO dotreatment(EmpNo, Treat_Code, Patient_ID, Treatment_Date, Treatment_Time) VALUES ('$empno','$treatcode','$patientid','$treatmentdate','$treatmenttime');";
mysqli_query($conn, $sql2);
}
header("Location: ../doctorTreat.php");