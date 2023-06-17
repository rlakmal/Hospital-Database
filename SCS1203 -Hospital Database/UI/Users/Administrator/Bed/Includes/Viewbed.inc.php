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
    $bedid = $_POST['Bed_ID'];


    //can display only common details to the employee
    $sql1 = "SELECT * FROM bed WHERE Bed_ID = $bedid";
    $result = mysqli_query($conn, $sql1);
    $resultcheck = mysqli_num_rows($result);
    
    if($resultcheck > 0){
        echo "<center><h2>Bed Information</h2></center>";
        while($row = mysqli_fetch_assoc($result)){
            echo "Bed ID : " . $row['Bed_ID'] . "<br>";
            echo "Ward ID : ";
            if(isset($row['Ward_No'])){
                echo $row['Ward_No'] . "<br>";
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