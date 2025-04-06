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

    public function regionCategory()
    {
      $this->view->Display("admin","region-upload.php");
    }

    public function regionUpload()
    {
      try {

        // echo "this is where we validate the region uploads";
        if(requestMethod() == "POST" && isset($_POST["region-upload"])){

          $regionName = $_POST["region-name"];
          $selectedRegion = $_POST["selected-region"];

          if(checkRegionDatas($regionName,$selectedRegion)){

            $countryOrOthers = countryOrothers($selectedRegion);   
            $path = "view/images/region/$countryOrOthers/";     //this is the path or folder where the picture or image will be saved

            $authRegionImage = singleImageAuth('region-image','region');

            if($authRegionImage['status'] == true){
              // var_dump($_POST,$_FILES,$tmpName,$location,$regionImageName);
              if(move_uploaded_file($authRegionImage["tmp_name"],$path.$authRegionImage["file_name"])){
                $status = true;
              } else{
                  throw new Exception("error while uploading file");
              }

              if(isset($status)){
                $adminModel = new adminModel();

                if($adminModel->regionUpload($regionName,$authRegionImage["file_name"],$selectedRegion)){
                    $_SESSION["region-uploaded"] = "region category uploaded successfully";
                    header("location: /admin/regionCategory");
                }
              
              }
            }
          }

        } else{
            throw new Exception("invalid request");
        }
        
      } catch (\Exception $e) {
    
        $error = $e->getMessage();
        
        $_SESSION["region-upload-error"] = $error;
        $_SESSION["region-name"] = $_POST["region-name"];
        header("location: /admin/regionCategory");
      }
    }

    public function competitionCategory()
    {
      $this->view->Display("admin","search-upload.php");
    }

    public function competitionUpload()
    {
      try {

        // echo "this is where we validate the region uploads";
        if(requestMethod() == "POST" && isset($_POST["search-upload"])){

          
          $competitionName = $_POST["competition-name"];
          $competitionCountry = $_POST["country"];


          if(!empty(trim($competitionName))){
              
              if(!empty(trim($competitionCountry))){
               
                $adminModel = new adminModel();
                $countrExists = $adminModel->countryExists($competitionCountry);

                if($countrExists){    //checks if country (name of country) exists in the database
                  
                  $path = "view/images/competition/";   //this is the path or folder where the picture or image will be saved

                  $authCompetitionImage = singleImageAuth('competition-image','competition');
      
                  if($authCompetitionImage['status'] == true)
                  {
                  
                   
                 
                      if(move_uploaded_file($authCompetitionImage["tmp_name"],$path.$authCompetitionImage["file_name"]))
                      {
                        $status = true;
                      } else{
                          throw new Exception("error while uploading file");
                      }
      
                      if(isset($status))
                      {
                        $adminModel = new adminModel();
        
                        if($adminModel->competitionUpload(trim($competitionName),$authCompetitionImage["file_name"],$competitionCountry))
                        {
                            $_SESSION["competition-uploaded"] = "competition category uploaded successfully";
                            
                            header("location: /admin/competitionCategory");
                        }
                      
                      }
                  }
                }
              } else{
                throw new Exception("please input a country");
              }
          } else{
              throw new Exception ("please input a competition name");
          }


        //  echo singleImageAuth(); 
        } else{
          throw new Exception ("invalid request");
        }
        
      } catch (\Exception $e) {
        //throw $th;

        $error = $e->getMessage();

        
        $_SESSION["competition-upload-error"] = $error;
        $_SESSION["competition-name"] = $_POST["competition-name"];
        header("location: /admin/competitionCategory");
      }
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