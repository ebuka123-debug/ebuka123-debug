<?php

class adminModel extends DbConnection{
    private $conn;

    public function __construct()
    {
        $this->conn = $this->dbConnect();
    }

    public function regionUpload($regionName,$regionImage,$countryOrOthers)
    {
        $regionID = uniqid();
        $statement = "INSERT INTO region (
                    region_id,
                    region_name,
                    region_image,
                    country_or_others
                )
                    VALUES (
                    '$regionID',
                    '$regionName',
                    '$regionImage',
                    '$countryOrOthers'
                    )
        ";

        if($this->conn->query($statement) === TRUE)
        {
            return true;
           
        } else{
            throw new Exception ("problem while uploading region details");
        }
    }

    public function addNewsImage(array $details)
    {

        $statement = "SELECT news_id FROM news
            ORDER BY created_at DESC
            LIMIT 1
        ";

        $result = $this->conn->query($statement);

        // if($result === True){
            if($result->num_rows > 0){
                while($row = $result-> fetch_assoc()){
                    $news_id = $row['news_id'];
                }
            }
        // }

        // exit;


        
        //looping from 0 to the count of images_checked
        for($image = 0; $image < count($details['images_checked']); $image++){
            //explode the images_position so as to know if the index 1 value matches to $image
            $images_number = explode("|",$details['image_position'][$image]);
        
            
            //checking if $image +1 is equals to the 1 index of the $image number
            //meaning that to any image that 1 is added, if matches the index 1 of the $image_number
            //$image +1 will automatically have the attributes of the index 1
            if($image+1 == $images_number[1]){
            // $image_gotten = $image+1;
            // echo "image".$image_gotten."(".$images_number[2].")".",";
            $position = $images_number[2];
            $news_image = $details['images'][$image+1];
            $image_order = "image_".$image+1;
            $image_badge = newsAuth()['image_badge'][$image+1];
            $insert = "INSERT INTO news_image(
                news_id,
                news_image,
                image_order,
                position,
                image_badge
            ) VALUES (
                '$news_id',
                '$news_image',
                '$image_order',
                '$position',
                '$image_badge'
            )
            
            ";

                // $a = $image+1;
                // echo "images" .$a."(".$position."),";
            if($this->conn->query($insert) === TRUE){
                // echo "images saved successfully";
                $status = true;
            } else{
                throw new Exception ("error occured while saving image");
            }
            // echo $details['images'][$image+1]."(".$images_number[2]."),";
            // var_dump($images_number[2]);

              
            }

        }

        if(isset($status) && $status == true){
            return true;
        }
    }
    public function addNews(array $details)
    {

        $newsId = $details['news_id'];
        $newsTitle = $details['news_title'];
        $newsContent = $details['news_content'];
        $newsCategory = $details['news_category'];
        $badgeLogoName = $details['badge_logo_name'];
        $badgeLogoImage = $details['badge_logo_image'];
        if($this->conn){
            $statement = "INSERT INTO news (
                news_id,
                news_title,
                news_content,
                news_category,
                badge_logo_name,
                badge_logo_image
            ) 

            VALUES (
                '$newsId',
                '$newsTitle',
                '$newsContent',
                '$newsCategory',
                '$badgeLogoName',
                '$badgeLogoImage'
            )
            
            ";


            if($this->conn->query($statement) === TRUE){
                // echo "saved to database";
                // if($this->addNewsImage($details) == true){
                //     return true;
                // }
                return true;
            } else{
                throw new Exception($this->conn->connect_error."did not save to database");
            }
        }

        $this->conn->close();
    }

    public function deleteNews($newsID)
    {
        $statement ="SELECT news.news_id,
                news.badge_logo_image,
                news_image.news_image
                FROM news
                INNER JOIN news_image ON news.news_id=news_image.news_id
                WHERE news.news_id = '$newsID'
            ";
        $result= $this->conn->query($statement);
        if($this->conn){
            if($result->num_rows > 0){
                $a =[];
                while($rows = $result->fetch_assoc()){
                
                    array_push($a,$rows);
                }

                // $file = "/view/images/news";
                // return $a;
                // require(__DIR__."/../view/public/")

              
               
                foreach($a as $key => $value){
                    // echo $value['badge_logo_image'].",";
                    $badge_logo = $value['badge_logo_image'];
                    $news_image = $value['news_image'];
                    $badgeLogoImage = "view/images/news/$badge_logo";
                    $newsImage = "view/images/news/$news_image";

                unlink($badgeLogoImage); 
                unlink($newsImage);
                $status = true;

                // echo $badge_logo.",".$news_image;
                  
                }

                // die;

                if(isset($status) && $status == true){
                    $statement = "DELETE FROM news WHERE news_id='$newsID'";
                    if($this->conn->query($statement) === TRUE){
                        return true;
                    }
                } else{
                    throw new Exception("error while deleting");
                }
                
            }
        }

        $this->conn->close();
    }


}