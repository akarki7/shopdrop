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
    <a name="Imprint"></a>
    <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>

    <div id="container">
        <div id="content-wrap">

            <?php include 'header.php' ?>
        
            <div>
                <?php include 'Nav.php' ?> 
                <div>
                    <H1 class="smallheading2">IMPRINT</H1>
                </div>
                <div class="imprintdata">
                    <p>This website is student lab work and does not necessarily reflect Jacobs University Bremen opinions. Jacobs University Bremen does not endorse this site, nor is it checked by Jacobs University
Bremen regularly, nor is it part of the official Jacobs University Bremen web presence.
For each external link existing on this website, we initially have checked that the target page
does not contain contents which is illegal wrt. German jurisdiction. However, as we have no influence on such contents, this may change without our notice. Therefore we deny any responsibility for the websites referenced through our external links from here.
No information conflicting with GDPR is stored in the server.</p>
                </div>
            </div>
        </div>
 
        <?php include 'footer.php' ?>
    <script src="js/top.js"></script>
    </div>
    
</body>
</html>