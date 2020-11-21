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
    <a name="has"></a>
    <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>

    <div id="container">
        <div id="content-wrap">

            <?php include 'header.php' ?>
        
            <div clas="secondrow">
                <?php include 'Nav.php' ?> 
                <div class="catinput">
                    <div>
                        <H1 class="smallheading2">CHOOSE ACCOUNT NUMBER</H1>
                    </div>
                    <div>
                        <form action="hashelper.php" method="POST" class="l_form">
                            <div class="containerform">
                            <label for="email"><b>Name</b></label>
                              <select name = "email" required>
                              <?php
                                $data = $conn->query("SELECT * FROM Sd_User");
                                while($row = mysqli_fetch_array($data)) 
                                {
                                    $email=$row['email'];
                                    $name=$row['U_name'];
                                     echo("<option value='$email'>$name</option>");
                                }
                                ?>
                              </select>

                              <label for="Account_number"><b>Accounts</b></label>
                              <select name = "Account_number" required>
                              <?php
                                $data = $conn->query("SELECT * FROM bankaccount");
                                while($row = mysqli_fetch_array($data)) 
                                {
                                    $acc=$row['acc_num'];
                                    echo("<option value=$acc>$acc</option>");
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