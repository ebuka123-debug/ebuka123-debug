<?php
class newsModel extends DbConnection{
    private $conn;

    public function __construct()
    {
        $this->conn = $this->dbConnect();
    }



    public function updateViews($news_id)
    {
        if($this->conn){
            $statement = "SELECT views FROM news WHERE news_id = '$news_id'";
            $result = $this->conn->query($statement);
            $views = [];
            if($result->num_rows >0){
                while($rows = $result->fetch_assoc()){
                    // var_dump($rows);
                    $status = true;
                    array_push($views,$rows['views']);
                }
            }

          if(isset($status) && $status == true){
            // var_dump($views);
            if(is_numeric($views[0])){
                $updatedViews = $views[0] + 1;
                $statement = "UPDATE news SET views = $updatedViews WHERE news_id = '$news_id'";
                if($this->conn->query($statement) === TRUE){
                    // echo "it has succcess fully updated views";
                    return true;
                } else{
                    // echo "un able to update view";
                    throw new Exception ("An error occured while refreshing views news");
                }
            } else{
                // echo "page not found";
                throw new Exception ("An error occured while refreshing v news");
            }
          }
        }
    }

    public function getImages($news_id)
    {
        if($this->conn){
            $statement = "SELECT news_image FROM news_image WHERE news_id = '$news_id'";
            $result = $this->conn->query($statement);

            if($result->num_rows > 0){
                while($rows = $result->fetch_assoc()){
                    echo "<pre>";
                    var_dump($rows);
                }
            }
        }
    }
}