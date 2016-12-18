<?php
$title = 'Personaliza tu agenda';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Armar agenda</title>
        <link rel="shortcut icon" href="personaliza/agenda.ico">
        <meta name="description" content="Una agenda diferente para tí" />
        <link rel="stylesheet" href="jquery.mobile/css/themes/default/jquery.mobile-1.4.5.min.css">
        <link rel="stylesheet" href="jquery.mobile/_assets/css/jqm-demos.css">
        <link rel="stylesheet" href="armar/armar.css">
        <script src="jquery.mobile/js/jquery.js"></script>
        <script src="jquery.mobile/_assets/js/index.js"></script>
        <script src="jquery.mobile/js/jquery.mobile-1.4.5.min.js"></script>
        <script src="knockout-min.js"></script>
        <style id="negateDoubleBorder">
            #demo-borders .ui-collapsible-heading .ui-btn { border-top-width: 1px !important; }
        </style>
    </head>
    <body>
        <div data-role="page" class="jqm-demos">

            <div data-role="header" class="jqm-header">
                <h2><a href="jquery.mobile/" title="<?= $title ?>"><img src="images/logo.jpg" alt=""></a></h2>
                <a href="#" class="jqm-navmenu-link ui-btn ui-btn-icon-notext ui-corner-all ui-icon-bars ui-nodisc-icon ui-alt-icon ui-btn-left">Menu</a>
                <!-- a href="#" class="jqm-search-link ui-btn ui-btn-icon-notext ui-corner-all ui-icon-search ui-nodisc-icon ui-alt-icon ui-btn-right">Search</a -->
            </div><!-- /header -->

            <p>Días por pagina:</p>
            <div>
                <label><input type="text" name="dias-pagina" value="diasPagina" data-bind="textInput: diasPagina"></label>
            </div>
            <p>Cada mes empieza en:</p>
            <div>
                <label><input type="radio" name="mes-empieza" value="Domingo" data-bind="checked: mesEmpieza">Domingo</label>
                <label><input type="radio" name="mes-empieza" value="Lunes" data-bind="checked: mesEmpieza">Lunes</label>
                <label><input type="radio" name="mes-empieza" value="PrimerDia" data-bind="checked: mesEmpieza">1er día del mes</label>
                <label><input type="radio" name="mes-empieza" value="PrimerDomingo" data-bind="checked: mesEmpieza">1er Domingo del mes</label>
                <label><input type="radio" name="mes-empieza" value="PrimerLunes" data-bind="checked: mesEmpieza">1er Lunes del mes</label>
            </div>
            <p>Cuando y donde agregar frases:</p>
            <div>
                <label><input type="checkbox" name="mes-completar" value="completarAntes" data-bind="checked: completarAntes">Al principio si el mes no empieza en Domingo o Lunes</label>
                <!-- label><input type="checkbox" name="mes-completar" value="completarDespues" data-bind="checked: completarDespues">Al final de mes para completar página par</label -->
                <label><input type="checkbox" name="mes-completar" value="caratula" data-bind="checked: caratula">Carátula antes de cada mes</label>
            </div>

            <button id="calcular" type="button" data-bind="click: preparar">CALCULAR</button>
            <p>Total páginas: <b data-bind="text: totalPaginas"></b></p>
            <p>Frases Adicionales (1/2 o 1/3 de pagina): <b data-bind="text: frasesAdicionales"></b></p>
            <p>Frases Adicionales (página completa): <b data-bind="text: paginasAdicionales"></b></p>

            <a class="ui-btn" data-bind="attr:{href: preliminar}" target="_blank">VISTA PRELIMINAR</a>


            <div id="flipbook-container"></div>

            <div data-role="footer" data-position="fixed" data-tap-toggle="false" class="jqm-footer">
                <p>Tu mejor versión</p>
                <p>© 2016 Salud Verdadera La Paz</p>
            </div><!-- /footer -->


        </div><!-- /page -->
        <script src="armar/armar.js"></script>
        <script>
            ko.applyBindings(modelo);
        </script>
    </body>
</html>
