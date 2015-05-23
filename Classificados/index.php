<?php define('D','.'); ?>
<?php require_once D . '/includes/Config.php'; ?>
<?php require_once D . '/includes/Application.php'; ?>
<?php 
    # header("Location: ./imoveis/index.php", true);
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Classificados do Sertão - Upside Solutions&trade;</title>
        <?php Css::Load(); ?>
    </head>
    <body>
        
        
        <hr>
        
        <nav id="BarraSuperior" class="navbar navbar-fixed-top">
            <div class="col-lg-10">
                <span>Classificados do Sertão Central&trade;</span>
                <a class="Link" href="<?=D?>/index.php">Ofertas</a>
                <a class="Link active" href="<?=D?>/imoveis/index.php">Imoveis</a>
                <a class="Link" href="<?=D?>/veiculos/index.php">Veículos</a>
                <a class="Link" href="<?=D?>/produtos/index.php">Produtos</a>
                <a class="Link" href="<?=D?>/servicos/index.php">Serviços</a>
            </div>
            <div class="col-lg-2">
                <a href="<?=D?>/registrar.php" class="btn btn-default">Registrar</a>
            </div>
        </nav>
            
            <div class="col-lg-12">
                
            </div>
            <div class="col-lg-2">
                <!-- fb:login-button id="BtnFacebook" scope="public_profile,email" onlogin="checkLoginState();">
</fb:login-button>
                <a href="#" class="oculto" id="NomeSocial"></a -->
                <span>
                    <a href="registrar.php">Cadastro</a>
                </span>
            </div>
        </nav>
        
        <div id="Pagina" class="descolar container-fluid">
            <div id="PainelOfertas" class="col-lg-12">
                    
            </div>
            <div id="CadImovel" class="col-md-3">
                <div class="hoverzoom">
                    <?php Image::Set('view_casa.png','img01','image-circular'); ?>
                    <div class="retina">
                        <p>Encontre aqui a casa dos seus sonhos!</p>
                        <a href="imoveis/index.php">Saiba mais</a>
                    </div>
                </div>
            </div>
            <div id="CadVeiculos" class="col-md-3">
                <div class="hoverzoom">
                    <?php Image::Set('view_carro.jpg','img02','image-circular'); ?>
                    <div class="retina">
                        <p>Encontre aqui o seu próximo veículo!</p>
                        <a href="veiculos/index.php">Saiba mais</a>
                    </div>
                </div>
            </div>
            <div id="CadProdutos" class="col-md-3">
                <div class="hoverzoom">
                    <?php Image::Set('view_produtos.png','img03','image-circular'); ?>
                    <div class="retina">
                        <p>Os melhores produtos você encontra aqui.</p>
                        <a href="veiculos/index.php">Saiba mais</a>
                    </div>
                </div>
            </div>
            <div id="CadServicos" class="col-md-3">
                <div class="hoverzoom">
                    <?php Image::Set('view_servicos.jpg','img04','image-circular'); ?>
                    <div class="retina">
                        <p>Ache o profissional certo para te ajudar!</p>
                        <a href="veiculos/index.php">Saiba mais</a>
                    </div>
                </div>
            </div>
        </div>
        
                
        <?php JS::Load(); ?>
        <script type="text/javascript">
            $(function(){
                
            });        
        </script>
    </body>
</html>
