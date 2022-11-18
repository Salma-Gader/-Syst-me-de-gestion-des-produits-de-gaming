<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.0/css/fontawesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../assets/style.css">
    <title>Dasshboard</title>
</head>

<body class="dash-body">
    <!--start sidebar-->
    <!--
    <div class="navigation">
        <ul>
            <li>
                <span><img src="../assets/img/logo.png" class="img-fluid" width="100px" alt="logo"></span>
            </li>
            <li>
                <a href="#">
                    <span class="icon"><i class="bi bi-person-circle"></i></span>
                    <span class="title">Profile</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="icon"><i class="bi bi-card-heading"></i></span>
                    <span class="title">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="icon"><i class="bi bi-plus-circle-fill"></i></span>
                    <span class="title">Add product</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="icon"><i class="bi bi-box-arrow-right"></i></span>
                    <span class="title">Sign out</span>
                </a>
            </li>
        </ul>
    </div>
    <div class="toggle"></div>-->
    <!--end sidebar-->
    <!--start navbar-->
    <nav class="navbar navbar-expand-lg" style="background-color: #3E6D9C;">
        <div class="container-fluid">
            <div>
                <img src="../assets/img/logo.png" class="img-fluid" width="100px" alt="logo">
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active text-white" aria-current="page" href="#">Products</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link active text-white" href="#">profile</a>
                    </li>
                </ul>
                <span class="navbar-text">
                    <button class="btn-signout btn btn btn-outline-dark text-white">Add product <i class="bi bi-plus"></i></button>
                </span>
                <span class="navbar-text ms-5">
                    <button class="btn-signout btn btn btn-outline-dark text-white">Sign out <i class="bi bi-box-arrow-right"></i></button>
                </span>
            </div>
        </div>
    </nav>
    <!---end navbar-->
    <!--start dashboard-->
    <section class="d-flex flex-row min-vh-100 mt-5">
        <div class="container">
            <div class="row mx-auto">
                <div class="card col-md col-12 m-2 " style="background-color: #a66dd4">
                    <div class="card-body">
                        <h3 class="card-title text-center text-white">Totale Products</h3>
                        <h1 class="card-text text-center text-white">0</h1>
                    </div>
                </div>
                <div class="card col-md col-12 m-2" style="background-color: #3b76ef;">
                    <div class="card-body">
                        <h3 class="card-title text-center text-white">Products in stock</h3>
                        <h1 class="card-text text-center text-white">0</h1>
                    </div>
                </div>
                <div class="card col-md col-12 m-2" style="background-color: #63c7ff">
                    <div class="card-body">
                        <h3 class="card-title text-center text-white">Products out stock</h3>
                        <h1 class="card-text text-center text-white">0</h1>
                        <div>
                        </div>
                    </div>
                </div>
                <div class="product-table container mt-5 table-responsive">
                    <table class="tabl-e table">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Image</th>
                                <th scope="col">Name</th>
                                <th scope="col">Description</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Price</th>
                                <th scope="col"></th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td><img src="../assets/img/clavier (1).png" class="card-img-top" alt="Product" class="img-fluid" height="80" width="70px"></td>
                                <td>keyboard</td>
                                <td>keyboard gaming E50 ENET (AZERTY)</td>
                                <td>100</td>
                                <td>190$</td>
                                <td><a href="#"><i class="bi bi-trash3-fill"></i></a></td>
                                <td><a href="#"><i class="bi bi-pencil-square"></i></a></td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td><img src="../assets/img/mouse.png" class="card-img-top" alt="Product" class="img-fluid" height="80" width="70px"></td>
                                <td>Mouse</td>
                                <td>M8 Wireless Ultra-Light Gaming Mouse - Black</td>
                                <td>160</td>
                                <td>99$</td>
                                <td><a href="#"><i class="bi bi-trash3-fill"></i></a></td>
                                <td><a href="#"><i class="bi bi-pencil-square"></i></a></td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td><img src="../assets/img/GLADIATOR.png" class="card-img-top" alt="Product" class="img-fluid" height="80" width="70px"></td>
                                <td>Gladiator</td>
                                <td>GLADIATOR G001-NW</td>
                                <td>200</td>
                                <td>279$</td>
                                <td><a href="#"><i class="bi bi-trash3-fill"></i></a></td>
                                <td><a href="#"><i class="bi bi-pencil-square"></i></a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>


    </section>
    <!--end dashboard-->
</body>

</html>