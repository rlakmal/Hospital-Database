<?php
include_once '../../../Includes/dbhpatient.inc.php';
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

    <center><h2>Your Profile Information</h2></center>

    <?php
    if(isset($_POST['submit'])){
    $patientid = $_POST['Patient_ID'];


    //can display only common details
    $sql1 = "SELECT * FROM patient Where Patient_ID = $patientid";
    $result = mysqli_query($conn, $sql1);
    $resultcheck = mysqli_num_rows($result);
    
    if($resultcheck > 0){
        
        while($row = mysqli_fetch_assoc($result)){
        if(isset($row['Patient_ID'])){
        echo "Patient ID No : " . $row['Patient_ID'] . "<br>";
        }
        if(isset($row['Name'])){
        echo "Patient Name : " . $row['Name'] . "<br>";
        }
        if(isset($row['Arrival_Date'])){
        echo "Arrival Date : " . $row['Arrival_Date'] . "<br>";
        }
        if(isset($row['Arrival_Time'])){
        echo "Arrival Time : " . $row['Arrival_Time'] . "<br>";
        }
        if(isset($row['Admitted_Date'])){
        echo "Admitted Date : " . $row['Admitted_Date'] . "<br>";
        }
        if(isset($row['Admitted_Time'])){
        echo "Admitted Time : " . $row['Admitted_Time'] . "<br>";
        }
        if(isset($row['Discharged_Date'])){
        echo "Discharged Date : " . $row['Discharged_Date'] . "<br>";
        }
        if(isset($row['Discharged_Time'])){
        echo "Discharged Time : " . $row['Discharged_Time'] . "<br>";
        }
        if(isset($row['Weight'])){
        echo "Weight : " . $row['Weight'] . " Kg<br>";
        }
        if(isset($row['Blood_Pressure'])){
        echo "Blood Pressure : " . $row['Blood_Pressure'] . " mmHg<br>";
        }
        if(isset($row['Temperature'])){
        echo "Temperature : " . $row['Temperature'] . " Celsius<br>";
        }
        if(isset($row['Pulse'])){
        echo "Pulse : " . $row['Pulse'] . " bpm<br>";
        }
        if(isset($row['Vital_Date'])){
        echo "Vital Date : " . $row['Vital_Date'] . "<br>";
        }
        if(isset($row['Vital_Time'])){
        echo "Vital Time : " . $row['Vital_Time'] . "<br>";
        }
        echo "Patient Status : ";
        if(isset($row['In_Flag'])){
            if($row['In_Flag'] == "YES"){
                echo "&emsp;In Patient<br>";
            }
        }
        if(isset($row['Out_Flag'])){
            if($row['Out_Flag'] == "YES"){
                echo "&emsp;Out Patient<br>";
            }
        }
        if(isset($row['Admitted_doctor'])){
        echo "<br>Admitted Doctor ID : " . $row['Admitted_doctor'] . "<br>";
        }
        if(isset($row['Company_Name'])){
        echo "Insurance Company Name : " . $row['Company_Name'] . "<br>";
        }
        if(isset($row['Ward_No'])){
        echo "Ward No : " . $row['Ward_No'] . "<br>";
        }
        }
        
    }

    //can display only emergency details
    $sql2 = "SELECT * FROM emergency_contact Where Patient_ID = $patientid";
    $result2 = mysqli_query($conn, $sql2);
    $resultcheck2;
    if($result2){
        $resultcheck2 = mysqli_num_rows($result2);
    }
    
    if($resultcheck2 > 0){
        
        while($row = mysqli_fetch_assoc($result2)){
        if(isset($row['Fname']) && isset($row['Lname'])){
        echo "Emergency Contact Name : " . $row['Fname'] . " " . $row['Lname'] . "<br>";
        }
        if(isset($row['Address'])){
        echo "Emergency Contact Address : " . $row['Address'] . "<br>";
        }
        if(isset($row['Relationship'])){
        echo "Emergency Contact Relationship : " . $row['Relationship'] . "<br>";
        }
        if(isset($row['Contact_No'])){
        echo "Emergency Contact Contact No : " . $row['Contact_No'] . "<br>";
        }
        }
        
    }

    //can display only insurance details
    $sql3 = "SELECT * FROM insurance_company Where Patient_ID = $patientid";
    $result3 = mysqli_query($conn, $sql3);
    $resultcheck3;
    if($result3){
        $resultcheck3 = mysqli_num_rows($result3);
    }
    
    if($resultcheck3 > 0){
        
        while($row = mysqli_fetch_assoc($result3)){
        if(isset($row['Company_Name'])){
        echo "Insurance Company Name : " . $row['Company_Name'] . "<br>";
        }
        if(isset($row['Branch_Name'])){
        echo "Insurance Company Branch Name : " . $row['Branch_Name'] . "<br>";
        }
        if(isset($row['Branch_Address'])){
        echo "Insurance Company Branch Address : " . $row['Branch_Address'] . "<br>";
        }
        if(isset($row['Company_Address'])){
        echo "Insurance Company Address : " . $row['Company_Address'] . "<br>";
        }
        if(isset($row['Contact_No'])){
        echo "Insurance Company Contact No : " . $row['Contact_No'] . "<br>";
        }
        }
        
    }

    //can display only insurance subscriber details
    $sql4 = "SELECT * FROM insurance_subscriber Where Patient_ID = $patientid";
    $result4 = mysqli_query($conn, $sql4);
    $resultcheck4;
    if($result4){
        $resultcheck4 = mysqli_num_rows($result4);
    }
    
    if($resultcheck3 > 0){
        
        while($row = mysqli_fetch_assoc($result4)){
        if(isset($row['Fname'])){
        echo "Insurance Subscriber Name : " . $row['Fname'] . " " . $row['Lname'] . "<br>";
        }
        if(isset($row['Relationship'])){
        echo "Insurance Subscriber Relationship : " . $row['Relationship'] . "<br>";
        }
        if(isset($row['Address'])){
        echo "Insurance Subscriber Address : " . $row['Address'] . "<br>";
        }
        if(isset($row['Contact_No'])){
        echo "Insurance Subscriber Contact No : " . $row['Contact_No'] . "<br>";
        }
        }
        
    }
    }
    ?>
</div>

</body>

</html>