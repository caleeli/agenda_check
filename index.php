<!DOCTYPE html>
<html lang="en">
    <head>
        <title>AGENDA</title>
        <meta charset="utf-8" />
        <meta name="viewport" id="jb-viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1, maximum-scale=1, user-scalable=0" />
        <meta name="description" content="Una agenda diferente para tí" />
        <script src="jquery.min.js"></script>
        <style type="text/css">
            html, body, form {
                margin: 0px;
                width:100%;
                height:100%;
                overflow: hidden;
            }
            @font-face {
                font-family: MyScript;
                src: url(fonts/happynewyear.ttf);
            }
            @font-face {
                font-family: MyRounded;
                src: url(fonts/Geoma.otf);
            }
            @media screen and (orientation:portrait) {
                img.slide{
                    height: 60%;
                    text-align: center;
                    margin-top:20%;
                }
                img.menosMargin{
                    margin-left: -33%;
                }
                div.question{
                    font-size: 212%;
                }
                .slide3{
                    height: 30%;
                    overflow: hidden;
                    padding: 0px!important;
                }
                .chooseButtons {
                    height:100%;
                    top: 12%!important;
                }
                .chooseButtons a img{
                    height:100%;
                    margin: 0px;
                    width: auto!important;
                }
                .buttons3 .button {
                    font-size: 110%;
                }
            }
            @media screen and (orientation:landscape) {
                img.slide{
                    height: 100%;
                    text-align: center;
                }
                div.question{
                    font-size: 312%;
                }
                .slide3{
                    width: 33%;
                    overflow: hidden;
                    padding: 0px!important;
                }
                .chooseButtons {
                    height:100%;
                    top: 4em!important;
                    white-space: nowrap;
                }
                .chooseButtons a img{
                    width:100%;
                    margin: 0px;
                }
                .buttons3 .button {
                    font-size: 136%;
                }
            }
            input {
                width:50%;
            }
            div.slide{
                height: 100%;
                position:relative;
                display:none;
                text-align: center;
            }
            div.question{
                position:absolute;
                top:0px;
                width:100%;
                background-color: rgba(200,200,200,0.8);
                color: black;
                font-family: MyScript;
            }
            .buttons{
                position:absolute;
                top:30%;
                width:100%;
                font-family: MyRounded;
            }
            .navbar{
                position:absolute;
                bottom:0%;
                width:100%;
                font-family: MyRounded;
                text-align: left;
            }
            .button{
                padding: 1em;
                background-color: rgba(200,200,200,0.8);
                color: black;
                display: inline-block;
                font-size: 200%;
                box-shadow: 10px 10px 5px #008888
            }
            .buttons2 .button {
                font-size: 132%;
            }
            form {

            }
            input {
                font-size: 200%;
            }
            .choose{
                white-space: nowrap;
            }
        </style>
    </head>
    <body>
        <form id="form" onsubmit="doit();return false;">
            <div class="slide" id="p0">
                <div class="question">¿Cuál es tu rango de edad?</div>
                <center class="buttons">
                    <a class="button" href="javascript:void(0)" onclick="empezar(this)">12-17</a>
                    <a class="button" href="javascript:void(0)" onclick="empezar(this)">18-30</a>
                    <a class="button" href="javascript:void(0)" onclick="empezar(this)">31-45</a>
                    <a class="button" href="javascript:void(0)" onclick="empezar(this)">45-59</a>
                    <a class="button" href="javascript:void(0)" onclick="empezar(this)">Mayor a 60</a>
                </center>
                <img class="slide" src="images/p0.jpg">
            </div>
            <div class="slide" id="p1">
                <div class="question">¿Utilizas o alguna vez utilizaste agenda impresa o digital?</div>
                <center class="buttons">
                    <a class="button" href="javascript:void(0)" onclick="responder(this)">SI</a>
                    <a class="button" href="javascript:void(0)" onclick="responder(this, true)">NO</a>
                    <br/>
                    <span id="p1_porque" class="answer" placeholder="¿PORQUE?"></span>
                </center>
                <img class="slide menosMargin" src="images/p1.jpg">
                <div class="navbar">
                    <a class="button" href="javascript:void(0)" onclick="volver(this)"><img src="images/prev.png" style="height:1em"></a>
                </div>
            </div>
            <div class="slide" id="p2">
                <div class="question">¿Que tipo de agenda es de su preferencia?</div>
                <center class="buttons">
                    <span class="answer" placeholder="¿PORQUE?"></span>
                    <br/>
                    <a class="button" href="javascript:void(0)" onclick="responder(this)">DIGITAL</a>
                    <a class="button" href="javascript:void(0)" onclick="responder(this)">IMPRESA</a>
                </center>
                <div class="choose">
                    <img class="slide" src="images/p2a.jpg" style="width:50%">
                    <img class="slide" src="images/p2b.jpg" style="width:50%">
                </div>
                <div class="navbar">
                    <a class="button" href="javascript:void(0)" onclick="volver(this)"><img src="images/prev.png" style="height:1em"></a>
                </div>
            </div>
            <div class="slide" id="p2porque">
                <div class="question">¿Por qué?</div>
                <center class="buttons">
                    <span class="answer" placeholder="¿PORQUE?"></span>
                </center>
                <img class="slide" src="images/p2porque.jpg">
                <div class="navbar">
                    <a class="button" href="javascript:void(0)" onclick="volver(this)"><img src="images/prev.png" style="height:1em"></a>
                </div>
            </div>
            <div class="slide" id="p3">
                <div class="question">¿Qué le llama más la atención en una Agenda?</div>
                <center class="buttons">
                    <a class="button" href="javascript:void(0)" onclick="responder(this)">DISEÑO</a>
                    <a class="button" href="javascript:void(0)" onclick="responder(this, true, 'p3c')">TAMAÑO</a>
                </center>
                <img class="slide" src="images/p3.jpg">
                <div class="navbar">
                    <a class="button" href="javascript:void(0)" onclick="volver(this)"><img src="images/prev.png" style="height:1em"></a>
                </div>
            </div>
            <div class="slide" id="p3a">
                <div class="question">¿Qué diseño le gusta más?</div>
                <center class="buttons chooseButtons">
                    <a class="button slide3" href="javascript:void(0)" onclick="responder(this)" title="p3a"><img class="slide" src="images/p3a.jpg"></a>
                    <a class="button slide3" href="javascript:void(0)" onclick="responder(this)" title="p3b"><img class="slide slide3" src="images/p3b.jpg"></a>
                    <a class="button slide3" href="javascript:void(0)" onclick="responder(this)" title="p3c"><img class="slide slide3" src="images/p3c.jpg"></a>
                </center>
                <div class="navbar">
                    <a class="button" href="javascript:void(0)" onclick="volver(this)"><img src="images/prev.png" style="height:1em"></a>
                </div>
            </div>
            <div class="slide" id="p3b">
                <div class="question">¿Qué diseño le gusta más?</div>
                <center class="buttons chooseButtons">
                    <a class="button slide3" href="javascript:void(0)" onclick="responder(this,true,'p4')" title="p3d"><img class="slide" src="images/p3d.jpg"></a>
                    <a class="button slide3" href="javascript:void(0)" onclick="responder(this,true,'p4')" title="p3e"><img class="slide slide3" src="images/p3e.jpg"></a>
                    <a class="button slide3" href="javascript:void(0)" onclick="responder(this,true,'p4')" title="p3f"><img class="slide slide3" src="images/p3f.jpg"></a>
                </center>
                <div class="navbar">
                    <a class="button" href="javascript:void(0)" onclick="volver(this)"><img src="images/prev.png" style="height:1em"></a>
                </div>
            </div>
            <div class="slide" id="p3c">
                <div class="question">¿Qué tamaño le gusta más?</div>
                <center class="buttons chooseButtons">
                    <a class="button slide3" href="javascript:void(0)" onclick="responder(this)" title="p3g"><img class="slide" src="images/p3g.jpg"></a>
                    <a class="button slide3" href="javascript:void(0)" onclick="responder(this)" title="p3h"><img class="slide slide3" src="images/p3h.jpg"></a>
                    <a class="button slide3" href="javascript:void(0)" onclick="responder(this)" title="p3i"><img class="slide slide3" src="images/p3i.jpg"></a>
                </center>
                <div class="navbar">
                    <a class="button" href="javascript:void(0)" onclick="volver(this)"><img src="images/prev.png" style="height:1em"></a>
                </div>
            </div>
            <div class="slide" id="p4">
                <div class="question"> ¿Estaría interesada en conocer una agenda que le brinde consejos de salud, financieros y desarrollo personal?</div>
                <center class="buttons">
                    <a class="button" href="javascript:void(0)" onclick="responder(this)">SI</a>
                    <a class="button" href="javascript:void(0)" onclick="responder(this)">NO</a>
                </center>
                <img class="slide" src="images/p4.jpg">
                <div class="navbar">
                    <a class="button" href="javascript:void(0)" onclick="volver(this)"><img src="images/prev.png" style="height:1em"></a>
                </div>
            </div>
            <div class="slide" id="p5">
                <div class="question">Para usted una agenda debe ser:</div>
                <center class="buttons buttons2">
                    <a class="button" href="javascript:void(0)" onclick="responder(this)">SOBRIA Y ELEGANTE</a>
                    <a class="button" href="javascript:void(0)" onclick="responder(this)">ELEGANTE Y DIVERTIDA</a>
                    <a class="button" href="javascript:void(0)" onclick="responder(this)">COLORIDA Y ALEGRE</a>
                    <a class="button" href="javascript:void(0)" onclick="responder(this)">PRACTICA, PEQUEÑA Y SIN MUCHO DETALLE</a>
                </center>
                <img class="slide" src="images/p5.jpg">
                <div class="navbar">
                    <a class="button" href="javascript:void(0)" onclick="volver(this)"><img src="images/prev.png" style="height:1em"></a>
                </div>
            </div>
            <div class="slide" id="p6">
                <div class="question">Enumere la siguiente lista en orden de importancia (1 el más importante y 10 el menos importante):</div>
                <center class="buttons buttons3" style="bottom:4em;">
                    <a class="button" href="javascript:void(0)" onclick="ordena(this)">(0) TAMAÑO</a>
                    <a class="button" href="javascript:void(0)" onclick="ordena(this)">(0) PESO</a>
                    <a class="button" href="javascript:void(0)" onclick="ordena(this)">(0) DISEÑO DE LA TAPA</a>
                    <a class="button" href="javascript:void(0)" onclick="ordena(this)">(0) PLANIFICADOR</a>
                    <a class="button" href="javascript:void(0)" onclick="ordena(this)">(0) GUIA DE RESTAURANTES, SALONES</a>
                    <a class="button" href="javascript:void(0)" onclick="ordena(this)">(0) NOTAS</a>
                    <a class="button" href="javascript:void(0)" onclick="ordena(this)">(0) FRASES Y NOTAS INSPIRADORAS</a>
                    <a class="button" href="javascript:void(0)" onclick="ordena(this)">(0) GUIA TELEFÓNICA</a>
                    <a class="button" href="javascript:void(0)" onclick="ordena(this)">(0) CONSEJOS DE SALUD y BELLEZA</a>
                    <a class="button" href="javascript:void(0)" onclick="ordena(this)">(0) STIKERS</a>
                </center>
                <img class="slide" src="images/p6.jpg">
                <div class="navbar">
                    <a class="button" href="javascript:void(0)" onclick="volver(this)"><img src="images/prev.png" style="height:1em"></a>
                    <a class="button" style="background-color: lightgreen;float:right;" href="javascript:void(0)" onclick="responderOrden(this)"><img src="images/check.png" style="height:1em"></a>
                </div>
            </div>
            <div class="slide" id="p7">
                <div class="question">¿Le gustaría que su agenda cuente con un espacio para guardar tarjetas personales, bancarias y fotografías?</div>
                <center class="buttons">
                    <a class="button" href="javascript:void(0)" onclick="responder(this)">SI</a>
                    <a class="button" href="javascript:void(0)" onclick="responder(this)">NO</a>
                </center>
                <img class="slide" src="images/p7.jpg">
                <div class="navbar">
                    <a class="button" href="javascript:void(0)" onclick="volver(this)"><img src="images/prev.png" style="height:1em"></a>
                </div>
            </div>
            <div class="slide" id="p8">
                <div class="question">¿Le gustaría recibir mayor información de la agenda y/o aplicación para celular?</div>
                <center class="buttons">
                    <a class="button" href="javascript:void(0)" onclick="responder(this)">SI</a>
                    <a class="button" href="javascript:void(0)" onclick="responder(this,true,'gracias')">NO</a>
                </center>
                <img class="slide" src="images/p8.jpg">
                <div class="navbar">
                    <a class="button" href="javascript:void(0)" onclick="volver(this)"><img src="images/prev.png" style="height:1em"></a>
                </div>
            </div>
            <div class="slide" id="p9nombre">
                <div class="question">¿Cuál es tu nombre?</div>
                <center class="buttons">
                    <span class="answer" placeholder="NOMBRE"></span>
                </center>
                <img class="slide" src="images/p8.jpg">
                <div class="navbar">
                    <a class="button" href="javascript:void(0)" onclick="volver(this)"><img src="images/prev.png" style="height:1em"></a>
                </div>
            </div>
            <div class="slide" id="p9telefono">
                <div class="question">¿Cuál es tu número de telefono?</div>
                <center class="buttons">
                    <span class="answer" placeholder="TELÉFONO"></span>
                </center>
                <img class="slide" src="images/p8.jpg">
                <div class="navbar">
                    <a class="button" href="javascript:void(0)" onclick="volver(this)"><img src="images/prev.png" style="height:1em"></a>
                </div>
            </div>
            <div class="slide" id="p9email">
                <div class="question">¿Cuál es tu correo electrónico?</div>
                <center class="buttons">
                    <span class="answer" placeholder="E-MAIL"></span>
                </center>
                <img class="slide" src="images/p8.jpg">
                <div class="navbar">
                    <a class="button" href="javascript:void(0)" onclick="volver(this)"><img src="images/prev.png" style="height:1em"></a>
                </div>
            </div>
            <div class="slide" id="gracias">
                <center class="buttons">
                    <a class="button" href="javascript:void(0)" onclick="window.location.reload()">GRACIAS</a>
                </center>
                <center><img class="slide" src="images/gracias.jpg"></center>
            </div>
        </form>
        <script>
            var form = document.getElementById("form");
            var current = $(".slide")[0];
            var respuestas = {p1: 'SI'};
            enable(current);
            function volver() {
                $(current).fadeOut();
                enable(current.previousElementSibling);
            }
            function enable(p) {
                if (!p)
                    return;
                $(".answer").html("");
                $(p).fadeIn();
                if ($(p).find(".buttons .button").length == 0) {
                    enableTexts(p, true);
                }
                current = p;
            }
            function enableTexts(p, focus) {
                $(p).find(".answer").each(function () {
                    var elem = this;
                    var $input = $("<input />");
                    $input.attr("placeholder", $(elem).attr("placeholder"));
                    $(elem).html($input);
                    $(elem).append('<a href="javascript:void(0)" onclick="doit()"><img src="images/next.png" style="height:2em"></a>');
                    if (focus) {
                        $input.focus();
                    }
                })
            }
            function doit(next) {
                $(current).find("input").each(function () {
                    $.ajax({url: "porque.php", data: {pregunta: current.id, respuesta: this.value}});
                });
                $(current).fadeOut();
                if(!next) next = current.nextElementSibling;
                enable(next);
                return false;
            }
            function responder(who, enableText, next) {
                var pregunta = who.parentNode.parentNode;
                var ans = $(who).text();
                if (!ans)
                    ans = who.getAttribute('title');
                $.ajax({url: "respuesta.php", data: {pregunta: pregunta.id, respuesta: ans}});
                respuestas[pregunta.id] = ans;
                if (enableText) {
                    enableTexts(current);
                }
                var inputs = who.parentNode.getElementsByTagName("input");
                if(next) {
                    next=$("#"+next)[0];
                }
                if (inputs.length) {
                    inputs[0].focus();
                } else {
                    doit(next);
                }
            }
            function responderOrden(who) {
                var pregunta = who.parentNode.parentNode;
                var ans = $(who.parentNode).text();
                if (!ans)
                    ans = who.getAttribute('title');
                $.ajax({url: "respuesta.php", data: {pregunta: pregunta.id, respuesta: ans}});
                respuestas[pregunta.id] = ans;
                var inputs = who.parentNode.getElementsByTagName("input");
                if (inputs.length) {
                    inputs[0].focus();
                } else {
                    doit();
                }
            }
            function getVal(who) {
                var text = $(who).text();
                var num = 0;
                if (text.substr(0, 1) === "(") {
                    num = text.match(/\((\d+)\)/)[1] * 1;
                }
                return num;
            }
            function setVal(who, num) {
                var text = $(who).text();
                if (text.substr(0, 1) === "(") {
                    text = text.replace(/\((\d+)\)/, "(" + num + ")");
                }
                $(who).text(text);
            }
            function empezar(who) {
                var nombre = $("#nombre").val();
                var email = $("#email").val();
                var celular = $("#celular").val();
                var edad = $("#edad").val();
                $("#nombre").remove();
                $("#email").remove();
                $("#celular").remove();
                $("#edad").remove();
                $(current).fadeOut();
                enable(current.nextElementSibling);
                $.ajax({url: "empezar.php", data: {nombre: nombre, email: email, celular: celular, edad: edad}});
            }
            var actualOrden = 1;
            function ordena(who) {
                setVal(who, actualOrden);
                var num = actualOrden;//getVal(who);
                num++;
                if (num > 10)
                    num = 1;
                actualOrden = num;
                /*$(who.parentNode).find(".button").each(function(){
                 var value1 = getVal(this);
                 var elem1=this;
                 $(who.parentNode).find(".button").each(function(){
                 var value2 = getVal(this);
                 if(value1>value2) {
                 $(elem1).insertBefore(this);
                 }
                 });
                 });*/
            }
        </script>
    </body>
</html>