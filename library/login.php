<?php
function loginDetails($email,$password)
{
    $details = new userModel;
    if(!empty($email)){
        if(!empty($password)){
           if($details->loginDetails($email,$password) == true){
                return true;
           }else{
            throw new Exception("invalid email or password");
           }
        
        } else{
            throw new Exception ("please do not leave password blank");
        }
    } else{
        throw new Exception ("please do not leave email empty");
    }
}