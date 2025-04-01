<?php
class newsDisplayModel extends DbConnection{
    private $conn;

    public function __construct()
    {
        $this->conn = $this->dbConnect();
    }

    public function newsIdexist($newsId){


        if($this->conn){
            $statement = "SELECT news_id FROM news WHERE news_id = '$newsId';";
            $result = $this->conn->query($statement);
            if($result->num_rows > 0){
                return true;
            } else{
                throw new Exception ("page not found"); //newsID not found
            }
        }

        $this->conn->close();

    }

    public function content($newsId)
    {
        if($this->conn){
            $statement = "SELECT news.news_id,
                news.news_title,
                news.news_content,
                news.news_category,
                news_image.news_image,
                news_image.image_order,
                news_image.position,
                news_image.image_badge
                FROM news
                INNER JOIN news_image ON news.news_id=news_image.news_id;
            ";
           
            $result = $this->conn->query($statement);
            // echo "<pre>";
            if($result->num_rows > 0){
                $matchedNewsID = [];
                while($row = $result->fetch_assoc()){
                    // var_dump($row);
                    // die;
                    array_push($matchedNewsID,$row);
                }
                // echo "<pre>";
                // var_dump($matchedNewsID);
                // die;
                $newsContentss = [
                    'news_title' => [],
                    'news_content' => [],
                    'news_category' => [],
                    'news_image' => [],
                    'image_order' => [],
                    'position' =>[],
                    'image_badge' => []
            
                ];

                foreach($matchedNewsID as $row => $news){
                    if($news['news_id'] == $newsId){

                        array_push($newsContentss['news_title'],$news['news_title']);
                        array_push($newsContentss['news_content'],$news['news_content']);
                        array_push($newsContentss['news_category'],$news['news_category']);
                        array_push($newsContentss['news_image'],$news['news_image']);
                        array_push($newsContentss['image_order'],$news['image_order']);
                        array_push($newsContentss['position'],$news['position']);
                        array_push($newsContentss['image_badge'],$news['image_badge']);
                    }
                }

                // var_dump($newsContentss);
                $newsContentDetail = [
                   'news_title' => $newsContentss['news_title'][0],
                   'news_content' => $newsContentss['news_content'][0],
                   'news_category' => $newsContentss['news_category'][0],
                   'news_image' => $newsContentss['news_image'],
                   'image_order' => $newsContentss['image_order'],
                   'position' => $newsContentss['position'],
                   'image_badge' => $newsContentss['image_badge']

                ];

                // var_dump($newsContentDetail);
                return $newsContentDetail;
            } else{
                throw new Exception("error just happened look into it no news in database");
            }
        }

        $this->conn->close();
    }

    public function selectNewsImage($id){
        $statement = "SELECT news_id,image_order,news_image FROM news_image;";
        $result = $this->conn->query($statement);
        $image = [];
        if($result->num_rows >0){
            while($image_row = $result->fetch_assoc()){
                // array_push($news,$image_row);
                // echo "<pre>";
                // var_dump($image_row);
                array_push($image,$image_row);
                // die;
            }
        }

        // var_dump($second);
        // foreach($image_row)
        foreach($image as $key => $value){
            if($value['news_id'] == $id){
                
                if($value['image_order'] == "image_1"){
                    // echo $value['news_image'].$value['image_order'];
                    return $value['news_image'];
                }
            }
        }


        $this->conn->close();
    }

    public function selectedNews()
    {
        if($this->conn){
            $statement  = "SELECT *,
                    CASE 
                        WHEN TIMESTAMPDIFF(SECOND, created_at, NOW()) < 60 
                            THEN CONCAT(TIMESTAMPDIFF(SECOND, created_at, NOW()), ' second', 
                                        CASE WHEN TIMESTAMPDIFF(SECOND, created_at, NOW()) = 1 THEN '' ELSE 's' END, ' ago')
                        WHEN TIMESTAMPDIFF(MINUTE, created_at, NOW()) < 60 
                            THEN CONCAT(TIMESTAMPDIFF(MINUTE, created_at, NOW()), ' minute', 
                                        CASE WHEN TIMESTAMPDIFF(MINUTE, created_at, NOW()) = 1 THEN '' ELSE 's' END, ' ago')
                        WHEN TIMESTAMPDIFF(HOUR, created_at, NOW()) < 24 
                            THEN CONCAT(TIMESTAMPDIFF(HOUR, created_at, NOW()), ' hour', 
                                        CASE WHEN TIMESTAMPDIFF(HOUR, created_at, NOW()) = 1 THEN '' ELSE 's' END, ' ago')
                        WHEN DATEDIFF(NOW(), created_at) < 31 
                            THEN CONCAT(DATEDIFF(NOW(), created_at), ' day', 
                                        CASE WHEN DATEDIFF(NOW(), created_at) = 1 THEN '' ELSE 's' END, ' ago')
                        WHEN TIMESTAMPDIFF(MONTH, created_at, NOW()) < 12 
                            THEN CONCAT(TIMESTAMPDIFF(MONTH, created_at, NOW()), ' month', 
                                        CASE WHEN TIMESTAMPDIFF(MONTH, created_at, NOW()) = 1 THEN '' ELSE 's' END, ' ago')
                        ELSE 
                            CONCAT(TIMESTAMPDIFF(YEAR, created_at, NOW()), ' year', 
                                CASE WHEN TIMESTAMPDIFF(YEAR, created_at, NOW()) = 1 THEN '' ELSE 's' END, ' ago')
                    END AS time_ago
                FROM news;


            ";

            $result = $this->conn->query($statement);

            $news = [];
            if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
                    // echo "<pre>";
                    // var_dump($row);
                    
                    array_push($news,$row);
                }
            }

            // return $a;
            return $news;
        }

        $this->conn->close();
    }

    public function trendingNews()
    {
        if($this->conn){
            $statement = "SELECT news_id, 
            views * (1 / SQRT(TIMESTAMPDIFF(HOUR,created_at, NOW()) + 1)) 
            AS trending_score 
            FROM news
            ORDER BY trending_score 
            DESC LIMIT 10
            ";

            $result = $this->conn->query($statement);
            $trendingNewsID = [];
            if($result->num_rows > 0){
                while($rows = $result->fetch_assoc()){
                    array_push($trendingNewsID,$rows['news_id']);
                }
                // var_dump($trendingNewsID);
                return $trendingNewsID;
            } else{
                throw new Exception ("could not find news to check views");
            }
        }
    }

    public function categoryTrendingNews($category)
    {
        if($this->conn){
            $statement = "SELECT news_id, 
            views * (1 / SQRT(TIMESTAMPDIFF(HOUR,created_at, NOW()) + 1)) 
            AS trending_score 
            FROM news
            WHERE news_category = '$category'
            ORDER BY trending_score 
            DESC LIMIT 10
            ";
    
            $result = $this->conn->query($statement);
            $trendingNewsID = [];
            if($result->num_rows > 0){
                while($rows = $result->fetch_assoc()){
                    array_push($trendingNewsID,$rows['news_id']);
                }
                // var_dump($trendingNewsID);
                return $trendingNewsID;
            } else{
                throw new Exception ("could not find news to check views");
            }
        }
    }
}