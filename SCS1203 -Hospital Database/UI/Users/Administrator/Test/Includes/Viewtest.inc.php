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
    $testcode = $_POST['Test_Code'];


    //can display only common details to the employee
    $sql1 = "SELECT * FROM test WHERE Test_Code = $testcode";
    $result = mysqli_query($conn, $sql1);
    $resultcheck = mysqli_num_rows($result);
    
    if($resultcheck > 0){
        echo "<center><h2>Test Information</h2></center>";
        while($row = mysqli_fetch_assoc($result)){
            echo "Test Code : " . $row['Test_Code'] . "<br>";
            echo "Test Name : " . $row['Test_Name'] . "<br>";
            echo "Test Cost : " . $row['Cost'] . "<br>";
            echo "Treatment Code : " . $row['Treat_Code'] . "<br>";
            
        }
 
    }

    }
    ?>
</div>

</body>

</html>