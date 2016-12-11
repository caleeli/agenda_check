<?php
$title = 'Personaliza tu agenda';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Agenda Personalizada</title>
        <link rel="shortcut icon" href="personaliza/agenda.ico">
        <meta name="description" content="Una agenda diferente para tí" />
        <link rel="stylesheet" href="jquery.mobile/css/themes/default/jquery.mobile-1.4.5.min.css">
        <link rel="stylesheet" href="jquery.mobile/_assets/css/jqm-demos.css">
        <link rel="stylesheet" href="personaliza/personaliza.css">
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
                <p>Agenda</p>
                <a href="#" class="jqm-navmenu-link ui-btn ui-btn-icon-notext ui-corner-all ui-icon-bars ui-nodisc-icon ui-alt-icon ui-btn-left">Menu</a>
                <!-- a href="#" class="jqm-search-link ui-btn ui-btn-icon-notext ui-corner-all ui-icon-search ui-nodisc-icon ui-alt-icon ui-btn-right">Search</a -->
            </div><!-- /header -->

            <div role="main" class="ui-content jqm-content" data-bind="visible: ordenLista()=='no'">

                <h2>Modelo</h2>

                <p>Escoge el modelo que mas te gusta.</p>

                <div>
                    <label><input type="radio" name="radio-choice-0" value="modelo1" data-bind="checked: modelo"><img src="personaliza/modelo1.jpg" class="tapa1"> (Bs.<span data-bind="text: costoBase"></span>)</label>
                    <label><input type="radio" name="radio-choice-0" value="modelo2" data-bind="checked: modelo"><img src="personaliza/modelo2.jpg" class="tapa1"> (Bs.<span data-bind="text: costoBase"></span>)</label>
                </div>

                <p></p>

                <h2>Personalizar</h2>

                <p>¿Deseas personalizar tu agenda?<br/>(+ Bs.<span data-bind="text: costoPersonalizar"></span>)</p>
                <select name="flip2" id="flip2" data-role="slider" data-bind="value: personalizar">
                    <option value="no">No</option>
                    <option value="si">Sí</option>
                </select>

                <div data-bind="visible: personalizar()=='si'">

                    <h2>Nombre</h2>

                    <p>¿Deseas agregar tu nombre a la agenda?</p>
                    <select name="flip2" id="flip2" data-role="slider" data-bind="value: agregarNombre">
                        <option value="no">No</option>
                        <option value="si">Sí</option>
                    </select>
                    <div data-bind="visible: agregarNombre()=='si'">
                        <p>
                            <label for="name2">Nombre:</label>
                            <input type="text" placeholder="NOMBRE" data-bind="value: nombre" value="" maxlength="7" data-clear-btn="true" style="text-transform: uppercase;"/>
                        </p>

                        <p style="position:relative">
                            <span class="nombre" data-bind="text: nombre"></span>
                            <img src="" data-bind="attr:{src:modeloUrl}" class="tapa2">
                        </p>
                    </div>

                    <h2>Color</h2>

                    <p>Escoge el color de las páginas.</p>

                    <div>
                        <label><input type="radio" name="color" value="color1" data-bind="checked: color"><img src="personaliza/color1.jpg" class="cuadrado"></label>
                        <label><input type="radio" name="color" value="color2" data-bind="checked: color"><img src="personaliza/color2.jpg" class="cuadrado"></label>
                    </div>

                    <p></p>

                    <h2>Planificador</h2>

                    <p>Escoge el tipo de planificador que te gustaria.</p>

                    <div>
                        <label><input type="radio" name="planificador" value="planificador1" data-bind="checked: planificador"><img src="personaliza/planificador1_color1.jpg" data-bind="attr: {src:'personaliza/planificador1_'+color()+'.jpg'}" class="hoja1"> Diario</label>
                        <label><input type="radio" name="planificador" value="planificador2" data-bind="checked: planificador"><img src="personaliza/planificador2_color1.jpg" data-bind="attr: {src:'personaliza/planificador2_'+color()+'.jpg'}" class="hoja1"> Semanal</label>
                    </div>
                </div>

                <h2>Foro Adicional</h2>

                <p>¿Deseas agregar un foro para guardar tus tarjetas?<br/>(+ Bs.<span data-bind="text: costoForo"></span>)</p>
                <select name="flip2" id="flip2" data-role="slider" data-bind="value: foro">
                    <option value="no">No</option>
                    <option value="si">Sí</option>
                </select>

                <h2>Entrega</h2>

                <p>Deseo que me entregen la agenda en mi casa/oficina (Solo para la ciudad de La Paz)<br/>(+ Bs.<span data-bind="text: costoEntrega"></span>)</p>
                <select name="flip2" id="flip2" data-role="slider" data-bind="value: entrega">
                    <option value="no">No</option>
                    <option value="si">Sí</option>
                </select>
                <label>¿Envuelta como regalo?</label>
                <select name="flip2" id="flip2" data-role="slider" data-bind="value: regalo">
                    <option value="no">No</option>
                    <option value="si">Sí</option>
                </select>

                <h2>Ordenar</h2>
                <label>Cantidad</label>
                <div>
                    <a href="#" class="ui-btn ui-corner-all ui-btn-inline ui-mini footer-button-left ui-btn-icon-left ui-icon-minus" data-bind="click: reducirCantidad">&nbsp;</a>
                    <span data-bind="text: cantidad">1</span>
                    <a href="#" class="ui-btn ui-corner-all ui-btn-inline ui-mini footer-button-right ui-btn-icon-right ui-icon-plus" data-bind="click: incrementarCantidad">&nbsp;</a>
                </div>

                <button type="button" class="ui-btn ui-corner-all ui-btn-a" data-bind="click: ordenar">Ordenar (Bs.<span data-bind="text: costoFinal"></span>)</button>

            </div><!-- /content -->

            <div  role="main" class="ui-content jqm-content" data-bind="visible: ordenLista()=='si'">
                <h2>Orden #<span data-bind="text: numeroOrden"></span></h2>

                <div data-bind="visible: entrega()=='si'">
                    <h2>Entrega</h2>

                    <p>Para recibir la orden ingrese su dirección completa y número de celular de referencia.</p>
                    <textarea cols="40" rows="8" class="ui-input-text ui-shadow-inset ui-body-inherit ui-corner-all ui-textinput-autogrow" style="height: 80px;" data-bind="value: direccion, disable: ordenFinalizada()=='si'"></textarea>
                </div>

                <div>
                    <h2>Pago</h2>

                    <p>Haga un depósito de <b>Bs.<span data-bind="text: costoFinal"></span></b> a la siguiente cuenta:</p>
                    <p><b><img src="personaliza/bank.png"> 900000001234 BPC<br />Vito Corleone</b></p>
                    <p>Y envie una imagen del depósito con el número de orden (#<span data-bind="text: numeroOrden"></span>) al siguiente WhatsApp:</p>
                    <p><b><img src="personaliza/whatsapp-for-web-icon-32.png"> 79600000</b></p>
                </div>

                <button type="button" class="ui-btn ui-corner-all ui-btn-a ui-btn-icon-right" data-bind="click: finalizar, disable: ordenFinalizada()=='si', css: {'ui-btn-icon-right':ordenFinalizada()=='si', 'ui-icon-check': ordenFinalizada()=='si'}">Finalizar</button>

            </div>

            <div data-role="footer" data-position="fixed" data-tap-toggle="false" class="jqm-footer">
                <p>Tu mejor versión</p>
                <p>© 2016 Salud Verdadera La Paz</p>
            </div><!-- /footer -->


        </div><!-- /page -->
        <script>
            var modelo;
            function Modelo() {
                this.ordenLista = ko.observable('no');
                this.ordenFinalizada = ko.observable('no');

                this.numeroOrden = ko.observable('');
                this.modelo = ko.observable('modelo1');
                this.personalizar = ko.observable('si');
                this.foro = ko.observable('no');
                this.entrega = ko.observable('no');
                this.regalo = ko.observable('no');
                this.agregarNombre = ko.observable('no');
                this.nombre = ko.observable('');
                this.color = ko.observable('color1');
                this.cantidad = ko.observable(1);
                this.planificador = ko.observable('planificador1');
                this.direccion = ko.observable('');
                this.modeloUrl = ko.computed(function () {
                    return 'personaliza/'+this.modelo()+'.jpg';
                }, this);

                this.costoBase = ko.observable(70);
                this.costoEntrega = ko.observable(15);
                this.costoPersonalizar = ko.observable(30);
                this.costoForo = ko.observable(40);
                this.costoFinal = ko.computed(function () {
                    return (this.entrega()=='si'?this.costoEntrega():0)+
                        this.cantidad()* (this.costoBase()+
                        (this.personalizar()=='si'?this.costoPersonalizar():0)+
                        (this.foro()=='si'?this.costoForo():0))
                    ;
                }, this);

                this.reducirCantidad=function(){
                    var c = this.cantidad();
                    c--;
                    if(c<1)c=1;
                    this.cantidad(c);
                }
                this.incrementarCantidad=function(){
                    var c = this.cantidad();
                    c++;
                    if(c<1)c=1;
                    this.cantidad(c);
                }
                this.ordenar=function(){
                    var me=this;
                    $.ajax({
                        type: "POST",
                        url: "personaliza/ordena.php",
                        data: {
                            orden:ko.toJSON(modelo)
                        },
                        dataType: "json",
                        success: function (json) {
                            if (json.response == 'captcha') {
                            } else if (json.response == 'error') {
                                alert('Se produjo un error vuelva a intentarlo');
                            } else if (json.response == 'success') {
                                me.ordenLista('si');
                                me.numeroOrden(json.numeroOrden);
                            };
                        }
                    });
                }
                this.finalizar=function(){
                    var me=this;
                    $.ajax({
                        type: "POST",
                        url: "personaliza/ordena.php",
                        data: {
                            orden:ko.toJSON(modelo)
                        },
                        dataType: "json",
                        success: function (json) {
                            if (json.response == 'captcha') {
                            } else if (json.response == 'error') {
                                alert('Se produjo un error vuelva a intentarlo');
                            } else if (json.response == 'success') {
                                me.ordenFinalizada('si');
                            };
                        }
                    });
                }
            }
            modelo=new Modelo();
            ko.applyBindings(modelo);
        </script>
    </body>
</html>
