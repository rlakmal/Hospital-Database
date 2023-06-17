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
    $wardno = $_POST['Ward_No'];


    //can display only common details to the employee
    $sql1 = "SELECT * FROM ward WHERE Ward_No = $wardno";
    $result = mysqli_query($conn, $sql1);
    $resultcheck = mysqli_num_rows($result);
    
    if($resultcheck > 0){
        echo "<center><h2>Ward Information</h2></center>";
        while($row = mysqli_fetch_assoc($result)){
            echo "Ward No : " . $row['Ward_No'] . "<br>";
            echo "Ward Name : " . $row['Ward_Name'] . "<br>";
            echo "Unit No : " . $row['Unit_ID'] . "<br>";
        }
 
    }

    }
    ?>
</div>

</body>

</html>