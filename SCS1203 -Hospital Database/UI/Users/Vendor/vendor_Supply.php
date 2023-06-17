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
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Vendor
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="vendor.php">Home</a></li>
                            <li><a class="dropdown-item" href="vendor_Profile.php">Profile</a></li>
                            <li><a class="dropdown-item" href="vendor_Supply.php">Supply</a></li>
                            <li><a class="dropdown-item" href="vendor_login.php">Login</a></li>
                            <li><a class="dropdown-item" href="vendor_Register.php">Register</a></li>
                            <li><a class="dropdown-item" href="vendor_Deregister.php">Deregister</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <h2 style="text-align: center; margin-bottom:30px;">Please Enter Informations about Supply</h2>
    <form style="margin-left: 30vw; width:40vw;" action="Includes/VendorSupply.inc.php" method="POST">
        
        <div class="mb-3">
            <label for="Registration_No" class="form-label">Registration No</label><br>
            <input type="text" class="form-control" name="Registration_No" placeholder="Registration Number"><br>
        </div>
        <div class="mb-3">
            <label for="Drug_Code" class="form-label">Drug Code</label><br>
            <input type="text" class="form-control" name="Drug_Code" placeholder="Drug Code"><br>
        </div>
        <div class="mb-3">
            <label for="Supply_Date" class="form-label">Supply Date</label><br>
            <input type="date" class="form-control" name="Supply_Date" placeholder="Supply Date"><br>
        </div>
        <div class="mb-3">
            <label for="Unit_Cost" class="form-label">Unit Cost</label><br>
            <input type="number" class="form-control" name="Unit_Cost" placeholder="Unit_Cost"><br>
        </div>
        <div class="mb-3">
            <label for="Quantity" class="form-label">Quantity</label><br>
            <input type="number" class="form-control" name="Quantity" placeholder="Quantity"><br>
        </div>
        <label for="Drug_Type" class="form-label">Drug Type</label><br><br>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="Drug_Type" value="Liquid" checked>
            <label class="form-check-label" for="radio">
                Liquid
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="Drug_Type" value="Tablet">
            <label class="form-check-label" for="radio">
                Tablet
            </label>
        </div>
        <button type="submit" class="btn btn-primary" style="text-align: rig; margin-left: 30vw;">Submit</button>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>
</body>

</html>