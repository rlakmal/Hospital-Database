<?php
session_start();
include_once '../../../Includes/dbhregistar.inc.php';
// include_once 'Register.inc.php';

if(isset($_POST['submitin'])){

$companyname = $_POST['Company_Name'];
$companyaddress = $_POST['Company_Address'];
$branchname = $_POST['Branch_Name'];
$branchaddress = $_POST['Branch_Address'];
$icontactno = $_POST['IContact_No'];

$sfname = $_POST['SFname'];
$slname = $_POST['SLname'];
$saddress = $_POST['SAddress'];
$srelationship = $_POST['SRelationship'];
$scontactno = $_POST['SContact_No'];

$patientid = $_SESSION['newpatientid'];

//insert insurance company informations
$sql2 = "INSERT INTO insurance_company(Patient_ID, Company_Name, Company_Address, Branch_Name, Branch_Address, Contact_No) VALUES ('$patientid','$companyname','$companyaddress','$branchname','$branchaddress','$icontactno');";
mysqli_query($conn, $sql2);

//update the company name column in patiend table
$sql3 = "UPDATE patient SET Company_Name = '$companyname' WHERE Patient_ID = '$patientid';";
mysqli_query($conn, $sql3);

//insert insurance subscriber informations
$sql4 = "INSERT INTO insurance_subscriber(Patient_ID, Company_Name, Fname, Lname, Relationship, Address, Contact_No) VALUES ('$patientid','$companyname','$sfname','$slname','$srelationship','$saddress','$scontactno');";
mysqli_query($conn, $sql4);
}
header("Location: ../../Registar/registar.php");