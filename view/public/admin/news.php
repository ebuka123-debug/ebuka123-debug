<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Top stories Upload</title>
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
                    <?php if(isset($_SESSION["news-upload-error"])):?>
                        <div class="alert alert-danger text-center" role="alert">
                            <span><span><?php echo  $_SESSION["news-upload-error"]?></span></span>
                        </div>

                    <?php elseif(isset($_SESSION["news-uploaded"])):?>
                        <div class="alert alert-success text-center" role="alert">
                            <span><span><?php echo  $_SESSION["news-uploaded"]?></span></span>
                        </div>
                    <?php endif ?>
                    <form action="/admin/addnews/" method="post" enctype="multipart/form-data"> 
                        <div class="row mb-lg-3 d-flex justify-content-evenly">
                            <div class="col-12 col-lg-4">
                                <label>Enter badge logo</label>
                                <input class="mt-2 w-100 form-control"  type="file" name="badge-logo">
                            </div>
                            <div class="col-12 col-lg-4">
                                <label>Enter Image</label>
                                <input class="mt-2 w-100 form-control"  type="file" name="image[]">
                            </div>

                            <div class="col-12 col-lg-4">
                              
                                <label>Enter image badge</label>
                                <textarea class="form-control mt-2" name="image-badge[1]"></textarea>
                        
                         
                                <!-- <select class="form-select mt-2" name="image-paragraph[image1]" id="">
                                    <option>after_paragraph_1</option>
                                    <option>after_paragraph_2</option>
                                    <option>after_paragraph_3</option>
                                </select> -->
                            </div>
                            <!-- <div class="col-12 col-lg-4">
                                <label>Enter Category</label>
                                <select class="form-select mt-2" aria-label="Default select example" name="news-category">
                                    <option>premier league</option>
                                    <option>laliga</option>
                                </select>
                            </div> -->

                            
                        </div>

                        <div class="row mb-lg-3 d-flex">
                            <div class="col-12 col-lg-4"> 
                                <label for="">Paragraph</label>
                                <input type="text"class="mt-2 w-100 form-control" name="image-paragraph[image1]">
                                <!-- <label>Enter Image 2 (optional)</label>
                                <input class="mt-2 w-100 form-control"  type="file" name="image[]"> -->
                            </div>
                            <div class="col-12 col-lg-4">
                                <label>Enter Image 2 (optional)</label>
                                <input class="mt-2 w-100 form-control"  type="file" name="image[]">
                                <!-- <label for="">Paragraph (optional)</label>
                                <input type="text"class="mt-2 w-100 form-control" name="image-paragraph[image2]"> -->
                                <!-- <select class="form-select mt-2" name="image-paragraph[image2]" id="">
                                    <option>after_paragraph_1</option>
                                    <option>after_paragraph_2</option>
                                    <option>after_paragraph_3</option>
                                </select> -->
                            </div>
                            <div class="col-12 col-lg-4">
                                 <label for="">Paragraph (optional)</label>
                                <input type="text"class="mt-2 w-100 form-control" name="image-paragraph[image2]">
                                <!-- <label>Enter Category</label>
                                <select class="form-select mt-2" aria-label="Default select example" name="news-category">
                                    <option>premier league</option>
                                    <option>laliga</option>
                                    <option>bundesliga</option>
                                    <option>champions league</option>
                                </select> -->
                            </div>
                        </div>

                        <div class="row mb-lg-3 d-flex">
                            <div class="col-12 col-lg-4"> 
                                <!-- <label>Enter Image 3 (optional)</label>
                                <input class="mt-2 w-100 form-control"  type="file" name="image[]"> -->
                                <label>Enter image 2 badge</label>
                                <textarea class="form-control mt-2" name="image-badge[2]"></textarea>
                            </div>
                            <div class="col-12 col-lg-4">
                                <label>Enter Image 3 (optional)</label>
                                <input class="mt-2 w-100 form-control"  type="file" name="image[]">
                                <!-- <label for="">Paragraph (optional)</label>
                                <input type="text"class="mt-2 w-100 form-control" name="image-paragraph[image3]"> -->
                                <!-- <select class="form-select mt-2" name="image-paragraph[image3]" id="">
                                    <option>after_paragraph_1</option>
                                    <option>after_paragraph_2</option>
                                    <option>after_paragraph_3</option>
                                </select> -->
                            </div>
                            <div class="col-12 col-lg-4">
                                <label for="">Paragraph (optional)</label>
                                <input type="text"class="mt-2 w-100 form-control" name="image-paragraph[image3]">
                            </div>
                        </div>

                        <div class="row mb-lg-3 d-flex">
                            <div class="col-12 col-lg-4">
                                <label>Enter image 3 badge</label>
                                <textarea class="form-control mt-2" name="image-badge[3]"></textarea>
                            </div>
                            <div class="col-12 col-lg-4">
                                <label>Enter Category</label>
                                <select class="form-select mt-2" aria-label="Default select example" name="news-category">
                                    <option>premier league</option>
                                    <option>laliga</option>
                                    <option>bundesliga</option>
                                    <option>champions league</option>
                                </select>
                            </div>
                          
                        </div>

                        <div class="row mb-1 mb-lg-3 d-flex">
                            <div class="col-12 mb-1 col-md-9">
                                <label>Enter Title</label>
                               <textarea class="form-control mt-2" name="news-title"></textarea>
                            </div>
                            <div class="col-12 mb-1 col-md-3">
                                <label>Enter badge-name</label>
                               <textarea class="form-control mt-2" name="badge-logo-name"></textarea>
                            </div>
                        </div>

                        <div class="row mb-1 mb-lg-4 d-flex">
                            <div class="col-12 col-lg-12">
                                <label>Enter content </label>
                                <textarea class="form-control news mt-2" name="news-content"></textarea>
                            </div>
                        </div>

                        <!-- <div class="row mb-1 mb-lg-4 d-flex">
                            <div class="col-12 col-lg-12">
                                <label>Enter content second paragraph</label>
                                <textarea class="form-control news mt-2" name="second-paragraph"></textarea>
                            </div>
                        </div> -->

                        <div class="row mt-3 mt-lg-0 d-flex justify-content-evenly">
                            <input type="submit" value="Upload" name="news-upload" class="w-50 btn mb-3 text-white" id="color">
                        </div>

                       
                   


                    </form>
                </div>
            </div>
        </div>

        <hr>
        <!-- <div class="container-fluid p-3 p-md-5" id="c">
            <div class="row text-secondary mb-3 footer-font-size">
                <div class="col text-center">
                    <b>Live Scores and fixtures for football on 26 August 2022</b><br>
                    <span>Looking for the livescore today? See live scores and fixtures for football on 26 August 2022.
                        LiveScore brings you the latest football fixtures, results and live score information for 26 August 2022. Revisit scores and statistics and look ahead for upcoming fixtures for your favourite sport team. Plus, find out the livescore today, 26 August 2022.</span>
                </div>
            </div>
        </div> -->

        
        <script src="../css/bootstrap-5.2.0-dist/js/bootstrap.js"></script>
</body>
<?php unset($_SESSION["news-upload-error"],$_SESSION["news-uploaded"]) ?>
</html>