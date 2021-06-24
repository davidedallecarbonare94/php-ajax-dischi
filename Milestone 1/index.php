<?php 
include __DIR__ . "\database.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Ajax Dischi</title>
    <link rel="stylesheet" href="./dist/css/app.css">
</head> <!-- "<?php ?>" -->

<body>
    <div id="root">
    <header>
            <img src="./dist/img/Logo-della-Spotify.png" alt="">
        </header>
        <main>
            <div class="albums">
                <?php 
                foreach($discs as $disc){ ?>

                <div class="card">
                    <img src="<?php echo $disc['poster']?>" alt="">
                    <div class="card_text">

                        <h1><?php echo $disc['title']?></h1>
                        <h2><?php echo $disc['author']?></h2>
                        <h2><?php echo $disc['year']?></h2>
                    </div>
                </div>

                <?php } ?>




            </div>

        </main>

    </div>
</body>

</html>