<?php
include_once '../../../Includes/dbhvendor.inc.php';

if(isset($_POST['submit'])){

$registrationno = $_POST['Registration_No'];

//
$sql1 = "DELETE FROM vendor where Registration_No = '$registrationno';";
mysqli_query($conn, $sql1);
}
header("Location: ../vendorDeregister.php");