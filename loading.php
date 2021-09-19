<!-- Instruktion til webbrowser om at vi kører HTML5 -->
<!DOCTYPE html>

<!-- html starter og slutter hele dokumentet / lang=da: Fortæller siden er på dansk -->
<html lang="da">

<!-- I <head> har man opsætning - det ser brugeren ikke, men det fortæller noget om siden -->
<head>
    <!-- Sætter tegnsætning til utf-8 som bl.a. tillader danske bogstaver -->
    <meta charset="utf-8">

    <!-- Titel som ses oppe i browserens tab mv. -->
    <title>Test</title>

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

    <style>
        #Topbtn{
            position: fixed;
            bottom: 20px;
            right: 20px;
            display: none;
        }
    </style>

</head>

<!-- i <body> har man alt indhold på siden som brugeren kan se -->
<body>
<!-- Back to top button -->

<nav class="navbar navbar-light fixed-top">
    <div class="container-fluid">
        <button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav p-2 col-4 col-lg-2 text-center bg-light">
                <li class="nav-item">
                    <strong>Game paused</strong>
                </li>
                <li><hr class="dropdown-divider"></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Liste
                    </a>
                    <ul class="dropdown-menu overflow-auto" style="height: 50vh" aria-labelledby="navbarDropdown">
                        <li><a href="#Templar" class="btn-primary my-1 p-2 text-center text-decoration-none rounded d-flex justify-content-center">Assassin's Creed</a></li>
                        <li><a href="#Diner" class="btn-primary my-1 p-2 text-center text-decoration-none rounded d-flex justify-content-center">Batman</a></li>
                        <li><a href="#Daddy" class="btn-primary my-1 p-2 text-center text-decoration-none rounded d-flex justify-content-center">BioShock</a></li>
                        <li><a href="#Dead" class="btn-primary my-1 p-2 text-center text-decoration-none rounded d-flex justify-content-center">Bloodborne</a></li>
                        <li><a href="#Solas" class="btn-primary my-1 p-2 text-center text-decoration-none rounded d-flex justify-content-center">Dragon Age</a></li>
                        <li><a href="#Dragon" class="btn-primary my-1 p-2 text-center text-decoration-none rounded d-flex justify-content-center">Elder Scrolls</a></li>
                        <li><a href="#Village" class="btn-primary my-1 p-2 text-center text-decoration-none rounded d-flex justify-content-center">Everybody's Gone to the Rapture</a></li>
                        <li><a href="#Cloud" class="btn-primary my-1 p-2 text-center text-decoration-none rounded d-flex justify-content-center">Final Fantasy</a></li>
                        <li><a href="#Sushi" class="btn-primary my-1 p-2 text-center text-decoration-none rounded d-flex justify-content-center">Ghost of Tsushima</a></li>
                        <li><a href="#Kratos" class="btn-primary my-1 p-2 text-center text-decoration-none rounded d-flex justify-content-center">God of War</a></li>
                        <li><a href="#Robo" class="btn-primary my-1 p-2 text-center text-decoration-none rounded d-flex justify-content-center">Horizon</a></li>
                        <li><a href="#Sand" class="btn-primary my-1 p-2 text-center text-decoration-none rounded d-flex justify-content-center">Journey</a></li>
                        <li><a href="#Buzz" class="btn-primary my-1 p-2 text-center text-decoration-none rounded d-flex justify-content-center">Mass Effect</a></li>
                        <li><a href="#Boss" class="btn-primary my-1 p-2 text-center text-decoration-none rounded d-flex justify-content-center">Metal Gear</a></li>
                        <li><a href="#Pis" class="btn-primary my-1 p-2 text-center text-decoration-none rounded d-flex justify-content-center">P.T.</a></li>
                        <li><a href="#Cowboy" class="btn-primary my-1 p-2 text-center text-decoration-none rounded d-flex justify-content-center">Red Dead Redemption</a></li>
                        <li><a href="#Joel" class="btn-primary my-1 p-2 text-center text-decoration-none rounded d-flex justify-content-center">The Last of Us</a></li>
                        <li><a href="#Charter" class="btn-primary my-1 p-2 text-center text-decoration-none rounded d-flex justify-content-center">Uncharted</a></li>
                        <li><a href="#Elg" class="btn-primary my-1 p-2 text-center text-decoration-none rounded d-flex justify-content-center">Until Dawn</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="start.php">Main menu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link bg-danger rounded text-white" href="index.php">Exit game</a>
                </li>

            </ul>
        </div>
    </div>
</nav>

