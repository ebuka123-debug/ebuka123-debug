<?php
session_start();
include("pagesController.php");
$url = explode("/",$_SERVER["REQUEST_URI"]);
$controller = $url[1];
$method = $url[2]??NULL;
$parameter = $url[3]??NULL;
$UriMethod = $_SERVER["REQUEST_METHOD"];
$process = new Route();
$process->RoutingProcess($controller,$method,$parameter,$UriMethod);