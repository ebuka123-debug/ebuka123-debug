<?php
function newsImageAuth(){
    $club_logo_img_type = explode("/",$_FILES['badge-logo']['type']);
        $club_logo_name =md5("image").$_FILES['badge-logo']['name'];
        $path = "view/images/news/";
        $img_format = ['jpeg','jpg','png'];

   

            //check if badge-logo name is not null or empty
            if($_FILES['badge-logo']['name'] != null){
                // checking file size
                if(filesize($_FILES['badge-logo']['tmp_name']) < 1000000){
                    // check file format
                    if(in_array($club_logo_img_type[1],$img_format)){
                        //checked_images
                        $number_of_checked_images = ['badge-logo'];
                        $image_tmp_name = [$_FILES['badge-logo']['tmp_name']];
                        $file_name = [$club_logo_name];
                            if(count($_FILES['image']['name']) < 4){
                                //checking news images
                                for($image = 0; $image < count($_FILES['image']['name']); $image++){
                                    //checking if each image is not null
                                    if($_FILES['image']['name'][$image] != null){
                                        //exploding to get file type
                                        $news_image_type = explode("/",$_FILES['image']['type'][$image]);
                                        //checking if each image format is valid
                                        if(in_array($news_image_type[1],$img_format)){
                                            //adding validated images in to an array
                                            $name = md5("image").$_FILES['image']['name'][$image];
                                            array_push($number_of_checked_images,$image+1);
                                            array_push($image_tmp_name,$_FILES['image']['tmp_name'][$image]);
                                            array_push($file_name,$name);
                                            $status = true;
                                        } else{
                                            $a = $image+1;
                                            throw new Exception("news image $a  format is not acceptable");
                                        }
                                    } else{
                                        //check if image is the first image
                                        if($_FILES['image']['name'][$image] == null && $image == 0){
                                            throw new Exception("image is needed please");
                                        }
                                    }
                                }

      
                         
                    
                                //checking if number of checked images match the number of images selected 
                                if(isset($status) && $status == true){
                                        return [
                                            'status' => true,
                                            'file_name' => $file_name,
                                            'img_tmp_name' => $image_tmp_name,
                                            'storage_location' => $path,
                                            'number_of_checked_images' => $number_of_checked_images
                                        ];
                                    // }
                                } else{
                                    throw new Exception ("logic is not right");
                                }
                            } else{
                                throw new Exception("only 1-3 images are rquired");
                            }
                    
                        
                        // else{
                        //     echo "omo see problem";
                        //     var_dump($number_of_checked_images);
                        // }
                    } else{
                        throw new Exception("image format not supported");
                    }
                } else{
                    throw new Exception ("image is too large");
                }
            }else{
                throw new Exception ("badge logo is required");
            }
}
