<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>H2h</title>
    <link rel="stylesheet" href="/view/css/bootstrap-5.2.0-dist/css/bootstrap.css">
    <link rel="stylesheet" href="/view/fontawesome-free-5.15.4-web/css/all.min.css">
    <link rel="stylesheet" href="/view/css/h2h.css">
    <link rel="stylesheet" href="/view/css/font-size-media-query.css">
</head>
<body>
    <div class="nav sticky-top d-none  d-lg-flex align-items-center" id="color">
        <div class="container d-flex">
            <b class="fs-2 p-3 text-white"><i>LIVE-MINI</i></b>
            <ul class="nav d-flex justify-content-center align-items-center  w-75">
                <li class="nav-item">
                    <a class="nav-link active text-secondary bg-white rounded me-5" href="/football/matches"><i class="fa fa-futbol me-2"></i>Football</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-color rounded me-5" href="/news/latestnews"><i class="fa fa-hdd me-2"></i>News</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-color rounded me-5" href="/football/favorites"><i class="fa fa-star me-2"></i>Favorite</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-color rounded me-5" href="/football/streams"><i class="fa fa-tv me-2"></i>Streams</a>
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
                          <li class="list-group-item border border-0 fs-5 text-secondary"><i class="fa fa-cog"></i><span class="ms-2">Settings</span></li>
                          <li class="list-group-item border border-0 fs-5 text-secondary"><i class="fa fa-question-circle"><span class="ms-2">FAQ</span></i></li>
                          <li class="list-group-item border border-0 fs-5 text-secondary"><i class="fa fa-lock"></i><span class="ms-2 ps-1">Privacy policy</span></li>
                        </ul>
                    </div>
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
        </div>
    </div>


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


    <div class="container pt-5">
        <div class="row d-flex justify-content-center border pt-2 pb-3 pt-md-2 pb-md-2 rounded shadow-sm">
            <div class="col-4 col-lg-3 text-center">
                <div class=" d-flex flex-column align-items-center  w-100 h-100"><img src="/view/images/manchester-united.png" class="width2">
                    <div class=" w-100 h-100 text-truncate"><span class="pt-2 font">Manchester united</span></div>
                </div>
            </div>
            <div class="col-4 col-lg-2">
                <div class="d-flex flex-column align-items-center justify-content-center h-100">
                    <strong class="fs-5">1 - 2</strong>
                    <span>Full time</span>
                </div>
            </div>
            <div class="col-4 col-lg-3 text-center">
                <div class=" d-flex flex-column align-items-center w-100 h-100"><img src="/view/images/brighton.png" class="width2">
                    <div class="w-100 h-100 text-truncate"><span class="pt-2 font">Brighton & hove albion</span></div>
                </div>
            </div>
        </div>

        <div class="row border border-top-0 border-start-0 border-end-0 border-bottom-1">
            <div class="col">
                <ul class="nav my-nav justify-content-md-evenly mt-4">
                    <li class="nav-item">
                      <a class="nav-link text-secondary on-hover" href="match-content">Info</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-secondary on-hover" href="line-ups">Line ups</a>
                      </li>
                    <li class="nav-item">
                      <a class="nav-link text-secondary on-hover" href="summary">Summary</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-secondary on-hover" href="stats">Stats</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-secondary on-hover" href="table">Table</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  active text-danger border-bottom border-5 border-danger" aria-current="page" href="h2h">H2H</a>
                    </li>
                  </ul>
            </div>
        </div>

        <div class="row mt-2">
            <div class="col">
                <button class="btn  text-white" id="color">Premier league 2022/2023</button>
              <hr class="border border-1 border-dark">
            </div>
        </div>

        <div class="row align-self center border shadow-sm rounded p-2 mb-3 mt-2">
            <div class="col-4 text-center">
                <div class=" d-flex flex-column align-items-center  w-100 h-100"><img src="/view/images/brighton.png" class="width2">
                    <div class=" w-100 h-100 text-truncate"><span class="pt-2 font">Brighton & hove albion</span></div>
                </div>
            </div>
            <div class="col-4">
                <div class="d-flex flex-column align-items-center justify-content-center h-100">
                    <strong class="text-secondary">2023</strong>
                    <div class=" w-100 text-truncate text-center"><strong class="text-secondary">Not played</strong></div>
                </div>
            </div>
            <div class="col-4 text-center">
                <div class=" d-flex flex-column align-items-center w-100 h-100"><img src="/view/images/manchester-united.png" class="width2">
                    <div class="w-100 h-100 text-truncate"><span class="pt-2 font">Manchester united</span></div>
                </div>
            </div>
        </div>

        <div class="row mt-2">
            <div class="col">
                <button class="btn  text-white" id="color">Premier league 2021/2022</button>
              <hr class="border border-1 border-dark">
            </div>
        </div>

        <div class="row align-self center border shadow-sm rounded p-2 mb-3 mt-2">
            <div class="col-4 text-center">
                <div class=" d-flex flex-column align-items-center  w-100 h-100"><img src="/view/images/brighton.png" class="width2">
                    <div class=" w-100 h-100 text-truncate"><span class="pt-2 font">Brighton & hove albion</span></div>
                </div>
            </div>
            <div class="col-4">
                <div class="d-flex flex-column align-items-center justify-content-center h-100">
                    <span  class="text-muted">7 May</span>
                    <strong class="fs-5">4 - 0</strong>
                    <span class="text-muted">Full time</span>
                </div>
            </div>
            <div class="col-4 text-center">
                <div class=" d-flex flex-column align-items-center w-100 h-100"><img src="/view/images/manchester-united.png" class="width2">
                    <div class="w-100 h-100 text-truncate"><span class="pt-2 font">Manchester united</span></div>
                </div>
            </div>
        </div>

        <div class="row align-self center border shadow-sm rounded p-2 mb-3 mt-2">
            <div class="col-4 text-center">
                <div class=" d-flex flex-column align-items-center  w-100 h-100"><img src="/view/images/manchester-united.png" class="width2">
                    <div class=" w-100 h-100 text-truncate"><span class="pt-2 font">Manchester united</span></div>
                </div>
            </div>
            <div class="col-4">
                <div class="d-flex flex-column align-items-center justify-content-center h-100">
                    <div class="w-100 text-truncate text-center"><span class="text-muted">15 February</span></div>
                    <strong class="fs-5">2 - 0</strong>
                    <span class="text-muted">Full time</span>
                </div>
            </div>
            <div class="col-4 text-center">
                <div class=" d-flex flex-column align-items-center w-100 h-100"><img src="/view/images/brighton.png" class="width2">
                    <div class="w-100 h-100 text-truncate"><span class="pt-2 font">Brighton & hove albion</span></div>
                </div>
            </div>
        </div>
    </div>






    <div class="container-fluid border-top fixed-bottom bg-white d-block d-lg-none pt-2 pb-2">
        <div class="row">
            <div class="col d-flex justify-content-center">
                <a href="/football/matches" class="d-flex flex-column align-items-center link-none footer-content-color">
                    <i class="fa fa-futbol"></i>
                    <span class="footer-span">Football</span>
                </a>
            </div>
            <div class="col d-flex justify-content-center">
                <a href="/news/latestnews" class="d-flex flex-column align-items-center link-none text-secondary">
                    <i class="fa fa-hdd"></i>
                    <span class="footer-span">News</span>
                </a>
            </div>
            <div class="col d-flex justify-content-center">
                <a href="/football/favorites" class="d-flex flex-column align-items-center link-none text-secondary">
                    <i class="fa fa-star"></i>
                    <span class="footer-span">Favorite</span>
                </a>
            </div>
            <div class="col d-flex justify-content-center">
                <a href="/streams/watchmatch" class="d-flex flex-column align-items-center link-none text-secondary">
                    <i class="fa fa-tv"></i>
                    <span class="footer-span">Streams</span>
                </a>
            </div>
        </div>
    </div>


    <script src="/view/css/bootstrap-5.2.0-dist/js/bootstrap.js"></script>
</body>
</html>