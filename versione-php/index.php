<?php include 'dischi.php' ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>php-dischi</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/handlebars@latest/dist/handlebars.js"></script>
        <link rel="stylesheet" href="../dist/app.css">
    </head>
    <body>
        <header>
            <h1>php-dischi</h1>
        </header>
        <main>
            <div class="container">
                <select id="genre-filter" name="">
                    <option value="">tutti i generi</option>
                    <?php foreach ($genres as $genre) {?>
                            <option value="<?php echo $genre ?>"><?php echo $genre ?></option>

                    <?php }  ?>
                </select>
                <div class="card-container">
                    
                </div>
            </div>
        </main>
        <script id="card-template" type="text/x-handlebars-template">
          <div class="card">
            <img src="{{poster}}" alt="{{title}}">
            <p>{{title}}</p>
            <p>{{author}}</p>
            <p>{{year}}</p>
          </div>
        </script>
        <script id="select-template" type="text/x-handlebars-template">
            <option value="{{genre}}">{{genre}}</option>
        </script>


        <script src="../dist/app.js" charset="utf-8"></script>

    </body>
</html>
