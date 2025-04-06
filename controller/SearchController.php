<?php
class SearchController{
    public function search()
    {
        try{
            if($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['search'])){ //when the request gotten is POST
                $countrySearched = trim($_POST['search-value']);
    
                $searchModel = new searchModel();
    
                if($searchModel->search($countrySearched)){     //When or if searched
                    $_SESSION["search-result"] = $searchModel->search($countrySearched);
                    $_SESSION["searched-word"] = $countrySearched;
                    header("location: /football/matches");
                }


            } else{
                throw new Exception("invalid request");    //TO run the search feature, the request method has to be POST
            }
        } catch(Exception $e){
            $error = $e->getMessage();
            header("location: /football/matches");
        }
    }

    public function cancel()
    {
        try{
            if($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['search-cancel'])){
                unset($_SESSION["searched-word"],$_SESSION["search-result"]);
                header("location: /football/matches");

            } else{
                throw new Exception ("invalid request");
            }
        } catch(Exception $e){
            $error = $e->getMessage();
            header("location: /football/matches");
        }
    }
}