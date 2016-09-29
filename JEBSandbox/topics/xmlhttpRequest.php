<!DOCTYPE html>
<html>
    <head>
        <title>
            XMLHTTP Request
        </title>
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/CIT261Group/JEBSandbox/modules/head.php'; ?>
        <script>
            function loadJSON() {
                var data = "http://services.groupkt.com/country/get/all";
//                http://api.openweathermap.org/data/2.5/weather?q=London,uk&appid=44db6a862fba0b067b1930da0d769e98
//                old url used
                var http_request = new XMLHttpRequest();
                http_request.onreadystatechange = function () {

                    if (http_request.readyState == 4) {
                        console.log(http_request.responseText);
//                        Javascript function JSON.parse to parse JSON data
                        var countryAbrev = JSON.parse(http_request.responseText);

//                       countryAbrev variable now contains the data structure and can be accessed as countryAbrev.name and countryAbrev.country.
                        document.getElementById("DisplayCountry").innerHTML = countryAbrev.RestResponse.result[0].name;
                        document.getElementById("TwoLetter").innerHTML = countryAbrev.RestResponse.result[0].alpha2_code;
                        document.getElementById("ThreeLetter").innerHTML = countryAbrev.RestResponse.result[0].alpha3_code;
                    }
                };

                http_request.open("GET", data, true);
                http_request.send();
            }

        </script>
    </head>
    <body>
        <header>
            <h1>Using XMLHTTPRequest to Consume a JSON Web Service</h1>
        </header>
        <h2>What This Does</h2>
        <p>
            When you hit the button, a xmlhttp request is made, and then sent to the proper URL.
            The URL then sends a response back in the form of JSON.
        </p>
        <p>
            JSON is a way of writting the response, it is like MLA format versus the other one.
            The sandbox that I have written then takes this response and given the request, gives the right answer from the Json.
        </p>
        <p>
            Something that also has to be done is parsing.
            What this means is to take some text and put it into the JSON format, or to take it out.
            In his situation, it is already in JSON, so we are taking it out of the JSON text, and putting it into normal English.
        </p>
        <br>
        <button type = "button" onclick = "loadJSON()"> Display Details </button>
        
        <p id="DisplayCountry">Country will display here</p>
        <p id="TwoLetter">Two letter Code will display here</p>
        <p id="ThreeLetter">Three letter Code will display here</p>
        <!--resource that helped me understand:https://www.youtube.com/watch?v=SjLJ8Dyuywg-->
    </body>
</html>
