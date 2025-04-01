<?php

class Router extends AbstractRoute implements InterfaceRouter{
    public function CheckIfFileExist($file){
        if(file_exists($file)){
            return true;
        } else{
            return false;
        }
    }

    protected function CheckIfMethodExist($class,$method){
        if(method_exists($class,"$method")){
            return true;
        } else{
            return false;
        }
    }

    protected function ShowPages($class,$method,$parameter){
        if($this->CheckIfMethodExist($class,$method) == true){
            // echo "this method exist";
            $class->$method($parameter);
        } else{
            echo "this method does not exist";
        }
    }

    protected function CheckUri($UriMethod){
        if($UriMethod == "GET" || $UriMethod == "POST"){
            return true;
        } else{
            return false;
        }
    }
}