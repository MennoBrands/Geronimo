<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="height=device-height, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/main.css">
        <link rel="stylesheet" type="text/css" href="libraries/slick-1.8.1/slick/slick.css"/>
        <link rel="stylesheet" type="text/css" href="libraries/slick-1.8.1/slick/slick-theme.css"/>

        <title>Geronimo</title>
    </head>
    <body>
        <header>
            <?php
            require_once('includes/nav.php');
            ?>
        </header>
        <div id="container2">
            <h1 class="titel">
                Chefkok helpt
            </h1>
            <p class="beschrijving">
                Tijdens de cursus ‘Cheftkok helpt’ wordt je met de hand meegenomen door de chefkok Bram Smits in een van zijn beroemde gerechten. <br/>
                Hiernaast kan de chefkok ook jouw helpen met het maken of het verbeteren van een van jouw eigen recepten.
            </p>
            <h2 class="h2class">
                Cursus informatie <br/>
            </h2>
            <p class="textdetailcursus">
                Inhoud van de cursus <br/><br/>

                <b> - Theorie </b><br/>
                De deelnemers volgen een informatie- / instructiebijeenkomst van een dagdeel. Mede afhankelijk van de al bestaande kennis, komt aan bod:<br/>
                - Ingrediënt en hun smaak profielen<br/>
                - Basis kennis over veel gebruikte keuken technieken<br/><br/>

                <b>- Coaching in de praktijk</b><br/>
                Alle deelnermers:<br/>
                1. Krijgen uitleg hoe ze om moeten gaan in de professionele keuken.<br/>
                2. Krijgen een masterclass keuken technieken<br/>
                3. Koken samen met de chef kok zijn beroemde recpet.<br/>
                4. krijgen een kans om hun recept te maken en te laten verbeteren door<br/>
                de chefkok.
            </p>
            <div id="locatiediv">
                <p class="textdetailcursus">
                    <b>Cursus locatie</b><br/>
                    Eindhoven - Vestdijk 30, 5611 CC<br/>
                    Utrecht - Waterliniedok 1, 4723 RT <br/><br/>
                    <div style="width: 100%">
                        <iframe width="80%" height="600" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=nl&amp;q=vestdijk%2030%205611%20CC+(Cursus%20locatie)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
                    </div>
                </p>
            </div>
            <div id="datumDiv">
            <p class="textdetailcursus">
                <b>Cursus dagen</b><br/>
                Woensdag 09/12	-	14:30 tot 18:00<br/>
                Vrijdag	 11/12	-	14:00 tot 17:30<br/>
                Zaterdag 12/12  -	14:00 tot 17:30<br/>
                Maandag 14/12	-	14:00 tot 17:30<br/>
                Woensdag 16/12 	-	14:30 tot 18:00<br/>
                Vrijdag 18/12	-	14:00 tot 17:30<br/>
                Zaterdag 19/12	-	14:00 tot 17:30<br/>
                Maandag 21/12	-	14:00 tot 17:30<br/><br/>

                <b>Cursus prijs</b><br/>
                €50,- p.p.<br/><br/>

                <b>Cursus gever</b><br/>
                Bram Smits<br/>
                06-22263327<br/>
                BramSmits@gmail.nl <br/>
                <img class="chefImg" src="images/chefkok.jpg" alt="">
            </p>
            </div>
            <div id="indexButtonss">
                <a class="indexButton" href="#"><h1>Locatie aanvragen</h1></a>
                <a class="indexButton" href="email.php"><h1>Aanmelden</h1></a>
            </div>
            <h1 class="titel">Voorgaande Cursisten</h1>
        </div>
        <div class="carcontainer">
            <div class="slider">
                <div><img class="carouselimg" src="images/1.jpg" alt=""></div>
                <div><img class="carouselimg" src="images/2.jpg" alt=""></div>
                <div><img class="carouselimg" src="images/3.jpg" alt=""></div>
                <div><img class="carouselimg" src="images/4.jpeg" alt=""></div>
                <div><img class="carouselimg" src="images/5.jpg" alt=""></div>
            </div>
        </div>
        <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
        <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
        <script type="text/javascript" src="libraries/slick-1.8.1/slick/slick.min.js"></script>
    </body>
    <footer>
        <script type="text/javascript">
            $(document).ready(function(){
                $('.slider').slick({
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    autoplay: true,
                    autoplaySpeed: 2000,
                    arrows: true,
            });
            });
        </script>
    </footer>
</html>