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
    <a name="displayseller"></a>
    <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>

    <div id="container">
        <div id="content-wrap">
            <?php include 'header.php' ?>
            <div>
                <?php include 'Nav.php' ?> 
                <div class="result-container">
                    <div>
                        <h1 class="result-heading">SEARCH RESULTS:</h1>
                        <h2 class="result-heading">Click on the seller name for more information.</h2>
                    </div>
                    <?php
   
                        $cat=$_POST['category'];


                        if($cat==104)
                        {
                            $sql="SELECT  U.U_name AS UNAME, S.seller_ID AS SIDS  FROM seller S, Sd_User U WHERE U.email=S.email;";
                        }
                        else//with specific category
                        {
                            $sql="SELECT DISTINCT U.U_name AS UNAME, S.seller_ID AS SIDS
                            FROM seller S, Sd_User U, puts_up PU, Product P, belongs_to BT, Category C 
                            WHERE (S.seller_ID=PU.seller_ID AND S.email=U.email AND PU.product_ID=P.product_ID) AND (BT.product_ID=P.product_ID 
                            AND BT.category_ID=$cat AND C.category_ID=$cat)
                            GROUP BY U.U_name;";
                        }


                        $data=$conn->query($sql);
                        if(mysqli_num_rows($data)>0)
                        {
                            while($row = mysqli_fetch_array($data)) 
                            {
                                $uname=$row['UNAME'];
                                $sids=$row['SIDS'];
                                echo "<h2><u><a href='displayseller.php?sid=$sids'>$uname</a></u></h2>";
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








