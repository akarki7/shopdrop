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
    <a name="search"></a>
    <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>

    <div id="container">
        <div id="content-wrap">
            <?php include 'header.php' ?>
            <div>
                <?php include 'Nav.php' ?>
                <div class="searchtable2">
                    <div>
                        <H1 class="smallheading2">SEARCH PAGES</H1>
                    </div>
                    <div>
                    <ul>
                            <li><p><a href="searchproduct.php#searchproduct" class="main-header">Search Product</a></p></li>
                            <li><p><a href="searchcustomer#searchcustomer" class="main-header">Purchase History</a></p></li>
                            <li><p><a href="searchseller.php#searchseller" class="main-header">Search Seller</a></p></li>  
                    </ul>
                    </div>
                </div>
            </div>
        
        </div>

        <?php include 'footer.php' ?>
    <script src="js/top.js"></script>
    </div>
    
</body>
</html>