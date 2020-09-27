<?php
require 'includes/header.php';
?>
<main>
    <link rel="stylesheet" href="css/login.css">
    <div class="bg-cover">
        <div class="container" style="padding-top: 30px">
            <div id="slides" class="carousel slide col-md-8 offset-md-2" data-ride="carousel"
                style="margin-top: 40px; margin-bottom: 20px">
                <ol class="carousel-indicators">
                    <li data-target="#slides" data-slide-to="0" class="active"></li>
                    <li data-target="#slides" data-slide-to="1"></li>
                    <li data-target="#slides" data-slide-to="2"></li>
                    <li data-target="#slides" data-slide-to="3"></li>
                    <li data-target="#slides" data-slide-to="4"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block mx-auto" src="images/grande-car.jpg" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block mx-auto" src="images/gaga-car.jpg" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block mx-auto" src="images/madona-car.jpg" alt="Third slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block mx-auto" src="images/paramore-car.jpg" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block mx-auto" src="images/demi-car.jpg" alt="Second slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#slides" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#slides" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>


        <div class="h-30 center-me">
            <div class="my-auto">
                <form class="form-signin" action="includes/login-helper.php" method="post" style="background: white">
                    <img src="images/vinyl_logo.png" style="height: 50px; width: 50px">
                    <h1 class="h3 mb-3 font-weight-normal">Enter login information</h1>
                    <label for="inputEmail" class="sr-only">Email address or username</label>
                    <input type="text" id="inputEmail" name="uname" class="form-control" placeholder="email/username" required
                        autofocus>
                    <label for="inputPassword" class="sr-only">Password</label>
                    <input type="password" id="inputPassword" name="pwd" class="form-control" placeholder="Password" required>
                    <div class="checkbox mb-3" style="margin: 30px">
                        <label>
                            <input type="checkbox" value="remember-me"> Remember me
                        </label>
                        <button class="btn btn-lg btn-dark btn-block" name="login-submit" type="submit">Log in</button>
                        <p class="mt-5 mb-3 text-muted">&copy; 2020-2021</p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>