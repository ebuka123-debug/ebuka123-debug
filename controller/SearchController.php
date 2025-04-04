<?php
class SearchController{
    public function search()
    {
        if($_SERVER['REQUEST_METHOD'] == "POST"){ //when the request gotten is POST
            var_dump($_POST);
        } else{
            echo "no method request for post";
        }
    }
}