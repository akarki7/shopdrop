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
            <div>
                <?php include 'Nav.php' ?> 
                <div class="result-container">
                    <div>
                        <h1 class="result-heading">SEARCH RESULTS:</h1>
                        <h2 class="result-heading">Click on the products for more information.</h2>
                    </div>
                    <?php
                        $email=$_POST['email'];
                        $cat=$_POST['category'];
                        $order=$_POST['Psort'];

                        $cid="SELECT C.customer_ID AS CID FROM customer C WHERE C.email='$email'";

                        $query2=$conn->query($cid);

                        $check =0;
                        if(mysqli_num_rows($query2)>0)
                        {
                            while($row = mysqli_fetch_array($query2)) 
                            {
                                $CID=$row['CID'];
                            }    
                        }
                        else
                        {
                            echo "<h2>Email Not found</h2>";
                            $conn->close();
                            $check=1;
                        }

                        if($cat==104)
                        {
                            $sql="SELECT P.pname AS PName,P.product_ID AS PID 
                            FROM does D, Sd_User U , customer C, donefor d, Addedto a ,Product P 
                            WHERE (C.customer_ID=$CID AND D.customer_ID=$CID AND C.email=U.email) AND (D.payment_ID=d.payment_ID AND d.cart_ID=a.cart_ID AND a.product_ID=P.product_ID)
                            ORDER BY P.price $order;";
                        }
                        else//with category
                        {
                            $sql="SELECT P.pname AS PName,P.product_ID AS PID 
                            FROM does D, Sd_User U , customer C, donefor d, Addedto a ,Product P , belongs_to b
                            WHERE (C.customer_ID=$CID AND D.customer_ID=$CID AND C.email=U.email) AND (D.payment_ID=d.payment_ID AND d.cart_ID=a.cart_ID AND a.product_ID=P.product_ID AND (b.product_ID=P.product_ID) AND (b.category_ID=$cat))
                            ORDER BY P.price $order;";
                        }

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
                            if ($check!=1)
                            {
                                echo "<h2>No matching result found</h2";
                            }
                            
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





