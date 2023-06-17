<?php
include_once '../../../Includes/dbhvendor.inc.php';
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
    
<div class="output" align="left">
    
    <?php
    if(isset($_POST['submit'])){
    $registrationno = $_POST['Registration_No'];


    //can display only common details to all the employee
    $sql1 = "SELECT * FROM vendor Where Registration_No = $registrationno";
    $result = mysqli_query($conn, $sql1);
    $resultcheck = mysqli_num_rows($result);
    
    if($resultcheck > 0){
        echo "<center><h2>Your Profile Information</h2></center>";
        while($row = mysqli_fetch_assoc($result)){
        echo "Registration No : " . $row['Registration_No'] . "<br>";
        echo "Vendor Name : " . $row['Name'] . "<br>";
        echo "Address : " . $row['Address'] . "<br>";
        echo "Contact No : " . $row['Contact_No'] . "<br>";
        }
    }
    }
    ?>
</div>

</body>

</html>