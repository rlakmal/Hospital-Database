<?php
include_once '../../../../Includes/dbhadmin.inc.php';

if(isset($_POST['submit'])){


//considers the id number of the nurse auto incremented
$sql1 = "INSERT INTO treatment VALUES (NULL);";
mysqli_query($conn, $sql1);


}
header("Location: ../addtreatment.php");