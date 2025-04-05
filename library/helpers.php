<?php

function RouteUri($controller,$method,$parameter = NULL){
    if($parameter == NULL){
        return "/$controller/$method";
    } else{
        return "/$controller/$method/$parameter";
    }
}

function passwordValid($password){
    $split = str_split($password);

    if(count($split) >=8){
        return true;
    } else{
        throw new Exception('Password should contain more than 7 characters');
    }
}

function checkim(array $images_position, array $image_number, array $images){
  for($x = 0; $x<count($images_position); $x++){
        if($image_number[1] == $images[$x]){
            return "image" . $x;
        }
  }
}

function getNewsCategory(array $details,$newsCategory){
    foreach($details as $Key => $category){
        if(strtolower($newsCategory) == strtolower($category['news_category'])){
            return $category['news_category'];
        }
    }
}

function getTrendingNews(array $news, $newsModel, array $trendingNews){
    $modifiedtrendingNews = [];
    $index = 1;

    foreach($news as $row => $content){
        if(in_array($content['news_id'],$trendingNews)){
            $modifiedtrendingNews[$index] = ['news_id' => $content['news_id'],
                'news_title' => $content['news_title'],
                'badge_logo_name' => $content['badge_logo_name'],
                'news_image' => $newsModel->selectNewsImage($content["news_id"]),
                'news_category' => $content['news_category'], 

        ];
            // echo $content['news_id'].",";
            // echo $content['news_title'].",";
            $index++;
        }
    }

    return $modifiedtrendingNews;
    // var_dump($modifiedtrendingNews);
}

function checkRegionDatas($regionName,$selectedRegion){     //checks if it is country or others (region)
    if(!empty($regionName))
    {
        if($selectedRegion == "country")
        {
            return true;
        } else{
           if($selectedRegion == "others")
           {
                return true;
           } else{
                throw new Exception("this selected region is not accepted");
           }
        }
    } else{
        throw new Exception("region name is not given");
    }
}

function countryOrothers($selectedRegion)   //checks if the selected region is country or others
{
    if($selectedRegion == "country")
    {
        return "country";
    } else{
        if($selectedRegion == "others")
        {
            return "others";
        }
    }
}
