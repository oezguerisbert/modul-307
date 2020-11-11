<!doctype html>
<html lang="en">
  <head>
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
        <form method="POST" action="formular.php">
            <div class="form-group row">
                <label for="firstname" class="col-sm-2">Firstname</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="firstname" id="firstname">
                </div>
            </div>
            <div class="form-group row">
                <label for="lastname" class="col-sm-2">Lastname</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="lastname" id="lastname">
                </div>
            </div>
            <div class="form-group row">
                <label for="street" class="col-sm-2">Street</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="street" id="street">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="plz">Postleitzahl</label>
                    <input type="number" min="1000" max="9999" class="form-control" name="plz" id="plz">
                </div>
                <div class="form-group col-md-8">
                    <label for="ort" >Ort</label>
                    <input type="text" class="form-control" name="ort" id="ort">
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="reset" class="btn btn-secondary">Reset</button>
        </form>
    </div>
  </body>
</html>