<?php
include_once '../../../Includes/dbhdoctor.inc.php';
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
    $patientid = $_POST['Patient_ID'];


    //
    $sql1 = "SELECT * FROM patient Where Patient_ID = $patientid";
    $result = mysqli_query($conn, $sql1);
    $resultcheck = mysqli_num_rows($result);
    
    if($resultcheck > 0){
        echo "<center><h2>Patient Information</h2></center>";
        while($row = mysqli_fetch_assoc($result)){
            echo "Patient ID : " . $row['Patient_ID'] . "<br>";
            echo "Patient Name : " . $row['Name'] . "<br>";
            echo "Weight : " . $row['Weight']. "<br>";
            echo "Blood Pressure : " . $row['Blood_Pressure']. "<br>";
            echo "Temperature : " . $row['Temperature']. "<br>";
            echo "Pulse : " . $row['Pulse'] ."<br>";
            echo "Symptoms : <br>";

            //checking whether if there any sysmptoms
            $sql2 = "SELECT * FROM patient_symptom Where Patient_ID = $patientid";
            $symptomresult = mysqli_query($conn, $sql2);
            $symptomcheck;

        if($symptomresult){
            $symptomcheck = mysqli_num_rows($symptomresult);
        }

        if($symptomcheck > 0){
            
            while($symrow = mysqli_fetch_assoc($symptomresult)){
            echo "&emsp;&emsp;&emsp;&emsp;&emsp;" . $symrow['Symptom'] . "<br>";
            }
        }else{
            echo "&emsp;&emsp;&emsp;&emsp;&emsp;No any Symptoms.<br>";
        }
        }
    
        
    }
    }
    ?>
</div>

</body>

</html>