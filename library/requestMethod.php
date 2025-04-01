<?php

function requestMethod(){
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        return 'POST';
    } elseif($_SERVER['REQUEST_METHOD'] == 'GET'){
        return 'GET';
    }
}