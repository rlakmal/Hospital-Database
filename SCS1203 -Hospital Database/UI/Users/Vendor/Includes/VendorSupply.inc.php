<?php
include_once '../../../Includes/dbhvendor.inc.php';

if(isset($_POST['submit'])){

$registrationno = $_POST['Registration_No'];
$drugcode = $_POST['Drug_Code'];
$supplydate = date('Y-m-d', strtotime($_POST['Supply_Date']));
$unitcost = $_POST['Unit_Cost'];
$quantity = $_POST['Quantity'];
$drugtype = $_POST['Drug_Type'];

$totalcost = $unitcost * $quantity;

$sql1 = "INSERT INTO supply(Registration_No,Drug_Code, Supply_Date, Unit_Cost, Quantity, Drug_Type, Total_Cost) VALUES ('$registrationno','$drugcode','$supplydate','$unitcost','$quantity','$drugtype','$totalcost');";
mysqli_query($conn, $sql1);
}
header("Location: ../vendorSupply.php");