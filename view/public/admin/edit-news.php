<?php 
$newsModel = new newsDisplayModel();
$news = $newsModel->selectedNews();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit and delete</title>
    <link rel="stylesheet" href="/view/css/bootstrap-5.2.0-dist/css/bootstrap.css">
    <link rel="stylesheet" href="/view/fontawesome-free-5.15.4-web/css/all.min.css">
    <link rel="stylesheet" href="/view/css/admin_css/trending_news.css">
    <link rel="stylesheet" href="/view/css/admin_css/trending_news_query.css">
</head>

<body>

    <div class="nav sticky-top   d-flex align-items-center p-3" id="color">
        <div class="container d-flex justify-content-between">
            <b class="fs-2 text-white"><i>LIVE-MINI</i></b>
        </div>
    </div>

        <div class="row g-0 d-flex justify-content-between">
            <div class="col-2 d-none d-lg-block border border-danger border-2">
                <div class="features"></div>
            </div>
            <div class="col-lg-5 mt-3 mt-md-4  border-end pe-md-4 border-2">
                <div class="container mb-md-4 d-flex justify-content-center align-items-center">
                     <i class="fa fa-circle text-danger me-3" style="font-size: 10px;"></i>
                        <h5>Trending-news</h5>
                    <i class="fa fa-circle text-danger ms-3" style="font-size: 10px;"></i>
                </div>
                <!-- <div class="width border border-primary p-2"></div> -->

                <?php if(isset($_SESSION["delete"])):?>
                        <div class="alert alert-success text-center" role="alert">
                            <span><span><?php echo  $_SESSION["delete"]?></span></span>
                        </div>

                <?php elseif(isset($_SESSION["delete-error"])):?>
                    <div class="alert alert-danger text-center" role="alert">
                            <span><span><?php echo  $_SESSION["delete-error"]?></span></span>
                    </div>
                <?php endif ?>

                <?php foreach($news as $row => $news_content):?>
                        <?php $_GET['news'] = $news_content['news_id'] ?>
                        <div class="g-0 rounded border message-width mb-3">
                            <div class="image-box border border-white ms-1 ms-md-2 me-2 me-md-2 mt-1 rounded rounded-circle">
                                <img src="/view/images/news/<?=$newsModel->selectNewsImage($news_content["news_id"])?>"> 
                            </div>
                            <div class="text-space text-container">
                                <span><?= $news_content['news_title']?></span>
                            </div>
                            <div class="delete-edit-section d-flex align-items-center justify-content-center">
                                <a href="/admin/updatenews/<?=urlencode($news_content['news_id'])?>" class="delete-edit-section-circle rounded-circle d-flex justify-content-center align-items-center">
                                    <i  class="fa fa-redo-alt text-secondary"></i>
                                </a>
                            </div>
                            <div class="delete-edit-section d-flex align-items-center justify-content-center">
                                <a href="/admin/deletenews/<?=urlencode($news_content['news_id'])?>" class="delete-edit-section-circle rounded-circle d-flex justify-content-center align-items-center">
                                    <i  class="fa fa-trash text-secondary"></i>
                                </a>
                            </div>
                          
                          
                        
                            
                        </div>
                <?php endforeach?>
         
            </div>
            <div class="col-lg-4 mt-3 mt-md-4 me-md-4">
                <div class="container mb-md-4 d-flex justify-content-center align-items-center">
                     <i class="fa fa-circle text-danger me-3" style="font-size: 10px;"></i>
                        <h5>Top-stories</h5>
                    <i class="fa fa-circle text-danger ms-3" style="font-size: 10px;"></i>
                </div>
                
                <?php if(isset($_SESSION["delete-stories"])):?>
                    <div class="alert alert-success text-center" role="alert">
                        <span><span><?php echo  $_SESSION["delete-stories"]?></span></span>
                    </div>
                <?php endif ?>

                <?php foreach($premier_league_data as $key => $value):?>
                    <?php if($key <= 17 && $key % 6 == 0):?>
                        <?php $array[] = trim($key);  $filtered_image = explode(" ",$premier_league_data[$key+1]);?>
                        <div class="message-width rounded mb-3 rounded-2 border border-1 pt-1 pb-1 d-md-flex align-items-center justify-content-center">
                            
                            <div class="trending-image-box ms-1 ms-md-2 me-2 me-md-2 rounded rounded-circle">
                                <img src="../images2/<?= $filtered_image[0] ?>">
                            </div>
                            
                            <div class="text-space text-container">
                                <span><?= $premier_league_data[$key + 3]?></span>
                            </div>
                            <div class="top-delete-edit-section d-none d-md-flex align-items-center justify-content-center">
                                <a href="prototype_trending_edit_delete.php?premier-league-top-stories=<?= urlencode($premier_league_data[$key + 1]) ?>" class="top-delete-edit-section-circle rounded-circle d-flex justify-content-center align-items-center">
                                    <i  class="fa fa-trash text-secondary"></i>
                                </a>
                            </div>
                            <!-- <div class="top-delete-edit-section d-none d-md-flex align-items-center justify-content-center">
                                <a href="##" class="top-delete-edit-section-circle rounded-circle d-flex justify-content-center align-items-center">
                                    <i  class="fa fa-redo-alt text-secondary"></i>
                                </a>
                            </div> -->

                            <div class="unwanted-delete-edit-section">
                                <a href="prototype_trending_edit_delete.php?premier-league-top-stories=<?= urlencode($premier_league_data[$key + 1]) ?>" class="unwanted-delete-edit-section-circle rounded-circle d-flex justify-content-center align-items-center">
                                    <i  class="fa fa-trash text-secondary"></i>
                                </a>
                            </div>
                            <!-- <div class="unwanted-delete-edit-section">
                                <a href="##" class="unwanted-delete-edit-section-circle rounded-circle d-flex justify-content-center align-items-center">
                                    <i  class="fa fa-redo-alt text-secondary"></i>
                                </a>
                            </div> -->
                        
                            
                        </div>
                    <?php endif?>
                <?php endforeach?>
                <?php foreach($laliga_league_data as $key => $value):?>
                    <?php if($key <= 17 && $key % 6 == 0):?>
                        <?php $array[] = trim($key);  $filtered_image = explode(" ",$laliga_league_data[$key+1]);?>
                        <div class="message-width rounded mb-3 rounded-2 border border-1 pt-1 pb-1 d-md-flex align-items-center justify-content-center">
                            
                            <div class="trending-image-box ms-1 ms-md-2 me-2 me-md-2 rounded rounded-circle">
                                <img src="../images2/<?= $filtered_image[0] ?>">
                            </div>
                            
                            <div class="text-space text-container">
                                <span><?= $laliga_league_data[$key + 3]?></span>
                            </div>
                            <div class="top-delete-edit-section d-none d-md-flex align-items-center justify-content-center">
                                <a href="prototype_trending_edit_delete.php?laliga-league-top-stories=<?= urlencode($laliga_league_data[$key + 1]) ?>" class="top-delete-edit-section-circle rounded-circle d-flex justify-content-center align-items-center">
                                    <i  class="fa fa-trash text-secondary"></i>
                                </a>
                            </div>
                            <!-- <div class="top-delete-edit-section d-none d-md-flex align-items-center justify-content-center">
                                <a href="##" class="top-delete-edit-section-circle rounded-circle d-flex justify-content-center align-items-center">
                                    <i  class="fa fa-redo-alt text-secondary"></i>
                                </a>
                            </div> -->

                            <div class="unwanted-delete-edit-section">
                                <a href="prototype_trending_edit_delete.php?laliga-league-top-stories=<?= urlencode($laliga_league_data[$key + 1]) ?>" class="unwanted-delete-edit-section-circle rounded-circle d-flex justify-content-center align-items-center">
                                    <i  class="fa fa-trash text-secondary"></i>
                                </a>
                            </div>
                            <!-- <div class="unwanted-delete-edit-section">
                                <a href="##" class="unwanted-delete-edit-section-circle rounded-circle d-flex justify-content-center align-items-center">
                                    <i  class="fa fa-redo-alt text-secondary"></i>
                                </a>
                            </div> -->
                        
                            
                        </div>
                    <?php endif?>
                <?php endforeach?>
            </div>
        </div>
        
        <script src="../css/bootstrap-5.2.0-dist/js/bootstrap.js"></script>
</body>
<?php unset($_SESSION["delete"],$_SESSION["delete-error"])?>
</html>