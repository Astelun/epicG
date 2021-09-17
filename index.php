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

    <!-- Sikrer den vises korrekt på mobil, tablet mv. ved at tage ift. skærmstørrelse - bliver brugt til responsive websider -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
</head>

<!-- i <body> har man alt indhold på siden som brugeren kan se -->
<style>

    body{
        background: url("images/PT_door.jpg");
        background-repeat: no-repeat;
        background-position: center;
        background-size: cover;
        background-attachment: fixed;
    }
</style>
<body>

<div class="bg-transparent">
    <a href="start.php" class="text-decoration-none">

    <div id="btns" class="text-muted font-monospace font-weight-bold w-25">
    <h3>Left-click to continue</h3>
        <audio id="beep-two" preload="auto">
            <source src="audio/beep.mp3"></source>
        </audio>
    </div>

    </a>
</div>





    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

<audio autoplay loop>
    <source src="audio/creepo.mp3">
</audio>

<script src="js/script.js"></script>
</body>
</html>
