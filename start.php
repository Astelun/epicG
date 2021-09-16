<!-- Instruktion til webbrowser om at vi kører HTML5 -->
<!DOCTYPE html>

<!-- html starter og slutter hele dokumentet / lang=da: Fortæller siden er på dansk -->
<html lang="da">

<!-- I <head> har man opsætning - det ser brugeren ikke, men det fortæller noget om siden -->
<head>
    <!-- Sætter tegnsætning til utf-8 som bl.a. tillader danske bogstaver -->
    <meta charset="utf-8">

    <!-- Titel som ses oppe i browserens tab mv. -->
    <title>Epic Gamer Zone</title>

    <!-- Metatags der fortæller at søgemaskiner er velkomne, hvem der udgiver siden og copyright information -->
    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <!-- Sikrer man kan benytte CSS ved at tilkoble en CSS fil -->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/styles.css" rel="stylesheet" type="text/css">
    <link href="css/header.css" rel="stylesheet" type="text/css">

    <!-- Sikrer den vises korrekt på mobil, tablet mv. ved at tage ift. skærmstørrelse - bliver brugt til responsive websider -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
</head>
<style>

    body{
        background: url("images/BioShock_ The Collection_20210622224020.jpg");
        background-repeat: no-repeat;
        background-position: center;
        background-size: cover;
        background-attachment: fixed;
    }
</style>
<body>
<?php include "./includes/header.php";?>

<div id="btns" class="ms-5 w-25">
    <button type="button" class="btn btn-rounded my-5 gradicolor">
        <a href="news.php" class="text-decoration-none text-white-50"><h3>New game</h3></a>
        <audio id="beep-two" preload="auto">
            <source src="audio/beep.mp3"></source>
        </audio>
    </button>

    <br>

    <button type="button" class="btn btn-rounded my-5 gradicolor">
        <a href="loading.php" class="text-decoration-none text-white-50"><h3>Load game</h3></a>
    </button>

    <br>

    <button type="button" class="btn btn-rounded my-5 gradicolor">
        <a href="fail.html" class="text-decoration-none text-white-50"><h3>Settings</h3></a>
    </button>

    <br>

    <button type="button" class="btn btn-rounded my-5 gradicolor">
        <a href="fail.html" class="text-decoration-none text-white-50"><h3>Credits</h3></a>
    </button>

</div>



<audio autoplay loop>
    <source src="audio/Solas%20Theme.mp3">
</audio>

<script src="js/script.js"></script>
</body>
</html>
