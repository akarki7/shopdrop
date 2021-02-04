<?php
$servername = "10.72.1.14"; //clabsql
$username = "group13"; //grouname
$password = "ObCMxC"; //group password
$database_name="group13";

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
    <link type="text/css" rel="stylesheet" href="css/loginform.css" />
</head>
<body>
    <a name="putsup"></a>
    <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>

    <div id="container">
        <div id="content-wrap">

            <?php include 'header.php' ?>
        
            <div>
                <?php include 'Nav.php' ?> 
                <div class="catinput">
                    <div>
                        <H1 class="smallheading2">CHOOSE SELLER AND PRODUCT</H1>
                    </div>
                    <div>
                        <form action="putsuphelper.php" method="POST" class="l_form">
                            <div class="containerform">
                            <label for="sID"><b>Seller Name</b></label>
                                <select name = "sID" required>
                                <?php
                                $data = $conn->query("SELECT S.seller_ID AS SID, U.U_name AS NAME FROM seller S, Sd_User U WHERE S.email=U.email");
                                while($row = mysqli_fetch_array($data)) 
                                {
                                    $sID=$row['SID'];
                                    $sName=$row['NAME'];
                                     echo("<option value=$sID>$sName</option>");
                                }
                                ?>
                                </select>

                              <label for="pID"><b>Product Name</b></label>
                              <select name = "pID" required>
                              <?php
                                $data = $conn->query("SELECT * FROM Product");
                                while($row = mysqli_fetch_array($data)) 
                                {
                                    $pID=$row['product_ID'];
                                    $pName=$row['pname'];
                                    echo("<option value=$pID>$pName</option>");
                                }
                                ?>
                                </select>
                              <button type="submit" class="form_button">Submit</button>
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