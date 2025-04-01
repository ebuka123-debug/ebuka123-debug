<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Streams</title>
    <link rel="stylesheet" href="/view/css/bootstrap-5.2.0-dist/css/bootstrap.css">
    <link rel="stylesheet" href="/view/fontawesome-free-5.15.4-web/css/all.min.css">
    <link rel="stylesheet" href="/view/css/streams.css">
    <link rel="stylesheet" href="/view/css/font-size-media-query.css">
</head>
<body>
    <nav class="nav sticky-top d-none d-lg-flex align-items-center" id="color">
        <div class="container d-flex ">
                <b class="fs-2 p-3 text-white"><i>LIVE-MINI</i></b>
            <ul class="nav  d-flex justify-content-center align-items-center  w-75">
                <li class="nav-item">
                    <a class="nav-link text-color rounded me-5" href="<?= RouteUri("football","matches")?>"><i class="fa fa-futbol me-2"></i>Football</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-color rounded me-5" href="<?=RouteUri("news","latestnews")?>"><i class="fa fa-hdd me-2"></i>News</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-color rounded me-5" href="<?=RouteUri("football","favorites")?>"><i class="fa fa-star me-2"></i>Favorite</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active text-secondary rounded bg-white me-5" href="<?=RouteUri("streams","watchmatch")?>"><i class="fa fa-tv me-2"></i>Streams</a>
                </li>
            </ul>
            <a class="btn align-self-center border border-0" data-bs-toggle="offcanvas" href="#Live-mini-sidebar" role="button" aria-controls="Live-mini-sidebar">
                <i class="fa fa-bars fs-6 text-white"></i>
            </a>

            <div class="offcanvas offcanvas-end" tabindex="-1" id="Live-mini-sidebar" aria-labelledby="Live-mini-sidebarLabel">
                <div class="offcanvas-header">
                    <h2 id="offcanvasRightLabel" class="footer-content-color"><b><i>LIVE-MINI</i></b></h2>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body p-0" id="color">
                    <!-- <div class="card border border-0 bg bg-primary"> -->
                        <ul class="list-group list-group-flush ">
                            <a href="settings" class="text-decoration">
                                <li class="list-group-item border border-0 fs-5 text-secondary text-dec"><i class="fa fa-cog"></i><span class="ms-2">Settings</span></li>
                            </a>
                            <a href="#" class="text-decoration">
                                <li class="list-group-item border border-0 fs-5 text-secondary text-dec"><i class="fa fa-question-circle"><span class="ms-2">FAQ</span></i></li>
                            </a>
                            <a href="#" class="text-decoration">
                                <li class="list-group-item border border-0 fs-5 text-secondary text-dec"><i class="fa fa-lock"></i><span class="ms-2 ps-1">Privacy policy</span></li>
                            </a>
                            <a href="contact-us" class="text-decoration">
                                <li class="list-group-item border border-0 fs-5 text-secondary text-dec"><i class="fa fa-hand-point-right"></i><span class="ms-2 ps-1">Contact us</span></li>
                            </a>
                        </ul>
                    <!-- </div> -->
                    <hr>
                   <div class="w-100 d-flex justify-content-center">
                        <img src="/view/images/signature.png">
                   </div>
                   <div class="w-100 d-flex justify-content-center align-items-center flex-column">
                       <span class="text-white">Cristiano Ronaldo</span>
                       <span class="text-white"><i>Live-mini</i> ambassador</span>
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
                <i class="fa fa-search fs-6 text-white"></i>
            </a>

            <div class="offcanvas offcanvas-start " tabindex="-1" id="Live-mini" aria-labelledby="Live-miniLabel" style="width: 90%;">
                <div class="offcanvas-header mt-5">
                    <h2 id="offcanvasRightLabel" class="text-secondary"><b><i>LIVE-MINI</i></b></h2>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body p-0">
                    <ul class="list-group list-group-flush ">
                        <a href="settings" class="text-decoration">
                            <li class="list-group-item border border-0 fs-5 text-secondary text-dec"><i class="fa fa-cog"></i><span class="ms-2">Settings</span></li>
                        </a>
                        <a href="#" class="text-decoration">
                            <li class="list-group-item border border-0 fs-5 text-secondary text-dec"><i class="fa fa-question-circle"><span class="ms-2">FAQ</span></i></li>
                        </a>
                        <a href="#" class="text-decoration">
                            <li class="list-group-item border border-0 fs-5 text-secondary text-dec"><i class="fa fa-lock"></i><span class="ms-2 ps-1">Privacy policy</span></li>
                        </a>
                        <a href="contact-us" class="text-decoration">
                            <li class="list-group-item border border-0 fs-5 text-secondary text-dec"><i class="fa fa-hand-point-right"></i><span class="ms-2 ps-1">Contact us</span></li>
                        </a>
                    </ul>
                    <hr>
                   <div class="w-100 d-flex justify-content-center">
                        <img src="/view/images/signature.png">
                   </div>
                   <div class="w-100 d-flex justify-content-center align-items-center flex-column">
                       <span>Cristiano Ronaldo</span>
                       <span><i>Live-mini</i> ambassador</span>
                   </div>
                </div>
            </div>

            <div class="offcanvas offcanvas-end" tabindex="-1" id="Live-mini-search" aria-labelledby="Live-mini-search" style="width: 90%;">
                <div class="offcanvas-header mt-5">
                    <h2 id="offcanvasRightLabel" class="text-secondary"><b><i>LIVE-MINI</i></b></h2>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>

                <div class="offcanvas-body">
                    <div class="card ">
                        <div class="card-header text-start text-white fs-5" id="color">Country</div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"> <input type="search" class="form-control" placeholder="Search" aria-label="Search"></li>
                            <li class="list-group-item ms-1"><img src="/view/images/france.jpg" class="width"> France</li>
                            <li class="list-group-item ms-1"><img src="/view/images/germany.jpg" class="width"> Germany</li>
                            <li class="list-group-item ms-1"><img src="/view/images/italy.jpg" class="width"> Italy</li>
                            <li class="list-group-item ms-1"><img src="/view/images/holland.jpg" class="width"> Netherland</li>
                            <li class="list-group-item ms-1"><img src="/view/images/brazil.jpg" class="width"> Brazil</li>
                            <li class="list-group-item ms-1"><img src="/view/images/argentina.jpg" class="width"> Argentina</li>
                            <li class="list-group-item ms-1"><img src="/view/images/england-flag.jpg" class="width"> England</li>
                            <li class="list-group-item ms-1"><img src="/view/images/scotland.jpg" class="width"> Scotland</li>
                            <li class="list-group-item ms-1"><img src="/view/images/belgium.jpg" class="width"> Belgium</li>
                            <li class="list-group-item ms-1"><img src="/view/images/australia.jpg" class="width"> Australia</li>
                            <li class="list-group-item ms-1"><img src="/view/images/champions-league.png" class="width bg-secondary rounded"> Champions league</li>
                            <li class="list-group-item ms-1"><img src="/view/images/nigeria.jpg" class="width"> Nigeria</li>
                            <li class="list-group-item ms-1"><img src="/view/images/croatia.jpg" class="width"> Croatia</li>
                            <li class="list-group-item ms-1"><img src="/view/images/mexico.jpg" class="width"> Mexico</li>
                            <li class="list-group-item ms-1"><img src="/view/images/denmark.jpg" class="width"> Denmark</li>
                            <li class="list-group-item ms-1"><img src="/view/images/austria.jpg" class="width"> Austria</li>
                            <li class="list-group-item ms-1"><img src="/view/images/colombia.jpg" class="width"> Columbia</li>
                            <li class="list-group-item ms-1"><img src="/view/images/spanish-flag.jpg" class="width"> Spain</li>
                            <li class="list-group-item ms-1"><img src="/view/images/canada.jpg" class="width"> Canada</li>
                            <li class="list-group-item ms-1"><img src="/view/images/bulgaria.jpg" class="width"> Bulgaria</li>
                          </ul>
                    </div>
    
                </div>
            </div>
        </div>
    </div>

