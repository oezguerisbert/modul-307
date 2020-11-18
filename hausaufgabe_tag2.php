<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Anmeldung</title>
    
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Hello, world!</title>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container" style="padding-top:2rem;padding-bottom:2rem;">
    <h1>Anmeldung zum Winterurlaub</h1>
        <form method="POST" action="formular.php" class="form">
            <h5>Persöhnliche Daten</h5>
            <div class="form-group">
                <label for="firstname" >Vorname</label>
                <div class="col">
                    <input type="text" class="form-control row" placeholder="Dein Vorname" name="firstname" id="firstname" required>
                </div>
            </div>
            <div class="form-group">
                <label for="lastname">Nachname</label>
                <div class="col">
                    <input type="text" class="form-control row" placeholder="Dein Nachname" name="lastname" id="lastname">
                </div>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <div class="col">
                    <input type="email" class="form-control row" placeholder="name@domain.de" name="email" id="email">
                </div>
            </div>
            <div class="form-group">
                <label for="url">Url</label>
                <div class="col">
                    <input type="url" class="form-control row" placeholder="Deine Webseite" name="url" id="url">
                </div>
            </div>
            <div class="form-group">
                <label for="telefon">Telefon</label>
                <div class="col">
                    <input type="phone" class="form-control row" placeholder="+41 2345 67 89" name="phone" id="phone">
                </div>
            </div>
            <h5>Kommentare</h5>
            <textarea class="form-control" id="commentary" name="commentary" rows="5" placeholder="Noch Anmerkungen?"></textarea>
            <h5>Frühstück</h5>
            <select class="custom-select">
                <option value="inc" selected>Inklusive</option>
                <option value="none">Ohne</option>
                <option value="small">&agrave; la Carte</option>
            </select>
            <h5>Interesse an?</h5>
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="ski" name="ski">
                <label class="custom-control-label" for="ski">Ski</label>
            </div>
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="snowboard" name="snowboard">
                <label class="custom-control-label" for="snowboard">Snowboard</label>
            </div>
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="schlitten" name="schlitten">
                <label class="custom-control-label" for="schlitten">Schlitten</label>
            </div>
            <h5>Veganer?</h5>
            <div class="custom-control custom-radio">
                <input type="radio" id="veganyes" name="vegan" class="custom-control-input">
                <label class="custom-control-label" for="veganyes">Ja</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="veganno" name="vegan" class="custom-control-input">
                <label class="custom-control-label" for="veganno">Nein</label>
            </div>
            <h5>Später Ansehen?</h5>
            <div class="form-group">
                <label for="password">Url</label>
                <div class="col">
                    <input type="password" class="form-control row" placeholder="Passwort" name="password" id="password">
                </div>
            </div>
            <input class="btn btn-primary" type="submit" value="Jetzt Anmeldung">
        </form>
    </div>
</body>
</html>