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
        <?php Css::Load("imoveis.css"); ?>
        <?php Css::Load("jquery-ui.structure.css"); ?>
        <?php Css::Load("jquery-ui.css"); ?>
        <?php Css::Load("jquery-ui.theme.css"); ?>
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
                <form class="form-group">
                    <fieldset>
                    <legend>Buscar meu novo lar</legend>
                        <div class="col-lg-6">
                            <select id="cidade" name="cidade" class="form-control">
                                <option value="1" selected>Quixeramobim</option>
                                <option value="3">Banabuiu</option>
                                <option value="5">Boa Viagem</option>
                                <option value="4">Pedra Branca</option>
                                <option value="2">Quixadá</option>
                            </select>
                        </div>   
                        <div class="col-lg-6">
                            <p>
                                <label for="amount">Faixa de Preços:</label>
                                <input type="text" id="amount" readonly style="border:0; color:#f6931f; font-weight:bold;">
                            </p>

                            <div id="slider-range"></div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
        
        <?php JS::Load(); ?>
        <script type="text/javascript">
            $(function(){
                $( "#slider-range" ).slider({
                    range: true,
                    min: 0,
                    max: 1000000,
                    values: [ 30000, 300000 ],
                    slide: function( event, ui ) {
                      $( "#amount" ).val( "R$ " + ui.values[ 0 ] + ",00 - R$ " + ui.values[ 1 ] + ",00" );
                    }
                });
                $( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) +
                    " - $" + $( "#slider-range" ).slider( "values", 5000 ) );
            });        
        </script>
    </body>
</html>
