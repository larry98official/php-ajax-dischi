<!--
1. Stampare a schermo una decina di dischi musicali (vedi screenshot) in due modi diversi:
   Solo con l’utilizzo di PHP, che stampa direttamente i dischi in pagina:
   al caricamento della pagina ci saranno tutti i dischi.-
    1.0 fare struttura in html
    1.1 creare un nav superiore
    1.2 crare la parte centrale
    1.3 inserire il div per le cards
    1.4 creare le card
    1.5 inserire in data.php la struttura domanda e risposta da richiamare
    1.6 richiamarla in html
    1.7 in server.php fare chiamata
2. Stampare a schermo una decina di dischi musicali (vedi screenshot) in due modi diversi:
   Attraverso l’utilizzo di AJAX: al caricamento della pagina ajax
   chiederà attraverso una chiamata i dischi a php e li stamperà attraverso handlebars.
-->

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="dist/css/app.css">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
        <title>php-ajax-dischi</title>
        <script src="https://code.jquery.com/jquery-3.5.0.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
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

                    <?php foreach ($albums as $key => $album) { ?>
                    <div class="card">
                        <div class="cover"><img src="<?php echo $album['cover']; ?>" alt=""></div>
                        <div class="album"><span class="text"><?php echo $album['title']; ?></span></div>
                        <div class="artist"><span class="text"><?php echo $album['artist']; ?></span></div>
                        <div class="year"><span class="text"><?php echo $album['year']; ?></span></div>
                    </div>
                    <?php } ?>

                </div>
                <div class="row metodo">
                    <a href="#"></a>
                </div>
            </div>
        </main>

        <script src="scr/js/app.js" charset="utf-8"></script>
    </body>
</html>
