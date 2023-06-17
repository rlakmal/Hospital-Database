<?php
include_once '../../../Includes/dbhattendant.inc.php';
if(isset($_POST['submit'])){
$empno = $_POST['EmpNo'];

//
$sql1 = "DELETE FROM employee where EmpNo = '$empno';";
mysqli_query($conn, $sql1);
}
header("Location: ../attendentResign.php");