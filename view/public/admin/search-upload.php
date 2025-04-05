<?php
  $adminModel = new adminModel();
  $countries = $adminModel->country();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Catergory Upload</title>
    <link rel="stylesheet" href="/view/css/bootstrap-5.2.0-dist/css/bootstrap.css">
    <link rel="stylesheet" href="/view/fontawesome-free-5.15.4-web/css/all.min.css">
    <link rel="stylesheet" href="/view/css/admin_css/news.css">
</head>
<body>

    <div class="nav sticky-top   d-flex align-items-center p-3" id="color">
        <div class="container d-flex justify-content-between">
            <b class="fs-2 text-white"><i>LIVE-MINI</i></b>
        </div>
    </div>

        <div class="my-container">
            <div class="row d-flex justify-content-center  w-100 g-0">
                <div class="col-11 col-lg-7 border rounded-3 p-4">
                    <!-- <div class="w-100  mb-2 d-flex justify-content-center">
                        <span>
                            <b><i class="fs-4 text-danger">LIVE-MINI</i></b>
                        </span>
                    </div>
                    <div class="w-100 mb-5 mb-lg-4 d-flex justify-content-center">
                        <span class="text-secondary">
                             @ powered by Moral base L.T.D
                        </span>
                    </div> -->
                    <?php if(isset($_SESSION["search-upload-error"])):?>
                        <div class="alert alert-danger text-center" role="alert">
                            <span><span><?php echo  $_SESSION["search-upload-error"]?></span></span>
                        </div>

                    <?php elseif(isset($_SESSION["search-uploaded"])):?>
                        <div class="alert alert-success text-center" role="alert">
                            <span><span><?php echo  $_SESSION["search-uploaded"]?></span></span>
                        </div>
                    <?php endif ?>
                    <form action="/admin/searchUpload/" method="post" enctype="multipart/form-data"> 
                        <label for="" class="mb-2 fs-4">SEARCH</label>
                        <div class="row mb-lg-3 d-flex justify-content-evenly">
                            <div class="col-12 col-lg-4">
                                <label>Enter Competition Name</label>
                                <input class="mt-2 w-100 form-control"  type="text" name="competition-name">
                            </div>
                            <div class="col-12 col-lg-4">
                                <label>Enter Competition Image</label>
                                <input class="mt-2 w-100 form-control"  type="file" name="competition-image[]">
                            </div>
                            <div class="col-12 col-lg-4">
                                <label>Select country</label>
                                <!-- available countries will be displayed here by getting it from the database -->
                                <select class="form-select" aria-label="Default select example" name="country">
                                    <?php foreach ($countries as $key => $value):?>
                                        <option value="<?=$value?>"><?= $value ?></option>
                                    <?php endforeach?>
                                    <option value="country">germany</option>
                                </select>
                            </div>
                            
                        </div>


                        <div class="row mt-3 mt-lg-0 d-flex justify-content-evenly">
                            <input type="submit" value="Upload" name="search-upload" class="w-50 btn mb-3 text-white" id="color">
                        </div>

                       
                   


                    </form>
                </div>
            </div>
        </div>


        
        <script src="../css/bootstrap-5.2.0-dist/js/bootstrap.js"></script>
</body>
<?php unset($_SESSION["news-upload-error"],$_SESSION["news-uploaded"]) ?>
</html>