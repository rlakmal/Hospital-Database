<?php
include_once '../../../../Includes/dbhadmin.inc.php';
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="../../../styleoutput.php">
</head>
<body>
<div class="home">
    <h4><a href="http://localhost/System/index.php"> Home </a></h4>
</div>
    
<div class="output">

    

    <?php
    if(isset($_POST['submit'])){
    $unitid = $_POST['Unit_ID'];


    //can display only common details to the employee
    $sql1 = "SELECT * FROM patient_care_unit WHERE Unit_ID = $unitid";
    $result = mysqli_query($conn, $sql1);
    $resultcheck = mysqli_num_rows($result);
    $empno;
    
    if($resultcheck > 0){
        echo "<center><h2>Patient Care Unit Information</h2></center>";
        while($row = mysqli_fetch_assoc($result)){
            echo "Unit ID : " . $row['Unit_ID'] . "<br>";
            echo "Incharge Employee No : ";
            if(isset($row['EmpNo'])){
                $empno = $row['EmpNo'];
                echo $empno . "<br>";
            }else{
                echo "Not assigned yet";
            }
        }
 
    }

    }
    ?>
</div>

</body>

</html>