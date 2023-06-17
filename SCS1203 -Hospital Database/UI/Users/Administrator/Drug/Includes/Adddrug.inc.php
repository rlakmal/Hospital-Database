<?php
include_once '../../../../Includes/dbhadmin.inc.php';

if(isset($_POST['submit'])){
$drugname = $_POST['Drug_Name'];
$unitcost = $_POST['Unit_Cost'];
$drugtype = $_POST['Drug_Type'];
$treatcode = $_POST['Treat_Code'];


//considers the id number of the nurse auto incremented
$sql1 = "INSERT INTO drug(Drug_Name,Unit_Cost,Drug_Type,Treat_Code) VALUES ('$drugname','$unitcost','$drugtype','$treatcode');";
mysqli_query($conn, $sql1);


}
header("Location: ../adddrug.php");