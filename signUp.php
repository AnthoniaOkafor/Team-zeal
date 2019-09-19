<?php include('server.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Linkup</title>
    <link rel = "icon" href = "images\logo2.png" type = "image/png">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Lobster|Lobster+Two&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="container">
        <div class="main">
            <header>
                <div id="logo-div">
                    <img src="images/logo.png" id="logo" alt=""> <span id="logo-text">Linkup</span> 
                </div>
                <div id="nav-div" class="nav-div">
                    <p> <a href=""> Home</a><a href=""> About</a>
                        <a href="index.html" class="" id="login"> Login</a>
                        <a href="signUp.html" class="" id="signup"> Signup</a>
                        <a href=""> Contact</a>
                        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                                <img src="images/mdi_menu.png" alt="">
                              </a>
                    </p>
                </div>
            </header>


            <div class="content">
                    <div class="image-div">
                        <img src="images/happy-young-couple.jpg" alt="">
                    </div>
                <div class="content-fields">

                    <h2>Signup </h2>

                    <p>It only takes a minute</p>

                    <form action="registration.php" method="POST" >


                        <?php include('errors.php') ;?>


                        <label>Full-Name</label><br>
                        <input type="text" name="username" id="username"  placeholder="Lastname first" required><span id="Evalid"></span><br><br>
                        <label>Email</label><br>


                        <input type="text" name="email" id="email"  placeholder="email" required><span id="Evalid"></span><br><br>
                        <label>Password</label><br>


                        <input type="password" name="password_1" id="password" placeholder="password" required><i class="fa fa-eye" id="view"></i><br>
                        <label>Confirm Password</label><br>


                        <input type="password" name="password_2" id="password" placeholder="password" required><br>
                        
                        <button name="register-user" id="submit" type="submit">Sign Up</button><br>


                        <span>By clicking the Sign Up button, you agree to our</span><br>

                        <p>Already a member? <a href="index.php">Sign In</a></p>


                        <span><a href="">Terms & Conditions</a> and <a href=""> Privacy Policy</a></span>


                    </form>
                </div>
               
            </div>
            <div class="clear"></div>
            <footer>
                <b>&copy;Copyright 2019 Team-zeal</b>
            </footer>
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>