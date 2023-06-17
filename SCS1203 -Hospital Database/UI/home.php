<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suwa Sahana Hospital</title>
    <link rel="stylesheet" type="text/css" href="stylehome.php">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body> 

    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="home.php"><img src="images/logo.png" width="50px" alt="logo"></a>
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
                            <li><a class="dropdown-item" href="Users\Doctor\doctor_login.php">Doctor</a></li>
                            <li><a class="dropdown-item" href="Users\Nurse\nurse_login.php">Nurse</a></li>
                            <li><a class="dropdown-item"
                                    href="Users\Administrator\administrator_login.php">Administrator</a></li>
                            <li><a class="dropdown-item" href="Users\Attendent\attendent_login.php">Attendent</a></li>
                            <li><a class="dropdown-item" href="Users\Registrar\registrar_login.php">Registrar</a></li>
                            <li><a class="dropdown-item" href="Users\Cleaner\cleaner_login.php">Cleaner</a></li>
                            <li><a class="dropdown-item" href="Users\Vendor\vendor_login.php">Vendor</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Staff Register
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="users/Doctor/doctor_Register.php">Doctor</a></li>
                            <li><a class="dropdown-item" href="users/Nurse/nurse_Register.php">Nurse</a></li>
                            <li><a class="dropdown-item" href="users/Attendent/attendent_Register.php">Attendent</a></li>
                            <li><a class="dropdown-item" href="users/Cleaner/cleaner_Register.php">Cleaner</a></li>
                            <li><a class="dropdown-item" href="users/Vendor/vendor_Register.php">Vendor</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="users/Patient/patient_login.php">Patient Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="users/Patient/patient_Register.php">Patient Register</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-sm">
                <div class="card" style="width: 18rem;">
                    <img src="images/patient_login.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Patient</h5>
                        <a href="Users\Patient\patient_login.php" class="btn btn-primary">Login</a>
                    </div>
                </div>
            </div>
            <div class="col-sm">
                <div class="card" style="width: 18rem;">
                    <img src="images/doctor_login.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Doctor</h5>
                        <a href="Users\Doctor\doctor_login.php" class="btn btn-primary">Login</a>
                    </div>
                </div>
            </div>
            <div class="col-sm">
                <div class="card" style="width: 18rem;">
                    <img src="images/nurse_login.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Nurse</h5>
                        <a href="Users\Nurse\nurse_login.php" class="btn btn-primary">Login</a>
                    </div>
                </div>
            </div>
            <div class="col-sm">
                <div class="card" style="width: 18rem;">
                    <img src="images/administrator_login.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Administrator</h5>
                        <a href="Users\Administrator\administrator_login.php" class="btn btn-primary">Login</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container" style="margin-top: 5px;">
        <div class="row">
            <div class="col-sm">
                <div class="card" style="width: 18rem;">
                    <img src="images/attendant_login.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Attendant</h5>
                        <a href="Users\Attendent\attendent_login.php" class="btn btn-primary">Login</a>
                    </div>
                </div>
            </div>
            <div class="col-sm">
                <div class="card" style="width: 18rem;">
                    <img src="images/registrar_login.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Registrar</h5>
                        <a href="Users\Registrar\registrar_login.php" class="btn btn-primary">Login</a>
                    </div>
                </div>
            </div>
            <div class="col-sm">
                <div class="card" style="width: 18rem;">
                    <img src="images/cleaner_login.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Cleaner</h5>
                        <a href="Users\Cleaner\cleaner_login.php" class="btn btn-primary">Login</a>
                    </div>
                </div>
            </div>
            <div class="col-sm">
                <div class="card" style="width: 18rem;">
                    <img src="images/vendor_login.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Vendor</h5>
                        <a href="Users\Vendor\vendor_login.php" class="btn btn-primary">Login</a>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>
</body>

</html>