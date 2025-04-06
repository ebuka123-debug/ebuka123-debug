<?php

class Route extends Router{
    public function RoutingProcess($controller,$method,$parameter,$UriMethod){
        $file = "controller/$controller"."Controller.php";
        if($this->CheckUri($UriMethod) == true){
            if($this->CheckIfFileExist($file) == true){
                $lowerCaseController = strtolower($controller);
                switch($lowerCaseController){
                    case "football":
                        $football = new FootballController();
                        $this->ShowPages($football,$method,$parameter); //showPages to be changed to view
                    break;
                    case "news":
                        $news = new NewsController();
                        $this->ShowPages($news,$method,$parameter); //showPages to be changed to view
                    break;
                    case "streams":
                        $streams = new StreamsController();
                        $this->ShowPages($streams,$method,$parameter); //showPages to be changed to view
                    break;
                    case "login":
                        $login = new LoginController();
                        // $method??"loginPage";
                        $accessedMethod = ($method == NULL)? "loginPage" : $method;
                        $this->ShowPages($login,$accessedMethod,$parameter);
                    break;

                    case "signup":
                        $signup = new SignUpController();
                        $accessedMethod = ($method == NULL)? "signupPage" : $method;
                        $this->ShowPages($signup,$accessedMethod,$parameter);
                    break;

                    case "changepassword":
                        $changePassword = new ChangePasswordController();
                        $accessedMethod = ($method == NULL)? "changePasswordPage" : $method;
                        $this->ShowPages($changePassword,$accessedMethod,$parameter);
                    break;

                    case "admin":
                        $admin = new AdminController();
                        $this->ShowPages($admin,$method,$parameter);
                    break;

                    case "search":
                        $search = new SearchController();
                        // $method = "search";
                        $this->ShowPages($search,$method,$parameter);
                    break;


                    default:
                        echo "we are hitting the default";
                    break;


                }
            } else{
                    if(empty($controller)){
                        $home = new FootballController();
                        $this->ShowPages($home,"matches",$parameter); //showPages to be changed to view
                    } else{
                        echo "file does not exist";
                    }
                }
        } else{
            // echo $UriMethod;
        }
        
    }
}