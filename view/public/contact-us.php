<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact us</title>
    <link rel="stylesheet" href="../css/bootstrap-5.2.0-dist/css/bootstrap.css">
    <link rel="stylesheet" href="../fontawesome-free-5.15.4-web/css/all.min.css">
    <link rel="stylesheet" href="../css/contact-us.css">
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
            <a class="btn align-self-center border border-0" data-bs-toggle="offcanvas" href="#Live-mini" role="button" aria-controls="Live-mini">
                <i class="fa fa-bars fs-6 text-white"></i>
            </a>
            <b class="fs-2 text-white"><i>LIVE-MINI</i></b>
            <a class="btn align-self-center border border-0" data-bs-toggle="offcanvas" href="#Live-mini-search" role="button" aria-controls="Live-mini-sidebar">
                <!-- <i class="fa fa-search fs-6 text-white"></i> -->
            </a>

            <div class="offcanvas offcanvas-start " tabindex="-1" id="Live-mini" aria-labelledby="Live-miniLabel" style="width: 90%;">
                <div class="offcanvas-header mt-5">
                    <h2 id="offcanvasRightLabel" class="text-secondary"><b><i>LIVE-MINI</i></b></h2>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body p-0">
                    <ul class="list-group list-group-flush ">
                        <a href="settings.php" class="text-decoration">
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

            <!-- <div class="offcanvas offcanvas-end" tabindex="-1" id="Live-mini-search" aria-labelledby="Live-mini-search" style="width: 90%;">
                <div class="offcanvas-header mt-5">
                    <h2 id="offcanvasRightLabel" class="text-secondary"><b><i>LIVE-MINI</i></b></h2>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>

                <div class="offcanvas-body">
                    <div class="card ">
                        <div class="card-header text-start text-white fs-5" id="color">Country</div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"> <input type="search" class="form-control" placeholder="Search" aria-label="Search"></li>
                            <li class="list-group-item ms-1"><img src="../images/france.jpg" class="width"> France</li>
                            <li class="list-group-item ms-1"><img src="../images/germany.jpg" class="width"> Germany</li>
                            <li class="list-group-item ms-1"><img src="../images/italy.jpg" class="width"> Italy</li>
                            <li class="list-group-item ms-1"><img src="../images/holland.jpg" class="width"> Netherland</li>
                            <li class="list-group-item ms-1"><img src="../images/brazil.jpg" class="width"> Brazil</li>
                            <li class="list-group-item ms-1"><img src="../images/argentina.jpg" class="width"> Argentina</li>
                            <li class="list-group-item ms-1"><img src="../images/england-flag.jpg" class="width"> England</li>
                            <li class="list-group-item ms-1"><img src="../images/scotland.jpg" class="width"> Scotland</li>
                            <li class="list-group-item ms-1"><img src="../images/belgium.jpg" class="width"> Belgium</li>
                            <li class="list-group-item ms-1"><img src="../images/australia.jpg" class="width"> Australia</li>
                            <li class="list-group-item ms-1"><img src="../images/champions-league.png" class="width bg-secondary rounded"> Champions league</li>
                            <li class="list-group-item ms-1"><img src="../images/nigeria.jpg" class="width"> Nigeria</li>
                            <li class="list-group-item ms-1"><img src="../images/croatia.jpg" class="width"> Croatia</li>
                            <li class="list-group-item ms-1"><img src="../images/mexico.jpg" class="width"> Mexico</li>
                            <li class="list-group-item ms-1"><img src="../images/denmark.jpg" class="width"> Denmark</li>
                            <li class="list-group-item ms-1"><img src="../images/austria.jpg" class="width"> Austria</li>
                            <li class="list-group-item ms-1"><img src="../images/colombia.jpg" class="width"> Columbia</li>
                            <li class="list-group-item ms-1"><img src="../images/spanish-flag.jpg" class="width"> Spain</li>
                            <li class="list-group-item ms-1"><img src="../images/canada.jpg" class="width"> Canada</li>
                            <li class="list-group-item ms-1"><img src="../images/bulgaria.jpg" class="width"> Bulgaria</li>
                          </ul>
                    </div>
    
                </div>
            </div> -->
        </div>
    </div>


    <div class="container d-flex justify-content-center  align-items-center pt-3 mt-2 mb-4">
        <i class="fa fa-circle text-danger me-3" style="font-size: 10px;"></i>
        <h3>Contact us</h3>
        <i class="fa fa-circle text-danger ms-4" style="font-size: 10px;"></i>
    </div>


    <div class="container  mt-1">
        <div class="row justify-content-center">
            <!-- <div class="col-md-6 g-0 d-flex justify-content-center">
                <div class="background-image"></div>
        
            </div> -->
            <div class="col-md-6 pt-3">
                <form>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Full Name</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter your full name">
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Enter email address">
                    </div>

                    <select class="form-select mb-3" aria-label="Default select example">
                        <option selected>Select county</option>
                        <option value="1">Nigeria</option>
                        <option value="2">South africa</option>
                        <option value="3">Ghana</option>
                        <option value="3">Senegal</option>
                        <option value="3">France</option>
                        <option value="3">Portugal</option>
                    </select>

                    <div class="mb-3">
                        <label for="floatingTextarea2" class="form-label">Comments</label>
                        <textarea class="form-control" placeholder="Leave a message here" id="floatingTextarea2" style="height: 100px"></textarea>
                    </div>

                    <button class="btn btn-danger w-100 mb-3">Send</button>
                </form>
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