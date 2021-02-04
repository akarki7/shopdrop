<script src = "https://code.jquery.com/jquery-1.10.2.js"></script>
<script src = "https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
<link href = "https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css"
         rel = "stylesheet">



<div class="header">

    <div class="header-logo">
        <a class="logo" href="#">
            <img src="./images/logo2.png" alt="logo">
        </a>
    </div>

    <div class="header-search">
        <form class = "ui-widget" action="searchproducthelperheader.php" method="POST">
            <input id="autocomplete" type="text" placeholder="Search.." class="SearchBarlength" name="P_name">
            <button type="submit" class="search-btn"><i class="fa fa-search"></i></button>
        </form>
    </div>

    <div class="header-right">
        <button onclick="window.location.href='login.php#login'"><i class="fa fa-user-o"></i></button>
        <strong class="text-uppercase">My Account</strong>
        <button><i class="fa fa-shopping-cart"></i></button>
        <strong class="text-uppercase">My Cart</strong>
    </div> 

    <script>
            
            var data=[];
            $("#autocomplete").on('input',function(e) //after every character typed notice changes
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

            $("#autocomplete").autocomplete({
                source: function (request, response) {
                    var matcher = new RegExp("^" + $.ui.autocomplete.escapeRegex(request.term), "i");
                    response($.grep(data, function (item) {
                        return matcher.test(item);
                    }));
                }
            });
    </script>
</div>