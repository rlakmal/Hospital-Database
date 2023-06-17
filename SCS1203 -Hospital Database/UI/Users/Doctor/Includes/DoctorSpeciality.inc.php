<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="../../styleforms.php">
</head>
<body>
  <div class="home">
    <h4><a href="http://localhost/System/index.php"> Home </a></h4>
  </div>
    <center><h2>Fill This Form To Fill Speciality Areas</h2></center>
<div class="form">
    <form action="DoctorSpecialities.inc.php" method="post">
        <label for="Speciality_Area">Speciality Area</label><br>
        <input type="text" name="Speciality_Area" placeholder="Enter Specialities one by one"><br>
        
        
        <button type="submit" name="submit">Submit</button>


    </form>
    <form action="../../Registar/registar.php" method="post">

        <center><button type="submit" name="submit">OK</button></center>

    </form>
</div>
</body>

</html>