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
    <a name="customer_register"></a>
    <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>

    <div id="container">
        <div id="content-wrap">

            <?php include 'header.php' ?>
        
            <div>
                <?php include 'Nav.php' ?> 
                <div>
                    <div>
                        <H1 class="smallheading2">CUSTOMER SIGN UP</H1>
                    </div>
                    <div class="login_form">
                        <form action="customer.php" method="POST" class="l_form">
                            <div class="containerform">
                              <label for="u_name"><b>Name</b></label>
                              <input type="text" class="login_input" placeholder="Enter full name" name="u_name" required>

                              <label for="u_email"><b>Email</b></label>
                              <input type="email" class="login_input" placeholder="Enter Email" name="u_email" required>
                          
                              <label for="psw"><b>Password</b></label>
                              <input type="password" class="login_input" placeholder="Enter Password" name="psw" required>
                            
                              <label for="psw_r"><b>Repeat Password</b></label>
                              <input type="password" class="login_input" placeholder="Enter Password" name="psw_r" required>
                              
                              <label for="phone_num"><b>Contact number</b></label>
                              <input type="text" class="login_input" placeholder="Enter mobile number" name="phone_num">

                              <label for="address"><b>Address</b></label>
                              <input type="text" class="login_input" placeholder="Enter full address" name="address">
                          
                              <button type="submit" class="form_button">Register Account</button>
                            </div>
                          </form>
                    </div>
                    <div class="register_here l_form">
                        <h2>Already have ShopDrop account? Login here
                        <button type="submit" class="register_button" onclick="window.location.href='login.php#login'">Sign In</button></h2>
                    </div>
                </div>
            </div>
        </div>
 
        <?php include 'footer.php' ?>
    <script src="js/top.js"></script>
    </div>
    
</body>
</html>