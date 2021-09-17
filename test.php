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

<div class="row justify-content-center gx-0">
    <div class="col-10">


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
                    <img src="images/Rapture.jpg" class="d-block w-100" alt="Maler">
                    <div class="carousel-caption d-none d-md-block">
                        <a href="#Village" class="text-decoration-none text-white"><h5>Forbløffende grafik</h5></a>
                        <p>"Everybody's gone to the Rapture" var i 2015 det absolut ypperste man kunne opnå indenfor grafik.
                            At bevæge sig igennem den forladte britiske landsby,
                            var fra start af fantastisk idyllisk, og illustrerede hvor vidunderligt et video spil kunne se ud.</p>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="15000">
                    <img src="images/Skyrim_20200805002245.jpg" class="d-block w-100" alt="Bjerg">
                    <div class="carousel-caption d-none d-md-block">
                        <a href="#Dragon" class="text-decoration-none text-white"><h5>Uendelige eventyr</h5></a>
                        <p>"The Elder Scrolls V: Skyrim", udkom d. 11 november, <strong>2011</strong>.
                            Det årti, har kun været med til at cementere Skyrim som en tidsløs klassiker.
                            Du er den udvalgte, der skal besejre dragen og redde verdenen. Klassisk fantasy, når det er allerbedst.</p>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="15000">
                    <img src="images/The%20Last%20of%20Us™%20Part%20II_20200621044523.jpg" class="d-block w-100" alt="Ild">
                    <div class="carousel-caption d-none d-md-block">
                        <a href="#Joel" class="text-decoration-none text-white"><h5>Ubeskriveligt drama</h5></a>
                        <p>"The Last of Us" fra 2015, kan kun beskrives som et mesterværk. Historien er noget af det mest gribende man kan opleve, og starter hårdere ud en noget andet før har gjort.
                            I 2020 fortsatte Ellie og Joel's historie med en "Part 2", og der blev ikke sparet på følelserne, i dette dramatiske spil, der perfekt sætter parrallel mellem verdens undergang, og indivedets tab af medmenneskelighed.</p>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="15000">
                    <img src="images/Until%20Dawn™_20180805182431.jpg" class="d-block w-100" alt="Spook">
                    <div class="carousel-caption d-none d-md-block">
                        <a href="#Elg" class="text-decoration-none text-white"><h5>En gyserfilm DU styrer</h5></a>
                        <p>"Until Dawn" udkom i 2015, og tog Teen Horror-genren til helt nye højder. Du styrer 8 teenagere, der er fanget midt i en snestorm.
                            Gyserfilm er skæmmende, men når man selv bliver sat i styringen, er den ekstra dimension, kun med til at øge spændingen.
                            Titlen siger det meste, målet er at overleve "Indtil daggry"</p>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="15000">
                    <img src="images/GoW.jpg" class="d-block w-100" alt="Spook">
                    <div class="carousel-caption d-none d-md-block">
                        <a href="#Kratos" class="text-decoration-none text-white"><h5>Det bliver ikke større</h5></a>
                        <p>"Until Dawn" udkom i 2015, og tog Teen Horror-genren til helt nye højder. Du styrer 8 teenagere, der er fanget midt i en snestorm.
                            Gyserfilm er skæmmende, men når man selv bliver sat i styringen, er den ekstra dimension, kun med til at øge spændingen.
                            Titlen siger det meste, målet er at overleve "Indtil daggry"</p>
                    </div>
                </div>

                <div class="carousel-item" data-bs-interval="15000">
                    <img src="images/Ghost%20of%20Tsushima_LAKESHINE.jpg" class="d-block w-100" alt="Spook">
                    <div class="carousel-caption d-none d-md-block">
                        <a href="#Sushi" class="text-decoration-none text-white"><h5>Alt ser flot ud</h5></a>
                        <p>"Until Dawn" udkom i 2015, og tog Teen Horror-genren til helt nye højder. Du styrer 8 teenagere, der er fanget midt i en snestorm.
                            Gyserfilm er skæmmende, men når man selv bliver sat i styringen, er den ekstra dimension, kun med til at øge spændingen.
                            Titlen siger det meste, målet er at overleve "Indtil daggry"</p>
                    </div>
                </div>

                <div class="carousel-item" data-bs-interval="15000">
                    <img src="images/Joker.jpg" class="d-block w-100" alt="Bjerg">
                    <div class="carousel-caption d-none d-md-block">
                        <a href="#Diner" class="text-decoration-none text-white"><h5>Superhelt med fantastisk kinematografi</h5></a>
                        <p>"The Elder Scrolls V: Skyrim", udkom d. 11 november, <strong>2011</strong>.
                            Det årti, har kun været med til at cementere Skyrim som en tidsløs klassiker.
                            Du er den udvalgte, der skal besejre dragen og redde verdenen. Klassisk fantasy, når det er allerbedst.</p>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="15000">
                    <img src="images/Mass%20Effect.jpg" class="d-block w-100" alt="Ild">
                    <div class="carousel-caption d-none d-md-block">
                        <a href="#Buzz" class="text-decoration-none text-white"><h5>Mod det uendelige univers!</h5></a>
                        <p>"The Last of Us" fra 2015, kan kun beskrives som et mesterværk. Historien er noget af det mest gribende man kan opleve, og starter hårdere ud en noget andet før har gjort.
                            I 2020 fortsatte Ellie og Joel's historie med en "Part 2", og der blev ikke sparet på følelserne, i dette dramatiske spil, der perfekt sætter parrallel mellem verdens undergang, og indivedets tab af medmenneskelighed.</p>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="15000">
                    <img src="images/Journey.jpg" class="d-block w-100" alt="Spook">
                    <div class="carousel-caption d-none d-md-block">
                        <a href="#Sand" class="text-decoration-none text-white"><h5>En uventet rejse</h5></a>
                        <p>"Until Dawn" udkom i 2015, og tog Teen Horror-genren til helt nye højder. Du styrer 8 teenagere, der er fanget midt i en snestorm.
                            Gyserfilm er skæmmende, men når man selv bliver sat i styringen, er den ekstra dimension, kun med til at øge spændingen.
                            Titlen siger det meste, målet er at overleve "Indtil daggry"</p>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="15000">
                    <img src="images/METAL%20GEAR%20SOLID%20V.jpg" class="d-block w-100" alt="Spook">
                    <div class="carousel-caption d-none d-md-block">
                        <a href="#Boss" class="text-decoration-none text-white"><h5>De rigtige specialstyrker</h5></a>
                        <p>"Until Dawn" udkom i 2015, og tog Teen Horror-genren til helt nye højder. Du styrer 8 teenagere, der er fanget midt i en snestorm.
                            Gyserfilm er skæmmende, men når man selv bliver sat i styringen, er den ekstra dimension, kun med til at øge spændingen.
                            Titlen siger det meste, målet er at overleve "Indtil daggry"</p>
                    </div>
                </div>

                <div class="carousel-item" data-bs-interval="15000">
                    <img src="images/tresspaser.jpg" class="d-block w-100" alt="Bjerg">
                    <div class="carousel-caption d-none d-md-block">
                        <a href="#Solas" class="text-decoration-none text-white"><h5>Glem alt om drager og dæmoner, dine venner er vigtigst</h5></a>
                        <p>"The Elder Scrolls V: Skyrim", udkom d. 11 november, <strong>2011</strong>.
                            Det årti, har kun været med til at cementere Skyrim som en tidsløs klassiker.
                            Du er den udvalgte, der skal besejre dragen og redde verdenen. Klassisk fantasy, når det er allerbedst.</p>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="15000">
                    <img src="images/PT_door.jpg" class="d-block w-100" alt="Ild">
                    <div class="carousel-caption d-none d-md-block">
                        <a href="#Pis" class="text-decoration-none text-white"><h5>Det absolut mest skræmmende jeg nogensinde har prøvet...</h5></a>
                        <p>"The Last of Us" fra 2015, kan kun beskrives som et mesterværk. Historien er noget af det mest gribende man kan opleve, og starter hårdere ud en noget andet før har gjort.
                            I 2020 fortsatte Ellie og Joel's historie med en "Part 2", og der blev ikke sparet på følelserne, i dette dramatiske spil, der perfekt sætter parrallel mellem verdens undergang, og indivedets tab af medmenneskelighed.</p>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="15000">
                    <img src="images/BioShock.jpg" class="d-block w-100" alt="Spook">
                    <div class="carousel-caption d-none d-md-block">
                        <a href="#Daddy" class="text-decoration-none text-white"><h5>Dyk ned i et mysterie</h5></a>
                        <p>"Until Dawn" udkom i 2015, og tog Teen Horror-genren til helt nye højder. Du styrer 8 teenagere, der er fanget midt i en snestorm.
                            Gyserfilm er skæmmende, men når man selv bliver sat i styringen, er den ekstra dimension, kun med til at øge spændingen.
                            Titlen siger det meste, målet er at overleve "Indtil daggry"</p>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="15000">
                    <img src="images/FINAL%20FANTASY%20VII.jpg" class="d-block w-100" alt="Spook">
                    <div class="carousel-caption d-none d-md-block">
                        <a href="#Cloud" class="text-decoration-none text-white"><h5>Japans ultimative RPG</h5></a>
                        <p>"Until Dawn" udkom i 2015, og tog Teen Horror-genren til helt nye højder. Du styrer 8 teenagere, der er fanget midt i en snestorm.
                            Gyserfilm er skæmmende, men når man selv bliver sat i styringen, er den ekstra dimension, kun med til at øge spændingen.
                            Titlen siger det meste, målet er at overleve "Indtil daggry"</p>
                    </div>
                </div>

                <div class="carousel-item" data-bs-interval="15000">
                    <img src="images/Red%20Dead%20Redemption%202_20200301024817.jpg" class="d-block w-100" alt="Bjerg">
                    <div class="carousel-caption d-none d-md-block">
                        <a href="#Cowboy" class="text-decoration-none text-white"><h5>Den ultimative omgang politi og røvere</h5></a>
                        <p>"The Elder Scrolls V: Skyrim", udkom d. 11 november, <strong>2011</strong>.
                            Det årti, har kun været med til at cementere Skyrim som en tidsløs klassiker.
                            Du er den udvalgte, der skal besejre dragen og redde verdenen. Klassisk fantasy, når det er allerbedst.</p>
                    </div>
                </div>

                <div class="carousel-item" data-bs-interval="15000">
                    <img src="images/Horizon%20Zero%20Dawn™_%20Complete%20Edition_20210522062958.jpg" class="d-block w-100" alt="Spook">
                    <div class="carousel-caption d-none d-md-block">
                        <a href="#Robo" class="text-decoration-none text-white"><h5>Sci-fi + hulemennesker er en perfekt kombination</h5></a>
                        <p>"Until Dawn" udkom i 2015, og tog Teen Horror-genren til helt nye højder. Du styrer 8 teenagere, der er fanget midt i en snestorm.
                            Gyserfilm er skæmmende, men når man selv bliver sat i styringen, er den ekstra dimension, kun med til at øge spændingen.
                            Titlen siger det meste, målet er at overleve "Indtil daggry"</p>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="15000">
                    <img src="images/UnchartedM.jpg" class="d-block w-100" alt="Spook">
                    <div class="carousel-caption d-none d-md-block">
                        <a href="#Charter" class="text-decoration-none text-white"><h5>Indiana Jones har mødt sin ligemand</h5></a>
                        <p>"Until Dawn" udkom i 2015, og tog Teen Horror-genren til helt nye højder. Du styrer 8 teenagere, der er fanget midt i en snestorm.
                            Gyserfilm er skæmmende, men når man selv bliver sat i styringen, er den ekstra dimension, kun med til at øge spændingen.
                            Titlen siger det meste, målet er at overleve "Indtil daggry"</p>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="15000">
                    <img src="images/Bloodborne.jpg" class="d-block w-100" alt="Spook">
                    <div class="carousel-caption d-none d-md-block">
                        <a href="#Dead" class="text-decoration-none text-white"><h5>Du skal dø</h5></a>
                        <p>"Until Dawn" udkom i 2015, og tog Teen Horror-genren til helt nye højder. Du styrer 8 teenagere, der er fanget midt i en snestorm.
                            Gyserfilm er skæmmende, men når man selv bliver sat i styringen, er den ekstra dimension, kun med til at øge spændingen.
                            Titlen siger det meste, målet er at overleve "Indtil daggry"</p>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="15000">
                    <img src="images/Eiffel.jpg" class="d-block w-100" alt="Ild">
                    <div class="carousel-caption d-none d-md-block">
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
<p>
    <a class="btn btn-outline-info" data-bs-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Liste</a>
