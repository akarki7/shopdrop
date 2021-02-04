<?php
$servername = "10.72.1.14"; //clabsql
$username = "group13"; //grouname
$password = "ObCMxC"; //group password
$database_name="group13";
 
// Create connection
$conn = new mysqli($servername, $username, $password,$database_name);
 
// Check connection
if ($conn->connect_error) {
 die("Connection failed: " . $conn->connect_error);
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
    <link type="text/css" rel="stylesheet" href="css/products.css" />
</head>
<body>
    <a name="displayproduct"></a>
    <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>

    <div id="container">
        <div id="content-wrap">
            <?php include 'header.php' ?>
            <div >
                <?php include 'Nav.php' ?> 
                <div class="product-container">
                    <div>
                        <H1 class="smallheading2">Product Details</H1>
                    </div>
                    <div>
                        <div class=product-photo>
                            <img src="./images/comingsoon.jpeg" alt="img" width="500" height="500">
                        </div>
                    </div>
                    <div class="product-details">
                        <?php
                            $ProdID=$_GET['pid'];
                            $sql="SELECT * FROM Product P WHERE P.product_ID=$ProdID;";
                            $data=$conn->query($sql);
                            
                            $row = mysqli_fetch_array($data);

                            $name=$row['pname'];
                            $price=$row['price'];
                            echo "<h2>Product Name: ".$name."</h2>";
                            echo "<h2>Price: ".$price."$</h2>";
                        ?>
                    </div>
                </div>
            </div>
        </div>
 
        <?php include 'footer.php' ?>
    <script src="js/top.js"></script>
    </div>
    
</body>
</html>