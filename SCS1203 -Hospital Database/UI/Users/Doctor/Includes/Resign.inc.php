<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="../../styleloginerror.php">

</head>
<body>
    
<div class="output">
    <?php
    include_once '../../../Includes/dbhdoctor.inc.php';

    if(isset($_POST['submit'])){

    $empno = $_POST['EmpNo'];

    $sql = "SELECT * FROM patient_care_unit WHERE EmpNo = '$empno';";
    $result = mysqli_query($conn, $sql);
    $resutlcheck;
    if($result){
        $resutlcheck = mysqli_num_rows($result);
    }

    if($resutlcheck > 0){
        sleep(3);
        echo "<br><center><b>You Can't just resign. You are incharge of PCU</b></center>";
    }else{
    //
    $sql1 = "DELETE FROM employee WHERE EmpNo = '$empno';";
    mysqli_query($conn, $sql1);
   
    echo $empno;

    header("Location: ../doctorResign.php");
    }


    
    }
    ?>

    <center><a href="../../../index.php">OK</a></center>
</div>

</body>

</html>