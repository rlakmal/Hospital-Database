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
    $sql1 = "SELECT * FROM diagnostic_unit ORDER BY Diagnostic_Unit_No;";
    $result = mysqli_query($conn, $sql1);
    $resultcheck = mysqli_num_rows($result);
    
    if($resultcheck > 0){
        echo "<center><h2>Diagnostic Unit Information</h2></center>";
        echo "<center>";
        echo "<table style=width:60% border='1'>";
        echo "<tr>";
        echo "<th>Diagnostic Unit No</th>";
        echo "<th>Diagnostic Name</th>";
        echo "<th>PC Unit ID</th>";
        echo "</tr>";
        while($row = mysqli_fetch_assoc($result)){
                echo "<tr>";
                echo "<td>" . $row['Diagnostic_Unit_No'] . "</td>";
                echo "<td>" . $row['Diagnostic_Name'] . "</td>";
                echo "<td>" . $row['Unit_ID'] . "</td>";
                echo "</tr>";

        }
        echo "</table>";
        echo "</center>";
 
    }
    ?>
</div>

</body>

</html>