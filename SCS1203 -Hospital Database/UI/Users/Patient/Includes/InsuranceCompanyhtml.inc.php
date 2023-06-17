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
    <center><h2>Insurance Company Details (if any)</h2></center>
<div class="form">
    <form action="InsuranceCompany.inc.php" method="post">
    <label><b><h3>Insurance Company Details</h3></b></label><br>

        <label for="Company_Name">Company Name</label><br>
        <input type="text" name="Company_Name" placeholder="Company Name"><br>

        <label for="Company_Address">Company Address</label><br>
        <input type="text" name="Company_Address" placeholder="Company Address"><br>

        <label for="Branch_Name">Branch Name</label><br>
        <input type="text" name="Branch_Name" placeholder="Branch Name"><br>

        <label for="Branch_Address">Branch Address</label><br>
        <input type="text" name="Branch_Address" placeholder="Branch Address"><br>

        <label for="IContact_No">Contact No</label><br>
        <input type="text" name="IContact_No" placeholder="Contact Number"><br>

        <label><b><h3>Insurance Subscriber Details</h3></b></label><br>

        <label for="SFname">First Name</label><br>
        <input type="text" name="SFname" placeholder="First Name"><br>

        <label for="SLname">Last Name</label><br>
        <input type="text" name="SLname" placeholder="Last Name"><br>

        <label for="SAddress">Address</label><br>
        <input type="text" name="SAddress" placeholder="Address"><br>

        <label for="SRelationship">Relationship</label><br>
        <input type="text" name="SRelationship" placeholder="Relationship"><br>

        <label for="SContact_No">Contact No</label><br>
        <input type="text" name="SContact_No" placeholder="Contact Number"><br>

        <button type="submit" name="submitin">Submit</button>


    </form>
    <form action="../../Registar/registar.php" method="post">

        <center><button type="submit" name="submit">OK</button></center>

    </form>
</div>
</body>

</html>