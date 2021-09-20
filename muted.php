<!-- Instruktion til webbrowser om at vi kører HTML5 -->
<!DOCTYPE html>

<!-- html starter og slutter hele dokumentet / lang=da: Fortæller siden er på dansk -->
<html lang="da">

<!-- I <head> har man opsætning - det ser brugeren ikke, men det fortæller noget om siden -->
<head>
    <!-- Sætter tegnsætning til utf-8 som bl.a. tillader danske bogstaver -->
    <meta charset="utf-8">

    <!-- Titel som ses oppe i browserens tab mv. -->
    <title>Main Menu</title>

    <!-- Metatags der fortæller at søgemaskiner er velkomne, hvem der udgiver siden og copyright information -->
    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <!-- Sikrer man kan benytte CSS ved at tilkoble en CSS fil -->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/styles.css" rel="stylesheet" type="text/css">
    <link href="css/header.css" rel="stylesheet" type="text/css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:wght@300&display=swap" rel="stylesheet">

    <!-- Sikrer den vises korrekt på mobil, tablet mv. ved at tage ift. skærmstørrelse - bliver brugt til responsive websider -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
</head>
<style>

    body{
        background: url("images/BioShock.jpg");
        background-repeat: no-repeat;
        background-position: center;
        background-size: cover;
        background-attachment: fixed;
    }
</style>
<body>

<nav class="navbar navbar-light justify-content-between">

    <a class="navbar-brand px-4 d-none d-lg-block">
        <img src="images/astelun_logo1.png" class="img-thumbnail" width="100px">
        <h4 class="ms-2 text-white" >Astelun</h4>
    </a>
    <a class="navbar-brand px-4 d-block d-lg-none">
        <img src="images/astelun_logo1.png" class="img-thumbnail" width="60px">
    </a>

    <form class="form-inline d-none d-lg-block">
        <div id="btns">
            <a href="index.php"><button type="button" class="btn btn-danger btn-lg me-4 mb-5">X</button></div>
        </a>
    </form>

    <form class="form-inline d-block d-lg-none">
        <div id="btns">
            <a href="index.php"><button type="button" class="btn btn-danger btn-lg me-4 my-5">X</button></div>
        </a>
    </form>
</nav>


<div class="collapse" id="collapseNew">
    <div class="card card-body border-5 p-5 col-11 mx-auto disc" style="background-color: #F8F4EF; border-color: #4A3828">
        <h2>De nyeste trailers og screenshots, samt de største titler fra 2021 intil videre. Klik ind her for at få et indblik i hvad der rør på sig i den fantastiske verden der er videospil.</h2>
        <div class="text-center container-fluid">
            <div class="row">
                <div class="col-6">
                    <a href="news.php" role="button">
                        <button type="button" class="btn btn-success btn-lg me-4 mb-5 col-3">&#10003;</button>
                    </a></div>
                <div class="col-6">
                    <a data-bs-toggle="collapse" href="#collapseNew" role="button" aria-expanded="false" aria-controls="collapseExample">
                        <button type="button" class="btn btn-danger btn-lg me-4 mb-5 col-3">X</button>
                    </a></div>
            </div>
        </div>
    </div>
</div>

<div class="collapse" id="collapseLoad">
    <div class="card card-body border-5 p-5 col-11 mx-auto disc" style="background-color: #F8F4EF; border-color: #4A3828">
        <h2>Jeg har efterhånden spillet videospil i et par år. Gennem den tid har jeg oplevet talrige eventyr,
            haft adrenalin susende rundt i kroppen, og har været vidne til nogle af de mest følelsesladede dramatiske øjeblikke.
            <br>
            Min mening er at videospil, ikke bare er underholdningens seneste medie. Men at det faktisk i mange tilfælde er decideret kunst.
            <br>
            Her er samlet nogle af de mest vidunderlige historier, fantastiske øjeblikke og visuelle fornøjelser i form af grafik der er så farverig og gennemarbejdet at det kunne hænge på et museum.
            Altså mine bud på kunst, fra spil jeg tidligere har spillet.
        </h2>
        <div class="text-center container-fluid">
            <div class="row">
                <div class="col-6">
                    <a href="loading.php" role="button">
                        <button type="button" class="btn btn-success btn-lg me-4 mb-5 col-3">&#10003;</button>
                    </a></div>
                <div class="col-6">
                    <a data-bs-toggle="collapse" href="#collapseLoad" role="button" aria-expanded="false" aria-controls="collapseExample">
                        <button type="button" class="btn btn-danger btn-lg me-4 mb-5 col-3">X</button>
                    </a></div>
            </div>
        </div>
    </div>
