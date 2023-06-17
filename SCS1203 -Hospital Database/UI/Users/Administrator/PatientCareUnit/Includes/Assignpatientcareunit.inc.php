<?php
include_once '../../../../Includes/dbhadmin.inc.php';

if(isset($_POST['submit'])){
$empno = $_POST['EmpNo'];
$unitid = $_POST['Unit_ID'];
$noofhoursperweek = $_POST['No_Of_Hours_Per_Week'];


//considers the id number of the nurse auto incremented
$sql1 = "INSERT INTO pcuassign(EmpNo, Unit_ID, No_Of_Hours_Per_Week) VALUES ('$empno','$unitid','$noofhoursperweek');";
mysqli_query($conn, $sql1);


}
header("Location: ../assignpatientcareunit.php");