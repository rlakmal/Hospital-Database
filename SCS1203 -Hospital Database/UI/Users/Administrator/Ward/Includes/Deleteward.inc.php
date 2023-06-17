<?php
include_once '../../../../Includes/dbhadmin.inc.php';

if(isset($_POST['submit'])){
$wardno = $_POST['Ward_No'];
echo $wardno;

//considers the id number of the nurse auto incremented
$sql1 = "DELETE FROM ward WHERE Ward_No = '$wardno';";
mysqli_query($conn, $sql1);


}
header("Location: ../deleteward.php");