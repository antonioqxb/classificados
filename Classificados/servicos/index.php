<?php define('D','..'); ?>
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
        <?php Css::Load("servicos.css"); ?>
    </head>
    <body>
        
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
        
        <div id="Pagina" class="descolar container-fluid">
            <div id="PainelPesquisa" class="col-lg-12">
                    
            </div>
        </div>
        
        <?php JS::Load(); ?>
        <script type="text/javascript">
            $(function(){
                
            });        
        </script>
    </body>
</html>
