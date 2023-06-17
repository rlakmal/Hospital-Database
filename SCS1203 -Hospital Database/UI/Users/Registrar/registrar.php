<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">


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
                        <a class="nav-link" href="../Patient/patient_login.php">Patient Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../Patient/patient_Register.php">Patient Register</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <h1 style="text-align: center; margin-bottom:20px;">Registration</h1>
    <div class="container">
        <div class="row">
            <div class="col-sm">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Patient</h5>
                        <a href="../Patient/patientRegister.php" class="btn btn-primary">Register</a>
                    </div>
                </div>
            </div>
            <div class="col-sm">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">In Patient</h5>
                        <a href="vendor_Deregister.php" class="btn btn-primary">Register</a>
                    </div>
                </div>
            </div>
            <div class="col-sm">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Out Patient</h5>
                        <a href="vendor_Deregister.php" class="btn btn-primary">Register</a>
                    </div>
                </div>
            </div>
            <div class="col-sm">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Doctor</h5>
                        <a href="vendor_Profile.php" class="btn btn-primary">Register</a>
                    </div>
                </div>
            </div>
            <div class="col-sm">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Nurse</h5>
                        <a href="vendor_Supply.php" class="btn btn-primary">Register</a>
                    </div>
                </div>
            </div>
            <div class="col-sm">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Cleaner</h5>
                        <a href="vendor_Deregister.php" class="btn btn-primary">Register</a>
                    </div>
                </div>
            </div>
            <div class="col-sm">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Attendant</h5>
                        <a href="vendor_Deregister.php" class="btn btn-primary">Register</a>
                    </div>
                </div>
            </div>
            <div class="col-sm">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Vendor</h5>
                        <a href="vendor_Deregister.php" class="btn btn-primary">Register</a>
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