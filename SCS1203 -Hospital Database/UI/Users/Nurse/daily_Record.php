<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="home.php"><img src="../../images/logo.png" width="50px" alt="logo"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="home.php">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Staff Login
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="../Doctor/doctor_login.php">Doctor</a></li>
                            <li><a class="dropdown-item" href="../nurse/nurse_login.php">Nurse</a></li>
                            <li><a class="dropdown-item"
                                    href="../Administrator/administrator_login.php">Administrator</a></li>
                            <li><a class="dropdown-item" href="../attendent/attendent_login.php">Attendent</a></li>
                            <li><a class="dropdown-item" href="../Registrar/registrar_login.php">Registrar</a></li>
                            <li><a class="dropdown-item" href="../Cleaner/cleaner_login.php">Cleaner</a></li>
                            <li><a class="dropdown-item" href="../Vendor/vendor_login.php">Vendor</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Staff Register
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="../Doctor/doctor_Register.php">Doctor</a></li>
                            <li><a class="dropdown-item" href="../nurse/nurse_Register.php">Nurse</a></li>
                            <li><a class="dropdown-item" href="../attendent/attendent_Register.php">Attendent</a></li>
                            <li><a class="dropdown-item" href="../Cleaner/cleaner_Register.php">Cleaner</a></li>
                            <li><a class="dropdown-item" href="../Vendor/vendor_Register.php">Vendor</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="nurse_login.php">Nurse Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="nurse_Register.php">Nurse Register</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <h2 style="text-align: center; margin-bottom:30px;">Enter Records about Patient</h2>
    <form style="margin-left: 30vw; width:40vw;" action="Includes/DailyRecords.inc.php" method="POST">

        <div class="mb-3">
            <label for="EmpNo" class="form-label">Employee No</label><br>
            <input type="text" class="form-control" name="EmpNo" placeholder="Employee No"><br>
        </div>
        <div class="mb-3">
            <label for="Patient_ID" class="form-label">Patient ID</label><br>
            <input type="text" class="form-control" name="EmpNo" placeholder="Employee No"><br>
        </div>
        <div class="mb-3">
            <label for="Weight" class="form-label">Weight</label><br>
            <input type="text" class="form-control" name="Weight" placeholder="Weight"><br>
        </div>
        <div class="mb-3">
            <label for="Blood_Pressure" class="form-label">Blood Pressure</label><br>
            <input type="text" class="form-control" name="Blood_Pressure" placeholder="Blood Pressure"><br>
        </div>
        <div class="mb-3">
            <label for="Temperature" class="form-label">Temperature</label><br>
            <input type="text" class="form-control" name="Temperature" placeholder="Temperature"><br>
        </div>
        <div class="mb-3">
            <label for="Pulse" class="form-label">Pulse</label><br>
            <input type="text" class="form-control" name="Pulse" placeholder="Pulse"><br>
        </div>
        <div class="mb-3">
            <label for="Record_Date" class="form-label">Record Date</label><br>
            <input type="date" class="form-control" name="Record_Date" placeholder="Record Date"><br>
        </div>
        <div class="mb-3">
            <label for="Record_Time" class="form-label">Vital Time</label><br>
            <input type="time" class="form-control" name="Record Time" placeholder="Record Time"><br>
        </div>

        <button type="submit" class="btn btn-primary" style="text-align: rig;" name="submit">Submit</button>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>