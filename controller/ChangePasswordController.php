<?php
class ChangePasswordController extends ViewController{
    public function changePasswordPage()
    {
        $this->Display("checkers","change-password.php");
    }

    public function updatePassword()
    {

    
        try {
            if(requestMethod() == "POST"){
                $email = $_POST['email'];
                $newPassword = $_POST['user-password'];
                if(!empty($email)){
                    if(!empty($newPassword)){
                        if(passwordValid($newPassword) == true){
                 
                            $user = new userModel();
                            if($user->changePassword($email,$newPassword) == true){
                                $_SESSION['change-password'] = "changed password successfully";
                                header("location: /login");
                                return;
                            }
                        }
                    } else{
                        throw new Exception ("All fields are required");
                    }
                } else{
                    throw new Exception ("All fields are required");
                }
          


             

                // echo "we are hitting the change password section testing 1,2";
                // die;

                // echo "we are hitting the change password section";
              
            }
        } catch (\Exception $e) {
            //throw $th;
            $error = $e->getMessage();
            $_SESSION["error"] = $error;
            header("location: /changePassword");
            return;
        }
    }
}