<div class="container-fluid bg-white mt-2 d-md-none">
    <div class="navbar2 border-bottom">
        <div class="p-2 me-1 my-color text-danger bottom-border fit-content">
            Premier league
        </div>
        <div class="p-2 me-1 fit-content">
            la liga
        </div>
        <div class=" p-2 me-1 fit-content">
            Serie A
        </div>
        <div class="p-2 me-1 fit-content">
            Ligue 1
        </div>
        <div class="p-2 me-1 fit-content">
            Bundesliga
        </div>
        <div class="p-2 me-1 fit-content">
            Uefa Champions league
        </div>
        <div class="p-2 me-1 fit-content">
            Uefa europa league
        </div>
        <div class="p-2 me-1 fit-content">
            Uefa europa conference league
        </div>
        <div class="p-2 me-1 fit-content">
            Uefa nations league
        </div>
        <div class="p-2 me-1 fit-content">
            FIFA World cup
        </div>
    </div>
</div>

<div class="container mt-3 bg-white">
    
<ul class="nav d-none d-md-flex justify-content-center border-bottom border-2 pt-1  pb-1bg-light ">
    <li class="nav-item  on-hover  me-md-1">
      <a class="nav-link  text-danger bottom-border" href="#">Premier league</a>
    </li>
    <li class="nav-item  on-hover  me-md-1">
      <a class="nav-link  text-secondary" href="#">La liga</a>
    </li>
    <li class="nav-item  on-hover  me-md-1">
      <a class="nav-link  text-secondary">Serie A</a>
    </li>
    <li class="nav-item  on-hover  me-md-1">
        <a class="nav-link  text-secondary">Ligue 1</a>
    </li>
    <li class="nav-item  on-hover  me-md-1">
        <a class="nav-link  text-secondary">Bundesliga</a>
    </li>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle text-secondary" id="drop" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">UEFA Leagues</a>
        <ul class="dropdown-menu" aria-labelledby="drop">
          <li><a class="dropdown-item" href="#">UEFA champions league</a></li>
          <li><a class="dropdown-item" href="#">UEFA europa league</a></li>
          <li><a class="dropdown-item" href="#">UEFA conference league</a></li>
          <li><hr class="dropdown-divider"></li>
          <li><a class="dropdown-item" href="#">Separated link</a></li>
        </ul>
    </li>
    <li class="nav-item  on-hover  me-md-1">
        <a class="nav-link  text-secondary">FIFA world cup</a>
    </li>
    <li  class="nav-item  on-hover  me-md-1">
        <a class="nav-link text-secondary">
            Primeira Liga
        </a>
    </li>