</p>
<div class="row">
    <div class="col">
        <div class="collapse multi-collapse" id="multiCollapseExample1">
            <div class="card card-body border-0 w-25">
                <a href="#Templar">Assassin's Creed</a>
                <a href="#Diner">Batman</a>
                <a href="#Daddy">BioShock</a>
                <a href="#Dead">Bloodborne</a>
                <a href="#Solas">Dragon Age</a>
                <a href="#Dragon">Elder Scrolls</a>
                <a href="#Village">Everybody's Gone to the Rapture</a>
                <a href="#Cloud">Final Fantasy</a>
                <a href="#Sushi">Ghost of Tsushima</a>
                <a href="#Kratos">God of War</a>
                <a href="#Robo">Horizon</a>
                <a href="#Sand">Journey</a>
                <a href="#Buzz">Mass Effect</a>
                <a href="#Boss">Metal Gear</a>
                <a href="#Pis">P.T.</a>
                <a href="#Cowboy">Red Dead Redemption</a>
                <a href="#Joel">The Last of Us</a>
                <a href="#Charter">Uncharted</a>
                <a href="#Elg">Until Dawn</a>

            </div>
        </div>
    </div>
</div>
<br>

<div class="container-fluid">
    <div class="row justify-content-center gy-1 mb-5">

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
                <img src="images/Diner.jpg">
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

        <<div class="col-12 col-md-8 col-xl-8 my-2" id="Elg">
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

<audio autoplay loop>
    <source src="Solas%20Theme.mp3">
</audio>
<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
