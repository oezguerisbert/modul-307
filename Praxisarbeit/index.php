<?php
    include_once './incs/card.func.inc.php';

    $background = "https://images.unsplash.com/photo-1509719782173-841a7542cb4d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1065&q=80";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ski-Service</title>
    <?php
        include './incs/bootstrap.head.inc.php'
    ?>
</head>
<body>
    <div class="container">
        <div class="col">
            <img src="<?php echo $background; ?>" />
            <h1>Ski-Service</h1>
            <h2>
                Dein Ski-Service in den Alpen 😊
            </h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut asperiores tempora maxime obcaecati iste voluptatem, provident sapiente nam eius perferendis a deserunt eveniet! Inventore, quod et eveniet doloremque illum incidunt.</p>
            <?php
                echo createCard("","title","testdescr");
            ?>
        </div>
    </div>
</body>
</html>