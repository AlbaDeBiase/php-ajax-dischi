<?php include 'dischi.php' ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>php-dischi</title>
        <link rel="stylesheet" href="../dist/app.css">
    </head>
    <body>
        <header>
            <h1>php-dischi</h1>
        </header>
        <main>
            <div class="container">
                <div class="card-container">
                    <?php foreach ($dischi as  $disco) {?>
                    <div class="card">
                        <img src= "<?php echo $disco['poster'] ?>"
                         alt="$disco['title']">
                        <p><?php echo $disco['title'] ?></p>
                        <p><?php echo $disco['author'] ?></p>
                        <p><?php echo $disco['genre'] ?></p>
                        <p><?php echo $disco['year'] ?></p>
                    </div>
                        <?php } ?>
                </div>
            </div>
        </main>
    </body>
</html>
