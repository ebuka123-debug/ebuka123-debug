<?php

//interface folder
require_once(__DIR__."/Interface/InterfaceRouter.php");

//abstract folder
require_once(__DIR__."/Abstract/AbstractRoute.php");
require_once(__DIR__."/Abstract/AbstractViewController.php");

//config folder
require_once(__DIR__."/config/Router.php");
require_once(__DIR__."/config/Route.php");
require_once(__DIR__."/config/dbConfig.php");

//connection folder
require_once(__DIR__."/connect/dbConnect.php");

//model folder
require_once(__DIR__."/model/userModel.php");
require_once(__DIR__."/model/newsModel.php");
require_once(__DIR__."/model/newsDisplayModel.php");
require_once(__DIR__."/model/adminModel.php");
require_once(__DIR__."/model/searchModel.php");

//library folder
require_once(__DIR__."/library/signUp.php");
require_once(__DIR__."/library/login.php");
require_once(__DIR__."/library/helpers.php");
require_once(__DIR__."/library/requestMethod.php");
require_once(__DIR__."/library/newsImageAuth.php");
require_once(__DIR__."/library/newsAuth.php");
require_once(__DIR__."/library/singleImageAuth.php");




//controller folder
require_once(__DIR__."/controller/SearchController.php"); //SearchController
require_once(__DIR__."/controller/ViewController.php");  //ViewController
require_once(__DIR__."/controller/FootballController.php");  //FootballController
require_once(__DIR__."/controller/NewsController.php");  //NewsController
require_once(__DIR__."/controller/StreamsController.php");  //StreamsController
require_once(__DIR__."/controller/LoginController.php");  //LoginController
require_once(__DIR__."/controller/SignUpController.php"); //SignupController
require_once(__DIR__."/controller/ChangePasswordController.php");  //ChangePasswordController
require_once(__DIR__."/controller/AdminController.php");  //AdminController

 


