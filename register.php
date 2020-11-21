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
    <a name="register"></a>
    <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>

    <div id="container">
        <div id="content-wrap">

            <?php include 'header.php' ?>
        
            <div clas="secondrow">
                <?php include 'Nav.php' ?> 
                <div class="register_container">
                    <div>
                        <H1 class="smallheading2">SIGN UP</H1>
                    </div>
                    <div class="l_form">
                        <h2>Are you a Customer or a Seller?
                        <button class="register_button" onclick="window.location.href='customer_register.php#customer_register'">Customer</button>
                        <button class="register_button" onclick="window.location.href='seller_register.php#seller_register'">Seller</button></h2>                    
                    </div>
                    <br>
                    <div class="l_form">
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