</ul>
</div>
 


<div class="container my-background2 mt-3 d-flex justify-content-center align-items-center">
    <h3 class="text-white pt-2 pb-2">The  Outstanding</h3>
</div>

<div class="container mt-md- shadow-sm g-0 my-background d-block">
    <div id="slides" class="carousel slide" data-bs-ride="carousel">

        <div class="carousel-indicators d-none d-md-flex">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
        
        <!-- carousel-inner starting -->
        <div class="carousel-inner">

            <div class="carousel-item active">
                <div class="row pe-md-3 my-background">
                    <div class="col-12 col-md-6">
                        <!-- <img src="./images/cristiano-manu1.jpg" class="img-fluid"> -->
                        <div class="row">
                            <div class="row mb-3">
                                <div class="col text-center mt-3">
                                    <span class="text-white fs-4"><b>Premier league</b></span>
                                </div>
                            </div>
                            <div class="row d-flex justify-content-center">
                                <div class="col text-center">
                                    <img src="/view/images/leciester.png" class="img-fluid">
                                </div>
                                <div class="col text-center">
                                    <span class="text-white fs-1"><b>VS</b></span>
                                </div>
                                <div class="col text-center">
                                    <img src="/view/images/manchester-united.png" class="img-fluid">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col text-center">
                                    <span class="text-white fs-4">20:00 PM</span>
                                </div>
                            </div>
                       </div>
                    </div>
                    <div class="col-12 col-md-6 pt-5 pt-lg-4 text-white text-center">
                            <h3>Leicester VS Manchester united</h3>
                            <p>Forest Green Rovers vs Brighton and Hove Albion. Carabao Cup Second Round.
                                7:45pm, Wednesday 24th August 2022.
                                
                                The innocent New Lawn StadiumAttendance: Attendance3,812.</p>
                    </div>
                </div>
            </div>

            <div class="carousel-item">
                <div class="row pe-md-3">
                    <div class="col-12 col-md-6">
                        <!-- <img src="./images/cristiano-juve.jpg" class="img-fluid"> -->
                        <div class="row">
                            <div class="row mb-3">
                                <div class="col text-center mt-3">
                                    <span class="text-white fs-4"><b>Bundesliga</b></span>
                                </div>
                            </div>
                            <div class="row d-flex justify-content-center">
                                <div class="col text-center">
                                    <img src="/view/images/bayern-munich.png" class="img-fluid">
                                </div>
                                <div class="col text-center">
                                    <span class="text-white fs-1"><b>VS</b></span>
                                </div>
                                <div class="col text-center">
                                    <img src="/view/images/francfurt.png" class="img-fluid">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col text-center">
                                    <span class="text-white fs-4">20:00 PM</span>
                                </div>
                            </div>
                       </div>
                    </div>
                    <div class="col-12 col-md-6 pt-5 pt-lg-4 text-white text-center">
                        <h3>Bayernmunich VS francfurt</h3>
                        <p>Forest Green Rovers vs Brighton and Hove Albion. Carabao Cup Second Round.
                            7:45pm, Wednesday 24th August 2022.
                            
                            The innocent New Lawn StadiumAttendance: Attendance3,812.</p>
                </div>
                </div>
            </div>

            <div class="carousel-item">
                <div class="row pe-md-3">
                    <div class="col-12 col-md-6">
                        <!-- <img src="./images/cristiano-mad1.jpg" class="img-fluid"> -->
                        <div class="row">
                            <div class="row mb-3">
                                <div class="col text-center mt-3">
                                    <span class="text-white fs-4"><b>Premier league</b></span>
                                </div>
                            </div>
                            <div class="row d-flex justify-content-center">
                                <div class="col text-center">
                                    <img src="/view/images/leciester.png" class="img-fluid">
                                </div>
                                <div class="col text-center">
                                    <span class="text-white fs-1"><b>VS</b></span>
                                </div>
                                <div class="col text-center">
                                    <img src="/view/images/manchester-united.png" class="img-fluid">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col text-center">
                                    <span class="text-white fs-4">20:00 PM</span>
                                </div>
                            </div>
                       </div>
                    </div>
                    <div class="col-12 col-md-6 pt-5 pt-lg-4 text-white text-center">
                        <h3>Leicester VS Manchester united</h3>
                        <p>Forest Green Rovers vs Brighton and Hove Albion. Carabao Cup Second Round.
                            7:45pm, Wednesday 24th August 2022.
                            
                            The innocent New Lawn StadiumAttendance: Attendance3,812.</p>
                </div>
                </div>
            </div>

        </div>
        <!-- carousel-inner ending -->

        <button class="carousel-control-prev" type="button" data-bs-target="#slides" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#slides" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
    
