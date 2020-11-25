<?php
    include './incs/createInput.func.inc.php';
    include './incs/createPriorities.func.inc.php';
    include './incs/createAlert.func.inc.php';
    include './incs/checkInput.func.inc.php';
    include './incs/DB.class.inc.php';

    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $vname = $_POST['vorname'];
        $nname = $_POST['nachname'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $prio = $_POST['prio'];
        if(checkInput(array($vname, $nname, $phone, $prio))){
            $db_result = DB::addService(array(
                "vorname" => $vname,
                "nachname" => $nname,
                "email" => $email,
                "phone" => $phone,
                "service" => $service, 
                "priority" => $prio
                )
            );
            $db_query_result = $db_result ? "success" : "warning";
            
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ski-Service</title>
    <?php
include './incs/bootstrap.head.inc.php';
?>
</head>
<body>
    <div class="container">
        <div class="col pt-4 pb-4">
            <div class="row">
                <div class="col">
                </div>
                <div class="col-8">
                <h1>Service-Formular <span class="badge badge-primary"><?php echo $service;?></span></h1>
                <div id="infos">
                    <?php echo !isset($db_query_result) ? "" : createAlert($db_query_result, "Danke!", array(
                                "Super, wir werden Sie bald kontaktieren."
                            ),
                        );?>
                </div>
                <?php if(!isset($db_query_result)){
                    ?>
                    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
                        <?php
                            echo createInput("vorname", "text", null, true);
                            echo createInput("nachname", "text", null, true);
                            echo createInput("email", "email", "Ihr E-Mail wird nach dem Service entfernt.", true);
                            echo createInput("phone", "phone", "Ihr Telefon wird nach dem Service entfernt.", true);
                            echo createPriorities(array("Tief", "Standart", "Express"));
                        ?>
                        <br />
                        <button class="btn btn-primary" type="submit">Senden</button>
                    </form>
                <?php
                }
                ?>
                </div>
                <div class="col">
                </div>
            </div>
        </div>
    </div>
</body>
</html>