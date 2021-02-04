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
    <a name="searchproducthelper"></a>
    <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>

    <div id="container">
        <div id="content-wrap">
            <?php include 'header.php' ?>
            <div>
                <?php include 'Nav.php' ?> 
                <div class="result-container">
                    <div>
                        <h1 class="result-heading">SEARCH RESULTS:</h1>
                        <h2 class="result-heading">Click on the products for more information.</h2>
                    </div>
                    <?php
                        $product=$_POST['P_name'];

                        $sql="SELECT P.pname AS PName, P.product_ID AS PID FROM Product P WHERE P.pname LIKE '%$product%';";
                        $data=$conn->query($sql);

                        if(mysqli_num_rows($data)>0)
                        {
                            while($row = mysqli_fetch_array($data)) 
                            {
                                $pname=$row['PName'];
                                $pids=$row['PID'];
                                echo "<h2><u><a href='displayproduct.php?pid=$pids'>$pname</a></u></h2>";
                            }
                        }
                        else
                        {
                            echo "<h2>No matching result found</h2";
                        }

                        $conn->close();
                    ?>
                </div>
            </div>
        </div>
 
        <?php include 'footer.php' ?>
    <script src="js/top.js"></script>
    </div>
    
</body>
</html>




