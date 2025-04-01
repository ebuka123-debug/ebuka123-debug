<?php

class LoginController extends ViewController{
    public function loginPage()
    {
        $this->Display("checkers","login.php");
        
    }

    public function submit(){
        // echo "we are hitting this submit";

        // echo "we are hitting the submit method in the login";
        // var_dump($_POST);
    
        try {
            if(requestMethod()== "POST" && isset($_POST["login"])){
                // echo "jj";
                $email = $_POST['email'];
                $password = $_POST['password'];
                if(loginDetails($email,$password) == true){
                    $_SESSION['logged-in'] = "logged-in";
                    header('location: /football/matches');
                }
            } else{
                throw new Exception ("unable to login");
            }
    
        } catch (\Exception $e) {
            //throw $th;
            $error = $e->getMessage();
            $_SESSION['error'] = $error;
            header('location: /login');
        }
        
        // var_dump($_POST);
    
    }
}