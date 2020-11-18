<!DOCTYPE html>
<html lang="en">
<head>
    <title>Ticket Shop</title>
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
        <h1>Ticket Shop</h1>
        <br />
        <form method="POST" action="einkauf.php" class="col">
            <div class="form-group row">
                <label for="vorname" class="col-sm-2 col-form-label">Vorname</label>
                <input type="text" class="form-control col" id="vorname" name="vorname" placeholder="Max" required>
            </div>
            <div class="form-group row">
                <label for="nachname" class="col-sm-2 col-form-label">Nachname</label>
                <input type="text" class="form-control col" id="nachname" name="nachname" placeholder="Mustermann" required>
            </div>
            <div class="form-group row">
                <label for="email" class="col-sm-2 col-form-label">Email</label>
                <input type="email" class="form-control col" id="email" name="email" placeholder="Email" required>
            </div>
            
            <div class="form-group row">
                <label for="amount1" class="col col-form-label">Normalpreis</label>
                <label class="col col-sm-2 col-form-label text-right">CHF 30.00</label>
                <input type="number" class="form-control col col-sm-1" id="amount" name="amount" placeholder="1" min="0">
            </div>
            <div class="form-group row">
                <label for="legi" class="col col-form-label">Legi (bitte Legi beim Eingang vorweisen)</label>
                <label class="col col-sm-2 col-form-label text-right">CHF 20.00</label>
                <input type="number" class="form-control col col-sm-1" id="legi" name="legi" placeholder="1" min="0">
            </div>
            <br />
            <button class="btn btn-primary" type="submit">zur Kasse</button>

        </form>
    </div>
</body>
</html>