<div class="container mt-5 d-lg-none">
    <div class="phone-top">
        <div class="phone-top-inner me-2  d-md-flex justify-content-center align-items-center">
            <div class="row">
                <div class="row mb-3">
                    <div class="col text-center mt-3">
                        <span class="text-white fs-4"><b>Premier league</b></span>
                    </div>
                </div>
                <div class="row d-flex justify-content-center">
                    <div class="col text-center">
                        <img src="/view/images/leciester.png" class="img-fluid">
                    </div>
                    <div class="col text-center">
                        <span class="text-white fs-1"><b>VS</b></span>
                    </div>
                    <div class="col text-center">
                        <img src="/view/images/manchester-united.png" class="img-fluid">
                    </div>
                </div>
                <div class="row">
                    <div class="col text-center">
                        <span class="text-white fs-4">20:00 PM</span>
                    </div>
                </div>
           </div>
        </div>

        <div class="phone-top-inner me-2  d-md-flex justify-content-center align-items-center">
            <div class="row">
                <div class="row mb-3">
                    <div class="col text-center mt-3">
                        <span class="text-white fs-4"><b>Bundesliga</b></span>
                    </div>
                </div>
                <div class="row d-flex justify-content-center">
                    <div class="col text-center">
                        <img src="/view/images/bayern-munich.png" class="img-fluid">
                    </div>
                    <div class="col text-center">
                        <span class="text-white fs-1"><b>VS</b></span>
                    </div>
                    <div class="col text-center">
                        <img src="/view/images/francfurt.png" class="img-fluid">
                    </div>
                </div>
                <div class="row">
                    <div class="col text-center">
                        <span class="text-white fs-4">20:00 PM</span>
                    </div>
                </div>
           </div>
        </div>

        <div class="phone-top-inner d-md-flex justify-content-center align-items-center">
            <div class="row">
                <div class="row mb-3">
                    <div class="col text-center mt-3">
                        <span class="text-white fs-4"><b>Premier league</b></span>
                    </div>
                </div>
                <div class="row d-flex justify-content-center">
                    <div class="col text-center">
                        <img src="/view/images/arsenal.png" class="img-fluid">
                    </div>
                    <div class="col text-center">
                        <span class="text-white fs-1"><b>VS</b></span>
                    </div>
                    <div class="col text-center">
                        <img src="/view/images/fulham.png" class="img-fluid">
                    </div>
                </div>
                <div class="row">
                    <div class="col text-center">
                        <span class="text-white fs-4">20:00 PM</span>
                    </div>
                </div>
           </div>
        </div>

    </div>
