<?php
require "includes/header.php"
?>

<main>
<link rel="stylesheet" href="../css/signup.css">
    <div class="bg-cover">
        <div class="h-100 container center-me">
            <div class="my-auto">
                <div class="signup-form">
                    <form action="includes/signup-helper.php" method="post">
                        <h2>Register</h2>
                        <p class="hint-text">Create your account now!</p>
                        <div class="form-group">
                            <div class="row">
                                <div class="col">
                                    <input type="text" class="form-control" name="fname" placeholder="First name" required="required">
                                </div>
                                <div class="col">
                                    <input type="text" class="form-control" name="lname" placeholder="Last name" required="required">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="uname" placeholder="Username" required="required">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" placeholder="email address" required="required">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="pwd" placeholder="Password" required="required">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="con-pwd" placeholder="Confirm password" required="required">
                        </div>
                        <div class="form-group">
                            <button type="submit" name="signup-submit" class="btn btn-outline-dark btn-lg btn-block">Submit</button>
                        </div>
                    </form>

                    <div class="text-center">Already a member? <a href="login.php">Sign in!</a></div>


                </div>
            </div>
        </div>
    
    </div>

</main>