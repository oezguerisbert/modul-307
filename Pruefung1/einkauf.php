<!DOCTYPE html>
<html lang="en">

<head>
    <title>Einkauf</title>
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
    <div class="container p-3">
        <h1>Ihr Einkauf</h1>
        <?php

        function legisumme(){
            $legiticket = 20.00;
            return (intval($_POST['legi'])*$legiticket);
        }
        function normalsumme(){
            $normalticket = 30.00;
            return (intval($_POST['amount'])*$normalticket);
        }
        function summe(){
            return legisumme() + normalsumme();
        }
        if( isset($_POST['vorname']) &&
            isset($_POST['nachname']) &&
            isset($_POST['email']) &&
            isset($_POST['amount']) && 
            isset($_POST['legi'])){

            ?>
            <span><?php echo htmlspecialchars($_POST['vorname'])." ".htmlspecialchars($_POST['nachname']); ?></span><br />
            <span><?php echo htmlspecialchars($_POST['email']); ?></span><br />
            <span><?php echo htmlspecialchars($_POST['amount']) . " Normalticket: " .normalsumme()." CHF";?></span><br />
            <span><?php echo htmlspecialchars($_POST['legi']) . " Legiticket: " .legisumme()." CHF";?></span><br />
            <br />
            <strong>Total : <?php echo summe() . " CHF";?></strong>
            <?php

        }
        ?>
        <br/>
        <br />
        <a href="javascript:history.back()" >zurück</a>
    </div>

</body>
</html>