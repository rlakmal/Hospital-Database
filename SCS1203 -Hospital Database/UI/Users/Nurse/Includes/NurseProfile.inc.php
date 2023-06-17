<?php
include_once '../../../Includes/dbhnurse.inc.php';
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="../../styleoutput.php">
</head>
<body>
<div class="home">
    <h4><a href="http://localhost/System/index.php"> Home </a></h4>
</div>
    
<div class="output">

    

    <?php
    if(isset($_POST['submit'])){
    $empno = $_POST['EmpNo'];


    //can display only common details to all the employee
    $sql1 = "SELECT * FROM employee WHERE EmpNo = $empno";
    $result = mysqli_query($conn, $sql1);
    $resultcheck = mysqli_num_rows($result);
    
    if($resultcheck > 0){
        echo "<center><h2>Your Profile Information</h2></center>";
        while($row = mysqli_fetch_assoc($result)){
        echo "Employee No : " . $row['EmpNo'] . "<br>";
        echo "Employee Name : " . $row['Name'] . "<br>";
        echo "Address : " . $row['Address'] . "<br>";
        echo "Working Status : " . $row['Working_Status'] . "<br>";
        echo "Employee Type : " . $row['Type'] . "<br>";
        echo "Contact No : " . $row['Contact_No'] . "<br>";
        }
 
    }

    //can display only medical staff details to all the employee
    $sql2 = "SELECT * FROM medical_staff WHERE EmpNo = $empno";
    $result2 = mysqli_query($conn, $sql2);
    $resultcheck2 = mysqli_num_rows($result2);
    
    if($resultcheck2 > 0){

        while($row = mysqli_fetch_assoc($result2)){
        echo "Employee Role : " . $row['Type'] . "<br>";
        echo "Joined Date : " . $row['Joined_Date'] . "<br>";
        echo "Resign Date : " . $row['Resign_Date'] . "<br>";
        echo "Council RegNo : " . $row['Council_RegNo'] . "<br>";
        }

    }
    }
    ?>
</div>

</body>

</html>