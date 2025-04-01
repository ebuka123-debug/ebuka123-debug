<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Summary</title>
    <link rel="stylesheet" href="/view/css/bootstrap-5.2.0-dist/css/bootstrap.css">
    <link rel="stylesheet" href="/view/fontawesome-free-5.15.4-web/css/all.min.css">
    <link rel="stylesheet" href="/view/css/summary.css">
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
                    <a class="nav-link text-color rounded me-5" href="/streams/watchmatch"><i class="fa fa-tv me-2"></i>Streams</a>
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
                <ul class="nav my-nav justify-content-md-evenly mt-3">
                    <li class="nav-item">
                      <a class="nav-link text-secondary on-hover" aria-current="page" href="/football/matches/match-content">Info</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-secondary on-hover" href="/football/line-ups">Line ups</a>
                      </li>
                    <li class="nav-item">
                      <a class="nav-link active text-danger border-bottom border-5 border-danger" href="/football/summary">Summary</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link  text-secondary on-hover" href="/football/stats">Stats</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  text-secondary on-hover" href="/football/table">Table</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  text-secondary on-hover" href="/football/h2h">H2H</a>
                    </li>
                  </ul>
            </div>
        </div>
    </div>

    <div class="container border mt-3 mb-5">
        <div class="row summary-height align-items-center summary-font border-bottom">
            <div class="col-1 col-md-1">
                <span><b>23'</b></span>
            </div>
            <div class="col-4 col-md-5">
                <!-- <i class="fa fa-futbol"></i> -->
                <span><b></b></span>
            </div>
            <div class="col-3 col-md-1">
                <span><b>0 - 1</b></span>
            </div>
            <div class="col-4 col-md-5 d-flex align-items-center">
                <div>
                    <i class="fa fa-futbol"></i>
                </div>
                <div class="mx-2">
                    <span><b>C.ronaldo</b> <br> j.sancho</span>
                </div>
            </div>
        </div>

        <div class="row summary-height align-items-center summary-font border-bottom">
            <div class="col-1 col-md-1">
                <span><b>45'</b></span>
            </div>
            <div class="col-4 col-md-5 d-flex">
                
            </div>
            <div class="col-3 col-md-1">
                <span><b>0 - 1</b></span>
            </div>
            <div class="col-4 col-md-5 d-flex">
                <!-- <span><b>Cristiano ronaldo</b> <br> jadon sancho</span> -->
                <div class="yellow-card mt-1"></div> 
                <span class="ms-2 mx-md-2"><b>J.maddison</b></span>
            </div>
        </div>

        <div class="row summary-height align-items-center summary-font border-bottom">
            <div class="col-1 col-md-1">
                <span><b>23'</b></span>
            </div>
            <div class="col-4 col-md-5">
                <!-- <i class="fa fa-futbol"></i> -->
                <span><b></b></span>
            </div>
            <div class="col-3 col-md-1">
                <span><b>0 - 1</b></span>
            </div>
            <div class="col-4 col-md-5 d-flex align-items-center">
                <div>
                    <i class="fa fa-futbol"></i>
                </div>
                <div class="mx-2">
                    <span><b>C.ronaldo</b> <br> j.sancho</span>
                </div>
            </div>
        </div>

        <div class="row summary-height align-items-center summary-font border-bottom">
            <div class="col-1 col-md-1">
                <span><b>45'</b></span>
            </div>
            <div class="col-4 col-md-5 d-flex">
                
            </div>
            <div class="col-3 col-md-1">
                <span><b>0 - 1</b></span>
            </div>
            <div class="col-4 col-md-5 d-flex">
                <!-- <span><b>Cristiano ronaldo</b> <br> jadon sancho</span> -->
                <div class="yellow-card mt-1"></div> 
                <span class="ms-2 mx-md-2"><b>J.maddison</b></span>
            </div>
        </div>

        <div class="row summary-height align-items-center summary-font border-bottom">
            <div class="col-1 col-md-1">
                <span><b>45'</b></span>
            </div>
            <div class="col-4 col-md-5 d-flex align-items-center">
                <div>
                    <i class="fa fa-futbol"></i>
                </div>
                <div class="mx-2">
                    <span><b>C.ronaldo</b> <br> j.sancho</span>
                </div>
            </div>
            <div class="col-3 col-md-1">
                <span><b>0 - 1</b></span>
            </div>
            <div class="col-4 col-md-5 d-flex">
                <!-- <span><b>Cristiano ronaldo</b> <br> jadon sancho</span> -->
                <div class="red-card mt-1"></div> 
                <span class="ms-2 mx-md-2"><b>J.maddison</b></span>
            </div>
        </div>

        <div class="row HT summary-height summary-font align-items-center">
            <div class="col-1 col-md-1">
                <span><b>HT</b></span>
            </div>
            <div class="col-4 col-md-5"></div>
            <div class="col-3 col-md-1">
                <span><b>0 - 1</b></span>
            </div>
            <div class="col-4"></div>
        </div>

        <div class="row summary-height align-items-center summary-font border-bottom">
            <div class="col-1 col-md-1">
                <span><b>45'</b></span>
            </div>
            <div class="col-4 col-md-5 d-flex align-items-center">
                <div>
                    <i class="fa fa-futbol"></i>
                </div>
                <div class="mx-2">
                    <span><b>C.ronaldo</b> <br> j.sancho</span>
                </div>
            </div>
            <div class="col-3 col-md-1">
                <span><b>0 - 1</b></span>
            </div>
            <div class="col-4 col-md-5 d-flex">
                <!-- <span><b>Cristiano ronaldo</b> <br> jadon sancho</span> -->
                <!-- <div class="red-card mt-1"></div> 
                <span class="ms-2 mx-md-2"><b>J.maddison</b></span> -->
            </div>
        </div>

        <div class="row summary-height align-items-center summary-font border-bottom">
            <div class="col-1 col-md-1">
                <span><b>45'</b></span>
            </div>
            <div class="col-4 col-md-5 d-flex align-items-center">
                <div>
                    <i class="fa fa-futbol"></i>
                </div>
                <div class="mx-2">
                    <span><b>C.ronaldo</b> <br> j.sancho</span>
                </div>
            </div>
            <div class="col-3 col-md-1">
                <span><b>0 - 1</b></span>
            </div>
            <div class="col-4 col-md-5 d-flex">
                <!-- <span><b>Cristiano ronaldo</b> <br> jadon sancho</span> -->
                <!-- <div class="red-card mt-1"></div> 
                <span class="ms-2 mx-md-2"><b>J.maddison</b></span> -->
            </div>
        </div>

        <div class="row summary-height align-items-center summary-font border-bottom">
            <div class="col-1 col-md-1">
                <span><b>45'</b></span>
            </div>
            <div class="col-4 col-md-5 d-flex align-items-center">
                <div>
                    <i class="fa fa-futbol"></i>
                </div>
                <div class="mx-2">
                    <span><b>C.ronaldo</b> <br> j.sancho</span>
                </div>
            </div>
            <div class="col-3 col-md-1 border">
                <span><b>0 - 1</b></span>
            </div>
            <div class="col-4 col-md-5 d-flex">
                <!-- <span><b>Cristiano ronaldo</b> <br> jadon sancho</span> -->
                <!-- <div class="red-card mt-1"></div> 
                <span class="ms-2 mx-md-2"><b>J.maddison</b></span> -->
            </div>
        </div>

        <div class="row HT summary-height summary-font align-items-center">
            <div class="col-1 col-md-1">
                <span><b>FT</b></span>
            </div>
            <div class="col-4 col-md-5"></div>
            <div class="col-3 col-md-1">
                <span><b>0 - 1</b></span>
            </div>
            <div class="col-4"></div>
        </div>
    </div>

    <!-- <div class="container-fluid" id="color">
        <div class="row">
            <div class="col d-flex justify-content-center text-white pt-5"><span>Enjoy  various performance from different teams</span></div>
        </div>
        <div class="row d-flex justify-content-center pt-3">
            <div class="col-11 d-flex justify-content-center text-white font-size flex-column"><p>Get  full live score of various matches on our platform "<i>live-mini</i>" Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsam, nemo praesentium officiis corporis soluta animi minus nam dicta accusamus? Harum facere praesentium veniam. Eius provident quo aperiam. Est, sint! Sapiente. Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit amet distinctio veniam perferendis assumenda sit repellat quia quidem saepe quae officiis libero facilis voluptate eaque, provident ullam alias nostrum voluptas. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Rem nemo libero rerum, laboriosam iste doloribus maiores repellat tempora impedit veniam expedita qui minima eum deleniti tenetur quo cupiditate! Mollitia, et!<br></p>
            <div class="font-size d-flex justify-content-center">@2022 Live-mini</div>
            </div>
        </div>
    </div> -->

    <!-- <hr>
    <div class="container-fluid p-3 p-md-5 position-absolute bottom-0" id="color">
        <div class="row text-light mb-3 footer-font-size">
            <div class="col text-center">
                <b>Live Scores and fixtures for football on 26 August 2022</b><br>
                <span>Looking for the livescore today? See live scores and fixtures for football on 26 August 2022.
                    LiveScore brings you the latest football fixtures, results and live score information for 26 August 2022. Revisit scores and statistics and look ahead for upcoming fixtures for your favourite sport team. Plus, find out the livescore today, 26 August 2022.</span>
            </div>
        </div>
    </div> -->


    <div class="container-fluid fixed-bottom border-top bg-white d-block d-lg-none pt-2 pb-2">
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