<?php
include_once '../../../../Includes/dbhadmin.inc.php';

if(isset($_POST['submit'])){
$drugcode = $_POST['Drug_Code'];


//considers the id number of the nurse auto incremented
$sql1 = "DELETE FROM drug WHERE Drug_Code = '$drugcode';";
mysqli_query($conn, $sql1);


}
header("Location: ../deletedrug.php");