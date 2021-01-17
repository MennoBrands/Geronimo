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
                Hobbycursussen
            </h1>
            <p class="beschrijving">
                Kies uit een groot assoritiment aan hobbycurssusen die kunnen worden gevoldt in heel Nederland.
            </p>
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
                <div class="my-grid-with-images row">
                    <figure data-groups='["beautyWell"]' class="js-item img-item col-3@sm col-3@xs">
                        <div class="aspect aspect--16x9">
                            <div class="aspect__inner">
                                <img class="gridImg" src="images/beaty.jpg"/>
                            </div>
                        </div>
                        <figcaption>Leren masseren</figcaption>
                    </figure>

                    <figure data-groups='["creatief"]' class="js-item img-item col-3@sm col-3@xs">
                        <div class="aspect aspect--16x9">
                            <div class="aspect__inner">
                                <img class="gridImg" src="images/creat.jpg"/>
                            </div>
                        </div>
                        <figcaption>Houten modellen maken</figcaption>
                    </figure>

                    <figure data-groups='["technologie"]' class="js-item img-item col-3@sm col-3@xs">
                        <div class="aspect aspect--16x9">
                            <div class="aspect__inner">
                                <img class="gridImg" src="images/pc.jpg"/>
                            </div>
                        </div>
                        <figcaption>Omgaan met een pc</figcaption>
                    </figure>

                    <figure data-groups='["schrijven"]' class="js-item img-item col-3@sm col-3@xs">
                        <div class="aspect aspect--16x9">
                            <div class="aspect__inner">
                                <img class="gridImg" src="images/schrijf.jpeg"/>
                            </div>
                        </div>
                        <figcaption>Leer hoe je een boek schrijft</figcaption>
                    </figure>

                    <figure data-groups='["fotoFilm"]' class="js-item img-item col-3@sm col-3@xs">
                        <div class="aspect aspect--16x9">
                            <div class="aspect__inner">
                                <img class="gridImg" src="images/foto.jpg"/>
                            </div>
                        </div>
                        <figcaption>Leer fotografie</figcaption>
                    </figure>

                    <figure data-groups='["koken"]' class="js-item img-item col-3@sm col-3@xs">
                        <div class="aspect aspect--16x9">
                            <div class="aspect__inner">
                                <a href="cursusdetail.php"><img class="gridImg" src="images/chefkokhelpt.jpg"/></a>
                            </div>
                        </div>
                        <figcaption>Chefkok helpt</figcaption>
                    </figure>

                    <figure data-groups='["dieren"]' class="js-item img-item col-3@sm col-3@xs">
                        <div class="aspect aspect--16x9">
                            <div class="aspect__inner">
                                <img class="gridImg" src="images/dier.jpg"/>
                            </div>
                        </div>
                        <figcaption>EHBO bij honden</figcaption>
                    </figure>

                    <figure data-groups='["muziek"]' class="js-item img-item col-3@sm col-3@xs">
                        <div class="aspect aspect--16x9">
                            <div class="aspect__inner">
                                <img class="gridImg" src="images/muzie.jpg"/>
                            </div>
                        </div>
                        <figcaption>Leer accordion spelen</figcaption>
                    </figure>

                    <figure data-groups='["dieren"]' class="js-item img-item col-3@sm col-3@xs">
                        <div class="aspect aspect--16x9">
                            <div class="aspect__inner">
                                <img class="gridImg" src="images/dier2.png"/>
                            </div>
                        </div>
                        <figcaption>Leer paardrijden</figcaption>
                    </figure>

                    <figure data-groups='["huisTuin"]' class="js-item img-item col-3@sm col-3@xs">
                        <div class="aspect aspect--16x9">
                            <div class="aspect__inner">
                                <img class="gridImg" src="images/tuin.jpg"/>
                            </div>
                        </div>
                        <figcaption>Omgaan met tuinier gereedschap</figcaption>
                    </figure>

                    <figure data-groups='["creatief"]' class="js-item img-item col-3@sm col-3@xs">
                        <div class="aspect aspect--16x9">
                            <div class="aspect__inner">
                                <img class="gridImg" src="images/schilder.jpg"/>
                            </div>
                        </div>
                        <figcaption>Schilderen</figcaption>
                    </figure>

                    <figure data-groups='["huisTuin"]' class="js-item img-item col-3@sm col-3@xs">
                        <div class="aspect aspect--16x9">
                            <div class="aspect__inner">
                                <img class="gridImg" src="images/tuin2.jpg"/>
                            </div>
                        </div>
                        <figcaption>Boeketten samenstellen</figcaption>
                    </figure>
                    <div class="col-3@sm col-3@xs" id="js-sizer"></div>
                </div>
            </div>
        </div>
    </body>
    <footer>
        <script src="script/main.js"></script>
    </footer>
</html>