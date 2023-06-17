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
                        <a class="nav-link" href="doctor_login.php">Doctor Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="doctor_Register.php">Doctor Register</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <h2 style="text-align: center; margin-bottom:30px;">Please Enter your Informations To Register</h2>
    <form style="margin-left: 30vw; width:40vw;" action="Includes/Register.inc.php" method="POST">

        <div class="mb-3">
            <label for="Name" class="form-label">Full Name</label><br>
            <input type="text" class="form-control" name="Name" placeholder="Full Name"><br>
        </div>
        <div class="mb-3">
            <label for="Address" class="form-label">Address</label><br>
            <input type="date" class="form-control" name="Address" placeholder="Address"><br>
        </div>
        <div class="mb-3">
            <label for="Working_Status" class="form-label">Working Status</label><br>
            Full-Time: <input type="radio" name="Working_Status" value="Full-Time">
            Part-Time: <input type="radio" name="Working_Status" value="Part-Time"><br><br>
        </div>

        <div class="mb-3">
            <label for="Contact_No" class="form-label">Contact No</label><br>
            <input type="text" class="form-control" name="Contact_No" placeholder="Contact No"><br>
        </div>
        <div class="mb-3">
            <label for="Joined_Date" class="form-label">Joined Date</label><br>
            <input type="date" class="form-control" name="Joined_Date" placeholder="Joined Date"><br>
        </div>
        <div class="mb-3">
            <label for="Resign_Date" class="form-label">Resign Date</label><br>
            <input type="date" class="form-control" name="Resign_Date" placeholder="Resign Date"><br>
        </div>
        <div class="mb-3">
            <label for="Council_RegNo" class="form-label">Council Registration No</label><br>
            <input type="text" class="form-control" name="Council_RegNo" placeholder="Registration No"><br>
        </div>
        <div class="mb-3">
            <label for="DEANo" class="form-label">DEA No</label><br>
            <input type="text" class="form-control" name="DEANo" placeholder="DEA No"><br>
        </div>

        <button type="submit" class="btn btn-primary" style="text-align: rig;" name="submit">Submit</button>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>


</html>