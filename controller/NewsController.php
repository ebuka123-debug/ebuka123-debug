<?php
class NewsController{

    private $view;
    private $newsModel;
    
    public function __construct()
    {
        $this->view = new ViewController();
        $this->newsModel = new newsDisplayModel();
   

    }

    private function getAttributes($newsId){

        $news = $this->newsModel->content($newsId);
        $_GET['football'] = 'football_news';
        $_GET['news_title'] = $news['news_title'];
        $_GET['news_content'] = $news['news_content'];
        $_GET['news_category'] = $news['news_category'];
        $_GET['news_image'] = $news['news_image'];
        $_GET['image_order'] = $news['image_order'];
        $_GET['position'] = $news['position'];
        $_GET['image_badge'] = $news['image_badge'];
        $_GET['news'] = $newsId;
    }
    
    public function LatestNews($NewsContent)
    {
     try {

        $newsId = $NewsContent??NULL;
     
       
        if($newsId){
            // echo $newsId;
        //    echo $news;
            $newsSelected = $this->newsModel->newsIdexist($newsId);
            //secret 
            $secretID = $newsId."se34hfg567hg";
            if($newsSelected == true){
                // $_SESSION['news_ID'] = $newsId;

        
                $this->view->Display("news","news-content.php");
            }

  
        } else{
            $this->view->Display("news","news.php");
        }
     } catch (\Exception $e) {
        //throw $th;
        $error = $e->getMessage();
        echo $error;
     }
    }

    public function premierLeague($NewsContent)
    {
        try {
            $newsId = $NewsContent??NULL;
            // $news = $this->newsModel->selectedNews();
            $news = $this->newsModel->content($newsId);


            if($newsId){

                $newsSelected = $this->newsModel->newsIdexist($newsId);
                //secret 
                $secretID = $newsId."se34hfg567hg";
                if($newsSelected == true){
                    // $_SESSION['news_ID'] = $newsId;
                    $this->getAttributes($newsId);

                    $this->view->Display("news","news-content.php");
                }
            }else{
                //   var_dump($news);
                $this->view->Display("news","premier-league.php");
            }
        } catch (\Exception $e) {
            //throw $th;
            $error = $e->getMessage();
            echo $error;
        }
    }

    public function laliga($NewsContent)
    {
        try {
            $newsId = $NewsContent??NULL;
            //Assigning news content with relation to $newsID to $news varaible
            $news = $this->newsModel->content($newsId);

            //When news ID is given
            if($newsId){

                $newsSelected = $this->newsModel->newsIdexist($newsId);
                //Secret 
                $secretID = $newsId."se34hfg567hg";
                if($newsSelected == true){
                    //Gets content related to the news ID
                    $this->getAttributes($newsId);

                    $this->view->Display("news","news-content.php");
                }
            }else{
                //When news ID is not given
                $this->view->Display("news","laliga.php");
            }
        } catch (\Throwable $e) {
            //throw $th;
            $error = $e->getMessage();
            echo $error;
        }
    }
}