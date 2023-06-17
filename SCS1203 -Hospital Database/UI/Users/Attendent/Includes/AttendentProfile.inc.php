<?php
include_once '../../../Includes/dbhattendant.inc.php';
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
    
<div class="output">
<?php
    if(isset($_POST['submit'])){
    

    
    $empno = $_POST['EmpNo'];


    //can display only common details
    $sql1 = "SELECT * FROM employee Where EmpNo = $empno;";
    $result = mysqli_query($conn, $sql1);
    if($result){
        $resultcheck = mysqli_num_rows($result);
    } else{
        echo "<center><h2>Couldn't Find Your Profile</h2></center>";
        die;
    }
    
    if($resultcheck > 0){
        echo "<center><h2>Your Profile Information</h2></center>";
        while($row = mysqli_fetch_assoc($result)){
        echo "Employee No : " . $row['EmpNo'] . "<br>";
        echo "Employee Name : " . $row['Name'] . "<br>";
        echo "Address : " . $row['Address'] . "<br>";
        echo "Working Status : " . $row['Working_Status'] . "<br>";
        echo "Employee Type : " . $row['Type'] . "<br>";
        echo "Contact No : " . $row['Contact_No'] . "<br>";
        }
        
    } else{
        echo "<center><h2>Couldn't Find Your Profile</h2></center>";
        die;
    }

    //can display only attendent details
    $sql3 = "SELECT * FROM non_medical_staff WHERE EmpNo = $empno;";
    $result3 = mysqli_query($conn, $sql3);
    $resultcheck3 = mysqli_num_rows($result3);
    
    if($resultcheck3 > 0){
        
        while($row = mysqli_fetch_assoc($result3)){
        echo "Employee Role : " . $row['Type'] . "<br>";
        }
        
    }

    //can display only attendent details
    $sql2 = "SELECT * FROM attendent WHERE EmpNo = $empno;";
    $result2 = mysqli_query($conn, $sql2);
    $resultcheck2 = mysqli_num_rows($result2);
    
    if($resultcheck2 > 0){
        
        while($row = mysqli_fetch_assoc($result2)){
        echo "Hourly Rate : " . $row['Hourly_Rate'] . "<br>";
        }
        
    }
    }
    ?>
</div>

</body>

</html>