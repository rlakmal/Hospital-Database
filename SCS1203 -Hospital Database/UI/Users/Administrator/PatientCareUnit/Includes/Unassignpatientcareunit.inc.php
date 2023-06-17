<?php
include_once '../../../../Includes/dbhadmin.inc.php';

if(isset($_POST['submit'])){
$empno = $_POST['EmpNo'];
$unitid = $_POST['Unit_ID'];


//considers the id number of the nurse auto incremented
$sql1 = "DELETE FROM pcuassign WHERE EmpNo = '$empno' AND Unit_ID = '$unitid';";
mysqli_query($conn, $sql1);


}
header("Location: ../unassignpatientcareunit.php");