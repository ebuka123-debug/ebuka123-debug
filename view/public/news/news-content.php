<?php

if(isset($_GET['football']) && $_GET['football'] == 'football_news'){
    $newsTitle = $_GET['news_title'];
    // $newsContent
    $newsCategory = $_GET['news_category'];

    //exploding the news content to get to know how many paragraphs it has,
    //this variable is not yet structured to have paragraph number as index hence it is unstructured
    $newsContent = explode("\n",$_GET['news_content']);
    //images for news
    $image = $_GET['news_image'];
    $imageBadge = $_GET['image_badge'];

    //restructured array of images having the paragraph (after_paragrapha-number) position as its key
    $imageMapByPosition = [];

    //restructured array of image position having the paragraph number as index
    $newsImagePositionByParagraph = [];

    //this variable contains array of news with their paragraph number as index
    $newsByParagraph = [];

 



    //looping throgh the unstructured newsContent
    foreach($newsContent as $key => $news){
        //array of news with their paragraph number as index
        $newsByParagraph[$key+1] = $news;
        //exploding to get the position e.gexploding "after_paragraph_1" to be able to get 1 or the last number
        $position = explode("_",$_GET['position'][$key]);
        if($image[$key] != null){
            //structuring array of images to have the paragraph (after_paragrapha-number) position as its key
            $imageMapByPosition[$position[2]] = [0 =>$image[$key], 1 => $imageBadge[$key]];
            
            //checking if position is not null
            if($position[2] != null){
            //structuring array of image position to have the paragraph number i.e $position[2] as index
                $newsImagePositionByParagraph[$key +1] = $position[2];
            }
        
        }
    }

    $newsID = $_GET['news'];
    $newsModel = new newsModel();
    $views = $newsModel->updateViews($newsID);
    // echo "<pre>";
    // var_dump($newsByParagraph);
    // die;
    $newsSecretID = $_SESSION['news_ID']."se34hfg567hg";
    $codedID = md5($newsSecretID);

    $newsModel = new newsDisplayModel();
    $newsStories = $newsModel->selectedNews();

    // $a = "emeka";

    $newsIDGotten = $_GET['news'];
    // echo "<pre>";
    // var_dump($newsImagePositionByParagraph);
    // var_dump($imageMapByPosition,$imageBadge);
    // die;
   
    $_GET['news'] = md5("beans12fgfgdvgfh64y43uij775y823hfghgbhn");
 
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News content</title>
    <link rel="stylesheet" href="/view/css/bootstrap-5.2.0-dist/css/bootstrap.css">
    <link rel="stylesheet" href="/view/fontawesome-free-5.15.4-web/css/all.min.css">
    <link rel="stylesheet" href="/view/css/news2-content.css">
    <link rel="stylesheet" href="/view/css/font-size-media-query.css">
    <link rel="stylesheet" href="/view/css/navbar-media-query.css">
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
                    <a class="nav-link active text-secondary rounded bg-white me-5" href="<?= RouteUri("news","latestnews")?>"><i class="fa fa-hdd me-2"></i>News</a>
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
                    <ul class="list-group list-group-flush small-fonts">
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

    <div class="container mb-md-5  bg-white p-4 p-md-2 mt-md-5">
        
        <div class="row justify-content-center">
            <div class="col-md-10">
                <p><i class="fa fa-bookmark book"></i> <i class="text-secondary">- <?=$newsCategory?></i></p>
            </div>
        </div>

        <div class="row  mb-3 justify-content-center">
            <div class="col-md-10 border-bottom border-danger border-2">
                <h4 class="pb-2"><?=$newsTitle?> <cite class="text-muted fs-5">- live-mini</cite></h4>
            </div>
        </div>

        <!-- iterating through news -->
        <?php foreach($newsByParagraph as $paragraph => $news):?>
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <!-- displaying news content -->
                    <p><?=$news?></p>
                </div>
            </div>
            <!-- checks if paragraph or key matches any image positions paragraph -->
            <?php if(in_array($paragraph,$newsImagePositionByParagraph)): ?>
                <div class="row mt-5 ms-5 me-5">
                    <div class="col text-center">
                        <!-- displaying news image -->
                        <img src="/view/images/news/<?=$imageMapByPosition[$paragraph][0]?>" class="img-fluid"><br>
                    </div>
                </div>
                <div class="row mt-1 mb-5">
                    <div class="col ms-5 text-center">
                
                        <b><?=$imageMapByPosition[$paragraph][1]?></b>
        
                    </div>
                </div>
            <?php endif?>
        <?php endforeach?>

      

      

        <!-- <div class="row justify-content-center">
            <div class="col-md-10">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Id repudiandae esse eligendi, vitae illum natus aut. Facilis, similique reprehenderit nam, sequi nemo hic at facere dolor voluptas, quia eveniet eligendi!
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. At et iure nam, doloremque tempora, quisquam laborum est culpa maiores laboriosam aliquam excepturi saepe ea molestias, odit quam? Quibusdam, accusamus eos?
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla eius corrupti qui porro esse aut dolorum fugit ab ipsum temporibus sit voluptatem necessitatibus quaerat incidunt, iure possimus in praesentium illo?
            </div>
        </div> -->
        <hr>
    </div>

    <div class="container mb-2 mb-md-0">
        <span class="fs-4"><b><?=getNewsCategory($newsStories,$newsCategory)?></b></span>
    </div>

    <div class="container p-md-4 mt-md-4 mb-5">
        <div class="row mb-md-3 row-cols-1 row-cols-lg-2">
            <?php foreach($newsStories as $row => $news_content):?>
                    
                <?php if($newsIDGotten != $news_content['news_id'] && strtolower($newsCategory) == strtolower($news_content['news_category'])):?>
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

        </div>

        <!-- <div class="row mb-md-3 row-cols-1 row-cols-lg-2">
            <div class="col g-2 mb-1 shadow-sm">
                <div class="row  g-0 d-flex align-">
                    <div class="col-8">
                        <span class="card-title"><i class="fa fa-bookmark width ms-1 book"></i> <i class="text-secondary">- Manchester united</i></span>
                        <div class="card-body p-2">
                            <p class="card-text top-stories">Cristiano Ronaldo open to sporting CP return after real madrid rejection</p>
                        </div>
                        <div class="card-footer">
                            <p class="text-muted ms-2" style="font-size: 13px;">Updated 30 mins ago</p>
                        </div>
                    </div>
                    <div class="col-4 col-md-3">
                        <img src="/view/images/kevin-debruyne.jpg" class="img-fluid rounded" alt="...">
                    </div>

                </div>
            </div>

            <div class="col g-2 mb-1 shadow">
                <div class="row  g-0 d-flex align-">
                    <div class="col-8">
                        <span class="card-title"><i class="fa fa-bookmark width ms-1 book"></i> <i class="text-secondary">- Real madrid</i></span>
                        <div class="card-body p-2">
                            <p class="card-text top-stories">Karim benzema was named uefa best player of 2021/2022 season</p>
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
                <a href="<?= RouteUri("football","matches")?>" class="d-flex flex-column align-items-center link-none text-secondary">
                    <i class="fa fa-futbol"></i>
                    <span class="footer-span">Football</span>
                </a>
            </div>
            <div class="col d-flex justify-content-center">
                <a href="<?=RouteUri("news","latestnews")?>" class="d-flex flex-column align-items-center link-none footer-content-color">
                    <i class="fa fa-hdd"></i>
                    <span class="footer-span">News</span>
                </a>
            </div>
            <div class="col d-flex justify-content-center">
                <a href="<?=RouteUri("football","favorites")?>" class="d-flex flex-column align-items-center link-none text-secondary">
                    <i class="fa fa-star"></i>
                    <span class="footer-span">Favorite</span>
                </a>
            </div>
            <div class="col d-flex justify-content-center">
                <a href="<?=RouteUri("streams","watchmatch")?>" class="d-flex flex-column align-items-center link-none text-secondary">
                    <i class="fa fa-tv"></i>
                    <span class="footer-span">Streams</span>
                </a>
            </div>
        </div>
    </div>
    <script src="/view/css/bootstrap-5.2.0-dist/js/bootstrap.js"></script>
</body>
</html>