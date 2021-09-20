<!-- Instruktion til webbrowser om at vi kører HTML5 -->
<!DOCTYPE html>

<!-- html starter og slutter hele dokumentet / lang=da: Fortæller siden er på dansk -->
<html lang="da">

<!-- I <head> har man opsætning - det ser brugeren ikke, men det fortæller noget om siden -->
<head>
    <!-- Sætter tegnsætning til utf-8 som bl.a. tillader danske bogstaver -->
    <meta charset="utf-8">

    <!-- Titel som ses oppe i browserens tab mv. -->
    <title>Upcoming</title>

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
</head>
<style>

    body{
        background: url("images/JCJ_grafikD.png");
        background-repeat: no-repeat;
        background-position: center;
        background-size: cover;
        background-attachment: fixed;
    }
</style>
<body>
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

<div class="container-fluid">
    <div class="row justify-content-around mb-5">
        <div class="col-12 bg-danger text-center p-5 text-white">
            <h2>Det bliver stort</h2>
        </div>
        <div class="col-12 col-lg-5 gy-4">
            <div class="ratio ratio-16x9 videoContainer mt-3">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/EE-4GvjKcfs?start=10" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <h5 class="bg-light p-3"><strong>God of War Ragnarok</strong></h5>
        </div>
        <div class="col-12 col-lg-5 gy-4">
            <div class="ratio ratio-16x9 videoContainer mt-3">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/nOMIwsupy9k?start=370" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <h5 class="bg-light p-3"><strong>Black Myth: Wukong</strong></h5>
        </div>
    </div>

    <div class="row justify-content-around">
        <div class="col-12 bg-info text-center p-5 text-white mt-5">
            <h2>Lang ventetid, store forventinger</h2>
        </div>
        <div class="col-12 col-lg-5 gy-4">
            <div class="ratio ratio-16x9 videoContainer">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/OkFdqqyI8y4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <h5 class="bg-light p-3"><strong>Længe ventet er absolut inten underdrivelse.</strong><br>Det er i år 10 år siden Elder Scrolls 5 udkom til PS3.
                Selv denne <i>"beskedne"</i> trailer er fra 2018.<br><br>
                I løbet af den tid, er det lykkedes studiet bag spillet, (<strong><i>Bethesda</i></strong>) at blive opkøbt af Microsoft for en fornuftig pris på <br><strong>7.5 milliarder</strong><i>... dollars</i>.<br>
                <br>Jeg venter stadig helt sidsygt spændt, på efterfølgeren til det jeg nok godt tør kalde mit yndligsspil (nogensinde).</h5>
        </div>
        <div class="col-12 col-lg-5 gy-4">
            <div class="ratio ratio-16x9 videoContainer">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/VxqBle_O6jI?start=3" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <h5 class="bg-light p-3"><strong>Turmult bag kuliserne.</strong><br>Der har været instruktør skifte, fyringer og hyringer,
                chef opsigelser og meget meget andet der har fået produktionen af Dragon Age-seriens 4. udgivelse til at være en langtrukken affære.
                <br>
                Forgængerne startede med <strong>Dragon Age: Origins</strong> i 2009, og senest udkom <strong>Dragon Age: Inquisition</strong> i 2014. På 5 år fik studiet <strong><i>Bioware</i></strong> altså udgivet 3 Dragon Age spil, men siden da,
                er der gået 7 år, og eftersom at jeg for nyligt spillede Inquisition igennem igen, er jeg helt utrolig spændt på at se hvor historie, (<i>som sidst sluttede på en cliffhanger</i>) fører hen i seriens 4. spil.
                <br
        </div>
    </div>
<br>

    <div class="row justify-content-around mt-5">
        <div class="col-12 bg-success text-center p-5 text-white mt-5">
            <h2>Så kommer superheltene på banen</h2>
        </div>
        <div class="col-12 col-lg-5 gy-4">
            <div class="ratio ratio-16x9 videoContainer">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/2EVFYstVuVk?start=103" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <h5 class="bg-light p-3"><strong>Suicide Squad</strong>: Kill the Justice League</h5>
        </div>
        <div class="col-12 col-lg-5 gy-4">
            <div class="ratio ratio-16x9 videoContainer">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/QBn8ST8rELc?start=10" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <h5 class="bg-light p-3"><strong>Gardeners of the Galaxy</strong></h5>
                <br>
        </div>
        <div class="col-12 col-lg-5 gy-4">
            <div class="ratio ratio-16x9 videoContainer">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/qIQ3xNqkVC4?start=12" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <h5 class="bg-light p-3"><strong>Spiderman</strong></h5>
            <br>
        </div>
        <div class="col-12 col-lg-5 gy-4">
            <div class="ratio ratio-16x9 videoContainer">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/Zcj9AzHv_l8?start=3" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <h5 class="bg-light p-3"><strong>Wolverine</strong></h5>
            <br>
        </div>
        <div class="col-12 col-lg-5 gy-4">
            <div class="ratio ratio-16x9 videoContainer">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/Ripgh8W2PMg?start=38" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <h5 class="bg-light p-3"><strong>Lidt Marvel'eri</strong></h5>
            <br>
        </div>
        <div class="col-12 col-lg-5 gy-4">
            <div class="ratio ratio-16x9 videoContainer">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/ZHnDLbiQ1NU?start=38" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <h5 class="bg-light p-3"><strong>Ikke Batman</strong></h5>
            <br>
        </div>
    </div>
</div>




    <div class="row justify-content-around mb-5">
        <div class="col-12 bg-primary text-center p-5 text-white">
            <h2>Det ser spændende ud</h2>
        </div>
        <div class="col-12 col-lg-6 gy-4">
            <div class="ratio ratio-16x9 videoContainer">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/qPNiIeKMHyg?start=124" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
        <div class="col-12 col-lg-6 gy-4">
            <div class="ratio ratio-16x9 videoContainer">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/IfrfJn_-24g?start=3" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
        <div class="col-12 col-lg-6 gy-4">
            <div class="ratio ratio-16x9 videoContainer">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/VxqBle_O6jI?start=3" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>


        <div class="col-12 col-lg-6 gy-4">
            <div class="ratio ratio-16x9 videoContainer">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/1Z-EcrQjJQM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
        <div class="col-12 col-lg-6 gy-4">
            <div class="ratio ratio-16x9 videoContainer">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/nOMIwsupy9k?start=370" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <h3>Abe</h3>
        </div>

        <div class="col-12 col-lg-6 gy-4">
            <div class="ratio ratio-16x9 videoContainer">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/EE-4GvjKcfs?start=10" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
        <div class="col-12 col-lg-6 gy-4">
            <div class="ratio ratio-16x9 videoContainer">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/qPNiIeKMHyg?start=124" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
        <div class="col-12 col-lg-6 gy-4">
            <div class="ratio ratio-16x9 videoContainer">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/IfrfJn_-24g?start=3" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
    </div>
    </div>
</div>

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
