<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="dist/css/app.css">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
        <title>php-ajax-dischi</title>
        <script src="https://code.jquery.com/jquery-3.5.0.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.7.6/handlebars.min.js" charset="utf-8"></script>
    </head>
    <body>
        <header>
            <div class="container">
                <div class="logo">
                    <a href="#">
                        <img src="https://i.ytimg.com/vi/hbsVBQ6VTyg/maxresdefault.jpg" alt="logo">
                    </a>
                </div>
                <div class="menu">
                    <ul>
                        <li><a href="#">Discover</a></li>
                        <li><a href="#">Generes</a></li>
                        <li><a href="#">New releases</a></li>
                        <li><a href="#">About us</a></li>
                    </ul>
                </div>
            </div>
        </header>
        <main>
            <?php include 'data.php'; ?>

            <div class="container">
                <div class="row title">
                    <h2>Eminem Playlist</h2>
                </div>
                <div class="row cards">


                </div>
                <div class="row metodo">
                    <a href="http://localhost:8888/boolean/69-php-ajax-dischi/index.php">Passa a metodo PHP</a>
                </div>
            </div>
        </main>

        <script id="albums-template" type="text/x-handlebars-template">
          <div class="card">
            <div class="cover"><img src="{{cover}}"></img></div>
            <div class="album"><span class="text">{{album}}</span></div>
            <div class="artist"><span class="text">{{artist}}</span></div>
            <div class="year"><span class="text">{{year}}</span></div>
          </div>
        </script>

        <script src="dist/js/app.js" charset="utf-8"></script>
    </body>
</html>
