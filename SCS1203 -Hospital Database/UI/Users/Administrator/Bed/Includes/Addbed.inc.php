<?php
include_once '../../../../Includes/dbhadmin.inc.php';

if(isset($_POST['submit'])){
$wardno = $_POST['Ward_No'];


//considers the id number of the nurse auto incremented
$sql1 = "INSERT INTO bed(Ward_No) VALUES ('$wardno');";
mysqli_query($conn, $sql1);

}

header("Location: ../addbed.php");