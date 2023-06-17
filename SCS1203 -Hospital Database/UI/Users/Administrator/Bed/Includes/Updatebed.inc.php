<?php
include_once '../../../../Includes/dbhadmin.inc.php';

if(isset($_POST['submit'])){

$wardno = $_POST['Ward_No'];
$bedid = $_POST['Bed_ID'];


//considers the id number of the nurse auto incremented
$sql1 = "UPDATE bed SET Ward_No = '$wardno' WHERE Bed_ID = $bedid;";
mysqli_query($conn, $sql1);


}
header("Location: ../updatebed.php");