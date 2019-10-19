<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .country {
            font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
            max-width: 400px;
            min-width: 200px;
            text-align: center;
        }

        .country td, th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        .country tr:nth-child(even){background-color: #f2f2f2;}

        .country tr:hover {background-color: #ddd;}

        .country th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #4CAF50;
            color: white;
        }
    </style>
</head>
<body>
    <h1>Countries & Capitals</h1>
    <table class="country">
        <thead>
            <tr>
                <th>Country</th>
                <th>Capital</th>
            </tr>
        </thead>
        <tbody id="country"></tbody>
    </table>
</body>

<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script>
    let countryData = axios.get('http://127.0.0.1:8080/country')
        .then((res) => {
            console.log("res : ", res);
            let countryEl = document.getElementById('country');
            let countries = res.data.data.countries;

            countries.forEach(country => {
                let row = document.createElement("tr");
                let colCountry = document.createElement("td");
                let colCity = document.createElement('td');
                colCountry.appendChild(document.createTextNode(country.name));
                colCity.appendChild(document.createTextNode(country.cityName));

                row.appendChild(colCountry);
                row.appendChild(colCity);

                countryEl.appendChild(row);
            })
        })
        .catch(err => {
            console.log("Err : ", err);
        });
</script>
</html>