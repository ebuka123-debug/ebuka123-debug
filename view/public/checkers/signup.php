<?php
    if(isset($_SESSION['signed-in'])){
        header("location: /football/matches");
        return;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
    <link rel="stylesheet" href="/view/css/bootstrap-5.2.0-dist/css/bootstrap.css">
    <link rel="stylesheet" href="/view/fontawesome-free-5.15.4-web/css/all.min.css">
</head>
<style>
    #color{background-image: linear-gradient(346deg, rgba(55, 55, 55,0.04) 0%, rgba(55, 55, 55,0.04) 22%,rgba(140, 140, 140,0.04) 22%, rgba(140, 140, 140,0.04) 69%,rgba(225, 225, 225,0.04) 69%, rgba(225, 225, 225,0.04) 100%),linear-gradient(31deg, rgba(55, 55, 55,0.04) 0%, rgba(55, 55, 55,0.04) 42%,rgba(140, 140, 140,0.04) 42%, rgba(140, 140, 140,0.04) 85%,rgba(225, 225, 225,0.04) 85%, rgba(225, 225, 225,0.04) 100%),linear-gradient(55deg, rgba(55, 55, 55,0.04) 0%, rgba(55, 55, 55,0.04) 13%,rgba(140, 140, 140,0.04) 13%, rgba(140, 140, 140,0.04) 72%,rgba(225, 225, 225,0.04) 72%, rgba(225, 225, 225,0.04) 100%),linear-gradient(90deg, rgb(232,31,62),rgb(232,31,62));}

    .my-container{width: 100%;
                    height: 75vh;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    }

    a{
        text-decoration: none;
    }

    @media only screen and (max-width: 600px){
        .my-container{
            height: 100vh;
        }
    }

 
    /* .form-width{
        width: 80%;
        height: 40vh;
        border: 1px solid black;
    } */
</style>
<body>

    <div class="nav sticky-top   d-flex align-items-center p-3" id="color">
        <div class="container d-flex justify-content-between">
            <b class="fs-2 text-white"><i>LIVE-MINI</i></b>
        </div>
    </div>

        <div class="my-container mt-lg-5">
            <div class="row d-flex  justify-content-center  w-100 g-0">
                <div class="col-11 col-lg-5 border rounded-3  p-4">
                    <div class="w-100  mb-1 d-flex justify-content-center">
                        <span>
                            <b><i class="fs-4 text-danger">LIVE-MINI</i></b>
                        </span>
                    </div>
                    <div class="w-100 mb-4 d-flex justify-content-center">
                        <span class="text-secondary">
                             @ powered by Moral base L.T.D
                        </span>
                    </div>

             
                    <?php if(isset($_SESSION["error"])):?>
                        <div class="alert alert-danger text-center" role="alert">
                            <span><span><?php echo  $_SESSION["error"]?></span></span>
                        </div>
                    <?php endif ?>


                        
                    <form action="/signup/submit" method="post">
                        <div class="row mb-lg-3 d-flex justify-content-evenly">
                            <div class="col-12 col-lg-6">
                                <label>Enter last-name</label>
                                <input class="mt-1 form-control" placeholder="Last-name" type="text" name="lastname" value="<?=$_SESSION["lastname"]?>" required="required">
                            </div>
                            <div class="col-12 col-lg-6">
                                <label>Enter first-name</label>
                                <input class="mt-1 form-control" placeholder="First-name" type="text" name="firstname" value="<?=$_SESSION["firstname"]?>" required="required">
                            </div>
                        </div>

                        <div class="row mb-1 mb-lg-3 d-flex justify-content-evenly">
                            <div class="col-12 mb-1 col-lg-6">
                                <label>Enter email</label>
                                <input class="mt-1 form-control" placeholder="Email" type="email" name="email" value="<?=$_SESSION["email"]?>" required="required">
                            </div>
                            <div class="col-12 col-lg-6">
                                <label>Enter phone-number</label>
                                <input class="mt-1 form-control" placeholder="Phone-number" type="text" name="phone-number" value="<?=$_SESSION["phoneNumber"]?>" required="required">
                            </div>
                        </div>

                        <div class="row mb-1 mb-lg-4 d-flex justify-content-evenly">
                            <div class="col-12 mb-1 col-lg-6">
                                <label>Enter password</label>
                                <input class="mt-1 form-control" placeholder="Password" type="password" name="password" required="required">
                            </div>
                            <div class="col-12 col-lg-6">
                                <label>Enter confirm-password</label>
                                <input class="mt-1 form-control" placeholder="Confirm password" type="password" name="confirm-password" required="required">
                            </div>
                        </div>

                        <div class="row mt-3 mt-lg-0 d-flex justify-content-evenly">
                            <input type="submit" value="signup" name="submit" class="w-50 btn mb-3 text-white" id="color">
                        </div>

                        <div class="row d-flex justify-content-center">
                            <div class="col-10 col-md-11 col-lg-6 text-center"><span>already have an account?</span> <a href="/login/" class="text-danger">login</a></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <hr class="mt-5">
        <div class="container-fluid p-3 p-md-5" id="c">
            <div class="row text-secondary mb-3 footer-font-size">
                <div class="col text-center">
                    <b>Live Scores and fixtures for football on 26 August 2022</b><br>
                    <span>Looking for the livescore today? See live scores and fixtures for football on 26 August 2022.
                        LiveScore brings you the latest football fixtures, results and live score information for 26 August 2022. Revisit scores and statistics and look ahead for upcoming fixtures for your favourite sport team. Plus, find out the livescore today, 26 August 2022.</span>
                </div>
            </div>
        </div>

        
        <script src="/view/css/bootstrap-5.2.0-dist/js/bootstrap.js"></script>
</body>
<?php unset($_SESSION["error"], $_SESSION['firstname'],$_SESSION['lastname'],$_SESSION['email'],$_SESSION['phoneNumber']) ?>
</html>