<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ShopDrop</title>

    <!--Some inbuilt CSS for easy work -->
    <link href="https://fonts.googleapis.com/css?family=Hind:400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link type="text/css" rel="stylesheet" href="css/styleold.css" />
    <link type="text/css" rel="stylesheet" href="css/loginform.css" />
</head>
<body>
    <a name="login"></a>
    <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>

    <div id="container">
        <div id="content-wrap">

            <?php include 'header.php' ?>
        
            <div>
                <?php include 'Nav.php' ?> 
                <div class="loginfullcontainer">
                    <div>
                        <H1 class="smallheading2">SIGN IN</H1>
                    </div>
                    <div class="login_form">
                        <form action="" method="" class="l_form">
                            <div class="containerform">
                              <label for="u_email"><b>Email</b></label>
                              <input type="text" class="login_input" placeholder="Enter Email" name="u_email" required>
                          
                              <label for="psw"><b>Password</b></label>
                              <input type="password" class="login_input" placeholder="Enter Password" name="psw" required>
                          
                              <button type="submit" class="form_button">Login</button>
                              <label>
                                <input type="checkbox" checked name="remember"> Remember me
                              </label>
                            </div>
                          
                            <div class="containerform" style="background-color:#f1f1f1">
                              <button type="button" class="cancelbtn form_button">Cancel</button>
                              <span class="psw"> <a href="#">Forgot password?</a></span>
                            </div>
                          </form>
                    </div>
                    <div class="register_here l_form">
                        <h2>Do not have ShopDrop account? Create new one here
                        <button type="submit" class="register_button" onclick="window.location.href='register.php#register'">Register</button></h2>
                    </div>
                </div>
            </div>
        </div>
 
        <?php include 'footer.php' ?>
    <script src="js/top.js"></script>
    </div>
    
</body>
</html>