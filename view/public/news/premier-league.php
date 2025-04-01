<?php
$newsModel = new newsDisplayModel();

$news = $newsModel->selectedNews();
$category = 'premier league';
$trendingNews = $newsModel->categoryTrendingNews($category);
$newsTrending = getTrendingNews($news,$newsModel,$trendingNews);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News</title>
    <link rel="stylesheet" href="/view/css/bootstrap-5.2.0-dist/css/bootstrap.css">
    <link rel="stylesheet" href="/view/fontawesome-free-5.15.4-web/css/all.min.css">
    <link rel="stylesheet" href="/view/css/news2.css">
    <link rel="stylesheet" href="/view/css/font-size-media-query.css">
</head>
<body>
    <nav class="nav sticky-top d-none d-lg-flex align-items-center" id="color">
        <div class="container d-flex ">
                <b class="fs-2 p-3 text-white"><i>LIVE-MINI</i></b>
            <ul class="nav  d-flex justify-content-center align-items-center  w-75">
                <li class="nav-item">
                    <a class="nav-link text-color rounded me-5" href="/football/matches"><i class="fa fa-futbol me-2"></i>Football</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active text-secondary rounded bg-white me-5" href="/news/latestnews"><i class="fa fa-hdd me-2"></i>News</a>
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

            <div class="offcanvas offcanvas-end" tabindex="-1" id="Live-mini-sidebar" aria-labelledby="Live-mini-sidebarLabel">
                <div class="offcanvas-header">
                    <h2 id="offcanvasRightLabel" class="footer-content-color"><b><i>LIVE-MINI</i></b></h2>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body p-0" id="color">
                    <!-- <div class="card border border-0 bg bg-primary"> -->
                        <ul class="list-group list-group-flush">
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
                            <li class="list-group-item ms-1"><img src="./images/france.jpg" class="width"> France</li>
                            <li class="list-group-item ms-1"><img src="./images/germany.jpg" class="width"> Germany</li>
                            <li class="list-group-item ms-1"><img src="./images/italy.jpg" class="width"> Italy</li>
                            <li class="list-group-item ms-1"><img src="./images/holland.jpg" class="width"> Netherland</li>
                            <li class="list-group-item ms-1"><img src="./images/brazil.jpg" class="width"> Brazil</li>
                            <li class="list-group-item ms-1"><img src="./images/argentina.jpg" class="width"> Argentina</li>
                            <li class="list-group-item ms-1"><img src="./images/england-flag.jpg" class="width"> England</li>
                            <li class="list-group-item ms-1"><img src="./images/scotland.jpg" class="width"> Scotland</li>
                            <li class="list-group-item ms-1"><img src="./images/belgium.jpg" class="width"> Belgium</li>
                            <li class="list-group-item ms-1"><img src="./images/australia.jpg" class="width"> Australia</li>
                            <li class="list-group-item ms-1"><img src="./images/champions-league.png" class="width bg-secondary rounded"> Champions league</li>
                            <li class="list-group-item ms-1"><img src="./images/nigeria.jpg" class="width"> Nigeria</li>
                            <li class="list-group-item ms-1"><img src="./images/croatia.jpg" class="width"> Croatia</li>
                            <li class="list-group-item ms-1"><img src="./images/mexico.jpg" class="width"> Mexico</li>
                            <li class="list-group-item ms-1"><img src="./images/denmark.jpg" class="width"> Denmark</li>
                            <li class="list-group-item ms-1"><img src="./images/austria.jpg" class="width"> Austria</li>
                            <li class="list-group-item ms-1"><img src="./images/colombia.jpg" class="width"> Columbia</li>
                            <li class="list-group-item ms-1"><img src="./images/spanish-flag.jpg" class="width"> Spain</li>
                            <li class="list-group-item ms-1"><img src="./images/canada.jpg" class="width"> Canada</li>
                            <li class="list-group-item ms-1"><img src="./images/bulgaria.jpg" class="width"> Bulgaria</li>
                          </ul>
                    </div>
    
                </div>
            </div> -->
        </div>
    </div>

    <ul class="nav d-none d-md-flex justify-content-center border-bottom border-2 pt-1  pb-1bg-light ">
        <li class="nav-item on-hover me-md-4">
          <a class="nav-link  text-secondary"href="<?=RouteUri("news","latestnews")?>">All</a>
        </li>
        <li class="nav-item  bottom-border  me-md-4">
          <a class="nav-link text-danger " href="<?=RouteUri("news","premierLeague")?>">Premier league</a>
        </li>
        <li class="nav-item  on-hover  me-md-4">
          <a class="nav-link  text-secondary" href="<?=RouteUri("news","laliga")?>">La liga</a>
        </li>
        <li class="nav-item  on-hover  me-md-4">
          <a class="nav-link  text-secondary" href="<?=RouteUri("news","ballondor")?>">Ballon'dor</a>
        </li>
        <li class="nav-item  on-hover  me-md-4">
            <a class="nav-link  text-secondary" href="<?=RouteUri("news","championsLeague")?>">Champions league</a>
        </li>
        <li class="nav-item  on-hover  me-md-4">
            <a class="nav-link  text-secondary" href="<?=RouteUri("news","worldcup")?>">World cup</a>
        </li>
        <li class="nav-item  on-hover  me-md-4">
            <a class="nav-link  text-secondary" href="<?=RouteUri("news","serieA")?>">Serie A</a>
        </li>
        <li class="nav-item  on-hover  me-md-4">
            <a class="nav-link  text-secondary" href="<?=RouteUri("news","ligue1")?>">Ligue 1</a>
        </li>
        <li class="nav-item  on-hover  me-md-4">
            <a class="nav-link  text-secondary" href="<?=RouteUri("news","bundesliga")?>">Bundesliga</a>
        </li>
        <li class="nav-item  on-hover  me-md-4">
            <a class="nav-link  text-secondary" href="<?=RouteUri("news","others")?>">Others</a>
        </li>
    </ul>

    <div class="container-fluid d-md-none border-bottom mt-2">
        <div class="phone-nav">
            <a href="<?=RouteUri("news","latestnews")?>" class="d-flex ms-2 me-3 on-hover text-secondary justify-content-center align-items-center text-secondary min-width">
                All
            </a>
            <a href="<?=RouteUri("news","premierLeague")?>" class="d-flex me-3 justify-content-center align-items-center bottom-border  text-danger min-width">
                Premier league
            </a>
            <a href="<?=RouteUri("news","laliga")?>" class="d-flex me-3 justify-content-center align-items-center on-hover text-secondary min-width">
                La liga
            </a>
            <a href="<?=RouteUri("news","ballondor")?>" class="d-flex me-3 justify-content-center align-items-center on-hover text-secondary min-width">
                Ballon'dor
            </a>
            <a href="<?=RouteUri("news","worldcup")?>" class="d-flex me-3 justify-content-center align-items-center on-hover text-secondary min-width">
                World cup
            </a>
            <a href="<?=RouteUri("news","serieA")?>" class="d-flex me-3 justify-content-center align-items-center on-hover text-secondary min-width">
                Serie A
            </a>
            <a href="<?=RouteUri("news","ligue1")?>" class="d-flex me-3 justify-content-center align-items-center on-hover text-secondary min-width">
                Ligue 1
            </a>
            <a href="<?=RouteUri("news","bundesliga")?>" class="d-flex me-3 justify-content-center align-items-center on-hover text-secondary min-width">
                Bundesliga
            </a>
            <a href="<?=RouteUri("news","others")?>" class="d-flex me-3 justify-content-center align-items-center on-hover text-secondary min-width">
                others
            </a>
        </div>
    </div>

    <div class="container my-background2 text-white d-none border d-md-flex justify-content-center align-items-center p-3  mt-4 mb-4">
        <i class="fa fa-circle text-danger me-3"></i>
        <h3>Trending News</h3>
        <i class="fa fa-circle text-danger ms-4"></i>
    </div>

    <div class="container my-background text-white mt-3 shadow-sm g-0 w-75 d-none d-md-block">
        <div id="slides" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators d-none d-md-flex">
                <?php foreach($newsTrending as $key => $content):?>
                    <?php if($key - 1 == 0): ?>
                        <button type="button" data-bs-target="#slides" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <?php else:?>
                        <button type="button" data-bs-target="#slides" data-bs-slide-to="<?=$key -1?>" aria-label="Slide <?=$key?>"></button>
            
                    <?php endif?>
                <?php endforeach?>
            </div>
            <!-- carousel-inner starting -->
            <div class="carousel-inner">

                <?php foreach($newsTrending as $key => $content):?>
                        <?php if($key == 1):?>
                            <a href="/news/<?=str_replace(' ','', $content['news_category'])?>/<?=urlencode($content['news_id'])?>" class="carousel-item active text-white">
                                <div class="row pe-3">
                                    <div class="col carousel-height">
                                        <img src="/view/images/news/<?=$newsModel->selectNewsImage($content['news_id'])?>" class="img-fluid">
                                    </div>
                                    <div class="col mt-5 mt-lg-0 pt-lg-5">
                                    
                                        <h3><?=$content['badge_logo_name']?></h3>
                                        <p><?=$content["news_title"]?></p>
                                    </div>
                                </div>
                            </a>
                        <?php else:?>
                            <a href="/news/<?=str_replace(' ','', $content['news_category'])?>/<?=urlencode($content['news_id'])?>" class="carousel-item text-white">
                                <div class="row pe-3">
                                    <div class="col carousel-height">
                                        <img src="/view/images/news/<?=$newsModel->selectNewsImage($content['news_id'])?>" class="img-fluid">
                                    </div>
                                    <div class="col mt-5 mt-lg-0 pt-lg-5">
                                    
                                        <h3><?=$content['badge_logo_name']?></h3>
                                        <p><?=$content["news_title"]?></p>
                                    </div>
                                </div>
                            </a>
                        <?php endif?>
                 
                <?php endforeach?>

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

    <div class="container d-none d-md-block">
        <hr class="mt-5">
    </div>
    <div class="container d-none d-md-flex justify-content-center  align-items-center pt-3 mt-4 mb-4">
        <i class="fa fa-circle text-danger me-3" style="font-size: 10px;"></i>
        <h5>Top stories</h5>
        <i class="fa fa-circle text-danger ms-4" style="font-size: 10px;"></i>
    </div>

    <div class="container d-md-none d-flex justify-content-md-center  align-items-center pt-3 mt-4 mb-4">
        <i class="fa fa-circle text-danger me-3" style="font-size: 10px;"></i>
        <h5>Trending news</h5>
        <i class="fa fa-circle text-danger ms-4" style="font-size: 10px;"></i>
    </div>

    <div class="container-fluid d-md-none">
        <div id="scroller" class="shadow-sm">
            <?php foreach($newsTrending as $key => $content):?>
                <?php if($key == 1):?>
                    <a href="/news/<?=str_replace(' ','', $content['news_category'])?>/<?=urlencode($content['news_id'])?>" class="main me-2 shadow-sm text-dark">
                        <div class="main-1">
                            <img src="/view/images/news/<?=$newsModel->selectNewsImage($content['news_id'])?>" class="img-fluid">
                        </div>
                        <div class="main-2">
                            <p class="ps-2 pt-2 pe-2"><?=$content["news_title"]?></p>
                        </div>
                    </a>
                <?php else:?>
                    <a href="/news/<?=str_replace(' ','', $content['news_category'])?>/<?=urlencode($content['news_id'])?>" class="main me-2 shadow-sm text-dark">
                        <div class="main-1">
                            <img src="/view/images/news/<?=$newsModel->selectNewsImage($content['news_id'])?>" class="img-fluid">
                        </div>
                        <div class="main-2">
                            <p class="ps-2 pt-2 pe-2"><?=$content["news_title"]?></p>
                        </div>
                    </a>
                <?php endif?>
            <?php endforeach?>

        </div>
    </div>

    <div class="container  d-md-none d-flex justify-content-md-center  align-items-center pt-3 mt-md-2 mb-2 mb-md-4">
        <i class="fa fa-circle text-danger me-3" style="font-size: 10px;"></i>
        <h5>Top stories</h5>
        <i class="fa fa-circle text-danger ms-4" style="font-size: 10px;"></i>
    </div>


    <div class="container p-md-4 mt-md-4 mb-5">
        <div class="row mb-md-3 row-cols-1 row-cols-lg-2">
            <?php foreach($news as $row => $news_content):?>
                <?php if(trim($news_content['news_category']) == "premier league") :?>
                    <?php if($row % 2 == 0):?>
                    <a href="/news/<?=str_replace(' ','', $news_content['news_category'])?>/<?=urlencode($news_content['news_id'])?>" class="col g-2 mb-1 link-none  text-dark shadow-sm">
                        <div class="row  g-0 d-flex align-">
                            <div class="col-8">
                                <span class="card-title"><img src="/view/images/news/<?=$news_content['badge_logo_image']?>" class="width ms-1"> <i class="text-secondary">- <?=$news_content['badge_logo_name']?></i></span>
                                <div class="card-body p-2">
                                    <p class="card-text top-stories"><?= $news_content['news_title']?></p>
                                </div>
                                <div class="card-footer">
                                    <p class="text-muted ms-2" style="font-size: 13px;">Uploaded <?=$news_content['time_ago']?></p>
                                </div>
                            </div>
                            <div class="col-4 col-md-3">
                                <img src="/view/images/news/<?=$newsModel->selectNewsImage($news_content["news_id"])?>" class="img-fluid rounded" alt="...">
                            </div>

                        </div>
                    </a>

                <?php else: ?>
                        <a href="/news/<?=str_replace(' ','', $news_content['news_category'])?>/<?=urlencode($news_content['news_id'])?>" class="col g-2 mb-1 link-none  text-dark shadow">
                        <div class="row  g-0 d-flex align-">
                            <div class="col-8">
                                <span class="card-title"><img src="/view/images/news/<?=$news_content['badge_logo_image']?>" class="width ms-1"> <i class="text-secondary">- <?=$news_content['badge_logo_name']?></i></span>
                                <div class="card-body p-2">
                                    <p class="card-text top-stories"><?= $news_content['news_title']?></p>
                                </div>
                                <div class="card-footer">
                                    <p class="text-muted ms-2" style="font-size: 13px;">Uploaded <?=$news_content['time_ago']?></p>
                                </div>
                            </div>
                            <div class="col-4 col-md-3">
                                <img src="/view/images/news/<?=$newsModel->selectNewsImage($news_content["news_id"])?>" class="img-fluid rounded" alt="...">
                            </div>

                        </div>
                    </a>
                <?php endif?>
            <?php endif?>
            <?php endforeach ?>

            <!-- <div class="col g-2 mb-1 shadow">
                <div class="row  g-0 d-flex align-">
                    <div class="col-8">
                        <span class="card-title"><img src="/view/images/real-madrid.png" class="width ms-1"> <i class="text-secondary">- Real madrid</i></span>
                        <div class="card-body p-2">
                            <p class="card-text top-stories">Karim benzema was named uefa best player of 2021/2022 season</p>
                        </div>
                        <div class="card-footer">
                            <p class="text-muted ms-2" style="font-size: 13px;">Updated 30 mins ago</p>
                        </div>
                    </div>
                    <div class="col-4 col-md-3">
                        <img src="/view/images/karim-benzima2.jpg" class="img-fluid rounded" alt="...">
                    </div>

                </div>
            </div> -->
            
        </div>

        <!-- <div class="row mb-md-3  row-cols-1 row-cols-lg-2">
            <div class="col g-2 mb-1 shadow-sm">
                <div class="row  g-0 d-flex align-">
                    <div class="col-8">
                        <span class="card-title"><i class="fa fa-bookmark width ms-1 book"></i> <i class="text-secondary">- Champions league</i></span>
                        <div class="card-body p-2">
                            <p class="card-text top-stories">Kevin de bruyne, karim benzema and thibaut courtois were nominated for uefa best players of which karim benzema won</p>
                        </div>
                        <div class="card-footer">
                            <p class="text-muted ms-2" style="font-size: 13px;">Updated 30 mins ago</p>
                        </div>
                    </div>
                    <div class="col-4 col-md-3">
                        <img src="/view/images/karim-benzema3.jpg" class="img-fluid rounded" alt="...">
                    </div>

                </div>
            </div>

            <div class="col g-2 mb-1 shadow">
                <div class="row  g-0 d-flex align-">
                    <div class="col-8">
                        <span class="card-title"><i class="fa fa-exchange-alt width ms-1 book"></i> <i class="text-secondary">- Transfer</i></span>
                        <div class="card-body p-2">
                            <p class="card-text top-stories">Frankie de jong makes final decision over Man utd transfer as saga set to conclude</p>
                        </div>
                        <div class="card-footer">
                            <p class="text-muted ms-2" style="font-size: 13px;">Updated 30 mins ago</p>
                        </div>
                    </div>
                    <div class="col-4 col-md-3">
                        <img src="/view/images/frankie-dejong.jpg" class="img-fluid rounded" alt="...">
                    </div>

                </div>
            </div>

        </div> -->

        <!-- <div class="row mb-md-3  row-cols-1 row-cols-lg-2">
            <div class="col g-2 mb-1 shadow-sm">
                <div class="row  g-0 d-flex align-">
                    <div class="col-8">
                        <span class="card-title"><img src="/view/images/manchester-city.png" class="width ms-1"> <i class="text-secondary">- Manchester city</i></span>
                        <div class="card-body p-2">
                            <p class="card-text top-stories">erling-haaland makes headlines as he scores a hat-trick against crystal palace</p>
                        </div>
                        <div class="card-footer">
                            <p class="text-muted ms-2" style="font-size: 13px;">Updated 10 mins ago</p>
                        </div>
                    </div>
                    <div class="col-4 col-md-3">
                        <img src="/view/images/erling-haaland4.jpg" class="img-fluid rounded" alt="...">
                    </div>

                </div>
            </div>

            <div class="col g-2 mb-1 shadow">
                <div class="row  g-0 d-flex align-">
                    <div class="col-8">
                        <span class="card-title"><img src="/view/images/liverpool.png" class="width ms-1"> <i class="text-secondary">- Liverpool</i></span>
                        <div class="card-body p-2">
                            <p class="card-text top-stories">Roberto firminho gives fpl players 40 points as he had a brace and hat-trick of assist against AFC bournmouth</p>
                        </div>
                        <div class="card-footer">
                            <p class="text-muted ms-2" style="font-size: 13px;">Updated 30 mins ago</p>
                        </div>
                    </div>
                    <div class="col-4 col-md-3">
                        <img src="/view/images/firminho.jpg" class="img-fluid rounded" alt="...">
                    </div>

                </div>
            </div>
        </div> -->

        <!-- <div class="row mb-md-3  row-cols-1 row-cols-lg-2">
            <div class="col g-2 mb-1 shadow-sm">
                <div class="row  g-0 d-flex align-">
                    <div class="col-8">
                        <span class="card-title"><img src="/view/images/chelsea.png" class="width ms-1"> <i class="text-secondary">- Chelsea</i></span>
                        <div class="card-body p-2">
                            <p class="card-text top-stories">Tuchel manges a slight win against leicester city with chelsea 2-1 leicester city</p>
                        </div>
                        <div class="card-footer">
                            <p class="text-muted ms-2" style="font-size: 13px;">Updated 30 mins ago</p>
                        </div>
                    </div>
                    <div class="col-4 col-md-3">
                        <img src="/view/images/tuchel.jpg" class="img-fluid rounded" alt="...">
                    </div>

                </div>
            </div>

            <div class="col g-2 mb-1 shadow">
                <div class="row  g-0 d-flex align-">
                    <div class="col-8">
                        <span class="card-title"><i class="fa fa-bookmark width ms-1 book"></i> <i class="text-secondary">- Football</i></span>
                        <div class="card-body p-2">
                            <p class="card-text top-stories">paris st german set to be the richest club in the world</p>
                        </div>
                        <div class="card-footer">
                            <p class="text-muted ms-2" style="font-size: 13px;">Updated 30 mins ago</p>
                        </div>
                    </div>
                    <div class="col-4 col-md-3">
                        <img src="/view/images/paris-st-german.jpg" class="img-fluid rounded" alt="...">
                    </div>

                </div>
            </div>
        </div> -->

        <!-- <div class="row mb-md-3  row-cols-1 row-cols-lg-2">
            <div class="col g-2 mb-1 shadow-sm">
                <div class="row  g-0 d-flex align-">
                    <div class="col-8">
                        <span class="card-title"><img src="/view/images/lazio.png" class="width ms-1"> <i class="text-secondary">- Lazio</i></span>
                        <div class="card-body p-2">
                            <p class="card-text top-stories">Milinkovic savic and his other team mates where able to conquer inter milan on a score of lazio 3-1 inter milan</p>
                        </div>
                        <div class="card-footer">
                            <p class="text-muted ms-2" style="font-size: 13px;">Updated 30 mins ago</p>
                        </div>
                    </div>
                    <div class="col-4 col-md-3">
                        <img src="/view/images/milinkovic-savic.jpg" class="img-fluid rounded" alt="...">
                    </div>

                </div>
            </div>

            <div class="col g-2 mb-1 shadow">
                <div class="row  g-0 d-flex align-">
                    <div class="col-8">
                        <span class="card-title"><i class="fa fa-bookmark width ms-1 book"></i> <i class="text-secondary">- Ballon'dor</i></span>
                        <div class="card-body p-2">
                            <p class="card-text top-stories">Lionel messi not making it to this season nominations for the ballon'dor</p>
                        </div>
                        <div class="card-footer">
                            <p class="text-muted ms-2" style="font-size: 13px;">Updated 25 mins ago</p>
                        </div>
                    </div>
                    <div class="col-4 col-md-3">
                        <img src="/view/images/lionel-messi.jpg" class="img-fluid rounded" alt="...">
                    </div>

                </div>
            </div>
        </div> -->

        <!-- <div class="row mb-md-3  row-cols-1 row-cols-lg-2">
            <div class="col g-2 mb-1 shadow-sm">
                <div class="row  g-0 d-flex align-">
                    <div class="col-8">
                        <span class="card-title"><img src="/view/images/sevilla,png.png" class="width ms-1"> <i class="text-secondary">- Sevilla</i></span>
                        <div class="card-body p-2">
                            <p class="card-text top-stories">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                        <div class="card-footer">
                            <p class="text-muted ms-2" style="font-size: 13px;">Updated 30 mins ago</p>
                        </div>
                    </div>
                    <div class="col-4 col-md-3">
                        <img src="/view/images/cristiano-juve.jpg" class="img-fluid rounded" alt="...">
                    </div>

                </div>
            </div>

            <div class="col g-2 mb-1 shadow">
                <div class="row  g-0 d-flex align-">
                    <div class="col-8">
                        <span class="card-title"><img src="/view/images/sevilla,png.png" class="width ms-1"> <i class="text-secondary">- Sevilla</i></span>
                        <div class="card-body p-2">
                            <p class="card-text top-stories">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                        <div class="card-footer">
                            <p class="text-muted ms-2" style="font-size: 13px;">Updated 30 mins ago</p>
                        </div>
                    </div>
                    <div class="col-4 col-md-3">
                        <img src="/view/images/cristiano.jpg" class="img-fluid rounded" alt="...">
                    </div>

                </div>
            </div>
        </div> -->

        <!-- <div class="row mb-md-3  row-cols-1 row-cols-lg-2">
            <div class="col g-2 mb-1 shadow-sm">
                <div class="row  g-0 d-flex align-">
                    <div class="col-8">
                        <span class="card-title"><i class="fa fa-bookmark width ms-1 book"></i> <i class="text-secondary">- Ligue 1</i></span>
                        <div class="card-body p-2">
                            <p class="card-text top-stories">Kylian mbappe on fire in the dressing room with neymar jr </p>
                        </div>
                        <div class="card-footer">
                            <p class="text-muted ms-2" style="font-size: 13px;">Updated 30 mins ago</p>
                        </div>
                    </div>
                    <div class="col-4 col-md-3">
                        <img src="/view/images/kylian-mbappe2.jpg" class="img-fluid rounded" alt="...">
                    </div>

                </div>
            </div>

            <div class="col g-2 mb-1 shadow">
                <div class="row  g-0 d-flex align-">
                    <div class="col-8">
                        <span class="card-title"><i class="fa fa-bookmark width ms-1 book"></i> <i class="text-secondary">- Ballon'dor</i></span>
                        <div class="card-body p-2">
                            <p class="card-text top-stories">Does karim benzema have a chance in winninig this seasons ballon'dor ?</p>
                        </div>
                        <div class="card-footer">
                            <p class="text-muted ms-2" style="font-size: 13px;">Updated 25 mins ago</p>
                        </div>
                    </div>
                    <div class="col-4 col-md-3">
                        <img src="/view/images/karim-benzema.jpg" class="img-fluid rounded" alt="...">
                    </div>

                </div>
            </div>
        </div> -->

    </div>

    <hr>
    <div class="container-fluid p-3 p-md-5" id="c">
        <div class="row text-secondary mb-3 footer-font-size">
            <div class="col text-center">
                <b>Current news for football on 26 August 2022</b><br>
                <span>Looking for Current football news? check out trending football news on 26 August 2022.<br>
                    Live-mini brings you the latest football news,</span>
            </div>
        </div>
    </div>
    
    <div class="container-fluid border-top fixed-bottom bg-white d-block d-lg-none pt-2 pb-2">
        <div class="row">
            <div class="col d-flex justify-content-center">
                <a href="/football/matches class="d-flex flex-column align-items-center link-none text-secondary">
                    <i class="fa fa-futbol"></i>
                    <span class="footer-span">Football</span>
                </a>
            </div>
            <div class="col d-flex justify-content-center">
                <a href="/news/latestnews" class="d-flex flex-column align-items-center link-none footer-content-color">
                    <i class="fa fa-hdd"></i>
                    <span class="footer-span">News</span>
                </a>
            </div>
            <div class="col d-flex justify-content-center">
                <a href="/football/favorites class="d-flex flex-column align-items-center link-none text-secondary">
                    <i class="fa fa-star"></i>
                    <span class="footer-span">Favorite</span>
                </a>
            </div>
            <div class="col d-flex justify-content-center">
                <a href="/streams/watchmatch class="d-flex flex-column align-items-center link-none text-secondary">
                    <i class="fa fa-tv"></i>
                    <span class="footer-span">Streams</span>
                </a>
            </div>
        </div>
    </div>
<script src="/view/css/bootstrap-5.2.0-dist/js/bootstrap.js"></script>
</body>
</html>