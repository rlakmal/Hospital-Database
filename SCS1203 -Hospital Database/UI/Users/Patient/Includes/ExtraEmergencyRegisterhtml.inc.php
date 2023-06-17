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
    <center><h2>Extra Emergency Details (if any)</h2></center>
<div class="form">
    <form action="ExtraEmergencyRegister.inc.php" method="post">
    <label><b><h3>Emergency Contact Details</h3></b></label><br>

    <label for="EFname">First Name</label><br>
    <input type="text" name="EFname" placeholder="First Name"><br>

    <label for="ELname">Last Name</label><br>
    <input type="text" name="ELname" placeholder="Last Name"><br>

    <label for="EAddress">Address</label><br>
    <input type="text" name="EAddress" placeholder="Address"><br>

    <label for="ERelationship">Relationship</label><br>
    <input type="text" name="ERelationship" placeholder="Relationship"><br>

    <label for="EContact_No">Contact No</label><br>
    <input type="text" name="EContact_No" placeholder="Contact Number"><br>

    <button type="submit" name="submitin">Submit</button>


    </form>
    <form action="InsuranceCompanyhtml.inc.php" method="post">

        <center><button type="submit" name="submit">OK</button></center>

    </form>
</div>
</body>

</html>