<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="height=device-height, initial-scale=1.0">
        <title>Geronimo</title>

        <link rel="stylesheet" type="text/css" href="libraries/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/main.css">
        <script src="includes/jquery-3.5.1.min.js"></script>
        <script src="libraries/bootstrap/js/bootstrap.min.js"></script>

    </head>
    <body>
        <header>
            <?php
            require_once('includes/nav.php');
            ?>
        </header>
        <div id="container">
            <h1 class="titel">
                Kies datum en tijd en vul uw gegevens in.
            </h1>
            <p class="beschrijving">
                Kies hieronder op welke datum en tijd u de cursus "Chefkok Helpt" wilt volgens.   <br/><br/>
            </p>
            <form class="formemail" action="emailTo.php" method="post">
                <label class="labelform" for="date">Datum</label> <br/>
                <input type="date" value="2017-06-01" name="date"> <br/><br/>
                <label class="labelform" for="time">Tijd</label><br/>
                <input id="time" type="time" name="time" value="12:00"><br/><br/>
                <label class="labelform" for="time">Locatie</label><br/>
                <input type="radio" id="loc1" name="locatie" value="Eindhoven - Vestdijk 30, 5611 CC">
                <label for="male">Eindhoven - Vestdijk 30, 5611 CC</label><br>
                <input type="radio" id="loc2" name="locatie" value="Utrecht - Waterliniedok 1, 4723 RT">
                <label for="female">Utrecht - Waterliniedok 1, 4723 RT</label><br><br>
                <label class="labelform" for="email">Email</label> <br/>
                <input type="email" size="100" class="form-control" placeholder="Enter email" id="email" name="email"><br><br>
                <input class="btn btn-primary" type="submit" value="Verzenden">
            </form>
        </div>
    </body>
</html>