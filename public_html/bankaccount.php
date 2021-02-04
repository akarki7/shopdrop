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
    <a name="bankaccount"></a>
    <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>

    <div id="container">
        <div id="content-wrap">
            <?php include 'header.php' ?>
            <div >
                <?php include 'Nav.php' ?> 
                <div class="payinput">
                    <div>
                        <H1 class="smallheading2">Fill Up Bank Account Details</H1>
                    </div>
                    <div>
                        <form action="Bank.php" method="POST" class="l_form">
                            <div class="containerform">
                              <label for="u_name"><b>Name</b></label>
                              <input type="text" class="login_input" placeholder="Enter full name" name="u_name" required>

                              <label for="acc_num"><b>Account Number </b></label>
                              <input type="tel" class="login_input" placeholder="Enter IBAN" name="acc_num" required>
                            
                              <label for="balance"><b>Balance</b></label>
                              <input type="tel" class="login_input" placeholder="Enter Balance" name="balance" required>
                          
                              <button type="submit" class="form_button">Register Bank Account</button>
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