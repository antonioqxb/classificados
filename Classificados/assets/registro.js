$('#BtnEnviar').click(function(){
    var user = $('#cmpUsuario').val(),
        pass = $('#cmpSenha').val();
            
    ajax('login.php',{'user':user,'pass':pass},'html',autenticacao);
        
    limparCampos();
});
    
$('#btnFacebook').click(function(){
    checkLoginState();
});

$('#btnGoogle').click(function(){
    alert('Google Plus');
});

function limparCampos() {
    $("#cmpSenha,#cmpUsuario").val("");
}

function autenticacao(resposta) {
    if(resposta=='sucesso') {
        alert("Logado!");
    }
    else {
        alert("Erro no login!");
    }
}