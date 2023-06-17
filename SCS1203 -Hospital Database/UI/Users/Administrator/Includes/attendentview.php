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
    $sql1 = "SELECT employee.EmpNo,employee.Name,employee.Address,employee.Working_Status,employee.Type,employee.Contact_No,non_medical_staff.Type as Role,attendent.Hourly_Rate FROM employee JOIN non_medical_staff ON employee.EmpNo=non_medical_staff.EmpNo JOIN attendent ON non_medical_staff.EmpNo=attendent.EmpNo;";
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
        echo "<th>Hourly Rate</th>";
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
                echo "<td>" . $row['Hourly_Rate'] . "</td>";
                echo "</tr>";
        }
        echo "</table>";
        echo "</center>";
 
    }
    ?>
</div>

</body>

</html>