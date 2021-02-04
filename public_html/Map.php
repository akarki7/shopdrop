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
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
        integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
        crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
        integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
        crossorigin=""></script>
   
</head>

<body>
    <a name="Map"></a>
    <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>

    <div id="container">
        <div id="content-wrap">

            <?php include 'header.php' ?>

            <div>
                <?php include 'Nav.php' ?>
                <div>
                    <H1 class="smallheading2">Current Location</H1>
                </div>
                <div id="mapid" style="width: 1000px; height: 600px; margin-left: 360px;"></div>
            </div>
        </div> 

        <?php include 'footer.php' ?>
        <script src="js/top.js"></script>
    </div>
    <script> 

        // $.getJSON('https://ipinfo.io', function(data){ 
        //     console.log(JSON.stringify(data,null,2));
        // });

        var mymap = L.map('mapid').setView([51, -3], 13);//initial latitudie,longitude and zoom value

        L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibGV6ZW5kNzc3IiwiYSI6ImNraHh4cXAyZDVzNmcydGw2dTNlM2NteTEifQ.Hhl4-tOF2IIF2AyEKmilWQ', {
            maxZoom: 18,
            attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
                '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
                'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
            id: 'mapbox/streets-v11',
            tileSize: 512,
            zoomOffset: -1
        }).addTo(mymap);

        var lat;
        var lon;
        

        $.ajaxSetup({
            async: false //setting asynchronous to false so that we can use the variables inside of getJSON outside as well
        });

        $.getJSON('https://api.ipgeolocation.io/ipgeo?apiKey=da8c36e94dc64c5d9bd5f678c236984f', function(data) {
            var result=JSON.stringify(data, null, 2);
            var JSONObject = JSON.parse(result);
            lat=JSONObject.latitude;
            lon=JSONObject.longitude;
            console.log(lat,lon);            
        });

        mymap.setView(new L.LatLng(lat,lon), 13);

        var ipv4;
        $.getJSON('https://api.ipify.org?format=jsonp&callback=?', function(data) {
            var result2=JSON.stringify(data, null, 2);
            var JSONObject2 = JSON.parse(result2);
            ipv4= JSONObject2.ip;
            L.marker([lat, lon]).addTo(mymap).bindPopup(ipv4).openPopup();
            console.log(ipv4);
        });

        //     L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        //         attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        //     }).addTo(map);

    </script>
</body>

</html>