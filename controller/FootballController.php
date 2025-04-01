<?php
class FootballController{
    public function Matches($MatchContent=NULL){
        $view = new ViewController();
        $id = $MatchContent??NULL;
        if($id){
            // echo "this is where the match content";
            $view->Display("football","match-content.php");
        } else{
            // echo "if the match content is empty display the home page";
            $view->Display("football","home.php");
        }
    }

    public function Favorites($MatchContent){
        $view = new ViewController();
        $id = $MatchContent?? NULL;
        if($id){
            echo "this is where we would display the match content of the favorite match clicked";
        } else{
            // echo "we will just display the favorite page";
            $view->Display("football","favorites.php");
        }
    }
}