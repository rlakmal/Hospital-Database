<?php
include_once '../../../../Includes/dbhadmin.inc.php';

if(isset($_POST['submit'])){
$treatcode = $_POST['Treat_Code'];


//considers the id number of the nurse auto incremented
$sql1 = "DELETE FROM treatment WHERE Treat_Code = '$treatcode';";
mysqli_query($conn, $sql1);


}
header("Location: ../deletetreatment.php");