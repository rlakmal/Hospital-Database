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

    //can display only common details to the employee
    $sql1 = "SELECT * FROM drug ORDER BY Drug_Code;";
    $result = mysqli_query($conn, $sql1);
    $resultcheck = mysqli_num_rows($result);
    
    if($resultcheck > 0){
        echo "<center><h2>Drug Information</h2></center>";
        echo "<center>";
        echo "<table style=width:60% border='1'>";
        echo "<tr>";
        echo "<th>Drug Code</th>";
        echo "<th>Drug Name</th>";
        echo "<th>Unit Cost</th>";
        echo "<th>Drug Type</th>";
        echo "<th>Treat Code</th>";
        echo "</tr>";
        while($row = mysqli_fetch_assoc($result)){
                echo "<tr>";
                echo "<td>" . $row['Drug_Code'] . "</td>";
                echo "<td>" . $row['Drug_Name'] . "</td>";
                echo "<td>" . $row['Unit_Cost'] . "</td>";
                echo "<td>" . $row['Drug_Type'] . "</td>";
                echo "<td>" . $row['Treat_Code'] . "</td>";
                echo "</tr>";

        }
        echo "</table>";
        echo "</center>";
 
    }
    ?>
</div>

</body>

</html>