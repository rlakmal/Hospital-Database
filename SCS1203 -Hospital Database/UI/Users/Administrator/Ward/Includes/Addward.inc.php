<?php
include_once '../../../../Includes/dbhadmin.inc.php';

if(isset($_POST['submit'])){
$wardname = $_POST['Ward_Name'];
$unitid = $_POST['Unit_ID'];


//considers the id number of the nurse auto incremented
$sql1 = "INSERT INTO ward(Ward_Name, Unit_ID) VALUES ('$wardname','$unitid');";
mysqli_query($conn, $sql1);


}
header("Location: ../addward.php");