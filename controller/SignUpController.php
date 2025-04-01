<?php
class SignUpController extends ViewController
{
    public function signupPage()
    {
        $this->Display('checkers','signup.php');
    }

    public function submit(){
        
        try {
            
            if(requestMethod()== "POST" && isset($_POST["submit"])){
                $userDetails = [
                    "lastname" => $_POST['lastname'],
                    "firstname" => $_POST['firstname'],
                    "email" => $_POST['email'],
                    "phoneNumber" => $_POST['phone-number'],
                    "password" => $_POST['password'],
                    "confirmPassword" => $_POST['confirm-password']
            
                ];

                $_SESSION["lastname"] = $_POST['lastname'];
                $_SESSION["firstname"] = $_POST['firstname'];
                $_SESSION["email"] = $_POST['email'];
                $_SESSION["phoneNumber"] = $_POST['phone-number'];

                if(signUpDetails($userDetails) == true){
                    // echo "valid stuffs";
                    $details = new userModel();
                    if($details->saveDetails($userDetails) == true){
                        $_SESSION['signed-in'] = "signed-in";
                        header("location: /football/matches/");
                    }
                    
                }
       

            // echo "it is hitting the sign up validation";
                } else{
                    // echo "no way";
                    throw new Exception ("unable to signup");
                }
        } catch (\Exception $e) {
            //throw $th;
            $error = $e->getMessage();
            $_SESSION['error'] = $error;
            header("location: /signup");
        }
    }
}