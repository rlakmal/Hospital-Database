<?php
include_once '../../../Includes/dbhadmin.inc.php';
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="../../styleoutput.php">

<style>
    .output {
    width: 80%;
    padding: 20px;
    margin: auto;
    margin-top: 100px;
    background-color: rgba(240, 248, 255, 0.432);
    border-radius: 10px;
    border: 1px solid black;
    font-size: 20px;
}
</style>

</head>
<body>
<div class="home">
    <h4><a href="http://localhost/System/index.php"> Home </a></h4>
</div>
    
<div class="output">

    

    <?php
    $sql1 = "SELECT employee.EmpNo,employee.Name,employee.Address,employee.Working_Status,employee.Type,employee.Contact_No,non_medical_staff.Type as Role,cleaner.Start_Date,cleaner.End_Date,cleaner.Contract_No FROM employee JOIN non_medical_staff ON employee.EmpNo=non_medical_staff.EmpNo JOIN cleaner ON non_medical_staff.EmpNo=cleaner.EmpNo;";
    $result = mysqli_query($conn, $sql1);
    $resultcheck = mysqli_num_rows($result);
    
    if($resultcheck > 0){
        echo "<center><h2>All Doctor Information</h2></center>";
        echo "<center>";
        echo "<table style=width:80% border='1'>";
        echo "<tr>";
        echo "<th>Employee No</th>";
        echo "<th>Name</th>";
        echo "<th>Address</th>";
        echo "<th>Working Status</th>";
        echo "<th>Staff Type</th>";
        echo "<th>Contact No</th>";
        echo "<th>Employee Role</th>";
        echo "<th>Start Date</th>";
        echo "<th>End Date</th>";
        echo "<th>Contract No</th>";
        echo "</tr>";
        while($row = mysqli_fetch_assoc($result)){
                echo "<tr>";
                echo "<td>" . $row['EmpNo'] . "</td>";
                echo "<td>" . $row['Name'] . "</td>";
                echo "<td>" . $row['Address'] . "</td>";
                echo "<td>" . $row['Working_Status'] . "</td>";
                echo "<td>" . $row['Type'] . "</td>";
                echo "<td>" . $row['Contact_No'] . "</td>";
                echo "<td>" . $row['Role'] . "</td>";
                echo "<td>" . $row['Start_Date'] . "</td>";
                echo "<td>" . $row['End_Date'] . "</td>";
                echo "<td>" . $row['Contract_No'] . "</td>";
                echo "</tr>";

        }
        echo "</table>";
        echo "</center>";
 
    }
    ?>
</div>

</body>

</html>