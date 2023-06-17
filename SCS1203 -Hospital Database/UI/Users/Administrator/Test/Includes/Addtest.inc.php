<?php
include_once '../../../../Includes/dbhadmin.inc.php';

if(isset($_POST['submit'])){
$testname = $_POST['Test_Name'];
$cost = $_POST['Cost'];
$treatcode = $_POST['Treat_Code'];
echo $treatcode;

//considers the id number of the nurse auto incremented
$sql1 = "INSERT INTO test(Test_Name,Cost,Treat_Code) VALUES ('$testname','$cost','$treatcode');";
mysqli_query($conn, $sql1);


}
header("Location: ../addtest.php");