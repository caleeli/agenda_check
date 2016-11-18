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
            img.slide{
                height: 100%;
                text-align: center;
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
                padding: 1em;
                background-color: rgba(200,200,200,0.8);
                color: black;
            }
            .buttons{
                position:absolute;
                top:30%;
                width:100%;
            }
            .button{
                padding: 1em;
                background-color: rgba(200,200,200,0.8);
                color: black;
                display: inline-block;
                font-size: 200%;
                box-shadow: 10px 10px 5px #008888
            }
            form {
                
            }
            input {
                font-size: 200%;
            }
        </style>
    </head>
    <body>
        <form id="form" onsubmit="doit();return false;">
        <div class="slide" id="p0">
            <center class="buttons">
                <input placeholder="NOMBRE" id="nombre" /><br>
                <input placeholder="E-MAIL" id="email" /><br>
                <input placeholder="CELULAR" id="celular" /><br>
                <input placeholder="EDAD" id="edad" /><br>
                <a class="button" href="javascript:void(0)" onclick="empezar(this)">EMPEZAR</a>
            </center>
            <img class="slide" src="images/p0.jpg">
        </div>
        <div class="slide" id="p1">
            <div class="question">¿Utilizas o alguna vez utilizaste agenda impresa o digital?</div>
            <center class="buttons">
                <span class="answer" placeholder="¿PORQUE?"></span>
                <br/>
                <a class="button" href="javascript:void(0)" onclick="responder(this)">SI</a>
                <a class="button" href="javascript:void(0)" onclick="responder(this)">NO</a>
            </center>
            <img class="slide" src="images/p1.jpg">
        </div>
        <div class="slide" id="i2a">
            <center class="buttons">
                <a class="button" href="javascript:void(0)" onclick="responder(this)" title="like"><img src="images/like.png" style="height:2em"></a>
                <a class="button" href="javascript:void(0)" onclick="responder(this)"><img src="images/next.png" style="height:2em"></a>
            </center>
            <img class="slide" src="images/i2a.jpg">
        </div>
        <div class="slide" id="i2b">
            <center class="buttons">
                <a class="button" href="javascript:void(0)" onclick="responder(this)" title="like"><img src="images/like.png" style="height:2em"></a>
                <a class="button" href="javascript:void(0)" onclick="responder(this)"><img src="images/next.png" style="height:2em"></a>
            </center>
            <img class="slide" src="images/i2b.jpg">
        </div>
        <div class="slide" id="p2">
            <div class="question">¿Que tipo de agenda es de su preferencia?</div>
            <center class="buttons">
                <span class="answer" placeholder="¿PORQUE?"></span>
                <br/>
                <a class="button" href="javascript:void(0)" onclick="responder(this)">DIGITAL</a>
                <a class="button" href="javascript:void(0)" onclick="responder(this)">IMPRESA</a>
            </center>
            <img class="slide" src="images/p2.jpg">
        </div>
        <div class="slide" id="p3">
            <div class="question">¿Qué le llama más la atención en una Agenda?</div>
            <center class="buttons">
                <a class="button" href="javascript:void(0)" onclick="responder(this)">COLOR</a>
                <a class="button" href="javascript:void(0)" onclick="responder(this)">FORMA</a>
                <a class="button" href="javascript:void(0)" onclick="responder(this)">TAMAÑO</a>
            </center>
            <img class="slide" src="images/p3.jpg">
        </div>
        <div class="slide" id="i4a">
            <center class="buttons">
                <a class="button" href="javascript:void(0)" onclick="responder(this)" title="like"><img src="images/like.png" style="height:2em"></a>
                <a class="button" href="javascript:void(0)" onclick="responder(this)"><img src="images/next.png" style="height:2em"></a>
            </center>
            <img class="slide" src="images/i4a.jpg">
        </div>
        <div class="slide" id="i4b">
            <center class="buttons">
                <a class="button" href="javascript:void(0)" onclick="responder(this)" title="like"><img src="images/like.png" style="height:2em"></a>
                <a class="button" href="javascript:void(0)" onclick="responder(this)"><img src="images/next.png" style="height:2em"></a>
            </center>
            <img class="slide" src="images/i4b.jpg">
        </div>
        <div class="slide" id="i4c">
            <center class="buttons">
                <a class="button" href="javascript:void(0)" onclick="responder(this)" title="like"><img src="images/like.png" style="height:2em"></a>
                <a class="button" href="javascript:void(0)" onclick="responder(this)"><img src="images/next.png" style="height:2em"></a>
            </center>
            <img class="slide" src="images/i4c.jpg">
        </div>
        <div class="slide" id="p4">
            <div class="question"> ¿Estaría interesada en conocer una agenda que le brinde consejos de salud, financieros y desarrollo personal?</div>
            <center class="buttons">
                <a class="button" href="javascript:void(0)" onclick="responder(this)">SI</a>
                <a class="button" href="javascript:void(0)" onclick="responder(this)">NO</a>
            </center>
            <img class="slide" src="images/p4.jpg">
        </div>
        <div class="slide" id="i5a">
            <center class="buttons">
                <a class="button" href="javascript:void(0)" onclick="responder(this)" title="like"><img src="images/like.png" style="height:2em"></a>
                <a class="button" href="javascript:void(0)" onclick="responder(this)"><img src="images/next.png" style="height:2em"></a>
            </center>
            <img class="slide" src="images/i5a.jpg">
        </div>
        <div class="slide" id="i5b">
            <center class="buttons">
                <a class="button" href="javascript:void(0)" onclick="responder(this)" title="like"><img src="images/like.png" style="height:2em"></a>
                <a class="button" href="javascript:void(0)" onclick="responder(this)"><img src="images/next.png" style="height:2em"></a>
            </center>
            <img class="slide" src="images/i5b.jpg">
        </div>
        <div class="slide" id="i5c">
            <center class="buttons">
                <a class="button" href="javascript:void(0)" onclick="responder(this)" title="like"><img src="images/like.png" style="height:2em"></a>
                <a class="button" href="javascript:void(0)" onclick="responder(this)"><img src="images/next.png" style="height:2em"></a>
            </center>
            <img class="slide" src="images/i5c.jpg">
        </div>
        <div class="slide" id="p5">
            <div class="question">Para usted una agenda debe ser:</div>
            <center class="buttons">
                <a class="button" href="javascript:void(0)" onclick="responder(this)">SOBRIA Y ELEGANTE</a>
                <a class="button" href="javascript:void(0)" onclick="responder(this)">ELEGANTE Y DIVERTIDA</a>
                <a class="button" href="javascript:void(0)" onclick="responder(this)">COLORIDA Y ALEGRE</a>
                <a class="button" href="javascript:void(0)" onclick="responder(this)">PRACTICA, PEQUEÑA Y SIN MUCHO DETALLE</a>
            </center>
            <img class="slide" src="images/p5.jpg">
        </div>
        <div class="slide" id="i6a">
            <center class="buttons">
                <a class="button" href="javascript:void(0)" onclick="responder(this)" title="like"><img src="images/like.png" style="height:2em"></a>
                <a class="button" href="javascript:void(0)" onclick="responder(this)"><img src="images/next.png" style="height:2em"></a>
            </center>
            <img class="slide" src="images/i6a.jpg">
        </div>
        <div class="slide" id="i6b">
            <center class="buttons">
                <a class="button" href="javascript:void(0)" onclick="responder(this)" title="like"><img src="images/like.png" style="height:2em"></a>
                <a class="button" href="javascript:void(0)" onclick="responder(this)"><img src="images/next.png" style="height:2em"></a>
            </center>
            <img class="slide" src="images/i6b.jpg">
        </div>
        <div class="slide" id="i6c">
            <center class="buttons">
                <a class="button" href="javascript:void(0)" onclick="responder(this)" title="like"><img src="images/like.png" style="height:2em"></a>
                <a class="button" href="javascript:void(0)" onclick="responder(this)"><img src="images/next.png" style="height:2em"></a>
            </center>
            <img class="slide" src="images/i6c.jpg">
        </div>
        <div class="slide" id="i6d">
            <center class="buttons">
                <a class="button" href="javascript:void(0)" onclick="responder(this)" title="like"><img src="images/like.png" style="height:2em"></a>
                <a class="button" href="javascript:void(0)" onclick="responder(this)"><img src="images/next.png" style="height:2em"></a>
            </center>
            <img class="slide" src="images/i6d.jpg">
        </div>
        <div class="slide" id="p6">
            <div class="question">Enumere la siguiente lista en orden de importancia (10 el más importante y 1 lo menos importante):</div>
            <center class="buttons" style="top:4em;">
                <a class="button" href="javascript:void(0)" onclick="ordena(this)">(0) TAMAÑO</a>
                <a class="button" href="javascript:void(0)" onclick="ordena(this)">(0) PESO</a>
                <a class="button" href="javascript:void(0)" onclick="ordena(this)">(0) DISEÑO DE LA TAPA</a>
                <a class="button" href="javascript:void(0)" onclick="ordena(this)">(0) PLANIFICADOR</a>
                <a class="button" href="javascript:void(0)" onclick="ordena(this)">(0) GUIA DE RESTAURANTES, SALONES, ...</a>
                <a class="button" href="javascript:void(0)" onclick="ordena(this)">(0) NOTAS</a>
                <a class="button" href="javascript:void(0)" onclick="ordena(this)">(0) FRASES Y NOTAS INSPIRADORAS</a>
                <a class="button" href="javascript:void(0)" onclick="ordena(this)">(0) GUIA TELEFÓNICA</a>
                <a class="button" href="javascript:void(0)" onclick="ordena(this)">(0) CONSEJOS DE SALUD y BELLEZA</a>
                <a class="button" href="javascript:void(0)" onclick="ordena(this)">(0) CONSEJOS DE SALUD y BELLEZA</a>
                <a class="button" style="background-color: lightgreen;" href="javascript:void(0)" onclick="responderOrden(this)"><img src="images/check.png" style="height:2em"></a>
            </center>
            <img class="slide" src="images/p6.jpg">
        </div>
        <div class="slide" id="p7">
            <div class="question">¿Le gustaría que su agenda cuente con un espacio para guardar tarjetas personales, bancarias y fotografías?</div>
            <center class="buttons">
                <a class="button" href="javascript:void(0)" onclick="responder(this)">SI</a>
                <a class="button" href="javascript:void(0)" onclick="responder(this)">NO</a>
            </center>
            <img class="slide" src="images/p7.jpg">
        </div>
        <div class="slide" id="p8">
            <div class="question">¿Le gustaría recibir mayor información de la agenda y/o aplicación para celular?</div>
            <center class="buttons">
                <a class="button" href="javascript:void(0)" onclick="responder(this)">SI</a>
                <a class="button" href="javascript:void(0)" onclick="responder(this)">NO</a>
            </center>
            <img class="slide" src="images/p8.jpg">
        </div>
        <div class="slide" id="gracias">
            <center class="buttons">
                <a class="button" href="javascript:void(0)" onclick="window.location.reload()">REINICIAR</a>
            </center>
            <center><img class="slide" src="images/gracias.jpg"></center>
        </div>
        </form>
        <script>
            var form = document.getElementById("form");
            var current = $(".slide")[0];
            var respuestas = {p1:'SI'};
            enable(current);
            function enable(p){
                if(!p) return;
                $(".answer").html("");
                $(p).find(".answer").each(function(){
                    var elem=this;
                    var $input=$("<input />");
                    $input.attr("placeholder",$(elem).attr("placeholder"));
                    $(elem).html($input);
                })
                $(p).fadeIn();
                current = p;
            }
            function doit(){
                $(current).find("input").each(function(){
                    $.ajax({url:"/porque.php",data:{pregunta:current.id,respuesta:this.value}});
                });
                $(current).fadeOut();
                enable(current.nextElementSibling);
                return false;
            }
            function responder(who) {
                var pregunta = who.parentNode.parentNode;
                var ans=$(who).text();
                if(!ans) ans=who.getAttribute('title');
                $.ajax({url:"/respuesta.php",data:{pregunta:pregunta.id,respuesta:ans}});
                respuestas[pregunta.id]=ans;
                var inputs=who.parentNode.getElementsByTagName("input");
                if(inputs.length) {
                    inputs[0].focus();
                } else {
                    doit();
                }
            }
            function responderOrden(who){
                var pregunta = who.parentNode.parentNode;
                var ans=$(who.parentNode).text();
                if(!ans) ans=who.getAttribute('title');
                $.ajax({url:"/respuesta.php",data:{pregunta:pregunta.id,respuesta:ans}});
                respuestas[pregunta.id]=ans;
                var inputs=who.parentNode.getElementsByTagName("input");
                if(inputs.length) {
                    inputs[0].focus();
                } else {
                    doit();
                }
            }
            function getVal(who){
                var text = $(who).text();
                var num =0;
                if(text.substr(0,1)==="(") {
                    num = text.match(/\((\d+)\)/)[1]*1;
                }
                return num;
            }
            function setVal(who, num){
                var text = $(who).text();
                if(text.substr(0,1)==="(") {
                    text=text.replace(/\((\d+)\)/, "("+num+")");
                }
                $(who).text(text);
            }
            function empezar(who){
                var nombre=$("#nombre").val();
                var email=$("#email").val();
                var celular=$("#celular").val();
                var edad=$("#edad").val();
                $("#nombre").remove();
                $("#email").remove();
                $("#celular").remove();
                $("#edad").remove();
                //$.ajax({url:"/empezar.php",data:{nombre:nombre,email:email,celular:celular,edad:edad}});
                $(current).fadeOut();
                enable(current.nextElementSibling);
            }
            var actualOrden=1;
            function ordena(who) {
                setVal(who, actualOrden);
                var num = actualOrden;//getVal(who);
                num++;
                if(num>10) num =1;
                actualOrden=num;
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