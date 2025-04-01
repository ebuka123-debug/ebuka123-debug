<?php
include("Abstract/AbstractMainController.php");

class ViewController extends AbstractViewController{
    public function Display($folder,$pages){
        require_once("view/public/$folder/$pages");
    }
}