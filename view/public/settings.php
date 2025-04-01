<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Settings</title>
    <link rel="stylesheet" href="../css/bootstrap-5.2.0-dist/css/bootstrap.css">
    <link rel="stylesheet" href="../fontawesome-free-5.15.4-web/css/all.min.css">
    <link rel="stylesheet" href="../css/settings.css">
    <link rel="stylesheet" href="../css/font-size-media-query.css">
</head>
<body>
    <nav class="nav sticky-top d-none d-lg-flex align-items-center" id="color">
        <div class="container d-flex ">
                <b class="fs-2 p-3 text-white"><i>LIVE-MINI</i></b>
            <ul class="nav  d-flex justify-content-center align-items-center  w-75">
                <li class="nav-item">
                    <a class="nav-link text-color rounded me-5" href="home.php"><i class="fa fa-futbol me-2"></i>Football</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-color rounded me-5" href="news2.php"><i class="fa fa-hdd me-2"></i>News</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-color rounded me-5" href="favorites.php"><i class="fa fa-star me-2"></i>Favorite</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-color rounded me-5" href="streams.php"><i class="fa fa-tv me-2"></i>Streams</a>
                </li>
            </ul>
            <a class="btn align-self-center border border-0" data-bs-toggle="offcanvas" href="#Live-mini-sidebar" role="button" aria-controls="Live-mini-sidebar">
                <i class="fa fa-bars fs-6 text-white"></i>
            </a>

            <div class="offcanvas offcanvas-end " tabindex="-1" id="Live-mini-sidebar" aria-labelledby="Live-mini-sidebarLabel">
                <div class="offcanvas-header mt-5">
                    <h2 id="offcanvasRightLabel" class="text-secondary"><b><i>LIVE-MINI</i></b></h2>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body p-0">
                    <div class="card border border-0">
                        <ul class="list-group list-group-flush">
                            <a href="#" class="text-decoration">
                                <li class="list-group-item border border-0 fs-5 text-secondary text-dec"><i class="fa fa-cog"></i><span class="ms-2">Settings</span></li>
                            </a>
                            <a href="#" class="text-decoration">
                                <li class="list-group-item border border-0 fs-5 text-secondary text-dec"><i class="fa fa-question-circle"><span class="ms-2">FAQ</span></i></li>
                            </a>
                            <a href="#" class="text-decoration">
                                <li class="list-group-item border border-0 fs-5 text-secondary text-dec"><i class="fa fa-lock"></i><span class="ms-2 ps-1">Privacy policy</span></li>
                            </a>
                            <a href="contact-us.php" class="text-decoration">
                                <li class="list-group-item border border-0 fs-5 text-secondary text-dec"><i class="fa fa-hand-point-right"></i><span class="ms-2 ps-1">Contact us</span></li>
                            </a>
                        </ul>
                    </div>
                    <hr>
                   <div class="w-100 d-flex justify-content-center">
                        <img src="../images/signature.png">
                   </div>
                   <div class="w-100 d-flex justify-content-center align-items-center flex-column">
                       <span>Cristiano Ronaldo</span>
                       <span><i>Live-mini</i> ambassador</span>
                   </div>
                </div>
            </div>
        </div>
    </nav>


    <div class="nav sticky-top d-lg-none  d-flex align-items-center p-3" id="color">
        <div class="container d-flex justify-content-between">
            <a class="btn align-self-center border border-0" data-bs-toggle="offcanvas" href="#" role="button" aria-controls="Live-mini-sidebar">
                <i class="fa fa-bars fs-6 text-white"></i>
            </a>
            <b class="fs-2 text-white"><i>LIVE-MINI</i></b>
            <a class="btn align-self-center border border-0" data-bs-toggle="offcanvas" href="#" role="button" aria-controls="Live-mini-sidebar">
                <i class="fa fa-search fs-6 text-white"></i>
            </a>
        </div>
    </div>

    <div class="container d-flex justify-content-center  align-items-center pt-3 mt-2 mb-4">
        <i class="fa fa-circle text-danger me-3" style="font-size: 10px;"></i>
        <h3>Settings</h3>
        <i class="fa fa-circle text-danger ms-4" style="font-size: 10px;"></i>
    </div>

    <div class="container  mt-1">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-6 border p-5">
                <div class="form">
                    <label for="exampleFormControlInput1" class="form-label">Timezone</label>
                    <select class="form-select mb-3" aria-label="Default select example">
                        <option selected>UTC -07:00</option>
                        <option value="1">UTC -07:00</option>
                        <option value="2">UTC -07:00</option>
                        <option value="3">UTC -07:00</option>
                        <option value="3">UTC -07:00</option>
                        <option value="3">UTC -07:00</option>
                        <option value="3">UTC -07:00</option>
                    </select>

                    <div class="mb-3">
                        <input class="form-control" type="text" value="Select your Preferred Timezone" aria-label="Disabled input example" disabled readonly>
                    </div>

                    <button class="btn btn-danger w-100">Apply</button>
                    
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid border-top fixed-bottom bg-white d-block d-lg-none pt-2 pb-2">
        <div class="row">
            <div class="col d-flex justify-content-center">
                <a href="../index.php" class="d-flex flex-column align-items-center link-none text-secondary">
                    <i class="fa fa-futbol"></i>
                    <span>Football</span>
                </a>
            </div>
            <div class="col d-flex justify-content-center">
                <a href="news2.php" class="d-flex flex-column align-items-center link-none text-secondary">
                    <i class="fa fa-hdd"></i>
                    <span>News</span>
                </a>
            </div>
            <div class="col d-flex justify-content-center">
                <a href="favorites.php" class="d-flex flex-column align-items-center link-none text-secondary">
                    <i class="fa fa-star"></i>
                    <span>Favorite</span>
                </a>
            </div>
            <div class="col d-flex justify-content-center">
                <a href="streams.php" class="d-flex flex-column align-items-center link-none text-secondary">
                    <i class="fa fa-tv"></i>
                    <span>Streams</span>
                </a>
            </div>
        </div>
    </div>

    <script src="../css/bootstrap-5.2.0-dist/js/bootstrap.js"></script>
</body>
</html>