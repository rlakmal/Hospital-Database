<?php
include_once '../../../../Includes/dbhadmin.inc.php';

if(isset($_POST['submit'])){
$testcode = $_POST['Test_Code'];


//considers the id number of the nurse auto incremented
$sql1 = "DELETE FROM test WHERE Test_Code = '$testcode';";
mysqli_query($conn, $sql1);


}
header("Location: ../deletetest.php");