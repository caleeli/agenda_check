<!doctype html>
<!--[if lt IE 7 ]> <html lang="en" class="ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
    <head>
        <meta name="viewport" content="width = 1050, user-scalable = no" />
        <script src="jquery.mobile/js/jquery.js"></script>
        <script type="text/javascript" src="turnjs/extras/modernizr.2.5.3.min.js"></script>
        <script src="knockout-min.js"></script>
        <link type="text/css" rel="stylesheet" href="turnjs/default.css">
        <title><?=@$_GET['titulo']?></title>
    </head>
    <body>
        <div class="sample-flipbook">
            <p>Haz clic o jala las esquinas de las páginas para avanzar o retroceder</p>
            <div class="flipbook-viewport">
                <div class="container">
                    <div class="flipbook">
                    </div>
                </div>
            </div>
        </div>

        <script src="armar/armar.js"></script>
        <script type="text/javascript">

            function loadApp() {
                var paginas = modelo.preparar();
                var $flipbook = $(".flipbook");
                $flipbook.html('');
                $flipbook.append('<div class="hard"> <center><h1><br/>Agenda 2017<h1></center> </div>');
                $flipbook.append('<div class="hard"></div>');
                paginas.forEach(function (pagina) {
                    var text = pagina.split("\n").join("<br />");
                    if (text.indexOf("caratula") >= 0) {
                        text = "<h2>" + text + "</h2>";
                    }
                    $flipbook.append('<div><br /><center>' + text + '</center></div>');
                });

                // Create the flipbook

                $('.flipbook').turn({
                    // Width

                    width: 922,
                    // Height

                    height: 600,
                    // Elevation

                    elevation: 50,
                    // Enable gradients

                    gradients: true,
                    // Auto center this flipbook

                    autoCenter: true,

                    turnCorners: 'bl,br,tl,tr,r,l',

                });
            }

            // Load the HTML4 version if there's not CSS transform

            yepnope({
                test: Modernizr.csstransforms,
                yep: ['turnjs/lib/turn.js'],
                nope: ['turnjs/lib/turn.html4.min.js'],
                both: ['armar/armar.css'],
                complete: loadApp
            });

        </script>

    </body>
</html>