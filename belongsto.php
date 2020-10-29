<?php
$servername = "10.72.1.14"; //clabsql
$username = "group13"; //grouname
$password = "ObCMxC"; //group password
$database_name="group13";
      // Check connection
      if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
 }
      $conn = new mysqli($servername, $username, $password,$database_name);
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
  <a name="belongsto"></a>
  <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
  <div id="container">
      <div id="content-wrap">
          <div class="header">
              <div class="header-logo">
                  <a class="logo" href="#">
                      <img src="./images/logo2.png" alt="logo">
                  </a>
              </div>
    
              <div class="header-search">
                  <form>
                      <input type="text" placeholder="Search.." class="SearchBarlength">
                      <button class="search-btn"><i class="fa fa-search"></i></button>
                  </form>
              </div>
    
              <div class="header-right">
                  <button onclick="window.location.href='login.html#login'"><i class="fa fa-user-o"></i></button>
                  <strong class="text-uppercase">My Account</strong>
                  <button><i class="fa fa-shopping-cart"></i></button>
                  <strong class="text-uppercase">My Cart</strong>
              </div>
    
          </div>
    
          <div clas="secondrow">
              <div class="leftsection category-nav">
                  <div>
                      <p><a href="index.html#Homepage" class="category-header" >Homepage</a></p>
                  </div>
    
                  <div>
                      <span class="category-header">Categories <i class="fa fa-list"></i></span>
                      <ul class="category-list">
                      <li><a href="#">Groceries</a></li>
                      <li><a href="#">Technology</a></li>
                      <li><a href="#">Clothes & Accessories</a></li>
                      <li><a href="#">Others</a></li>
                      </ul>
                  </div>
                  <div>
                      <p><a href="AboutUs.html#AboutUs" class="category-header">About Us</a></p>
                  </div>
                  <div>
                      <p><a href="contact.html#contact" class="category-header">Contact Us</a></p>
                  </div>
                  <div>
                      <p><a href="imprint.html#imprint" class="category-header">Imprint</a></p>
                  </div>
                  <div>
                      <p><a href="maintenance.html#maintenance" class="category-header">Maintenance page</a></p>
                  </div>
              </div>
              <div class="catinput">
                  <div>
                      <H1 class="smallheading2">CHOOSE Product ID and Category ID</H1>
                  </div>
                  <div>
                      <form action="belongstohelper.php" method="POST" class="l_form">
                          <div class="containerform">
                            <label for="productid"><b>Product ID</b></label>
                            <select name = "productid" required>
                            <?php
                              $data = $conn->query("SELECT * FROM Product");
                              while($row = mysqli_fetch_array($data))
                              {
                                  $productID=$row['product_ID'];
                                   echo("<option>$productID</option>");
                              }
                              ?>
                            </select>
                            <label for="Category"><b>Categories</b></label>
                            <select name = "Category" required>
                            <?php
                              $data = $conn->query("SELECT * FROM Category");
                              while($row = mysqli_fetch_array($data))
                              {
                                  $cat=$row['category_ID'];
                                  echo("<option>$cat</option>");
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
      <footer class="foot-distributed">
           <div class="foot-left">
              <h3>Shop<span>Drop</span></h3></br>
              <p class="foot-name"> ShopDrop&copy; 2020</p>
              <p><a href="imprint.html#Imprint">Imprint</a></p>
          </div>
  
          <div class="foot-center">
  
              <div>
                  <i class="fa fa-map-marker"></i>
                  <p> Bremen, Germany</p>
              </div>
  
              <div>
                  <i class="fa fa-phone"></i>
                  <p>+49 17659873987</p>
              </div>
  
              <div>
                  <i class="fa fa-envelope"></i>
                  <p><a href="mailto:support@company.com">shopdrop at gmail.com</a></p>
              </div>
  
          </div>
  
          <div class="foot-right">
              <p class="foot-name">
              <div >
                    <p><h1 class="foot-title">Follow Us</h1></p></br>
                    <a class="fa fa-facebook"></a>
                    <a class="fa fa-twitter"></a>
                    <a class="fa fa-instagram"></a>
              </div>
              </p>
          </div>
      </footer>
  <script src="js/top.js"></script>
  </div>
 </body>
</html>
 
 
 

