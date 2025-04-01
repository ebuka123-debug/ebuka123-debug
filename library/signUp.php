<?php

function signUpDetails(array $userDetails){
    $pattern = "/^[a-zA-Z\s-]+$/";
    $userModel = new userModel();
    if(preg_match($pattern,$userDetails['firstname'])){
        if(preg_match($pattern,$userDetails['lastname'])){
            if(is_numeric($userDetails['phoneNumber']) && $userModel->signUpDetailExists($userDetails['phoneNumber'],"phone_number") == false){
                
                if(filter_var($userDetails['email'],FILTER_VALIDATE_EMAIL) && $userModel->signUpDetailExists($userDetails['email'],"email") == false){
                    if(passwordValid($userDetails['password'])){
                       if($userDetails['confirmPassword'] == $userDetails['password']){
                            return true;
                       } else{
                            throw new Exception ("password does not match");
                       }
                    }
                } else{
                    if($userModel->signUpDetailExists($userDetails['email'],"email") == true){
                        throw new Exception ("email already exists");
                    } else{
                        throw new Exception("invalid email format");
                    }
                }
            } else{
                if($userModel->signUpDetailExists($userDetails['phoneNumber'],"phone_number") == true){
                    throw new Exception ("phone number exists");
                } else{
                    throw new Exception ("invalid phone number format");
                }
            }
        } else{
            throw new Exception ("last name should contain alphabets");
        }
    } else{
        throw new Exception ("first name should contain alphabets");
    }
}