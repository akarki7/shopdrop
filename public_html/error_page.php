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
                    <div class="errorline">
                        <h1 class="smallheading2"> SORRY! </h1>
                        <h1 class="smallheading2">  You may have entered the wrong credentials<h1>
                        <h1 class="smallheading2">  or are not allowed to access this page </h1>
                        <h1 class="smallheading2">Try going to <a href="index.html#Homepage"><u>ShopDrop's homepage<u></a> </H1>
                    </div>
                    </h2>
                </div>
            </div>
        </div>
        <?php include 'footer.php' ?>
    <script src="js/top.js"></script>
    </div>
    
</body>
</html>

