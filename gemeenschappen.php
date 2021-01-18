<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="height=device-height, initial-scale=1.0">
        <title>Geronimo</title>

        <link rel="stylesheet" type="text/css" href="libraries/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/main.css">

        <script src="includes/jquery-3.5.1.min.js"></script>
        <script src="libraries/bootstrap/js/bootstrap.min.js"></script>
        <script src="libraries/Shuffle-5.2.3/dist/shuffle.js"></script>

    </head>
    <body>
        <header>
            <?php
            require_once('includes/nav.php');
            ?>
        </header>
        <div id="container">
            <h1 class="titel">
                Gemeenschappen
            </h1>
            <p class="beschrijving">
                Bij gemeenschappen kunt u gelijkgestemde collega's ontmoeten en kunt u uw eigen ervaringen bij cursussen delen.<br/><br/>
            </p>
            <div class="berichtContainer">
                <div>
                    <h2 class="h2class">Menno</h2>
                    <img class="roundedIMG" src="images/0.jpg">
                </div>
                <div class="berichtBox">
                    <textarea id="textAreaPost" placeholder="Wat heb je meegemaakt?" class="form-control"></textarea> <br/><br/>
                    <button type="button" class="btn btn-primary FotoButton" id="FotoButton"><img class="btnImage" src="images/image.png"> Voeg foto toe</button>
                    <button type="button" class="btn btn-primary VideoButton" id="VideoButton"><img class="btnImage" src="images/videoimg.png"> Voeg video toe</button>
                    <button type="button" class="btn btn-primary BerichtButton" id="Berichtbutton">Plaats bericht</button>
                </div>
            </div>
            <div class="row">
                <div class="col-12@sm filters-group-wrap">
                    <a class="filters-group">
                        <p class="filter-label">Sorteer op:</p>
                        <div class="btn-group filter-options">
                            <a href="#" class="filterBtn" id="btnAlles" data-group="alles">Alles | </a>
                            <a href="#" class="filterBtn" id="btnBeautyWell" data-group="beautyWell">Beauty en Wellness | </a>
                            <a href="#" class="filterBtn" id="btnTechnologie" data-group="technologie">Technologie | </a>
                            <a href="#" class="filterBtn" id="btnCreatief" data-group="creatief">Creatief | </a>
                            <a href="#" class="filterBtn" id="btnDieren" data-group="dieren">Dieren | </a>
                            <a href="#" class="filterBtn" id="btnFotoFilm" data-group="fotoFilm">Fotografie en Film | </a>
                            <a href="#" class="filterBtn" id="btnHuisTuin" data-group="huisTuin">Huis en Tuin | </a>
                            <a href="#" class="filterBtn" id="btnMuziek" data-group="muziek">Muziek | </a>
                            <a href="#" class="filterBtn" id="btnSchrijven" data-group="schrijven">Schrijven | </a>
                            <a href="#" class="filterBtn" id="btnKoken" data-group="koken">Koken</a>
                        </div>
                </div>
            </div>
        </div>
        <div id="anchor" class="container shuffle-wrap">
            <div id="divAdd">

            </div>
            <div class="my-grid-with-images row" id="my-grid-with-images">
                <figure data-groups='["beautyWell"]' class="js-item img-item col-3@sm col-3@xs">
                    <div class="aspect aspect--16x9">
                        <div class="aspect__inner">
                            <img class="gridImg" src="images/a1.jpg"/>
                        </div>
                    </div>
                    <figcaption>Simone</figcaption>
                    <p> Ik en mijn man zijn hier petunia’s aan het planten bij on in de tuin
                        dit hebben wij geleerd bij deze hele lijke cursrus genaamt.... </p>
                </figure>

                <figure data-groups='["creatief"]' class="js-item img-item col-3@sm col-3@xs">
                    <div class="aspect aspect--16x9">
                        <div class="aspect__inner">
                            <img class="gridImg" src="images/a2.jpg"/>
                        </div>
                    </div>
                    <figcaption>Lenny</figcaption>
                    <p> Tijdens mijn recentste cursus heb ik geleerd hoe ik   abstracte kunst kan maken. Op deze foto zie je mij mijn nieuwste schilderij schilderen met de technieken van de schilder Von Fleirstein. Deze schilder was echt voor zijn tijd, omdat hij de enige was die met dit soort verf aan het schilderen was. Stel je voor het is 1920 e... </p>
                </figure>

                <figure data-groups='["technologie"]' class="js-item img-item col-3@sm col-3@xs">
                    <div class="aspect aspect--16x9">
                        <div class="aspect__inner">
                            <img class="gridImg" src="images/a3.jpg"/>
                        </div>
                    </div>
                    <figcaption>Petra</figcaption>
                    <p> Ik sinds mijn val met de fiets niet meer alleen durven te fietsen.  Gelukkig durf ik het hier met mijn vrienden wel! </p>
                </figure>

                <figure data-groups='["schrijven"]' class="js-item img-item col-3@sm col-3@xs">
                    <div class="aspect aspect--16x9">
                        <div class="aspect__inner">
                            <img class="gridImg" src="images/a4.jpg"/>
                        </div>
                    </div>
                    <figcaption>Connie</figcaption>
                    <p> Samen met mijn vriendinnen yoga aan het doen. Dit is echt usper goed voor mijn gezondheid, ik voel me nu al fitter! </p>
                </figure>

                <figure data-groups='["fotoFilm"]' class="js-item img-item col-3@sm col-3@xs">
                    <div class="aspect aspect--16x9">
                        <div class="aspect__inner">
                            <img class="gridImg" src="images/a5.jpg"/>
                        </div>
                    </div>
                    <figcaption>Josef</figcaption>
                    <p> Weer even mijn oude botten in beweging brengen met mijn oude
                        vriendegroep.
                    </p>
                </figure>
                <div class="col-3@sm col-3@xs" id="js-sizer"></div>
            </div>
        </div>

        <div id="divToAdd">

        </div>

        <footer>
            <script src="script/main.js"></script>
        </footer>
    </body>
</html>