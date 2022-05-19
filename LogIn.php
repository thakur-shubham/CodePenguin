<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="CSS\LogIn.css">
        <title>Log In</title>
    </head>
    <body>
        <div class="header">
            <div class="progress-container">
                <div class="progress-bar" id="myBar"></div>
            </div>
        </div>
        <nav class="navigation">
            <div class="nav">
                <div class="name">
                    <h4 class="h4"><span class="heading">CodePenguin</span></h4>
                </div>
                <div class="buttons">
                    <a href="SignUp.php"><button class="signupbutton">Sign Up</button></a>
                </div>
            </div>
        </nav>
        <div class="body">
            <form class="form" action="LogInConnection.php" method="post">
                <div class="leftform">
                    <div class="upper">
                        <h1 class="h1">Log In!</h1>
                        <div>
                            <p class="name">E-Mail</p>
                            <input type="email" name="LogInEmailId" placeholder="codepenguin@xyz.com" class="input" required  autocomplete="off">
                        </div>
                        <div>
                            <p class="name">Password</p>
                            <input type="password" name="LogInPassword" placeholder="Password" class="input" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required autocomplete="off">
                        </div>
                        <div class="tablebutton">
                            <div class="button">
                                <button type="submit" class="loginbutton" name="LogInButton">Log In</button>
                            </div>
                            <div>
                                <a class="forget" href="#">Forgot Password?</a>
                            </div>
                        </div>
                    </div>
                    <div class="forms">
                        <p>Need an account? <a class="signupbtn" type="button" href="SignUp.php">Sign up now!</a></p>
                    </div>
                </div>
            </form>
            <div class="codes">
                <div class="section">
                    <div class="images">
                        <div class="html">
                            <p><span class="settingspan">&#9881;</span>&ensp; HTML</p>
                            <img class="htmlimg" src="Images\IMG1.png">
                        </div>
                        <div class="css">
                            <p><span class="settingspan">&#9881;</span>&ensp; CSS</p>
                            <img class="cssimg" src="Images\IMG2.png">
                        </div>
                        <div class="js">
                            <p><span class="settingspan">&#9881;</span>&ensp; JS</p>
                            <img class="jsimg" src="Images\IMG3.png">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
