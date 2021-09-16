<!-- Instruktion til webbrowser om at vi kører HTML5 -->
<!DOCTYPE html>

<!-- html starter og slutter hele dokumentet / lang=da: Fortæller siden er på dansk -->
<html lang="da">

<!-- I <head> har man opsætning - det ser brugeren ikke, men det fortæller noget om siden -->
<head>
    <!-- Sætter tegnsætning til utf-8 som bl.a. tillader danske bogstaver -->
    <meta charset="utf-8">

    <!-- Titel som ses oppe i browserens tab mv. -->
    <title>Sigende titel</title>

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
</head>

<!-- i <body> har man alt indhold på siden som brugeren kan se -->
<body>
<?php include "./includes/header.php";?>

<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="images/Skyrim_20210706034220.jpg" alt="First slide">
            <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50">
                <h5>The Elder Scrolls 5: Skyrim</h5>
                <p>Den 11. November 2011, udkom det der skulle blive en tidsløs klassiker.
                Det femte kapitel af Elder Scrolls serien begyndte på PS3, og ser nu ud til at skulle genudgives for 3. gang, nu på PS5 og Xbox</p>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="images/Ghost%20of%20Tsushima_20200721030947.jpg" alt="Second slide">
            <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50">
                <h5>Ghost of Tsushima</h5>
                <p>Den 11. November 2011, udkom det der skulle blive en tidsløs klassiker.
                    Det femte kapitel af Elder Scrolls serien begyndte på PS3, og ser nu ud til at skulle genudgives for 3. gang, nu på PS5 og Xbox</p>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="images/Bloodborne™_20200920233507.jpg" alt="Third slide">
            <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50">
                <h5>Bloodborne</h5>
                <p>Den 11. November 2011, udkom det der skulle blive en tidsløs klassiker.
                    Det femte kapitel af Elder Scrolls serien begyndte på PS3, og ser nu ud til at skulle genudgives for 3. gang, nu på PS5 og Xbox</p>
            </div>
        </div>
    </div>
</div>

<script>
    $('.carousel').carousel({
        interval: 2000
    })
</script>

<audio autoplay loop>
    <source src="Solas%20Theme.mp3">
</audio>
</body>
</html>
