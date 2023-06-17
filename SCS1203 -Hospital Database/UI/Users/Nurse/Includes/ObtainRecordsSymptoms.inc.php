<?php
session_start();
include_once '../../../Includes/dbhnurse.inc.php';
// include_once 'ObtainRecords.inc.php';

if(isset($_POST['submit'])){

$symptom = $_POST['Symptom'];
$patientid = $_SESSION["obtainrecordpatientid"];

$sql = "SELECT * FROM patient_symptom WHERE Patient_ID = '$patientid' AND Symptom = '$symptom';";
$result = mysqli_query($conn, $sql);
$resultcount;
if($result){
    $resultcount = mysqli_num_rows($result);
}
$sql2;
if($resultcount > 0){
}else{
    // insert daily records into daily_record table
    $sql2 = "INSERT INTO patient_symptom(Patient_ID,Symptom) VALUES ('$patientid','$symptom');";
    mysqli_query($conn, $sql2);
}

}
header("Location: ObtainRecordsSymptomshtml.inc.php");