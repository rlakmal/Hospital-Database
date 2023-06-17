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
    //session_start();

    $dbServerName = "localhost";
    $dbUserName = $_POST['User_Name'];
    $dbPassword = $_POST['Password'];
    $dbName = "hospital";

    //$_SESSION['nursepassword'] = $dbPassword;
    $conn = mysqli_connect("localhost", 'root', "", 'hospital');
    //$conn = mysqli_connect($dbServerName, $dbUserName, $dbPassword, $dbName);
    if(!$conn || $dbUserName !== "Nurse"){
        sleep(3);
        echo "<br><center><b>Invalid Username or Password</b></center>";
    }else{
        header("Location: ../nurse.php");
    }
    ?>

    <center><a href="../../../index.php">OK</a></center>
</div>

</body>
</html>