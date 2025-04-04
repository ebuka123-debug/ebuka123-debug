<?php
class FootballController extends ViewController{
    public function Matches($MatchContent=NULL){
        // $view = new ViewController();
        $id = $MatchContent??NULL;
        if($id){
            // echo "this is where the match content";
            $this->Display("football","match-content.php");
        } else{
            // echo "if the match content is empty display the home page";
            $this->Display("football","home.php");
        }
    }

    public function Favorites($MatchContent){
        // $view = new ViewController();
        $id = $MatchContent?? NULL;
        if($id){
            echo "this is where we would display the match content of the favorite match clicked";
        } else{
            // echo "we will just display the favorite page";
            $this->Display("football","favorites.php");
        }
    }

    // public function Search($parameter)
    // {
    //     $search = new SearchController();
    //     $Id = $parameter?? NULL;

    //     if($Id){
    //         // echo "there should be no parameter or redirect back to the home page";
    //         var_dump($_SERVER["REQUEST_METHOD"],$_GET);
    //         $this->Display("football","home.php");

    //     } else{
    //         var_dump($_SERVER["REQUEST_METHOD"],$_GET);
    //         $search->search();
    //         // echo "we would run our thing here since no parameter";
    //     }
    // }
}