


<?php
$con = mysqli_connect($host, $username, $password, $dbname);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="./index.css" />
    <title>Static Template</title>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link rel="stylesheet" href="dashboard.css" />
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
        integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />

    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
        integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>

    <style>
        #map {
            /* text-align: center; */
            height: 200px;
            width: 700px;
            align-items: center;
            margin-right: 50%;
            margin-left: 25%;
        }
    </style>

</head>

<body>
    <header>
        <h1 class="header">Ringroad Bus Fare Calculator</h1>
    </header>
    </div>
    <div class="container1">



        <div class="destination">
            <p>Enter origin:</p>
            <select id="valueSelector1">
                <option data-value="0">Balkhu</option>
                <option data-value="346">Sanepa</option>
                <option data-value="701">Sanepa Height</option>
                <option data-value="1016">Nayabato</option>
                <option data-value="1331">Dhobighat</option>
                <option data-value="1751">Nakhu Dobato</option>
                <option data-value="2057">Ekantakuna</option>
                <option data-value="2543">Kusunti</option>
                <option data-value="2714">Thasikhel</option>
                <option data-value="3207">Mahalaxmisthan Patan</option>
                <option data-value="4092">Satdobato</option>
                <option data-value="4847">BNB</option>
                <option data-value="5235">Gwarko</option>
                <option data-value="5885">Kharibot</option>
                <option data-value="6485">Balkumari</option>
                <option data-value="7160">Bhatbhateni Koteshwor</option>
                <option data-value="7485">Koteshwor</option>
                <option data-value="8440">Tinkune Ringroad</option>
                <option data-value="9340">Sinamangal</option>
                <option data-value="9965">Airport</option>
                <option data-value="10830">1.Airport-Gaushala</option>
                <option data-value="11430">Gaushala</option>
                <option data-value="11805">Jayabageswori</option>
                <option data-value="12140">Mitrapark</option>
                <option data-value="12595">Chabahil</option>
                <option data-value="13120">Gopikrishna</option>
                <option data-value="13920">Sukedhara</option>
                <option data-value="14275">Dhumbarahi</option>
                <option data-value="14645">Chappal Karkhana</option>
                <option data-value="15443">Narayangopal Chowk</option>
                <option data-value="15950">Basundhara</option>
                <option data-value="17250">Talim Kendra</option>
                <option data-value="17665">Samakhusi</option>
                <option data-value="18015">Gongabu</option>
                <option data-value="18535">Naya Buspark</option>
                <option data-value="18905">Machhapokhari</option>
                <option data-value="19795">Balaju</option>
                <option data-value="20530">Banasthali</option>
                <option data-value="20880">Dhungedhara</option>
                <option data-value="21495">Sano Bharyang</option>
                <option data-value="21755">Thulo Bharyang</option>
                <option data-value="22335">Swayambhu</option>
                <option data-value="23245">Sitapaila</option>
                <option data-value="23605">Bafal</option>
                <option data-value="25105">Kalanki</option>
                <option data-value="25815">Khasibazar Kalanki</option>
                <option data-value="26075">Sita Pump</option>
                <option data-value="27325">Balkhu</option>
            </select>



            <p>Enter destination:</p>
            <select id="valueSelector2">
                <!-- <option data-value="0">Balkhu</option> -->
                <option data-value="346">Sanepa</option>
                <option data-value="701">Sanepa Height</option>
                <option data-value="1016">Nayabato</option>
                <option data-value="1331">Dhobighat</option>
                <option data-value="1751">Nakhu Dobato</option>
                <option data-value="2057">Ekantakuna</option>
                <option data-value="2543">Kusunti</option>
                <option data-value="2714">Thasikhel</option>
                <option data-value="3207">Mahalaxmisthan Patan</option>
                <option data-value="4092">Satdobato</option>
                <option data-value="4847">BNB</option>
                <option data-value="5235">Gwarko</option>
                <option data-value="5885">Kharibot</option>
                <option data-value="6485">Balkumari</option>
                <option data-value="7160">Bhatbhateni Koteshwor</option>
                <option data-value="7485">Koteshwor</option>
                <option data-value="8440">Tinkune Ringroad</option>
                <option data-value="9340">Sinamangal</option>
                <option data-value="9965">Airport</option>
                <option data-value="10830">1.Airport-Gaushala</option>
                <option data-value="11430">Gaushala</option>
                <option data-value="11805">Jayabageswori</option>
                <option data-value="12140">Mitrapark</option>
                <option data-value="12595">Chabahil</option>
                <option data-value="13120">Gopikrishna</option>
                <option data-value="13920">Sukedhara</option>
                <option data-value="14275">Dhumbarahi</option>
                <option data-value="14645">Chappal Karkhana</option>
                <option data-value="15443">Narayangopal Chowk</option>
                <option data-value="15950">Basundhara</option>
                <option data-value="17250">Talim Kendra</option>
                <option data-value="17665">Samakhusi</option>
                <option data-value="18015">Gongabu</option>
                <option data-value="18535">Naya Buspark</option>
                <option data-value="18905">Machhapokhari</option>
                <option data-value="19795">Balaju</option>
                <option data-value="20530">Banasthali</option>
                <option data-value="20880">Dhungedhara</option>
                <option data-value="21495">Sano Bharyang</option>
                <option data-value="21755">Thulo Bharyang</option>
                <option data-value="22335">Swayambhu</option>
                <option data-value="23245">Sitapaila</option>
                <option data-value="23605">Bafal</option>
                <option data-value="25105">Kalanki</option>
                <option data-value="25815">Khasibazar Kalanki</option>
                <option data-value="26075">Sita Pump</option>
                <option data-value="27325">Balkhu</option>
            </select>

            

        </div>
        <div class="group">
            <p>Do you have an ID card? Select your group:</p>
            <label for="studentCheckbox">
                <input type="radio" name="group" value="student" id="studentCheckbox">Student
            </label>
            <label for="agedCheckbox">
                <input type="radio" name="group" value="aged" id="agedCheckbox">Aged
            </label>
        </div>
        <button onclick="calculateFare()">Calculate</button>
        <div id="paymentButtonContainer"></div>

        <div id="subtractedValue"></div>
        <div id="displayValue"></div>

        <script>
            function calculateFare() {
                var selectElement1 = document.getElementById("valueSelector1");
                var selectElement2 = document.getElementById("valueSelector2");
                var studentCheckbox = document.getElementById("studentCheckbox");
                var agedCheckbox = document.getElementById("agedCheckbox");

                var selectedOption1 = selectElement1.options[selectElement1.selectedIndex];
                var selectedOption2 = selectElement2.options[selectElement2.selectedIndex];

                var selectedValue1 = parseFloat(selectedOption1.getAttribute("data-value"));
                var selectedValue2 = parseFloat(selectedOption2.getAttribute("data-value"));

                // Subtract the selected values.
                var subtractedResult = selectedValue1 - selectedValue2;

                // Check if the subtracted result is negative and format accordingly.
                var subtractedResultText = subtractedResult < 0 ? subtractedResult.toString().substring(1) : subtractedResult.toString();

                // Determine the display value based on the subtracted result.
                var displayValue;

                if (subtractedResultText >= 0 && subtractedResultText <= 5000) {
                    displayValue = 20;
                } else if (subtractedResultText <= 10000) {
                    displayValue = 25;
                } else if (subtractedResultText <= 15000) {
                    displayValue = 30;
                } else if (subtractedResultText <= 20000) {
                    displayValue = 33;
                } else if (subtractedResultText <= 25000) {
                    displayValue = 35;
                } else {
                    displayValue = 40; // Add a default value if needed
                }

                // Check the selected group and adjust fare accordingly.
                if (studentCheckbox.checked) {
                    // Apply a discount for students (e.g., 15%)
                    displayValue *= 0.85; // 85% of the original fare
                } else if (agedCheckbox.checked) {
                    // Apply a discount for aged passengers (e.g., 20%)
                    displayValue *= 0.8; // 80% of the original fare
                }

                document.getElementById("subtractedValue").innerHTML = "Total Distance: " + subtractedResultText + " m";
                document.getElementById("displayValue").innerHTML = "Bus Fare: Rs " + displayValue.toFixed(2); // Display with 2 decimal places



                var myButton = document.createElement("button");

                // Set button attributes (optional)
                myButton.id = "myButtonId"; // Set an ID for the button
                myButton.className = "myButtonClass"; // Set one or more classes for styling
                myButton.textContent = "Click Me"; // Set the text content of the button

                // Add an event listener to the button
                myButton.addEventListener("click", function () {
                    alert("Button clicked!");
                });

                // Append the button to an existing element on the page
                document.getElementById("buttonContainer").appendChild(myButton);

                // showPaymentButton();
            }

        </script>

        <br>

        <div id="map">Choose Your Destination</div>


    </div>

    <script>

        var map = L.map('map');
        map.setView([51.505, -0.09], 10);

        L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
            attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
        }).addTo(map);

        navigator.geolocation.watchPosition(success, error);

        let marker, circle, zoomed;

        function success(pos) {

            const lat = pos.coords.latitude;
            const lng = pos.coords.longitude;
            const accuracy = pos.coords.accuracy;

            if (marker) {
                map.removeLayer(marker);
                map.removeLayer(circle);
            }

            marker = L.marker([lat, lng]).addTo(map);
            circle = L.circle([lat, lng], { radius: accuracy }).addTo(map);


            if (!zoomed) {
                zoomed = map.fitBounds(circle.getBounds());

            }

            map.setView([lat, lng]);
        }

        function error(err) {
            if (err.code === 1) {
                alert("please allow");

            }
            else {
                alert("cannot");
            }
        }

    </script>



    <footer>
        <ul>
            <li><a href="/dashboard.html" class="nav-item"><ion-icon name="home-outline"></ion-icon></a></li>
            <li> <a href="/myaccount.html" class="nav-item"> <ion-icon name="person-outline"></ion-icon> </a></li>
            <li><a href="/aboutus.html" class="nav-item"><ion-icon name="information-circle-outline"></ion-icon></a>
            </li>
            <li><a href="/support.html" class="nav-item"><ion-icon name="call-outline"></ion-icon></a></li>
        </ul>
    </footer>
</body>

</html>