<?php
class AdminController{
    private $view;
    private $adminModel;
    
    public function __construct()
    {
        $this->view = new ViewController();
        $this->adminModel = new adminModel();
  

    }

    public function news()
    {
        // $view = new ViewController();
       $this->view->Display("admin","news.php");
        
    }

    public function editNews()
    {
        // $view = new ViewController();
       $this->view->Display("admin","edit-news.php");
    }

    public function deleteNews($newsID)
    {
        try {
          $newsId = $newsID??NULL;
 

          if($newsId){
            // echo "you have an id to be deleted";
              if($this->adminModel->deleteNews($newsId) == true){
                $_SESSION['delete'] = "successfully deleted";
                header('location: /admin/editnews');
              } else{
                throw new Exception ("unable to delete");
              }
          } else{
            $this->view->Display("admin","edit-news.php");
  
          }
        } catch (\Exception $e) {
          //throw $th;
          $_SESSION['delete-error'] = $e->getMessage();
          header('location: /admin/editnews');
        }
    }

    public function addNews()
    {
      try {
        if(newsAuth()['status'] == true){
            // echo "we are ready to save details to database";
          

            if(newsImageAuth()['status'] == true){
           
            
              $images = newsImageAuth()['file_name'];
              
              $tmpName = newsImageAuth()['img_tmp_name'];
      
              $location = newsImageAuth()['storage_location'];
              
              for($image = 0; $image < count($tmpName); $image++){
                // echo $image;
               
                if(move_uploaded_file($tmpName[$image],$location.$images[$image])){
                  $status = true;
                } else{
                  throw new Exception("error while uploading image please wait...");
                }

              } 
              
              // $status = true;
              // echo "<pre>";
              // $a = explode("\n",newsAuth()['news-content']);
              // var_dump($a);
              // var_dump(newsAuth(),newsImageAuth());
              if(isset($status) && $status == true){
                // echo "yes";
                $details = [
                  'news_id' => uniqid(),
                  'news_title' => newsAuth()['news_title'],
                  'news_content' => newsAuth()['news-content'],
                  'news_category' => newsAuth()['news_category'],
                  'badge_logo_name' => newsAuth()['badge_logo_name'],
                  'badge_logo_image' => $images[0],
                  'image_position' => newsAuth()['image_position'],
                  'images_checked' => newsImageAuth()['number_of_checked_images'],
                  'images' => newsImageAuth()['file_name'],
                  'image_badge' => newsAuth()['image_badge']
                ];

                // $image_position = newsAuth()['image_position'];
                // $images_checked = newsImageAuth()['number_of_checked_images'];
                // echo "<pre>";
             

            
                // $news = new adminModel();
                if($this->adminModel->addNews($details) == true && $this->adminModel->addNewsImage($details) == true){
                  
                  $_SESSION['news-uploaded'] = "Successfully uploaded";
                  header('location: /admin/news');
                  return;
                }
              }
            }

            
            // echo 'ginger';
        }
        
         
      } catch (\Exception $e) {
        //throw $th;
        $error = $e->getMessage();
        $_SESSION['news-upload-error'] = $error;
        header('location: /admin/news');
        return;
      }
    }

    public function updateNews($newsID)
    {
      $id = $newsID?? NULL;

      if($id){
        $_SESSION['edit-news'] = "edit news";
        $this->view->Display("admin","update-news.php");

      } else{
        
      }
    }

    public function update($newsID){
      // echo "<pre>";
      // var_dump($_FILES,$_POST);
      // var_dump($_POST);

        // newsAuth($newsID);

        var_dump($_GET);
    

      
    }
}