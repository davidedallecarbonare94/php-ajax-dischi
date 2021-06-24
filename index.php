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
            <h1>Spotify</h1>

        </header>
        <main>
            <div class="main_container">
                <?php 
                foreach($discs as $disc){ ?>

                <div class="card">
                    <img src="<?php echo $disc['poster']?>" alt="">
                    <h1><?php echo $disc['title']?></h1>
                    <span><?php echo $disc['author']?></span>
                    <span><?php echo $disc['year']?></span>
                </div>

                <?php } ?>




            </div>

        </main>

    </div>
</body>

</html>