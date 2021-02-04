
    <script>
            var data=[];

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