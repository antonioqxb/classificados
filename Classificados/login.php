<?php define('D','.'); ?>
<?php require_once D . '/includes/Config.php'; ?>
<?php require_once D . '/includes/Application.php'; ?>
<?php 


?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Classificados do Sertão - Upside Solutions&trade;</title>
        <?php Css::Load(); ?>
        <?php Css::Load("registro.css"); ?>
    </head>
    <body>
        
        <nav id="BarraSuperior" class="nav nav-justified">
            <div class="col-lg-10">
                <span>Classificados do Sertão Central&trade;</span>
                <a class="Link" href="index.php">Ofertas</a>
            </div>
            <div class="col-lg-2">
                <!-- fb:login-button id="BtnFacebook" scope="public_profile,email" onlogin="checkLoginState();">
</fb:login-button -->
                <!-- a href="#" class="oculto" id="NomeSocial"></a-->
            </div>
        </nav>
        
        <div id="Pagina" class="descolar container-fluid">
            <div id="PainelLogin" class="row">
                <div class="col-lg-6 col-lg-offset-3">
                    <form class="form-signin">
                        <h2 class="form-signin-heading">Login</h2>
                        
                        <input type="hidden" name="token" value="<?=$request->SessionValue("token");?>" />
                        
                        <label for="cmpUsuario" class="sr-only">Usuário</label>
                        <input type="text" name="usuario" id="cmpUsuario" class="form-control" placeholder="Email ou Usuário" required autofocus>
                        
                        <label for="cmpSenha" class="sr-only">Senha</label>
                        <input type="password" name="senha" id="cmpSenha" class="form-control" placeholder="Senha" required>
                        
                        <button id="BtnEnviar" class="btn btn-lg btn-primary btn-block" type="button">Iniciar sessão</button>
                    </form>
                </div>
                
                <!-- Implementação Futura ------------------------------------->
                <!-- div class="col-lg-6 col-lg-offset-4">
                    <button id="btnFacebook" class="descolar btn btn-info">
                        <?php #Image::Set("facebook_logo.png"); ?>
                        Entre com o Facebook
                    </button>
                </div>
                <div class="col-lg-6 col-lg-offset-4">        
                    <button id="btnGoogle" class="descolar btn btn-info">
                        <?php #Image::Set("google_logo.png"); ?>
                        Entre com o Google Plus
                    </button>
                </div -->
            </div>
        </div>
                
        <?php JS::Load(); ?>
        <script type="text/javascript">
            $(function(){
                
            });        
        </script>
        <?php JS::Load("registro.js"); ?>
    </body>
</html>