</div>


<div class="container mt-5 mb-5">
    <div class="row mb-3">
        <div class="col-md-4 mb-3 mb-md-0">
            <div class="card p-0;">
                <div class="row g-0">
                    <div class="col-6">
                        <img src="/view/images/cr7.jpg" class="card-img-top img-fluid rounded-0" alt="...">
                    </div>
                    <div class="position-absolute text-white" style="width: 100px;">
                        <h1>Vs</h1>
                    </div>
                    <div class="col-6">
                        <img src="/view/images/cristiano-manu1.jpg" class="card-img-top img-fluid rounded-0" alt="...">
                    </div>
                </div>
                <div class="card-body text-center">
                  <h5 class="card-title mt-2">Barcelona <span class="my-background rounded rounded-circle ps-1 pt-1 pb-1 text-white">vs </span>Man City </h5>
                  <p class="card-text font-family">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-3 mb-md-0">
            <div class="card p-0;">
                <div class="row g-0">
                    <div class="col-6">
                        <img src="/view/images/cristiano3.jpg" class="card-img-top img-fluid rounded-0" alt="...">
                    </div>
                    <div class="position-absolute text-white" style="width: 100px;">
                        <h1>Vs</h1>
                    </div>
                    <div class="col-6">
                        <img src="/view/images/cristiano2.jpg" class="card-img-top img-fluid rounded-0" alt="...">
                    </div>
                </div>
                <div class="card-body text-center">
                <h5 class="card-title mt-2">Barcelona <span class="my-background rounded rounded-circle ps-1 pt-1 pb-1 text-white">vs </span>Man City </h5>
                <p class="card-text font-family">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-3 mb-md-0">
            <div class="card p-0;">
                <div class="row g-0">
                    <div class="col-6">
                        <img src="/view/images/lionel-messi.jpg" class="card-img-top img-fluid rounded-0" alt="...">
                    </div>
                    <div class="position-absolute text-white" style="width: 100px;">
                        <h1>Vs</h1>
                    </div>
                    <div class="col-6">
                        <img src="/view/images/cristiano-juve.jpg" class="card-img-top img-fluid rounded-0" alt="...">
                    </div>
                </div>
                <div class="card-body text-center">
                <h5 class="card-title mt-2">Barcelona <span class="my-background rounded rounded-circle ps-1 pt-1 pb-1 text-white">vs </span>Man City </h5>
                <p class="card-text font-family">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
        
    </div>

    <div class="row mb-3">
        <div class="col-md-4 mb-3 mb-md-0">
            <div class="card p-0;">
                <div class="row g-0">
                    <div class="col-6">
                        <img src="/view/images/kylian-mbappe4.jpg" class="card-img-top img-fluid rounded-0" alt="...">
                    </div>
                    <div class="position-absolute text-white" style="width: 100px;">
                        <h1>Vs</h1>
                    </div>
                    <div class="col-6">
                        <img src="/view/images/erling-haaland2.jpg" class="card-img-top img-fluid rounded-0" alt="...">
                    </div>
                </div>
                <div class="card-body text-center">
                  <h5 class="card-title mt-2">Barcelona <span class="my-background rounded rounded-circle ps-1 pt-1 pb-1 text-white">vs </span>Man City </h5>
                  <p class="card-text font-family">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-3 mb-md-0">
            <div class="card p-0;">
                <div class="row g-0">
                    <div class="col-6">
                        <img src="/view/images/robert-lewandoski.jpg" class="card-img-top img-fluid rounded-0" alt="...">
                    </div>
                    <div class="position-absolute text-white" style="width: 100px;">
                        <h1>Vs</h1>
                    </div>
                    <div class="col-6">
                        <img src="/view/images/karim-benzema3.jpg" class="card-img-top img-fluid rounded-0" alt="...">
                    </div>
                </div>
                <div class="card-body text-center">
                <h5 class="card-title mt-2">Barcelona <span class="my-background rounded rounded-circle ps-1 pt-1 pb-1 text-white">vs </span>Man City </h5>
                <p class="card-text font-family">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-3 mb-md-0">
            <div class="card p-0;">
                <div class="row g-0">
                    <div class="col-6">
                        <img src="/view/images/mancity-crew.jpg" class="card-img-top img-fluid rounded-0" alt="...">
                    </div>
                    <div class="position-absolute text-white" style="width: 100px;">
                        <h1>Vs</h1>
                    </div>
                    <div class="col-6">
                        <img src="/view/images/firminho.jpg" class="card-img-top img-fluid rounded-0" alt="...">
                    </div>
                </div>
                <div class="card-body text-center">
                <h5 class="card-title mt-2">Barcelona <span class="my-background rounded rounded-circle ps-1 pt-1 pb-1 text-white">vs </span>Man City </h5>
                <p class="card-text font-family">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>

    </div>

    <div class="row">
        <div class="col-md-4 mb-3 mb-md-0">
            <div class="card p-0;">
                <div class="row g-0">
                    <div class="col-6">
                        <img src="/view/images/karim-benzema.jpg" class="card-img-top img-fluid rounded-0" alt="...">
                    </div>
                    <div class="position-absolute text-white" style="width: 100px;">
                        <h1>Vs</h1>
                    </div>
                    <div class="col-6">
                        <img src="/view/images/kevin-debruyne.jpg" class="card-img-top img-fluid rounded-0" alt="...">
                    </div>
                </div>
                <div class="card-body text-center">
                  <h5 class="card-title mt-2">Barcelona <span class="my-background rounded rounded-circle ps-1 pt-1 pb-1 text-white">vs </span>Man City </h5>
                  <p class="card-text font-family">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-3 mb-md-0">
            <div class="card p-0;">
                <div class="row g-0">
                    <div class="col-6">
                        <img src="/view/images/manchester-united-xi-1.jpg" class="card-img-top img-fluid rounded-0" alt="...">
                    </div>
                    <div class="position-absolute text-white" style="width: 100px;">
                        <h1>Vs</h1>
                    </div>
                    <div class="col-6">
                        <img src="/view/images/frankie-dejong.jpg" class="card-img-top img-fluid rounded-0" alt="...">
                    </div>
                </div>
                <div class="card-body text-center">
                <h5 class="card-title mt-2">Barcelona <span class="my-background rounded rounded-circle ps-1 pt-1 pb-1 text-white">vs </span>Man City </h5>
                <p class="card-text font-family">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-3 mb-md-0">
            <div class="card p-0;">
                <div class="row g-0">
                    <div class="col-6">
                        <img src="/view/images/cristiano-mad1.jpg" class="card-img-top img-fluid rounded-0" alt="...">
                    </div>
                    <div class="position-absolute text-white" style="width: 100px;">
                        <h1>Vs</h1>
                    </div>
                    <div class="col-6">
                        <img src="/view/images/cristiano-juve.jpg" class="card-img-top img-fluid rounded-0" alt="...">
                    </div>
                </div>
                <div class="card-body text-center">
                <h5 class="card-title mt-2">Barcelona <span class="my-background rounded rounded-circle ps-1 pt-1 pb-1 text-white">vs </span>Man City </h5>
                <p class="card-text font-family">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
        
    </div>
