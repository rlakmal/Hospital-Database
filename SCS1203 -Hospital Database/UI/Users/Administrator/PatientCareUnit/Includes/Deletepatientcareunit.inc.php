<?php
include_once '../../../../Includes/dbhadmin.inc.php';

if(isset($_POST['submit'])){
$unitid = $_POST['Unit_ID'];


//considers the id number of the nurse auto incremented
$sql1 = "DELETE FROM patient_care_unit WHERE Unit_ID = '$unitid';";
mysqli_query($conn, $sql1);


}
header("Location: ../deletepatientcareunit.php");