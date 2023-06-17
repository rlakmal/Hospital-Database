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
    $drugcode = $_POST['Drug_Code'];


    //can display only common details to the employee
    $sql1 = "SELECT * FROM drug WHERE Drug_Code = $drugcode";
    $result = mysqli_query($conn, $sql1);
    $resultcheck = mysqli_num_rows($result);
    
    if($resultcheck > 0){
        echo "<center><h2>Drug Information</h2></center>";
        while($row = mysqli_fetch_assoc($result)){
            echo "Drug Code : " . $row['Drug_Code'] . "<br>";
            echo "Drug Name : " . $row['Drug_Name'] . "<br>";
            echo "Drug Type : " . $row['Drug_Type'] . "<br>";
            echo "Unit Cost : " . $row['Unit_Cost'] . "<br>";
            echo "Treatment Code : " . $row['Treat_Code'] . "<br>";
            
        }
 
    }

    }
    ?>
</div>

</body>

</html>