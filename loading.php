<!-- Instruktion til webbrowser om at vi kører HTML5 -->
<!DOCTYPE html>

<!-- html starter og slutter hele dokumentet / lang=da: Fortæller siden er på dansk -->
<html lang="da">

<!-- I <head> har man opsætning - det ser brugeren ikke, men det fortæller noget om siden -->
<head>
    <!-- Sætter tegnsætning til utf-8 som bl.a. tillader danske bogstaver -->
    <meta charset="utf-8">

    <!-- Titel som ses oppe i browserens tab mv. -->
    <title>Epic Gamer</title>

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
                        <p>I God of War 3, slag Kratos alle de græske guder ihjel. Der var derfor ikke noget at sige til at da spil-serien fortsatte, måtte det ske i et nyt land.</p>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="15000">
                    <img src="images/The%20Last%20of%20Us™%20Part%20II_20200620013315.jpg" class="d-block w-100" alt="Ild">
                    <div class="carousel-caption d-none d-md-block bg-opacity-25 bg-dark rounded px-2">
                        <a href="#Joel" class="text-decoration-none text-white"><h5>Ubeskriveligt drama</h5></a>
                        <p>"The Last of Us" fra 2015, kan kun beskrives som et mesterværk. Historien er noget af det mest gribende man kan opleve, og starter hårdere ud en noget andet før har gjort.
                            I 2020 fortsatte Ellie og Joel's historie med en "Part 2", og der blev ikke sparet på følelserne,
                            i dette dramatiske spil, der perfekt sætter parrallel mellem verdens undergang, og indivedets tab af medmenneskelighed.</p>
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
                        <p>Det er muligvs det smukkeste spil nogensinde. De japanske skove og de mange templer giver øen Tsushima noget helt særlig. <br>
                            Hvert øjeblik kan du stoppe op og bare nyde hvor vidunderlig og farverig verdenen er</p>
                    </div>
                </div>

                <div class="carousel-item" data-bs-interval="15000">
                    <img src="images/bigBat.jpg" class="d-block w-100" alt="Bruce">
                    <div class="carousel-caption d-none d-md-block bg-opacity-25 bg-dark rounded px-2">
                        <a href="#Diner" class="text-decoration-none text-white"><h5>Superhelt med fantastisk kinematografi</h5></a>
                        <p>Batman er jo ret sej, men når et studie gør sig så umage og fokuserer så kraftigt på at fortælle en historie, så hæver det niveauet markant.</p>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="15000">
                    <img src="images/Mass%20Effect.jpg" class="d-block w-100" alt="Ild">
                    <div class="carousel-caption d-none d-md-block bg-opacity-25 bg-dark rounded px-2">
                        <a href="#Buzz" class="text-decoration-none text-white"><h5>Mod det uendelige univers!</h5></a>
                        <p>Det er altid spændende at udforske det uendelige univers, og i denne udgave af <strong>"Mass Effect"</strong>, går turen til Andromeda galaxen.</p>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="15000">
                    <img src="images/Journey.jpg" class="d-block w-100" alt="Spook">
                    <div class="carousel-caption d-none d-md-block bg-opacity-25 bg-dark rounded px-2">
                        <a href="#Sand" class="text-decoration-none text-white"><h5>En uventet rejse</h5></a>
                        <p>"Journey" er meditativt, positivt og formår at fortælle hele historien uden at sige et eneste ord</p>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="15000">
                    <img src="images/METAL%20GEAR%20SOLID%20V.jpg" class="d-block w-100" alt="Spook">
                    <div class="carousel-caption d-none d-md-block bg-opacity-25 bg-dark rounded px-2">
                        <a href="#Boss" class="text-decoration-none text-white"><h5>De rigtige specialstyrker</h5></a>
                        <p>Big Boss er den ultimative soldat. <br>I <strong>"Metal Gear Solid V"</strong>
                            grundlægger Big Boss så sit eget private militær, og det kommer til at være dig der står i spidsen for det hele</p>
                    </div>
                </div>

                <div class="carousel-item" data-bs-interval="15000">
                    <img src="images/tresspaser.jpg" class="d-block w-100" alt="Bjerg">
                    <div class="carousel-caption d-none d-md-block bg-opacity-25 bg-dark rounded px-2">
                        <a href="#Solas" class="text-decoration-none text-white"><h5>Glem alt om drager og dæmoner, dine venner er vigtigst</h5></a>
                        <p><strong>"Dragon Age"</strong> samler den klassiske fantasy verden, med fokus på forhold og venskaber, som vi kender fra den virkelige verden.</p>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="15000">
                    <img src="images/PT_door.jpg" class="d-block w-100" alt="Ild">
                    <div class="carousel-caption d-none d-md-block bg-opacity-25 bg-dark rounded px-2">
                        <a href="#Pis" class="text-decoration-none text-white"><h5>Det absolut mest skræmmende jeg nogensinde har prøvet...</h5></a>
                        <p>Hideo Kojima og Guillermo del Toro i en forfærdelig kombination. <strong>"P.T."</strong> er alt for uhyggeligt til mig</p>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="15000">
                    <img src="images/BioShock.jpg" class="d-block w-100" alt="Spook">
                    <div class="carousel-caption d-none d-md-block bg-opacity-25 bg-dark rounded px-2">
                        <a href="#Daddy" class="text-decoration-none text-white"><h5>Dyk ned i et mysterie</h5></a>
                        <p>Du ankommer til fyrtårnet, og ender med at tage elevatoren hele vejen ned til havets bund, hvor mysteriet for alvor begynder</p>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="15000">
                    <img src="images/FINAL%20FANTASY%20VII.jpg" class="d-block w-100" alt="Spook">
                    <div class="carousel-caption d-none d-md-block bg-opacity-25 bg-dark rounded px-2">
                        <a href="#Cloud" class="text-decoration-none text-white"><h5>Japans ultimative RPG</h5></a>
                        <p>En lejesoldat for klima-terrorister, men der foregår vist en del mere end det.</p>
                    </div>
                </div>

                <div class="carousel-item" data-bs-interval="15000">
                    <img src="images/hesti.jpg" class="d-block w-100" alt="Arthur">
                    <div class="carousel-caption d-none d-md-block bg-opacity-25 bg-dark rounded px-2">
                        <a href="#Cowboy" class="text-decoration-none text-white"><h5>Den ultimative omgang politi og røvere</h5></a>
                        <p>Cowboydere er ikke lige til at spøge med, særligt ikke Arthur Morgan og den bande du hører til</p>
                    </div>
                </div>

                <div class="carousel-item" data-bs-interval="15000">
                    <img src="images/Horizon%20Zero%20Dawn™_%20Complete%20Edition_20210522062958.jpg" class="d-block w-100" alt="Spook">
                    <div class="carousel-caption d-none d-md-block bg-opacity-25 bg-dark rounded px-2">
                        <a href="#Robo" class="text-decoration-none text-white"><h5>Sci-fi + hulemennesker er en perfekt kombination</h5></a>
                        <p>Robot-dinosauruser passer <i>Naturligvis</i> perfekt sammen med hulemennesker. <br>Det gør de i hvert fald, hvis man skal have noget god action</p>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="15000">
                    <img src="images/UnchartedM.jpg" class="d-block w-100" alt="Spook">
                    <div class="carousel-caption d-none d-md-block bg-opacity-25 bg-dark rounded px-2">
                        <a href="#Charter" class="text-decoration-none text-white"><h5>Indiana Jones har mødt sin ligemand</h5></a>
                        <p>Nathan Drake er sjov, charmerende og karismatisk. Alt imens at han er skattejæger på højeste plan. Videospillets Indiana Jones</p>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="15000">
                    <img src="images/Bloodborne.jpg" class="d-block w-100" alt="Spook">
                    <div class="carousel-caption d-none d-md-block bg-opacity-25 bg-dark rounded px-2">
                        <a href="#Dead" class="text-decoration-none text-white"><h5>Du skal dø</h5></a>
                        <p>Bloodborne, Darksoul, Sekiro og så videre. Studiet bag disse spil er mere end villige til at lade spilleren dø gentagende gange, men det får jo alt til at føles mere belønnende</p>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="15000">
                    <img src="images/Eiffel.jpg" class="d-block w-100" alt="Paris">
                    <div class="carousel-caption d-none d-md-block bg-opacity-25 bg-dark rounded px-2">
                        <a href="#Templar" class="text-decoration-none text-white"><h5>Historiske tidsperioder</h5></a>
                        <p>Assassin's Creed er spillet for historie nørderne. Notre Dame kirken, lavet i tro kopi, og det er sågar muligt at klatre rundt på kirken.</p>
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

        <div class="col-12 col-md-8 col-xl-10 my-2" id="Joel">
            <div class="card h-75">
                <div class="card-body">
                    <h2 class="card-title">The Last of Us</h2>
                    <h5 class="card-subtitle">2015, 2020</h5>
                </div>
                <img src="images/The%20Last%20of%20Us™%20Part%20II_20200619192015.jpg" alt="Ridetur">
                <p>
                    <a class="btn btn-outline-danger" data-bs-toggle="collapse" href="#multiCollapseExampleJoel" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Se mere</a>
                </p>
                <div class="row">
                    <div class="col">
                        <div class="collapse multi-collapse" id="multiCollapseExampleJoel">
                            <div class="card card-body border-0">
                                <div class="col-10 col-lg-8 gy-4 mx-auto">
                                    <h4>Ellie og Joel.<br> Det kan nok ikke helt beskrives. Det skal opleves</h4>
                                    <div class="ratio ratio-16x9 videoContainer">
                                        <iframe width="560" height="315" src="https://www.youtube.com/embed/qPNiIeKMHyg?start=124" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>

        <div class="col-12 col-md-8 col-xl-10 my-2" id="Village">
            <div class="card h-75">
                <div class="card-body">
                    <h2 class="card-title">Everybody's Gone to the Rapture</h2>
                    <h5 class="card-subtitle">2015</h5>
                </div>
                <img src="images/Rapture.jpg">
                <p>
                    <a class="btn btn-outline-danger" data-bs-toggle="collapse" href="#multiCollapseExampleRap" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Se mere</a>
                </p>
                <div class="row">
                    <div class="col">
                        <div class="collapse multi-collapse" id="multiCollapseExampleRap">
                            <div class="card card-body border-0">
                                <div class="col-10 col-lg-8 gy-4 mx-auto">
                                    <h4>Det ser så realistisk ud.<br> Der er helt fantastisk grafik.</h4>
                                    <div class="ratio ratio-16x9 videoContainer">
                                        <iframe width="560" height="315" src="https://www.youtube.com/embed/FaLjDOki0Tc?start=122" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-8 col-xl-10 my-2" id="Diner">
            <div class="card h-75">
                <div class="card-body">
                    <h2 class="card-title">Batman: Arkham-serien</h2>
                    <h5 class="card-subtitle">2009-2015</h5>
                </div>
                <img src="images/Joker.jpg">
                <p>
                    <a class="btn btn-outline-danger" data-bs-toggle="collapse" href="#multiCollapseExampleBat" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Se mere</a>
                </p>
                <div class="row">
                    <div class="col">
                        <div class="collapse multi-collapse" id="multiCollapseExampleBat">
                            <div class="card card-body border-0">
                                <div class="col-10 col-lg-8 gy-4 mx-auto">
                                    <h4>Et godt callback til det første spil.<br> Arkham Knight mestrer storytelling på et meget højt plan.</h4>
                                    <div class="ratio ratio-16x9 videoContainer">
                                        <iframe width="560" height="315" src="https://www.youtube.com/embed/QCcKyxX15e4?start=178" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-8 col-xl-10 my-2" id="Buzz">
            <div class="card h-75">
                <div class="card-body">
                    <h2 class="card-title">Mass Effect-serien</h2>
                    <h5 class="card-subtitle">2009-2015</h5>
                </div>
                <img src="images/Mass%20Effect.jpg">
                <p>
                    <a class="btn btn-outline-danger" data-bs-toggle="collapse" href="#multiCollapseExampleME" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Se mere</a>
                </p>
                <div class="row">
                    <div class="col">
                        <div class="collapse multi-collapse" id="multiCollapseExampleME">
                            <div class="card card-body border-0">
                                <div class="col-10 col-lg-8 gy-4 mx-auto">
                                    <h4>Lækre visuals og fin action.<br> Mass Effect Andromeda har bestemt dets øjeblikke med imponerende grafik og stærke visuelle udtryk</h4>
                                    <div class="ratio ratio-16x9 videoContainer">
                                        <iframe width="560" height="315" src="https://www.youtube.com/embed/RMhd4r3rInY?start=178" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="col-12 col-md-8 col-xl-10 my-2" id="Sand">
            <div class="card h-75">
                <div class="card-body">
                    <h2 class="card-title">Journey</h2>
                    <h5 class="card-subtitle">2012</h5>
                </div>
                <img src="images/Journey.jpg">
                <p>
                    <a class="btn btn-outline-danger" data-bs-toggle="collapse" href="#multiCollapseExampleJourney" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Se mere</a>
                </p>
                <div class="row">
                    <div class="col">
                        <div class="collapse multi-collapse" id="multiCollapseExampleJourney">
                            <div class="card card-body border-0">
                            <div class="col-10 col-lg-8 gy-4 mx-auto">
                                <h4>Ingen ord, og intet mål.<br> Journey har ikke brug for nogen af delene for alligevel at fortælle en smuk historie og være det rene meditation.</h4>
                                <div class="ratio ratio-16x9 videoContainer">
                                    <iframe width="560" height="315" src="https://www.youtube.com/embed/mU3nNT4rcFg?start=21" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-8 col-xl-10 my-2" id="Cowboy">
            <div class="card h-75">
                <div class="card-body">
                    <h2 class="card-title">Red Dead Redemtion</h2>
                    <h5 class="card-subtitle">2010, 2018</h5>
                </div>
                <img src="images/Red%20Dead%20Redemption%202_20200301024817.jpg">
                <p>
                    <a class="btn btn-outline-danger" data-bs-toggle="collapse" href="#multiCollapseExampleRDR" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Se mere</a>
                </p>
                <div class="row">
                    <div class="col">
                        <div class="collapse multi-collapse" id="multiCollapseExampleRDR">
                            <div class="card card-body border-0">
                                <div class="col-10 col-lg-8 gy-4 mx-auto">
                                    <h4>Ja, det er GTA med heste.<br> Dog fortæller spillet en meget spændende og dybere historie, end bare lige (<i>og så ser det pisse godt ud</i>)...</h4>
                                    <div class="ratio ratio-16x9 videoContainer">
                                        <iframe width="560" height="315" src="https://www.youtube.com/embed/0d-U2QL2Qvc?start=21" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="col-12 col-md-8 col-xl-10 my-2" id="Kratos">
            <div class="card h-75">
                <div class="card-body">
                    <h2 class="card-title">God of War</h2>
                    <h5 class="card-subtitle">2005, 2007, 2008, 2010, 2013, 2018</h5>
                </div>
                <img src="images/GoW.jpg">
                <p>
                    <a class="btn btn-outline-danger" data-bs-toggle="collapse" href="#multiCollapseExampleKratos" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Se mere</a>
                </p>
                <div class="row">
                    <div class="col">
                        <div class="collapse multi-collapse" id="multiCollapseExampleKratos">
                            <div class="card card-body border-0">
                                <div class="col-10 col-lg-8 gy-4 mx-auto">
                                    <h4>Det er stort. Meget stort.<br> Udover hvor stor Midgårds Ormen er, <br>
                                        så vandt God of War årets spil i 2018 for dets historie og over-the-top action brag mod "The Stranger"</h4>
                                    <div class="ratio ratio-16x9 videoContainer">
                                        <iframe width="560" height="315" src="https://www.youtube.com/embed/1rJBP0jz95M?start=119" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-8 col-xl-10 my-2" id="Templar">
            <div class="card h-75">
                <div class="card-body">
                    <h2 class="card-title">Assassin's Creed</h2>
                    <h5 class="card-subtitle">2007-2020</h5>
                </div>
                <img src="images/Notre.jpg">
                <p>
                    <a class="btn btn-outline-danger" data-bs-toggle="collapse" href="#multiCollapseExampleAC" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Se mere</a>
                </p>
                <div class="row">
                    <div class="col">
                        <div class="collapse multi-collapse" id="multiCollapseExampleAC">
                            <div class="card card-body border-0">
                                <div class="col-10 col-lg-8 gy-4 mx-auto">
                                    <h4>Der har jeg været!<br> Noget af det som Ubisoft's langtids kørende franchise er mest kendt for, er de mange steder man kan kravle rundt.</h4>
                                    <div class="ratio ratio-16x9 videoContainer">
                                        <iframe width="560" height="315" src="https://www.youtube.com/embed/u96otdmI3To?start=119" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="col-12 col-md-8 col-xl-10 my-2" id="Robo">
            <div class="card h-75">
                <div class="card-body">
                    <h2 class="card-title">Horizon: Zero Dawn</h2>
                    <h5 class="card-subtitle">2017</h5>
                </div>
                <img src="images/Horizon%20Zero%20Dawn™_%20Complete%20Edition_20210520193235.jpg">
                <p>
                    <a class="btn btn-outline-danger" data-bs-toggle="collapse" href="#multiCollapseExampleRobo" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Se mere</a>
                </p>
                <div class="row">
                    <div class="col">
                        <div class="collapse multi-collapse" id="multiCollapseExampleRobo">
                            <div class="card card-body border-0">
                                <div class="col-10 col-lg-8 gy-4 mx-auto">
                                    <h4>Robot-dinosaurus + hulemennesker<br> En sindsyg blanding, som bare virker perfekt.</h4>
                                    <div class="ratio ratio-16x9 videoContainer">
                                        <iframe width="560" height="315" src="https://www.youtube.com/embed/4OFF7N3TV5E?start=24" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    </div>
                                </div>
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
                    <a class="btn btn-outline-danger" data-bs-toggle="collapse" href="#multiCollapseExampleDrake" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Se mere</a>
                </p>
                <div class="row">
                    <div class="col">
                        <div class="collapse multi-collapse" id="multiCollapseExampleDrake">
                            <div class="card card-body border-0">
                                <div class="col-10 col-lg-8 gy-4 mx-auto">
                                    <h4>Fantastiske eventyr!<br> Indiana Jones + Tomb Raider = Uncharted.</h4>
                                    <div class="ratio ratio-16x9 videoContainer">
                                        <iframe width="560" height="315" src="https://www.youtube.com/embed/IfrfJn_-24g?start=3" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="col-12 col-md-8 col-xl-10 my-2" id="Boss">
            <div class="card h-75">
                <div class="card-body">
                    <h2 class="card-title">Metal Gear-serien</h2>
                    <h5 class="card-subtitle">1987-2015</h5>
                </div>
                <img src="images/METAL%20GEAR%20SOLID%20V.jpg">
                <p>
                    <a class="btn btn-outline-danger" data-bs-toggle="collapse" href="#multiCollapseExampleMGS" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Se mere</a>
                </p>
                <div class="row">
                    <div class="col">
                        <div class="collapse multi-collapse" id="multiCollapseExampleMGS">
                            <div class="card card-body border-0">
                                <div class="col-10 col-lg-8 gy-4 mx-auto">
                                    <h4>Kojima når han er bedst<br> Ser fantastisk ud, og Kojima er en legendarisk instruktør.</h4>
                                    <div class="ratio ratio-16x9 videoContainer">
                                        <iframe width="560" height="315" src="https://www.youtube.com/embed/C19ap2M7DDE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-8 col-xl-10 my-2" id="Solas">
            <div class="card h-75">
                <div class="card-body">
                    <h2 class="card-title">Dragon Age</h2>
                    <h5 class="card-subtitle">2009-2015</h5>
                </div>
                <img src="images/tresspaser.jpg">
                <p>
                    <a class="btn btn-outline-danger" data-bs-toggle="collapse" href="#multiCollapseExampleSol" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Se mere</a>
                </p>
                <div class="row">
                    <div class="col">
                        <div class="collapse multi-collapse" id="multiCollapseExampleSol">
                            <div class="card card-body border-0">
                                <div class="col-10 col-lg-8 gy-4 mx-auto">
                                    <h4>En cliffhanger...<br> 7 år siden, og jeg vil virkelig gerne stadig til Tevinter og stoppe Fen'harel.</h4>
                                    <div class="ratio ratio-16x9 videoContainer">
                                        <iframe width="560" height="315" src="https://www.youtube.com/embed/7II1Peu79HQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="col-12 col-md-8 col-xl-10 my-2" id="Pis">
            <div class="card h-75">
                <div class="card-body">
                    <h2 class="card-title">P.T. <em>(Playable Teaser)</em></h2>
                    <h5 class="card-subtitle">2009-2015</h5>
                </div>
                <img src="images/PT_door.jpg">
                <p>
                    <a class="btn btn-outline-danger" data-bs-toggle="collapse" href="#multiCollapseExamplePis" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Se mere</a>
                </p>
                <div class="row">
                    <div class="col">
                        <div class="collapse multi-collapse" id="multiCollapseExamplePis">
                            <div class="card card-body border-0">
                                <div class="col-10 col-lg-8 gy-4 mx-auto">
                                    <h4>Så er det tis-i-bukserne-tid<br> P.T. var et genialt markedsførings trick. Det var en reklame for et spil, som var et spil i sig selv. <br>
                                        Spillet blev desværre aflyst, men reklamen i sig selv er noget af det mest uhyggelige jeg nogensinde har oplevet</h4>
                                    <div class="ratio ratio-16x9 videoContainer">
                                        <iframe width="560" height="315" src="https://www.youtube.com/embed/WbCHGBW6gLk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    </div>
                                    <p>Jeg blev nødt til at tage en Pewdiepie video, for at det ikke var for skræmmende...</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-8 col-xl-10 my-2" id="Cloud">
            <div class="card h-75">
                <div class="card-body">
                    <h2 class="card-title">Final Fantasy</h2>
                    <h5 class="card-subtitle">1987-2021</h5>
                </div>
                <img src="images/FINAL%20FANTASY%20VII.jpg">
                <p>
                    <a class="btn btn-outline-danger" data-bs-toggle="collapse" href="#multiCollapseExampleFF" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Se mere</a>
                </p>
                <div class="row">
                    <div class="col">
                        <div class="collapse multi-collapse" id="multiCollapseExampleFF">
                            <div class="card card-body border-0">
                                <div class="col-10 col-lg-8 gy-4 mx-auto">
                                    <h4>Japan's heavy hitter<br> De fleste har set den kæmpe store sværd på Clouds ryg. Så stort at han jo teknisk set umuligt ville kunne løfte det.</h4>
                                    <div class="ratio ratio-16x9 videoContainer">
                                        <iframe width="560" height="315" src="https://www.youtube.com/embed/A3sBZ5Nr4hc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-8 col-xl-10 my-2" id="Daddy">
            <div class="card h-75">
                <div class="card-body">
                    <h2 class="card-title">BioShock</h2>
                    <h5 class="card-subtitle">2007</h5>
                </div>
                <img src="images/BioShock.jpg">
                <p>
                    <a class="btn btn-outline-danger" data-bs-toggle="collapse" href="#multiCollapseExampleBio" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Se mere</a>
                </p>
                <div class="row">
                    <div class="col">
                        <div class="collapse multi-collapse" id="multiCollapseExampleBio">
                            <div class="card card-body border-0">
                                <div class="col-10 col-lg-8 gy-4 mx-auto">
                                    <h4>Dyk ned i et hjerne-smeltende mysterie<br> Der findes kanaler på YouTube der udelukkende er dedikeret til at snakke om BioShock, det må være tegn på at det er et cult fænomen</h4>
                                    <div class="ratio ratio-16x9 videoContainer">
                                        <iframe width="560" height="315" src="https://www.youtube.com/embed/U3RXpEXA0jw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-8 col-xl-10 my-2" id="Dead">
            <div class="card h-75">
                <div class="card-body">
                    <h2 class="card-title">Bloodborne</h2>
                    <h5 class="card-subtitle">2015</h5>
                </div>
                <img src="images/Bloodborne.jpg">
                <p>
                    <a class="btn btn-outline-danger" data-bs-toggle="collapse" href="#multiCollapseExampleDed" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Se mere</a>
                </p>
                <div class="row">
                    <div class="col">
                        <div class="collapse multi-collapse" id="multiCollapseExampleDed">
                            <div class="card card-body border-0">
                                <div class="col-10 col-lg-8 gy-4 mx-auto">
                                    <h4>Død, død og død.<br> Det ser smukt ud, men man dør godt nok meget. Denne trailer er fra det første spil i "serien"</h4>
                                    <div class="ratio ratio-16x9 videoContainer">
                                        <iframe width="560" height="315" src="https://www.youtube.com/embed/Syl1QRue2QE?start=184" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-8 col-xl-10 my-2" id="Sushi">
            <div class="card h-75">
                <div class="card-body">
                    <h2 class="card-title">Ghost of Tsushima</h2>
                    <h5 class="card-subtitle">2020</h5>
                </div>
                <img src="images/Ghost%20of%20Tsushima_20200720191346.jpg">
                <p>
                    <a class="btn btn-outline-danger" data-bs-toggle="collapse" href="#multiCollapseExampleJin" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Se mere</a>
                </p>
                <div class="row">
                    <div class="col">
                        <div class="collapse multi-collapse" id="multiCollapseExampleJin">
                            <div class="card card-body border-0">
                                <div class="col-10 col-lg-8 gy-4 mx-auto">
                                    <h4>Jin Sakai i duel med Lady Masako. <br>Bladene der falder og ilden der langsomt spreder sig. Alt oplyst af solnedgangen</h4>
                                    <div class="ratio ratio-16x9 videoContainer">
                                        <iframe width="560" height="315" src="https://www.youtube.com/embed/kSAvzeopPC8?start=424" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-8 col-xl-10 my-2" id="Dragon">
            <div class="card h-75">
                <div class="card-body">
                    <h2 class="card-title">The Elder Scrolls-serien</h2>
                    <h5 class="card-subtitle">1994-2011</h5>
                </div>
                <img src="images/Skyrim_20210707155821.jpg">
                <p>
                    <a class="btn btn-outline-danger" data-bs-toggle="collapse" href="#multiCollapseExampleSky" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Se mere</a>
                </p>
                <div class="row">
                    <div class="col">
                        <div class="collapse multi-collapse" id="multiCollapseExampleSky">
                            <div class="col-10 col-lg-8 gy-4 mx-auto">
                                <h4>Fus Ro Dah!<br> Det er 10 år siden, men JA det er stadig fedt at rende rundt i Skyrim</h4>
                                <div class="ratio ratio-16x9 videoContainer">
                                    <iframe width="560" height="315" src="https://www.youtube.com/embed/JSRtYpNRoN0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="col-12 col-md-8 col-xl-10 my-2" id="Elg">
            <div class="card h-75">
                <div class="card-body">
                    <h2 class="card-title">Until Dawn</h2>
                    <h5 class="card-subtitle">2015</h5>
                </div>
                <img src="images/Until%20Dawn™_20180805182431.jpg">
                <p>
                    <a class="btn btn-outline-danger" data-bs-toggle="collapse" href="#multiCollapseExampleGys" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Se mere</a>
                </p>
                <div class="row">
                    <div class="col">
                        <div class="collapse multi-collapse" id="multiCollapseExampleGys">
                            <div class="card card-body border-0">
                                <div class="col-10 col-lg-8 gy-4 mx-auto">
                                    <h4>Det er en gyserfilm<br> Det er fantastisk at fleste har set den kæmpe store sværd på Clouds ryg. Så stort at han jo teknisk set umuligt ville kunne løfte det.</h4>
                                    <div class="ratio ratio-16x9 videoContainer">
                                        <iframe width="560" height="315" src="https://www.youtube.com/embed/Ly39q3fkTJE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
</div>
<br>

<button type="button" class="btn btn-outline-danger bg-white opacity-75 btn-floating btn-lg col-1" id="Topbtn">
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
