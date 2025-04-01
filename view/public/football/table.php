<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table</title>
    <link rel="stylesheet" href="/view/css/bootstrap-5.2.0-dist/css/bootstrap.css">
    <link rel="stylesheet" href="/view/fontawesome-free-5.15.4-web/css/all.min.css">
    <link rel="stylesheet" href="/view/css/table.css">
    <link rel="stylesheet" href="/view/css/font-size-media-query.css">
</head>
<body>
    <div class="nav sticky-top d-none  d-lg-flex align-items-center" id="color">
        <div class="container d-flex">
            <b class="fs-2 p-3 text-white"><i>LIVE-MINI</i></b>
            <ul class="nav d-flex justify-content-center align-items-center  w-75">
                <li class="nav-item">
                    <a class="nav-link active text-secondary bg-white rounded me-5" href="/football/home"><i class="fa fa-futbol me-2"></i>Football</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-color rounded me-5" href="/news/news"><i class="fa fa-hdd me-2"></i>News</a>
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
                <ul class="nav justify-content-md-evenly mt-4 my-nav">
                    <li class="nav-item">
                      <a class="nav-link text-secondary on-hover" href="/football/matches/match-content">Info</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-secondary on-hover" href="/football/line-ups">Line ups</a>
                      </li>
                    <li class="nav-item">
                      <a class="nav-link text-secondary on-hover" href="/football/summary">Summary</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-secondary on-hover" href="/football/stats">Stats</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  active text-danger border-bottom border-5 border-danger" aria-current="page" href="table">Table</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  text-secondary on-hover" href="h2h">H2H</a>
                    </li>
                  </ul>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col">
               <div class="card border-0 table-responsive">
                
                    <table class="table table-striped  table-hover border text-truncate">
                        <tr id="color">
                            <th class="text-light">P</th>
                            <th class="text-light" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Teams">Team</th>
                            <th class="text-light"  data-bs-toggle="tooltip" data-bs-placement="bottom" title="Match played">MP</th>
                            <th class="text-light"  data-bs-toggle="tooltip" data-bs-placement="bottom" title="Wins">W</th>
                            <th class="text-light"  data-bs-toggle="tooltip" data-bs-placement="bottom" title="Draws">D</th>
                            <th class="text-light"  data-bs-toggle="tooltip" data-bs-placement="bottom" title="Losses">L</th>
                            <th class="text-light">F</th>
                            <th class="text-light">A</th>
                            <th class="text-light"  data-bs-toggle="tooltip" data-bs-placement="bottom" title="Goal difference">GD</th>
                            <th class="text-light"  data-bs-toggle="tooltip" data-bs-placement="bottom" title="Points">PTS</th>
                        </tr>
    
                        <tr>
                            <td>1</td>
                            <td><img src="/view/images/tottenham.png" class="width"> Tottenham</td>
                            <td>1</td>
                            <td>1</td>
                            <td>0</td>
                            <td>0</td>
                            <td>4</td>
                            <td>1</td>
                            <td>3</td>
                            <td>3</td>
                        </tr>
    
                        <tr>
                            <td>2</td>
                            <td><img src="/view/images/AFC-bournemouth.png" class="width"> AFC bournemouth</td>
                            <td>1</td>
                            <td>1</td>
                            <td>0</td>
                            <td>0</td>
                            <td>2</td>
                            <td>0</td>
                            <td>2</td>
                            <td>3</td>
                        </tr>
    
                        <tr>
                            <td>3</td>
                            <td><img src="/view/images/arsenal.png" class="width"> Arsenal</td>
                            <td>1</td>
                            <td>1</td>
                            <td>0</td>
                            <td>0</td>
                            <td>2</td>
                            <td>0</td>
                            <td>2</td>
                            <td>3</td>
                        </tr>
    
                        <tr>
                            <td>4</td>
                            <td><img src="/view/images/manchester-city.png" class="width"> Manchester city</td>
                            <td>1</td>
                            <td>1</td>
                            <td>0</td>
                            <td>0</td>
                            <td>2</td>
                            <td>0</td>
                            <td>2</td>
                            <td>3</td>
                        </tr>
    
                        <tr>
                            <td>5</td>
                            <td><img src="/view/images/newcastle-united.png" class="width"> Newcastle united</td>
                            <td>1</td>
                            <td>1</td>
                            <td>0</td>
                            <td>0</td>
                            <td>2</td>
                            <td>0</td>
                            <td>2</td>
                            <td>3</td>
                        </tr>
    
                        <tr>
                            <td>6</td>
                            <td><img src="/view/images/brighton.png" class="width"> Brighton & Hove Albion</td>
                            <td>1</td>
                            <td>1</td>
                            <td>0</td>
                            <td>0</td>
                            <td>2</td>
                            <td>1</td>
                            <td>1</td>
                            <td>3</td>
                        </tr>
    
                        <tr>
                            <td>7</td>
                            <td><img src="/view/images/leeds.png" class="width"> Leeds united</td>
                            <td>1</td>
                            <td>1</td>
                            <td>0</td>
                            <td>0</td>
                            <td>2</td>
                            <td>1</td>
                            <td>1</td>
                            <td>3</td>
                        </tr>
    
                        <tr>
                            <td>8</td>
                            <td><img src="/view/images/chelsea.png" class="width"> Chelsea</td>
                            <td>1</td>
                            <td>1</td>
                            <td>0</td>
                            <td>0</td>
                            <td>1</td>
                            <td>0</td>
                            <td>1</td>
                            <td>3</td>
                        </tr>
    
                        <tr>
                            <td>9</td>
                            <td><img src="/view/images/brentford.png" class="width"> Brentford</td>
                            <td>1</td>
                            <td>0</td>
                            <td>1</td>
                            <td>0</td>
                            <td>2</td>
                            <td>2</td>
                            <td>0</td>
                            <td>1</td>
                        </tr>
    
                        <tr>
                            <td>10</td>
                            <td><img src="/view/images/fulham.png" class="width"> Fullham</td>
                            <td>1</td>
                            <td>0</td>
                            <td>1</td>
                            <td>0</td>
                            <td>2</td>
                            <td>2</td>
                            <td>0</td>
                            <td>1</td>
                        </tr>
    
                        <tr>
                            <td>11</td>
                            <td><img src="/view/images/leciester.png" class="width"> Leicester</td>
                            <td>1</td>
                            <td>0</td>
                            <td>1</td>
                            <td>0</td>
                            <td>2</td>
                            <td>2</td>
                            <td>0</td>
                            <td>1</td>
                        </tr>
    
                        <tr>
                            <td>12</td>
                            <td><img src="/view/images/liverpool.png" class="width"> Liverpool</td>
                            <td>1</td>
                            <td>0</td>
                            <td>1</td>
                            <td>0</td>
                            <td>2</td>
                            <td>2</td>
                            <td>0</td>
                            <td>1</td>
                        </tr>
    
                        <tr>
                            <td>13</td>
                            <td><img src="/view/images/manchester-united.png" class="width"> Manchester-united</td>
                            <td>1</td>
                            <td>0</td>
                            <td>0</td>
                            <td>1</td>
                            <td>1</td>
                            <td>2</td>
                            <td>-1</td>
                            <td>0</td>
                        </tr>
    
                        <tr>
                            <td>14</td>
                            <td><img src="/view/images/wolverhampton.png" class="width"> Wolverhampton wanderers</td>
                            <td>1</td>
                            <td>0</td>
                            <td>0</td>
                            <td>1</td>
                            <td>1</td>
                            <td>2</td>
                            <td>-1</td>
                            <td>0</td>
                        </tr>
    
                        <tr>
                            <td>15</td>
                            <td><img src="/view/images/everton.png" class="width"> Everton</td>
                            <td>1</td>
                            <td>0</td>
                            <td>0</td>
                            <td>1</td>
                            <td>0</td>
                            <td>1</td>
                            <td>-1</td>
                            <td>0</td>
                        </tr>
    
                        <tr>
                            <td>16</td>
                            <td><img src="/view/images/astonvilla.png" class="width"> Aston villa</td>
                            <td>1</td>
                            <td>0</td>
                            <td>0</td>
                            <td>1</td>
                            <td>0</td>
                            <td>2</td>
                            <td>-2</td>
                            <td>0</td>
                        </tr>
    
                        <tr>
                            <td>17</td>
                            <td><img src="/view/images/crystal_palace.png" class="width"> Crystal palace</td>
                            <td>1</td>
                            <td>0</td>
                            <td>0</td>
                            <td>1</td>
                            <td>0</td>
                            <td>2</td>
                            <td>-2</td>
                            <td>0</td>
                        </tr>
    
                        <tr>
                            <td>18</td>
                            <td><img src="/view/images/nottingham-forest.png" class="width"> Nottingham forest</td>
                            <td>1</td>
                            <td>0</td>
                            <td>0</td>
                            <td>1</td>
                            <td>0</td>
                            <td>2</td>
                            <td>-2</td>
                            <td>0</td>
                        </tr>
    
                        <tr>
                            <td>19</td>
                            <td><img src="/view/images/westham.png" class="width"> West ham</td>
                            <td>1</td>
                            <td>0</td>
                            <td>0</td>
                            <td>1</td>
                            <td>0</td>
                            <td>2</td>
                            <td>-2</td>
                            <td>0</td>
                        </tr>
    
                        <tr>
                            <td>20</td>
                            <td><img src="/view/images/southampton.png" class="width"> South hampton</td>
                            <td>1</td>
                            <td>0</td>
                            <td>0</td>
                            <td>1</td>
                            <td>0</td>
                            <td>4</td>
                            <td>-3</td>
                            <td>0</td>
                        </tr>
    
    
                    </table>
                
               </div>
            </div>
        </div>

    </div>

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