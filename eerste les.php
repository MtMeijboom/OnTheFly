<!DOCTYPE html>  
<html>  
<head>  
    <title>Homepage</title>
    <link rel="stylesheet" href="eerste les1.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>  
<body>
<div class="w3-sidebar w3-bar-block w3-border-right" style="display:none" id="mySidebar">
    <button onclick="w3_close()" class="w3-bar-item w3-large">Close &times;</button>
    <a href="eerste les.php"><i class="fa fa-fw fa-home"></i>Home</a><br>
    <a class="active" href="toevoegen.php"><class="active"><i class="fas fa-plus"></i>Toevoegen</a>
</div>
<script>
    function w3_open() {
        document.getElementById("mySidebar").style.display = "block";
    }

    function w3_close() {
        document.getElementById("mySidebar").style.display = "none";
    }
</script>

<div class="w3-teal">
    <button class="w3-button w3-teal w3-xlarge" onclick="w3_open()">☰</button>
</div>
<h1>Welkom op deze website</h1>
<p><em>Vliegtuigen</em></p>
</body>  
</html>  