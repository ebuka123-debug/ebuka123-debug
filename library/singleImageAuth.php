<?php

function singleImageAuth($fileSUperglobalName){ //the parameter here would be others or country which would be automatically added to the path given at line 16


   $regionImageName = $_FILES[$fileSUperglobalName]['name'][0];      //This is the image file name for region
   $regionImageTmp = $_FILES[$fileSUperglobalName]['tmp_name'][0];    //This is the image tmp_name 
   $regionImageType = explode("/",$_FILES[$fileSUperglobalName]['type'][0]);      //splitting or exploding into an array

   $imageTypes = ["jpeg","png","gif","jpg"];    //These are the kind of image types that we expect

    if($regionImageName != null)    //Checking if the image file is not empty or it is given
    {

        $encode = md5(rand(2,200));
        $filename = $encode.$regionImageName;
        $details = [

            "file_name" => $filename,
            "tmp_name" => $regionImageTmp,
            "status" => true
        ];
        
        if(filesize($regionImageTmp) < 1000000)     //Checking for the size of the file
        {
            if(in_array($regionImageType[1],$imageTypes))    //Checking if the file types is accepted or is among the kind of file types needed
            {
                return $details;
            } else{
                
                throw new Exception("This image type is not accepted");
            }
        } else{
            throw new Exception("this size is not appropriate");
        }
    } else{
        throw new Exception("Do not live the region file empty");
    }
}