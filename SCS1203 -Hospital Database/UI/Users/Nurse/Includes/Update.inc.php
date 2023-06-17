<?php
include_once '../../../Includes/dbhnurse.inc.php';

if(isset($_POST['submit'])){

$empno = $_POST['EmpNo'];
$address = $_POST['Address'];
$contactno = $_POST['Contact_No'];

//update the employee table
$sql1 = "UPDATE employee SET Address = '$address', Contact_No = '$contactno' where EmpNo = $empno;";
mysqli_query($conn, $sql1);
}
header("Location: ../updateProfile.php");