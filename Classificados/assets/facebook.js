// This is called with the results from from FB.getLoginStatus().
function statusChangeCallback(response) {
    if (response.status === 'connected') {
        RegistrarSessao(response);
    } else if (response.status === 'not_authorized') {
        alert("Você não autorizou o aplicativo, tente novamente!");
    } else {
        console.log("visitando apenas");
    }
}


function checkLoginState() {
    FB.getLoginStatus(function(response) {
        statusChangeCallback(response);
    });
}

window.fbAsyncInit = function() {
    FB.init({
        appId      : '842231075846736',
        xfbml      : true,
        version    : 'v2.3'
    });

    FB.getLoginStatus(function(response) {
        statusChangeCallback(response);
    });

};

// Load the SDK asynchronously
(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/sdk.js";
    fjs.parentNode.insertBefore(js, fjs);
} (document, 'script', 'facebook-jssdk'));

function RegistrarSessao( resposta ) {
    /**
    ajax('registrarLogin.php',{'id':resposta.id,'email':resposta.email},resultado);
    FB.api('/me', function(response) {
        console.log("ID: " + response.id);
        console.log("Nome: " + response.name);
        console.log("Email: " + response.email);
        console.log("Profile: " + response.profile);
    });
    **/
}
 
function enviarMensagem(rementente, destinatario, texto) {
    FB.ui({
        app_id: rementente,
        method: 'send',
        name: "Classificados do Sertão",
        link: 'https://apps.facebook.com/classificadosdosertao',
        to: destinatario,
        description:texto
    }); 
}

function resultado(res) {
    if(res=='sim') {
        alert('Sessão registrada!');
    }
    else{
        alert('Erro ao registrar a sessão!');
    }
}