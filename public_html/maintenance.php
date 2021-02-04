<?php
    session_start();
    if(isset($_SESSION["duration"]) && (time()-$_SESSION["duration"]>1800))
    //30 minutes auto logout
    {
        session_unset();
        session_destroy();
    }
    if ($_SESSION["email"]!=1)
    {
        header("Location:login_page_admin.php");
    }
?>
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
    <link type="text/css" rel="stylesheet" href="css/maintenance.css" />
    <link type="text/css" rel="stylesheet" href="css/loginform.css" />
</head>
<body>
    <a name="maintenance"></a>
    <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>

    <div id="container">
        <div id="content-wrap">

            <?php include 'header.php' ?>
        
            <div>
                <?php include 'Nav.php' ?> 
                <div class="maintenancecontainer">
                    <div>
                        <H1 class="smallheading2">Maintenance Page</H1>
                    </div>
                    <div class="">
                        <ul>
                            <li><p><a href="customer_register.php#customer_register" class="main-header">Customer Register</a></p></li>
                            <li><p><a href="seller_register.php#seller_register" class="main-header">Seller Register</a></p></li>
                            <li><p><a href="bankaccount.php#bankaccount" class="main-header">Register Bank Details</a></p></li>
                            <li><p><a href="addproduct.php#addproduct" class="main-header">Add products</a></p></li>
                            <li><p><a href="ShoppingCart.php#shoppingcart" class="main-header">Add to Shopping Cart</a></p></li>
                            <li><p><a href="paymentmethod.php#paymentmethod" class="main-header">Choose Payment Method</a></p></li>
                            <li><p><a href="has.php#has" class="main-header">User has Bank Account</a></p></li>
                            <li><p><a href="putsup.php#putsup" class="main-header">Seller Puts Up Products</a></p></li>
                            <li><p><a href="belongsto.php#belongsto" class="main-header">Product belongs to a Category</a></p></li>                            
                        </ul>
                    </div>
                    <button type="submit" class="register_button" onclick="window.location.href='logout.php'">Log Out</button>
                </div>
            </div>
        </div>
 
        <?php include 'footer.php' ?>
    <script src="js/top.js"></script>
    </div>
    
</body>
</html>