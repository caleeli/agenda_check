var QueryString = function () {
    var query_string = {};
    var query = window.location.search.substring(1);
    var vars = query.split("&");
    for (var i = 0; i < vars.length; i++) {
        var pair = vars[i].split("=");
        // If first entry with this name
        if (typeof query_string[pair[0]] === "undefined") {
            query_string[pair[0]] = decodeURIComponent(pair[1]);
            // If second entry with this name
        } else if (typeof query_string[pair[0]] === "string") {
            var arr = [query_string[pair[0]], decodeURIComponent(pair[1])];
            query_string[pair[0]] = arr;
            // If third or later entry with this name
        } else {
            query_string[pair[0]].push(decodeURIComponent(pair[1]));
        }
    }
    return query_string;
}();
var modelo;
var primerDia = new Date(2017, 0, 1, 0, 0, 0, 0);
var ultimoDia = new Date(2018, 0, 1, 0, 0, 0, 0);
function Block() {
    this.name = ko.observable();
    this.size = ko.observable();
}
function Modelo() {
    var self = this;
    this.diasPagina = ko.observable("4-3");
    this.mesEmpieza = ko.observable("Domingo");
    this.completarAntes = ko.observable(false);
    //this.completarDespues = ko.observable(true);
    this.caratula = ko.observable(true);
    this.totalPaginas = ko.observable("?");
    this.frasesAdicionales = ko.observable("?");
    this.paginasAdicionales = ko.observable("?");
    this.preparar = function () {
        var dia;
        var diasPagina = [];
        var mesEmpieza = this.mesEmpieza();
        var completarAntes = this.completarAntes();
        //var completarDespues = this.completarDespues();
        var caratula = this.caratula();
        self.diasPagina().trim().split("-").forEach(function (d) {
            if (d) {
                diasPagina.push(d * 1);
            }
        })
        dia = primerDia;
        var mes = 0;
        var paginas = [];
        var pagina = [];
        var primeraSemana = true;
        var DIA1, COMPLETAR1;
        var ttl = 33 * 3;
        switch (mesEmpieza) {
            case "Lunes":
            case "PrimerLunes":
                dia = addDate(dia, -7 + 1);
                mes = 11;
                break;
            default:
                dia = addDate(dia, -7);
                mes = 11;
                break;
        }
        function insertarCaratula(mes) {
            //compaginar
            pagina = compaginar(paginas, pagina, diasPagina, "[completar]");
            //caratula
            if (caratula) {
                if ((paginas.length % 2) == 1) {
                    paginas.push("[completar 1 pagina]");
                }
            }
            paginas.push(
                "[caratula " +
                ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"][(mes + 1) % 12] +
                "]"
                );
            paginas.push("");
        }
        while (dia < ultimoDia) {
            //console.log("[" + getDay(dia) + " " + dia.getDate() + "-" + getMonth(dia) + "] / " + mes);
            if (caratula) {
                switch (mesEmpieza) {
                    case "Domingo":
                    case "Lunes":
                        DIA1 = mesEmpieza === 'Domingo' ? 0 : 1;
                        if (dia.getMonth() !== mes) {
                            insertarCaratula(mes);
                            //completar semana
                            var dia0 = primerDiaSemana(dia, mesEmpieza);
                            while (dia0 < dia) {
                                if (completarAntes) {
                                    pagina.push("[completar]");
                                } else {
                                    pagina.push("[" + getDay(dia0) + " " + dia0.getDate() + "-" + getMonth(dia0) + "]");
                                }
                                dia0 = addDate(dia0, 1);
                            }
                            mes = (mes + 1) % 12;
                        }
                        break;
                    case "PrimerDia":
                        if (dia.getMonth() !== mes) {
                            insertarCaratula(mes);
                            mes = (mes + 1) % 12;
                        }
                        break;
                    case "PrimerDomingo":
                    case "PrimerLunes":
                        if (esSemanaCompletaDelMes(dia, (mes + 1) % 12, mesEmpieza)) {
                            insertarCaratula(mes);
                            mes = (mes + 1) % 12;
                        }
                        break;
                }
            }
            //add day
            pagina.push("[" + getDay(dia) + " " + dia.getDate() + "-" + getMonth(dia) + "]");
            pagina = compaginar(paginas, pagina, diasPagina, false);
            // dia++
            dia = addDate(dia, 1);
            ttl--;
            //if (ttl < 0)
            //    break;
        }
        pagina = compaginar(paginas, pagina, diasPagina, "[completar]");
        //console.log(paginas);
        //console.log(paginas.length);
        self.totalPaginas(paginas.length);
        var frasesAdicionales = 0;
        var paginasAdicionales = 0;
        paginas.forEach(function (pagina) {
            if (pagina === '[completar 1 pagina]') {
                paginasAdicionales++;
            } else {
                if (pagina.indexOf("[completar ") >= 0) {
                    frasesAdicionales++;
                }
            }
        })
        self.frasesAdicionales(frasesAdicionales);
        self.paginasAdicionales(paginasAdicionales);
        return paginas;
    }
    this.preliminar = ko.computed(function () {
        return 'preview.php?diasPagina='+encodeURIComponent(self.diasPagina())+
            '&mesEmpieza='+encodeURIComponent(self.mesEmpieza())+
            '&completarAntes='+encodeURIComponent(self.completarAntes()?'1':'0')+
            '&caratula='+encodeURIComponent(self.caratula()?'1':'0')
            ;
    }, this);
}
function getDay(dia) {
    return ["Dom", "Lun", "Mar", "Mié", "Jue", "Vie", "Sab"][dia.getDay()];
}
function getMonth(dia) {
    return ["Ene", "Feb", "Mar", "Abr", "May", "Jun", "Jul", "Ago", "Sep", "Oct", "Nov", "Dic"][dia.getMonth()];
}
function addDate(dia0, dias) {
    var dia = new Date();
    dia.setTime(dia0.getTime() + dias * 86400000);
    return dia;
}
function compaginar(paginas, pagina0, diasPagina, completar) {
    var j;
    var pagina = pagina0.slice();
    while (pagina.length >= diasPagina[j = paginas.length % diasPagina.length]) {
        var pag = [];
        for (var i = 0; i < diasPagina[j]; i++) {
            pag.push(pagina.shift());
        }
        pag = unirCompletar(pag);
        paginas.push(pag.join("\n"));
    }
    if (completar && pagina.length > 0) {
        for (var i = pagina.length; i < diasPagina[j]; i++) {
            pagina.push(completar);
        }
        pagina = unirCompletar(pagina);
        paginas.push(pagina.join("\n"));
        pagina = [];
    }
    return pagina;
}
function unirCompletar(pagina) {
    var size = pagina.length;
    var l = pagina.indexOf("[completar]");
    if (l === -1)
        return pagina;
    var todo = size - l;
    var pag = [];
    var completar = todo + "/" + size;
    if (completar === "2/4")
        completar = "1/2";
    if (completar === "3/6")
        completar = "1/2";
    if (completar === "2/6")
        completar = "1/3";
    if (l === 0)
        completar = "1";
    for (var i = 0; i < l; i++) {
        pag.push(pagina[i]);
    }
    pag.push("[completar " + completar + " pagina]");
    return pag;
}
function primerDiaSemana(dia0, mesEmpieza) {
    var DIA1;
    var dia = new Date();
    dia.setTime(dia0.getTime());
    switch (mesEmpieza) {
        case "Domingo":
            DIA1 = 0;
            break;
        case "Lunes":
            DIA1 = 1;
            break;
        case "PrimerDia":
            break;
        case "PrimerDomingo":
            DIA1 = 0;
            break;
        case "PrimerLunes":
            DIA1 = 1;
            break;
    }
    for (var i = 0; i < 7; i++) {
        if (dia.getDay() === DIA1) {
            break;
        }
        dia.setTime(dia.getTime() - 1 * 86400000);
    }
    return dia;
}
function tieneDiasSgteMes(dia0, mes, mesEmpieza) {
    var primerDia = primerDiaSemana(dia0, mesEmpieza);
    var ultimoDia = addDate(primerDia, 6);
    return (mes !== ultimoDia.getMonth());
}
function esSemanaCompletaDelMes(dia0, mes, mesEmpieza) {
    var primerDia = primerDiaSemana(dia0, mesEmpieza);
    var ultimoDia = addDate(primerDia, 6);
    return (mes === primerDia.getMonth()) && (mes === ultimoDia.getMonth());
}
modelo = new Modelo();

if (typeof QueryString.diasPagina === 'string') {
    modelo.diasPagina(QueryString.diasPagina);
}
if (typeof QueryString.mesEmpieza === 'string') {
    modelo.mesEmpieza(QueryString.mesEmpieza);
}
if (typeof QueryString.completarAntes === 'string') {
    modelo.completarAntes(QueryString.completarAntes === '1');
}
if (typeof QueryString.caratula === 'string') {
    modelo.caratula(QueryString.caratula === '1');
}