<div class="row justify-content-center gx-0">
    <div class="col-12 col-lg-10 g-3 g-lg-0">


        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>

                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 5"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="5" aria-label="Slide 6"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="6" aria-label="Slide 7"></button>

                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="7" aria-label="Slide 8"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="8" aria-label="Slide 9"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="9" aria-label="Slide 10"></button>

                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="10" aria-label="Slide 11"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="11" aria-label="Slide 12"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="12" aria-label="Slide 13"></button>

                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="13" aria-label="Slide 14"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="14" aria-label="Slide 15"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="15" aria-label="Slide 16"></button>

                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="16" aria-label="Slide 17"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="17" aria-label="Slide 18"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="18" aria-label="Slide 19"></button>

            </div>
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="15000">
                    <img src="images/Skyrim_20200805002245.jpg" class="d-block w-100" alt="Bjerg">
                    <div class="carousel-caption d-none d-md-block bg-opacity-25 bg-dark rounded px-2">
                        <a href="#Dragon" class="text-decoration-none text-white"><h5>Uendelige eventyr</h5></a>
                        <p>"The Elder Scrolls V: Skyrim", udkom d. 11 november, <strong>2011</strong>.
                            Det årti, har kun været med til at cementere Skyrim som en tidsløs klassiker.
                            Du er den udvalgte, der skal besejre dragen og redde verdenen. Klassisk fantasy, når det er allerbedst.</p>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="15000">
                    <img src="images/Rapture.jpg" class="d-block w-100" alt="Maler">
                    <div class="carousel-caption d-none d-md-block bg-opacity-25 bg-dark rounded px-2">
                        <a href="#Village" class="text-decoration-none text-white"><h5>Forbløffende grafik</h5></a>
                        <p>"Everybody's gone to the Rapture" var i 2015 det absolut ypperste man kunne opnå indenfor grafik.
                            At bevæge sig igennem den forladte britiske landsby,
                            var fra start af fantastisk idyllisk, og illustrerede hvor vidunderligt et video spil kunne se ud.</p>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="15000">
                    <img src="images/GoW.jpg" class="d-block w-100" alt="Spook">
                    <div class="carousel-caption d-none d-md-block bg-opacity-25 bg-dark rounded px-2">
                        <a href="#Kratos" class="text-decoration-none text-white"><h5>Det bliver ikke større</h5></a>
                        <p>"Until Dawn" udkom i 2015, og tog Teen Horror-genren til helt nye højder. Du styrer 8 teenagere, der er fanget midt i en snestorm.
                            Gyserfilm er skæmmende, men når man selv bliver sat i styringen, er den ekstra dimension, kun med til at øge spændingen.
                            Titlen siger det meste, målet er at overleve "Indtil daggry"</p>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="15000">
                    <img src="images/The%20Last%20of%20Us™%20Part%20II_20200620013315.jpg" class="d-block w-100" alt="Ild">
                    <div class="carousel-caption d-none d-md-block bg-opacity-25 bg-dark rounded px-2">
                        <a href="#Joel" class="text-decoration-none text-white"><h5>Ubeskriveligt drama</h5></a>
                        <p>"The Last of Us" fra 2015, kan kun beskrives som et mesterværk. Historien er noget af det mest gribende man kan opleve, og starter hårdere ud en noget andet før har gjort.
                            I 2020 fortsatte Ellie og Joel's historie med en "Part 2", og der blev ikke sparet på følelserne, i dette dramatiske spil, der perfekt sætter parrallel mellem verdens undergang, og indivedets tab af medmenneskelighed.</p>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="15000">
                    <img src="images/Until%20Dawn™_20180805182431.jpg" class="d-block w-100" alt="Spook">
                    <div class="carousel-caption d-none d-md-block bg-opacity-25 bg-dark rounded px-2">
                        <a href="#Elg" class="text-decoration-none text-white"><h5>En gyserfilm DU styrer</h5></a>
                        <p>"Until Dawn" udkom i 2015, og tog Teen Horror-genren til helt nye højder. Du styrer 8 teenagere, der er fanget midt i en snestorm.
                            Gyserfilm er skæmmende, men når man selv bliver sat i styringen, er den ekstra dimension, kun med til at øge spændingen.
                            Titlen siger det meste, målet er at overleve "Indtil daggry"</p>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="15000">
                    <img src="images/Ghost%20of%20Tsushima_LAKESHINE.jpg" class="d-block w-100" alt="Spook">
                    <div class="carousel-caption d-none d-md-block bg-opacity-25 bg-dark rounded px-2">
                        <a href="#Sushi" class="text-decoration-none text-white"><h5>Alt ser flot ud</h5></a>
                        <p>"Until Dawn" udkom i 2015, og tog Teen Horror-genren til helt nye højder. Du styrer 8 teenagere, der er fanget midt i en snestorm.
                            Gyserfilm er skæmmende, men når man selv bliver sat i styringen, er den ekstra dimension, kun med til at øge spændingen.
                            Titlen siger det meste, målet er at overleve "Indtil daggry"</p>
                    </div>
                </div>

                <div class="carousel-item" data-bs-interval="15000">
                    <img src="images/bigBat.jpg" class="d-block w-100" alt="Bruce">
                    <div class="carousel-caption d-none d-md-block bg-opacity-25 bg-dark rounded px-2">
                        <a href="#Diner" class="text-decoration-none text-white"><h5>Superhelt med fantastisk kinematografi</h5></a>
                        <p>"The Elder Scrolls V: Skyrim", udkom d. 11 november, <strong>2011</strong>.
                            Det årti, har kun været med til at cementere Skyrim som en tidsløs klassiker.
                            Du er den udvalgte, der skal besejre dragen og redde verdenen. Klassisk fantasy, når det er allerbedst.</p>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="15000">
                    <img src="images/Mass%20Effect.jpg" class="d-block w-100" alt="Ild">
                    <div class="carousel-caption d-none d-md-block bg-opacity-25 bg-dark rounded px-2">
                        <a href="#Buzz" class="text-decoration-none text-white"><h5>Mod det uendelige univers!</h5></a>
                        <p>"The Last of Us" fra 2015, kan kun beskrives som et mesterværk. Historien er noget af det mest gribende man kan opleve, og starter hårdere ud en noget andet før har gjort.
                            I 2020 fortsatte Ellie og Joel's historie med en "Part 2", og der blev ikke sparet på følelserne, i dette dramatiske spil, der perfekt sætter parrallel mellem verdens undergang, og indivedets tab af medmenneskelighed.</p>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="15000">
                    <img src="images/Journey.jpg" class="d-block w-100" alt="Spook">
                    <div class="carousel-caption d-none d-md-block bg-opacity-25 bg-dark rounded px-2">
                        <a href="#Sand" class="text-decoration-none text-white"><h5>En uventet rejse</h5></a>
                        <p>"Until Dawn" udkom i 2015, og tog Teen Horror-genren til helt nye højder. Du styrer 8 teenagere, der er fanget midt i en snestorm.
                            Gyserfilm er skæmmende, men når man selv bliver sat i styringen, er den ekstra dimension, kun med til at øge spændingen.
                            Titlen siger det meste, målet er at overleve "Indtil daggry"</p>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="15000">
                    <img src="images/METAL%20GEAR%20SOLID%20V.jpg" class="d-block w-100" alt="Spook">
                    <div class="carousel-caption d-none d-md-block bg-opacity-25 bg-dark rounded px-2">
                        <a href="#Boss" class="text-decoration-none text-white"><h5>De rigtige specialstyrker</h5></a>
                        <p>"Until Dawn" udkom i 2015, og tog Teen Horror-genren til helt nye højder. Du styrer 8 teenagere, der er fanget midt i en snestorm.
                            Gyserfilm er skæmmende, men når man selv bliver sat i styringen, er den ekstra dimension, kun med til at øge spændingen.
                            Titlen siger det meste, målet er at overleve "Indtil daggry"</p>
                    </div>
                </div>

                <div class="carousel-item" data-bs-interval="15000">
                    <img src="images/tresspaser.jpg" class="d-block w-100" alt="Bjerg">
                    <div class="carousel-caption d-none d-md-block bg-opacity-25 bg-dark rounded px-2">
                        <a href="#Solas" class="text-decoration-none text-white"><h5>Glem alt om drager og dæmoner, dine venner er vigtigst</h5></a>
                        <p>"The Elder Scrolls V: Skyrim", udkom d. 11 november, <strong>2011</strong>.
                            Det årti, har kun været med til at cementere Skyrim som en tidsløs klassiker.
                            Du er den udvalgte, der skal besejre dragen og redde verdenen. Klassisk fantasy, når det er allerbedst.</p>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="15000">
                    <img src="images/PT_door.jpg" class="d-block w-100" alt="Ild">
                    <div class="carousel-caption d-none d-md-block bg-opacity-25 bg-dark rounded px-2">
                        <a href="#Pis" class="text-decoration-none text-white"><h5>Det absolut mest skræmmende jeg nogensinde har prøvet...</h5></a>
                        <p>"The Last of Us" fra 2015, kan kun beskrives som et mesterværk. Historien er noget af det mest gribende man kan opleve, og starter hårdere ud en noget andet før har gjort.
                            I 2020 fortsatte Ellie og Joel's historie med en "Part 2", og der blev ikke sparet på følelserne, i dette dramatiske spil, der perfekt sætter parrallel mellem verdens undergang, og indivedets tab af medmenneskelighed.</p>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="15000">
                    <img src="images/BioShock.jpg" class="d-block w-100" alt="Spook">
                    <div class="carousel-caption d-none d-md-block bg-opacity-25 bg-dark rounded px-2">
                        <a href="#Daddy" class="text-decoration-none text-white"><h5>Dyk ned i et mysterie</h5></a>
                        <p>"Until Dawn" udkom i 2015, og tog Teen Horror-genren til helt nye højder. Du styrer 8 teenagere, der er fanget midt i en snestorm.
                            Gyserfilm er skæmmende, men når man selv bliver sat i styringen, er den ekstra dimension, kun med til at øge spændingen.
                            Titlen siger det meste, målet er at overleve "Indtil daggry"</p>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="15000">
                    <img src="images/FINAL%20FANTASY%20VII.jpg" class="d-block w-100" alt="Spook">
                    <div class="carousel-caption d-none d-md-block bg-opacity-25 bg-dark rounded px-2">
                        <a href="#Cloud" class="text-decoration-none text-white"><h5>Japans ultimative RPG</h5></a>
                        <p>"Until Dawn" udkom i 2015, og tog Teen Horror-genren til helt nye højder. Du styrer 8 teenagere, der er fanget midt i en snestorm.
                            Gyserfilm er skæmmende, men når man selv bliver sat i styringen, er den ekstra dimension, kun med til at øge spændingen.
                            Titlen siger det meste, målet er at overleve "Indtil daggry"</p>
                    </div>
                </div>

                <div class="carousel-item" data-bs-interval="15000">
                    <img src="images/hesti.jpg" class="d-block w-100" alt="Arthur">
                    <div class="carousel-caption d-none d-md-block bg-opacity-25 bg-dark rounded px-2">
                        <a href="#Cowboy" class="text-decoration-none text-white"><h5>Den ultimative omgang politi og røvere</h5></a>
                        <p>"The Elder Scrolls V: Skyrim", udkom d. 11 november, <strong>2011</strong>.
                            Det årti, har kun været med til at cementere Skyrim som en tidsløs klassiker.
                            Du er den udvalgte, der skal besejre dragen og redde verdenen. Klassisk fantasy, når det er allerbedst.</p>
                    </div>
                </div>

                <div class="carousel-item" data-bs-interval="15000">
                    <img src="images/Horizon%20Zero%20Dawn™_%20Complete%20Edition_20210522062958.jpg" class="d-block w-100" alt="Spook">
                    <div class="carousel-caption d-none d-md-block bg-opacity-25 bg-dark rounded px-2">
                        <a href="#Robo" class="text-decoration-none text-white"><h5>Sci-fi + hulemennesker er en perfekt kombination</h5></a>
                        <p>"Until Dawn" udkom i 2015, og tog Teen Horror-genren til helt nye højder. Du styrer 8 teenagere, der er fanget midt i en snestorm.
                            Gyserfilm er skæmmende, men når man selv bliver sat i styringen, er den ekstra dimension, kun med til at øge spændingen.
                            Titlen siger det meste, målet er at overleve "Indtil daggry"</p>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="15000">
                    <img src="images/UnchartedM.jpg" class="d-block w-100" alt="Spook">
                    <div class="carousel-caption d-none d-md-block bg-opacity-25 bg-dark rounded px-2">
                        <a href="#Charter" class="text-decoration-none text-white"><h5>Indiana Jones har mødt sin ligemand</h5></a>
                        <p>"Until Dawn" udkom i 2015, og tog Teen Horror-genren til helt nye højder. Du styrer 8 teenagere, der er fanget midt i en snestorm.
                            Gyserfilm er skæmmende, men når man selv bliver sat i styringen, er den ekstra dimension, kun med til at øge spændingen.
                            Titlen siger det meste, målet er at overleve "Indtil daggry"</p>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="15000">
                    <img src="images/Bloodborne.jpg" class="d-block w-100" alt="Spook">
                    <div class="carousel-caption d-none d-md-block bg-opacity-25 bg-dark rounded px-2">
                        <a href="#Dead" class="text-decoration-none text-white"><h5>Du skal dø</h5></a>
                        <p>"Until Dawn" udkom i 2015, og tog Teen Horror-genren til helt nye højder. Du styrer 8 teenagere, der er fanget midt i en snestorm.
                            Gyserfilm er skæmmende, men når man selv bliver sat i styringen, er den ekstra dimension, kun med til at øge spændingen.
                            Titlen siger det meste, målet er at overleve "Indtil daggry"</p>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="15000">
                    <img src="images/Eiffel.jpg" class="d-block w-100" alt="Ild">
                    <div class="carousel-caption d-none d-md-block bg-opacity-25 bg-dark rounded px-2">
                        <a href="#Templar" class="text-decoration-none text-white"><h5>Historiske tidsperioder</h5></a>
                        <p>"The Last of Us" fra 2015, kan kun beskrives som et mesterværk. Historien er noget af det mest gribende man kan opleve, og starter hårdere ud en noget andet før har gjort.
                            I 2020 fortsatte Ellie og Joel's historie med en "Part 2", og der blev ikke sparet på følelserne, i dette dramatiske spil, der perfekt sætter parrallel mellem verdens undergang, og indivedets tab af medmenneskelighed.</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</div>

