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
  <a name="belongsto"></a>
  <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
  <div id="container">
      <div id="content-wrap">
          
          <?php include 'header.php' ?>
          <div>
                <?php include 'Nav.php' ?> 
              <div class="catinput">
                  <div>
                      <H1 class="smallheading2">CHOOSE Product and Category</H1>
                  </div>
                  <div>
                      <form action="belongstohelper.php" method="POST" class="l_form">
                          <div class="containerform">
                          <label for="productid"><b>Product</b></label>
                            <select name = "productid" required>
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
                            <label for="Category"><b>Categories</b></label>
                            <select name = "Category" required>
                            <?php
                              $data = $conn->query("SELECT * FROM Category");
                              while($row = mysqli_fetch_array($data))
                              {
                                  $cat=$row['category_ID'];
                                  if ($cat==100)
                                  {
                                      $cName="Grocery";
                                  }
                                  else if ($cat==101)
                                  {
                                        $cName="Technology";
                                  }
                                  else if ($cat==102)
                                  {
                                        $cName="Clothes";
                                  }
                                  else
                                  {
                                        $cName="Others";
                                  }
                                  echo("<option value=$cat>$cName</option>");
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
 
 
 

