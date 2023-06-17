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
    $sql1 = "SELECT * FROM patient;";
    $result = mysqli_query($conn, $sql1);
    $resultcheck = mysqli_num_rows($result);
    
    if($resultcheck > 0){
        echo "<center><h2>All Patient Information</h2></center>";
        echo "<center>";
        echo "<table style=width:80% border='1'>";
        echo "<tr>";
        echo "<th>Patient ID</th>";
        echo "<th>Name</th>";
        echo "<th>Arrival Date</th>";
        echo "<th>Arrival Time</th>";
        echo "<th>Admitted Date</th>";
        echo "<th>Admitted Time</th>";
        echo "<th>Discharged Date</th>";
        echo "<th>Discharged Time</th>";
        echo "<th>In Pateint Status</th>";
        echo "<th>Out Patient Status</th>";
        echo "<th>Ward No</th>";
        echo "<th>Bed ID</th>";
        echo "</tr>";
        while($row = mysqli_fetch_assoc($result)){
                echo "<tr>";
                echo "<td>" . $row['Patient_ID'] . "</td>";
                echo "<td>" . $row['Name'] . "</td>";
                echo "<td>" . $row['Arrival_Date'] . "</td>";
                echo "<td>" . $row['Arrival_Time'] . "</td>";
                echo "<td>" . $row['Admitted_Date'] . "</td>";
                echo "<td>" . $row['Admitted_Time'] . "</td>";
                echo "<td>" . $row['Discharged_Date'] . "</td>";
                echo "<td>" . $row['Discharged_Time'] . "</td>";
                echo "<td>" . $row['In_Flag'] . "</td>";
                echo "<td>" . $row['Out_Flag'] . "</td>";
                echo "<td>" . $row['Ward_No'] . "</td>";
                echo "<td>" . $row['Bed_ID'] . "</td>";
                echo "</tr>";

        }
        echo "</table>";
        echo "</center>";
 
    }
    ?>
</div>

</body>

</html>