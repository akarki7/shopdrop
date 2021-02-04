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
    <script src = "https://code.jquery.com/jquery-1.10.2.js"></script>
    <script src = "https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
    <link href = "https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css" rel = "stylesheet">
</head>
<body>
    <a name="searchproduct"></a>
    <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
    
    <div id="container">
        <div id="content-wrap">
            <?php include 'header.php' ?>
            <div>
                <?php include 'Nav.php' ?>
                <div class="searchtable">
                    <div>
                        <H1 class="smallheading2">SEARCH PRODUCTS</H1>
                    </div>
                    <div>
                        <form action="searchproducthelper.php" method="POST" class="l_form">
                            <div class="containerform">
                                <label for="autocomplete2"><b>Product Name</b></label>
                                <input id="autocomplete2" type="text" class="login_input" placeholder="Enter product name" name="P_name" required>
                                <div class="Prange">
                                    <label for="min"><b>Product Range</b></label>
                                    <input type="tel" class="login_input2" placeholder="min" name="min">
                                    <label for ="max"><b>to</b></label>
                                    <input type="tel" class="login_input2" placeholder="max" name="max">
                                </div>
                                <label for="category"><b>Categories</b></label>
                                <select name = "category" required>
                                <option value = "104">None</option>  
                                <option value = "100">Grocery</option>
                                <option value = "101">Technology</option>
                                <option value = "102">Clothes</option>
                                <option value = "103">Others</option>
                                </select>
                                <br>
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

    <script>
            
            var data=[];
            $("#autocomplete2").on('input',function(e) //after every character typed notice changes
            {
                data=[];
                //alert("Cool");
                //ajax starts
                var ajax = new XMLHttpRequest();
                var method= "GET";
                var url="automaticinputproduct.php";
                var asynchronous=true;

                ajax.open(method,url,asynchronous)
                ajax.send();

                ajax.onload=function()
                {
                    if (this.status==200)
                    {
                        //convert JSON back to array
                        var test= JSON.parse(this.responseText);

                        console.log(test); //for debugging
                        
                        for(var mem of test)
                        {
                            data.push(mem);
                        }
                    }
                    else{
                        console.log("Unable to retrieve data. Status:",this.status);
                    }
                }
            });
            //ajax ends here

            $("#autocomplete2").autocomplete({
                source: function (request, response) {
                    var matcher = new RegExp("^" + $.ui.autocomplete.escapeRegex(request.term), "i");
                    response($.grep(data, function (item) {
                        return matcher.test(item);
                    }));
                }
            });
    </script>
</body>
</html>