</div>

<div class="container p-3 p-md-5 bg-white" id="c">
    <div class="row text-secondary mb-3 footer-font-size">
        <div class="col text-center">
            <b>watch and enjoy live your favourite football teams play on 26 August 2022</b><br>
            <span>Looking for where to stream live matches? check out live-mini streams to enjoy your various match on 26 August 2022.<br>
                Live-mini brings you non-stop football action, Enjoy watching.</span>
        </div>
    </div>
</div>

<div class="container-fluid border-top fixed-bottom bg-white d-block d-lg-none pt-2 pb-2">
    <div class="row">
        <div class="col d-flex justify-content-center">
            <a href="<?= RouteUri("football","matches")?>" class="d-flex flex-column align-items-center link-none text-secondary">
                <i class="fa fa-futbol"></i>
                <span class="footer-span">Football</span>
            </a>
        </div>
        <div class="col d-flex justify-content-center">
            <a href="<?= RouteUri("news","latestnews")?>" class="d-flex flex-column align-items-center link-none text-secondary">
                <i class="fa fa-hdd"></i>
                <span class="footer-span">News</span>
            </a>
        </div>
        <div class="col d-flex justify-content-center">
            <a href="<?= RouteUri("football","favorites")?>" class="d-flex flex-column align-items-center link-none text-secondary">
                <i class="fa fa-star"></i>
                <span class="footer-span">Favorite</span>
            </a>
        </div>
        <div class="col d-flex justify-content-center">
            <a href="<?= RouteUri("streams","watchmatch")?>" class="d-flex flex-column align-items-center link-none footer-content-color">
                <i class="fa fa-tv"></i>
                <span class="footer-span">Streams</span>
            </a>
        </div>
    </div>
</div>
    <script src="/view/css/bootstrap-5.2.0-dist/js/bootstrap.js"></script>
    <script src="/view/css/bootstrap-5.2.0-dist/js/bootstrap.bundle.js"></script>
</body>
</html>