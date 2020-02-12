<!DOCTYPE html>  
<html>  
<head>  
    <title>Vliegtuigen Toevoegen</title> 
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


<h1><em>Voer hier vliegtuigen in</em></h1>

<font color = "white">
<?php
$host = "localhost";
$dbname = "OnTheFly";
$username = "root";
$password = "";

$con = new PDO("mysql:host=$host;dbname=$dbname","$username","$password");
if(isset($_POST["btnAdd"])) {

    $lijst = array();

    if(empty($_POST["vliegtuignummer"])) {
        echo "Er is geen vliegtuignummer ingevuld<br/>";
    } else {
        echo "Vliegtuignummer: " . $_POST["vliegtuignummer"] . "<br/>";

        $lijst[0] = $_POST["vliegtuignummer"];
    }
    if(empty($_POST["type"])){
        echo"Er is geen type ingevuld<br/>";
    } else {
        echo "Type: " . $_POST["type"] . "<br/>";
        $lijst[1] = $_POST["type"];
    }
    if(empty($_POST["vliegtuigmaatschappij"])) {
        echo "Er is geen vliegtuigmaatschappij ingevuld<br/>";
    } else {
        echo "Vliegtuigmaatschappij: " . $_POST["vliegtuigmaatschappij"] . "<br/>";
        $lijst[2] =  $_POST["vliegtuigmaatschappij"];
    }
    if(empty($_POST["status"])){
        echo"Er is geen status ingevuld<br/>";
    } else {
        echo "Status: " . $_POST["status"] . "<br/>";
        $lijst[3] = $_POST["status"];
    }


    $query = "INSERT INTO vliegtuigen VALUES ".
        "(0,'$lijst[0]','$lijst[1]','$lijst[2]','$lijst[3]')";
   

    $stm = $con->prepare($query);
    if($stm->execute())
    {
        echo "correct uitgevoerd zit in db";
    }else echo "query in db mislukt";
}

?>
</font>
<form method="post" name = "diertoevoegen">
    <h3>Voeg hier de vliegtuigen toe toe:</h3>

    <p><b>Vliegtuignummer:<br/></b><INPUT name="vliegtuignummer"<INPUT TYPE="text"/></P>
    <P><b>Type:<br/></b><INPUT name="type"<INPUT TYPE="text"/></P>
    <p><b>Vliegtuigmaatschappij:<br/></b><INPUT name="vliegtuigmaatschappij"<INPUT TYPE="text"/></P>
    <p><b>Status:<br/></b><INPUT name="status"<INPUT TYPE="text"/></p>
    <button class="w3-button w3-circle w3-teal" type="submit" name="btnAdd">Voeg toe</button>
</FORM>
</body>  
</html>  