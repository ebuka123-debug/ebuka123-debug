<?php
class StreamsController{
    public function WatchMatch($LiveMatchContent){
        $view = new ViewController();
        $id = $LiveMatchContent??NULL;
        if($id){
            //This is where we check to parameter and display the match the user clicked to watch
        } else{
            $view->Display("streams","streams.php");
        }
    }
}