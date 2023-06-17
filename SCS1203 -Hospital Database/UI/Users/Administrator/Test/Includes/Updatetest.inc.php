<?php
include_once '../../../../Includes/dbhadmin.inc.php';

if(isset($_POST['submit'])){

$testcode = $_POST['Test_Code'];
$testname = $_POST['Test_Name'];
$cost = $_POST['Cost'];
$treatcode = $_POST['Treat_Code'];


//considers the id number of the nurse auto incremented
$sql1 = "UPDATE test SET Test_Name = '$testname', Cost = '$cost', Treat_Code = '$treatcode' WHERE Test_Code = $testcode;";
mysqli_query($conn, $sql1);


}
header("Location: ../updatetest.php");