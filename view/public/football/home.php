<?php
if(isset($_SESSION["logged-in"]) || isset($_SESSION['signed-in'])){

} else{
    // echo "lets see";
    header("location: /login");
    return;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Live-mini</title>
    <link rel="stylesheet" href="/view/css/bootstrap-5.2.0-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/view/fontawesome-free-5.15.4-web/css/all.min.css">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
    <link rel="stylesheet" href="/view/css/index.css">
    <!-- <link rel="stylesheet" href="./css/index_media.css"> -->
    <link rel="stylesheet" href="/view/css/font-size-media-query.css">
</head>
<body>

    <div class="nav sticky-top d-none  d-lg-flex align-items-center" id="color">
        <div class="container d-flex">
            <b class="fs-2 p-3 text-white"><i>LIVE-MINI</i></b>
            <ul class="nav d-flex justify-content-center align-items-center  w-75">
                <li class="nav-item">
                    <a class="nav-link active text-secondary bg-white rounded me-5" href="<?= RouteUri("football","matches")?>"><i class="fa fa-futbol me-2"></i>Football</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-color rounded me-5" href="<?= RouteUri("news","latestnews")?>"><i class="fa fa-hdd me-2"></i>News</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-color rounded me-5" href="<?= RouteUri("football","favorites")?>"><i class="fa fa-star me-2"></i>Favorite</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-color rounded me-5" href="<?= RouteUri("streams","watchmatch")?>"><i class="fa fa-tv me-2"></i>Streams</a>
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

    <div class="container-fluid mt-2 mb-5">
        <div class="row g-0 g-lg-4 m-3">
            <div class="d-none d-lg-block  col-lg-3">
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

            <div class="col  col-lg-6">

                <div class="row">
                    <button class="btn   text-white" id="color">LIVE</button>
                      <hr class="border border-1 border-dark">
                </div>

                <div class="row mb-3 mt-1 justify-content-center">
                    <div class="g-0 dates  pb-3 d-flex align-items-center justify-content-between justify-content-md-evenly">

                        <div class="d-flex dates-span flex-column align-items-center text-muted">
                            <span><b>Sun</b></span>
                            <span>28 aug</span>
                        </div>

                        <div class="dates-span d-flex flex-column align-items-center text-muted">
                            <span><b>Mon</b></span>
                            <span>29 aug</span>
                        </div>

                        <div class="d-flex dates-span flex-column align-items-center footer-content-color">
                            <span><b>Today</b></span>
                            <span>30 Aug</span>
                        </div>

                        <div class="d-flex dates-span flex-column align-items-center text-muted">
                            <span><b>Wed</b></span>
                            <span>31 aug</span>
                        </div>

                        <div class="d-flex dates-span flex-column align-items-center text-muted">
                            <span><b>Thur</b></span>
                            <span>1 sep</span>
                        </div>

                        <!-- <div class="d-flex flex-column align-items-center text-muted">
                            <i class="fa fa-calendar-alt fs-4"></i>
                        </div> -->
                        
                    </div>
                </div>
               <div class="row">
                  <button class="btn  w-50 text-white" id="color">Premier league</button>
                    <hr class="border border-1 border-dark">
                </div>

                <a href="<?=RouteUri("football","matches","match-content")?>" class="text-dark link-none">
                    <div class="row border rounded p-2 mb-3">
                        <div class="col-4 text-center">
                            <div class=" d-flex flex-column align-items-center  w-100 h-100"><img src="/view/images/manchester-united.png" class="width">
                                <div class=" w-100 h-100 text-truncate"><span class="pt-2 font">Manchester united</span></div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="d-flex flex-column align-items-center justify-content-center h-100">
                                <strong class="fs-5">1 - 2</strong>
                            </div>
                        </div>
                        <div class="col-4 text-center">
                            <div class=" d-flex flex-column align-items-center w-100 h-100"><img src="/view/images/brighton.png" class="width">
                                <div class="w-100 h-100 text-truncate"><span class="pt-2 font">Brighton & hove albion</span></div>
                            </div>
                        </div>
                        <div class="col-1 d-flex align-items-center">
                            <i class="fa fa-star"></i>
                        </div>
                    </div>
                </a>

                <div class="row border rounded p-2 mb-3">
                    <div class="col-4 text-center">
                        <div class=" d-flex flex-column align-items-center  w-100 h-100"><img src="/view/images/leciester.png" class="width">
                            <div class=" w-100 h-100 text-truncate"><span class="pt-2 font">Leicester city</span></div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="d-flex flex-column align-items-center justify-content-center h-100">
                            <strong class="fs-5">2 - 2</strong>
                        </div>
                    </div>
                    <div class="col-4 text-center">
                        <div class=" d-flex flex-column align-items-center w-100 h-100"><img src="/view/images/brentford.png" class="width">
                            <div class="w-100 h-100 text-truncate"><span class="pt-2 font">Brentford</span></div>
                        </div>
                    </div>
                    <div class="col-1 d-flex align-items-center">
                        <i class="fa fa-star"></i>
                    </div>
                </div>

                <div class="row border rounded p-2 mb-3">
                    <div class="col-4 text-center">
                        <div class=" d-flex flex-column align-items-center  w-100 h-100"><img src="/view/images/westham.png" class="width">
                            <div class=" w-100 h-100 text-truncate"><span class="pt-2 font">West ham</span></div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="d-flex flex-column align-items-center justify-content-center h-100">
                            <strong class="fs-5">0 - 2</strong>
                        </div>
                    </div>
                    <div class="col-4 text-center">
                        <div class=" d-flex flex-column align-items-center w-100 h-100"><img src="/view/images/manchester-city.png" class="width">
                            <div class="w-100 h-100 text-truncate"><span class="pt-2 font">Manchester city</span></div>
                        </div>
                    </div>
                    <div class="col-1 d-flex align-items-center">
                        <i class="fa fa-star"></i>
                    </div>
                </div>

                <div class="row border rounded p-2 mb-3">
                    <div class="col-4 text-center">
                         <div class=" d-flex flex-column align-items-center w-100 h-100"><img src="/view/images/crystal_palace.png" class="width">
                            <div class=" w-100 h-100 text-truncate"><span class="pt-2 font">Crystal palace</span></div>
                         </div>
                    </div>
                    <div class="col-3">
                         <div class="d-flex flex-column align-items-center">
                             <i class="fa fa-bell fs-5 mt-1 text-secondary"></i>
                             <span>17:00</span>
                         </div>
                    </div>
                    <div class="col-4 text-center">
                         <div class=" d-flex flex-column align-items-center w-100 h-100"><img src="/view/images/arsenal.png" class="width">
                            <div class=" w-100 h-100 text-truncate"><span class="pt-2 font">Arsenal</span></div>
                         </div>
                    </div>
                    <div class="col-1 d-flex align-items-center">
                        <i class="fa fa-star"></i>
                    </div>
                 </div>
 
                 <div class="row border rounded p-2 mb-3">
                     <div class="col-4 text-center">
                          <div class=" d-flex flex-column align-items-center w-100 h-100"><img src="/view/images/fulham.png" class="width">
                            <div class=" w-100 h-100 text-truncate"><span class="pt-2 font">Fulham</span></div>
                          </div>
                     </div>
                     <div class="col-3">
                          <div class="d-flex flex-column align-items-center">
                              <i class="fa fa-bell fs-5 mt-1 text-secondary"></i>
                              <span>17:00</span>
                          </div>
                     </div>
                     <div class="col-4 text-center">
                          <div class=" d-flex flex-column align-items-center w-100 h-100"><img src="/view/images/liverpool.png" class="width">
                            <div class=" w-100 h-100 text-truncate"><span class="pt-2 font">Liverpool</span></div>
                          </div>
                     </div>
                     <div class="col-1 d-flex align-items-center">
                        <i class="fa fa-star"></i>
                    </div>
                  </div>
 
                  <div class="row border rounded p-2 mb-3">
                     <div class="col-4 text-center">
                          <div class=" d-flex flex-column align-items-center w-100 h-100"><img src="/view/images/newcastle-united.png" class="width">
                            <div class=" w-100 h-100 text-truncate"><span class="pt-2 font">Newcastle</span></div>
                          </div>
                     </div>
                     <div class="col-3">
                          <div class="d-flex flex-column align-items-center">
                              <i class="fa fa-bell fs-5 mt-1 text-secondary"></i>
                              <span>17:00</span>
                          </div>
                     </div>
                     <div class="col-4 text-center">
                          <div class=" d-flex flex-column align-items-center w-100 h-100"><img src="/view/images/nottingham-forest.png" class="width">
                            <div class=" w-100 h-100 text-truncate"><span class="pt-2 font">Nottingham forest</span></div>
                          </div>
                     </div>
                     <div class="col-1 d-flex align-items-center">
                        <i class="fa fa-star"></i>
                    </div>
                  </div>
 

                <div class="row  mb-3 pt-3">
                    <button class="btn  w-50 text-white" id="color">Bundesliga</button>
                     <hr class="border border-1 border-dark">
                </div>

                <div class="row border rounded p-2 mb-3">
                    <div class="col-4 text-center">
                        <div class=" d-flex flex-column align-items-center w-100 h-100"><img src="/view/images/fc-cologne.png" class="width">
                            <div class=" w-100 h-100 text-truncate"><span class="pt-2 font">Fc cologne</span></div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="d-flex flex-column align-items-center justify-content-center h-100">
                            <strong class="fs-5">3 - 1</strong>
                        </div>
                    </div>
                    <div class="col-4 text-center">
                        <div class=" d-flex flex-column align-items-center"><img src="/view/images/schalke-04.png" class="width">
                            <div class=" w-100 h-100 text-truncate"><span class="pt-2 font">Schalke 04</span></div>
                        </div>
                    </div>
                    <div class="col-1 d-flex align-items-center">
                        <i class="fa fa-star"></i>
                    </div>
                </div>

                <div class="row border rounded p-2 mb-3">
                    <div class="col-4 text-center">
                         <div class=" d-flex flex-column align-items-center w-100 h-100"><img src="/view/images/vfb-stuttgart.png" class="width">
                            <div class=" w-100 h-100 text-truncate"><span class="pt-2 font">VFB stuttgart</span></div>
                         </div>
                    </div>
                    <div class="col-3">
                         <div class="d-flex flex-column align-items-center">
                             <i class="fa fa-bell fs-5 mt-1 text-secondary"></i>
                             <span>15:00</span>
                         </div>
                    </div>
                    <div class="col-4 text-center">
                         <div class=" d-flex flex-column align-items-center w-100 h-100"><img src="/view/images/rb-leipzig.png" class="width">
                            <div class=" w-100 h-100 text-truncate"><span class="pt-2 font">Rb leipzig</span></div>
                         </div>
                    </div>
                    <div class="col-1 d-flex align-items-center">
                        <i class="fa fa-star"></i>
                    </div>
                </div>

            </div>

            <div class="col-3 d-none d-md-block">
                <div class="ads mt-5">
                    <span class="fs-3">Ads</span>
                </div>
                <div class="ads mt-5">
                    <span class="fs-3">Ads</span>
                </div>
                <div class="ads mt-5">
                    <span class="fs-3">Ads</span>
                </div>
            </div>
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

    <hr>
    <div class="container-fluid p-3 p-md-5" id="c">
        <div class="row text-secondary mb-3 footer-font-size">
            <div class="col text-center">
                <b>Live Scores and fixtures for football on 26 August 2022</b><br>
                <span>Looking for the livescore today? See live scores and fixtures for football on 26 August 2022.
                    LiveScore brings you the latest football fixtures, results and live score information for 26 August 2022. Revisit scores and statistics and look ahead for upcoming fixtures for your favourite sport team. Plus, find out the livescore today, 26 August 2022.</span>
            </div>
        </div>
    </div>

    <div class="container-fluid border-top fixed-bottom bg-white d-block d-lg-none pt-2 pb-2">
        <div class="row">
            <div class="col d-flex justify-content-center">
                <a href="<?= RouteUri("football","matches")?>" class="d-flex flex-column align-items-center link-none footer-content-color ">
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
                <a href="<?= RouteUri("streams","watchmatch")?>" class="d-flex flex-column align-items-center link-none text-secondary">
                    <i class="fa fa-tv"></i>
                    <span class="footer-span">Streams</span>
                </a>
            </div>
        </div>
    </div>
    <script src="/view/css/bootstrap-5.2.0-dist/js/bootstrap.js"></script>
</body>
</html>