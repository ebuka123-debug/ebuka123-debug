<?php


function newsAuth($newsId){
    //news-category of news
    $news_categories = [
        'premier league',
        'laliga',
        'bundesliga',
        'champions league'
    ];  

    //checking request method and if $_POST[news-uploaed] is set
    if(requestMethod() == "POST" && isset($_POST["news-upload"])){

        $newsModel = new newsModel();
        $newsImages = $newsModel->getImages($newsId);

        die;

        $image_positions = [];

        
        for($image = 1; $image < count($newsImages); $image++){
            //news image e.g image 1, or image 2
            $needle = $_POST["image-paragraph"]["image$image"];

            if(is_numeric($needle)){
                // echo "it is numeric";
                $status = true;
                $paragraph = "after_paragraph_$needle";
                array_push($image_positions,"image|$image|".$paragraph);
            } else{
                throw new Exception("image $image paragraph is not numeric ");
            }
        }

        // die;
    
        if(isset($status) && $status == true){
            $imageBadgeName = [];
            foreach($_POST['image-badge'] as $key => $imageBadge)
            {
                if(in_array($key,$newsImages)){
                    // echo $key.",$imageBadge";
                    if(!empty(trim($imageBadge))){
                        // echo "we can proceed";
                        $imageBadgeStatus = true;
                        $imageBadgeName[$key] = $imageBadge;
                    } else{
                        throw new Exception ("the image $key badge is empty");
                    }
                }
            }

            if(isset($imageBadgeStatus) && $imageBadgeStatus == true)
            {
                //check if news-category of news exist
                if(in_array(strtolower($_POST['news-category']),$news_categories))
                {
                    //checking if news-title is given
                    if(!empty(trim($_POST['news-title'])))
                    {
                        //checking if logo-name is given
                        if(!empty(trim($_POST['badge-logo-name'])))
                        {
                            //checking if news-content is given
                            if(!empty(trim($_POST['news-content'])))
                            {
                                //checking validation of uploaded images that are to be used for news if valiated to be true 
                                $category = str_replace(' ','', $_POST['news-category']);
                                return [
                                    'status' => true,
                                    'news_category' => $category,
                                    'news_title' => $_POST['news-title'],
                                    'badge_logo_name' => $_POST['badge-logo-name'],
                                    'news-content' => $_POST['news-content'],
                                    'image_position' => $image_positions,
                                    'image_badge' => $imageBadgeName
                                ];
        
                            
                            
                            } else{
                                throw new Exception("news content is required");
                            }
                        } else{
                            throw new Exception("logo name is been required");
                        }
                    } else{
                        throw new Exception("title is required");
                    }
                } else{
                    throw new Exception("news-category does not exists");
                }
            }

     
        } else{
            // throw new Exception("check image position");
            echo "check zerrydi";
        }
      
    } else{
        throw new Exception ("An error occured please wait...");
    }
}