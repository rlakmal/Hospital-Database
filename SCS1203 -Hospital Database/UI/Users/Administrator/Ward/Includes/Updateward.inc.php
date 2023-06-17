<?php
include_once '../../../../Includes/dbhadmin.inc.php';

if(isset($_POST['submit'])){

$wardno = $_POST['Ward_No'];
$wardname = $_POST['Ward_Name'];
$unitid = $_POST['Unit_ID'];


//considers the id number of the nurse auto incremented
$sql1 = "UPDATE ward SET Ward_Name = '$wardname', Unit_ID = '$unitid' WHERE Ward_No = $wardno;";
mysqli_query($conn, $sql1);


}
header("Location: ../updateward.php");