<br>


<div class="container-fluid">
    <div class="row justify-content-center gy-1 mb-5">

        <div class="col-12 col-md-8 col-xl-8 my-2" id="Joel">
            <div class="card h-75">
                <div class="card-body">
                    <h2 class="card-title">The Last of Us</h2>
                    <h5 class="card-subtitle">2015, 2020</h5>
                </div>
                <img src="images/The%20Last%20of%20Us™%20Part%20II_20200619192015.jpg">
                <p>
                    <a class="btn btn-outline-danger" data-bs-toggle="collapse" href="#multiCollapseExample2" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Se mere</a>
                </p>
                <div class="row">
                    <div class="col">
                        <div class="collapse multi-collapse" id="multiCollapseExample2">
                            <div class="card card-body">
                                3 spil af Rocksteady studiet, (1 spil i serien der blev lavet af et andet studie). Batman er sej og derfor er batman spillet sejt, her er et billede af den diner man er i i starten, som er der hvor alt bare går galt,Some placeholder content for the first collapse component of this multi-collapse example. This panel is hidden by default but revealed when the user activates the relevant trigger.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-8 col-xl-8 my-2" id="Village">
            <div class="card h-75">
                <div class="card-body">
                    <h2 class="card-title">Everybody's Gone to the Rapture</h2>
                    <h5 class="card-subtitle">2015</h5>
                </div>
                <img src="images/Rapture.jpg">
                <p>
                    <a class="btn btn-outline-danger" data-bs-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Se mere</a>
                </p>
                <div class="row">
                    <div class="col">
                        <div class="collapse multi-collapse" id="multiCollapseExample1">
                            <div class="card card-body">
                                3 spil af Rocksteady studiet, (1 spil i serien der blev lavet af et andet studie). Batman er sej og derfor er batman spillet sejt, her er et billede af den diner man er i i starten, som er der hvor alt bare går galt,Some placeholder content for the first collapse component of this multi-collapse example. This panel is hidden by default but revealed when the user activates the relevant trigger.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-8 col-xl-8 my-2" id="Diner">
            <div class="card h-75">
                <div class="card-body">
                    <h2 class="card-title">Batman: Arkham-serien</h2>
                    <h5 class="card-subtitle">2009-2015</h5>
                </div>
                <img src="images/Joker.jpg">
                <p>
                    <a class="btn btn-outline-danger" data-bs-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Se mere</a>
                </p>
                <div class="row">
                    <div class="col">
                        <div class="collapse multi-collapse" id="multiCollapseExample1">
                            <div class="card card-body border-0">
                                3 spil af Rocksteady studiet, (1 spil i serien der blev lavet af et andet studie). Batman er sej og derfor er batman spillet sejt, her er et billede af den diner man er i i starten, som er der hvor alt bare går galt,Some placeholder content for the first collapse component of this multi-collapse example. This panel is hidden by default but revealed when the user activates the relevant trigger.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-8 col-xl-8 my-2" id="Buzz">
            <div class="card h-75">
                <div class="card-body">
                    <h2 class="card-title">Mass Effect-serien</h2>
                    <h5 class="card-subtitle">2009-2015</h5>
                </div>
                <img src="images/Mass%20Effect.jpg">
                <p>
                    <a class="btn btn-outline-danger" data-bs-toggle="collapse" href="#multiCollapseExample2" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Se mere</a>
                </p>
                <div class="row">
                    <div class="col">
                        <div class="collapse multi-collapse" id="multiCollapseExample2">
                            <div class="card card-body">
                                3 spil af Rocksteady studiet, (1 spil i serien der blev lavet af et andet studie). Batman er sej og derfor er batman spillet sejt, her er et billede af den diner man er i i starten, som er der hvor alt bare går galt,Some placeholder content for the first collapse component of this multi-collapse example. This panel is hidden by default but revealed when the user activates the relevant trigger.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="col-12 col-md-8 col-xl-8 my-2" id="Sand">
            <div class="card h-75">
                <div class="card-body">
                    <h2 class="card-title">Journey</h2>
                    <h5 class="card-subtitle">2012</h5>
                </div>
                <img src="images/Journey.jpg">
                <p>
                    <a class="btn btn-outline-danger" data-bs-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Se mere</a>
                </p>
                <div class="row">
                    <div class="col">
                        <div class="collapse multi-collapse" id="multiCollapseExample1">
                            <div class="card card-body border-0">
                                3 spil af Rocksteady studiet, (1 spil i serien der blev lavet af et andet studie). Batman er sej og derfor er batman spillet sejt, her er et billede af den diner man er i i starten, som er der hvor alt bare går galt,Some placeholder content for the first collapse component of this multi-collapse example. This panel is hidden by default but revealed when the user activates the relevant trigger.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-8 col-xl-8 my-2" id="Cowboy">
            <div class="card h-75">
                <div class="card-body">
                    <h2 class="card-title">Red Dead Redemtion</h2>
                    <h5 class="card-subtitle">2010, 2018</h5>
                </div>
                <img src="images/Red%20Dead%20Redemption%202_20200301024817.jpg">
                <p>
                    <a class="btn btn-outline-danger" data-bs-toggle="collapse" href="#multiCollapseExample2" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Se mere</a>
                </p>
                <div class="row">
                    <div class="col">
                        <div class="collapse multi-collapse" id="multiCollapseExample2">
                            <div class="card card-body">
                                3 spil af Rocksteady studiet, (1 spil i serien der blev lavet af et andet studie). Batman er sej og derfor er batman spillet sejt, her er et billede af den diner man er i i starten, som er der hvor alt bare går galt,Some placeholder content for the first collapse component of this multi-collapse example. This panel is hidden by default but revealed when the user activates the relevant trigger.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="col-12 col-md-8 col-xl-8 my-2" id="Kratos">
            <div class="card h-75">
                <div class="card-body">
                    <h2 class="card-title">God of War</h2>
                    <h5 class="card-subtitle">2005, 2007, 2008, 2010, 2013, 2018</h5>
                </div>
                <img src="images/GoW.jpg">
                <p>
                    <a class="btn btn-outline-danger" data-bs-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Se mere</a>
                </p>
                <div class="row">
                    <div class="col">
                        <div class="collapse multi-collapse" id="multiCollapseExample1">
                            <div class="card card-body border-0">
                                3 spil af Rocksteady studiet, (1 spil i serien der blev lavet af et andet studie). Batman er sej og derfor er batman spillet sejt, her er et billede af den diner man er i i starten, som er der hvor alt bare går galt,Some placeholder content for the first collapse component of this multi-collapse example. This panel is hidden by default but revealed when the user activates the relevant trigger.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-8 col-xl-8 my-2" id="Templar">
            <div class="card h-75">
                <div class="card-body">
                    <h2 class="card-title">Assassin's Creed</h2>
                    <h5 class="card-subtitle">2007-2020</h5>
                </div>
                <img src="images/Notre.jpg">
                <p>
                    <a class="btn btn-outline-danger" data-bs-toggle="collapse" href="#multiCollapseExample2" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Se mere</a>
                </p>
                <div class="row">
                    <div class="col">
                        <div class="collapse multi-collapse" id="multiCollapseExample2">
                            <div class="card card-body">
                                3 spil af Rocksteady studiet, (1 spil i serien der blev lavet af et andet studie). Batman er sej og derfor er batman spillet sejt, her er et billede af den diner man er i i starten, som er der hvor alt bare går galt,Some placeholder content for the first collapse component of this multi-collapse example. This panel is hidden by default but revealed when the user activates the relevant trigger.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="col-12 col-md-8 col-xl-8 my-2" id="Robo">
            <div class="card h-75">
                <div class="card-body">
                    <h2 class="card-title">Horizon: Zero Dawn</h2>
                    <h5 class="card-subtitle">2017</h5>
                </div>
                <img src="images/Horizon%20Zero%20Dawn™_%20Complete%20Edition_20210520193235.jpg">
                <p>
                    <a class="btn btn-outline-danger" data-bs-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Se mere</a>
                </p>
                <div class="row">
                    <div class="col">
                        <div class="collapse multi-collapse" id="multiCollapseExample1">
                            <div class="card card-body border-0">
                                3 spil af Rocksteady studiet, (1 spil i serien der blev lavet af et andet studie). Batman er sej og derfor er batman spillet sejt, her er et billede af den diner man er i i starten, som er der hvor alt bare går galt,Some placeholder content for the first collapse component of this multi-collapse example. This panel is hidden by default but revealed when the user activates the relevant trigger.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-8 col-xl-10 my-2" id="Charter">
            <div class="card h-75">
                <div class="card-body">
                    <h2 class="card-title">Uncharted</h2>
                    <h5 class="card-subtitle">2007</h5>
                </div>
                <img src="images/UnchartedM.jpg">
                <p>
                    <a class="btn btn-outline-danger" data-bs-toggle="collapse" href="#multiCollapseExample2" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Se mere</a>
                </p>
                <div class="row">
                    <div class="col">
                        <div class="collapse multi-collapse" id="multiCollapseExample2">
                            <div class="card card-body">
                                3 spil af Rocksteady studiet, (1 spil i serien der blev lavet af et andet studie). Batman er sej og derfor er batman spillet sejt, her er et billede af den diner man er i i starten, som er der hvor alt bare går galt,Some placeholder content for the first collapse component of this multi-collapse example. This panel is hidden by default but revealed when the user activates the relevant trigger.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="col-12 col-md-8 col-xl-8 my-2" id="Boss">
            <div class="card h-75">
                <div class="card-body">
                    <h2 class="card-title">Metal Gear-serien</h2>
                    <h5 class="card-subtitle">1987-2015</h5>
                </div>
                <img src="images/METAL%20GEAR%20SOLID%20V.jpg">
                <p>
                    <a class="btn btn-outline-danger" data-bs-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Se mere</a>
                </p>
                <div class="row">
                    <div class="col">
                        <div class="collapse multi-collapse" id="multiCollapseExample1">
                            <div class="card card-body border-0">
                                3 spil af Rocksteady studiet, (1 spil i serien der blev lavet af et andet studie). Batman er sej og derfor er batman spillet sejt, her er et billede af den diner man er i i starten, som er der hvor alt bare går galt,Some placeholder content for the first collapse component of this multi-collapse example. This panel is hidden by default but revealed when the user activates the relevant trigger.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-8 col-xl-8 my-2" id="Solas">
            <div class="card h-75">
                <div class="card-body">
                    <h2 class="card-title">Dragon Age</h2>
                    <h5 class="card-subtitle">2009-2015</h5>
                </div>
                <img src="images/tresspaser.jpg">
                <p>
                    <a class="btn btn-outline-danger" data-bs-toggle="collapse" href="#multiCollapseExample2" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Se mere</a>
                </p>
                <div class="row">
                    <div class="col">
                        <div class="collapse multi-collapse" id="multiCollapseExample2">
                            <div class="card card-body">
                                3 spil af Rocksteady studiet, (1 spil i serien der blev lavet af et andet studie). Batman er sej og derfor er batman spillet sejt, her er et billede af den diner man er i i starten, som er der hvor alt bare går galt,Some placeholder content for the first collapse component of this multi-collapse example. This panel is hidden by default but revealed when the user activates the relevant trigger.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="col-12 col-md-8 col-xl-8 my-2" id="Pis">
            <div class="card h-75">
                <div class="card-body">
                    <h2 class="card-title">P.T. <em>(Playable Teaser)</em></h2>
                    <h5 class="card-subtitle">2009-2015</h5>
                </div>
                <img src="images/PT_door.jpg">
                <p>
                    <a class="btn btn-outline-danger" data-bs-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Se mere</a>
                </p>
                <div class="row">
                    <div class="col">
                        <div class="collapse multi-collapse" id="multiCollapseExample1">
                            <div class="card card-body border-0">
                                3 spil af Rocksteady studiet, (1 spil i serien der blev lavet af et andet studie). Batman er sej og derfor er batman spillet sejt, her er et billede af den diner man er i i starten, som er der hvor alt bare går galt,Some placeholder content for the first collapse component of this multi-collapse example. This panel is hidden by default but revealed when the user activates the relevant trigger.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-8 col-xl-8 my-2" id="Cloud">
            <div class="card h-75">
                <div class="card-body">
                    <h2 class="card-title">Final Fantasy</h2>
                    <h5 class="card-subtitle">1987-2021</h5>
                </div>
                <img src="images/FINAL%20FANTASY%20VII.jpg">
                <p>
                    <a class="btn btn-outline-danger" data-bs-toggle="collapse" href="#multiCollapseExample2" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Se mere</a>
                </p>
                <div class="row">
                    <div class="col">
                        <div class="collapse multi-collapse" id="multiCollapseExample2">
                            <div class="card card-body">
                                3 spil af Rocksteady studiet, (1 spil i serien der blev lavet af et andet studie). Batman er sej og derfor er batman spillet sejt, her er et billede af den diner man er i i starten, som er der hvor alt bare går galt,Some placeholder content for the first collapse component of this multi-collapse example. This panel is hidden by default but revealed when the user activates the relevant trigger.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-8 col-xl-8 my-2" id="Daddy">
            <div class="card h-75">
                <div class="card-body">
                    <h2 class="card-title">BioShock</h2>
                    <h5 class="card-subtitle">2007</h5>
                </div>
                <img src="images/BioShock.jpg">
                <p>
                    <a class="btn btn-outline-danger" data-bs-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Se mere</a>
                </p>
                <div class="row">
                    <div class="col">
                        <div class="collapse multi-collapse" id="multiCollapseExample1">
                            <div class="card card-body border-0">
                                3 spil af Rocksteady studiet, (1 spil i serien der blev lavet af et andet studie). Batman er sej og derfor er batman spillet sejt, her er et billede af den diner man er i i starten, som er der hvor alt bare går galt,Some placeholder content for the first collapse component of this multi-collapse example. This panel is hidden by default but revealed when the user activates the relevant trigger.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-8 col-xl-8 my-2" id="Dead">
            <div class="card h-75">
                <div class="card-body">
                    <h2 class="card-title">Bloodborne</h2>
                    <h5 class="card-subtitle">2015</h5>
                </div>
                <img src="images/Bloodborne.jpg">
                <p>
                    <a class="btn btn-outline-danger" data-bs-toggle="collapse" href="#multiCollapseExample2" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Se mere</a>
                </p>
                <div class="row">
                    <div class="col">
                        <div class="collapse multi-collapse" id="multiCollapseExample2">
                            <div class="card card-body">
                                3 spil af Rocksteady studiet, (1 spil i serien der blev lavet af et andet studie). Batman er sej og derfor er batman spillet sejt, her er et billede af den diner man er i i starten, som er der hvor alt bare går galt,Some placeholder content for the first collapse component of this multi-collapse example. This panel is hidden by default but revealed when the user activates the relevant trigger.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-8 col-xl-8 my-2" id="Sushi">
            <div class="card h-75">
                <div class="card-body">
                    <h2 class="card-title">Ghost of Tsushima</h2>
                    <h5 class="card-subtitle">2020</h5>
                </div>
                <img src="images/Ghost%20of%20Tsushima_20200720191346.jpg">
                <p>
                    <a class="btn btn-outline-danger" data-bs-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Se mere</a>
                </p>
                <div class="row">
                    <div class="col">
                        <div class="collapse multi-collapse" id="multiCollapseExample1">
                            <div class="card card-body border-0">
                                3 spil af Rocksteady studiet, (1 spil i serien der blev lavet af et andet studie). Batman er sej og derfor er batman spillet sejt, her er et billede af den diner man er i i starten, som er der hvor alt bare går galt,Some placeholder content for the first collapse component of this multi-collapse example. This panel is hidden by default but revealed when the user activates the relevant trigger.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-8 col-xl-8 my-2" id="Dragon">
            <div class="card h-75">
                <div class="card-body">
                    <h2 class="card-title">The Elder Scrolls-serien</h2>
                    <h5 class="card-subtitle">1994-2011</h5>
                </div>
                <img src="images/Skyrim_20210707155821.jpg">
                <p>
                    <a class="btn btn-outline-danger" data-bs-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Se mere</a>
                </p>
                <div class="row">
                    <div class="col">
                        <div class="collapse multi-collapse" id="multiCollapseExample1">
                            <div class="card card-body border-0">
                                3 spil af Rocksteady studiet, (1 spil i serien der blev lavet af et andet studie). Batman er sej og derfor er batman spillet sejt, her er et billede af den diner man er i i starten, som er der hvor alt bare går galt,Some placeholder content for the first collapse component of this multi-collapse example. This panel is hidden by default but revealed when the user activates the relevant trigger.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="col-12 col-md-8 col-xl-8 my-2" id="Elg">
            <div class="card h-75">
                <div class="card-body">
                    <h2 class="card-title">Until Dawn</h2>
                    <h5 class="card-subtitle">2015</h5>
                </div>
                <img src="images/Until%20Dawn™_20180805182431.jpg">
                <p>
                    <a class="btn btn-outline-danger" data-bs-toggle="collapse" href="#multiCollapseExample2" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Se mere</a>
                </p>
                <div class="row">
                    <div class="col">
                        <div class="collapse multi-collapse" id="multiCollapseExample2">
                            <div class="card card-body">
                                3 spil af Rocksteady studiet, (1 spil i serien der blev lavet af et andet studie). Batman er sej og derfor er batman spillet sejt, her er et billede af den diner man er i i starten, som er der hvor alt bare går galt,Some placeholder content for the first collapse component of this multi-collapse example. This panel is hidden by default but revealed when the user activates the relevant trigger.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
</div>
<br>

<button type="button" class="btn btn-outline-danger bg-white opacity-75 btn-floating btn-lg" id="Topbtn">
    <i class="fas fa-arrow-up">Top</i>
</button>

<script>
    let mybutton = document.getElementById("Topbtn");

    window.onscroll = function () {
        scrollFunction();
    };

    function scrollFunction() {
        if (
            document.body.scrollTop > 20 ||
            document.documentElement.scrollTop > 20
        ) {
            mybutton.style.display = "block";
        } else {
            mybutton.style.display = "none";
        }
    }
    mybutton.addEventListener("click", backToTop);

    function backToTop() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }
</script>

<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="js/script.js"></script>
</body>
</html>
