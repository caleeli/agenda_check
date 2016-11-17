<!DOCTYPE html>
<html lang="en">
    <head>
        <title>AGENDA</title>
        <meta charset="utf-8" />
        <meta name="viewport" id="jb-viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1, maximum-scale=1, user-scalable=0" />
        <meta name="description" content="This is a Juicebox Gallery. Get yours at www.juicebox.net" />
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
            }
            div.slide{
                height: 100%;
                position:relative;
                display:none;
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
        </style>
    </head>
    <body>
        <form id="form" onsubmit="doit();return false;">
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
        <div class="slide" id="gracias">
            <img class="slide" src="images/gracias.jpg">
        </div>
        </form>
        <script>
            var form = document.getElementById("form");
            var current = document.getElementById("p1");
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
                    console.log("entro");
                    $.ajax({url:"/porque.php",data:{pregunta:current.id,respuesta:this.value}});
                });
                $(current).fadeOut();
                enable(current.nextElementSibling);
                return false;
            }
            function responder(who) {
                var pregunta = who.parentNode.parentNode;
                var ans=$(who).text();
                $.ajax({url:"/respuesta.php",data:{pregunta:pregunta.id,respuesta:ans}});
                respuestas[pregunta.id]=ans;
                var inputs=who.parentNode.getElementsByTagName("input");
                if(inputs.length) {
                    inputs[0].focus();
                } else {
                    doit();
                }
            }
        </script>
    </body>
</html>