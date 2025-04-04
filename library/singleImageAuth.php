<?php

function singleImageAuth($countryOrOthers){ //the parameter here would be others or country which would be automatically added to the path given at line 16


   $regionImageName = $_FILES['region-image']['name'][0];      //This is the image file name for region
   $regionImageTmp = $_FILES['region-image']['tmp_name'][0];    //This is the image tmp_name 
   $regionImageType = explode("/",$_FILES['region-image']['type'][0]);      //splitting or exploding into an array

   $imageTypes = ["jpeg","png","gif","jpg"];    //These are the kind of image types that we expect

    if($regionImageName != null)    //Checking if the image file is not empty or it is given
    {
        $path = "view/images/region/$countryOrOthers/"; //countryOrothers is given at line 3 as parameter
        $encode = md5(rand(2,200));
        // $type = $regionImageType[1];
        $filename = $encode.$regionImageName;
        $details = [
            "storage_location" => $path,
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