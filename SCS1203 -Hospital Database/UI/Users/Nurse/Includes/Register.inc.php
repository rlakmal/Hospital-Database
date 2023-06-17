<?php
include_once '../../../Includes/dbhregistar.inc.php';

if(isset($_POST['submit'])){

$name = $_POST['Name'];
$address = $_POST['Address'];
$status = $_POST['Working_Status'];
$contNo = $_POST['Contact_No'];
$datejoined = date('Y-m-d', strtotime($_POST['Joined_Date']));
$dateresigned = date('Y-m-d', strtotime($_POST['Resign_Date']));
$cregNo = $_POST['Council_RegNo'];
$type = "Medical";
$medtype = "Nurse";

//considers the id number of the nurse auto incremented
$sql1 = "INSERT INTO employee(Name, Address, Working_Status, Type, Contact_No) VALUES ('$name','$address','$status','$type','$contNo');";
mysqli_query($conn, $sql1);

//not sure whether it returns the id number of the nurse
$result = mysqli_query($conn, "SELECT EmpNo FROM employee WHERE Name = '$name' AND Contact_No = '$contNo'");
$EmpNo;

$row = mysqli_fetch_assoc($result);
$EmpNo = $row['EmpNo'];
echo $EmpNo;

$sql2 = "INSERT INTO medical_staff(Joined_Date, Resign_Date, Council_RegNo, EmpNo, Type) VALUES ('$datejoined', '$dateresigned', '$cregNo', '$EmpNo','$medtype');";
mysqli_query($conn, $sql2);

$sql3 = "INSERT INTO nurse(EmpNo) VALUES('$EmpNo');";
mysqli_query($conn, $sql3);
}
header("Location: ../nurseRegister.php");