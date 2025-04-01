<?php 

if(isset($_SESSION["logged-in"]) || isset($_SESSION['signed-in'])){
    // echo $_SESSION["entered"];
    
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

</style>
<body>

    <div class="nav sticky-top   d-flex align-items-center p-3" id="color">
        <div class="container d-flex justify-content-between">
            <b class="fs-2 text-white"><i>LIVE-MINI</i></b>

        </div>
    </div>

        <div class="my-container">
            <div class="row d-flex justify-content-center  w-100 g-0">
                <div class="col-11 col-lg-3 border rounded-3 p-4">
                    <div class="w-100  mb-2 d-flex justify-content-center">
                        <span>
                            <b><i class="fs-4 text-danger">LIVE-MINI</i></b>
                        </span>
                    </div>
                    <div class="w-100 mb-5 mb-lg-4 d-flex justify-content-center">
                        <span class="text-secondary">
                             @ powered by Moral base L.T.D
                        </span>
                    </div>
                    <form action="/login/submit" method="POST">
                        <?php if(isset($_SESSION['error'])) :?>
                            <div class="alert alert-danger d-flex justify-content-center align-items-center" role="alert">
                              
                                    <?php echo $_SESSION['error']; ?>
                                   
                            </div>
                        <?php elseif(isset($_SESSION['change-password'])) :?>
                            <div class="alert alert-success d-flex justify-content-center align-items-center" role="alert">
                            
                                    <?php echo $_SESSION['change-password']; ?>
                                
                            </div>
                        <?php endif; ?>
                        
                        <label class="mb-2">Enter email</label>
                        <input class="form-control mb-3" type="text" placeholder="Email" name="email" aria-label="default input example" required="required">

                        <label class="mb-2">Enter password</label>
                        <input class="form-control mb-2" type="password" placeholder="Password" name="password" aria-label="default input example" required="required">
                        <label class="mb-3"><a href="/changepassword" class = "text-danger">forgot password?</a></label>
                        <input type="submit" value="Login" name="login" class="w-100 btn mb-3 text-white" id="color">

                        <span class="ms-4">Dont have an account? <a href="/signup" class="text-danger">sign-up</span>
                        <!-- <a href="##">log-out</a> -->


                    </form>
                </div>
            </div>
        </div>

        <hr>
        <div class="container-fluid p-3 p-md-5" id="c">
            <div class="row text-secondary mb-3 footer-font-size">
                <div class="col text-center">
                    <b>Live Scores and fixtures for football on 26 August 2022</b><br>
                    <span>Looking for the livescore today? See live scores and fixtures for football on 26 August 2022.
                        LiveScore brings you the latest football fixtures, results and live score information for 26 August 2022. Revisit scores and statistics and look ahead for upcoming fixtures for your favourite sport team. Plus, find out the livescore today, 26 August 2022.</span>
                </div>
            </div>
        </div>

        
        <script src="../css/bootstrap-5.2.0-dist/js/bootstrap.js"></script>
</body>
<?php unset($_SESSION["error"],$_SESSION["change-password"])?>
</html>