</div>
<div class="collapse" id="collapseSet">
    <div class="card card-body border-5 p-5 col-11 mx-auto disc" style="background-color: #F8F4EF; border-color: #4A3828">
        <h2>Her er en unmute knap, men ellers ikke noget indhold. Hele denne side er lavet til at det skulle ligne en hovedmenu fra et spil.
            Derfor er knapper kaldt som de er <i>(New Game, Load Game, Settings og Credits)</i>.
            Der var ikke noget indhold der var oplagt at sende ind i Settings og Credits, så skulle du forsøge at trykke ind på denne side, kommer du til en 404 fejl-side.
            Der er heldigvis mulighed for at komme tilbage til døren fra forsiden, ved blot at trykke hvor som helst på skærmen.
        </h2>
        <div class="text-center container-fluid">
            <div class="row">
                <div class="col-12">
                    <a href="start.php" role="button">
                        <button type="button" class="btn btn-dark btn-lg me-4 mb-5 col-4">Unmute &nbsp;<i class="fas fa-volume-up"></i></button>
                    </a></div>
                <div class="col-6">
                    <a href="fail.html" role="button">
                        <button type="button" class="btn btn-success btn-lg me-4 mb-5 col-3">&#10003;</button>
                    </a></div>
                <div class="col-6">
                    <a data-bs-toggle="collapse" href="#collapseSet" role="button" aria-expanded="false" aria-controls="collapseExample">
                        <button type="button" class="btn btn-danger btn-lg me-4 mb-5 col-3">X</button>
                    </a></div>
            </div>
        </div>
    </div>
</div>

<div class="collapse" id="collapseCred">
    <div class="card card-body border-5 p-5 col-11 mx-auto disc" style="background-color: #F8F4EF; border-color: #4A3828">
        <h2>Her er der ikke noget indhold. Hele denne side er lavet til at det skulle ligne en hovedmenu fra et spil.
            Derfor er knapper kaldt som de er <i>(New Game, Load Game, Settings og Credits)</i>.
            Der var ikke noget indhold der var oplagt at sende ind i Settings og Credits, så skulle du forsøge at trykke ind på denne side, kommer du til en 404 fejl-side.
            Der er heldigvis mulighed for at komme tilbage til døren fra forsiden, ved blot at trykke hvor som helst på skærmen.
        </h2>
        <div class="text-center container-fluid">
            <div class="row">
                <div class="col-6">
                    <a href="fail.html" role="button">
                        <button type="button" class="btn btn-success btn-lg me-4 mb-5 col-3">&#10003;</button>
                    </a></div>
                <div class="col-6">
                    <a data-bs-toggle="collapse" href="#collapseCred" role="button" aria-expanded="false" aria-controls="collapseExample">
                        <button type="button" class="btn btn-danger btn-lg me-4 mb-5 col-3">X</button>
                    </a></div>
            </div>
        </div>
    </div>
</div>


<div class="container-fluid">
    <div class="row my-5 ms-2">
        <div class="col-12 col-md-6 col-xl-12 my-4 d-flex justify-content-center justify-content-xl-start">
            <button type="button" class="btn btn-rounded gradicolor align-center">
                <a class="btn text-decoration-none text-white-50" data-bs-toggle="collapse" href="#collapseNew" role="button" aria-expanded="false" aria-controls="collapseExample">
                    <h4>New game</h4>
                </a>
            </button>
        </div>

        <div class="col-12 col-md-6 col-xl-12 my-4 d-flex justify-content-center justify-content-xl-start">
            <button type="button" class="btn btn-rounded gradicolor align-center">
                <a class="btn text-decoration-none text-white-50" data-bs-toggle="collapse" href="#collapseLoad" role="button" aria-expanded="false" aria-controls="collapseExample">
                    <h4>Load game</h4></a>
            </button>
        </div>

        <div class="col-12 col-md-6 col-xl-12 my-4 d-flex justify-content-center justify-content-xl-start">
            <button type="button" class="btn btn-rounded gradicolor align-center">
                <a class="btn text-decoration-none text-white-50" data-bs-toggle="collapse" href="#collapseSet" role="button" aria-expanded="false" aria-controls="collapseExample">
                    <h4>Settings</h4></a>
            </button>
        </div>

        <div class="col-12 col-md-6 col-xl-12 my-4 d-flex justify-content-center justify-content-xl-start">
            <button type="button" class="btn btn-rounded gradicolor align-center">
                <a class="btn text-decoration-none text-white-50" data-bs-toggle="collapse" href="#collapseCred" role="button" aria-expanded="false" aria-controls="collapseExample">
                    <h4>Credits</h4></a>
            </button>
        </div>
    </div>
</div>

<script src="js/script.js"></script>
<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>