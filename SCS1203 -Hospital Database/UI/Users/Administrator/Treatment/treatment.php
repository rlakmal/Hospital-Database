<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
<nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="../../../home.php"><img src="../../../images/logo.png" width="50px" alt="logo"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="../../../home.php">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Staff Login
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="../../Doctor/doctor_login.php">Doctor</a></li>
                            <li><a class="dropdown-item" href="../../nurse/nurse_login.php">Nurse</a></li>
                            <li><a class="dropdown-item"
                                    href="../../Administrator/administrator_login.php">Administrator</a></li>
                            <li><a class="dropdown-item" href="../../attendent/attendent_login.php">Attendent</a></li>
                            <li><a class="dropdown-item" href="../../Registrar/registrar_login.php">Registrar</a></li>
                            <li><a class="dropdown-item" href="../../Cleaner/cleaner_login.php">Cleaner</a></li>
                            <li><a class="dropdown-item" href="../../Vendor/vendor_login.php">Vendor</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Staff Register
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="../../Doctor/doctor_Register.php">Doctor</a></li>
                            <li><a class="dropdown-item" href="../../nurse/nurse_Register.php">Nurse</a></li>
                            <li><a class="dropdown-item" href="../../attendent/attendent_Register.php">Attendent</a></li>
                            <li><a class="dropdown-item" href="../../Cleaner/cleaner_Register.php">Cleaner</a></li>
                            <li><a class="dropdown-item" href="../../Vendor/vendor_Register.php">Vendor</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="administrator_login.php">Doctor Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <center><div class="wrapper">
    <div class="content">
        <center><h1>Treatment</h1></center>
    </div>
    <center><div class="levels">
        <a href="addtreatment.php" class="btn btn-primary" style="margin-bottom: 3px;"> Add </a><br>
        <a href="deletetreatment.php" class="btn btn-primary" style="margin-bottom: 3px;"> Delete </a><br>
        <a href="Includes/viewalltreatment.inc.php" class="btn btn-primary" style="margin-bottom: 3px;"> View All </a><br>
        
    </div></center>
    </div></center>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>