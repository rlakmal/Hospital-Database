<?php
include_once '../../../../Includes/dbhadmin.inc.php';

if(isset($_POST['submit'])){

$drugcode = $_POST['Drug_Code'];
$drugname = $_POST['Drug_Name'];
$unitcost = $_POST['Unit_Cost'];
$drugtype = $_POST['Drug_Type'];
$treatcode = $_POST['Treat_Code'];


//considers the id number of the nurse auto incremented
$sql1 = "UPDATE drug SET Drug_Name = '$drugname', Unit_Cost = '$unitcost', Drug_Type = '$drugtype', Treat_Code = '$treatcode' WHERE Drug_Code = $drugcode;";
mysqli_query($conn, $sql1);


}
header("Location: ../updatedrug.php");