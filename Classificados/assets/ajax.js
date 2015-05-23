
var TIPO_JSON = 'json';
var TIPO_HTML = 'html';
var TIPO_XML = 'xml';
var TIPO_SCRIPT = 'script';


function ajax( endereco, dados, retorno, fncCallBack) {
    $.ajax({
        beforeSend : Load,
        complete: Complete,
        method:'POST',
        data: dados,
        url: endereco,
        dataType:retorno,
        statusCode : {
            404 : function() {
                alert("A página " + endereco + " não foi localizado!");
            },
            500 : Erro500
        }, 
        success: fncCallBack
    });
}

function Load() {
    $('#ImgLoad').show('slow');
}

function Complete() {
    $('#ImgLoad').hide('slow');
}

function Erro404() {
    alert("Página não encontrada!");
}

function Erro500() {
    alert("Servidor não respondeu!");
}