<?php
session_start();
include_once '../../../Includes/dbhregistar.inc.php';

if(isset($_POST['submitin'])){

$name = $_POST['Name'];
$admitteddate = date('Y-m-d', strtotime($_POST['Admitted_Date']));
$admittedtime = $_POST['Admitted_Time'];
$patientstatus = $_POST['Patient_Status'];
$inflag = "YES";
$outflag = "NO";
$efname = $_POST['EFname'];
$elname = $_POST['ELname'];
$eaddress = $_POST['EAddress'];
$erelationship = $_POST['ERelationship'];
$econtactno = $_POST['EContact_No'];


$sql1 = "INSERT INTO patient (Name, Admitted_Date, Admitted_Time, In_Flag, Out_Flag) VALUES ('$name','$admitteddate','$admittedtime','$inflag','$outflag');";
mysqli_query($conn, $sql1);

//not sure whether it returns the id number of the nurse
$sql7;
$result = mysqli_query($conn, "SELECT * FROM patient WHERE Name = '$name' AND Admitted_Date = '$admitteddate' AND Admitted_Time = '$admittedtime' AND In_Flag = '$inflag' AND Out_Flag = '$outflag'");
$patientid;

$row = mysqli_fetch_assoc($result);
$patientid = $row['Patient_ID'];
echo $patientid;

$_SESSION['newpatientid'] = $patientid;


//insert emergency contact informations
$sql5 = "INSERT INTO emergency_contact(Patient_ID,Fname,Lname,Address,Relationship,Contact_No) VALUES ('$patientid','$efname','$elname','$eaddress','$erelationship','$econtactno');";
mysqli_query($conn, $sql5);

header("Location: ExtraEmergencyRegisterhtml.inc.php");

}

if(isset($_POST['submitout'])){
    $name = $_POST['Name'];
    $arrivaldate = date('Y-m-d', strtotime($_POST['Arrival_Date']));
    $arrivaltime = $_POST['Arrival_Time'];

    $patientstatus = $_POST['Patient_Status'];
    
    $inflag = "NO";
    $outflag = "YES";
    $sql1 = "INSERT INTO patient (Name, Arrival_Date, Arrival_Time, In_Flag, Out_Flag) VALUES ('$name','$arrivaldate','$arrivaltime','$inflag','$outflag');";
    mysqli_query($conn, $sql1);

    header("Location: ../patientRegister.php");

}

