$(document).ready(function() {

    if(window.location == "http://localhost:8888/boolean/69-php-ajax-dischi/index-1.php") {

        var source = $("#albums-template").html();
        var template = Handlebars.compile(source);

        $.ajax ({
            url: "http://localhost:8888/boolean/69-php-ajax-dischi/server.php",
            method:'GET',
            success: function(data) {
                for (var i = 0; i < data.length; i++) {
                    var context = {
                        cover: data[i].cover,
                        artist: data[i].artist,
                        album: data[i].album,
                        year: data[i].year
                    };
                    var templateCompiled = template(album);
                    $("main .row.cards").append(templateCompiled);
                };
            },
            error: function(error) {
                alert('BOOM');
            }
        });

    }

});
