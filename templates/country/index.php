<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Country</h1>
    <div id="country"></div>
</body>

<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script>
    let countryData = axios.get('http://127.0.0.1:8080/country')
        .then((res) => {
            return res
        })
        .catch(err => {
            console.log("Err : ", err);
        })
    console.log(countryData);

    //let countryEl = document.getElementById('country');
    //let countryHtml = "";

    //for (ley i = 0; i < countryData.length; i++) {
      //  countryHtml += '<span>' + countryData.name + '</span><br/>';
    //}

    //countryEl.innerText = countryHtml;


</script>
</html>