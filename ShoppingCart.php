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
    <link type="text/css" rel="stylesheet" href="css/seller.css" />
</head>
<body>
    <a name="shoppingcart"></a>
    <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>

    <div id="container">
        <div id="content-wrap">
            <?php include 'header.php' ?>
        
            <div>
                <?php include 'Nav.php' ?> 
                <div class="newproductscontainer">
                    <div>
                        <H1 class="smallheading2">Shopping Cart</H1>
                    </div>
                    <div>
                        <form action="scart.php" method="POST" class="p_form">
                            <div class="containerform">
                                <label for="p_total"><b>Total Items</b></label>
                                <input type="tel" class="p_input" placeholder="Enter Number of Items" name="p_total" required>
                           
                                <label for="p_cost"><b>Total Cost</b></label>
                                <input type="tel" class="p_input" placeholder="Enter the Total Cost" name="p_cost" required>

                              <button type="button" class="cancelbtn">Cancel</button>
                              <button type="submit" class="p_button">Submit</button>
                            </div>
                          </form>
                    </div>
                </div>
            </div>
        </div>
 
        <?php include 'footer.php' ?>
    <script src="js/top.js"></script>
    </div>
    
</body>
</html>
