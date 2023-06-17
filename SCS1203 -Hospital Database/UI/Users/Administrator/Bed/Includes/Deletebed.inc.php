<?php
include_once '../../../../Includes/dbhadmin.inc.php';

if(isset($_POST['submit'])){
$bedid = $_POST['Bed_ID'];


//considers the id number of the nurse auto incremented
$sql1 = "DELETE FROM bed WHERE Bed_ID = '$bedid';";
mysqli_query($conn, $sql1);


}
header("Location: ../deletebed.php");