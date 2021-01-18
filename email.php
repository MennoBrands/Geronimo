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
                Email
            </h1>
            <p class="beschrijving">
                Vul hieronder uw email in voor een conformatie bericht. <br/><br/>
            </p>
            <form class="formemail" action="emailTo.php" method="post">
                <label class="labelform" for="email">Email</label> <br/>
                <input type="email" size="100" class="form-control" placeholder="Enter email" id="email" name="email"><br><br>
                <input class="btn btn-primary" type="submit" value="Verzenden">
            </form>
        </div>
    </body>
</html>