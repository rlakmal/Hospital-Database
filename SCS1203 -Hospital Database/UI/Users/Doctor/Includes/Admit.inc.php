<?php
include_once '../../../Includes/dbhdoctor.inc.php';

if(isset($_POST['submit'])){

$patientid = $_POST['Patient_ID'];
$admitdocid = $_POST['Admit_doc'];
$inflag = "YES";
$outflag = "NO";
$wardno = $_POST['Ward_No'];
$bedid = $_POST['Bed_No'];


//insert the id number of the doctor in the admit_doc column in patient table
$sql1 = "UPDATE Patient SET Admitted_Doctor = '$admitdocid', In_Flag = '$inflag', Out_Flag = '$outflag', Ward_No = '$wardno', Bed_No = '$bedid' WHERE Patient_ID = $patientid;";
mysqli_query($conn, $sql1);
}
header("Location: ../doctor_Addmit.php");
