<?php
include_once '../../../Includes/dbhregistar.inc.php';

if(isset($_POST['submit'])){

$name = $_POST['Name'];
$address = $_POST['Address'];
$status = $_POST['Working_Status'];
$contNo = $_POST['Contact_No'];
$startdate = date('Y-m-d', strtotime($_POST['Start_Date']));
$enddate = date('Y-m-d', strtotime($_POST['End_Date']));
$contractno = $_POST['Contract_No'];
$type = "Non-Medical";
$nonmedtype = "Cleaner";

//considers the id number of the nurse auto incremented
$sql1 = "INSERT INTO employee(Name, Address, Working_Status, Type, Contact_No) VALUES ('$name','$address','$status','$type','$contNo');";
mysqli_query($conn, $sql1);

//not sure whether it returns the id number of the nurse
$result = mysqli_query($conn, "SELECT EmpNo FROM employee WHERE Name = '$name' AND Contact_No = '$contNo'");
$EmpNo;

$row = mysqli_fetch_assoc($result);
$EmpNo = $row['EmpNo'];
echo $EmpNo;

$sql3 = "INSERT INTO non_medical_staff(EmpNo, Type) VALUES ('$EmpNo','$nonmedtype');";
mysqli_query($conn, $sql3);

$sql2 = "INSERT INTO cleaner(EmpNo, Start_Date, End_Date, Contract_No ) VALUES ('$EmpNo','$startdate', '$enddate', '$contractno');";
mysqli_query($conn, $sql2);
}
header("Location: ../cleanerRegister.php");