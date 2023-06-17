<?php
include_once '../../../Includes/dbhregistar.inc.php';

if(isset($_POST['submit'])){

$name = $_POST['Name'];
$address = $_POST['Address'];
$contactno = $_POST['Contact_No'];
$registrationno = $_POST['Registration_No'];

$sql1 = "INSERT INTO vendor(Registration_No,Name, Address, Contact_No) VALUES ('$registrationno','$name','$address','$contactno');";
mysqli_query($conn, $sql1);
}
header("Location: ../vendorRegister.php");