<?php
include_once '../../../Includes/dbhdoctor.inc.php';

if(isset($_POST['submit'])){

$patientid = $_POST['Patient_ID'];
$empno = $_POST['Admit_doc'];


//insert the id number of the doctor in the admit_doc column in patient table
$sql = "SELECT * FROM see_patient WHERE Patient_ID = '$patientid' AND EmpNo = '$empno';";
$result = mysqli_query($conn, $sql);
$resultcount;
if($result){
    $resultcount = mysqli_num_rows($result);
}

//CHECKING WHETHER IT ALREADY HAVE THE SAME DATA AND DELETE THEM
if($resultcount > 0){
}else{
    // insert daily records into daily_record table
    $sql1 = "INSERT INTO see_patient(Patient_ID,EmpNo) VALUES ('$patientid','$empno');";
    mysqli_query($conn, $sql1);
    }
}


header("Location: ../doctorAddmit.php");